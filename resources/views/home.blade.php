@extends('layouts.app')

@section('title', 'Coconex - Freshly Squeezed Energy')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[600px] lg:min-h-[550px] flex items-center px-container-padding overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-orange-50/50 via-pink-50/30 to-white -z-10"></div>
    <div class="absolute -top-20 -right-20 w-96 h-96 bg-secondary-container/20 rounded-full blur-3xl"></div>
    <div class="max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-2 gap-stack-lg items-center py-10 lg:py-12">
        <!-- Left: Content -->
        <div class="space-y-stack-md">
            <div class="inline-flex items-center bg-secondary-container/30 px-4 py-1.5 rounded-full border border-secondary/20">
                <span class="text-secondary font-bold text-[13px] tracking-wider uppercase">New Summer Squeeze</span>
            </div>
            <h1 class="font-h1 text-on-background text-responsive-h1 font-extrabold tracking-tighter">
                Freshly Squeezed <br/>
                <span class="text-primary-container">Energy</span> In Every Drop
            </h1>
            <p class="text-on-surface-variant max-w-lg text-lg leading-relaxed font-body-md opacity-90">
                Premium cold-pressed juices crafted with 100% organic local fruits. No added sugar, just pure liquid vitality delivered to your door.
            </p>
            <div class="flex flex-wrap gap-4 pt-4">
                <button class="bg-primary-container text-white px-10 py-4 rounded-full font-bold text-lg orange-glow hover:translate-y-[-4px] transition-all tracking-tight">
                    <a href="#products">Order Your Juice</a>
                </button>
            </div>
        </div>
        
