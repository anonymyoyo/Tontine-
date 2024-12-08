@include('users/head')

<body>


    <!-- header start -->
    {{-- @include('users/header') --}}
    <!-- header end -->

    <div class="user_profil">
        <div class="profil_grid">
          <img src="{{ Storage::url(auth()->user()->image) }}" class="image_profile" alt="image de profil"><span class="span">
            @foreach ($solde as $sold)
            {{ $sold->solde }} XAF
            @endforeach </span>
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
      <span class="cp">Compte principal</span>
      <div class="grid">
        <div class="user_grid">
          <div class="transaction_client">
            <nav>
              <ul>
                <li><a href="#transfert">Transfert</a></li>
                <li><a href="#retrait">Retrait</a></li>
                <li><a href="#depot">Depot</a></li>
                <li><a href="#pret">Pret</a></li>
                <!-- <li></li> -->
              </ul>
            </nav>
          </div>
          <div class="separator"></div>
          <div class="detail_compte">

            <a href="#transaction">Derniere Transaction</a>
          </div>
        </div>
        <div class="usergrid">
            <div id="transaction" class="transaction">
                <table class="table">
                    <thead class="table">
                      <tr class="table">
                        <th scope="col">No Transaction</th>
                        <th scope="col">Type</th>
                        <th scope="col">Proprietaire Compte</th>
                        <th scope="col">Tontine</th>
                        <th scope="col">Montant</th>
                        <th scope="col">Jour</th>
                      </tr>
                    </thead>
                    @foreach ($transaction as $transactions)
                        <tbody class="table">
                          <tr>
                              <td>#{{ $transactions->id }}</td>
                              <td>{{ $transactions->type }}</td>
                              <td>{{ auth()->user()->name }}</td>

                              @foreach ($tontin as $tontine)
                              @if ($tontine->id == $transactions->tontine_id)
                                  <td>{{ $tontine->name }}</td>
                              @endif
                              @endforeach

                              <td>{{ $transactions->montant }} XAF</td>
                              <td>{{ $transactions->created_at }}</td>
                          </tr>
                        </tbody>
                    @endforeach

                  </table>
            </div>
          <div id="transfert">
            <div class="formulaire">
              <h2 class="h2">Transfert</h2>
              <form action="">
                <div class="li">
                  <label class="li-1" for="mdp">Beneficiaire:</label>
                  <select class="li-2" name="" id="">
                    <option value="" class="li-2">Selectionner le compte beneficiaire</option>
                    @foreach ($client as $c)
                        <option value="" class="li-2">{{ $c->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="li">
                    <label class="li-1" for="numero">Montant:</label>
                    <input class="li-2" type="number" name="montant" min="500" id="phone"
                        placeholder="Minimum a deposer 500 XAF"><br><br>
                </div>
                <div class="li">
                  <input class="li-3" type="submit" value="Transferer">
                </div>

              </form>
            </div>
          </div>

          <div id="retrait">
            <div class="formulaire">
              <h2 class="h2">Retrait</h2>
              <form action="">
                <div class="li">
                  <label class="li-1" for="mdp">Tontine:</label>
                  <select class="li-2" name="" id="">
                    <option value="" class="li-2">Selectionner la Tontine</option>
                    @foreach ($tontin as $tontine)
                        <option value="" class="li-2">{{ $tontine->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="li">
                    <label class="li-1" for="numero">Montant:</label>
                    <input class="li-2" type="number" name="montant" min="500" id="phone"
                        placeholder="Minimum a deposer 500 XAF"><br><br>
                </div>
                <div class="li">
                  <input class="li-3" type="submit" value="Retirer">
                </div>

              </form>
            </div>
          </div>

          <div id="depot">
            <div class="formulaire">
              <h2 class="h2">Depot</h2>
              <form action="">

                <div class="li">
                  <label class="li-1" for="mdp">Tontine:</label>
                  <select class="li-2" name="" id="">
                    <option value="" class="li-2">Selectionner la Tontine</option>
                    @foreach ($tontin as $tontine)
                        <option value="" class="li-2">{{ $tontine->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="li">
                    <label class="li-1" for="numero">Montant:</label>
                    <input class="li-2" type="number" name="montant" min="500" id="phone"
                        placeholder="Minimum a deposer 500 XAF"><br><br>
                </div>
                <div class="li">
                  <input class="li-3" type="submit" value="Deposer">
                </div>

              </form>
            </div>
          </div>

          <div id="pret">
            <div class="formulaire">
              <h2 class="h2">Pret</h2>
              <form action="">
                <div class="li">
                    <label class="li-1" for="numero">Objet:</label>
                    <input class="li-2" type="text" name="montant" id="phone"
                        placeholder="Objet de la demande"><br><br>
                </div>
                <div class="li">
                    <label class="li-1" for="numero">Montant:</label>
                    <input class="li-2" type="number" name="montant" min="500" id="phone"
                        placeholder="Minimum a deposer 500 XAF"><br><br>
                </div>
                <div class="li">
                  <input class="li-3" type="submit" value="Connexion">
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>


    <!-- footer start -->
    @include('users/newsletter_footer')
    <!-- footer end -->

    @include('users/script')
</body>


