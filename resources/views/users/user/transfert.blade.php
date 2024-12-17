

@include('users.head')

<body>

    <nav class="nav-bottom">
        <!-- <div class="logo">
          <img src="" alt="logo">
        </div> -->
        <div>
          <ul>
            <li><a href="{{ route('user') }}">Mon compte</a></li>
            <li><a href="{{ route('home') }}">Acceuil</a></li>
            <li><a href="#">TCA Money</a></li>
            <li><a href="#">MarketPlace</a></li>
          </ul>
        </div>
    </nav>

    {{-- <div class="user_profil">
        <div class="user_nav">
            <nav>
                <ul> <img src="{{ Storage::url(auth()->user()->image) }}" class="image_profile" alt="image de profil">
                <li>Notifications</li>
                <li>Panier</li>
                <li>Recherche</li>
                <li>Service client</li>
                <li><form action="{{ route('logout') }}" method="liOST" id="logout">
                    @csrf
                    </form>
                    <a class="li-3" onclick="event.preventDefault();
                    document.getElementById('logout').submit();">
                    Deconnexion
                    </a></p>
                </ul>
            </nav>
        </div>
    </div> --}}

    <div class="container login-form">
        <div class="formulaire">
          <h2 class="h2">Transferer</h2>
          <form method="POST" action="{{  route('transfert.user') }}">
          @csrf

            <div class="li">
                <label class="li-1" for="tontine">Selctioner le destinateur:</label>
            </div>
            <div class="li">
                <select class="li-2" name="membre" id="">
                    <option value="">Selectionner</option>
                    @foreach ($membre as $membres)
                    @if ($membres->id != auth()->user()->id)
                        <option value="{{ $membres->id }}">{{ $membres->name }}</option>
                    @endif

                    @endforeach

                </select>
                <br><br>
            </div>
            <div class="li">
              <label class="li-1" for="montant">Entrer le Montant:</label>
            </div>
            <div class="li">
              <input class="li-2" required type="number" name="montant" min="500" id="montant"
                placeholder="Montant Minimum 500 XAF"><br><br>
            </div>

            {{-- <div class="li">
              <label class="li-1" for="mdp">Mot de Passe:</label>
              (Confirmer la transaction)
            </div>
            <div class="li">
              <input class="li-2" required type="password" name="password" id="password"><br><br>
            </div> --}}
            <div class="li">
              <input class="li-3" type="submit" value="Transferer">
            </div>

          </form>
        </div>
    </div>




    <!-- error section start -->
    {{-- <section class="error-container bg-img">
        <div class="container">
            <div class="error-wrapper">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-8">
                        <div class="error-left-column">
                            <div class="error-thumb">
                                <img src="{{ asset('assets/images/custom/error/error-illustration.png') }}" alt="Error Illustration">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="error-right-column text-center text-lg-start">
                            <h4 class="text-center text-lg-start">Felicitation {{ auth()->user()->name }}</h4>
                            <p class="tertiary text-center text-lg-start">
                                Votre paiement a reussi
                            </p>
                            <a href="{{ route('user') }}" class="primary-btn primary-effect">Acceuil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- error section end -->

@include('users.script')
</body>


<!-- Mirrored from pixner.net/crikto/crikto/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 16:18:15 GMT -->
</html>

