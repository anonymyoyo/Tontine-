<!DOCTYPE html>
<html lang="en" class="no-js">

@include('users.head')

<body>

        @include('users.header')

        <br><br><br><br><br><br>

<div class="white-popup login-modal-container">
    <div class="login-modal-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="registration-left-column">
                    <div class="registration-button-wrapper">
                        <a href="#signUp" class="registration-tab-btn registration-tab-active">Sign Up</a>
                    </div>
                    <div class="registration-social-wrapper text-center">
                        <p class="text-u primary text-center">Log In Directly With</p>
                        <div class="social-wrapper text-center">
                            <a href="#">
                                <img src="assets/icons/custom/facebook.png" alt="Facebook">
                            </a>
                            <a href="#">
                                <img src="assets/icons/custom/twitter.png" alt="Twitter">
                            </a>
                            <a href="#">
                                <img src="assets/icons/custom/google.png" alt="Google">
                            </a>
                            <a href="#">
                                <img src="assets/icons/custom/linkedin.png" alt="Linkedin">
                            </a>
                        </div>
                    </div>

                    <!-- sign up form start -->
                    <div class="registration-tab" id="signUp">
                        <div class="registration-tab-content">
                            <form method="POST" action="{{ route('register.association') }}" id="SignForm">
                                @csrf
                                {{-- <div style="display: flexbox; with: 20px;"> --}}
                                    <div class="form-group flexbox">
                                        <label for="signUpMail">Nom de l'association</label>
                                        <div class="icon-wrapper-input">
                                            <input type="text" name="name" class="form-control" id="signUpMail" required="required"
                                                placeholder="Nom de l'association">
                                            {{-- <img src="assets/icons/custom/mail.png" alt="Mail"> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="form-group flexbox"> --}}
                                        {{-- <label for="signUpMail">Nom de l'association</label> --}}
                                        {{-- <div class="icon-wrapper-input"> --}}
                                            @foreach ($user as $users)
                                            @if ( auth()->user()->id)
                                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" class="form-control" id="signUpMail" required="required"placeholder="Nom de l'association">
                                            @endif
                                            @endforeach

                                            {{-- @foreach ($tontines as $tontine)
                                                <input type="hidden" name="tontine_id" value="{{ $tontine->id }}" class="form-control" id="signUpMail" required="required"placeholder="Nom de l'association">
                                            @endforeach --}}

                                            {{-- <img src="assets/icons/custom/mail.png" alt="Mail"> --}}
                                        {{-- </div> --}}
                                    {{-- </div> --}}
                                    <div class="form-group flex box">
                                        <label for="signUpMail">Montant de l'epargne</label>
                                        <div class="icon-wrapper-input">
                                            <input type="text" name="epargne" class="form-control" id="signUpMail" required="required"
                                                placeholder="Montant">
                                            {{-- <img src="assets/icons/custom/mail.png" alt="Mail"> --}}
                                        </div>
                                    </div>
                                {{-- </div> --}}

                                <div class="form-group">
                                    <label for="signUpMail">Date de debut</label>
                                    <div class="icon-wrapper-input">
                                        <input type="date" name="date_debut" class="form-control" id="signUpMail" required="required"
                                            placeholder="Date de debut">
                                        {{-- <img src="assets/icons/custom/mail.png" alt="Mail"> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="signUpMail">Date de fin</label>
                                    <div class="icon-wrapper-input">
                                        <input type="date" name="date_fin" class="form-control" id="signUpMail" required="required"
                                            placeholder="Date de fin">
                                        {{-- <img src="assets/icons/custom/mail.png" alt="Mail"> --}}
                                    </div>
                                <div class="form-group">
                                    <label for="signUpMail">Nombre de Participants</label>
                                    <div class="icon-wrapper-input">
                                        <input type="text" name="nbre_membre" class="form-control" id="signUpMail" required="required"
                                            placeholder="Nombre de Participants">
                                        {{-- <img src="assets/icons/custom/mail.png" alt="Mail"> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="signUpMail">Nombre de Participants Max</label>
                                    <div class="icon-wrapper-input">
                                        <input type="text" name="nbre_membre_max" class="form-control" id="signUpMail" required="required"
                                            placeholder="Nombre de Participants Max">
                                        {{-- <img src="assets/icons/custom/mail.png" alt="Mail"> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="signUpMail">Description</label>
                                    <div class="icon-wrapper-input">
                                       <textarea name="description" class="form-control" id="" required="required"  rows="3"></textarea>
                                        {{-- <img src="assets/icons/custom/mail.png" alt="Mail"> --}}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="signUpMail">Reglements</label>
                                    <div class="icon-wrapper-input">
                                       <textarea name="reglement" class="form-control" id="" required="required"  rows="3"></textarea>
                                        {{-- <img src="assets/icons/custom/mail.png" alt="Mail"> --}}
                                    </div>
                                </div>
                                <button type="submit" class="primary-effect">SignUp</button>
                            </form>
                            <p class="nm primary">Already have an member ? <a href="#logIn" class="registration-tab-btn">LOGIN</a></p>
                        </div>
                    </div>
                    <!-- sign up form end -->

                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br><br>

@include('users.newsletter_footer')
<!-- footer end -->

<!-- jquery v(3.6.0) minified source -->
@include('users.script')
</body>

<!-- Mirrored from pixner.net/crikto/crikto/lend-borrow.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 16:17:51 GMT -->
</html>
