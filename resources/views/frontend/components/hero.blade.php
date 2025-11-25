<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('medias/images/backgrounds/hero-bg.webp') }}" alt="Dairy Farming Background" class="w-full h-full object-cover">
        <!-- Themed Overlay - Gradient with primary color -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#5CB247]/90 via-[#5CB247]/70 to-[#4a9539]/80"></div>
        <!-- Pattern Overlay for texture -->
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23FEF8DC\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 py-20">
        <div class="max-w-5xl mx-auto text-center">
            <!-- Main Headline -->
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-[#FEF8DC] mb-6 leading-tight animate-fade-in">
                {{ __('translation.main_title') }}
            </h1>

            <!-- Sub-headline -->
            <p
                class="text-xl md:text-2xl lg:text-3xl text-[#FEF8DC]/95 mb-12 leading-relaxed max-w-4xl mx-auto font-light animate-fade-in-delay">
                {{ __('translation.subtitle') }}
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16 animate-fade-in-delay-2">
                <a href="#explore"
                    class="group relative px-8 py-4 bg-[#FEF8DC] text-[#5CB247] rounded-full font-semibold text-lg hover:bg-white transition-all duration-300 shadow-lg hover:shadow-2xl hover:scale-105 w-full sm:w-auto flex items-center justify-center space-x-2">
                    <span class="relative z-10">{{ __('translation.explore_btn') }}</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="#pilot"
                    class="group relative px-8 py-4 bg-transparent border-2 border-[#FEF8DC] text-[#FEF8DC] rounded-full font-semibold text-lg hover:bg-[#FEF8DC] hover:text-[#5CB247] transition-all duration-300 shadow-lg hover:shadow-2xl hover:scale-105 w-full sm:w-auto flex items-center justify-center space-x-2">
                    <span class="relative z-10">{{ __('translation.pilot_btn') }}</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    /* Fade-in animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fadeIn 1s ease-out forwards;
    }

    .animate-fade-in-delay {
        opacity: 0;
        animation: fadeIn 1s ease-out 0.3s forwards;
    }

    .animate-fade-in-delay-2 {
        opacity: 0;
        animation: fadeIn 1s ease-out 0.6s forwards;
    }

    .animate-fade-in-delay-3 {
        opacity: 0;
        animation: fadeIn 1s ease-out 0.9s forwards;
    }

    /* Smooth scroll */
    html {
        scroll-behavior: smooth;
    }
</style>
