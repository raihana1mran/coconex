<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>@yield('title', 'Coconex')</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Be+Vietnam+Pro:wght@400;500;600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script id="tailwind-config">
          tailwind.config = {
            darkMode: "class",
            theme: {
              extend: {
                "colors": {
                        "on-primary-container": "#602900",
                        "primary-fixed": "#ffdbc9",
                        "surface-dim": "#dadadc",
                        "tertiary-fixed": "#ffd9e3",
                        "on-secondary-fixed-variant": "#354e00",
                        "on-error-container": "#93000a",
                        "surface": "#f9f9fc",
                        "inverse-primary": "#ffb68d",
                        "on-secondary-container": "#4c6f00",
                        "surface-tint": "#9b4500",
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed-dim": "#ffb68d",
                        "outline-variant": "#dfc0b1",
                        "on-tertiary-fixed": "#3e001f",
                        "primary-container": "#ff7e21",
                        "secondary-fixed-dim": "#99da02",
                        "surface-container-high": "#e8e8ea",
                        "on-tertiary": "#ffffff",
                        "on-surface-variant": "#584236",
                        "surface-container-low": "#f3f3f6",
                        "inverse-on-surface": "#f0f0f3",
                        "inverse-surface": "#2f3133",
                        "surface-container-highest": "#e2e2e5",
                        "tertiary-fixed-dim": "#ffb0cb",
                        "on-tertiary-container": "#73003f",
                        "secondary-container": "#b3f733",
                        "on-error": "#ffffff",
                        "surface-container": "#eeeef0",
                        "on-primary-fixed-variant": "#763300",
                        "primary": "#9b4500",
                        "error": "#ba1a1a",
                        "background": "#f9f9fc",
                        "secondary-fixed": "#b3f733",
                        "on-secondary": "#ffffff",
                        "tertiary-container": "#ff72ab",
                        "secondary": "#476800",
                        "outline": "#8b7264",
                        "on-primary-fixed": "#331200",
                        "on-tertiary-fixed-variant": "#8d004f",
                        "surface-bright": "#f9f9fc",
                        "error-container": "#ffdad6",
                        "on-background": "#1a1c1e",
                        "on-secondary-fixed": "#131f00",
                        "on-primary": "#ffffff",
                        "on-surface": "#1a1c1e",
                        "tertiary": "#b80068",
                        "surface-variant": "#e2e2e5",
                        "on-tertiary-fixed-variant": "#8d004f"
                },
                "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                },
                "spacing": {
                        "container-padding": "24px",
                        "unit": "8px",
                        "stack-sm": "8px",
                        "stack-md": "16px",
                        "stack-lg": "32px",
                        "gutter": "16px"
                },
                "fontFamily": {
                        "body-md": ["Be Vietnam Pro", "sans-serif"],
                        "label-bold": ["Be Vietnam Pro", "sans-serif"],
                        "h3": ["Plus Jakarta Sans", "sans-serif"],
                        "h2": ["Plus Jakarta Sans", "sans-serif"],
                        "body-lg": ["Be Vietnam Pro", "sans-serif"],
                        "h1": ["Plus Jakarta Sans", "sans-serif"]
                },
                "fontSize": {
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "label-bold": ["14px", {"lineHeight": "1.2", "fontWeight": "600"}],
                        "h3": ["24px", {"lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "h2": ["36px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "h1": ["56px", {"lineHeight": "1.05", "letterSpacing": "-0.03em", "fontWeight": "800"}]
                }
              },
            },
          }
        </script>
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .orange-glow {
            box-shadow: 0 20px 40px -10px rgba(255, 126, 33, 0.3);
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        body {
            min-height: 100dvh;
            scroll-behavior: smooth;
        }
        .text-responsive-h1 {
            font-size: clamp(2.5rem, 8vw, 3.5rem);
            line-height: 1.1;
        }
        .text-responsive-h2 {
            font-size: clamp(2rem, 5vw, 2.25rem);
            line-height: 1.2;
        }
        .text-responsive-h3 {
            font-size: clamp(1.125rem, 3vw, 1.25rem);
            line-height: 1.3;
        }
        /* VERVE Inspired Cards */
        .verve-card {
            background: #F8F8F8;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        .verve-card:hover {
            background: #FFFFFF;
            box-shadow: 0 30px 60px -15px rgba(0,0,0,0.08);
        }
        .verve-img-container {
            aspect-ratio: 3/4;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        /* Custom Animations */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .group:hover .animate-perk-icon {
            animation: float 2s ease-in-out infinite;
        }
        .bottle-svg {
            filter: drop-shadow(0 20px 30px rgba(255, 126, 33, 0.3));
        }
        .bottle:hover .bottle-svg {
            transform-origin: center bottom;
        }
        .liquid-wave {
            animation: wave 2s ease-in-out infinite;
        }
        @keyframes wave {
            0%, 100% { d: path('M50,100 Q75,110 100,100 Q125,90 150,100 L150,330 L50,330 Z'); }
            50% { d: path('M50,100 Q75,90 100,100 Q125,110 150,100 L150,330 L50,330 Z'); }
        }
        .shine {
            animation: shine 3s ease-in-out infinite;
        }
        @keyframes shine {
            0%, 100% { transform: translateX(-100%); }
            50% { transform: translateX(200%); }
        }
        .b1 { z-index: 1; }
        .b2 { margin-left: 40px; margin-top: 20px; z-index: 2; }
        .b3 { margin-right: 40px; margin-top: 10px; z-index: 2; }
        @media (min-width: 768px) {
            .b2 { margin-left: 60px; margin-top: 25px; }
            .b3 { margin-right: 60px; margin-top: 15px; }
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md antialiased">
    <!-- TopAppBar -->
    <header class="fixed top-0 w-full z-50 bg-white/70 backdrop-blur-md border-b border-white/30">
        <div class="flex justify-between items-center px-6 py-4 max-w-7xl mx-auto">
            <a href="/" class="flex items-center gap-2 cursor-pointer active:scale-95 transition-transform duration-200">
                <span class="text-2xl font-black bg-gradient-to-r from-orange-500 to-pink-600 bg-clip-text text-transparent font-h1 tracking-tighter">Coconex</span>
            </a>
            <nav class="hidden md:flex items-center gap-8 font-label-bold tracking-wide">
                <a class="text-orange-600 border-b-2 border-orange-500 pb-1 font-semibold" href="/">Home</a>
                <a class="text-gray-600 hover:text-orange-500 transition-colors font-semibold" href="/#products">Menu</a>
                <a class="text-gray-600 hover:text-orange-500 transition-colors font-semibold" href="/contact">Contact</a>
            </nav>
            <button class="bg-primary-container text-white px-6 py-2 rounded-full font-bold hover:scale-105 transition-transform duration-200 active:scale-95 tracking-tight">
                <a href="/#products">Order Now</a>
            </button>
        </div>
    </header>

    <main class="pt-20">
        @yield('content')
    </main>

    <footer class="w-full bg-white pt-24 pb-12">
        <div class="max-w-7xl mx-auto px-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-12 text-center md:text-left mb-16">
                <div class="flex flex-col items-center md:items-start gap-4">
                    <div class="text-3xl font-black text-orange-500 font-h1 tracking-tighter">Coconex</div>
                    <p class="text-gray-400 text-sm max-w-xs font-medium leading-relaxed uppercase tracking-widest">Squeezed to perfection with love.</p>
                </div>
                <div class="flex flex-wrap justify-center gap-x-12 gap-y-4">
                    <a class="text-on-background hover:text-orange-500 transition-colors font-bold text-[11px] uppercase tracking-[0.2em]" href="/#products">Menu</a>
                    <a class="text-on-background hover:text-orange-500 transition-colors font-bold text-[11px] uppercase tracking-[0.2em]" href="/contact">Contact</a>
                </div>
                <div class="flex gap-4">
                    <button class="w-12 h-12 rounded-full border border-gray-100 flex items-center justify-center text-on-background hover:bg-orange-500 hover:text-white transition-all">
                        <span class="material-symbols-outlined text-xl" data-icon="share">share</span>
                    </button>
                    <button class="w-12 h-12 rounded-full border border-gray-100 flex items-center justify-center text-on-background hover:bg-orange-500 hover:text-white transition-all">
                        <span class="material-symbols-outlined text-xl" data-icon="star">star</span>
                    </button>
                </div>
            </div>
            <div class="border-t border-gray-100 pt-8 text-center">
                <p class="text-gray-400 text-[10px] uppercase tracking-[0.4em]">© 2024 Coconex. All rights reserved.</p>
                <p class="text-gray-400 text-[10px] mt-2">Developed by <a href="https://strukstudioai.in" target="_blank" class="text-orange-500 hover:underline">strukstudioai.in</a></p>
            </div>
        </div>
    </footer>
    <script src="https://checkout.razorpay.com/v1/razorpay.js"></script>
</body>
</html>
