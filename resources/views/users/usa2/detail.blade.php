<!DOCTYPE html>
<html lang="en" class="no-js">

@include('users.association.head')

<body>

        @include('users.association.header')


    <!-- trade banner section start -->
    <section class="container-fluid banner-container bg-img"">
        <div class="container">
            <div class="banner-wrapper">
                <h1>Crypto Token Details</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html" class="large">{{ $tontine->name }}</a></li>
                        <li class="breadcrumb-item active large" aria-current="page"> <i class="flaticon-right"></i>
                            Details</li>
                    </ol>
                </nav>
            </div>
            <div class="banner-thumb d-none d-lg-block">
                <img src="{{ asset('assets/images/custom/banner/trade-illustration.png') }}" alt="Trade Illustration">
            </div>
        </div>
    </section>
    <!-- trade banner section end -->

    <!-- crypto token details section start -->
    <section class="crypto-token-details-container pt-90 pb-120">
        <div class="container">
            <div class="crypto-token-details-wrapper">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="crypto-token-value">
                            <div class="d-flex align-items-center crypto-token-intro">
                                <img src="{{ asset('assets/images/custom/coins/bitcoin.png') }}" alt="Bitcoin">
                                <h2>{{ $tontine->name }}</h2>
                                <span>.</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, at odio massa.</p>
                            <div class="token-destination d-flex align-items-center justify-content-between">
                                <a href="{{ route('confirmation', $tontine->id) }}" class="form-control" style="color: green;">Rejoindre</a>
                                <a href="#">WhitePaper</a>
                            </div>
                            <div
                                class="d-flex flex-column flex-sm-row align-items-center justify-content-around token-capital">
                                <div>
                                    <p class="secondary">Market Cap</p>
                                    <p class="secondary">$252,844,036,453 USD</p>
                                </div>
                                <div class="immidiate">
                                    <p class="secondary">Volume</p>
                                    <p class="secondary">$30,504,879,301 USD</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="crypto-token-about">
                            <h2>Description {{ $tontine->name }}</h2>
                            <p class="immidiate">{{ $tontine->description }}</p>
                            <h3>Why purchasing Bitcoin?</h3>
                            <p class="second-immidiate">{{ $tontine->reglement }}</p>
                            {{-- <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius.</li>
                                <li>Sed faucibus turpis in eu. Feugiat nibh sed pulvinar proin.</li>
                                <li>Commodo odio aenean sed adipiscing diam donec adipiscing tristi.</li>
                                <li>Penatibus et magnis dis parturient. Lacus vestibulum sed.</li>
                            </ul>
                            <p class="third-immidiate">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper eget ipsum tortor
                                lobortis. Augue et nam ullamcorper eleifend enim augue malesuada. Consequat massa, nisi,
                                quam penatibus nec, cursus netus egestas sagittis. Non mattis ipsum senectus quis.
                            </p>
                            <h4>Is investing in Bitcoin a good idea?</h4>
                            <p class="fourth-immidiate">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper eget ipsum tortor
                                lobortis. Augue et nam ullamcorper eleifend enim.
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- crypto token details section end -->
{{-- @endforeach --}}

@include('users.association.newsletter_footer')
<!-- footer end -->

<!-- jquery v(3.6.0) minified source -->
@include('users.association.script')
</body>

<!-- Mirrored from pixner.net/crikto/crikto/lend-borrow.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 16:17:51 GMT -->
</html>
