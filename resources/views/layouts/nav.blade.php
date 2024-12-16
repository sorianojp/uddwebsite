<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="img-fluid" src="{{ asset('images/logo.png') }}" width="30" height="30"> Universidad de
            Dagupan
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('allnews') }}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('allevents') }}">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('partners') }}">Partners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sdgs') }}">SDG</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif --}}
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ads.index') }}">Ads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('events.index') }}">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('departments.index') }}">Departments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('news.index') }}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tops.index') }}">Topnotchers</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