<!-- Right: Premium 3D Glass Bottles -->
        <div class="relative hero-bottles-container flex items-center justify-center min-h-[450px]" onmouseenter="hoverBottles()" onmouseleave="unhoverBottles()">
            <div class="bottles-wrapper relative w-full max-w-lg h-[400px]">
                <!-- Background Glows -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-orange-400/20 rounded-full blur-3xl"></div>
                <div class="absolute bottom-20 left-1/4 w-32 h-32 bg-pink-400/15 rounded-full blur-3xl"></div>
                <div class="absolute top-15 right-1/4 w-28 h-28 bg-green-400/15 rounded-full blur-3xl"></div>
                
                <!-- Bottle 1 (Center - Large) -->
                <div class="bottle-img center-bottle absolute left-1/2 -translate-x-1/2 top-1/5 transition-transform duration-500 hover:scale-120" style="z-index: 10;">
                    <div class="relative w-36 h-56 md:w-44 md:h-68">
                        <img src="/storage/products/juice_pro_1-removebg-preview.png" alt="Coconut Milk" class="w-full h-full object-contain drop-shadow-2xl filter brightness-110">
                        <div class="glass-overlay absolute inset-0 bg-gradient-to-tr from-white/20 via-transparent to-white/10 rounded-3xl"></div>
                        <div class="glass-shine absolute top-3 left-4 w-2 h-28 bg-white/30 rounded-full blur-[2px]"></div>
                    </div>
                </div>
                
                <!-- Bottle 2 (Left Back) -->
                <div class="bottle-img left-bottle absolute left-8 top-1/4 transition-transform duration-500 animate-float-slow hover:scale-115" style="z-index: 5;">
                    <div class="relative w-28 h-44 md:w-36 md:h-56 -rotate-8">
                        <img src="/storage/products/juice_pro_7-removebg-preview.png" alt="Rose Milk" class="w-full h-full object-contain drop-shadow-xl filter brightness-110">
                        <div class="glass-overlay absolute inset-0 bg-gradient-to-tr from-white/20 via-transparent to-white/10 rounded-3xl"></div>
                        <div class="glass-shine absolute top-2 left-3 w-1.5 h-20 bg-white/25 rounded-full blur-[2px]"></div>
                    </div>
                </div>
                
                <!-- Bottle 3 (Right Back) -->
                <div class="bottle-img right-bottle absolute right-8 top-1/4 transition-transform duration-500 animate-float hover:scale-115" style="z-index: 5;">
                    <div class="relative w-28 h-44 md:w-36 md:h-56 rotate-8">
                        <img src="/storage/products/abc_shot-removebg-preview.png" alt="ABC Shot" class="w-full h-full object-contain drop-shadow-xl filter brightness-110">
                        <div class="glass-overlay absolute inset-0 bg-gradient-to-tr from-white/20 via-transparent to-white/10 rounded-3xl"></div>
                        <div class="glass-shine absolute top-2 left-3 w-1.5 h-20 bg-white/25 rounded-full blur-[2px]"></div>
                    </div>
                </div>
                
                <!-- Floating Particles -->
                <div class="particles absolute inset-0 overflow-hidden pointer-events-none">
                    <div class="particle absolute w-2 h-2 bg-orange-400/50 rounded-full animate-particle-1"></div>
                    <div class="particle absolute w-1.5 h-1.5 bg-pink-400/50 rounded-full animate-particle-2"></div>
                    <div class="particle absolute w-2 h-2 bg-green-400/50 rounded-full animate-particle-3"></div>
                </div>
            </div>
            
            <!-- Info Card -->
            <div class="absolute -bottom-2 -left-4 md:-bottom-6 md:-left-6 glass-card p-4 md:p-6 rounded-2xl">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-orange-100 flex items-center justify-center">
                        <span class="material-symbols-outlined text-orange-500 text-lg md:text-xl">energy_savings_leaf</span>
                    </div>
                    <div>
                        <p class="font-bold text-on-background tracking-tight text-sm md:text-base">Pure Energy</p>
                        <p class="text-[9px] md:text-[11px] text-on-surface-variant uppercase tracking-widest font-bold">Natural Vitamin C</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes float {
    0%, 100% { transform: translateY(0) rotate(8deg); }
    50% { transform: translateY(-15px) rotate(8deg); }
}
@keyframes float-slow {
    0%, 100% { transform: translateY(0) rotate(-8deg); }
    50% { transform: translateY(-18px) rotate(-8deg); }
}
@keyframes particle-1 {
    0%, 100% { opacity: 0; transform: translateY(0) scale(0); }
    50% { opacity: 1; transform: translateY(-30px) scale(1); }
}
@keyframes particle-2 {
    0%, 100% { opacity: 0; transform: translateY(0) scale(0); }
    50% { opacity: 1; transform: translateY(-40px) scale(1); }
}
@keyframes particle-3 {
    0%, 100% { opacity: 0; transform: translateY(0) scale(0); }
    50% { opacity: 1; transform: translateY(-35px) scale(1); }
}
.animate-float {
    animation: float 4s ease-in-out infinite;
}
.animate-float-slow {
    animation: float-slow 5s ease-in-out infinite;
}
.particle:nth-child(1) { left: 35%; top: 55%; animation: particle-1 3s ease-in-out infinite; }
.particle:nth-child(2) { left: 18%; top: 48%; animation: particle-2 4s ease-in-out 1s infinite; }
.particle:nth-child(3) { right: 22%; top: 42%; animation: particle-3 5s ease-in-out 2s infinite; }
.glass-overlay, .glass-shine {
    pointer-events: none;
}
.flavour-btn input:checked + span, .sugar-btn input:checked + span {
    background: #f97316;
    border-color: #f97316;
    color: white;
}
.flavour-btn span, .sugar-btn span {
    transition: all 0.2s ease;
}
.flavour-btn span:hover, .sugar-btn span:hover {
    border-color: #f97316;
}
</style>

<script>
function hoverBottles() {
    var wrapper = document.querySelector('.bottles-wrapper');
    var center = document.querySelector('.center-bottle');
    var left = document.querySelector('.left-bottle');
    var right = document.querySelector('.right-bottle');
    
    if (wrapper) {
        wrapper.style.transition = 'transform 0.6s ease';
        wrapper.style.transform = 'scale(1.05) rotateY(8deg)';
    }
    if (center) center.style.transform = 'scale(1.2) translateX(-50%)';
    if (left) left.style.transform = 'translateY(-20px) rotate(-8deg) scale(1.15)';
    if (right) right.style.transform = 'translateY(-20px) rotate(8deg) scale(1.15)';
}
function unhoverBottles() {
    var wrapper = document.querySelector('.bottles-wrapper');
    var center = document.querySelector('.center-bottle');
    var left = document.querySelector('.left-bottle');
    var right = document.querySelector('.right-bottle');
    
    if (wrapper) {
        wrapper.style.transition = 'transform 0.6s ease';
        wrapper.style.transform = 'scale(1) rotateY(0deg)';
    }
    if (center) center.style.transform = 'scale(1) translateX(-50%)';
    if (left) left.style.transform = 'translateY(0) rotate(-8deg) scale(1)';
    if (right) right.style.transform = 'translateY(0) rotate(8deg) scale(1)';
}
</script>

