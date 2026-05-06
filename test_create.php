<?php
include __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Product;

$p = new Product();
$p->name = 'Test Coconut ' . date('His');
$p->price = 45;
$p->image = 'products/juice_pro_1-removebg-preview.png';
$p->category = 'juice';
$p->flavour = 'test';
$p->status = 'in_stock';
$p->save();

echo "Created product ID: " . $p->id . PHP_EOL;
echo "Total products: " . Product::count() . PHP_EOL;