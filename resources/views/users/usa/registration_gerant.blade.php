<!DOCTYPE html>
<html lang="en" class="no-js">

@include('users.head')

<body>

        @include('users.header')

  <form method="POST" action="{{ route('verification') }}">
        @csrf
        <div id="registration-popup" class="white-popup  login-modal-container">
            <div class="login-modal-wrapper">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="registration-left-column">
                            <div class="registration-button-wrapper">
                                <a href="#logIn" class="registration-tab-btn registration-tab-active">Sign Up</a>
                            </div>
                            <!-- sign up form end -->
                            <!-- log in form start -->
                            <div class="registration-tab" id="logIn">
                                <div class="registration-tab-content">
                                    <form action="{{ route('verification') }}" method="post" id="logInForm">
                                        @csrf
                                        <div class="form-group">
                                            <label for="logInMail">Date de Naissance</label>
                                            <div class="icon-wrapper-input">
                                                <input type="date" name="naissance" class="form-control" required="required"
                                                    placeholder="Date de Naissance">
                                                {{-- <img src="assets/icons/custom/mail.png" alt="mail"> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="logInPassword">Votre nom</label>
                                            <div class="icon-wrapper-input">
                                                <input type="text" name="name" class="form-control" required="required"
                                                    placeholder="Entrer votre nom">
                                                {{-- <img src="assets/icons/custom/eye.png" alt="Password"> --}}
                                            </div>
                                        </div>
                                        @foreach ($tontine as $tontines)
                                        @if ($tontines->user_id)
                                            <input type="hidden" name="tontine_id" value="{{ $tontines->id }}" required="required">
                                        @endif


                                        @endforeach
                                            @if ( auth()->user()->id)
                                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" class="form-control" required="required">
                                            @endif

                                        <div class="d-flex align-items-center justify-content-between checkf">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Remember Me
                                                </label>
                                            </div>
                                            <a href="#">Forget Password</a>
                                        </div>
                                        <button type="submit" class="primary-effect">Confirmer</button>
                                    </form>
                                </div>
                            </div>
                            <!--log in form end  -->
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="registration-right-column">
                            <a href="index.html">
                                <img src="assets/images/logo.png" alt="crikto Logo">
                            </a>
                            <h5>Take the chance to Win Big reward </h5>
                            <h2>Predict Crypto Prices, Win Big Rewards</h2>
                            <div class="registration-single-item d-flex align-items-center">
                                <div class="registration-item-thumb">
                                    <img src="assets/images/custom/registration/frame.png" alt="Frame One">
                                </div>
                                <div class="registration-item-info">
                                    <p>Safe and Secure</p>
                                </div>
                            </div>
                            <div class="registration-single-item d-flex align-items-center">
                                <div class="registration-item-thumb">
                                    <img src="assets/images/custom/registration/frame-two.png" alt="Frame Two">
                                </div>
                                <div class="registration-item-info">
                                    <p>Daily price predictions</p>
                                </div>
                            </div>
                            <div class="registration-single-item d-flex align-items-center">
                                <div class="registration-item-thumb">
                                    <img src="assets/images/custom/registration/frame-three.png" alt="Frame Three">
                                </div>
                                <div class="registration-item-info">
                                    <p>24x7 Customer Support</p>
                                </div>
                            </div>
                            <div class="registration-illustration">
                                <img src="assets/images/custom/contact/registration-illustration.png"
                                    alt="Illustration for registration modal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    @include('users.newsletter_footer')
<!-- footer end -->

<!-- jquery v(3.6.0) minified source -->
@include('users.script')
</body>

<!-- Mirrored from pixner.net/crikto/crikto/lend-borrow.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 16:17:51 GMT -->
</html>

