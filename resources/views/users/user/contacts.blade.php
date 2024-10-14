@include('users/head')

<body>


    <!-- header start -->
    @include('users/header')
    <!-- header end -->


<!-- contact banner section start -->
    <section class="container-fluid banner-container bg-img">
        <div class="container">
            <div class="banner-wrapper">
                <h1>Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('user') }}" class="large">Acceuil</a></li>
                        <li class="breadcrumb-item active large" aria-current="page"> <i class="flaticon-right"></i>
                            Contact</li>
                    </ol>
                </nav>
            </div>
            <div class="banner-thumb contact-banner-thumb d-none d-lg-block">
                <img src="assets/images/custom/banner/contact-banner-illustration.png" alt="Contact Illustration">
            </div>
        </div>
    </section>
    <!-- contact banner section end -->

    <!-- contact form section start -->
    <section class="contact-form-container pt-120 pb-120">
        <div class="container">
            <div class="contact-form-wrapper">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-form-left-column">
                            <h2>Infos contact </h2>
                            <p class="pri">Notre equipe est a votre ecoute.</p>
                            <div class="contact-left-single-item d-flex align-items-center">
                                <div class="contact-item-thumb">
                                    <img src="{{ asset('assets/images/custom/contact/contact-mail.png') }}" alt="Mail">
                                </div>
                                <div class="contact-item-info">
                                    <p><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1c74797070735c7f6e75776873327f7371">[email&#160;protected]</a></p>
                                </div>
                            </div>
                            <div class="contact-left-single-item d-flex align-items-center">
                                <div class="contact-item-thumb">
                                    <img src="{{ asset('assets/images/custom/contact/contact-phone.png')}}" alt="Phone">
                                </div>
                                <div class="contact-item-info">
                                    <p>+61 0422 322 11(3)</p>
                                </div>
                            </div>
                            <hr>
                            <h4>Nos plateformes sociales</h4>
                            <div class="social-wrapper">
                                <a href="#">
                                    <img src="{{ asset('assets/icons/custom/facebook.png')}}" alt="Facebook">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/icons/custom/twitter.png')}}" alt="Twitter">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/icons/custom/instagram.png')}}" alt="Instagram">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/icons/custom/linkedin.png')}}" alt="Linkedin">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-form-right-column">
                            <h3>Entrez en contact Avec NOUS</h3>
                            <p>Remplissez le formulaire et notre equipe vous repondra dans un delai de 24h</p>
                            <form method="post" id="contactForm">
                                <div class="d-flex flex-column flex-md-row">
                                    <div class="full-name">
                                        <label for="contactFullName">Nom</label>
                                        <div class="icon-wrapper-input">
                                            <input type="text" name="fullName" id="contactFullName" required="required"
                                                placeholder="Full Name">
                                            <img src="{{ asset('assets/icons/custom/user.png')}}" alt="User">
                                        </div>
                                    </div>
                                    <div class="email-address ml-0">
                                        <label for="contactEmailAddress">Email</label>
                                        <div class="icon-wrapper-input">
                                            <input type="email" name="emailAddress" id="contactEmailAddress"
                                                required="required" placeholder="Email Address">
                                            <img src="{{ asset('assets/icons/custom/mail.png')}}" alt="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-md-row">
                                    <div class="full-name">
                                        <label for="company">Demandeur</label>
                                        <div class="icon-wrapper-input">
                                            <input type="text" name="companyName" id="company" required="required"
                                                placeholder="Veuiller entrer le nom de l'association ou de l'entreprise ">
                                        </div>
                                    </div>
                                    <div class="email-address ml-0">
                                        <label for="phoneNumber">Telephone</label>
                                        <div class="icon-wrapper-input">
                                            <input type="text" name="contactPhoneNumber" id="phoneNumber"
                                                required="required" placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-area-wrapper">
                                    <label for="contactMessage">Message</label>
                                    <textarea name="comment-content" id="contactMessage" cols="10" rows="4"
                                        required="required"
                                        placeholder="Je voudrais entrer en contact avec l'equipe de TCA..."></textarea>
                                </div>
                                <button type="submit" class="primary-submit primary-effect contact-cta">
                                    Envoyer</button>
                            </form>
                            <!-- contact form status -->
                            <div class="contact-status">
                                <h4>Merci... Votre demande a ete recue!</h4>
                                <a href="javascript:void(0)" class="close-status"><i class="fas fa-times"></i></a>
                            </div>
                            <!-- contact form status -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact form section end -->


    <!-- subscribe newsletter section start -->
    @include('users.newsletter_footer')
    <!-- footer end -->

    <!-- jquery v(3.6.0) minified source -->
   @include('users.script')
</body>


<!-- Mirrored from pixner.net/crikto/crikto/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 16:15:53 GMT -->
</html>
