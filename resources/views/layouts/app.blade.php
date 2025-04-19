<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang chủ')</title>
    
    <!-- CSS chung -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <!-- CSS riêng từng trang -->
    @stack('styles')
</head>
<body>
    <!-- Header -->
    @include('layouts.header')
    
    <!-- Nội dung chính -->
    <main class="py-4">
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('layouts.footer')
    
    <!-- JS chung -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    
    <!-- JS riêng từng trang -->
    @stack('scripts')
</body>
