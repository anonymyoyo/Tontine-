<!DOCTYPE html>
<html lang="en" class="no-js">

@include('users.head')

<body>

        @include('users.header')


<!-- trade banner section start -->
<section class="trade-banner-container bg-img" >
    <div class="container">
        <div class="trade-banner-wrapper">
            <div class="row">
                <div class="col-lg-7">
                    <div class="trade-banner-content">
                        <h1>Buy & sell Crypto in minutes</h1>
                        <p>Sign up today and buy 50+ cryptocurrencies in minutes. Get started with as little as $10.
                        </p>
                        <div
                            class="group-link d-inline-flex flex-column flex-sm-row align-items-center justify-content-start">
                            <a href="#registration-popup" class="primary-btn registration-popup-link">Register
                                Now</a>
                            <a href="trade-pricing.html" class="secondary-btn secondary-effect">View Pricing</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="trade-banner-thumb d-none d-lg-block">
                        <img src="assets/images/custom/banner/trade-banner-illustration.png"
                            alt="Trade Illustration">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- trade banner section end -->

<!-- coin section start -->
<section class="container-fluid coin-container pt-120 pb-120">
    <div class="container">
        <div class="coin-wrapper">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                <div class="col after-wrap">
                    <div class="coin-single-item mt-0">
                        <img src="assets/icons/custom/icon-one.png" alt="Icon One">
                        <h5>BTC / BUSD</h5>
                        <div class="d-flex align-items-center position-relative">
                            <p>$45,370.54</p>
                            <span class="coin-value coin-value-decrease">-2.52%</span>
                        </div>
                    </div>
                </div>
                <div class="col after-wrap">
                    <div class="coin-single-item coin-effect">
                        <img src="assets/icons/custom/icon-two.png" alt="Icon Two">
                        <h5>BTC / USDT</h5>
                        <div class="d-flex align-items-center position-relative">
                            <p>$0.274560</p>
                            <span class="coin-value coin-value-increase">+0.23%</span>
                        </div>
                    </div>
                </div>
                <div class="col after-wrap">
                    <div class="coin-single-item">
                        <img src="assets/icons/custom/icon-three.png" alt="Icon Three">
                        <h5>BTC / USDT</h5>
                        <div class="d-flex align-items-center position-relative">
                            <p>$0.121951</p>
                            <span class="coin-value coin-value-increase">+16.21%</span>
                        </div>
                    </div>
                </div>
                <div class="col after-wrap">
                    <div class="coin-single-item">
                        <img src="assets/icons/custom/icon-four.png" alt="Icon Four">
                        <h5>ETH / BUSD</h5>
                        <div class="d-flex align-items-center position-relative">
                            <p>$3,160.24</p>
                            <span class="coin-value coin-value-increase">+2.14%</span>
                        </div>
                    </div>
                </div>
                <div class="col after-wrap">
                    <div class="coin-single-item">
                        <img src="assets/icons/custom/icon-five.png" alt="Icon Five">
                        <h5>BTC / USDT</h5>
                        <div class="d-flex align-items-center justify-content-start position-relative">
                            <p>$1,189.00</p>
                            <span class="coin-value coin-value-increase">+1.75%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- coin section end -->

<!-- wallet section start -->
<section class="wallet-container pb-120">
    <div class="container">
        <div class="wallet-wrapper">
            <div class="row">
                <div class="col-lg-7 d-none d-lg-block">
                    <div class="wallet-left">
                        <div class="wallet-thumb">
                            <img src="assets/images/custom/wallet-illustration.png" alt="Wallet Illustration">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="wallet-right">
                        <h2>More than a typical crypto wallet</h2>
                        <p class="immidiate">Trade with confidence. crikto believes in security above everything.
                        </p>
                        <div class="wallet-single-item d-flex align-items-center justify-content-start">
                            <div class="wallet-icon-box d-flex align-items-center justify-content-center">
                                <img src="assets/icons/custom/recieve.png" alt="Send & Recieve">
                            </div>
                            <h5>SEND & RECIEVE</h5>
                        </div>
                        <div class="wallet-single-item d-flex align-items-center justify-content-start">
                            <div class="wallet-icon-box d-flex align-items-center justify-content-center">
                                <img src="assets/icons/custom/chart.png" alt="Trading Charts">
                            </div>
                            <h5>TRADING CHARTS</h5>
                        </div>
                        <div class="wallet-single-item d-flex align-items-center justify-content-start">
                            <div class="wallet-icon-box d-flex align-items-center justify-content-center">
                                <img src="assets/icons/custom/trade.png" alt="Real Time Trading">
                            </div>
                            <h5>REAL TIME TRADING</h5>
                        </div>
                        <div class="wallet-single-item d-flex align-items-center justify-content-start">
                            <div class="wallet-icon-box d-flex align-items-center justify-content-center">
                                <img src="assets/icons/custom/wallet.png" alt="Secure Wallet">
                            </div>
                            <h5>100% SECURE WALLET</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- wallet section end -->

