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
    <!-- header start -->
    {{-- @include('users/header') --}}
    <!-- header end -->

    <div class="user_profil">
        <div class="profil_grid">
          <img src="{{ Storage::url(auth()->user()->image) }}" class="image_profile" alt="image de profil"><span class="span">
            @foreach ($solde as $sold)
            {{ $sold->solde }} XAF
            @endforeach
         </span>
          <p>{{ auth()->user()->name }}
            <form action="{{ route('logout') }}" method="POST" id="logout">
            @csrf
            </form>
            <a class="li-3" onclick="event.preventDefault();
            document.getElementById('logout').submit();">
            Deconnexion
            </a></p>
        </div>
        <div class="user_nav">
          <nav>
            <ul>
              <li>Notifications</li>
              <li>Mon panier</li>
              <li>Recherche</li>
              <li>Service client</li>

            </ul>
          </nav>
        </div>
    </div>
      <span class="cp">Transfert</span>
      <span class="cp">Retrait</span>
      <span class="cp">Depot</span>
      <span class="cp">Pret</span>
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
                <div class="grid">
                    <div class="user_grid">
                    TCA BONUS
                    </div>
                </div>
                <div class="grid">
                    <div class="user_grid">
                    MY WAY
                    </div>
                </div>
            </div>
            <div class="grid3">
                <div class="grid">
                    <div class="user_grid">
                    PAWA
                    </div>
                </div>
                <div class="grid">
                    <div class="user_grid">
                    BEST DEAL
                    </div>
                </div>
            </div>
        </div>
      </div>
<br><br>
        <div class="separator"></div><br>
        <a href="#transaction">Nos Services</a>

        <div class="super_grid1">
                    <div class="grid">
                        <div class="user_grid">
                        SOS credit
                        </div>
                    </div>
                    <div class="grid">
                        <div class="user_grid">
                        Importation en Chine
                        </div>
                    </div>
                    <div class="grid">
                        <div class="user_grid">
                        Formation
                        </div>
                    </div>
                    <div class="grid">
                        <div class="user_grid">
                        Marketing Digital
                        </div>
                    </div>
            </div>
        </div>

        <div class="separator"></div><br>
        <a href="#transaction">Besoin d'aide?</a>
        <div class="super_grid1">
                    <div class="grid">
                        <div class="user_grid">
                        Contacter un agent
                        </div>
                    </div>
                    <div class="grid">
                        <div class="user_grid">
                        Localiser une agence
                        </div>
                    </div>
                    <div class="grid">
                        <div class="user_grid">
                        Devenir partenaire
                        </div>
                    </div>
            </div>
        </div>
<br><br><br><br><br>
    <!-- footer start -->
    {{-- @include('users/newsletter_footer') --}}
    <!-- footer end -->

    @include('users/script')
</body>


