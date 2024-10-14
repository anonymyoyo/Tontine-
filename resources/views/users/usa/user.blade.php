<!DOCTYPE html>
<html lang="en" class="no-js">

@include('users.head')

<body>

        @include('users.header')

    <!-- lend banner section start -->
    <section class="trade-banner-container bg-img" >
        <div class="container">
            <div class="trade-banner-wrapper lend-banner">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="trade-banner-content">
                            <h1>Creez ou rejoignez une association</h1>
                            <p>The non-custodial way to lend, borrow or margin trade crypto assets</p>
                            <a href="{{ route('registation') }}" class="primary-btn primary-effect ">Creer une Association</a>
<br><br>
                            <h4>Rejoindre une association</h4>
                            <form action="{{ route('tontine.join') }}" method="GET">
                                @csrf
                                    <input type="text" class="form-control" required name="lien_invitation" row='6' id="">
                                    <input type="submit" class="primary-btn primary-effect" value="integrer">
                            </form>


                            {{-- @foreach ($tantines as $tantine) --}}
                            {{-- <input type="text" name=""  id=""> --}}
                            {{-- <form action="{{ route('inviter', $tontine->id) }}" method="POST">
                                @csrf
                                    <input type="text" required name="" row='6' id="">
                                    <input type="submit" value="integrer">
                            </form> --}}
                            {{-- @endforeach --}}
                            {{-- <a href="{{ route('tontine', $token->id) }}" class="primary-btn primary-effect ">Creer une Association</a> --}}
{{--  {{ route('invite') }}--}}

                            {{--
{{-- <form action="{{ route('tontine', $tontines->id) }}" method="post">
                            @csrf




<input type="text" name="" id="">
                            <input type="submit" class="form-control" placeholder="Rejoindre la tontine"> --}}
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="trade-banner-thumb d-none d-lg-block">
                            <img src="assets/images/custom/banner/lend-banner-one-illustration.png"
                                alt="Lend Banner Illustration">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- lend banner section end -->

    <!-- lend and borrow table section start -->
    <div class="lend-borrow-table-container lend-two-table pt-120 pb-90">
        <div class="container">
            <div class="lend-borrow-table-wrapper">
                <table class="table">
                        <th>Mes tontines</th>

                    <thead>
                        <tr>
                            <th class="col">
                                Nom de l'Association
                            </th>
                            <th class="col">
                                Mon epargne
                            </th>
                            <th class="col">
                                Epargne totale
                            </th>
                            <th class="col">
                                Montant
                            </th>
                            <th class="col">
                                Membres
                            </th>
                            {{-- <th class="col">
                                Retirer
                            </th> --}}
                            <th class="col">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>



                            @foreach ($tontine as $tontines)
                            {{-- @foreach ($membre as $membres) --}}
{{-- @if ($membre->tontine_id === $tontines->id) --}}
                            {{-- @if ($membre && $membre->tontine_id === $tontines->id) --}}


                            <tr>
                                    <td>
                                        <img src="assets/images/custom/token/sai.png" alt="Sai"> {{ $tontines->name }}
                                    </td>
                                    <td>7.9%</td>
                                    <td>50.0%</td>
                                    <td>{{ $tontines->epargne }}</td>
                                    <td>{{ $tontines->nbre_membre }}</td>
                                    {{-- <td><a href="#" class="tertiary-btn secondary-effect">Trade</a></td> --}}
                                    <td><a href="{{ route('tontine', $tontines->id) }}" class="primary-btn primary-effect">Voir</a></td>
                            </tr>
                      {{-- @endif      @endif --}}
                            {{-- @endforeach --}}
@endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- lend and borrow table section end -->

    <!-- lend and borrow overview section start -->
    <div class="lend-borrow-overview-container pb-120">
        <div class="container">
            <div class="lend-borrow-overview-wrapper">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="lend-borrow-overview-single-item">
                            <img src="assets/images/custom/overview/paid.png" alt="Paid">
                            <h2>$50M+</h2>
                            <p>Already paid out in interest</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="lend-borrow-overview-single-item">
                            <img src="assets/images/custom/overview/users.png" alt="Users">
                            <h2>2M+</h2>
                            <p>crikto users worldwide</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="lend-borrow-overview-single-item">
                            <img src="assets/images/custom/overview/currencies.png" alt="Currency">
                            <h2>20</h2>
                            <p>Supported cryptocurrencies</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="lend-borrow-overview-single-item">
                            <img src="assets/images/custom/overview/justice.png" alt="justice">
                            <h2>200+</h2>
                            <p>Available Jurisdictions Time</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- lend and borrow overview section end -->

    <!-- lend and borrow platform section start -->
    <section class="lend-borrow-platform-container pt-120 pb-120">
        <div class="container">
            <div class="lend-borrow-platform-wrapper">
                <div class="title-wrapper">
                    <h2 class="text-center">Cryptocurrency Platform</h2>
                    <p class="text-center" color='black'>Here are a few reasons why you should choose crikto</p>

                    <a href="{{ route('association') }}" class="primary-btn primary-effect ">Explorer d'autres associations</a>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="lend-borrow-platform-single-item card-hover-effect">
                            <img src="assets/images/custom/platform/safe.png" alt="Reliable and Safe">
                            <h3>Reliable and Safe</h3>
                            <p>Advanced security and reliability of your collateral</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="lend-borrow-platform-single-item card-hover-effect">
                            <img src="assets/images/custom/platform/collateral.png" alt="Crypto Collateral">
                            <h3>Crypto as Collateral</h3>
                            <p>Every loan disbursed is fully backed by a collateral in the smart contract</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="lend-borrow-platform-single-item card-hover-effect">
                            <img src="assets/images/custom/platform/easy.png" alt="Easy to use">
                            <h3>Easy to Use</h3>
                            <p>It's just like used to store, receive and send your digital currency</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="lend-borrow-platform-single-item card-hover-effect">
                            <img src="assets/images/custom/platform/worldwide.png" alt="worldwide">
                            <h3>Available Worldwide</h3>
                            <p>It's makes finances quicker, safer and flexible worldwide</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="lend-borrow-platform-single-item card-hover-effect">
                            <img src="assets/images/custom/platform/simple.png" alt="Simple">
                            <h3>Simple Process</h3>
                            <p>We understand things can change and we fully support user's needs.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="lend-borrow-platform-single-item card-hover-effect">
                            <img src="assets/images/custom/platform/varieties.png" alt="Variety">
                            <h3>Variety of Currencies</h3>
                            <p>Variety of Fiat currencies and stablecoins</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- lend and borrow platform section end -->

    <!-- lend and borrow safe hands section start -->
    <section class="lend-borrow-safe-hands-container pt-120 pb-120">
        <div class="container">
            <div class="lend-borrow-safe-hands-wrapper">
                <div class="title-wrapper">
                    <h2 class="text-center">You are in safe hands</h2>
                    <p class="text-center">The Only Crypto Account You’ll Ever Need</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="safe-hands-content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="safe-hands-single-item card-hover-effect">
                                        <img src="assets/images/custom/safe-hand/ssl.png" alt="SSl">
                                        <h3>256-bit SSL</h3>
                                        <p>Bank grade security and encryption</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="safe-hands-single-item card-hover-effect">
                                        <img src="assets/images/custom/safe-hand/tested.png" alt="Tester">
                                        <h3>Tested</h3>
                                        <p>Fully tested smart contracts</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row immidiate">
                                <div class="col-sm-6">
                                    <div class="safe-hands-single-item card-hover-effect">
                                        <img src="assets/images/custom/safe-hand/support.png" alt="Support">
                                        <h3>24/7 Support</h3>
                                        <p>We are here to help you, anytime</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="safe-hands-single-item card-hover-effect">
                                        <img src="assets/images/custom/safe-hand/recovery.png" alt="Recovery">
                                        <h3>Recovery</h3>
                                        <p>Way to recover credentials soon</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="safe-hands-right">
                            <div class="safe-hands-thumb">
                                <img src="assets/images/custom/safe-hand/locker-illustration.png"
                                    alt="Locker Illustration">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- lend and borrow safe hands section end -->

    <!-- faq section start -->
    <section class="home-faq-container pt-120 pb-120">
        <div class="container">
            <div class="home-faq-wrapper">
                <div class="faq-title-wrapper text-center">
                    <h2 class="text-center">Frequently Asked Questions</h2>
                    <p class="text-center">If you have any problem regarding about Affiliate Program please contact us
                    </p>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-lg-8 align-items-center order-last order-lg-first">
                        <div class="faq-left-content">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed active" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            What is crikto Network?
                                            <i class="flaticon-down-arrow"></i>
                                        </button>
                                    </h4>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">To get started, you need to create a crikto account
                                            with your Metamask / Web3 wallet or a password based signup. You need to
                                            transfer ETH or ERC20 tokens to this account address to start lending or
                                            borrowing on the platform.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Is crikto Network non-custodial?
                                            <i class="flaticon-down-arrow"></i>
                                        </button>
                                    </h4>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">To get started, you need to create a crikto account
                                            with your Metamask / Web3 wallet or a password based signup. You need to
                                            transfer ETH or ERC20 tokens to this account address to start lending or
                                            borrowing on the platform.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            What is smart contract based account?
                                            <i class="flaticon-down-arrow"></i>
                                        </button>
                                    </h4>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">To get started, you need to create a crikto account
                                            with your Metamask / Web3 wallet or a password based signup. You need to
                                            transfer ETH or ERC20 tokens to this account address to start lending or
                                            borrowing on the platform.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                            aria-expanded="false" aria-controls="flush-collapseFour">
                                            How can I start using crikto Network?
                                            <i class="flaticon-down-arrow"></i>
                                        </button>
                                    </h4>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">To get started, you need to create a crikto account
                                            with your Metamask / Web3 wallet or a password based signup. You need to
                                            transfer ETH or ERC20 tokens to this account address to start lending or
                                            borrowing on the platform.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                            aria-expanded="false" aria-controls="flush-collapseFive">
                                            Can I use crikto on mobile devices?
                                            <i class="flaticon-down-arrow"></i>
                                        </button>
                                    </h4>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">To get started, you need to create a crikto account
                                            with your Metamask / Web3 wallet or a password based signup. You need to
                                            transfer ETH or ERC20 tokens to this account address to start lending or
                                            borrowing on the platform.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 align-items-center order-first order-lg-last">
                        <div class="faq-right-content">
                            <img src="assets/images/custom/faq/curious-man-two.png" alt="Frequently Asked Questions">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq section end -->

    <!-- subscribe newsletter section end -->

    {{-- @include('../.users.newsletter_footer') --}}


@include('users.newsletter_footer')
<!-- footer end -->

<!-- jquery v(3.6.0) minified source -->
@include('users.script')
</body>

<!-- Mirrored from pixner.net/crikto/crikto/lend-borrow.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 16:17:51 GMT -->
</html>
