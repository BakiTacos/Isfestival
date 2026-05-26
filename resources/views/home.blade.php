<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <link rel="icon" type="image/png" href="{{ asset('Asset/logo-isfest.png') }}" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ISFEST 2026 | The Grand Wizarding Conquest</title>
  <script src="https://cdn.tailwindcss.com"></script>
  
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Amarante&family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
  
  <style>
    body { font-family: 'Inter', sans-serif; background-color: #0a101d; }
    .font-amarante { font-family: 'Amarante', serif; }

    /* =========================================
       ANIMASI & GAYA TEKS
       ========================================= */

    .ppt-text-style {
      color: #ffd700; 
      -webkit-text-stroke: 2.5px #4a1c0d; 
      text-shadow: 4px 6px 4px rgba(0, 0, 0, 0.7); 
    }

    @keyframes text-glow {
      0%, 100% { filter: drop-shadow(0 0 5px rgba(255,236,31,0.2)); }
      50% { filter: drop-shadow(0 0 20px rgba(255,236,31,0.5)); }
    }

    @keyframes text-reveal {
      0% { opacity: 0; transform: scale(0.9); filter: blur(10px); }
      100% { opacity: 1; transform: scale(1); filter: blur(0px); }
    }

    @keyframes companion-pop {
      0% { transform: scale(0) rotate(-15deg) translateY(50px); opacity: 0; }
      70% { transform: scale(1.15) rotate(5deg) translateY(-10px); opacity: 1; }
      100% { transform: scale(1) rotate(0deg) translateY(0); opacity: 1; }
    }

    @keyframes bg-focus {
      0% { transform: scale(1.1); filter: brightness(0.5); }
      100% { transform: scale(1); filter: brightness(0.8); }
    }

    .animate-reveal { animation: text-reveal 2s ease-out 0.5s forwards; opacity: 0; }
    .animate-bg-focus { animation: bg-focus 4s ease-out forwards; }
    .animate-glow { animation: text-glow 3s ease-in-out infinite; }
    
    .animate-companion {
      animation: companion-pop 1s cubic-bezier(0.34, 1.56, 0.64, 1) 2.2s forwards;
      opacity: 0;
      transform-origin: bottom center;
    }

    .glass-nav {
      background: rgba(10, 16, 29, 0.3);
      backdrop-filter: blur(15px);
      border-bottom: 1px solid rgba(255, 236, 31, 0.1);
    }
    
    ::-webkit-scrollbar { width: 5px; }
    ::-webkit-scrollbar-track { background: #0a101d; }
    ::-webkit-scrollbar-thumb { background: #334155; border-radius: 10px; }
  </style>
</head>
<body class="text-slate-200 overflow-x-hidden selection:bg-[#ffec1f]/20 selection:text-[#ffec1f]">

  {{-- BACKGROUND LAYER --}}
  <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden bg-[#0a101d]">
      <img 
        src="{{ asset('backgrounds/background.png') }}" 
        alt="Mystical Forest" 
        class="absolute inset-0 w-full h-full object-cover object-center animate-bg-focus" 
      />
      <div class="absolute inset-0 bg-gradient-to-b from-transparent via-[#0a101d]/40 to-[#0a101d]"></div>
  </div>

  {{-- NAVBAR --}}
  <div class="relative z-40">
    @include('navbar')
  </div>

  {{-- HERO SECTION --}}
  <section class="relative z-30 min-h-[calc(100vh-5rem)] flex items-center justify-center text-center px-6 py-12 lg:py-0 overflow-hidden">
    
    <div class="max-w-5xl mx-auto w-full animate-reveal flex flex-col items-center">
      
      {{-- Judul Utama --}}
      <div class="flex flex-col items-center justify-center animate-glow">
          <h1 class="font-amarante text-5xl sm:text-7xl md:text-8xl font-normal leading-tight tracking-wide ppt-text-style">
            Information System<br />
            Festival
          </h1>
          
          <span class="font-amarante text-4xl sm:text-5xl md:text-6xl mt-2 tracking-widest text-white drop-shadow-[0_0_15px_rgba(255,255,255,0.5)]">
            2026
          </span>
      </div>

      {{-- Tema Resmi --}}
      <div class="mt-8 px-4 relative z-10">
          <h2 class="font-amarante text-2xl sm:text-3xl md:text-4xl text-[#ffec1f] tracking-wide drop-shadow-md leading-relaxed">
            "The Grand Wizarding Conquest:<br class="sm:hidden" /> Rise Beyond All Limits"
          </h2>
      </div>

    </div>

    {{-- Maskot Pendamping (Companion) --}}
    {{-- PERBAIKAN: Posisi diturunkan (bottom-2/bottom-4) dan ukurannya lebih proporsional --}}
    <div class="absolute bottom-2 right-2 md:bottom-4 md:right-8 w-28 sm:w-32 md:w-40 lg:w-48 animate-companion z-50">
        @include('components.mascot')
    </div>

  </section>

  {{-- FOOTER --}}
  <div class="relative z-30">
    @include('footer')
  </div>

</body>
</html>