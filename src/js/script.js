jQuery(function($) {
  $(".js-hamburger").on("click", function(e) {
    e.preventDefault();
    if ($(".js-hamburger").hasClass("is-open")) {
      $(this).removeClass("is-open");
      $(".js-drawer-menu").removeClass("is-open");
    } else {
      $(this).addClass("is-open");
      $(".js-drawer-menu").addClass("is-open");
    }
  });
});

const swiper = new Swiper(".swiper", {
  // Optional parameters
  //direction: 'vertical',
  loop: true,
  autoplay: {
    delay: 5000,
  },
});

const swiperCampaign = new Swiper(".swiper-campaign", {
  loop: true,
  slidesPerView: 1.25,
  spaceBetween: 24,
  breakpoints: {
    // when window width is >= 320px
    767: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    // when window width is >= 320px
    767: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
  },
  navigation: {
    nextEl: ".swiper-campaign-button-next",
    prevEl: ".swiper-campaign-button-prev",
  },
});