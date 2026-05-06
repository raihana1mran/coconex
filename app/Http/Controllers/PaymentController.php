<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;

class PaymentController extends Controller
{
    protected $razorpay;

    public function __construct()
    {
        $keyId = config('services.razorpay.key_id');
        $keySecret = config('services.razorpay.key_secret');
        
        if ($keyId && $keySecret) {
            $this->razorpay = new Api($keyId, $keySecret);
        }
    }

    public function createOrder(Request $request)
    {
        $data = $request->validate([
            'amount' => 'required|numeric|min:1',
            'product_name' => 'required',
        ]);

        if (!$this->razorpay) {
            return response()->json(['error' => 'Razorpay not configured'], 500);
        }

        try {
            $order = $this->razorpay->order->create([
                'amount' => $data['amount'] * 100,
                'currency' => 'INR',
                'receipt' => uniqid(),
                'notes' => ['product' => $data['product_name']]
            ]);

            return response()->json([
                'id' => $order->id,
                'amount' => $order->amount,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function verifyPayment(Request $request)
    {
        $data = $request->validate([
            'razorpay_payment_id' => 'required',
            'razorpay_order_id' => 'required',
            'razorpay_signature' => 'required',
        ]);

        if (!$this->razorpay) {
            return response()->json(['error' => 'Razorpay not configured'], 500);
        }

        try {
            $signature = $data['razorpay_order_id'] . '|' . $data['razorpay_payment_id'];
            $expectedSignature = hash_hmac('sha256', $signature, config('services.razorpay.key_secret'));

            if ($expectedSignature === $data['razorpay_signature']) {
                return response()->json(['status' => 'success']);
            }

            return response()->json(['error' => 'Invalid signature'], 400);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}