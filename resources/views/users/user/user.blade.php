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
                </div> --}}<a href="#transaction">Mes bons plans</a>
      <div class="super_grid">
        <div class="grid1">
            <div class="grid">
                <div class="user_grid">
                Notre Catalogue
                </div>
            </div>
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
        <a href="#transaction">Nos Services</a>

        <div class="super_grid1">
            <span class="cp"> <img src="{{ asset('assets/css/img/forme7.png') }}" alt=""><p>SOS credit</p> </span>
            <span class="cp"> <img src="{{ asset('assets/css/img/forme8.png') }}" alt=""><p>Import Chine</p> </span>
            <span class="cp"> <img src="{{ asset('assets/css/img/forme9.png') }}" alt=""><p>transfert international</p> </span>
            <span class="cp"> <img src="{{ asset('assets/css/img/forme10.png') }}" alt=""><p>Produits/ Services</p> </span>
            </div>
        </div>

        <div class="separator"></div><br>
        <a href="#transaction">Besoin d'aide?</a>
        <div class="super_grid1">
            <span class="cp"> <img src="{{ asset('assets/css/img/forme11.png') }}" alt=""><p>Contacter agent</p> </span>
            <span class="cp"> <img src="{{ asset('assets/css/img/forme12.png') }}" alt=""><p>Localiser agence</p> </span>
            <span class="cp"> <img src="{{ asset('assets/css/img/forme13.png') }}" alt=""><p>Devenir partenaire</p> </span>
            </div>
        </div>
<br><br><br><br><br>
    @include('users/script')
</body>


