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
            width: 100%;
            /* Let the width auto-fit the container */
            height: 400px;
            /* Fixed height */
            overflow: hidden;
            /* Hide any overflow */
        }

        .image-container img {
            width: 100%;
            /* Make the image take up the full width */
            height: 100%;
            /* Fill the height (400px) */
            object-fit: cover;
            /* Ensure the image maintains its aspect ratio and crops if needed */
        }

        .content-container p a {
            word-wrap: break-word;
            word-break: break-all;
        }


        .content-container p img {
            width: 100% !important;
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
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
    <script>
        const img = document.querySelector('#content-container p img');
        img.classList.add('img-fluid');
    </script>
    @yield('scripts')
</body>

</html>
