{{-- home.blade.php --}}
<x-layout.app title="The Grand Wizarding Conquest">

  {{-- Tambahkan animasi khusus di bagian atas untuk efek mengambang yang halus --}}
  <style>
      @keyframes float-magic {
          0% { transform: translateY(0px) rotate(0deg); }
          50% { transform: translateY(-15px) rotate(-3deg); }
          100% { transform: translateY(0px) rotate(0deg); }
      }
      .animate-float-magic {
          animation: float-magic 4s ease-in-out infinite;
      }
  </style>

  {{-- HERO SECTION --}}
  <section x-data="{ showNote: false }" class="min-h-[calc(100vh-5rem)] flex flex-col items-center justify-center text-center px-6 overflow-hidden relative bg-slate-900">

    {{-- 1. Lapisan Latar Belakang --}}
    <div class="absolute inset-0 z-0 pointer-events-none select-none"
         style="-webkit-mask-image: linear-gradient(to top, transparent 0%, black 15%); mask-image: linear-gradient(to top, transparent 0%, black 15%);">
        <img src="{{ asset('backgrounds/background-home-desktop.jpg') }}"
             class="w-full h-full object-cover object-bottom opacity-90"
             alt="Magic Library Background Clean">
    </div>

    {{-- 2. Lapisan Konten Utama --}}
    <div class="max-w-5xl mx-auto w-full flex flex-col items-center justify-center animate-reveal relative z-10">

      {{-- Wadah Maskot & Elemen Mengambangnya --}}
      <div class="w-48 sm:w-64 md:w-80 lg:w-96 relative z-20 mt-24 md:mt-32 lg:mt-40">
          
          {{-- BUKU MENGAMBANG INTERAKTIF --}}
          {{-- Posisinya diatur relatif terhadap maskot (berada di sebelah kiri atas maskot) --}}
          <div @click="showNote = true"
               class="absolute -left-12 sm:-left-16 md:-left-20 top-1/4 w-16 sm:w-24 md:w-32 cursor-pointer z-50 animate-float-magic hover:scale-110 transition-transform duration-300">
               
               {{-- Gambar buku dengan efek drop-shadow kuning agar terlihat berkilau --}}
               <img src="{{ asset('assets/book-open.png') }}"
                    class="w-full h-full drop-shadow-[0_0_20px_rgba(255,236,31,0.8)]"
                    alt="Floating Magic Book">
          </div>

          {{-- Efek Cahaya Maskot --}}
          <div class="absolute inset-0 bg-gradient-to-tr from-[#ffec1f]/10 to-transparent rounded-full blur-[60px] pointer-events-none"></div>
          
          {{-- Maskot --}}
          @include('components.mascot')
      </div>

    </div>

    {{-- 3. MODAL POP-UP (PAPAN DEKORATIF) --}}
    <div x-show="showNote"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-90"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-90"
         class="fixed inset-0 z-[100] flex items-center justify-center bg-slate-900/70 backdrop-blur-sm p-4"
         style="display: none;">

        <div @click.away="showNote = false" class="relative w-full max-w-md mx-auto">

            <img src="{{ asset('assets/decorative-board.png') }}" 
                 class="w-full h-auto drop-shadow-2xl pointer-events-none block" 
                 alt="Decorative Board">

            {{-- PERUBAHAN KUNCI: left-[22%] dan right-[22%] (atau 24%) --}}
            {{-- Ini akan memaksa teks menyempit menjauhi bingkai cokelat kiri-kanan --}}
            <div class="absolute top-[24%] bottom-[24%] left-[22%] right-[22%] flex flex-col items-center justify-center text-center">
                
                <h3 class="text-xl sm:text-2xl font-serif font-extrabold text-[#5c2118] mb-1">
                    ISFEST 2026
                </h3>
                
                {{-- Border bottom dihilangkan agar menghemat ruang vertikal --}}
                <h4 class="text-[10px] sm:text-xs font-serif font-bold text-[#8a4a27] mb-3 uppercase tracking-widest">
                    The Grand Wizarding Conquest: Rise Beyond All Limits
                </h4>
                
                <p class="text-[12px] sm:text-[14px] text-[#4a3424] font-serif leading-tight sm:leading-snug font-medium mb-3">
                    Selamat datang di Information Systems Festival UMN! Mari gali potensi dan temukan sihir di dalam dirimu.
                </p>
                
                <p class="text-[13px] sm:text-[15px] font-bold italic text-[#5c2118]">
                    "Unleash Your Magic,<br>Forge the Future!"
                </p>
                
            </div>

            <button @click="showNote = false" class="absolute -top-2 -right-2 sm:-top-4 sm:-right-4 w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center bg-red-600 hover:bg-red-500 text-white text-2xl sm:text-3xl font-bold rounded-full shadow-lg border-2 border-amber-200 transition duration-150 z-50">
                &times;
            </button>

        </div>
    </div>

  </section>
</x-layout.app>