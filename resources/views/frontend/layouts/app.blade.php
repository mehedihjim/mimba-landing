<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', config('app.name'))</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{-- CSRF Token (important for forms/AJAX) --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Vite CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Additional styles --}}
</head>

<body class="antialiased bg-white text-gray-800">

    {{-- Navbar --}}
    @include('frontend.partials.navbar')

    {{-- Main Content --}}
    <main class="min-h-screen">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('frontend.partials.footer')

    {{-- Scroll to Top Button --}}
    @include('frontend.partials.scroll-to-top')
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- Additional scripts --}}
    @stack('scripts')

</body>

</html>
