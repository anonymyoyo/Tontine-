@include('users/head')

<body>

    <nav class="nav-bottom">
        <!-- <div class="logo">
          <img src="" alt="logo">
        </div> -->
        <div>
          <ul>
            <li><a href="#">Mon compte</a></li>
            <li><a href="#">Acceuil</a></li>
            <li><a href="#">TCA Money</a></li>
            <li><a href="#">MarketPlace</a></li>
          </ul>
        </div>
    </nav>

        <div class="user_profil">
            <div class="user_nav">
                <nav>
                    <ul> <img src="{{ Storage::url(auth()->user()->image) }}" class="image_profile" alt="image de profil">
                    <li>Notifications</li>
                    <li>Panier</li>
                    <li>Recherche</li>
                    <li>Service client</li>
                    <li><form action="{{ route('logout') }}" method="POST" id="logout">
                        @csrf
                        </form>
                        <a class="li-3" onclick="event.preventDefault();
                        document.getElementById('logout').submit();">
                        Deconnexion
                        </a></p></li>
                    </ul>
                </nav>
            </div>
        </div>


    <div class="profil_grid">
        <div class="profil_grid1">

          <p>Solde Principal</p>
          <span class="span">
            @foreach ($solde as $sold)
            {{ $sold->solde }}
            @endforeach
         </span>XAF

        </div>
        <div class="profil_grid2">
            <p>Solde credi</p>
            <span class="span">
              @foreach ($solde as $sold)
              {{ $sold->solde }}
              @endforeach
           </span>XAF
        </div>
    </div>


    <div class="super_cp">
      <a href="{{ route('user.transfert') }}" class="cp"> <img src="{{ asset('assets/css/img/forme1.png') }}" alt=""><p>Transfert</p> </a>
      <a href="{{ route('user.retrait') }}" class="cp"><img src="{{ asset('assets/css/img/forme2.png') }}" alt=""><p>Retrait</p></a>
      <a href="{{ route('user.depot') }}" class="cp"><img src="{{ asset('assets/css/img/forme3.png') }}" alt=""><p>Depot</p></a>
      <a href="#" class="cp"><img src="{{ asset('assets/css/img/forme4.png') }}" alt=""><p>Pret</p></a>
    </div><br>

      <div class="separator"></div><br>
      {{-- <div class="transaction_client">
                    <a href="#transaction">Derniere Transaction</a>
                </div> --}}<a href="#transaction" id='transaction'>Mes bons plans</a>
      <div class="super_grid">
        <div class="grid1">

                <img src="{{ asset('assets/css/img/affiche.png') }}" alt="" class="affiche">

        </div>
        <div class="grid2">
            <div class="grid3">
                    <span class="cp"> <img src="{{ asset('assets/css/img/forme5.png') }}" alt=""><p>TCA BONUS</p> </span>
            </div>
            <div class="grid3">
                    <span class="cp"> <img src="{{ asset('assets/css/img/forme6.png') }}" alt=""><p>BEST DEAL</p> </span>
            </div>
        </div>
      </div>
            <br><br>
        <div class="separator"></div><br>
        <a href="#transaction" id='transaction'>Nos Services</a>

        <div class="super_grid1">
            <span class="cp"> <img src="{{ asset('assets/css/img/forme7.png') }}" alt=""><p>SOS credit</p> </span>
            <span class="cp"> <img src="{{ asset('assets/css/img/forme8.png') }}" alt=""><p>Import Chine</p> </span>
            <span class="cp"> <img src="{{ asset('assets/css/img/forme9.png') }}" alt=""><p>transfert international</p> </span>
            <span class="cp"> <img src="{{ asset('assets/css/img/forme10.png') }}" alt=""><p>Produits/ Services</p> </span>
            </div>
        </div>

        {{-- <style>

            .mavbar{
                display: flex;
                justify-content: space-between;
                align-items: center;
                background-color: #333;
                padding: 1rem;
            }

            .brand-title{
                font-size: 1.5rem;
                color: white;
            }

            .mavbar-links ul{
                list-style: none;
                margin: 0;
                padding: 0;
                display: flex;
            }

            .mavbar-links li{
                margin: 0 1rem;
            }

            .mavbar-links a{
                text-decoration: none;
                color: rgb(255, 0, 0);
                font-size:1rem;
            }

            .toggle-button{
                display: none;
                flex-direction: column;
                justify-content: space-between;
                width: 30px;
                height: 21px;
            }

            .toggle-button .bar{
                height: 3px;
                width: 100%;
                background-color: rgb(157, 255, 0);
                border-radius: 10px;
            }


            @media(max-width:768px){
                .mavbar-links{
                    display:none;
                    width: 100%;
                }

                .mavbar{
                    flex-direction: column;
                    align-items: flex-start;
                }

                .toggle-button{
                    display: flex;
                }

                .mavbar-links ul{
                    width: 100%;
                    flex-direction: column;
                }

                .mavbar-links li{
                    text-align: center;
                    width: 100%;
                    padding: 1rem 0;
                }

                .mavbar-links li a{
                    width: 100%;
                }
            }
        </style>
        <nav class="mavbar">
            <div class="brand-title">Mon site</di0v>
                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
                <div class="mavbar-links">
                    <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">A propos</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
        </nav> --}}

        <div class="separator"></div><br>
        <a href="#transaction" id='transaction'>Besoin d'aide?</a>
        <div class="super_grid1">
            <span class="cp"> <img src="{{ asset('assets/css/img/forme11.png') }}" alt=""><p>Contacter agent</p> </span>
            <span class="cp"> <img src="{{ asset('assets/css/img/forme12.png') }}" alt=""><p>Localiser agence</p> </span>
            <span class="cp"> <img src="{{ asset('assets/css/img/forme13.png') }}" alt=""><p>Devenir partenaire</p> </span>
            </div>
        </div>

<br><br><br><br><br>
    {{-- @include('users/script') --}}



    {{-- <script>
        const toggleButton = document.querySelector('.toggle-button');
        const navbarLinks = document.querySelector('.mavbar-links');

        toggleButton.addEventListener('click', () =>{
            navbarLinks.classList.toggle('active');
        })
    </script> --}}
</body>


