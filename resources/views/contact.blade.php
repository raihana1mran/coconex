@extends('layouts.app')

@section('title', 'Contact Us - Coconex')

@section('content')
<!-- Contact Section -->
<section class="pt-32 pb-24 px-container-padding bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h1 class="font-h1 text-[12px] uppercase tracking-[0.4em] text-on-surface-variant font-black mb-4">Get In Touch</h1>
            <h2 class="font-h2 text-4xl md:text-5xl font-extrabold tracking-tight">Contact Us</h2>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="glass-card rounded-[2rem] p-8 md:p-12 space-y-8">
                <div class="flex items-center gap-6">
                    <div class="w-14 h-14 rounded-2xl bg-orange-100 flex items-center justify-center text-primary shadow-sm">
                        <span class="material-symbols-outlined">location_on</span>
                    </div>
                    <div>
                        <p class="font-bold text-on-background tracking-tight text-lg">Location</p>
                        <p class="text-on-surface-variant font-medium text-sm">Velammal Village, Anuppanadi, Near Chinthamani Toll Gate, Madurai-Tuticorin Ring Road, Madurai, Tamil Nadu 625009</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-6">
                    <div class="w-14 h-14 rounded-2xl bg-orange-100 flex items-center justify-center text-primary shadow-sm">
                        <span class="material-symbols-outlined">schedule</span>
                    </div>
                    <div>
                        <p class="font-bold text-on-background tracking-tight text-lg">Opening Hours</p>
                        <p class="text-on-surface-variant font-medium text-sm">Mon-Sun: 9:00 AM - 8:00 PM</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-6">
                    <div class="w-14 h-14 rounded-2xl bg-orange-100 flex items-center justify-center text-primary shadow-sm">
                        <span class="material-symbols-outlined">call</span>
                    </div>
                    <div>
                        <p class="font-bold text-on-background tracking-tight text-lg">Phone</p>
                        <p class="text-on-surface-variant font-medium text-sm">+91 98765 43210</p>
                    </div>
                </div>
            </div>
            
            <div class="relative h-[400px] rounded-[2rem] overflow-hidden shadow-lg">
                <iframe src="https://maps.google.com/maps?q=9.8866852,78.147526&z=17&t=&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection