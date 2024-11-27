<style>
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
</style>

<section class="home-banner-container main-home-banner bg-img">

    <div class="slider">
        <div class="slide">
            <img src="{{ asset('assets/images/custom/banner/home-illustration.png') }}"
                alt="Illustration" class="image">
          <div class="description">
            <div class="home-banner-left-col">
                <h1>NJOOOH !!!</h1>
                {{-- <img src="{{ asset('assets/images/custom/banner/home-illustration.png') }}"
                alt="Illustration" class="image"> --}}
                {{-- <p class="tertiary">Trade, Predict , Invest, and Lend & Borrow  digital currencies. A leading digital asset company building a better future</p> --}}
                <a href="{{ ('login') }}" class="primary fourier-btn primary-effect">Telecharger maintenant</a>
            </div>
          </div>
        </div>
        <div class="slide">

          <div class="description">
            <div class="home-banner-left-col">
                <h1>Tontine Communautaire d'Afrique Pour tous</h1>
                <p class="tertiary">Trade, Predict , Invest, and Lend & Borrow  digital currencies. A leading digital asset company building a better future</p>
                <a href="{{ ('login') }}" class="primary fourier-btn primary-effect">Commencer maintenant</a>
            </div>
          </div>
            <img src="{{ asset('assets/images/custom/banner/picture2.png') }}"
                        alt="Illustration" class="image">
        </div>
        <div class="slide">

          <div class="description">
            <div class="home-banner-left-col">
                <h1>Tontine Communautaire d'Afrique Pour tous</h1>
                <p class="tertiary">Trade, Predict , Invest, and Lend & Borrow  digital currencies. A leading digital asset company building a better future</p>
                <a href="{{ ('login') }}" class="primary fourier-btn primary-effect">Commencer maintenant</a>
            </div>
          </div>
            <img src="{{ asset('assets/images/custom/banner/picture3.png') }}"
                        alt="Illustration" class="image">
        </div>
      </div>

    {{-- <div class="slider">
        <div class="container">
            <div class="home-banner-wrapper">
                <div class="slides">
                    <div class="row">
                        <div class="slide active">
                            <div class="col-lg-6 col-xl-5">
                                <div class="home-banner-left-col">
                                    <h1>Tontine Communautaire d'Afrique Pour tous</h1>
                                    <p class="tertiary">Trade, Predict , Invest, and Lend & Borrow  digital currencies. A leading digital asset company building a better future</p>
                                    <a href="{{ ('login') }}" class="primary fourier-btn primary-effect">Commencer maintenant</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-7 d-none d-lg-block">
                                <div class="home-banner-right-col">
                                    <div class="home-banner-thumb">
                                        <img src="{{ asset('assets/images/custom/banner/home-illustration.png') }}"
                                            alt="Illustration">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav">
                    <button class="prev">Precedent</button>
                    <button class="next">Suivant</button>
                  </div>
            </div>
        </div>
    </div> --}}
</section>




  <script>
    const slides = document.querySelectorAll('.slide');

    let currentSlide = 0;
    const interval = 3000;

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



