<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;

class PaymentController extends Controller
{
    private $api;

    public function __construct()
    {
        $keyId = config('services.razorpay.key_id');
        $keySecret = config('services.razorpay.key_secret');
        $this->api = new Api($keyId, $keySecret);
    }

    public function createOrder(Request $request)
    {
        try {
            $amount = $request->input('amount', 40000);
            
            // Convert to paise (multiply by 100)
            $amountInPaise = $amount * 100;
            
            $order = $this->api->order->create([
                'amount' => $amountInPaise,
                'currency' => 'INR',
                'payment_capture' => 1
            ]);

            return response()->json([
                'order_id' => $order->id,
                'amount' => $order->amount,
                'key_id' => config('services.razorpay.key_id')
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'description' => $e->getMessage()
            ], 500);
        }
    }

    public function verifyPayment(Request $request)
    {
        $attributes = [
            'razorpay_order_id' => $request->razorpay_order_id,
            'razorpay_payment_id' => $request->razorpay_payment_id,
            'razorpay_signature' => $request->razorpay_signature
        ];

        try {
            $this->api->utility->verifyPaymentSignature($attributes);
            return response()->json(['status' => 'success', 'message' => 'Payment verified']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 400);
        }
    }
}