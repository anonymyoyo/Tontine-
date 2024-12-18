

{{-- <div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <!-- loading content here -->
            <div class="tp-preloader-content">
                <div class="tp-preloader-logo">
                     <div class="tp-preloader-circle">
                        <svg width="190" height="190" viewBox="0 0 380 380" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6"
                                stroke-linecap="round"></circle>
                            <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round">
                            </circle>
                        </svg>
                    </div>

                </div>
                <style>
                    .svg {
                        width: 70%;
                        height: 250px;
                        background-color: black;
                        border-radius: 50%;
                        margin-top: -400px;
                    }

                    .svg .img_svg {
                        width: 60%;
                        height: 60%;
                        /* margin-left: 10%;*/
                        margin-top: 50px;
                    }

                    .description_svg {
                        text-align: center;
                    }

                    .description_svg .tp-preloader-title {
                        margin-left: -90px;
                        font-size: 50px;
                        font-weight: 600;
                    }


                    .description_svg .tp-preloader-subtitle {
                        margin-left: -90px;
                        font-size: 20px;
                        font-weight: 600;
                    }

                    @media (max-width:765px) {
                        .svg {
                            width: 70%;
                            height: 250px;
                            background-color: black;
                            border-radius: 50%;
                            margin-top: -200px;
                            margin-left: 50px;
                        }

                        .svg .img_svg {
                            width: 60%;
                            height: 60%;
                            /* margin-left: 10%;*/
                            margin-top: 50px;
                        }

                        .description_svg {
                            text-align: center;
                        }

                        .description_svg .tp-preloader-title {
                            margin-left: 2px;
                            font-size: 40px;
                            font-weight: 600;
                        }


                        .description_svg .tp-preloader-subtitle {
                            margin-left: -90px;
                            font-size: 15px;
                            font-weight: 600;
                        }
                    }
                </style>
                <div class="svg">
                    <img class="img_svg" src="asets/img/logo/preloader/logo.svg" alt="">
                </div>

                <div class="description_svg">
                    <h3 class="tp-preloader-title">TCA Miracle</h3>
                    <p class="tp-preloader-subtitle">chargement...</p>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@if (auth()->user())

<div class="header">
    <div class="logo">
    <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" class="logo-1" alt="logo"></a>
    </div>
    <div class="r"></div>
    <div class="navbar">
        <nav class="nav">
            <ul>
                <li class="li"><a href="{{ route('home') }}">ACCEUIL</a></li>
                <li class="li"><a href="#">SERVICES</a></li>
                <li class="li"><a href="#">AGENT</a></li>
                <li class="li"><a href="{{ route('user') }}">{{ auth()->user()->name }}</a></li>
                <li class="li">
                    <form action="{{ route('logout') }}" method="POST" id="logout">
                    @csrf
                    </form>
                    <a class="li-3" onclick="event.preventDefault();
                    document.getElementById('logout').submit();" >
                    Deconnexion
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@else

<div class="header">
    <div class="logo">
    <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" class="logo-1" alt="logo"></a>
    </div>
    <div class="r"></div>
    <div class="navbar">
        <nav class="nav">
            <ul>
                <li class="li"><a href="{{ route('home') }}">ACCEUIL</a></li>
                <li class="li"><a href="#">SERVICES</a></li>
                <li class="li"><a href="#">AGENT</a></li>
                <li class="li"><a href="{{ route('register') }}">INSCRIPTION</a></li>
                <li class="li"><a href="{{ route('login') }}">CONNEXION</a></li>
            </ul>
        </nav>
    </div>
</div>
@endif
