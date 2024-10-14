(function ($) {
  "use strict";

  // function will be executed when page fully loaded
  $(document).ready(function () {
    // countdown timer start
    class Countdown {
      constructor(timer, countdown, from, to) {
        this.timer = timer;
        this.countdown = countdown;
        this.start = from;
        this.finish = to;

        this.run();
      }

      run() {
        let distance = this.finish - this.start,
          days,
          hours,
          minutes,
          seconds,
          percent;

        let countdown = setInterval((_) => {
          let point = new Date().getTime() - this.start,
            localDistance = this.finish - new Date().getTime();

          days = Math.max(0, Math.floor(localDistance / (1000 * 60 * 60 * 24)));
          hours = Math.max(
            0,
            Math.floor(
              (localDistance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            )
          );
          minutes = Math.max(
            0,
            Math.floor((localDistance % (1000 * 60 * 60)) / (1000 * 60))
          );
          seconds = Math.max(
            0,
            Math.floor((localDistance % (1000 * 60)) / 1000)
          );

          percent = (point * 100) / distance;

          if (percent >= 99) clearInterval(countdown);

          this.countdown.children[0].innerText = days;
          this.countdown.children[1].innerText =
            hours < 10 ? "0" + hours : hours;
          this.countdown.children[2].innerText =
            minutes < 10 ? "0" + minutes : minutes;
          this.countdown.children[3].innerText =
            seconds < 10 ? "0" + seconds : seconds;

          this.timer.querySelector(
            ".timer-line > span"
          ).style.width = `${percent}%`;
        }, 1000);
      }
    }

    var bit = $("#btc");
    if (bit.length) {
      new Countdown(
        document.getElementById("btc"),
        document.getElementById("btc").previousElementSibling,
        new Date(
          new Date().getFullYear(),
          new Date().getMonth(),
          new Date().getDate()
        ).getTime(),
        new Date(
          new Date().getFullYear(),
          new Date().getMonth(),
          new Date().getDate()
        ).getTime() +
          1000 * 60 * 60 * 24 * 400
      );
    }

    var bina = $("#binance-coin");
    if (bina.length) {
      new Countdown(
        document.getElementById("binance-coin"),
        document.getElementById("binance-coin").previousElementSibling,
        new Date(
          new Date().getFullYear(),
          new Date().getMonth(),
          new Date().getDate()
        ).getTime(),
        new Date(
          new Date().getFullYear(),
          new Date().getMonth(),
          new Date().getDate()
        ).getTime() +
          1000 * 60 * 60 * 24 * 443
      );
    }

    var dogc = $("#doge-coin");
    if (dogc.length) {
      new Countdown(
        document.getElementById("doge-coin"),
        document.getElementById("doge-coin").previousElementSibling,
        new Date(
          new Date().getFullYear(),
          new Date().getMonth(),
          new Date().getDate()
        ).getTime(),
        new Date(
          new Date().getFullYear(),
          new Date().getMonth(),
          new Date().getDate()
        ).getTime() +
          1000 * 60 * 60 * 24 * 123
      );
    }

    var eth = $("#ethereum");
    if (eth.length) {
      new Countdown(
        document.getElementById("ethereum"),
        document.getElementById("ethereum").previousElementSibling,
        new Date(
          new Date().getFullYear(),
          new Date().getMonth(),
          new Date().getDate()
        ).getTime(),
        new Date(
          new Date().getFullYear(),
          new Date().getMonth(),
          new Date().getDate()
        ).getTime() +
          1000 * 60 * 60 * 24 * 235
      );
    }

    var chl = $("#chain-link");
    if (chl.length) {
      new Countdown(
        document.getElementById("chain-link"),
        document.getElementById("chain-link").previousElementSibling,
        new Date(
          new Date().getFullYear(),
          new Date().getMonth(),
          new Date().getDate()
        ).getTime(),
        new Date(
          new Date().getFullYear(),
          new Date().getMonth(),
          new Date().getDate()
        ).getTime() +
          1000 * 60 * 60 * 24 * 233
      );
    }

    var ltc = $("#lite-coin");
    if (ltc.length) {
      new Countdown(
        document.getElementById("lite-coin"),
        document.getElementById("lite-coin").previousElementSibling,
        new Date(
          new Date().getFullYear(),
          new Date().getMonth(),
          new Date().getDate()
        ).getTime(),
        new Date(
          new Date().getFullYear(),
          new Date().getMonth(),
          new Date().getDate()
        ).getTime() +
          1000 * 60 * 60 * 24 * 345
      );
    }

    var rpl = $("#ripple");
    if (rpl.length) {
      new Countdown(
        document.getElementById("ripple"),
        document.getElementById("ripple").previousElementSibling,
        new Date(
          new Date().getFullYear(),
          new Date().getMonth(),
          new Date().getDate()
        ).getTime(),
        new Date(
          new Date().getFullYear(),
          new Date().getMonth(),
          new Date().getDate()
        ).getTime() +
          1000 * 60 * 60 * 24 * 234
      );
    }

    var bitc = $("#bitcoin-cash");
    if (bitc.length) {
      new Countdown(
        document.getElementById("bitcoin-cash"),
        document.getElementById("bitcoin-cash").previousElementSibling,
        new Date(
          new Date().getFullYear(),
          new Date().getMonth(),
          new Date().getDate()
        ).getTime(),
        new Date(
          new Date().getFullYear(),
          new Date().getMonth(),
          new Date().getDate()
        ).getTime() +
          1000 * 60 * 60 * 24 * 143
      );
    }
  });
})(jQuery);
