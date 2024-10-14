


                    @if (auth()->user())
<header>
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="{{ route('user') }}">
                <!-- logo start -->
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="logo">
                <!-- logo end -->
            </a>
            {{-- <div class="d-flex flex-row align-items-center order-2 order-lg-3">
                <div class="out-link d-none d-sm-flex align-items-center">
                    <a href="#registration-popup" class="primary-btn primary-effect registration-popup-link">Nous rejoindre</a>
                </div> --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNav"
                    aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle Primary Nav">
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            {{--</div> --}}
            <div class="collapse navbar-collapse justify-content-end order-3 order-lg-2" id="primaryNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link link-active secondary-effect" href="{{ route('user') }}">Acceuil</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link secondary-effect" href="{{ route('about') }}">A propos</a>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle secondary-effect" href="#"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside">Pages</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item secondary-effect mt-0" href="blog.html">Blog</a>
                            </li>
                            <li>
                                <a class="dropdown-item secondary-effect" href="blog-details.html">Blog Details</a>
                            </li>
                            <li>
                                <a class="dropdown-item secondary-effect" href="affiliate-program.html">Affiliate
                                    Programs</a>
                            </li>
                            <li>
                                <a class="dropdown-item mb-0 secondary-effect" href="404.html">Error</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link secondary-effect" href="{{ route('contacts') }}">Contact</a>
                    </li>
                    <li class="nav-item dropdown">


                            <a class="nav-link dropdown-toggle secondary-effect" href="#"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside">Profil {{ auth()->user()->name }}</a>


                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item secondary-effect mt-0" href="{{ route('login') }}">Infos compte</a>
                                    </li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST" id="logout">
                                            @csrf
                                        </form>
                                        <a href="" class="dropdown-item secondary-effect" onclick="event.preventDefault();
                                        document.getElementById('logout').submit();" >
                                        Deconnexion
                                        </a>
                                    </li>
                                </ul>
                    </li>
                        @else
                        <header>
                            <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
                                <div class="container">
                                    <a class="navbar-brand" href="{{ route('home') }}">
                                        <!-- logo start -->
                                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="logo">
                                        <!-- logo end -->
                                    </a>
                                    {{-- <div class="d-flex flex-row align-items-center order-2 order-lg-3">
                                        <div class="out-link d-none d-sm-flex align-items-center">
                                            <a href="#registration-popup" class="primary-btn primary-effect registration-popup-link">Nous rejoindre</a>
                                        </div>--}}
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNav"
                                            aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle Primary Nav">
                                            <span class="icon-bar top-bar"></span>
                                            <span class="icon-bar middle-bar"></span>
                                            <span class="icon-bar bottom-bar"></span>
                                        </button>
                                    {{--</div> --}}
                                    <div class="collapse navbar-collapse justify-content-end order-3 order-lg-2" id="primaryNav">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link link-active secondary-effect" href="{{ route('home') }}">Acceuil</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link secondary-effect" href="{{ route('about') }}">A propos</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle secondary-effect" href="#"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">Pages</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item secondary-effect mt-0" href="blog.html">Blog</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item secondary-effect" href="blog-details.html">Blog Details</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item secondary-effect" href="affiliate-program.html">Affiliate
                                                            Programs</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item mb-0 secondary-effect" href="404.html">Error</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link secondary-effect" href="{{ route('contact') }}">Contact</a>
                                            </li>
                        <li class="nav-item dropdown">


                            <a class="nav-link dropdown-toggle secondary-effect" href="#"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside">Profil</a>


                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item secondary-effect mt-0" href="{{ route('login') }}">Connexion</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('register') }}" class="dropdown-item secondary-effect" >
                                        Inscription
                                        </a>
                                    </li>
                                </ul>
                    </li>
                    @endif
                    {{-- <li class="nav-item d-block d-sm-none">
                        <a href="#"
                            class="nav-link">Nous rejoindre</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
</header>