<!-- Perks Section -->
<section class="py-stack-lg px-container-padding bg-white">
    <div class="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-gutter">
        <div class="p-6 md:p-8 rounded-3xl group text-center flex flex-col items-center perk-card">
            <div class="w-12 h-12 md:w-16 md:h-16 rounded-2xl bg-orange-50 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-primary text-3xl md:text-4xl animate-perk-icon" data-icon="eco">eco</span>
            </div>
            <h3 class="font-h3 text-responsive-h3 text-on-background tracking-tight">100% Organic</h3>
        </div>
        <div class="p-6 md:p-8 rounded-3xl group text-center flex flex-col items-center perk-card">
            <div class="w-12 h-12 md:w-16 md:h-16 rounded-2xl bg-orange-50 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-primary text-3xl md:text-4xl animate-perk-icon" data-icon="recycling">recycling</span>
            </div>
            <h3 class="font-h3 text-responsive-h3 text-on-background tracking-tight">Eco-Packaging</h3>
        </div>
        <div class="p-6 md:p-8 rounded-3xl group text-center flex flex-col items-center perk-card">
            <div class="w-12 h-12 md:w-16 md:h-16 rounded-2xl bg-orange-50 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-primary text-3xl md:text-4xl animate-perk-icon" data-icon="electric_bolt">electric_bolt</span>
            </div>
            <h3 class="font-h3 text-responsive-h3 text-on-background tracking-tight">Fast Delivery</h3>
        </div>
        <div class="p-6 md:p-8 rounded-3xl group text-center flex flex-col items-center perk-card">
            <div class="w-12 h-12 md:w-16 md:h-16 rounded-2xl bg-orange-50 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-primary text-3xl md:text-4xl animate-perk-icon" data-icon="air">air</span>
            </div>
            <h3 class="font-h3 text-responsive-h3 text-on-background tracking-tight">Freshly Squeezed</h3>
        </div>
    </div>
</section>

