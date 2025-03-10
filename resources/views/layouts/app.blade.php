<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="From Computronix College to Colegio de Dagupan to Universidad de Dagupan, we are proud to be the first ISO 21001:2018 certified university in Region 1.">
    <meta name="keywords"
        content="Computronix College, Colegio de Dagupan, Universidad de Dagupan, ISO 21001:2018 Certified, First ISO Certified University in Region 1, Quality Education, Higher Education in Dagupan, Accredited University in Region 1">
    <title>{{ 'Universidad de Dagupan | Formerly Colegio de Dagupan' }}</title>
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
    <main class="my-4">
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
</body>

</html>
