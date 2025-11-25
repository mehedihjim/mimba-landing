<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="#home" class="flex items-center space-x-2">
                <img src="{{ asset('medias/images/logos/mimba.svg') }}" alt="PoulexBD Logo" class="h-10 w-auto">
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-6">
                <a href="#home"
                    class="nav-link font-medium hover:text-[#5CB247] transition-colors duration-200">{{ __('translation.home') }}</a>

                <!-- Services Dropdown -->
                <div class="relative group">
                    <button
                        class="nav-link font-medium hover:text-[#5CB247] transition-colors duration-200 flex items-center space-x-1">
                        <span>{{ __('translation.services') }}</span>
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div
                        class="dropdown-menu absolute top-full left-0 mt-2 w-48 bg-[#FEF8DC] rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <a href="#dairy-solution"
                            class="block px-4 py-3 text-gray-800 hover:text-[#5CB247] hover:bg-[#5CB247]/10 transition-colors duration-200 first:rounded-t-lg">{{ __('translation.dairy_solution') }}</a>
                        <a href="#beef-fattening"
                            class="block px-4 py-3 text-gray-800 hover:text-[#5CB247] hover:bg-[#5CB247]/10 transition-colors duration-200">{{ __('translation.beef_fattening') }}</a>
                        <a href="#contract-farming"
                            class="block px-4 py-3 text-gray-800 hover:text-[#5CB247] hover:bg-[#5CB247]/10 transition-colors duration-200">{{ __('translation.contract_farming') }}</a>
                        <a href="#iot-devices"
                            class="block px-4 py-3 text-gray-800 hover:text-[#5CB247] hover:bg-[#5CB247]/10 transition-colors duration-200 last:rounded-b-lg">{{ __('translation.iot_devices') }}</a>
                    </div>
                </div>

                <a href="#partners"
                    class="nav-link font-medium hover:text-[#5CB247] transition-colors duration-200">{{ __('translation.partners') }}</a>
                <a href="#awards"
                    class="nav-link font-medium hover:text-[#5CB247] transition-colors duration-200">{{ __('translation.awards') }}</a>
                <a href="#about"
                    class="nav-link font-medium hover:text-[#5CB247] transition-colors duration-200">{{ __('translation.about_us') }}</a>
                <a href="#contact"
                    class="nav-link font-medium hover:text-[#5CB247] transition-colors duration-200">{{ __('translation.contact_us') }}</a>
                <a href="#demo"
                    class="bg-[#5CB247] text-[#FEF8DC] px-6 py-2.5 rounded-full font-medium hover:bg-[#4a9539] transition-all duration-200 shadow-md hover:shadow-lg">{{ __('translation.request_demo') }}</a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="lg:hidden nav-link focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                    <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden pb-4">
            <div class="flex flex-col space-y-3">
                <a href="#home"
                    class="nav-link font-medium hover:text-[#5CB247] transition-colors duration-200 mobile-link">{{ __('translation.home') }}</a>

                <!-- Mobile Services Accordion -->
                <div>
                    <button id="mobile-services-btn"
                        class="nav-link font-medium hover:text-[#5CB247] transition-colors duration-200 flex items-center justify-between w-full">
                        <span>{{ __('translation.services') }}</span>
                        <svg id="mobile-services-icon" class="w-4 h-4 transition-transform duration-200" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div id="mobile-services-menu" class="hidden pl-4 mt-2 space-y-2">
                        <a href="#dairy-solution"
                            class="block nav-link hover:text-[#5CB247] transition-colors duration-200 mobile-link">{{ __('translation.dairy_solution') }}</a>
                        <a href="#beef-fattening"
                            class="block nav-link hover:text-[#5CB247] transition-colors duration-200 mobile-link">{{ __('translation.beef_fattening') }}</a>
                        <a href="#contract-farming"
                            class="block nav-link hover:text-[#5CB247] transition-colors duration-200 mobile-link">{{ __('translation.contract_farming') }}</a>
                        <a href="#iot-devices"
                            class="block nav-link hover:text-[#5CB247] transition-colors duration-200 mobile-link">{{ __('translation.iot_devices') }}</a>
                    </div>
                </div>

                <a href="#partners"
                    class="nav-link font-medium hover:text-[#5CB247] transition-colors duration-200 mobile-link">{{ __('translation.partners') }}</a>
                <a href="#awards"
                    class="nav-link font-medium hover:text-[#5CB247] transition-colors duration-200 mobile-link">{{ __('translation.awards') }}</a>
                <a href="#about"
                    class="nav-link font-medium hover:text-[#5CB247] transition-colors duration-200 mobile-link">{{ __('translation.about_us') }}</a>
                <a href="#contact"
                    class="nav-link font-medium hover:text-[#5CB247] transition-colors duration-200 mobile-link">{{ __('translation.contact_us') }}</a>
                <a href="#demo"
                    class="bg-[#5CB247] text-[#FEF8DC] px-6 py-2.5 rounded-full font-medium hover:bg-[#4a9539] transition-colors duration-200 text-center mobile-link">{{ __('translation.request_demo') }}</a>
            </div>
        </div>
    </div>
</nav>

<style>
    /* Initial transparent state */
    #navbar {
        background-color: transparent;
    }

    #navbar .nav-link,
    #navbar .logo-text {
        color: #FEF8DC;
    }

    /* Scrolled state */
    #navbar.scrolled {
        background-color: rgba(254, 248, 220, 0.98);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
    }

    #navbar.scrolled .nav-link,
    #navbar.scrolled .logo-text {
        color: #1a1a1a;
    }

    #navbar.scrolled .nav-link:hover {
        color: #5CB247;
    }

    /* Dropdown menu on scroll */
    #navbar.scrolled .dropdown-menu {
        background-color: #FEF8DC;
    }

    /* Smooth scroll behavior */
    html {
        scroll-behavior: smooth;
    }
</style>

<script>
    // Navbar scroll effect
    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    mobileMenuBtn.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });

    // Mobile services accordion
    const mobileServicesBtn = document.getElementById('mobile-services-btn');
    const mobileServicesMenu = document.getElementById('mobile-services-menu');
    const mobileServicesIcon = document.getElementById('mobile-services-icon');

    mobileServicesBtn.addEventListener('click', function() {
        mobileServicesMenu.classList.toggle('hidden');
        mobileServicesIcon.classList.toggle('rotate-180');
    });

    // Close mobile menu when clicking on a link
    const mobileLinks = document.querySelectorAll('.mobile-link');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        });
    });

    // Active link highlight based on scroll position
    window.addEventListener('scroll', function() {
        const sections = document.querySelectorAll('section[id], div[id]');
        const navLinks = document.querySelectorAll('a[href^="#"]');

        let currentSection = '';

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (window.scrollY >= (sectionTop - 100)) {
                currentSection = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('text-[#5CB247]');
            if (link.getAttribute('href') === '#' + currentSection) {
                link.classList.add('text-[#5CB247]');
            }
        });
    });
</script>
