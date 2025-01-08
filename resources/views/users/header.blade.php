<style>
    .navpar {
        position: absolute;
        margin-top: -10px;
        display: flex;
        width: 95%;
        box-sizing: border-box;
        justify-content: space-between;
        align-items: center;
        z-index: 999999;
    }

    .navpar a {
        color: aliceblue;
    }

    .navpar .logo {
        width: 160px;
        height: 50px;
        margin-top:5px;
    }

    .navpar .nav-links {
        background-color: black;
        border-radius: 25px;
        height: 45px;

    }

    .navpar .nav-links ul {
        display: flex;
        margin-top: 10px;
    }

    .navpar .nav-links ul li {
        margin: 0 25px;
    }

    .navpar .nav-links ul li select{
        background-color: #070707;
        color: white;
        border: none;
    }

    .navpar .nav-links ul li select option{
        background-color: #90cf35;
        font-size: 600;
    }

    .navpar .nav-links ul li.active a {
        color: #578a10;
        font-weight: 600;
    }

    .navpar .menu-hamburger {
        width: 35px;
        position: absolute;
        top: 0;
        right: 50px;
        display: none;
    }

    .menu-hamburger span {
        background-color: rgb(0, 0, 0);
        height: 7px;
        width: 40px;
        right: 50px;
        display: block;
        border-radius: 7px;
        margin-bottom: 7px;
    }

    .dropdown{
        position: relative;
        display: inline-block;
    }

    .dropdown-button{
        background-color: black;
        color: white;
        /* padding: 16px; */
        border: none;
        cursor: pointer;
    }

    .dropdown-button:hover{
        background-color: black;
    }

    .dropdown-content{
        display: none;
        position: absolute;
        background-color: #578a10;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a{
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover{
        background-color: white;
    }

    .dropdown:hover .dropdown-content{
        display: block;
    }

    .dropdown:hover .dropdown-button{
        /* background-color: white; */
    }

    /* .mobile-menu {
    margin-left: 0;
    } */

    @media screen and (max-width:900px) {

        .navpar {
            margin-top: -20px;
        }

        .nav-links {
            position: absolute;
            background-color: black;
            border-radius: 25px;
            height: 45px;
            top: 0;
            left: 0;
            margin-left: -100%;
            backdrop-filter: blur(7px);
            /* display: flex;
            backdrop-filter:blur(7px);
            justify-content: center;
            align-items: center; */
            transition: all .5s linear;
        }

        .nav-links.mobile-menu {
            margin-left: 0;
        }

        .navpar .menu-hamburger {
            display: block;
        }

        .nav-links ul {
            flex-direction: row;
            /* flex-direction: column; */
            display: flex;
        }

        .navpar .nav-links ul {
            margin-top: -2px;
        }

        .navpar .nav-links ul li {
            margin: 0 10px;
            font-size: 1.2em;
        }

        .navpar .logo {
            top: -10px;
            width: 100px;
            position: absolute;
            left: 50px;
        }
    }

    @media screen and (max-width:480px) {

        .navpar {
            padding: 0;
        }

        .nav-links {
            position: absolute;
            background-color: black;
            border-radius: 25px;
            height: 45px;
            top: 0;
            width: 90%;
            left: -10px;
            margin-left: -150%;
            backdrop-filter: blur(7px);
            /* display: flex;
            backdrop-filter:blur(7px);
            justify-content: center;
            align-items: center; */
            transition: all .5s linear;
        }

        .nav-links.mobile-menu {
            margin-left: 0;
        }

        .navpar .menu-hamburger {
            display: block;
            height: 6px;
            margin-right: -60px;
        }

        .nav-links ul {
            flex-direction: row;
            /* flex-direction: column; */
            display: flex;
        }

        .navpar .nav-links ul {
            margin-top: 10px;
        }

        .navpar .nav-links ul li {
            margin: 0 8px;
            font-size: 20px;
            /* font-size: 1em; */
        }
        .navpar .nav-links ul li a {
            /* margin: 0 8px; */
            font-size: 15px;
            /* font-size: 1em; */
        }

        .navpar .logo {
            top: 5px;
            width: 100px;
            position: absolute;
            left: -10px;
        }
    }

    @media screen and (max-width:390px) {

        .navpar {
            padding: 0;
        }

        .nav-links {
            position: absolute;
            background-color: black;
            border-radius: 25px;
            height: 35px;
            width: 150%;
            top: -60px;
            left: -30px;
            margin-left: -150%;
            backdrop-filter: blur(7px);
            /* display: flex;
            backdrop-filter:blur(7px);
            justify-content: center;
            align-items: center; */
            transition: all .5s linear;
        }

        .nav-links.mobile-menu {
            margin-left: 0;
        }

        .navpar .menu-hamburger {
            display: block;
        }

        .nav-links ul {
            flex-direction: row;
            /* flex-direction: column; */
            display: flex;
        }

        .navpar .nav-links ul {
            margin-top: 10px;
        }

        .navpar .nav-links ul li {
            margin: 0 5px;
            margin-top: 5px;
            font-size: .8em;
        }

        .navpar .logo {
            top: -8px;
            width: 100px;
            position: absolute;
            left: -90px;
        }
    }

    @media screen and (max-width:280px) {

        .navpar {
            top: 95px;
            padding: 0;
        }

        .nav-links {
            position: absolute;
            background-color: black;
            border-radius: 25px;
            height: 25px;
            top: -55px;
            left: -40;
            margin-left: -150%;
            backdrop-filter: blur(7px);
            /* display: flex; */
            /* backdrop-filter:blur(7px);
            justify-content: center;
            align-items: center; */
            transition: all .5s linear;
        }

        .nav-links.mobile-menu {
            margin-left: 0;
        }

        .navpar .menu-hamburger {
            display: block;
        }

        .nav-links ul {
            flex-direction: row;
            /* flex-direction: column; */
            display: flex;
        }

        .navpar .nav-links ul {
            margin-top: 10px;
        }

        .navpar .nav-links ul li {
            margin: 0 6px;
            margin-top: 5px;
            /* font-size: .6em; */
        }

        .navpar .nav-links ul li a{
            font-size: 10px;
        }

        .navpar .nav-links ul li select{
            margin-top: -25px;
            font-size: 10px;
        }

        .navpar .logo {
            margin-top: 3px;
            width: 80px;
            position: absolute;
            margin-left: 105px;
        }
    }
</style>

@if (auth()->user())

{{-- <div class="header">
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
</div> --}}
    <nav class="navpar">
        <a href="#" class="logo">SHOP</a>
        <div class="nav-links">
        <ul>
            <li class="active"><a href="{{ route('home') }}">ACCEUIL</a></li>
            <li><a href="#">SERVICES</a></li>
            <li><a href="#">AGENT</a></li>
            {{-- <li> --}}
                <a href="#">AGENT</a></li>
                <select>
                    <option value="">Selectionner</option>
                    <option value=""><a href="{{ route('user') }}">{{ auth()->user()->name }}</a></option>
                    <option value=""><form action="{{ route('logout') }}" method="POST" id="logout">
                            @csrf
                            </form>
                            <a class="li-3" onclick="event.preventDefault();
                            document.getElementById('logout').submit();" >
                            Deconnexion
                            </a></option>
                </select>
            {{-- </li> --}}

        </ul>
        </div>
        <div class="menu-hamburger">
        <span></span>
        <span></span>
        <span></span>
        </div>
    </nav>
@else

    <nav class="navpar">
        <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" class="logo"></a>
        <div class="nav-links">
        <ul>
            <li class="active"><a href="{{ route('home') }}">ACCEUIL</a></li>

            {{-- <div class="dropdown">
                <button class="dropdown-button">Profil</button>
                <div class="dropdown-content">
                    <a href="#">lien1</a>
                    <a href="#">lien2</a>
                    <a href="#">lien3</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropdown-button">Services</button>
                <div class="dropdown-content">
                    <a href="#">lien1</a>
                    <a href="#">lien2</a>
                    <a href="#">lien3</a>
                </div>
            </div> --}}
            {{-- <li class="dropdown">
                <button class="dropdown-button">CATEGORIES</button>
                <div class="dropdown-content" name="" id="">
                    @foreach ($category as $categories)
                        <a href="{{ route('category', $categories) }}">{{ $categories->name }}</a>
                    @endforeach
                </div>
            </li> --}}
            <li class="dropdown">
                <button class="dropdown-button">SERVICES</button>
                <div class="dropdown-content" name="" id="">
                    <a href="#">SERVICES</a>
                    <a href="#">AGENT</a>
                </div>

            </li>
            <li class="dropdown">
                <button class="dropdown-button">PROFIL</button>
                <div class="dropdown-content" name="" id="">
                    {{-- <a href="#">PROFIL</a> --}}
                    <a href="{{ route('register') }}">INSCRIPTION</a>
                    <a href="{{ route('login') }}">CONNEXION</a>
                </div>
            </li>


        </ul>
        </div>
        <div class="menu-hamburger">
        <span></span>
        <span></span>
        <span></span>
        </div>
    </nav>
{{-- <div class="header">
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
</div> --}}
@endif