<!-- Product Catalog -->
<section id="products" class="py-24 px-container-padding bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="mb-16">
            <h2 class="font-h1 text-[12px] uppercase tracking-[0.4em] text-on-surface-variant font-black mb-4">Our Menu</h2>
            <h3 class="font-h2 text-4xl md:text-5xl font-extrabold tracking-tight">Tropical Blends</h3>
        </div>
        
        <!-- Filter Buttons -->
        <div class="flex flex-wrap gap-4 mb-12" id="productFilters">
            <button onclick="filterProducts('all')" class="filter-btn active px-6 py-3 rounded-full font-bold text-sm tracking-wide transition-all" data-filter="all">All</button>
            <button onclick="filterProducts('juice')" class="filter-btn px-6 py-3 rounded-full font-bold text-sm tracking-wide transition-all bg-gray-100 text-gray-600 hover:bg-orange-500 hover:text-white" data-filter="juice">Juice</button>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8" id="productsGrid">
            @foreach($products as $product)
            <div class="verve-card group relative overflow-hidden product-card" data-category="{{ $product->category }}">
                <button class="absolute top-4 right-4 z-10 opacity-0 group-hover:opacity-100 transition-opacity">
                    <span class="material-symbols-outlined text-gray-400 hover:text-red-500 transition-colors">favorite</span>
                </button>
                <div class="verve-img-container">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6 pt-0 text-center flex flex-col items-center relative">
                    <h4 class="font-h1 text-[11px] uppercase tracking-[0.2em] font-black text-on-surface-variant mb-1">{{ $product->name }}</h4>
                    <p class="font-h1 text-[14px] font-bold text-gray-400 mb-2">₹{{ number_format($product->price, 1) }}</p>
                    
                    <!-- Flavour Options (for Coconut Milk) -->
                    @if($product->flavour)
                    <div class="flex gap-1 mb-3 justify-center">
                        <label class="flavour-btn">
                            <input type="radio" name="flavour_{{ $product->id }}" value="{{ $product->flavour }}" checked class="hidden">
                            <span class="text-[10px] px-3 py-1 rounded-full border border-gray-300 cursor-pointer uppercase">{{ $product->flavour }}</span>
                        </label>
                    </div>
                    <!-- Sugar Options -->
                    <div class="flex gap-1 mb-3 justify-center">
                        <label class="sugar-btn">
                            <input type="radio" name="sugar_{{ $product->id }}" value="regular" checked class="hidden">
                            <span class="text-[10px] px-2 py-1 rounded-full border border-gray-300 cursor-pointer">Regular</span>
                        </label>
                        <label class="sugar-btn">
                            <input type="radio" name="sugar_{{ $product->id }}" value="no_sugar" class="hidden">
                            <span class="text-[10px] px-2 py-1 rounded-full border border-gray-300 cursor-pointer">No Sugar</span>
                        </label>
                    </div>
                    @else
                    <!-- Sugar Options (for other products) -->
                    <div class="flex gap-2 mb-3">
                        <label class="sugar-btn">
                            <input type="radio" name="sugar_{{ $product->id }}" value="regular" checked class="hidden">
                            <span class="text-xs px-3 py-1 rounded-full border border-gray-300 cursor-pointer">Regular</span>
                        </label>
                        <label class="sugar-btn">
                            <input type="radio" name="sugar_{{ $product->id }}" value="no_sugar" class="hidden">
                            <span class="text-xs px-3 py-1 rounded-full border border-gray-300 cursor-pointer">No Sugar</span>
                        </label>
                    </div>
                    @endif
                    
                    <button onclick="addToCart({{ $product->id }}, '{{ $product->name }}', {{ $product->price }}, '{{ $product->image }}')" class="w-10 h-10 rounded-full bg-orange-500 text-white shadow-md flex items-center justify-center hover:bg-orange-600 transition-all">
                        <span class="material-symbols-outlined text-xl">add_shopping_cart</span>
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Shop Visit Section (Location/About) -->
<section id="location" class="py-24 px-container-padding bg-surface-container-low">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <div>
                    <h2 class="font-h1 text-[12px] uppercase tracking-[0.4em] text-on-surface-variant font-black mb-4">Location</h2>
                    <h3 class="font-h2 text-responsive-h2 font-extrabold tracking-tight">Visit Our Squeeze Shop</h3>
                </div>
                <p class="text-on-surface-variant text-lg leading-relaxed opacity-80 font-body-md max-w-md">
                    Visit us at Velammal Village, Anuppanadi. Experience the freshness in person at our flagship store.
                </p>
                <div class="space-y-6">
                    <div class="flex items-center gap-6">
                        <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center text-primary shadow-sm">
                            <span class="material-symbols-outlined">location_on</span>
                        </div>
                        <div>
                            <p class="font-bold text-on-background tracking-tight text-lg">Location</p>
                            <p class="text-on-surface-variant font-medium text-sm">Velammal Village, Anuppanadi, Near Chinthamani Toll Gate, Madurai-Tuticorin Ring Road, Madurai, Tamil Nadu 625009</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-6">
                        <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center text-primary shadow-sm">
                            <span class="material-symbols-outlined">schedule</span>
                        </div>
                        <div>
                            <p class="font-bold text-on-background tracking-tight text-lg">Opening Hours</p>
                            <p class="text-on-surface-variant font-medium text-sm">Mon-Sun: 9:00 AM - 8:00 PM</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-6">
                        <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center text-primary shadow-sm">
                            <span class="material-symbols-outlined">call</span>
                        </div>
                        <div>
                            <p class="font-bold text-on-background tracking-tight text-lg">Get in Touch</p>
                            <p class="text-on-surface-variant font-medium text-sm">+91 98765 43210</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative h-[500px] rounded-[3rem] overflow-hidden shadow-2xl shadow-black/5 border-8 border-white">
                <iframe src="https://maps.google.com/maps?q=9.8866852,78.147526&z=17&t=&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<!-- Order Modal -->
