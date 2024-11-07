@include('users/head')

<body>


    <!-- header start -->
    @include('users/header')
    <!-- header end -->


    <!-- invest banner section start -->
    <section class="container-fluid banner-container bg-img"">
        <div class="container">
            <div class="banner-wrapper">
                <h1>Invest Pricing</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="large">TCA</a></li>
                        <li class="breadcrumb-item active large" aria-current="page"> <i class="flaticon-right"></i>
                            Tontines</li>
                    </ol>
                </nav>
            </div>
            <div class="banner-thumb d-none d-lg-block">
                <img src="assets/images/custom/banner/trade-illustration.png" alt="Trade Illustration">
            </div>
        </div>
    </section>
    <!-- invest banner section end -->

    <!-- invest pricing token start -->
    <section class="invest-token-container pt-120 pb-120">
        <div class="container">
            <div class="invest-token-wrapper">
                <div class="title-wrapper">
                    <h2 class="text-center text-md-start">Choisir la Tontine convenable</h2>
                            <p class="text-center text-md-start">Le bon instrument financier pour faire votre epargne ou votre investissement</p>
                </div>

                    <div class="row">
                        @foreach ($tontine as $tontines)
                            <div class="col-lg-6">
                                <div class="slider-inner invest-token-items">
                                    <div
                                        class="boost-item d-flex flex-column flex-sm-row align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/custom/coins/bitcoin.png" alt="Bitcoin">
                                            <h3>
                                                <a href="invest-pricing-details.html">{{ $tontines->name }}</a>
                                            </h3>
                                        </div>
                                        <div class="invest-token-right d-flex align-items-center">
                                            <div class="item text-center">
                                                <p class="primary">Min a deposer</p>
                                                <p class="secondary">{{ $tontines->prix }}</p>
                                            </div>
                                            <div class="item text-center">
                                                <p class="primary">Max a deposer</p>
                                                <p class="secondary">aucune limite</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boost-content d-flex flex-wrap align-items-center justify-content-around">
                                        <div>
                                            <p class="primary">2 months</p>
                                            <p class="tertiary">12%</p>
                                        </div>
                                        <div>
                                            <p class="primary">3 months</p>
                                            <p class="tertiary">4.08%</p>
                                        </div>
                                        <div>
                                            <p class="primary">6 months</p>
                                            <p class="tertiary">4.2%</p>
                                        </div>
                                        <div>
                                            <p class="primary">12 months</p>
                                            <p class="tertiary">4.32%</p>
                                        </div>
                                    </div>
                                    <div
                                        class="boost-footer d-flex flex-column flex-sm-row align-items-center justify-content-between">
                                        <p>{{ $tontines->nbre_membre }} ont souscrit</p>
                                        @foreach ($membres as $membre)
                                            @if (auth()->user()->email === $membre->email)
                                                <a href="{{ route('integrer.tontine', $tontines->id) }}" class="primary-btn primary-effect">Souscrire</a>
                                            @else
                                            <a href="{{ route('register') }}" class="primary-btn primary-effect">Souscrire</a>
                                            @endif
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

            </div>
        </div>
    </section>
    <!-- invest pricing token end -->
    <!-- footer start -->
    @include('users/newsletter_footer')
    <!-- footer end -->

    @include('users/script')
</body>
