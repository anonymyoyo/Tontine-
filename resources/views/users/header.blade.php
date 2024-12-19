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
