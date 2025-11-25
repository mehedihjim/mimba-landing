@php
    $bn = app()->getLocale() == 'bn';
@endphp

<footer class="bg-black/90 text-white pt-16 pb-8">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">

        {{-- Column 1: Logo & Description --}}
        <div>
            <div class="flex items-center mb-4">
                <img src="{{ asset('medias/images/logos/bluebond_logo_v2.png') }}" alt="BlueBondBD Logo" class="w-42 mr-2">
                {{-- <span class="text-2xl font-bold">
                    {{ $bn ? 'United' : 'United' }}
                    <span class="text-blue-400">{{ $bn ? ' Software Solutions' : ' Software Solutions' }}</span>
                </span> --}}
            </div>
            <p class="text-gray-300">
                {{ $bn
                    ? 'BlueBondBD: বাংলাদেশী মৎস্যচাষীদের জন্য স্মার্ট ফার্মিং সমাধান উদ্ভাবন করছে।'
                    : 'BlueBondBD: Innovating smart farming solutions for Bangladeshi fish farmers.' }}
            </p>
        </div>

        {{-- Column 2: Quick Links --}}
        <div>
            <h4 class="font-semibold mb-4">{{ $bn ? 'দ্রুত লিংক' : 'Quick Links' }}</h4>
            <ul class="space-y-2">
                <li>
                    <a href="" class="text-white hover:text-blue-200 transition-colors">
                        {{ __('translation.home') }}
                    </a>
                </li>
                <li>
                    <a href="#about" class="text-white hover:text-blue-200 transition-colors">
                        {{ __('translation.about') }}
                    </a>
                </li>
                <li>
                    <a href="#features" class="text-white hover:text-blue-200 transition-colors">
                        {{ __('translation.features') }}
                    </a>
                </li>
                <li>
                    <a href="#use-cases" class="text-white hover:text-blue-200 transition-colors">
                        {{ __('translation.use_cases') }}
                    </a>
                </li>
                <li>
                    <a href="#technology" class="text-white hover:text-blue-200 transition-colors">
                        {{ __('translation.technology') }}
                    </a>
                </li>
                <li>
                    <a href="#join" class="text-white hover:text-blue-200 transition-colors">
                        {{ __('translation.contact') }}
                    </a>
                </li>
            </ul>
        </div>

        {{-- Column 3: Contact Info --}}
        <div>
            <h4 class="font-semibold mb-4">{{ $bn ? 'যোগাযোগের তথ্য' : 'Contact Info' }}</h4>
            <ul class="space-y-2 text-gray-300">
                <li>
                    {{ $bn ? 'ইমেইল:' : 'Email:' }}
                    <a href="mailto:info@bluebondbd.com" class="hover:text-green-400 transition">
                        info@bluebondbd.com
                    </a>
                </li>
                <li>
                    {{ $bn ? 'হটলাইন:' : 'Hotline:' }}
                    <a href="tel:+8801708169403" class="hover:text-green-400 transition">
                        +880 170 816 9403
                    </a>
                </li>
                <li>
                    {{ $bn ? 'অফিস:' : 'Office:' }}
                    {{ $bn ? 'বাড়ি ২/১, রোড ২, ব্লক সি, মিরপুর, ঢাকা-১২১৬' : 'House 2/1, Road 2, Block C, Mirpur, Dhaka-1216' }}
                </li>
            </ul>
        </div>

        {{-- Column 4: App Download --}}
        <div>
            <h4 class="font-semibold mb-4">{{ $bn ? 'শুরু করুন' : 'Get Started' }}</h4>
            <p class="text-gray-300 mb-4">
                {{ $bn
                    ? 'মোবাইল অ্যাপ ডাউনলোড করুন এবং আজই স্মার্ট ফার্মিং শুরু করুন।'
                    : 'Download the mobile app and start smart farming today.' }}
            </p>
            <div class="flex gap-1">
                {{-- Uncomment when app stores are ready
                <a href="/" class="inline-block">
                    <img src="{{ asset('images/google-play.png') }}" alt="Google Play" class="h-12">
                </a>
                <a href="/" class="inline-block">
                    <img src="{{ asset('images/app-store.png') }}" alt="App Store" class="h-12">
                </a> 
                --}}
                <a href="" class="py-3 px-2 bg-transparent border border-white rounded-full w-fit">
                    {{ $bn ? 'শীঘ্রই আসছে...' : 'Coming Soon...' }}
                </a>
            </div>
        </div>

    </div>

    {{-- Footer Bottom --}}
    <div class="mt-12 text-center text-gray-400 text-sm">
        &copy; {{ date('Y') }} Mimba. All rights reserved.
    </div>
</footer>