<!-- chart table start -->
<section class="chart-table-container pt-120 pb-120">
    <div class="container">
        <div class="chart-table-wrapper">
            <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row">
                <h2>Nos Associations</h2>
                <a href="trade-tokens.html" class="secondary-btn secondary-effect">Explorer</a>
            </div>
            <div class="chart-tab-btn-wrapper">
                <a href="#all" class="chart-tab-btn chart-tab-btn-active">All</a>
                {{-- <a href="#defi" class="chart-tab-btn">DeFI</a>
                <a href="#innovation" class="chart-tab-btn">Innovation</a>
                <a href="#pos" class="chart-tab-btn">POS</a>
                <a href="#nft" class="chart-tab-btn">NFT</a>
                <a href="#pow" class="chart-tab-btn">POW</a>
                <a href="#storage" class="chart-tab-btn">Storage</a> --}}
            </div>
            <div class="chart-tab-content chart-tab-content-active" id="all">
                <div class="chart-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col">
                                    #
                                </th>
                                <th class="col">
                                    Nom
                                </th>
                                <th class="col">
                                    Montant
                                </th>
                                <th class="col">
                                    Nombre de membres
                                </th>
                                <th class="col">
                                    Periode Economique
                                </th>
                                <th class="col">
                                    Duree
                                </th>
                                <th class="col">
                                    Nombre de membre max
                                </th>
                                <th class="col">
                                    Action
                                </th>


                            </tr>
                        </thead>
                        @foreach ($tontine as $tontines)

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img src="assets/images/custom/coins/supported-icon4.png" alt="Bitcoin">
                                        {{ $tontines->name }} <span>{{ $tontines->name }}</span>
                                    </td>
                                    <td>{{ $tontines->epargne }}</td>
                                    <td>{{ $tontines->nbre_membre }}</td>
                                    <td>{{ $tontines->periode_economique }}</td>
                                    <td>$2,605.95</td>
                                    <td>
                                        {{ $tontines->nbre_membre_max }}
                                    </td>
                                    {{-- @foreach ($detail as $details) --}}
                                    <td><a href="{{ route('detail', $tontines->id) }}" class="tertiary-btn secondary-effect">Voir</a>
                                    </td>
                                    {{-- @endforeach --}}
                                </tr>
                            </tbody>

                        @endforeach

                    </table>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- chart table end -->

<!-- crypto trader section start -->
<section class="pt-120 pb-120 trader-container">
    <div class="container">
        <div class="trader-wrapper">
            <div class="title-wrapper">
                <h2 class="text-center">Devenir membre de la grande famille TCA</h2>
                <p class="text-center">Il est plus facile pour vous de suivre ces 3 etapes simples</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="trader-single-item card-effect">
                        <div class="trader-icon-box d-flex align-items-center justify-content-center">
                            <img src="assets/icons/custom/download.png" alt="Download">
                        </div>
                        <h3 class="text-center">Telchargez</h3>
                        <p class="text-center">Telecharger notre application et enregistrez-vous grace a notre formulaire
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="trader-single-item card-effect">
                        <div class="trader-icon-box d-flex align-items-center justify-content-center">
                            <img src="assets/icons/custom/trading.png" alt="Start Trading">
                        </div>
                        <h3 class="text-center">Rejoignez un parc financier</h3>
                        <p class="text-center">Creer ou rejoignez une association et integrez les activites concernees</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="trader-single-item card-effect">
                        <div class="trader-icon-box d-flex align-items-center justify-content-center">
                            <img src="assets/icons/custom/profit.png" alt="Get Profit">
                        </div>
                        <h3 class="text-center">Epargnez!</h3>
                        <p class="text-center">Epargnez! Vous pourrez profiter de nos meilleurs services pour vous sentir plus a vos aises.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- crypto trader section end -->

