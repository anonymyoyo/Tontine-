/**
 *
 ***
 *
 * Template Name : Crikto
 * Version : 1.0.0
 * Author : Softivus
 * Author URI : https://www.templatemonster.com/authors/softivus/
 * Description : Predict, Trade and Invest cryptocurrency
 *
 ***
 *
 * table of js content
 *
 ***
 * data background
 * toggle navbar hamburger
 * change background
 * registration modal
 * accodion icon change
 * testimonial slider
 * latest post slider
 * about team slider
 * predict token slider
 * tab
 * countdown
 *
 *
 ***
 *
 */

(function ($) {
  "use strict";

  // function will be executed before page load (on window load)
  $(window).on("load", function () {
    // codes for background image import with attribute
    var img = $(".bg-img");
    img.css("background-image", function () {
      var bg = "url(" + $(this).data("background") + ")";
      return bg;
    });
  });

  // function will be executed when page fully loaded
  $(document).ready(function () {

    $(window).resize(function () {
        if ($(".navbar-collapse").hasClass("show")) {
          $(".navbar-collapse").removeClass("show");
          $(".navbar-toggler").removeClass("active");
        }
      });

    // animated hamburger icon
    $(".navbar-toggler").on("click", function () {
      $(this).toggleClass("active");
      $("#mainNav").addClass("nav-bg-active");
    });

    // active link
    $(".nav-link").on("click", function () {
      $(".nav-link").removeClass("link-active");
      $(this).addClass("link-active");
    });

    // active link
    $(".dropdown-item").on("click", function () {
      $(".dropdown-item").removeClass("link-active");
      $(this).addClass("link-active");
    });

    // codes for navbar background change
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      if (scroll > 30) {
        $("#mainNav").addClass("nav-bg-active");
      } else {
        $("#mainNav").removeClass("nav-bg-active");
      }
    });

    // registration modal
    $(".registration-popup-link").magnificPopup({
      type: "inline",
      midClick: true,
      mainClass: "mfp-fade",
    });

    $(".registration-tab-btn").click(function () {
      $(".registration-tab").hide();
      $(".registration-tab-btn").removeClass("registration-tab-active");
      $(this).addClass("registration-tab-active");

      var panel = $(this).attr("href");
      $(panel).fadeIn(1000);

      return false; // prevents link action
    }); // end click

    // codes for accordion icon change
    var rotateIcon = $(".accordion-button");
    $(rotateIcon).on("click", function () {
      if ($(this).hasClass("active")) {
        $(this).toggleClass("active");
      } else {
        $(rotateIcon).removeClass("active");
        $(this).addClass("active");
      }
    });

    $(".testimonial-slider-wrapper").owlCarousel({
      loop: true,
      center: true,
      items: 1,
      margin: 30,
      autoplay: true,
      dots: false,
      nav: false,
      autoplayTimeout: 3000,
      smartSpeed: 450,
      stagePadding: 180,
      navText: [
        '<i class="flaticon-left-arrow"></i>',
        '<i class="flaticon-next"></i>',
      ],
      responsive: {
        0: {
          items: 1,
          stagePadding: 0,
        },
        767: {
          items: 1,
          stagePadding: 180,
        },
        992: {
          items: 2,
          stagePadding: 100,
        },
        1200: {
          items: 3,
          stagePadding: 10,
        },
        1400: {
          items: 3,
          stagePadding: 50,
        },
        1600: {
          items: 3,
          stagePadding: 100,
        },
      },
    });

    $(".prev-slide").on("click", function () {
      $(".testimonial-slider-wrapper").trigger("prev.owl.carousel");
    });

    $(".next-slide").on("click", function () {
      $(".testimonial-slider-wrapper").trigger("next.owl.carousel");
    });

    // latest post slider
    $(".latest-post-slider").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 1,
        },
        1000: {
          items: 1,
        },
      },
    });

    // about team carousel
    $(".owl-team-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      center: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      navText: [
        '<i class="flaticon-left-arrow"></i>',
        '<i class="flaticon-next"></i>',
      ],
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 2,
        },
        992: {
          items: 3,
        },
      },
    });

    // predict token slider
    $(".slider-wrapper").owlCarousel({
      loop: true,
      center: true,
      items: 1,
      margin: 30,
      autoplay: true,
      dots: false,
      nav: true,
      autoplayTimeout: 3000,
      smartSpeed: 450,
      stagePadding: 180,
      navText: [
        '<i class="flaticon-left-arrow"></i>',
        '<i class="flaticon-next"></i>',
      ],
      responsive: {
        0: {
          items: 1,
          stagePadding: 10,
        },
        767: {
          items: 1,
          stagePadding: 80,
        },
        992: {
          items: 1,
          stagePadding: 100,
        },

        1200: {
          items: 2,
          stagePadding: 10,
        },
        1400: {
          items: 2,
          stagePadding: 100,
        },
        1600: {
          items: 2,
          stagePadding: 180,
        },
        1800: {
          items: 3,
          stagePadding: 100,
        },
      },
    });

    $(".registration-tab-active").click();

    // codes for country select
    $("#country").niceSelect();

    // contact status

  $(".contact-cta").on("click", function() {
    if($('#contactFullName').val() && $('#contactEmailAddress').val() && $('#company').val() && $('#phoneNumber').val() && $('#contactMessage').val()) {

      $(".contact-status").addClass("contact-status-active");
    };
  });

  $(".close-status").on("click", function() {
    $(".contact-status").removeClass("contact-status-active");
  });

    //codes for coin value single items
    var switchEffect = $(".coin-single-item");
    $(switchEffect).on("mouseenter", function () {
      $(switchEffect).removeClass("coin-effect");
      $(this).addClass("coin-effect");
    });

    // codes for pricing plan selection
    $(".plan-select").niceSelect();

    // codes for pricing plan selection
    $("#coinSelect").niceSelect();

    // codes for invest
    $("#coinSelectt").niceSelect();

    // codes for invest
    // $('#investCalc2').niceSelect();

    // codes for invest
    $("#investCalc").niceSelect();

    $("[value=lt]").css("background-image", "yellow");

    // codes for invest video modal
    $(".video_popup").magnificPopup({
      type: "iframe",
      // other options
      iframe: {
        markup:
          '<div class="mfp-iframe-scaler">' +
          '<div class="mfp-close you-close"></div>' +
          '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
          "</div>",

        patterns: {
          youtube: {
            index: "youtube.com/",

            id: "v=",

            src: "https://www.youtube.com/embed/%id%",
          },
        },

        srcAction: "iframe_src",
      },
    });

    // invest token slider
    $(".boost-slider-wrapper").owlCarousel({
      loop: true,
      center: true,
      items: 1,
      margin: 30,
      autoplay: true,
      dots: false,
      nav: true,
      autoplayTimeout: 3000,
      smartSpeed: 450,
      stagePadding: 180,
      navText: [
        '<i class="flaticon-left-arrow"></i>',
        '<i class="flaticon-next"></i>',
      ],
      responsive: {
        0: {
          items: 1,
          stagePadding: 10,
        },
        767: {
          items: 1,
          stagePadding: 80,
        },
        992: {
          items: 1,
          stagePadding: 100,
        },

        1200: {
          items: 2,
          stagePadding: 10,
        },
        1400: {
          items: 2,
          stagePadding: 100,
        },
        1600: {
          items: 2,
          stagePadding: 180,
        },
        1800: {
          items: 3,
          stagePadding: 100,
        },
      },
    });

    // invest details tab
    $(".invest-tab-btn").click(function () {
      $(".invest-tab-content").hide();
      $(".invest-tab-btn").removeClass("invest-tab-active");
      $(this).addClass("invest-tab-active");

      var canel = $(this).attr("href");
      $(canel).fadeIn(1000);

      return false; // prevents link action
    }); // end click

    // chart table tab
    $(".chart-tab-btn").click(function () {
      $(".chart-tab-content").hide();
      $(".chart-tab-btn").removeClass("chart-tab-btn-active");
      $(this).addClass("chart-tab-btn-active");

      var canel = $(this).attr("href");
      $(canel).fadeIn(1000);

      return false; // prevents link action
    }); // end click

    // subbmit magnific popup
    $(".open-submit-token").magnificPopup({
      type: "inline",
      midClick: true,
      mainClass: "mfp-fade",
    });

    $(".open-submit-token-2").magnificPopup({
        type: "inline",
        midClick: true,
        mainClass: "mfp-fade",
      });

      $(".open-submit-token-3").magnificPopup({
        type: "inline",
        midClick: true,
        mainClass: "mfp-fade",
      });

      $(".open-depot-token").magnificPopup({
        type: "inline",
        midClick: true,
        mainClass: "mfp-fade",
      });

      $(".open-retrait-token").magnificPopup({
        type: "inline",
        midClick: true,
        mainClass: "mfp-fade",
      });

    // custom submit token time
    var countDownDate =
      new Date(
        new Date().getFullYear(),
        new Date().getMonth(),
        new Date().getDate()
      ).getTime() +
      1000 * 60 * 60 * 24 * 400;

    var x = setInterval(function () {
      var now = new Date().getTime();

      var distance = countDownDate - now;

      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
      );
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      var bitPredict = document.getElementById("bit-predict");
      if (bitPredict != null) {
        document.getElementById("bit-predict").innerHTML =
          days + "D : " + hours + "H : " + minutes + "M : " + seconds + "S ";
      }

      if (distance < 0) {
        clearInterval(x);
        document.getElementById("bit-predict").innerHTML = "TIME EXPIRED";
      }
    }, 1000);

    // codes for single predict input value
    $(".single-character").on("input", function () {
      this.value = this.value.replace(/[^0-9]/g, "");
    });
  });
})(jQuery);
