@include('users/head')

<body>


    <!-- header start -->
    @include('users/header')
    <!-- header end -->


        <!-- predict banner section start -->
    <section class="container-fluid banner-container bg-img predict-banner-two">
        <div class="container">
            <div class="banner-wrapper">
                <h2>Bienvenu {{ auth()->user()->name }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('user') }}" class="large">Profil</a></li>
                        <li class="breadcrumb-item active large" aria-current="page"> <i class="flaticon-right"></i>
                            Compte</li>
                    </ol>
                </nav>
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
                        <h4>12:30 PM, 28 Aug</h4>
                    </div>
                </div>
                <div class="row token-details-price">
                    <div class="col-sm-6 col-lg-4 text-center tickets-sold">
                        <h3 class="text-center">3.99 XAF</h3>
                        <p class="secondary text-center">Solde du compte</p>
                    </div>
                    <div class="col-sm-6 col-lg-4 text-center tickets">
                        {{-- <h3 class="text-center">3,570 <span>/ 5000</span></h3>
                        <p class="secondary text-center">Tickets Sold</p> --}}
                    </div>
                    <div class="col-sm-12 col-lg-4 text-center estimated-value">
                        <h3 class="text-center">48,414.6667 XAF</h3>
                        <p class="secondary text-center">Total Transactions</p>
                    </div>
                </div>
                <div class="my-prediction">
                    <h3>Montant Transaction</h3>
                    <div class="prediction-value">
                        <input type="text" maxlength="1" class="single-character" placeholder="4">
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
                    </div>
                    <a href="#submit-token" class="primary-btn primary-effect open-submit-token">Faites un Depot</a>
                    <a href="#submit-token" class="primary-btn primary-effect open-submit-token">Faites un Retrait</a>
                    <div id="submit-token" class="white-popup mfp-hide">
                        <div class="submit-token-details">
                            <h5>Votre Solde $100.00</h5>
                            <div class="text-center submit-token-content">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Bitcoin">
                                <div class="submit-time">
                                    <p class="primary text-center">Merci de nous faire confiance</p>
                                    <h6 id="bit-predict" class="text-center"></h6>
                                </div>
                                <p class="tertiary text-center">Ticket de la Transaction : <span class="tertiary">3.99</span> XAF</p>
                                <p class="secondary text-center">Merci de bien vouloir choisir votre operateur/banque</p>
                            </div>
                            <a href="javascript:void(0)" class="primary-btn primary-effect">Buy Now</a>
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($membre as $membres)
                                            @foreach($tontine as $tontines)
                                            @if (auth()->user()->email === $membres->email && $membres->tontine_id === $tontines->id)
                                                {{-- <option placeholder="Choix de la Tontine" value="">{{ $tontines->name }}</option> --}}
                                                <tr>
                                                    <td>1</td>
                                                    <td>{{ $tontines->name }}</td>
                                                </tr>
                                            @endif
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


    <!-- invest calculator start -->
    {{-- <div class="invest-calculator pt-120">
        <div class="container">
            <div class="invest-calculator-wrapper">
                <form action="{{ route('user.depot') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="items">
                                <label for="investCalc" class="form-label">Choix de la tontine</label>
                                <select required="required" id="investCalc" name="tokens">
                                    @foreach ($membre as $membres)
                                    @foreach($tontine as $tontines)
                                    @if (auth()->user()->email === $membres->email && $membres->tontine_id === $tontines->id)
                                        <option placeholder="Choix de la Tontine" value="">{{ $tontines->name }}</option>
                                    @endif
                                    @endforeach
                                    @endforeach
                                </select>
                                <div class="foote">
                                    <p class="secondary text-start">Choose period in months</p>
                                    <a href="#0" class="invest-tab-btn-two">2</a>
                                    <a href="#0" class="invest-tab-btn-two">3</a>
                                    <a href="#0" class="invest-tab-btn-two invest-tab-active-two">6</a>
                                    <a href="#0" class="invest-tab-btn-two">12</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="items">
                                <label for="amountCalculator" class="form-label">Montant a deposer</label>
                                <div class="number">
                                    <input type="number" class="form-control" id="amountCalculator"
                                        aria-describedby="amountCalculator" required="required" placeholder="500">
                                    <span>FCFA</span>
                                </div>
                                <p class="secondary">minimum a deposer 500</p>
                                <div
                                    class="d-flex sed flex-column flex-sm-row flex-md-column flex-lg-row align-items-center justify-content-between">
                                    <div class="increase-value d-flex align-items-center justify-content-between">
                                        <p class="tertiary">+0.000021</p>
                                        <span class="primary">+4.2%</span>
                                    </div>
                                    <button type="submit" class="primary-btn primary-effect">Deposer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    <!-- invest calculator end -->

    <!-- why choose crypdo section start -->
    {{-- <section class="choose-crikto-container pt-90 pb-120">
        <div class="container">
            <div class="choose-crikto-wrapper">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-crikto-thumb">
                            <img src="assets/images/custom/invest/choose-illustration.png" alt="Choose Illustration">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-crikto-content">
                            <h2>Pourquoi investir dans TCA</h2>
                            <p class="immidiate">Nous investissons vos fonds dans un marcher securise, simple, rapide et plus securise.
                                    Our unique selection of investment products, award-winning.</p>
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center">
                                <div class="choose-crikto-single-item card-effect">
                                    <h3 class="text-center">+500</h3>
                                    <p class="text-center secondary">Clients</p>
                                </div>
                                <div class="choose-crikto-single-item card-effect">
                                    <h3 class="text-center">168%</h3>
                                    <p class="text-center secondary">Retour en 2021</p>
                                </div>
                            </div>
                            <a href="#registration-popup" class="primary-btn primary-effect registration-popup-link">Commencer maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- why choose crypdo section end -->


    <!-- crikto invest work section start -->
    {{-- <section class="crikto-invest-work-container pt-120 pb-120">
        <div class="container">
            <div class="crikto-invest-work-wrapper">
                <div class="title-wrapper">
                    <h2 class="text-center">
                        Comment ca marche
                    </h2>
                    <p class="text-center">En quelques clics</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="crikto-work-single-item text-center card-effect">
                            <img src="{{ asset('assets/images/custom/invest/invest-work-one.png') }}" alt="Step One">
                            <h3 class="text-center">Inscription et authentification</h3>
                            <p class="text-center">Inscrivez-vous gratuitement et verifiez votre identite</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="crikto-work-single-item text-center card-effect">
                            <img src="{{ asset('assets/images/custom/invest/invest-work-two.png') }}" alt="Step Two">
                            <h3 class="text-center">Faites un depot</h3>
                            <p class="text-center">Faites un depot depuis votre compte bancaire, Orange MoneyMake a deposit from your bank
                                account or crypto wallet</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="crikto-work-single-item text-center card-effect">
                            <img src="{{ asset('assets/images/custom/invest/invest-work-three.png') }}" alt="Step Three">
                            <h3 class="text-center">Investir et gagner</h3>
                            <p class="text-center">Faites un investissement et faites des retrait a tout moment
                                ou, profiter de 20% de retour sur unvestissement apres 03mois</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- crikto invest work section end -->

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


    <!-- faq section start -->
    <section class="home-faq-container invest-faq pb-120">
        <div class="container">
            <div class="home-faq-wrapper">
                <div class="faq-title-wrapper text-center">
                    <h2 class="text-center">Questions Frequements Posees</h2>
                    <p class="text-center">Si vous avez la moindre interogation concernant le programme d'integration, S'il vous plait <a href="{{ route('contact') }}" style="color: #90cf37;">Contactez-nous</a>
                    </p>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-lg-8 align-items-center">
                        <div class="faq-left-content">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed active" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            Qu'est-ce que TCA?
                                            <i class="flaticon-down-arrow"></i>
                                        </button>
                                    </h4>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">crikto is a prediction market protocol that provides
                                            crypto traders a
                                            simplified interface to make money by making the correct price prediction of
                                            popular crypto
                                            assets. <br> Due to its simplicity and ease of use, users often call it the
                                            Uniswap of Prediction
                                            Markets.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Comment epargner avec TCA?
                                            <i class="flaticon-down-arrow"></i>
                                        </button>
                                    </h4>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">crikto is a prediction market protocol that provides
                                            crypto traders a
                                            simplified interface to make money by making the correct price prediction of
                                            popular crypto
                                            assets. <br> Due to its simplicity and ease of use, users often call it the
                                            Uniswap of Prediction
                                            Markets.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Comment investir avec TCA?
                                            <i class="flaticon-down-arrow"></i>
                                        </button>
                                    </h4>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">crikto is a prediction market protocol that provides
                                            crypto traders a
                                            simplified interface to make money by making the correct price prediction of
                                            popular crypto
                                            assets. <br> Due to its simplicity and ease of use, users often call it the
                                            Uniswap of Prediction
                                            Markets.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Quel moyen de paiement je peux utiliser pour effectuer les transactions avec TCA?
                                            <i class="flaticon-down-arrow"></i>
                                        </button>
                                    </h4>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">crikto is a prediction market protocol that provides
                                            crypto traders a
                                            simplified interface to make money by making the correct price prediction of
                                            popular crypto
                                            assets. <br> Due to its simplicity and ease of use, users often call it the
                                            Uniswap of Prediction
                                            Markets.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                            aria-expanded="false" aria-controls="flush-collapseFour">
                                            Comment est-ce aue TCA concerve mes avoir?
                                            <i class="flaticon-down-arrow"></i>
                                        </button>
                                    </h4>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">crikto is a prediction market protocol that provides
                                            crypto traders a
                                            simplified interface to make money by making the correct price prediction of
                                            popular crypto
                                            assets. <br> Due to its simplicity and ease of use, users often call it the
                                            Uniswap of Prediction
                                            Markets.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 align-items-center order-first order-lg-last">
                        <div class="faq-right-content">
                            <img src="assets/images/custom/faq/curious-man.png" alt="Frequently Asked Questions">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq section end -->

    <!-- footer start -->
    @include('users/newsletter_footer')
    <!-- footer end -->

    @include('users/script')
</body>


