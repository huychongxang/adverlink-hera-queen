document.addEventListener("DOMContentLoaded", function () {
  const bannerSlide = new Swiper(".banner-slide", {
    autoplay: {
      delay: 5000,
    },
  });

  const abc = new Swiper(".course-slide", {
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 10000,
    },

    slidesPerView: 2,
    centeredSlides: true,
    paginationClickable: true,
    loop: true,
    spaceBetween: 0,
    slideToClickedSlide: true,
    speed: 500,
    effect: "coverflow",
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      // when window width is >= 640px
      991: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
    },
  });

  // countdown
  function getTimeRemaining(endtime) {
    const t = Date.parse(endtime) - Date.parse(new Date());
    const seconds = Math.floor((t / 1000) % 60);
    const minutes = Math.floor((t / 1000 / 60) % 60);
    const hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    const days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
      total: t,
      days: days,
      hours: hours,
      minutes: minutes,
      seconds: seconds,
    };
  }

  function initializeClock(id, endtime) {
    const daysSpan = document.querySelector("#days");
    const hoursSpan = document.querySelector("#hours");
    const minutesSpan = document.querySelector("#minutes");
    const secondsSpan = document.querySelector("#seconds");

    function updateClock() {
      const t = getTimeRemaining(endtime);

      if (t.total <= 0) {
        clearInterval(timeinterval);
        const deadline = new Date(Date.parse(new Date()) + 6 * 1000);
        initializeClock("countdown", deadline);
      }

      daysSpan.innerHTML = t.days;
      hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
      minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
      secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);
    }

    updateClock();
    const timeinterval = setInterval(updateClock, 1000);
  }
  // 5 days = 432000000 seconds
  const deadline = new Date(Date.parse(new Date()) + 432000000);
  initializeClock("countdown", deadline);
});
