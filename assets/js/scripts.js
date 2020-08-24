document.addEventListener('DOMContentLoaded', function () {
  const bannerSlide = new Swiper('.banner-slide', {
    autoplay: {
      delay: 5000,
    },
  });

  const abc = new Swiper('.course-slide', {
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
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
    effect: 'coverflow',
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
    const daysSpan = document.querySelector('#days');
    const hoursSpan = document.querySelector('#hours');
    const minutesSpan = document.querySelector('#minutes');
    const secondsSpan = document.querySelector('#seconds');

    function updateClock() {
      const t = getTimeRemaining(endtime);

      if (t.total <= 0) {
        clearInterval(timeinterval);
        const deadline = new Date(Date.parse(new Date()) + 6 * 1000);
        initializeClock('countdown', deadline);
      }

      daysSpan.innerHTML = t.days;
      hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
      minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
      secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
    }

    updateClock();
    const timeinterval = setInterval(updateClock, 1000);
  }

  // 5 days = 432000000 seconds
  var senconds = document.getElementById('timeconlai').getAttribute('value');
  const deadline = new Date(Date.parse(new Date()) + parseInt(senconds) * 1000);
  initializeClock('countdown', deadline);
});

jQuery(document).ready(function ($) {
  $('#form-register').on('submit', function (e) {
    e.preventDefault();

    var $form = $(this);
    var data = jQuery(this).serialize();
    jQuery.ajax({
      action: 'submit_register_course',
      type: 'POST',
      url: '/wp-admin/admin-ajax.php',
      data: data,
      success: function (data) {
        var data = JSON.parse(data);
        if (data.error) {
          alert('Đăng ký thất bại');
        } else {
          alert('Đăng ký thành công');
        }
      },
      fail: function (err) {
        alert('Đăng ký thất bại');
      },
    });
  });
  var currentPage = 1;
  var totalPage = 0;

  function fetchImages(page = 1) {
    jQuery.ajax({
      type: 'GET',
      url: '/wp-json/v1/images/get',
      data: {
        per_page: 6,
        page: page,
      },
      success: function (data, textStatus, request) {
        totalPage = data.total_pages;
        var total = data.total;
        var images = data.data;
        currentPage = data.current_page;
        renderImages(images);
        renderPagination(totalPage);
      },
      fail: function (err) {},
    });
  }

  var rootImage = $('#root-images');

  function renderImages(images) {
    var html = '';
    for (var i = 0; i < images.length; i++) {
      var image = images[i];
      html += `<div class="col-md-6 col-lg-4">
                        <a data-fancybox="gallery" href="${image.thumbnail}">
                            <img class="img-fluid" src="${image.thumbnail}">
                        </a>
                    </div>`;
    }
    rootImage.html(html);
  }

  var rootPagination = $('#root-pagination');

  function renderPagination(numberPage) {
    var previousPage =
      parseInt(currentPage) - 1 <= 0 ? 1 : parseInt(currentPage) - 1;
    var html = `<li class="page-item">
                                    <a class="page-link" value="${previousPage}" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>`;
    for (var i = 1; i <= numberPage; i++) {
      if (i == currentPage) {
        html += `<li class="page-item active">
                                    <p class="page-link">${i}</p>
                                </li>`;
      } else {
        html += ` <li class="page-item"><a class="page-link" value="${i}">${i}</a></li>`;
      }
    }

    var nextPage =
      currentPage < totalPage ? parseInt(currentPage) + 1 : totalPage;
    html += ` <li class="page-item">
                                    <a class="page-link" value="${nextPage}" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>`;
    rootPagination.html(html);
  }

  $('body').on('click', 'a.page-link', function (e) {
    e.preventDefault();
    var page = $(this).attr('value');
    fetchImages(page);
  });

  fetchImages();
});
