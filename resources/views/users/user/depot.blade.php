

@include('users.head')

<body>


    <!-- error section start -->
    <section class="error-container bg-img">
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
    </section>
    <!-- error section end -->

@include('users.script')
</body>


<!-- Mirrored from pixner.net/crikto/crikto/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 16:18:15 GMT -->
</html>

