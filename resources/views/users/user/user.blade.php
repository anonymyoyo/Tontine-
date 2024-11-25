@include('users/head')

<body>


    <!-- header start -->
    @include('users/header')
    <!-- header end -->

    {{-- <div class="boost-item d-flex align-items-center">
        <img src="assets/images/custom/coins/binance-coin.png" alt="Binance Coin">
        <h3>
            Bienvenu {{ auth()->user()->name }}
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('user') }}" class="large">Profil</a></li>
                    <li class="breadcrumb-item active large" aria-current="page"> <i class="flaticon-right"></i>
                        Compte</li>
                </ol>
            </nav>
        </h3>
    </div> --}}

        <!-- predict banner section start -->
    <section class="container-fluid banner-container bg-img predict-banner-two">
        <div class="container">
            <div class="banner-wrapper">
                <div class="boost-item d-flex align-items-center">
                    <img width="250px" height="250" style="border-radius: 60%;" src="{{ Storage::url(auth()->user()->image) }}" alt="Binance Coin">
                    <h3>
                        Bienvenu {{ auth()->user()->name }}
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('user') }}" class="large">Client</a></li>
                            </ol>
                        </nav>
                    </h3>
                </div>
            </div>
            <div class="banner-thumb predict-banner-thumb d-none d-lg-block">
                <img src="{{ asset('assets/images/custom/banner/predict-banner-illustration.png')}}" alt="Predict Illustration">
            </div>
        </div>
    </section>
    <!-- predict banner section end -->

    <!-- predict token details start -->
    <section class="predict-token-details-container pt-120">
        <div class="container">
            <div class="predict-token-details-wrapper">
                <div
                    class="predict-token-details-header d-flex flex-column flex-sm-row align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-center justify-content-sm-start item-left">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Bitcoin">
                        <div class="token-info">
                            <h3>TCA</h3>
                            <p class="primary">Tontine Communautaire d'Afrique</p>
                        </div>
                    </div>
                    <div class="item-right">
                        <p class="secondary">Date derniere transaction</p>
                        @foreach ($solde as $soldes)
                        <h4 class="text-center">{{ $soldes->updated_at }}</h4>
                        @endforeach
                    </div>
                </div>
                <div class="row token-details-price">
                    <div class="col-sm-6 col-lg-4 text-center tickets-sold">
                        @foreach ($solde as $soldes)
                        <h3 class="text-center">{{ $soldes->solde }} XAF</h3>
                        @endforeach

                        <p class="secondary text-center">Solde du compte</p>
                    </div>
                    <div class="col-sm-6 col-lg-4 text-center tickets">
                        {{-- <h3 class="text-center">3,570 </h3>
                        <p class="secondary text-center">Tickets Sold<span>/ 5000</span></p> --}}
                    </div>
                    <div class="col-sm-12 col-lg-4 text-center estimated-value">
                        <h3 class="text-center">48,414.6667 XAF</h3>
                        <p class="secondary text-center">Total Transactions</p>
                    </div>
                </div>
                <div class="my-prediction">
                    {{-- <h3>Montant Transaction</h3>
                    <div class="prediction-value">
                        <input type="text" name="depot" maxlength="1" class="single-character" placeholder="4">
                        <input type="text" maxlength="1" class="single-character" placeholder="3">
                        <input type="text" maxlength="1" class="single-character" placeholder="6">
                        <input type="text" maxlength="1" class="single-character" placeholder="4">
                        <input type="text" maxlength="1" class="single-character" placeholder="2">
                        <span class="dot">.</span>
                        <input type="text" maxlength="1" class="single-character" placeholder="9">
                        <input type="text" maxlength="1" class="single-character" placeholder="2">
                        <input type="text" maxlength="1" class="single-character" placeholder="9">
                        <input type="text" maxlength="1" class="single-character" placeholder="7">
                        <span class="currency">XAF</span>
                    </div> --}}
                    <a href="#submit-token" class="primary-btn primary-effect open-submit-token">Faites un Depot</a>
                    <a href="#submit-token-2" class="primary-btn primary-effect open-submit-token-2">Faites un Retrait</a>
                    <a href="#submit-token-3" class="primary-btn primary-effect open-submit-token-3">Demande de pret</a>
                    <div id="submit-token" class="white-popup mfp-hide">
                        <div class="submit-token-details">
                            @foreach ($solde as $soldes)
                            <h5>Votre Solde {{ $soldes->solde }} XAF</h5>
                            @endforeach
                            <div class="text-center submit-token-content">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Bitcoin">
                                {{-- <div class="submit-time"> --}}
                                    <label class="primary text-center">Tontine</label>
                                    <select class="form-control text-center">
                                        <option value="">Selectionner Tontine</option>
                                        @foreach($tontin as $tontines)
                                            <option value="{{ $tontines->id }}">{{ $tontines->name }}</option>
                                        @endforeach
                                    </select>
                                {{-- </div> --}}
                                <div class="submit-time">
                                    <p class="primary text-center">Montant a deposer</p>

                                    <h6  class="text-center">436429297 XAF</h6>
                                </div>
                                {{-- <p class="tertiary text-center">Ticket de la Transaction : <span class="tertiary">3.99</span> XAF</p> --}}
                                <p class="secondary text-center">Merci de bien vouloir choisir votre operateur/banque</p>
                            </div>
                            <div class="copy-wrapper">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-4">
                                        <div class="footer-social-wrapper d-flex align-items-center justify-content-lg-end">
                                            <div class="social-wrapper">
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/cards/american-express.png')}}" alt="Facebook">
                                                </a>
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/cards/mastercard.png')}}" alt="Twitter">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="footer-social-wrapper d-flex align-items-center justify-content-lg-end">
                                            <div class="social-wrapper">
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/cards/diners.png')}}" alt="Facebook">
                                                </a>
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/cards/jcb.png')}}" alt="Twitter">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="footer-social-wrapper d-flex align-items-center justify-content-lg-end">
                                            <div class="social-wrapper">

                                                <a href="#">
                                                    <img src="{{ asset('assets/images/cards/Momo.png')}}" alt="Instagram">
                                                </a>
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/cards/visa.png')}}" alt="Linkedin">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <a href="javascript:void(0)" class="primary-btn primary-effect"><img src="{{ asset('assets/images/Momo.png') }}" alt=""></a> --}}
                        </div>
                    </div>
                    <div id="submit-token-2" class="white-popup mfp-hide">
                        <div class="submit-token-details">
                            @foreach ($solde as $soldes)
                            <h5>Votre Solde {{ $soldes->solde }} XAF</h5>
                            @endforeach
                            <div class="text-center submit-token-content">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Bitcoin">
                                {{-- <div class="submit-time"> --}}
                                    <label class="primary text-center">Tontine</label>
                                    <select class="form-control text-center">
                                        <option value="">Selectionner Tontine</option>
                                        @foreach($tontin as $tontines)
                                            <option value="{{ $tontines->id }}">{{ $tontines->name }}</option>
                                        @endforeach
                                    </select>
                                {{-- </div> --}}
                                <div class="submit-time">
                                    <p class="primary text-center">Montant a deposer</p>

                                    <h6  class="text-center">436429297 XAF</h6>
                                </div>
                                {{-- <p class="tertiary text-center">Ticket de la Transaction : <span class="tertiary">3.99</span> XAF</p> --}}
                                <p class="secondary text-center">Merci de bien vouloir choisir votre operateur/banque</p>
                            </div>
                            <div class="copy-wrapper">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-4">
                                        <div class="footer-social-wrapper d-flex align-items-center justify-content-lg-end">
                                            <div class="social-wrapper">
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/cards/american-express.png')}}" alt="Facebook">
                                                </a>
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/cards/mastercard.png')}}" alt="Twitter">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="footer-social-wrapper d-flex align-items-center justify-content-lg-end">
                                            <div class="social-wrapper">
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/cards/diners.png')}}" alt="Facebook">
                                                </a>
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/cards/jcb.png')}}" alt="Twitter">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="footer-social-wrapper d-flex align-items-center justify-content-lg-end">
                                            <div class="social-wrapper">

                                                <a href="#">
                                                    <img src="{{ asset('assets/images/cards/Momo.png')}}" alt="Instagram">
                                                </a>
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/cards/visa.png')}}" alt="Linkedin">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <a href="javascript:void(0)" class="primary-btn primary-effect"><img src="{{ asset('assets/images/Momo.png') }}" alt=""></a> --}}
                        </div>
                    </div>
                    <div id="submit-token-3" class="white-popup mfp-hide">
                        <div class="submit-token-details">
                            @foreach ($solde as $soldes)
                            <h5>Votre Solde {{ $soldes->solde }} XAF</h5>
                            @endforeach
                            <div class="text-center submit-token-content">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Bitcoin">
                                <form class="form-control" action="#">
                                    <label class="form-control" for="Objet">Objet de la demande</label>
                                    <input class="form-control" type="text" name="objet" placeholder="Objet de la demande" id="">
                                    <label class="form-control" for="Montant">Montant du Pret</label>
                                    <input class="form-control" type="number" name="montant" placeholder="Exemple 5.000.000 XAF" id="">
                                </form>
                            </div>
                            {{-- <a href="javascript:void(0)" class="primary-btn primary-effect"><img src="{{ asset('assets/images/Momo.png') }}" alt=""></a> --}}
                        </div>
                    </div>
                </div>
                <div class="timer-block">
                    <p class="timer-numbers">
                        <span>0</span> days
                        <span>00</span> hrs
                        <span>00</span> mins
                        <span>00</span> s left
                    </p>
                    <div id="btc" class="timer-line">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- predict token details end -->

    <!-- recent prediction section start -->
    <section class="recent-prediction pt-120 pb-120">
        <div class="container">
            <div class="recent-prediction-wrapper">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="recent-left">
                            <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between">
                                <h3>Historique transactions</h3>
                                <span class="secondary-btn">.</span>
                            </div>
                            <div class="winner-table-wrapper">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Transaction (XAF)</th>
                                            <th>Date</th>
                                            <th>Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($membre as $membres) --}}
                                        @foreach($transaction as $transactions)
                                        @if (auth()->user()->id === $transactions->user_id)
                                            {{-- <option placeholder="Choix de la Tontine" value="">{{ $tontines->name }}</option> --}}
                                            <tr>
                                                <td>{{ $transactions->montant }}</td>
                                                <td>{{ $transactions->created_at }}</td>
                                                <td>{{ $transactions->type }}</td>
                                            </tr>
                                        @endif
                                        {{-- @endforeach --}}
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="recent-right">
                            <div class="d-flex align-items-center justify-content-start">
                                <img src="{{ asset('assets/images/custom/reward/small-trophy.png')}}" alt="Trophy">
                                <h3>Mes tontines</h3>
                            </div>
                            <div class="prize-wrapper">
                                <div class="prize-inner">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nom de la tontine</th>
                                                <th>Solde</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($membre as $membres)
                                            @foreach($tontin as $tontines)
                                            {{-- @if (auth()->user()->email === $membres->email && $membres->tontine_id === $tontines->id) --}}
                                                {{-- <option placeholder="Choix de la Tontine" value="">{{ $tontines->name }}</option> --}}
                                                <tr>
                                                    <td>1</td>
                                                    <td>{{ $tontines->name }}</td>
                                                    @foreach ($solde as $soldes)
                                                        <td>{{ $soldes->solde }} XAF</td>
                                                    @endforeach
                                                </tr>
                                            {{-- @endif --}}
                                            @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- recent prediction section end -->


    <!-- boost earning slider start -->
    <section class="boost-earning-container pt-120 pb-120">
        <div class="container">
            <div class="boost-earning-wrapper">
                <div class="row d-flex boost-title align-items-center justify-content-between">
                    <div class="col-md-9">
                        <div class="boost-left">
                            <h2 class="text-center text-md-start">Choisir la Tontine convenable</h2>
                            <p class="text-center text-md-start">Le bon instrument financier pour faire votre epargne ou votre investissement</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="boost-right text-center text-md-end">
                            <a href="{{ route('user.tontines') }}" class="primary-btn primary-effect">Voir Tout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="boost-slider-wrapper owl-carousel owl-theme">
            @foreach ($tontine as $tontines)
                <div class="boost-slider-items">
                    <div class="slider-inner">
                        <div class="boost-item d-flex align-items-center">
                            <img src="assets/images/custom/coins/binance-coin.png" alt="Binance Coin">
                            <h3>
                                <a href="invest-pricing.html">{{ $tontines->name }}</a>
                            </h3>
                        </div>
                        <div class="boost-content d-flex align-items-center justify-content-around">
                            <div>
                                <p class="primary">Rank</p>
                                <p class="tertiary">12%</p>
                            </div>
                            <div>
                                <p class="primary">Montant minimum</p>
                                <p class="tertiary">{{ $tontines->prix }}</p>
                            </div>
                            <div>
                                <p class="primary">Periode</p>
                                <p class="tertiary">28 Jours</p>
                            </div>
                        </div>
                        <div class="boost-footer d-flex flex-column flex-sm-row align-items-center justify-content-between">
                            {{-- @foreach ($membres as $adherant)
                                @if ($adherant->tontine_id === $tontines->id)
                                    <p>{{ $tontines->nbre_membre }} Ont souscrits</p>
                                @endif
                            @endforeach --}}

                            <a href="{{ route('integrer.tontine', $tontines->id) }}" class="primary-btn primary-effect">Souscrire</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- boost earning slider end -->


    <!-- footer start -->
    @include('users/newsletter_footer')
    <!-- footer end -->

    @include('users/script')
</body>