<!-- trade anywhere section start -->
<section class="container-fluid anywhere-container pt-120 pb-120">
    <div class="container">
        <div class="anywhere-wrapper">
            <div class="row">
                <div class="col-lg-4">
                    <div class="anywhere-left">
                        <h2 class="text-start">Connectez-vous de n'importe d'ou</h2>
                        <p class="text-start immidiate">En tout lieu et a toute heure effectuer vos transactions a votre aise.</p>
                        <div class="anywhere-single-item d-flex align-items-center justify-content-start">
                            <div class="anywhere-icon-box">
                                <img src="assets/icons/custom/apple.png" alt="Apple Store">
                            </div>
                            <div class="anywhere-single-content">
                                <p>Telecharger pour</p>
                                <h4>Appstore</h4>
                            </div>
                        </div>
                        <div class="anywhere-single-item d-flex align-items-center justify-content-start">
                            <div class="anywhere-icon-box">
                                <img src="assets/icons/custom/playstore.png" alt="Google Play Store">
                            </div>
                            <div class="anywhere-single-content">
                                <p>Telecharger pour</p>
                                <h4>Google Play</h4>
                            </div>
                        </div>
                        <div class="anywhere-single-item d-flex align-items-center justify-content-start">
                            <div class="anywhere-icon-box">
                                <img src="assets/icons/custom/apple.png" alt="Apple Store">
                            </div>
                            <div class="anywhere-single-content">
                                <p>Telecharger pour</p>
                                <h4>Ordinateurs</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 d-none d-lg-block">
                    <div class="anywhere-thumb">
                        <img src="assets/images/custom/anywhere-illustration.png" alt="Trade Anywhere">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- trade anywhere section end -->

<!-- why crikto section start -->
<section class="feature-container pt-120 pb-120">
    <div class="container">
        <div class="feature-wrapper">
            <h2 class="text-center">Pourquoi TCA?</h2>
            <p class="text-center immidiate">crikto is the most effortless way of trading cryptocurrencies.</p>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="feature-single-item text-center card-effect">
                        <img src="assets/images/custom/feature/secure.png" alt="Safe and Secure">
                        <h3 class="text-center">Simple et securise</h3>
                        <p class="text-center">There's KYC, 2FA, Fingerprint/PIN access, and a lot more. Because
                            lots of security is always a plus.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-single-item text-center card-effect">
                        <img src="assets/images/custom/feature/support.png" alt="Customer Support">
                        <h3 class="text-center">7j/7j Service client</h3>
                        <p class="text-center">Nous sommes toujours a votre ecoute. Contactez notre service client a tout moment et obtenez des solutions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-single-item text-center card-effect">
                        <img src="assets/images/custom/feature/automated.png" alt="Buy and Sell">
                        <h3 class="text-center">Actions autimetisees</h3>
                        <p class="text-center mt-15">Bitbns Vous permet d'automatiser vos actions avec des outils avances. Rejoignez nous pour en savoir plus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- why crikto section end -->

@include('users.team_testimonies')
<!-- testimonial section end -->

<!-- many supported assets section start -->
<section class="supported-assets pt-120 pb-120 bg-img" data-background="assets/images/custom/asset-bg.png">
    <div class="container">
        <div class="supported-wrapper">
            <h2 class="text-center">Many Supported Assets</h2>
            <p class="text-center">The Infinity Wallet supports a wide range of cryptocurrencies and tokens, and we
                are constantly
                looking for new and exciting additions. View our currently supported coins below.</p>
            <div class="supported-items d-flex  align-items-center justify-content-between">
                <div class="supported-icon">
                    <img src="assets/images/custom/coins/ethereum-1.png" alt="Supported Icons">
                </div>
                <div class="supported-icon">
                    <img src="assets/images/custom/coins/supported-icon1.png" alt="Supported Icons">
                </div>
                <div class="supported-icon">
                    <img src="assets/images/custom/coins/supported-icon2.png" alt="Supported Icons">
                </div>
                <div class="supported-icon">
                    <img src="assets/images/custom/coins/supported-icon3.png" alt="Supported Icons">
                </div>
                <div class="supported-icon">
                    <img src="assets/images/custom/coins/supported-icon4.png" alt="Supported Icons">
                </div>
                <div class="supported-icon">
                    <img src="assets/images/custom/coins/supported-icon5.png" alt="Supported Icons">
                </div>
                <div class="supported-icon">
                    <img src="assets/images/custom/coins/supported-icon6.png" alt="Supported Icons">
                </div>
                <div class="supported-icon">
                    <img src="assets/images/custom/coins/supported-icon7.png" alt="Supported Icons">
                </div>
                <div class="supported-icon">
                    <img src="assets/images/custom/coins/supported-icon8.png" alt="Supported Icons">
                </div>
                <div class="supported-icon">
                    <img src="assets/images/custom/coins/supported-icon9.png" alt="Supported Icons">
                </div>
                <div class="supported-icon">
                    <img src="assets/images/custom/coins/supported-icon10.png" alt="Supported Icons">
                </div>
                <div class="supported-icon">
                    <img src="assets/images/custom/coins/supported-icon11.png" alt="Supported Icons">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- many supported assets section end -->



@include('users.newsletter_footer')
<!-- footer end -->

<!-- jquery v(3.6.0) minified source -->
@include('users.script')
</body>

<!-- Mirrored from pixner.net/crikto/crikto/lend-borrow.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 16:17:51 GMT -->
</html>
