@include('users.head')

<body>


    <!-- header start -->
 @include('users.header')
    <!-- header end -->

     {{-- <!-- join modal start -->
    @include('users.registation')
    <!-- join modal end --> --}}

    <!-- about banner section start -->
    <section class="container-fluid banner-container bg-img">
        <div class="container">
            <div class="banner-wrapper">
                <h1>A propos</h1>
                <nav aria-label="breadcrumb mt-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html" class="large">Acceuil</a></li>
                        <li class="breadcrumb-item active large" aria-current="page"> <i class="flaticon-right"></i>
                            A propos</li>
                    </ol>
                </nav>
            </div>
            <div class="banner-thumb d-none d-lg-block">
                <img src="assets/images/custom/banner/about-one-illustration.png" alt="About One Illustration">
            </div>
        </div>
    </section>
    <!-- about banner section end -->

    <!-- about crikto section start -->
    @include('users.apropos')
    <!-- about crikto section end -->

    <!-- build the future of technology section start -->
    <section class="future-container pt-90 pb-120">
        <div class="container">
            <div class="future-wrapper">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 order-last order-lg-first">
                        <div class="future-left-content">
                            <h4>World leading company</h4>
                            <h2>Build the future of technology</h2>
                            <p>What's the secret to crikto's success? The answer is
                                obvious: Our people. We are proud to have one of the most
                                talented, hardworking and passionate teams the world has to
                                offer. Interested in joining our team?</p>
                            <a href="#registration-popup" class="secondary-btn secondary-effect registration-popup-link">Join Our Team</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="future-thumb text-lg-center">
                            <img src="assets/images/custom/about/technology-illustration.png" alt="Future Illustration">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- build the future of technology section end -->

    <!-- sign up bonus section start -->
    <section class="bonus-container pt-90 pb-120">
        <div class="container">
            <div class="bonus-wrapper">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="bonus-thumb">
                            <img src="assets/images/custom/about/bonus-illustration.png" alt="Bonus Illustration">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bonus-content">
                            <h2>Predict.Win Cash</h2>
                            <p>Take part in the first decentralized prediction on the market. CryptoCurrency is changing
                                our world one coin at time. Learn about this world-changing movement and how you can be
                                a part of it from Our experts.</p>
                            <a href="#registration-popup" class="fourier-btn large primary-effect registration-popup-link">Sign up with $5 bonus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sign up bonus section end -->


    @include('users.team_testimonies')
    <!-- subscribe newsletter section start -->
    @include('users.newsletter_footer')
    <!-- footer end -->

    <!-- jquery v(3.6.0) minified source -->
   @include('users.script')
</body>


<!-- Mirrored from pixner.net/crikto/crikto/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 16:15:53 GMT -->
</html>
