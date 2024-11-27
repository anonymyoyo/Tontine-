<style>
    .slider {
      position: relative;
      width: 800px;
      height: 600px;
      margin: 40px auto;
    }

    .slides {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }

    .slide {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      opacity: 0;
      transition: opacity 0.5s;
    }

    .slide.active {
      opacity: 1;
    }

    .slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .nav {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
    }

    .prev,
    .next {
      background-color: rgb(255, 253, 253);
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }

    .prev:hover,
    .next:hover {
      background-color: #ccc;
    }
</style>

<section class="home-banner-container main-home-banner bg-img" >
    <div class="slider">
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
                        <div class="slide">
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
                        <div class="slide">
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
    </div>
</section>

<script>
    const slides = document.querySelectorAll('.slide');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');

    let currentSlide = 0;
    const interval = 3000;

    prevButton.addEventListener('click', () => {
      currentSlide--;
      if (currentSlide < 0) {
        currentSlide = slides.length - 1;
      }
      updateSlides();
    });

    nextButton.addEventListener('click', () => {
      currentSlide++;
      if (currentSlide >= slides.length) {
        currentSlide = 0;
      }
      updateSlides();
    });

    function updateSlides() {
      slides.forEach((slide, index) => {
        if (index === currentSlide) {
          slide.classList.add('active');
        } else {
          slide.classList.remove('active');
        }
      });
    }

    setInterval(() => {
      currentSlide++;
      if (currentSlide >= slides.length) {
        currentSlide = 0;
      }

      updateSlides();
    }, interval);
</script>



  {{-- <div class="slider">
    <div class="slides">
      <div class="slide active">
        <img src="img/1.PNG" alt="Image 1">
      </div>
      <div class="slide">
        <img src="img/2.PNG" alt="Image 2">
      </div>
      <div class="slide">
        <img src="img/3.PNG" alt="Image 3">
      </div>
      <!-- <div class="slide">
        <img src="" alt="Image 4">
      </div> -->
    </div>
    <div class="nav">
      <button class="prev">Precedent</button>
      <button class="next">Suivant</button>
    </div>
  </div> --}}


