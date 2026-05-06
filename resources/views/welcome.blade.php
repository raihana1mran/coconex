<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coconex - Fresh Juice & More</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700;800&family=Be+Vietnam+Pro:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@0..1" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Be Vietnam Pro', sans-serif; background: #fffaf5; color: #1a1c1e; }
        h1, h2, h3 { font-family: 'Plus Jakarta Sans', sans-serif; }
        
        .header { background: white; padding: 16px 24px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #ffe8d6; position: sticky; top: 0; z-index: 100; }
        .logo { font-size: 28px; font-weight: 800; color: #ff7e21; }
        .nav-links { display: flex; gap: 20px; align-items: center; }
        .nav-links a { text-decoration: none; color: #584236; font-weight: 600; }
        
        .hero { background: linear-gradient(135deg, #fff5eb 0%, #ffe8d6 100%); padding: 60px 24px; text-align: center; }
        .hero h1 { font-size: 48px; font-weight: 800; color: #ff7e21; margin-bottom: 16px; }
        .hero p { font-size: 18px; color: #666; margin-bottom: 24px; }
        .btn { padding: 14px 28px; border-radius: 12px; font-weight: 600; cursor: pointer; border: none; display: inline-flex; align-items: center; gap: 8px; }
        .btn-orange { background: #ff7e21; color: white; }
        .btn-orange:hover { background: #e56e1a; }
        
        .container { max-width: 1200px; margin: 0 auto; padding: 40px 24px; }
        .section-title { text-align: center; margin-bottom: 40px; }
        .section-title h2 { font-size: 32px; font-weight: 700; color: #1a1c1e; }
        
        .products-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 24px; }
        .product-card { background: white; border-radius: 20px; padding: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); transition: transform 0.2s; }
        .product-card:hover { transform: translateY(-4px); }
        .product-img { width: 100%; aspect-ratio: 1; object-fit: cover; border-radius: 12px; background: #f9f9f9; }
        .product-name { font-weight: 700; font-size: 18px; margin: 12px 0 8px; }
        .product-price { font-size: 20px; font-weight: 700; color: #ff7e21; }
        .product-category { font-size: 12px; color: #999; text-transform: uppercase; }
        
        .order-btn { width: 100%; margin-top: 12px; }
        
        .modal { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; align-items: center; justify-content: center; }
        .modal.active { display: flex; }
        .modal-content { background: white; border-radius: 20px; padding: 32px; max-width: 400px; width: 90%; max-height: 90vh; overflow-y: auto; }
        .modal-close { float: right; font-size: 24px; cursor: pointer; }
        
        .form-group { margin-bottom: 16px; }
        .form-group label { display: block; font-weight: 600; margin-bottom: 6px; }
        .form-group input, .form-group select { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 10px; }
        
        .footer { background: #1a1c1e; color: white; padding: 40px 24px; text-align: center; }
        .footer a { color: #ff7e21; }
        
        @media (max-width: 768px) {
            .hero h1 { font-size: 32px; }
            .products-grid { grid-template-columns: repeat(2, 1fr); }
        }
    </style>
</head>
<body>
    <header class="header">
        <span class="logo">Coconex</span>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/cms">Admin</a>
            <a href="/contact">Contact</a>
        </div>
    </header>

    <section class="hero">
        <h1>Fresh & Delicious</h1>
        <p>Order your favorite juice, snacks & more online</p>
        <a href="#products" class="btn btn-orange">
            <span class="material-symbols-outlined">arrow_downward</span>
            Browse Menu
        </a>
    </section>

    <main class="container" id="products">
        <div class="section-title">
            <h2>Our Menu</h2>
        </div>
        
        @if($products->count() == 0)
            <p style="text-align:center;color:#999;padding:40px;">No products available yet.</p>
        @else
            <div class="products-grid">
                @foreach($products as $product)
                <div class="product-card">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="product-img" onerror="this.src='https://placehold.co/300x300/ff7e21/white?text=No+Image'">
                    <p class="product-category">{{ $product->category }}</p>
                    <h3 class="product-name">{{ $product->name }}</h3>
                    <p class="product-price">₹{{ $product->price }}</p>
                    <button class="btn btn-orange order-btn" onclick="openOrderModal({{ $product->id }}, '{{ $product->name }}', {{ $product->price }})">
                        <span class="material-symbols-outlined">shopping_cart</span>
                        Order Now
                    </button>
                </div>
                @endforeach
            </div>
        @endif
    </main>

    <div class="modal" id="orderModal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal()">&times;</span>
            <h2 style="margin-bottom:20px;">Place Order</h2>
            <form id="orderForm" method="POST" action="{{ route('orders.store') }}">
                @csrf
                <input type="hidden" id="productId" name="product_id">
                
                <div class="form-group">
                    <label>Product</label>
                    <input type="text" id="productName" readonly>
                </div>
                
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" name="quantity" value="1" min="1" required>
                </div>
                
                <div class="form-group">
                    <label>Your Name</label>
                    <input type="text" name="customer_name" required placeholder="Enter your name">
                </div>
                
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="tel" name="phone_number" required placeholder="Enter phone number">
                </div>
                
                <div class="form-group">
                    <label>Delivery Address</label>
                    <input type="text" name="delivery_address" required placeholder="Enter address">
                </div>
                
                <div class="form-group">
                    <label>Sugar Level</label>
                    <select name="sugar_level">
                        <option value="normal">Normal</option>
                        <option value="less">Less Sugar</option>
                        <option value="no">No Sugar</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Size</label>
                    <select name="size">
                        <option value="regular">Regular</option>
                        <option value="large">Large (+₹20)</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-orange" style="width:100%;">
                    <span class="material-symbols-outlined">check</span>
                    Place Order
                </button>
            </form>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2025 Coconex. All rights reserved.</p>
    </footer>

    <script>
        function openOrderModal(id, name, price) {
            document.getElementById('productId').value = id;
            document.getElementById('productName').value = name + ' - ₹' + price;
            document.getElementById('orderModal').classList.add('active');
        }
        
        function closeModal() {
            document.getElementById('orderModal').classList.remove('active');
        }
        
        document.getElementById('orderModal').addEventListener('click', function(e) {
            if (e.target === this) closeModal();
        });
    </script>
</body>
</html>