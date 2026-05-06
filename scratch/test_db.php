<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$products = App\Models\Product::all();
echo "Count: " . count($products) . "\n";
foreach($products as $p) {
    echo $p->name . " - " . $p->price . "\n";
}
