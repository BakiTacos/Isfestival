<nav class="border-b border-slate-700/30 bg-[#0a101d]/40 backdrop-blur-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
        
        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center group transition-transform duration-200 hover:scale-[1.02]">
            <div class="relative h-14 w-24 flex items-center">
                <img
                    src="{{ asset('logo/logo-isfest.png') }}"
                    alt="ISFEST 2026 Logo"
                    class="w-full h-full object-contain object-left"
                />
            </div>
        </a>

        {{-- Desktop Menu --}}
        <div class="hidden md:flex items-center gap-8">
            <a href="{{ route('home') }}"    
               class="text-sm font-semibold tracking-wide transition-colors {{ request()->routeIs('home') ? 'text-[#ffec1f]' : 'text-slate-300 hover:text-[#ffec1f]' }}">
               Home
            </a>
            <a href="{{ route('tentang') }}" 
               class="text-sm font-semibold tracking-wide transition-colors {{ request()->routeIs('tentang') ? 'text-[#ffec1f]' : 'text-slate-300 hover:text-[#ffec1f]' }}">
               Tentang
            </a>
            <a href="{{ route('lomba') }}"   
               class="text-sm font-semibold tracking-wide transition-colors {{ request()->routeIs('lomba') ? 'text-[#ffec1f]' : 'text-slate-300 hover:text-[#ffec1f]' }}">
               Lomba
            </a>
            <a href="{{ route('divisi') }}"  
               class="text-sm font-semibold tracking-wide transition-colors {{ request()->routeIs('divisi') ? 'text-[#ffec1f]' : 'text-slate-300 hover:text-[#ffec1f]' }}">
               Divisi
            </a>
            <a href="{{ route('lomba') }}"
               class="px-6 py-2.5 rounded-xl bg-[#f59e0b] hover:bg-[#d97706] text-slate-950 text-sm font-bold transition-all shadow-md transform hover:-translate-y-0.5 btn-glow">
              Daftar Sekarang
            </a>
        </div>

        {{-- Mobile Hamburger Trigger --}}
        <button
            id="nav-toggle-btn"
            class="md:hidden p-2 text-slate-400 hover:text-[#ffec1f] transition-colors"
            aria-label="Toggle Menu"
        >
            {{-- Icon Open (Hamburger) --}}
            <svg id="nav-icon-open" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            {{-- Icon Close (X) --}}
            <svg id="nav-icon-close" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    {{-- Mobile Menu Dropdown --}}
    <div
        id="nav-mobile-menu"
        class="md:hidden overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0"
    >
        <div class="max-w-7xl mx-auto px-6 py-5 space-y-2 border-t border-slate-700/30">
            <a href="{{ route('home') }}"
               class="block px-3 py-2 text-sm font-medium rounded-lg transition-all {{ request()->routeIs('home') ? 'text-[#ffec1f] bg-slate-800/20' : 'text-slate-300 hover:text-[#ffec1f] hover:bg-slate-800/40' }}">
               Home
            </a>
            <a href="{{ route('tentang') }}"
               class="block px-3 py-2 text-sm font-medium rounded-lg transition-all {{ request()->routeIs('tentang') ? 'text-[#ffec1f] bg-slate-800/20' : 'text-slate-300 hover:text-[#ffec1f] hover:bg-slate-800/40' }}">
               Tentang
            </a>
            <a href="{{ route('lomba') }}"
               class="block px-3 py-2 text-sm font-medium rounded-lg transition-all {{ request()->routeIs('lomba') ? 'text-[#ffec1f] bg-slate-800/20' : 'text-slate-300 hover:text-[#ffec1f] hover:bg-slate-800/40' }}">
               Lomba
            </a>
            <a href="{{ route('divisi') }}"
               class="block px-3 py-2 text-sm font-medium rounded-lg transition-all {{ request()->routeIs('divisi') ? 'text-[#ffec1f] bg-slate-800/20' : 'text-slate-300 hover:text-[#ffec1f] hover:bg-slate-800/40' }}">
               Divisi
            </a>
            <a href="{{ route('lomba') }}"
               class="block text-center px-4 py-3 mt-4 rounded-xl bg-[#f59e0b] hover:bg-[#d97706] text-slate-950 font-bold text-sm transition-all shadow-md">
               Daftar Sekarang
            </a>
        </div>
    </div>
</nav>

{{-- Script Pengganti useState React untuk Toggle Menu Mobile --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.getElementById('nav-toggle-btn');
        const mobileMenu = document.getElementById('nav-mobile-menu');
        const iconOpen = document.getElementById('nav-icon-open');
        const iconClose = document.getElementById('nav-icon-close');
        
        let isMenuOpen = false;

        toggleBtn.addEventListener('click', function () {
            isMenuOpen = !isMenuOpen;
            
            if (isMenuOpen) {
                // Tampilkan Menu
                mobileMenu.classList.remove('max-h-0', 'opacity-0');
                mobileMenu.classList.add('max-h-96', 'opacity-100');
                
                // Ganti Ikon ke 'X'
                iconOpen.classList.add('hidden');
                iconClose.classList.remove('hidden');
            } else {
                // Sembunyikan Menu
                mobileMenu.classList.remove('max-h-96', 'opacity-100');
                mobileMenu.classList.add('max-h-0', 'opacity-0');
                
                // Ganti Ikon ke 'Hamburger'
                iconClose.classList.add('hidden');
                iconOpen.classList.remove('hidden');
            }
        });
    });
</script>