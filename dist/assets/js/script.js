"use strict";

function _typeof(obj) {
  "@babel/helpers - typeof";
  return (
    (_typeof =
      "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
        ? function(obj) {
            return typeof obj;
          }
        : function(obj) {
            return obj &&
              "function" == typeof Symbol &&
              obj.constructor === Symbol &&
              obj !== Symbol.prototype
              ? "symbol"
              : typeof obj;
          }),
    _typeof(obj)
  );
}

function _defineProperty(obj, key, value) {
  key = _toPropertyKey(key);
  if (key in obj) {
    Object.defineProperty(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true,
    });
  } else {
    obj[key] = value;
  }
  return obj;
}

function _toPropertyKey(arg) {
  var key = _toPrimitive(arg, "string");
  return _typeof(key) === "symbol" ? key : String(key);
}

function _toPrimitive(input, hint) {
  if (_typeof(input) !== "object" || input === null) return input;
  var prim = input[Symbol.toPrimitive];
  if (prim !== undefined) {
    var res = prim.call(input, hint || "default");
    if (_typeof(res) !== "object") return res;
    throw new TypeError("@@toPrimitive must return a primitive value.");
  }
  return (hint === "string" ? String : Number)(input);
}

jQuery(function($) {
  $(".js-hamburger").on("click", function(e) {
    e.preventDefault();
    if ($(".js-hamburger").hasClass("is-open")) {
      $(this).removeClass("is-open");
      $(".js-drawer-menu").removeClass("is-open");
      $(".js-header__inner").removeClass("is-open");
      $("body").css("overscroll-behavior", "");
    } else {
      $(this).addClass("is-open");
      $(".js-drawer-menu").addClass("is-open");
      $(".js-header__inner").addClass("is-open");
      $("body").css("overscroll-behavior", "none");
    }
  });
});

const windowSize = 768;
const mediaQueryList = window.matchMedia(`(min-width: ${windowSize}px)`);

// mediaQueryList.addEventListener("change", (event) => {
//   if (event.matches) {
//     console.log(`${windowSize}pxより大きいです`);
//   } else {
//     console.log(`${windowSize}px以下です`);
//   }
// });

const swiper = new Swiper(".swiper", {
  speed: 800,
  loop: true,
  autoplay: {
    delay: 5000,
  },
});
const swiperCampaign = new Swiper(".swiper-campaign", {
  loop: true,
  slidesPerView: 1.25,
  spaceBetween: 24,
  breakpoints: _defineProperty({
    // when window width is >= 320px
    767: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
  }),
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
        .animate(
          {
            width: "100%",
          },
          switchingSpeed,
          function() {
            imageElement.css("opacity", "1");
            $(this).css({
              left: "0",
              right: "auto",
            });
            $(this).animate(
              {
                width: "0%",
              },
              switchingSpeed
            );
          }
        );
      counter = 1;
    }
  });
});