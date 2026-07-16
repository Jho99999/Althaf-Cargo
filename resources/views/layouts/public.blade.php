<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'Althaf Cargo'))</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ route('home') }}" class="flex items-center space-x-2 font-bold text-xl text-navy-800">
                    <svg class="w-8 h-8 text-navy-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                    </svg>
                    <span>Althaf <span class="text-amber-600">Cargo</span></span>
                </a>

                <nav class="hidden md:flex space-x-8 text-sm font-medium">
                    <a href="{{ route('home') }}" class="text-navy-800 hover:text-navy-700 transition @if(request()->routeIs('home')) text-navy-700 border-b-2 border-navy-700 @endif">Beranda</a>
                    <a href="{{ route('public.services') }}" class="text-navy-800 hover:text-navy-700 transition @if(request()->routeIs('public.services')) text-navy-700 border-b-2 border-navy-700 @endif">Layanan</a>
                    <a href="{{ route('public.gallery') }}" class="text-navy-800 hover:text-navy-700 transition @if(request()->routeIs('public.gallery')) text-navy-700 border-b-2 border-navy-700 @endif">Galeri</a>
                    <a href="{{ route('public.contact') }}" class="text-navy-800 hover:text-navy-700 transition @if(request()->routeIs('public.contact')) text-navy-700 border-b-2 border-navy-700 @endif">Kontak</a>
                </nav>

                <div class="md:hidden">
                    <button id="mobileMenuButton" aria-label="Buka menu" class="p-2 rounded-md text-navy-700 hover:bg-gray-100" onclick="document.getElementById('mobileMenu').classList.toggle('hidden')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div id="mobileMenu" class="hidden md:hidden bg-white border-b shadow-sm">
        <div class="px-4 pt-4 pb-6 space-y-3">
            <a href="{{ route('home') }}" class="block text-navy-800 hover:text-navy-700">Beranda</a>
            <a href="{{ route('public.services') }}" class="block text-navy-800 hover:text-navy-700">Layanan</a>
            <a href="{{ route('public.gallery') }}" class="block text-navy-800 hover:text-navy-700">Galeri</a>
            <a href="{{ route('public.contact') }}" class="block text-navy-800 hover:text-navy-700">Kontak</a>
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="bg-navy-800 text-gray-100 py-12 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-white font-semibold text-lg mb-3">Althaf Cargo</h3>
                <p class="text-sm leading-relaxed">Mitra terpercaya pengiriman barang ke seluruh Indonesia. Cepat, aman, dan terpercaya.</p>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-3">Tautan</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('home') }}" class="text-gray-200 hover:text-white transition">Beranda</a></li>
                    <li><a href="{{ route('public.services') }}" class="text-gray-200 hover:text-white transition">Layanan</a></li>
                    <li><a href="{{ route('public.gallery') }}" class="text-gray-200 hover:text-white transition">Galeri</a></li>
                    <li><a href="{{ route('public.contact') }}" class="text-gray-200 hover:text-white transition">Kontak</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-3">Kontak</h4>
                <ul class="space-y-2 text-sm">
                    <li class="text-gray-200">📞 0812-3456-7890</li>
                    <li class="text-gray-200">✉️ info@althafcargo.id</li>
                    <li class="text-gray-200">📍 Jl. Logistik No. 99, Jakarta</li>
                </ul>
            </div>
        </div>
        <div class="text-center text-xs text-gray-400 mt-8 border-t border-gray-800 pt-6">
            &copy; {{ date('Y') }} AlthafCargo. All rights reserved.
        </div>
    </footer>

    @stack('scripts')
    <script>
        // Simple accessibility: close mobile menu on outside click
        document.addEventListener('click', function (e) {
            var menu = document.getElementById('mobileMenu');
            var btn = document.getElementById('mobileMenuButton');
            if (!menu || !btn) return;
            if (!menu.classList.contains('hidden')) {
                if (!menu.contains(e.target) && !btn.contains(e.target)) {
                    menu.classList.add('hidden');
                }
            }
        });
    </script>
</body>
</html>