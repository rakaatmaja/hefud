<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- karena template untuk frontpage, silakan Lengkapi meta tag yang lain untuk SEO --}}
        {{-- nama web sesuai konfigurasi, dapat juga dibuat dinamis --}}
        <title>Laravel-Shop</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
        
        <!-- Pastikan Anda telah menyertakan Slick Slider CSS dan JS -->
        <style>
            .fade-enter-active, .fade-leave-active {
              transition: opacity 0.5s;
            }
            .fade-enter, .fade-leave-to {
              opacity: 0;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
        {{-- membuat komponen navigation untuk home --}}
        {{-- basenya bisa menggunakan layouts.navigation, hanya saja hilangkan bagian menu login --}}
            {{-- @include('layouts.navigationhome') --}}
            <!-- Page Content -->
            <main>
                {{-- SLot untuk halaman konten yang berubah dinamis
                sesuai dengan view yang dipanggil oleh controller --}}
                {{ $slot }}
            </main>
            @include('layouts.footer')
        </div>
        
    </body>
    
</html>