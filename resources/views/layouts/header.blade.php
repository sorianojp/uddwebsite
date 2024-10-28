<header>
    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    <div class="overlay"></div>
    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="{{ asset('videos/header.mp4') }}" type="video/mp4">
    </video>
    <!-- The header content -->
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <img class="img-fluid shadow" src="{{ asset('images/logo.png') }}" width="150px">
                <h1 class="display-5">Universidad de Dagupan</h1>
                <p class="lead mb-0">Dat Deus Et Laborant Homines</p>
            </div>
        </div>
    </div>
</header>
