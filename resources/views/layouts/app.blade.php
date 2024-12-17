<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Universidad de Dagupan') }}</title>
    @yield('head')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @yield('styles')
</head>

<body class="d-flex flex-column h-100">
    @include('layouts.nav')
    <main class="mt-4">
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS when the page loads
        AOS.init();
    </script>
    @yield('scripts')
    <script>
        function openFacebookApp(shareUrl) {
            // Try to open Facebook app
            var appUrl = 'fb://facewebmodal/f?href=' + shareUrl;
            var win = window.open(appUrl, '_blank');

            // If Facebook app does not open within 2 seconds, fallback to web
            setTimeout(function() {
                if (!win || win.closed || typeof win.closed == 'undefined') {
                    window.open('https://www.facebook.com/sharer/sharer.php?u=' + shareUrl, '_blank');
                }
            }, 2000);
        }
    </script>
</body>

</html>
