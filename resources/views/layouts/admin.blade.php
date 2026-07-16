<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-50">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Panel') - {{ config('app.name', 'KargoPro') }}</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full" x-data="{ sidebarOpen: false }">

    <div x-show="sidebarOpen" x-cloak class="fixed inset-0 z-40 bg-black/50 lg:hidden" @click="sidebarOpen = false"></div>

    <aside 
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
        class="fixed inset-y-0 left-0 z-50 w-64 bg-navy-900 text-white transform transition-transform lg:translate-x-0 lg:static lg:inset-auto lg:z-auto"
    >
        <div class="h-16 flex items-center justify-between px-6 border-b border-navy-700">
            <a href="{{ route('admin.dashboard') }}" class="font-bold text-xl tracking-tight">
                <span>Kargo</span><span class="text-amber-400">Pro</span>
            </a>
            <button @click="sidebarOpen = false" class="lg:hidden text-gray-300 hover:text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
        <nav class="mt-4 px-4 space-y-1">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center px-3 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.dashboard') ? 'bg-navy-800 text-white' : 'text-gray-300 hover:bg-navy-800 hover:text-white' }}">
                📊 Dashboard
            </a>
            <a href="{{ route('admin.profile.edit') }}" class="flex items-center px-3 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.profile.edit') ? 'bg-navy-800 text-white' : 'text-gray-300 hover:bg-navy-800 hover:text-white' }}">
                🏢 Profil Perusahaan
            </a>
            <a href="{{ route('admin.layanan.index') }}" class="flex items-center px-3 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.layanan.*') ? 'bg-navy-800 text-white' : 'text-gray-300 hover:bg-navy-800 hover:text-white' }}">
                ⚡ Layanan
            </a>
            <a href="{{ route('admin.galeri.index') }}" class="flex items-center px-3 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.galeri.*') ? 'bg-navy-800 text-white' : 'text-gray-300 hover:bg-navy-800 hover:text-white' }}">
                🖼️ Galeri
            </a>
            <a href="{{ route('admin.messages.index') }}" class="flex items-center px-3 py-2.5 rounded-lg text-sm font-medium {{ request()->routeIs('admin.messages.*') ? 'bg-navy-800 text-white' : 'text-gray-300 hover:bg-navy-800 hover:text-white' }}">
                ✉️ Pesan Masuk
                @php $unreadMessages = \App\Models\ContactMessage::where('is_read',false)->count(); @endphp
                @if($unreadMessages)
                    <span class="ml-auto bg-amber-400 text-navy-900 text-xs font-bold px-2 py-0.5 rounded-full">{{ $unreadMessages }}</span>
                @endif
            </a>
        </nav>
    </aside>

    <div class="lg:pl-64 flex flex-col min-h-screen">
        <header class="bg-white shadow-sm h-16 flex items-center justify-between px-4 sm:px-6 lg:px-8 sticky top-0 z-30">
            <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden text-gray-600 hover:text-navy-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
            <div class="flex items-center space-x-4 ml-auto">
                <span class="text-sm text-gray-700 hidden sm:block">{{ Auth::user()->name ?? 'Admin' }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-gray-600 hover:text-red-600 font-medium transition flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                        Keluar
                    </button>
                </form>
            </div>
        </header>

        <main class="flex-1 p-6 bg-gray-50">
            @yield('content')
        </main>
    </div>

    @stack('scripts')
</body>
</html>