<div id="orderModal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 bg-black/50 backdrop-blur-sm">
    <div class="glass-card w-full max-w-md rounded-[2rem] p-8 space-y-6">
        <div class="flex justify-between items-center">
            <h3 class="font-h2 text-2xl font-extrabold tracking-tight">Order Now</h3>
            <button onclick="closeOrderModal()" class="text-gray-400 hover:text-orange-500 transition-colors">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <form id="orderForm" class="space-y-4">
            @csrf
            <input type="hidden" name="product_id" id="modal_product_id">
            
            <!-- Product Info with Image -->
            <div class="flex items-center gap-4 p-4 bg-orange-50 rounded-xl">
                <img id="modal_product_image" src="" alt="Product" class="w-16 h-16 object-contain rounded-lg">
                <div class="flex-1">
                    <h4 id="modal_product_name" class="font-bold text-lg"></h4>
                    <p id="modal_product_price" class="text-orange-600 font-bold"></p>
                </div>
            </div>
            
            <!-- Quantity Selector -->
            <div>
                <label class="block text-sm font-bold text-on-surface-variant mb-1 uppercase tracking-wider">Quantity</label>
                <div class="flex items-center gap-4">
                    <button type="button" onclick="updateQuantity(-1)" class="w-10 h-10 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center hover:bg-orange-200 transition-all">
                        <span class="material-symbols-outlined">remove</span>
                    </button>
                    <input type="number" name="quantity" id="modal_quantity" value="1" min="1" class="w-16 text-center font-bold text-lg border-0 bg-transparent" readonly>
                    <button type="button" onclick="updateQuantity(1)" class="w-10 h-10 rounded-full bg-orange-500 text-white flex items-center justify-center hover:bg-orange-600 transition-all">
                        <span class="material-symbols-outlined">add</span>
                    </button>
                </div>
            </div>
            
            <div>
                <label class="block text-sm font-bold text-on-surface-variant mb-1 uppercase tracking-wider">Your Name</label>
                <input type="text" name="customer_name" required class="w-full px-4 py-3 rounded-xl border-gray-200 focus:border-orange-500 focus:ring-orange-500 transition-all bg-white/50">
            </div>
            <div>
                <label class="block text-sm font-bold text-on-surface-variant mb-1 uppercase tracking-wider">Phone Number</label>
                <input type="tel" name="phone_number" required class="w-full px-4 py-3 rounded-xl border-gray-200 focus:border-orange-500 focus:ring-orange-500 transition-all bg-white/50">
            </div>
            <div>
                <label class="block text-sm font-bold text-on-surface-variant mb-1 uppercase tracking-wider">Delivery Address</label>
                <textarea name="delivery_address" required class="w-full px-4 py-3 rounded-xl border-gray-200 focus:border-orange-500 focus:ring-orange-500 transition-all bg-white/50 h-24"></textarea>
            </div>

            <div>
                <label class="block text-sm font-bold text-on-surface-variant mb-1 uppercase tracking-wider">Sugar Level</label>
                <div class="flex gap-4 mt-2">
                    <label class="flex items-center gap-2">
                        <input type="radio" name="sugar_level" value="no_sugar" required>
                        <span>No Sugar</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="radio" name="sugar_level" value="regular">
                        <span>Regular Sugar</span>
                    </label>
                </div>
            </div>
            <div>
                <label class="block text-sm font-bold text-on-surface-variant mb-1 uppercase tracking-wider">Size</label>
                <div class="flex gap-4 mt-2">
                    <label class="flex items-center gap-2">
                        <input type="radio" name="size" value="250ml" required>
                        <span>250 ml</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="radio" name="size" value="500ml">
                        <span>500 ml</span>
                    </label>
                </div>
            </div>
            <button type="submit" class="w-full bg-primary-container text-white py-4 rounded-xl font-bold text-lg orange-glow hover:translate-y-[-2px] transition-all tracking-tight">
                Pay Now
            </button>
        </form>
    </div>
</div>

<!-- Floating Cart Button -->
<div id="floatingCartBtn" style="display: none;" class="fixed bottom-6 right-6 z-50">
    <button onclick="document.getElementById('cartModal').style.display = 'flex'" class="w-14 h-14 rounded-full bg-orange-500 text-white shadow-lg flex items-center justify-center hover:bg-orange-600 transition-all hover:scale-110">
        <span class="material-symbols-outlined text-2xl">shopping_cart</span>
        <span id="cartBadge" class="absolute -top-1 -right-1 w-6 h-6 rounded-full bg-red-500 text-white text-xs font-bold flex items-center justify-center">0</span>
    </button>
