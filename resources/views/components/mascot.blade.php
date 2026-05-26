<div class="relative flex flex-col items-center w-full pt-12 md:pt-0">
    
    {{-- Keyframes untuk animasi melayang bawaan Tailwind jika belum didefinisikan di app.css --}}
    <style>
        @keyframes mascotFloat {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
        }
        .animate-mascot-float {
            animation: mascotFloat 4s ease-in-out infinite;
        }
    </style>

    {{-- Gelembung Mantra Penyihir (Spell Bubble) --}}
    <div 
        id="mascot-bubble" 
        class="absolute -top-2 md:-top-16 z-20 max-w-[260px] bg-[#223753]/95 border border-[#ffec1f]/40 px-4 py-3 rounded-2xl text-xs text-slate-100 shadow-xl transition-all duration-300 backdrop-blur-md text-center font-medium opacity-0 scale-95 translate-y-2 pointer-events-none"
    >
        <p id="mascot-spell" class="leading-relaxed"></p>
        <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-[#223753] border-r border-b border-[#ffec1f]/40 rotate-45"></div>
    </div>

    {{-- Area Sensitif Sentuhan/Hover Maskot --}}
    <div 
        id="mascot-trigger"
        class="relative h-[260px] md:h-[380px] lg:h-[450px] w-full max-w-[240px] md:max-w-[300px] cursor-pointer animate-mascot-float group"
    >
        <div class="absolute inset-0 bg-[#ffec1f]/5 rounded-full blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
        <img
            src="{{ asset('mascot/mascot-wand.png') }}"
            alt="ISFEST 2026 Wizard Mascot"
            class="w-full h-full object-contain drop-shadow-[0_15px_30px_rgba(0,0,0,0.6)] transition-transform duration-300 group-hover:scale-[1.03]"
        />
    </div>

</div>

{{-- Skrip Pengganti React useState & Event Handlers --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const SPELLS = [
            "Alohomora! Semoga jalan menuju puncak klasemen terbuka lebar untuk asramamu! 🪄",
            "Expecto Patronum! Usir jauh-jauh segala error dan kebuntuan ide dari karyamu! 🌌",
            "Mantra yang luar biasa! Mahakarya yang kamu bangun memancarkan aura magis yang sangat kuat! 🧪",
            "Ribbit! Kesempurnaan karya ini hanya bisa diracik oleh penyihir teknologi sejati! 🐸",
            "Forge the Future! Teruslah berinovasi, puncak House Standings sudah di depan mata! ✨",
            "Unleash Your Magic, Forge the Future! Tunjukkan keajaibanmu kepada para juri! 🔮"
        ];

        const triggerArea = document.getElementById('mascot-trigger');
        const bubble = document.getElementById('mascot-bubble');
        const spellText = document.getElementById('mascot-spell');
        let bubbleTimeout;

        function castSpell() {
            // Pilih mantra acak
            const randomIndex = Math.floor(Math.random() * SPELLS.length);
            spellText.textContent = SPELLS[randomIndex];

            // Tampilkan gelembung (Ubah class Tailwind)
            bubble.classList.remove('opacity-0', 'scale-95', 'translate-y-2', 'pointer-events-none');
            bubble.classList.add('opacity-100', 'scale-100', 'translate-y-0');

            // Reset timer jika disentuh/di-hover berulang kali
            clearTimeout(bubbleTimeout);
            
            // Sembunyikan otomatis setelah 4 detik
            bubbleTimeout = setTimeout(() => {
                bubble.classList.remove('opacity-100', 'scale-100', 'translate-y-0');
                bubble.classList.add('opacity-0', 'scale-95', 'translate-y-2', 'pointer-events-none');
            }, 4000);
        }

        // Jalankan fungsi saat disentuh (mobile) atau di-hover (desktop)
        triggerArea.addEventListener('click', castSpell);
        triggerArea.addEventListener('mouseenter', castSpell);
    });
</script>