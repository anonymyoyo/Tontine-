<div class="sup_footer">
    <div class="footer">
    <footer>
      <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="logo-1">
      <div class="footer-navbar">
        <nav class="footer-nav">
          <ul>
            <li class="footer-li"><a href="{{ route('home') }}">ACCEUIL</a></li>
            <li class="footer-li"><a href="{{ route('catalogue') }}">CATALOGUE</a></li>
            {{-- <li class="footer-li"><a href="{{ route('contact') }}">CONTACTS</a></li> --}}
            <li class="footer-li"><a href="{{ route('login') }}">CONNEXION</a></li>
          </ul>
        </nav>
        <!-- <h6>Soyez aux nouvelles sur nos mise a jour</h6> -->
      </div>
    </footer>
    <div class="footer-newsletter">
      <!-- <div class="footer-li"> -->
        <div class="img_newsletter">
            <img src="{{ asset('assets/css/img/newsletter.png') }}" class="newsletter_img" alt="">
        </div>
      <input class="newsletter" type="mail" name="mail" id="mail" placeholder="Veuiller entrer votre addresse Mail">

      <input class="newsletter_send" type="submit" value="S'inscrire"><br><br>
      <!-- </div> -->

    </div>
    <!--  -->

</div>
    <div class="separator"></div>

    <p class="copyright">Copyright © TCA | Designed by TCA</p>
</div>
