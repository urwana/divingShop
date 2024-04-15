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

// TODO: gsap で書き換える
const AllColorAnimationElements = $(".js-colorAnimation");
const switchingSpeed = 700;

AllColorAnimationElements.each(function() {
  $(this).append('<div class="color-mask"></div>');
  const colorMask = $(this).find($(".color-mask")),
    imageElement = $(this).find("img");
  let counter = 0;

  imageElement.css("opacity", "0");
  colorMask.css("width", "0%");
  colorMask.on("inview", function() {
    if (counter == 0) {
      $(this)
        .delay(200)
        .animate({ width: "100%" }, switchingSpeed, function() {
          imageElement.css("opacity", "1");
          $(this).css({ left: "0", right: "auto" });
          $(this).animate({ width: "0%" }, switchingSpeed);
        });
      counter = 1;
    }
  });
});
