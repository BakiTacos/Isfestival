<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <link rel="icon" type="image/png" href="{{ asset('Asset/logo-isfest.png') }}" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ISFEST 2026 | Unleash Your Magic, Forge the Future</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700;900&family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <style>
    body { font-family: 'Inter', sans-serif; }
    
    /* Font Spesial Headline */
    .font-cinzel { font-family: 'Cinzel', serif; }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(28px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes shimmer {
      0%   { background-position: -200% center; }
      100% { background-position:  200% center; }
    }
    @keyframes glow-pulse {
      0%, 100% { opacity: 0.3; transform: scale(1); }
      50%       { opacity: 0.6; transform: scale(1.15); }
    }

    .fade-up { opacity: 0; animation: fadeInUp 0.75s ease forwards; }
    .d1 { animation-delay: 0.05s; }
    .d2 { animation-delay: 0.18s; }
    .d3 { animation-delay: 0.32s; }
    .d4 { animation-delay: 0.46s; }
    .d5 { animation-delay: 0.60s; }

    .text-shimmer {
      background: linear-gradient(90deg, #ffec1f 0%, #f59e0b 40%, #ffec1f 70%, #fbbf24 100%);
      background-size: 200% auto;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      animation: shimmer 3.5s linear infinite;
    }

    .glass {
      background: rgba(23, 33, 53, 0.50);
      backdrop-filter: blur(18px);
      -webkit-backdrop-filter: blur(18px);
      border: 1px solid rgba(100, 116, 139, 0.20);
    }
    
    .btn-glow {
      box-shadow: 0 0 20px rgba(245, 158, 11, 0.30);
      transition: box-shadow 0.3s ease, transform 0.2s ease, background-color 0.2s ease;
    }
    .btn-glow:hover {
      box-shadow: 0 0 36px rgba(245, 158, 11, 0.55);
      transform: translateY(-2px);
    }

    .glow-orb {
      animation: glow-pulse 6s ease-in-out infinite;
    }

    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: #0a101d; }
    ::-webkit-scrollbar-thumb { background: #334155; border-radius: 3px; }
  </style>
</head>
<body class="bg-[#0a101d] text-slate-200 overflow-x-hidden selection:bg-[#ffec1f]/20 selection:text-[#ffec1f]">

  {{-- ===================== BACKGROUND & ORBS ===================== --}}
  <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden flex items-center justify-center">
      <img src="{{ asset('Asset/background.png') }}" alt="Background ISFEST" class="absolute inset-0 w-full h-full object-cover object-center opacity-70" />
      <div class="absolute inset-0 bg-[#0a101d]/60 backdrop-blur-[2px]"></div>
      
      <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-[#ffec1f]/10 rounded-full blur-[80px] glow-orb mix-blend-screen"></div>
      <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-amber-600/10 rounded-full blur-[100px] glow-orb mix-blend-screen" style="animation-delay: 2s;"></div>
  </div>

  {{-- ===================== NAVBAR COMPONENT ===================== --}}
  @include('navbar')

  {{-- ===================== HERO ===================== --}}
  <section class="relative z-10 min-h-[calc(100vh-5rem)] flex items-center">
    <div class="max-w-7xl mx-auto px-6 py-12 lg:py-20 w-full">
      <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-8">

        {{-- Teks Kiri --}}
        <div class="flex-1 text-center lg:text-left space-y-7 relative">

          {{-- Badge (Blipping light dihapus) --}}
          <div class="fade-up d1 inline-flex items-center gap-2 px-4 py-2 rounded-full glass border border-[#ffec1f]/25 text-[#ffec1f] text-[10px] md:text-xs font-bold tracking-widest uppercase">
            Information Systems Festival · UMN 2026
          </div>

          {{-- Headline --}}
          <h1 class="fade-up d2 text-5xl sm:text-6xl lg:text-7xl font-cinzel font-black leading-[1.1] text-white drop-shadow-lg">
            Unleash Your<br/>
            <span class="text-shimmer">Magic,</span><br/>
            Forge the <span class="text-shimmer">Future</span>
          </h1>

          {{-- Sub-Headline --}}
          <p class="fade-up d3 text-slate-300 text-base md:text-lg leading-relaxed max-w-lg mx-auto lg:mx-0">
            Masuki arena sihir teknologi Universitas Multimedia Nusantara. Kumpulkan asrama Anda, asah mantra logika, dan buktikan siapa penyihir sistem informasi terhebat tahun ini.
          </p>

          {{-- CTA (Call to Action) --}}
          <div class="fade-up d4 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-2">
            <a href="{{ route('lomba') }}"
               class="px-8 py-4 rounded-xl bg-gradient-to-r from-amber-500 to-amber-700 hover:from-amber-400 hover:to-amber-600 text-slate-950 font-bold text-sm md:text-base uppercase tracking-wider btn-glow flex items-center justify-center gap-2">
              Masuk Aula Besar
            </a>
            <a href="{{ route('tentang') }}"
               class="px-8 py-4 rounded-xl glass border border-slate-600/40 text-slate-200 font-semibold text-sm md:text-base hover:border-[#ffec1f]/40 hover:text-[#ffec1f] transition-all flex items-center justify-center">
              Baca Manuskrip
            </a>
          </div>

        </div>

        {{-- Mascot Kanan (Menggunakan Komponen Maskot Interaktif) --}}
        <div class="flex-shrink-0 w-full max-w-[280px] sm:max-w-sm lg:max-w-[420px] xl:max-w-[480px] relative mt-8 lg:mt-0">
          <div class="absolute inset-0 bg-gradient-to-tr from-[#ffec1f]/10 to-transparent rounded-full blur-[80px] pointer-events-none"></div>
          
          {{-- Panggil File Komponen Maskot di sini --}}
          @include('components.mascot')

        </div>

      </div>
    </div>

    {{-- Scroll Hint --}}
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex flex-col items-center gap-1.5 text-slate-500 animate-bounce">
      <span class="text-[9px] tracking-[0.2em] uppercase font-bold opacity-70">Jelajahi Sihir</span>
      <svg class="w-4 h-4 opacity-70" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
      </svg>
    </div>
  </section>

  {{-- ===================== FOOTER COMPONENT ===================== --}}
  @include('footer')

</body>
</html>