</div>

<!-- Cart Modal -->
<div id="cartModal" style="display: none;" class="fixed inset-0 z-[100] items-center justify-center p-4 bg-black/50 backdrop-blur-sm">
    <div class="glass-card w-full max-w-md rounded-[2rem] p-6 space-y-4 max-h-[80vh] overflow-y-auto">
        <div class="flex justify-between items-center">
            <h3 class="font-h2 text-xl font-extrabold">Your Cart</h3>
            <button onclick="closeCartModal()" class="text-gray-400 hover:text-orange-500">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <div id="cartItems" class="space-y-3">
            <!-- Cart items will be rendered here -->
        </div>
        <div class="border-t pt-4 space-y-4">
            <div class="flex justify-between items-center">
                <span class="font-bold text-lg">Total</span>
                <span id="cartTotal" class="font-bold text-xl text-orange-500">₹0</span>
            </div>
            <form id="cartOrderForm" class="space-y-3">
                @csrf
                <input type="hidden" name="product_id" id="cart_product_id">
                <input type="hidden" name="quantity" id="cart_quantity">
                <input type="hidden" name="size" value="250ml">
                <input type="hidden" name="sugar_level" value="regular">
                <div>
                    <label class="block text-sm font-bold uppercase tracking-wider mb-1">Your Name</label>
                    <input type="text" name="customer_name" required class="w-full px-4 py-3 rounded-xl border-gray-200 bg-white/50">
                </div>
                <div>
                    <label class="block text-sm font-bold uppercase tracking-wider mb-1">Phone</label>
                    <input type="tel" name="phone_number" required class="w-full px-4 py-3 rounded-xl border-gray-200 bg-white/50">
                </div>
                <div>
                    <label class="block text-sm font-bold uppercase tracking-wider mb-1">Address</label>
                    <textarea name="delivery_address" required class="w-full px-4 py-3 rounded-xl border-gray-200 bg-white/50 h-20"></textarea>
                </div>
                <button type="submit" class="w-full bg-orange-500 text-white py-4 rounded-xl font-bold hover:bg-orange-600 transition-all">
                    Pay Now
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    var cartItems = [];
    var cartCount = 0;
    
