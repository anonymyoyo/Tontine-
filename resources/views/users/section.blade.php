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
    <div class="slide">
        <img src="{{ asset('assets/images/picture1.png') }}" alt="Image 3" class="image">
        <div class="description">
          <p>Notre Application est totalement gratuite !!!
          </p>
          <a href="{{ route('login') }}">Commencer</a>
        </div>
      </div>
    <div class="slide">
      <img src="{{ asset('assets/images/picture2.png') }}" alt="Image 1" class="image">
      <div class="description">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Distinctio soluta quaerat, aspernatur consequuntur, maxime eius numquam
        </p>
        <a href="{{ route('login') }}">Commencer</a>
      </div>
    </div>
    <div class="slide">
      <img src="{{ asset('assets/images/picture3.png') }}" alt="Image 2" class="image">
      <div class="description">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Distinctio soluta quaerat, aspernatur consequuntur, maxime eius numquam
        </p>
        <a href="{{ route('login') }}">Commencer</a>
      </div>
    </div>

</div>

<div class="section">
    <h1>NOS SERVICES</h1>
    <div class="sup_section">
        <div class="sup-one">
            <img src="{{ asset('assets/css/img/fone.png') }}" alt="">
            <div class="sup_one">
                <img src="{{ asset('assets/css/img/6and-7_sending-copy-300x92.png') }}" alt="">
                <img src="{{ asset('assets/css/img/6and-7_sending-copy-2-300x92.png') }}" alt="">
            </div>
        </div>
        <div class="sup-two">
            <img src="{{ asset('assets/css/img/VF-features.png') }}" alt="">
        </div>
    </div>
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
</div>



  <script>
    const slides = document.querySelectorAll('.slide');

    let currentSlide = 0;
    const interval = 3500;

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



