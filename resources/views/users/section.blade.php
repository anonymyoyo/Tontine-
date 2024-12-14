 {{-- <style>
    .slider {
      position: relative;
      width: 1500px;
      height: 800px;
      margin: 40px auto;
      overflow: hidden;
    }

    .slide {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      opacity: 0;
      transition: opacity 1s;
    }

    .slide.active {
      opacity: 1;
    }

    .image {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .description {
      width: 50%;
      padding: 20px;
      font-size: 16px;
    }

    /* .description {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
    } */

    /* .nav {
      margin-bottom: 10px;
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
    } */
</style> --}}

<div class="slider">
    {{-- <marquee behavior="" direction="left">
        <b><i>Tontine Simple</i></b>
        <b><i>Tontine Islamique</i></b>
        <b><i>Tontine Electromenagers</i></b>
        <b><i>Tontine D'assurance</i></b>
        <b><i>Tontine Scolaire</i></b>
        <b><i>Tontine D'investissement</i></b>
        <b><i>Tontine Alimentaire</i></b>
    </marquee> --}}
    <div class="slide">
        <img src="{{ asset('assets/images/picture1.png') }}" alt="Image 3" class="image">
        <div class="description">
            <p>TCA Mobile Money la nouvelle generation de tontine conviviable, securisee et facile a utiliser. <br>
                <span>Notre Application est totalement gratuite !!!
                </span>
            </p>

            <div class="slidetontine">
                <div class="slidetontine1">
                    <p>Tontine Scolaire</p>
                    <p>Tontine Simple</p>
                    <p>Tontine Epargne</p>
                </div>
                <div class="slidetontine2">
                    <p>Tontine Assurance</p>
                    <p>Tontine Electromenager</p>
                    <p>Tontine Investissement</p>
                </div>
            </div>
            <a href="{{ route('login') }}">Telecharger l'application</a>
        </div>
      </div>
    <div class="slide">
      <img src="{{ asset('assets/images/picture2.png') }}" alt="Image 1" class="image">
      <div class="description">
        <p>TCA Mobile Money la nouvelle generation de tontine conviviable, securisee et facile a utiliser. <br>
            <span>Notre Application est totalement gratuite !!!
            </span>
        </p>

        <div class="slidetontine">
            <div class="slidetontine1">
                <p>Tontine Scolaire</p>
                <p>Tontine Simple</p>
                <p>Tontine Epargne</p>
            </div>
            <div class="slidetontine2">
                <p>Tontine Assurance</p>
                <p>Tontine Electromenager</p>
                <p>Tontine Investissement</p>
            </div>
        </div>
        <a href="{{ route('login') }}">Telecharger l'application</a>
      </div>
    </div>

</div>

<div class="section">

        <div class="sup_section">
            <div class="sup_one">
                <h4>Pourquoi payer pour vos transactions financières ?</h4>
            <p>Avec TCA Money, vos dépôts, retraits, transferts et paiements sont gratuits.</p>
            <p>TCA Money est la nouvelle génération de wallet. Conviviable, sécurisé et facile à utiliser
            pour tout vos besoins et paiement et transfert d’argent.</p>
            {{-- <div class="download">
                <img src="{{ asset('assets/css/img/6and-7_sending-copy-300x92.png') }}" class="appstore" alt="">
                <img src="{{ asset('assets/css/img/6and-7_sending-copy-2-300x92.png') }}" class="playstore" alt="">
            </div> --}}
            </div>
            <div class="sup_two">
                <img src="{{ asset('assets/css/img/fone.png') }}" class="img" alt="">
            </div>
        </div><br>
        <div class="sup_section">
            <div class="sup_one">
                <h4>Fontionnalités</h4>
                <p>TCA va au dela du transfert d’argent et de la gestion du porte feuille. C’est la plateforme qu répond à tous vos besoins financiers.</p>
            </div>
            <div class="sup_two">
                <img src="{{ asset('assets/css/img/VF-features.png') }}" class="img" alt="">
            </div>
        </div>
        <br><br>
    <div class="sub_section">
        <div class="sub_one">
            <img src="{{ asset('assets/css/img/1-150x150.png') }}" alt="">
            <h4>Cartes de paiement</h4>
            <p>Effectuer vos paiements via vos cartes visa ou mastercard</p>
        </div>
        <div class="sub_two">
            <img src="{{ asset('assets/css/img/2-150x150.png') }}" alt="">
            <h4>Marketplace</h4>
            <p>Achetez et payez des produits et articles electro-menagers sur notre marketplace.</p>
        </div>
        <div class="sub_tree">
            <img src="{{ asset('assets/css/img/3-143x150.png') }}" alt="">
            <h4>Micro-crédit</h4>
            <p>Utilisez TCA et faites la demande d'un microcrédit.</p>
        </div>
    </div>

    <div class="download">
        <img src="{{ asset('assets/css/img/6and-7_sending-copy-300x92.png') }}" class="appstore" alt="">
        <img src="{{ asset('assets/css/img/6and-7_sending-copy-2-300x92.png') }}" class="playstore" alt="">
    </div>
</div>



<script>
    const slides = document.querySelectorAll('.slide');

    let currentSlide = 0;
    const interval = 5000;

    function updateSlides() {
      slides.forEach((slide, index) => {
        if (index === currentSlide) {
          slide.classList.add('active');
        } else {
          slide.classList.remove('active');
        }
      });
    }

    function nextSlide() {
      currentSlide++;
      if (currentSlide >= slides.length) {
        currentSlide = 0;
      }

      updateSlides();
    }
    setInterval(nextSlide, interval);
  </script>




{{-- <style>
    .section {
    position: relative;
    width: 90%;
    margin: 40px auto;
    display: block;
    }

    .section .sup_section {
        display: block;
        width: 100%;
        height: auto;
    }

    .section .sup_section .sup_one {
        width: 60%;
        margin-bottom: 0;
    }

    .section .sup_section .sup_one h4 {
        font-size: 40px;
        color: #90cf35;
    }

    .section .sup_section .sup_one p {
        font-size: 20px;
        text-align: left;
    }

    .section .sup_section .sup_one .download {
        display: block;
        width: 50%;
        align-items: center;
    }

    .section .sup_section .sup_one .download .appstore,
    .sup_one .download .playstore {
        width: 50%;
        height: 50px;
    }

    .section .sup_section .sup_two {
        width: 60%;
        height: 600px;
    }

    .section .sup_section .sup_two .img {
        width: 90%;
        height: auto;
        border-radius: 30px;
    }

    .section .sub_section {
        display: block;
    }

    .section .sub_section .sub_one,
    .sub_two,
    .sub_tree {
        text-align: center;
        font-size: 20px;
        font-weight: 300;
        width: 40%;
        border: 1px solid #567c21;
        border-radius: 25px;
        margin: 10px;
    }

    .section .sub_section .sub_one:hover,
    .sub_two:hover,
    .sub_tree:hover {
        text-align: center;
        font-size: 20px;
        font-weight: 300;
        width: 40%;
        background-color: #567c21;
        border: none1;
        border-radius: 25px;
        margin: 10px;
        cursor: pointer;
        transition: .5s;
    }

</style> --}}


