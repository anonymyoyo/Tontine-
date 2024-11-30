@include('users.head')

<body>


    <!-- header start -->
    @include('users.header')
    <!-- header end -->
<div>
       <div class="contact-container contact-form">
        <div class="formulaire">
          <h2 class="h2">Contactez-nous</h2>
          <form action="">
            <div class="li">
              <label class="li-1" for="nom">Nom & Prenom :</label>
              <input class="li-2" type="text" id="nom"
                placeholder="Veuiller entrer votre nom et votre prenom"><br><br>
            </div>
            <div class="li">
              <label class="li-1" for="objet">Objet :</label>
            </div>
            <div class="li">
              <input class="li-2" type="text" placeholder="Pourquoi nous contactez-vous ?" id="objet"><br><br>
            </div>
            <div class="li">
              <label class="li-1" for="numero">Tel:</label>
            </div>
            <div class="li">
              <input class="li-2" type="text" name="phone" id="phone"
                placeholder="Veuiller entrer votre numero de telephone"><br><br>
            </div>
            <div class="li">
                <label class="li-1" for="numero">Commentaire:</label>
            </div>
            <div class="li">
              <textarea class="li-2" name="" id="" cols="30" rows="10"></textarea>
              <br><br
            </div>
            <div class="li">
              <input class="li-3" type="submit" value="Soumettre">
            </div>

          </form>
        </div>

    </div>
      <div class="image2">
        <img src="{{ asset('assets/css/img/contact.png') }}" alt="image">
      </div>
</div>





    <!-- subscribe newsletter section start -->
    @include('users.newsletter_footer')
    <!-- footer end -->

    <!-- jquery v(3.6.0) minified source -->
   @include('users.script')

</body>
<!-- Mirrored from pixner.net/crikto/crikto/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Sep 2024 16:15:53 GMT -->
</html>
