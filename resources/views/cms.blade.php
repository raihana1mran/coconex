<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coconex CMS</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700;800&family=Be+Vietnam+Pro:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@0..1" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Be Vietnam Pro', sans-serif; background: #f9f9fc; color: #1a1c1e; min-height: 100vh; }
        h1, h2, h3 { font-family: 'Plus Jakarta Sans', sans-serif; }
        .container { max-width: 1200px; margin: 0 auto; padding: 20px; }
        .header { background: white; padding: 16px 24px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eee; position: sticky; top: 0; z-index: 100; }
        .logo { font-size: 24px; font-weight: 800; color: #ff7e21; }
        
        .btn { padding: 10px 20px; border-radius: 8px; font-weight: 600; cursor: pointer; border: none; transition: all 0.2s; display: inline-flex; align-items: center; gap: 6px; }
        .btn-orange { background: #ff7e21; color: white; }
        .btn-orange:hover { background: #e56e1a; }
        .btn-green { background: #b3f733; color: #4c6f00; }
        .btn-green:hover { background: #99da02; }
        .btn-red { background: #ffdad6; color: #ba1a1a; }
        .btn-red:hover { background: #ffb4a8; }
        .btn-gray { background: #e2e2e5; color: #584236; }
        .btn-gray:hover { background: #d0d0d3; }
        .btn-outline { background: transparent; border: 2px solid #ff7e21; color: #ff7e21; }
        .btn-outline:hover { background: #ff7e21; color: white; }
        
        .btn-full { width: 100%; justify-content: center; }
        .btn-sm { padding: 8px 14px; font-size: 13px; }
        
        .card { background: white; border-radius: 24px; padding: 24px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); margin-bottom: 20px; }
        .grid { display: grid; gap: 20px; }
        .grid-4 { grid-template-columns: repeat(4, 1fr); gap: 16px; }
        .grid-3 { grid-template-columns: repeat(3, 1fr); gap: 16px; }
        .grid-2 { grid-template-columns: repeat(2, 1fr); gap: 16px; }
        
        .badge { display: inline-block; padding: 4px 10px; border-radius: 20px; font-size: 11px; font-weight: 600; }
        .badge-green { background: #b3f733; color: #4c6f00; }
        .badge-red { background: #ffdad6; color: #ba1a1a; }
        .badge-orange { background: #ffe0b2; color: #ff7e21; }
        .badge-blue { background: #e3f2fd; color: #1565c0; }
        
        .form-group { margin-bottom: 14px; }
        .form-group label { display: block; font-weight: 600; margin-bottom: 6px; color: #584236; font-size: 13px; }
        .form-group input, .form-group select { width: 100%; padding: 10px 14px; border: 1px solid #dfc0b1; border-radius: 10px; font-size: 14px; background: white; }
        .form-group input:focus, .form-group select:focus { outline: none; border-color: #ff7e21; }
        
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
        
        .product-actions { display: flex; gap: 8px; margin-top: 10px; }
        
        .edit-form { display: none; margin-top: 14px; padding-top: 14px; border-top: 1px solid #e2e2e5; }
        .edit-form.active { display: block; }
        
        .links { display: flex; gap: 10px; margin: 24px 0; overflow-x: auto; }
        .links a { padding: 12px 24px; border-radius: 50px; font-weight: 600; text-decoration: none; white-space: nowrap; }
        .links a.active { background: #ff7e21; color: white; }
        .links a.inactive { background: #f3f3f6; color: #584236; }
        .links a.inactive:hover { background: #e2e2e5; }
        
        .order-card { display: flex; align-items: center; gap: 12px; padding: 12px; background: #f3f3f6; border-radius: 12px; margin-bottom: 10px; }
        .order-card:hover { background: #e2e2e5; }
        
        .flex { display: flex; }
        .flex-1 { flex: 1; }
        .items-center { align-items: center; }
        .justify-between { justify-content: space-between; }
        .gap-2 { gap: 8px; }
        .gap-4 { gap: 16px; }
        .text-orange { color: #ff7e21; }
        .text-green { color: #4c6f00; }
.text-red { color: #ba1a1a; }
        
        /* Add Product Grid */
        .add-product-grid { display: grid; grid-template-columns: 1fr 2fr; gap: 24px; }
        .upload-column { }
        .form-column { }
        
        /* Manage Products Grid */
        .manage-products-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
        
        /* Product Card Layout */
        .product-card { background: #f3f3f6; border-radius: 16px; padding: 12px; display: flex; flex-direction: column; gap: 8px; }
        .product-card:hover { background: #eeeef0; }
        .product-card-img { width: 100%; aspect-ratio: 1/1; object-fit: contain; background: white; border-radius: 8px; }
        .product-card-info { display: flex; flex-direction: column; gap: 4px; }
        .product-card-name { font-weight: 700; font-size: 14px; line-height: 1.2; overflow: hidden; text-overflow: ellipsis; }
        .product-card-price { font-weight: 700; color: #ff7e21; font-size: 16px; }
        .product-card-category { font-size: 11px; color: #999; text-transform: capitalize; }
        
        /* Orders List */
        .orders-list { display: flex; flex-direction: column; gap: 12px; }
        .order-card-full { background: #f3f3f6; border-radius: 12px; padding: 16px; }
        .order-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px; }
        .order-details { font-size: 13px; color: #666; }
        .order-details p { margin-bottom: 4px; }
        
        @media (max-width: 1024px) {
            .manage-products-grid { grid-template-columns: repeat(2, 1fr); }
        }
        
        @media (max-width: 768px) {
            .grid-4 { grid-template-columns: 1fr; }
            .grid-3 { grid-template-columns: 1fr; }
            .grid-2 { grid-template-columns: 1fr; }
            .grid-4.products-grid { grid-template-columns: repeat(2, 1fr); }
            .form-row { grid-template-columns: 1fr; }
            .header { flex-direction: column; gap: 12px; text-align: center; }
            .container { padding: 12px; }
            .card { padding: 16px; border-radius: 16px; }
            .add-product-grid { grid-template-columns: 1fr; }
            .manage-products-grid { grid-template-columns: 1fr 1fr; gap: 12px; }
            .product-card { padding: 10px; }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="flex items-center gap-4">
            <a href="/" style="text-decoration:none;"><span class="logo">←</span></a>
            <span class="logo">Coconex</span>
            <span style="color:#999;">/ CMS</span>
        </div>
        <div class="flex items-center gap-2">
            <span style="color:#999;font-size:14px;">Master Admin</span>
            <div style="width:40px;height:40px;background:#ffe0b2;border-radius:50%;display:flex;align-items:center;justify-content:center;">
                <span class="material-symbols-outlined" style="color:#ff7e21;">person</span>
            </div>
        </div>
    </header>

    <main class="container">
        @if(session('success'))
        <div style="background:#b3f733;color:#4c6f00;padding:16px;border-radius:12px;margin-bottom:20px;display:flex;align-items:center;gap:8px;">
            <span class="material-symbols-outlined">check_circle</span>
            {{ session('success') }}
        </div>
        @endif

        @if($errors->any())
        <div style="background:#ffdad6;color:#ba1a1a;padding:16px;border-radius:12px;margin-bottom:20px;">
            <strong>Error:</strong>
            <ul style="margin-top:8px;padding-left:16px;">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <h1 style="font-size:36px;font-weight:800;color:#ff7e21;margin-bottom:8px;">Dashboard</h1>
        <p style="color:#999;margin-bottom:24px;">Manage your products & orders</p>

        <!-- Dashboard Stats -->
        <div class="grid grid-4 mb-4">
            <div class="card text-center" style="padding:16px;">
                <span class="material-symbols-outlined" style="font-size:24px;color:#ff7e21;">inventory_2</span>
                <p style="font-size:28px;font-weight:700;color:#ff7e21;">{{ $products->count() }}</p>
                <p style="font-size:11px;color:#999;">Products</p>
            </div>
            <div class="card text-center" style="padding:16px;">
                <span class="material-symbols-outlined" style="font-size:24px;color:#4c6f00;">check_circle</span>
                <p style="font-size:28px;font-weight:700;color:#4c6f00;">{{ $products->where('status', 'in_stock')->count() }}</p>
                <p style="font-size:11px;color:#999;">In Stock</p>
            </div>
            <div class="card text-center" style="padding:16px;">
                <span class="material-symbols-outlined" style="font-size:24px;color:#1565c0;">shopping_cart</span>
                <p style="font-size:28px;font-weight:700;color:#1565c0;">{{ $orderCount }}</p>
                <p style="font-size:11px;color:#999;">Orders</p>
            </div>
            <div class="card text-center" style="padding:16px;">
                <span class="material-symbols-outlined" style="font-size:24px;color:#ba1a1a;">currency_rupee</span>
                <p style="font-size:28px;font-weight:700;color:#ba1a1a;">₹{{ $totalEarnings ?? 0 }}</p>
                <p style="font-size:11px;color:#999;">Revenue</p>
            </div>
        </div>

        <!-- Live Orders Section -->
        @if($recentOrders->count() > 0)
        <div class="card mb-4">
            <h3 style="margin-bottom:16px;font-weight:700;display:flex;align-items:center;gap:8px;">
                <span class="material-symbols-outlined" style="color:#1565c0;">local_shipping</span>
                Live Orders ({{ $recentOrders->count() }})
            </h3>
            @foreach($recentOrders as $order)
            <div class="order-card">
                <div style="width:40px;height:40px;background:#ffe0b2;border-radius:50%;display:flex;align-items:center;justify-content:center;">
                    <span class="material-symbols-outlined" style="color:#ff7e21;">receipt</span>
                </div>
                <div class="flex-1">
                    <p style="font-weight:600;">{{ $order->customer_name }}</p>
                    <p style="font-size:12px;color:#999;">Product #{{ $order->product_id }} × {{ $order->quantity }}</p>
                </div>
                <div class="text-right">
                    <p style="font-weight:700;color:#ff7e21;">₹{{ $order->total_price }}</p>
                    <span class="badge {{ $order->status == 'completed' ? 'badge-green' : ($order->status == 'cancelled' ? 'badge-red' : 'badge-orange') }}">
                        {{ ucfirst($order->status) }}
                    </span>
                </div>
            </div>
            @endforeach
        </div>
        @endif

        <!-- Tab Links -->
        <div class="links">
            <a href="#add" class="active" id="link-add" onclick="showSection('add')">Add Product</a>
            <a href="#manage" class="inactive" id="link-manage" onclick="showSection('manage')">Manage Products ({{ $products->count() }})</a>
            <a href="#orders" class="inactive" id="link-orders" onclick="showSection('orders')">Live Orders ({{ $orderCount }})</a>
        </div>

        <!-- Add Product Section -->
        <div id="section-add">
            <div class="card">
                <form action="{{ route('cms.store') }}" method="POST" enctype="multipart/form-data" class="add-product-grid">
                    @csrf
                    <!-- Image Upload Column -->
                    <div class="upload-column">
                        <h3 style="margin-bottom:16px;font-weight:700;color:#ff7e21;">Product Image</h3>
                        <div style="background:#fce4ec;padding:14px;border-radius:12px;margin-bottom:14px;">
                            <p style="font-size:13px;font-weight:600;color:#8d004f;margin-bottom:8px;">How to prepare:</p>
                            <ol style="font-size:11px;color:#584236;padding-left:14px;line-height:1.6;">
                                <li>Take a photo</li>
                                <li>Go to <a href="https://remove.bg" target="_blank" style="color:#ff7e21;">remove.bg</a></li>
                                <li>Download PNG</li>
                                <li>Upload below</li>
                            </ol>
                        </div>
                        <div style="border:2px dashed #dfc0b1;border-radius:14px;padding:30px;text-align:center;cursor:pointer;margin-bottom:14px;" onclick="document.getElementById('image').click()">
                            <span class="material-symbols-outlined" style="font-size:40px;color:#8b7264;">image</span>
                            <p style="margin-top:6px;font-size:13px;">Tap to select</p>
                            <input type="file" id="image" name="image" accept="image/png" required style="display:none;" onchange="this.parentElement.querySelector('p').textContent = this.files[0].name">
                        </div>
                        <button type="submit" class="btn btn-orange btn-full">
                            <span class="material-symbols-outlined">publish</span>
                        </button>
                        <a href="/" class="btn btn-outline btn-full" style="margin-top:10px;text-decoration:none;">
                            <span class="material-symbols-outlined">visibility</span>
                        </a>
                    </div>
                    
                    <!-- Form Fields Column -->
                    <div class="form-column">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="name" required placeholder="e.g. Tropical Sunrise">
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Price (₹)</label>
                                <input type="number" name="price" required placeholder="99">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category" required>
                                    <option value="juice">Juice</option>
                                    <option value="snacks">Snacks</option>
                                    <option value="starter">Starter</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" required>
                                <option value="in_stock" selected>In Stock</option>
                                <option value="out_of_stock">Out of Stock</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Flavour (optional)</label>
                            <input type="text" name="flavour" placeholder="e.g. Orange">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Manage Products Section -->
        <div id="section-manage" style="display:none;">
            <div class="card">
                <h3 style="margin-bottom:16px;font-weight:700;">Manage Products ({{ $products->count() }})</h3>
                
                <div class="manage-products-grid">
                @if($products->count() == 0)
                    <p style="text-align:center;padding:40px;color:#999;grid-column:span 4;">No products yet</p>
                @else
                    @foreach($products as $product)
                    <div class="product-card">
                        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="product-card-img" onerror="this.src='https://placehold.co/80x80/ff7e21/white?text=?'">
                        <div class="product-card-info">
                            <h4 class="product-card-name">{{ $product->name }}</h4>
                            <p class="product-card-price">₹{{ $product->price }}</p>
                            <p class="product-card-category">{{ $product->category }}</p>
                            <span class="badge {{ $product->status == 'in_stock' ? 'badge-green' : 'badge-red' }}">
                                {{ $product->status == 'in_stock' ? 'In Stock' : 'Out of Stock' }}
                            </span>
                        </div>
                        
                        <div class="product-actions">
                            <button type="button" class="btn btn-orange btn-sm" onclick="toggleEdit({{ $product->id }})">
                                <span class="material-symbols-outlined" style="font-size:16px;">edit</span>
                            </button>
                            <form action="{{ route('cms.destroy', $product->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-red btn-sm" onclick="return confirm('Delete?')">
                                    <span class="material-symbols-outlined" style="font-size:16px;">delete</span>
                                </button>
                            </form>
                            <a href="/" class="btn btn-gray btn-sm" style="text-decoration:none;">
                                <span class="material-symbols-outlined" style="font-size:16px;">visibility</span>
                            </a>
                        </div>
                        
                        <!-- Edit Form -->
                        <div id="edit-form-{{ $product->id }}" class="edit-form">
                            <form method="POST" action="{{ route('cms.update', $product->id) }}">
                                @csrf @method('PUT')
                                <div class="form-row">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" value="{{ $product->name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Price (₹)</label>
                                        <input type="number" name="price" value="{{ $product->price }}" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category" required>
                                            <option value="juice" {{ $product->category == 'juice' ? 'selected' : '' }}>Juice</option>
                                            <option value="snacks" {{ $product->category == 'snacks' ? 'selected' : '' }}>Snacks</option>
                                            <option value="starter" {{ $product->category == 'starter' ? 'selected' : '' }}>Starter</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" required>
                                            <option value="in_stock" {{ $product->status == 'in_stock' ? 'selected' : '' }}>In Stock</option>
                                            <option value="out_of_stock" {{ $product->status == 'out_of_stock' ? 'selected' : '' }}>Out of Stock</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Flavour</label>
                                    <input type="text" name="flavour" value="{{ $product->flavour ?? '' }}">
                                </div>
                                <button type="submit" class="btn btn-green">Save</button>
                                <button type="button" class="btn btn-gray" onclick="toggleEdit({{ $product->id }})">Cancel</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                @endif
                </div>
            </div>
        </div>

        <!-- Orders Section -->
        <div id="section-orders" style="display:none;">
            <div class="card">
                <h3 style="margin-bottom:16px;font-weight:700;">Live Orders ({{ $orderCount }})</h3>
                
                @if($recentOrders->count() == 0)
                    <p style="text-align:center;padding:40px;color:#999;">No orders yet</p>
                @else
                <div class="orders-list">
                    @foreach($recentOrders as $order)
                    <div class="order-card-full">
                        <div class="order-header">
                            <div>
                                <p style="font-weight:700;">Order #{{ $order->id }}</p>
                                <p style="font-size:12px;color:#999;">{{ $order->customer_name }} • {{ $order->phone_number }}</p>
                            </div>
                        </div>
                        
                        <div class="order-details">
                            <p><strong>Product:</strong> Product #{{ $order->product_id }}</p>
                            <p><strong>Qty:</strong> {{ $order->quantity }}</p>
                            <p><strong>Total:</strong> ₹{{ $order->total_price }}</p>
                            <p><strong>Address:</strong> {{ $order->delivery_address }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </main>

    <script>
        function showSection(section) {
            document.getElementById('section-add').style.display = 'none';
            document.getElementById('section-manage').style.display = 'none';
            document.getElementById('section-orders').style.display = 'none';
            document.getElementById('link-add').className = 'inactive';
            document.getElementById('link-manage').className = 'inactive';
            document.getElementById('link-orders').className = 'inactive';
            
            document.getElementById('section-' + section).style.display = 'block';
            document.getElementById('link-' + section).className = 'active';
        }
        
        function toggleEdit(id) {
            const form = document.getElementById('edit-form-' + id);
            form.classList.toggle('active');
        }
    </script>
</body>
</html>