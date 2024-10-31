<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Universidad de Dagupan') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <style>
        .image-container {
            width: 1000px;
            height: 400px;
            overflow: hidden;
            /* Ensures the image stays within the container */
        }

        .image-container img {
            width: 100%;
            /* Ensure the image fills the width */
            height: 100%;
            /* Ensure the image fills the height */
            object-fit: cover;
            /* Maintains aspect ratio and crops the excess parts */
        }
    </style>
    @yield('styles')
</head>

<body class="d-flex flex-column h-100">
    @include('layouts.nav')
    <main class="flex-shrink-0">
        @yield('content')
    </main>
    @guest
        <footer class="footer mt-auto">
            @include('layouts.footer')
        </footer>
    @endguest
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        const img = document.querySelector('#content img');
        img.classList.add('img-fluid');
    </script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
    @yield('scripts')
</body>

</html>
