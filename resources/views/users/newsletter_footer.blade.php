<section class="newsletter-container">
    <div class="container">
        <div class="newsletter-wrapper">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="newsletter-left-item">
                        <div class="newsletter-thumb">
                            <img src="{{ asset('assets/images/custom/contact/newsletter-illustration.png') }}"
                                alt="Newsletter illustration">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="newsletter-content">
                        <h2>Soyez aux nouvelles sur nos mise a jour</h2>
                        <form action="#" method="POST" id="newsletter">
                            <input type="email" name="subscribeNewsletter" id="subscribeNews" required="required"
                                placeholder="Entrer votre e-mail">
                            <button type="submit" class="primary-submit primary-effect">Souscrire</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe newsletter section end -->

<!-- footer start -->
<footer class="footer-container">
    <div class="container">
        <div class="footer-wrapper pt-120">
            <div class="row d-flex align-items-center">
                <div class="col-lg-3">
                    <div class="footer-logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="footer-links">
                        <ul class="nav justify-content-lg-end">
                            <li class="nav-item mt-0">
                                <a class="nav-link pl-0" href="{{ route('home') }}">Acceuil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.association') }}">Association</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pr-0" href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copy-wrapper">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="copy-text">
                            <h5>Copyright © Anonyme | Designed by <a
                                    href="#">Anonyme</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-social-wrapper d-flex align-items-center justify-content-lg-end">
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
                </div>
            </div>
        </div>
    </div>
</footer>
