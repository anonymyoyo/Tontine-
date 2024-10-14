<!DOCTYPE html>
<html lang="en" class="no-js">

@include('users.association.head')

<body>

        @include('users.association.header')
    <!-- invest banner section start -->
    <section class="trade-banner-container bg-img" data-background="{{ asset('assets/images/custom/banner/home-banner-bg.png') }}">
        <div class="container">
            <div class="trade-banner-wrapper lend-banner">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="trade-banner-content">
                            <h1>Earn upto15.6% on your crypto</h1>
                            <p>Open the best high-yield savings account and get up to 15.6% APR on your digital assets.</p>
                            <a href="#" class="form-control color-white">#</a>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="trade-banner-thumb d-none d-lg-block">
                            <img src="{{ asset('assets/images/custom/banner/invest-banner-illustration.png') }}"
                                alt="Invest Banner Illustration">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- invest banner section end -->

    <!-- invest calculator start -->
    <div class="invest-calculator pt-120">
        <div class="container">
            <div class="invest-calculator-wrapper">
                <form action="#" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="items">
                                <label for="investCalc" class="form-label">Choose Currency</label>
                                <select id="investCalc" class="form-control" name="tokens">
                                    <option data-display="BTC" value="btc">BTC</option>
                                    <option value="lt">LTC</option>
                                    <option value="dg">DOGE</option>
                                    <option value="cl">CHL</option>
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
                                <label for="amountCalculator" class="form-label">Choose Amount</label>
                                <div class="number">
                                    <input type="number" class="form-control" id="amountCalculator"
                                        aria-describedby="amountCalculator" required="required" placeholder="0.5">
                                    <span>BTC</span>
                                </div>
                                <p class="secondary">min 0 max 1000000 USDC</p>
                                <div
                                    class="d-flex sed flex-column flex-sm-row flex-md-column flex-lg-row align-items-center justify-content-between">
                                    <div class="increase-value d-flex align-items-center justify-content-between">
                                        <p class="tertiary">+0.000021</p>
                                        <span class="primary">+4.2%</span>
                                    </div>
                                    <a href="invest-pricing.html" class="primary-btn primary-effect">Invest Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- invest calculator end -->

    <!-- why choose crypdo section start -->
    <section class="choose-crikto-container pt-90 pb-120">
        <div class="container">
            <div class="choose-crikto-wrapper">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-crikto-thumb">
                            <img src="{{ asset('assets/images/custom/invest/choose-illustration.png') }}" alt="Choose Illustration">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-crikto-content">
                            <h2>Why choose crikto</h2>
                            <p class="immidiate">We make investing in crypto safer, faster and easier than ever
                                before. Our unique selection of investment products, award-winning.</p>
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center">
                                <div class="choose-crikto-single-item card-effect">
                                    <h3 class="text-center">+500</h3>
                                    <p class="text-center secondary">Customers</p>
                                </div>
                                <div class="choose-crikto-single-item card-effect">
                                    <h3 class="text-center">168%</h3>
                                    <p class="text-center secondary">Return in 2021</p>
                                </div>
                            </div>
                            <a href="#registration-popup" class="primary-btn primary-effect registration-popup-link">Get Start Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why choose crypdo section end -->


    <!-- crikto invest work section start -->
    <section class="crikto-invest-work-container pt-120 pb-120">
        <div class="container">
            <div class="crikto-invest-work-wrapper">
                <div class="title-wrapper">
                    <h2 class="text-center">
                        Here’s how it works
                    </h2>
                    <p class="text-center">Get started in minutes</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="crikto-work-single-item text-center card-effect">
                            <img src="{{ asset('assets/images/custom/invest/invest-work-one.png') }}" alt="Step One">
                            <h3 class="text-center">Sign up and Verify</h3>
                            <p class="text-center">Sign up for a free account and
                                verify your identity</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="crikto-work-single-item text-center card-effect">
                            <img src="{{ asset('assets/images/custom/invest/invest-work-two.png') }}" alt="Step Two">
                            <h3 class="text-center">Make a deposit</h3>
                            <p class="text-center">Make a deposit from your bank
                                account or crypto wallet</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="crikto-work-single-item text-center card-effect">
                            <img src="{{ asset('assets/images/custom/invest/invest-work-three.png') }}" alt="Step Three">
                            <h3 class="text-center">Investment And Earn</h3>
                            <p class="text-center">Make your first investment and
                                sell out at any time</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- crikto invest work section end -->

    <!-- crikto invest video modal section start -->
    <div class="invest-video-modal-container pt-120 pb-120">
        <div class="container">
            <div class="invest-video-modal-wrapper">
                <div class="invest-video-modal">
                    <img src="{{ asset('assets/images/custom/invest/video-poster.png') }}" alt="Video Poster">
                    <a class="video_popup" href="https://www.youtube.com/watch?v=uCik8-i2Hcc"
                        title="YouTube video player">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- crikto invest video modal section end -->

    <!-- boost earning slider start -->
    <section class="boost-earning-container pt-120 pb-120">
        <div class="container">
            <div class="boost-earning-wrapper">
                <div class="row d-flex boost-title align-items-center justify-content-between">
                    <div class="col-md-9">
                        <div class="boost-left">
                            <h2 class="text-center text-md-start">Boost your interest earnings</h2>
                            <p class="text-center text-md-start">The best financial instrument for earning a high rate
                                of interest without taking too much risks. Double your profit with crikto</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="boost-right text-center text-md-end">
                            <a href="invest-pricing.html" class="primary-btn primary-effect">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="boost-slider-wrapper owl-carousel owl-theme">
            <div class="boost-slider-items">
                <div class="slider-inner">
                    <div class="boost-item d-flex align-items-center">
                        <img src="{{ asset('assets/images/custom/coins/binance-coin.png') }}" alt="Binance Coin">
                        <h3>
                            <a href="invest-pricing.html">Binance</a>
                        </h3>
                    </div>
                    <div class="boost-content d-flex align-items-center justify-content-around">
                        <div>
                            <p class="primary">Rank</p>
                            <p class="tertiary">12%</p>
                        </div>
                        <div>
                            <p class="primary">Min Deposit</p>
                            <p class="tertiary">0.0005 BNB</p>
                        </div>
                        <div>
                            <p class="primary">Period</p>
                            <p class="tertiary">30 Days</p>
                        </div>
                    </div>
                    <div class="boost-footer d-flex flex-column flex-sm-row align-items-center justify-content-between">
                        <p>84 have invested 5 ltc</p>
                        <a href="invest-pricing.html" class="primary-btn primary-effect">Invest Now</a>
                    </div>
                </div>
            </div>
            <div class="boost-slider-items">
                <div class="slider-inner">
                    <div class="boost-item d-flex align-items-center">
                        <img src="{{ asset('assets/images/custom/coins/binance-coin.png') }}" alt="Chain Link">
                        <h3>
                            <a href="invest-pricing.html">Chain Link</a>
                        </h3>
                    </div>
                    <div class="boost-content d-flex align-items-center justify-content-around">
                        <div>
                            <p class="primary">Rank</p>
                            <p class="tertiary">12%</p>
                        </div>
                        <div>
                            <p class="primary">Min Deposit</p>
                            <p class="tertiary">0.0005 BNB</p>
                        </div>
                        <div>
                            <p class="primary">Period</p>
                            <p class="tertiary">30 Days</p>
                        </div>
                    </div>
                    <div class="boost-footer d-flex flex-column flex-sm-row align-items-center justify-content-between">
                        <p>84 have invested 5 ltc</p>
                        <a href="invest-pricing.html" class="primary-btn primary-effect">Invest Now</a>
                    </div>
                </div>
            </div>
            <div class="boost-slider-items">
                <div class="slider-inner">
                    <div class="boost-item d-flex align-items-center">
                        <img src="{{ asset('assets/images/custom/coins/doge-coin.png') }}" alt="Doge Coin">
                        <h3>
                            <a href="invest-pricing.html">Doge</a>
                        </h3>
                    </div>
                    <div class="boost-content d-flex align-items-center justify-content-around">
                        <div>
                            <p class="primary">Rank</p>
                            <p class="tertiary">12%</p>
                        </div>
                        <div>
                            <p class="primary">Min Deposit</p>
                            <p class="tertiary">0.0005 BNB</p>
                        </div>
                        <div>
                            <p class="primary">Period</p>
                            <p class="tertiary">30 Days</p>
                        </div>
                    </div>
                    <div class="boost-footer d-flex flex-column flex-sm-row align-items-center justify-content-between">
                        <p>84 have invested 5 ltc</p>
                        <a href="invest-pricing.html" class="primary-btn primary-effect">Invest Now</a>
                    </div>
                </div>
            </div>
            <div class="boost-slider-items">
                <div class="slider-inner">
                    <div class="boost-item d-flex align-items-center">
                        <img src="{{ asset('assets/images/custom/coins/doge-coin.png') }}" alt="Lite Coin">
                        <h3>
                            <a href="invest-pricing.html">Lite</a>
                        </h3>
                    </div>
                    <div class="boost-content d-flex align-items-center justify-content-around">
                        <div>
                            <p class="primary">Rank</p>
                            <p class="tertiary">12%</p>
                        </div>
                        <div>
                            <p class="primary">Min Deposit</p>
                            <p class="tertiary">0.0005 BNB</p>
                        </div>
                        <div>
                            <p class="primary">Period</p>
                            <p class="tertiary">30 Days</p>
                        </div>
                    </div>
                    <div class="boost-footer d-flex flex-column flex-sm-row align-items-center justify-content-between">
                        <p>84 have invested 5 ltc</p>
                        <a href="invest-pricing.html" class="primary-btn primary-effect">Invest Now</a>
                    </div>
                </div>
            </div>
            <div class="boost-slider-items">
                <div class="slider-inner">
                    <div class="boost-item d-flex align-items-center">
                        <img src="{{ asset('assets/images/custom/coins/ethereum.png') }}" alt="Ethereum">
                        <h3>
                            <a href="invest-pricing.html">Ethereum</a>
                        </h3>
                    </div>
                    <div class="boost-content d-flex align-items-center justify-content-around">
                        <div>
                            <p class="primary">Rank</p>
                            <p class="tertiary">12%</p>
                        </div>
                        <div>
                            <p class="primary">Min Deposit</p>
                            <p class="tertiary">0.0005 BNB</p>
                        </div>
                        <div>
                            <p class="primary">Period</p>
                            <p class="tertiary">30 Days</p>
                        </div>
                    </div>
                    <div class="boost-footer d-flex flex-column flex-sm-row align-items-center justify-content-between">
                        <p>84 have invested 5 ltc</p>
                        <a href="invest-pricing.html" class="primary-btn primary-effect">Invest Now</a>
                    </div>
                </div>
            </div>
            <div class="boost-slider-items">
                <div class="slider-inner">
                    <div class="boost-item d-flex align-items-center">
                        <img src="{{ asset('assets/images/custom/coins/ethereum.png') }}" alt="Bitcoin Coin">
                        <h3>
                            <a href="invest-pricing.html">Bitcoin</a>
                        </h3>
                    </div>
                    <div class="boost-content d-flex align-items-center justify-content-around">
                        <div>
                            <p class="primary">Rank</p>
                            <p class="tertiary">12%</p>
                        </div>
                        <div>
                            <p class="primary">Min Deposit</p>
                            <p class="tertiary">0.0005 BNB</p>
                        </div>
                        <div>
                            <p class="primary">Period</p>
                            <p class="tertiary">30 Days</p>
                        </div>
                    </div>
                    <div class="boost-footer d-flex flex-column flex-sm-row align-items-center justify-content-between">
                        <p>84 have invested 5 ltc</p>
                        <a href="invest-pricing.html" class="primary-btn primary-effect">Invest Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- boost earning slider end -->

    <!-- crikto invest grow together section start -->
    <section class="grow-together-container pt-90 pb-120">
        <div class="container">
            <div class="grow-together-wrapper">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="grow-together-thumb">
                            <img src="{{ asset('assets/images/custom/invest/grow-together.png') }}" alt="Grow Together">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="grow-together-content">
                            <h2>We are here for you.Let's grow together.</h2>
                            <p>At Crypto we believe that everyone deserves the opportunity to make their money work for
                                them.
                                That is why we offer safe, fair and low-cost managed investing in the crypto market. Let
                                us do the hard work for you, so we can take together advantage of the opportunities that
                                Bitcoin, Ethereum and other cryptocurrencies offer.
                            </p>
                            <a href="#registration-popup" class="primary-btn primary-effect registration-popup-link">Invest Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- crikto invest grow together section end -->

    <!-- crikto invest currency platform section start -->
    <section class="currency-platform-container pt-90 pb-120">
        <div class="container">
            <div class="currency-platform-wrapper">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="currency-platform-thumb">
                            <img src="{{ asset('assets/images/custom/invest/platform-two.png') }}" alt="Currency Platform">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="currency-platform-content">
                            <h2>The most trusted crikto currency platform</h2>
                            <p>Here are a few reasons why you should choose crikto</p>
                            <div class="d-flex flex-column flex-sm-row align-items-start justify-content-between">
                                <div class="currency-platform-single-item">
                                    <img src="{{ asset('assets/images/custom/invest/platform-two.png') }}" alt="Storage">
                                    <h4 class="text-start text-sm-center">Secure storage</h4>
                                </div>
                                <div class="currency-platform-single-item">
                                    <img src="{{ asset('assets/images/custom/invest/platform-two.png') }}" alt="Insurance">
                                    <h4 class="text-start text-sm-center">Protected by insurance</h4>
                                </div>
                                <div class="currency-platform-single-item">
                                    <img src="{{ asset('assets/images/custom/invest/platform-two.png') }}" alt="Privacy">
                                    <h4 class="text-start text-sm-center">Privacy</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- crikto invest currency platform section end -->

    <!-- faq section start -->
    <section class="home-faq-container invest-faq pb-120">
        <div class="container">
            <div class="home-faq-wrapper">
                <div class="faq-title-wrapper text-center">
                    <h2 class="text-center">Frequently Asked Questions</h2>
                    <p class="text-center">If you have any problem regarding about Affiliate Program please contact us
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
                                            What is crikto prediction?
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
                                            How to predict on crikto
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
                                            Which assets can I use to place predictions on crikto
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
                                            How are my rewards calculated?
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
                            <img src="{{ asset('assets/images/custom/faq/curious-man.png') }}" alt="Frequently Asked Questions">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq section end -->


@include('users.association.newsletter_footer')
<!-- footer end -->

<!-- jquery v(3.6.0) minified source -->
@include('users.association.script')
</body>

<!-- Mirrored from pixner.net/crikto/crikto/lend-borrow.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 16:17:51 GMT -->
</html>