function addToCart(productId, productName, productPrice, productImage) {
        var sugarRadio = document.querySelector('input[name="sugar_' + productId + '"]:checked');
        var sugarLevel = sugarRadio ? sugarRadio.value : 'regular';
        
        var flavourRadio = document.querySelector('input[name="flavour_' + productId + '"]:checked');
        var flavour = flavourRadio ? flavourRadio.value : 'regular';
        
        var existing = cartItems.find(function(item) { return item.id === productId; });
        if (existing) {
            existing.quantity++;
        } else {
            cartItems.push({ id: productId, name: productName, price: productPrice, image: productImage, quantity: 1, sugar: sugarLevel, flavour: flavour });
        }
        updateCartDisplay();
    }
    
    function updateCartDisplay() {
        cartCount = 0;
        var total = 0;
        var html = '';
        
        cartItems.forEach(function(item) {
            cartCount += item.quantity;
            total += item.price * item.quantity;
            html += '<div class="flex items-center gap-3 p-3 bg-orange-50 rounded-xl">';
            html += '<img src="' + item.image + '" alt="' + item.name + '" class="w-12 h-12 object-contain rounded-lg">';
            html += '<div class="flex-1">';
            html += '<p class="font-bold text-sm">' + item.name + '</p>';
            html += '<p class="text-orange-600 text-sm">₹' + item.price + ' x ' + item.quantity + '</p>';
            html += '</div>';
            html += '<div class="flex items-center gap-2">';
            html += '<button onclick="updateItemQuantity(' + item.id + ', -1)" class="w-8 h-8 rounded-full bg-white shadow flex items-center justify-center">';
            html += '<span class="material-symbols-outlined text-sm">remove</span></button>';
            html += '<span class="font-bold w-6 text-center">' + item.quantity + '</span>';
            html += '<button onclick="updateItemQuantity(' + item.id + ', 1)" class="w-8 h-8 rounded-full bg-orange-500 text-white flex items-center justify-center">';
            html += '<span class="material-symbols-outlined text-sm">add</span></button>';
            html += '</div></div>';
        });
        
        document.getElementById('cartItems').innerHTML = html || '<p class="text-center text-gray-400 py-4">Your cart is empty</p>';
        document.getElementById('cartBadge').textContent = cartCount;
        document.getElementById('cartTotal').textContent = '₹' + total;
        
        var floatingBtn = document.getElementById('floatingCartBtn');
        if (cartCount > 0) {
            floatingBtn.style.display = 'flex';
        } else {
            floatingBtn.style.display = 'none';
        }
    }
    
    function updateItemQuantity(productId, delta) {
        var item = cartItems.find(function(i) { return i.id === productId; });
        if (item) {
            item.quantity += delta;
            if (item.quantity <= 0) {
                cartItems = cartItems.filter(function(i) { return i.id !== productId; });
            }
            updateCartDisplay();
        }
    }
    
    function showCartModal() {
        document.getElementById('cartModal').style.display = 'flex';
        updateCartDisplay();
    }
    
    function closeCartModal() {
        document.getElementById('cartModal').style.display = 'none';
    }
    
    function updateQuantity(delta) {
        const input = document.getElementById('modal_quantity');
        let qty = parseInt(input.value) + delta;
        if (qty < 1) qty = 1;
        input.value = qty;
    }
    
    function scrollToProducts() {
        document.getElementById('products').scrollIntoView({ behavior: 'smooth' });
    }
    
    function openOrderModal(productId) {
        var modal = document.getElementById('orderModal');
        modal.style.display = 'flex';
        document.getElementById('modal_product_id').value = productId;
        
        var products = @json($products->keyBy('id'));
        var p = products[productId];
        
        if (p) {
            document.getElementById('modal_product_image').src = p.image;
            document.getElementById('modal_product_name').textContent = p.name;
            document.getElementById('modal_product_price').textContent = '₹' + p.price;
            document.getElementById('modal_quantity').value = 1;
        }
    }
    
    // Cart form submission with Razorpay
    document.getElementById('cartOrderForm').addEventListener('submit', function(e) {
        e.preventDefault();
        console.log('Form submitted');
        
        if (cartItems.length === 0) {
            alert('Your cart is empty!');
            return;
        }
        
        var total = cartItems.reduce(function(sum, item) { return sum + (item.price * item.quantity); }, 0);
        console.log('Total:', total);
        var totalPaise = total * 100;
        
        // Create Razorpay order
        var formData = {
            amount: total,
            currency: 'INR'
        };
        
        console.log('Creating order with:', formData);
        
        fetch('/payment/create', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify(formData)
        })
        .then(function(res) { 
            console.log('Response status:', res.status);
            return res.json(); 
        })
        .then(function(data) {
            console.log('Order created:', data);
            if (data.error) {
                alert('Error: ' + data.error.description);
                return;
            }
            // Open Razorpay checkout
            var options = {
                "key": data.key_id,
                "amount": data.amount,
                "currency": "INR",
                "name": "Coconex",
                "description": "Fresh Juice Order - ₹" + (data.amount / 100),
                "order_id": data.order_id,
                "handler": function(response) {
                    console.log('Payment response:', response);
                    // Save order to database
                    var orderFormData = new FormData(document.getElementById('cartOrderForm'));
                    orderFormData.set('product_id', cartItems[0].id);
                    orderFormData.set('quantity', cartItems.reduce(function(sum, item) { return sum + item.quantity; }, 0));
                    
                    fetch('{{ route("orders.store") }}', {
                        method: 'POST',
                        body: orderFormData,
                        headers: { 'X-Requested-With': 'XMLHttpRequest' }
                    })
                    .then(function() {
                        cartItems = [];
                        updateCartDisplay();
                        closeCartModal();
                        document.getElementById('cartOrderForm').reset();
                        alert('Payment successful! Order placed.');
                    });
                },
                "theme": {
                    "color": "#f97316"
                }
            };
            
            var rzp = new Razorpay(options);
            rzp.open();
})
        .catch(function(err) {
            console.error('Error:', err);
            alert('Payment error. Please try again. Error: ' + err.message);
        });
    });
    
    function filterProducts(category) {
        
        buttons.forEach(btn => {
            if (btn.dataset.filter === category) {
                btn.classList.add('bg-primary-container', 'text-white');
                btn.classList.remove('bg-gray-100', 'text-gray-600');
            } else {
                btn.classList.remove('bg-primary-container', 'text-white');
                btn.classList.add('bg-gray-100', 'text-gray-600');
            }
        });
        
        cards.forEach(card => {
            if (category === 'all' || card.dataset.category === category) {
                card.style.display = 'block';
                gsap.to(card, { opacity: 1, duration: 0.3 });
            } else {
                gsap.to(card, { opacity: 0, duration: 0.3, onComplete: () => {
                    card.style.display = 'none';
                }});
            }
        });
    }
    
    function openOrderModal(productId) {
        document.getElementById('modal_product_id').value = productId;
        const modal = document.getElementById('orderModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        gsap.fromTo("#orderModal > div", { scale: 0.8, opacity: 0 }, { scale: 1, opacity: 1, duration: 0.3, ease: "power2.out" });
    }

    function closeOrderModal() {
        var modal = document.getElementById('orderModal');
        modal.style.display = 'none';
    }

    document.getElementById('orderForm').addEventListener('submit', async (e) => {
        e.preventDefault();
        const formData = new FormData(e.target);
        
        try {
            const response = await fetch('{{ route("orders.store") }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });
            
            const result = await response.json();
            if (response.ok) {
                closeOrderModal();
                e.target.reset();
            }
        } catch (error) {
            console.error('Error:', error);
            closeOrderModal();
            e.target.reset();
        }
    });

    document.addEventListener('DOMContentLoaded', () => {
        gsap.registerPlugin(ScrollTrigger);
        
        // Bottle Stack Hover Animation
        const bottlesShowcase = document.querySelector('.bottles-showcase');
        if (bottlesShowcase) {
            bottlesShowcase.addEventListener('mouseenter', () => {
                gsap.to('.b1', { scale: 1.15, rotation: 360, duration: 0.8, ease: 'none', repeat: -1 });
                gsap.to('.b2', { scale: 1.15, rotation: -360, duration: 0.8, ease: 'none', repeat: -1 });
                gsap.to('.b3', { scale: 1.15, rotation: 360, duration: 0.8, ease: 'none', repeat: -1 });
            });
            bottlesShowcase.addEventListener('mouseleave', () => {
                gsap.killTweensOf('.b1');
                gsap.killTweensOf('.b2');
                gsap.killTweensOf('.b3');
                gsap.to('.b1', { scale: 1, rotation: 0, duration: 0.3 });
                gsap.to('.b2', { scale: 1, rotation: 0, duration: 0.3 });
                gsap.to('.b3', { scale: 1, rotation: 0, duration: 0.3 });
            });
            gsap.to('.b1', { y: -5, rotation: 3, duration: 1.5, repeat: -1, yoyo: true, ease: 'sine.inOut' });
            gsap.to('.b2', { y: -3, rotation: -3, duration: 1.8, repeat: -1, yoyo: true, ease: 'sine.inOut', delay: 0.2 });
            gsap.to('.b3', { y: -4, rotation: 3, duration: 2, repeat: -1, yoyo: true, ease: 'sine.inOut', delay: 0.4 });
        }

        // Perks Section Entrance
        gsap.to(".perk-card", {
            opacity: 1,
            y: 0,
            duration: 0.8,
            stagger: 0.2,
            ease: "power2.out",
            scrollTrigger: {
                trigger: ".perk-card",
                start: "top 85%"
            }
        });

        // Product Cards Reveal
        gsap.to(".product-card", {
            opacity: 1,
            y: 0,
            duration: 0.6,
            stagger: 0.1,
            ease: "power1.out",
            scrollTrigger: {
                trigger: ".product-card",
                start: "top 80%"
            }
        });

        // Icon Pulse on Perk Hover
        const perkIcons = document.querySelectorAll('.perk-card');
        perkIcons.forEach(card => {
            card.addEventListener('mouseenter', () => {
                gsap.to(card.querySelector('.animate-perk-icon'), {
                    scale: 1.2,
                    duration: 0.3,
                    yoyo: true,
                    repeat: 1
                });
            });
        });
    });
</script>
@endsection
