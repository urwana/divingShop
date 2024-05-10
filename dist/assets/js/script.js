"use strict";

function _typeof(obj) {
  "@babel/helpers - typeof";

  return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) {
    return typeof obj;
  } : function (obj) {
    return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
  }, _typeof(obj);
}
function _defineProperty(obj, key, value) {
  key = _toPropertyKey(key);
  if (key in obj) {
    Object.defineProperty(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true
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
jQuery(function ($) {
  // ハンバーガ・ドロワーメニュー
  $(".js-hamburger").on("click", function (e) {
    e.preventDefault();
    if ($(".js-hamburger").hasClass("is-open")) {
      $(this).removeClass("is-open");
      $(".js-drawer-menu").removeClass("is-open");
      $(".header__inner").removeClass("is-open");
      $("body").css("overflow", "scroll");
    } else {
      $(this).addClass("is-open");
      $(".js-drawer-menu").addClass("is-open");
      $(".header__inner").addClass("is-open");
      $("body").css("overflow", "hidden");
    }
  });

  // ドロワーメニュー スマホ横向き対策
  var checkWindowSize = function checkWindowSize() {
    var windowWidth = window.innerWidth;
    if (windowWidth >= 665 && windowWidth <= 1400) {
      // 768pxから1100pxの範囲内の処理
      if ($(".js-drawer-menu").hasClass("is-open")) {
        $(".js-drawer-menu").removeClass("is-open");
      }
      if ($(".header__inner").hasClass("is-open")) {
        $(".header__inner").removeClass("is-open");
      }
      if ($(".js-hamburger").hasClass("is-open")) {
        $(".js-hamburger").removeClass("is-open");
      }
      $("body").css("overflow", "scroll");
    }
  };

  // ウィンドウサイズが変更されたときに実行
  window.addEventListener("resize", checkWindowSize);

  // kv swiper
  var swiper = new Swiper(".swiper", {
    effect: "fade",
    speed: 800,
    loop: true,
    autoplay: {
      delay: 5000
    }
  });

  // キャンペーンセクション swiper
  var swiperCampaign = new Swiper(".js-swiper-campaign", {
    loop: true,
    slidesPerView: "auto",
    spaceBetween: 20,
    centeredSlides: false,
    grabCursor: true,
    keyboard: {
      enabled: true
    },
    breakpoints: {
      769: {
        spaceBetween: 40
      }
    },
    navigation: {
      nextEl: ".swiper-campaign__button-next",
      prevEl: ".swiper-campaign__button-prev"
    }
  });

  // 画像スクリーンアニメーション
  // TODO: gsap で書き換える
  var AllColorAnimationElements = $(".js-colorAnimation");
  var switchingSpeed = 700;
  AllColorAnimationElements.each(function () {
    $(this).append('<div class="color-mask"></div>');
    var colorMask = $(this).find($(".color-mask")),
      imageElement = $(this).find("img");
    var counter = 0;
    imageElement.css("opacity", "0");
    colorMask.css("width", "0%");
    colorMask.on("inview", function () {
      if (counter == 0) {
        $(this).delay(200).animate({
          width: "100%"
        }, switchingSpeed, function () {
          imageElement.css("opacity", "1");
          $(this).css({
            left: "0",
            right: "auto"
          });
          $(this).animate({
            width: "0%"
          }, switchingSpeed);
        });
        counter = 1;
      }
    });
  });
  var documentHeight = Math.max(document.body.scrollHeight, document.documentElement.scrollHeight);
  var keyVisualHeight = $(".key-visual").height();
  var footerHeight = $(".footer").height();
  var scrollTopButton = $(".js-scroll-to-top");
  var viewportHeight = $(window).height();
  var bottomHideHight = documentHeight - footerHeight - viewportHeight;
  $(window).scroll(function () {
    var scrollPosition = $(window).scrollTop();
    if (scrollPosition > keyVisualHeight && scrollPosition < bottomHideHight) {
      scrollTopButton.show();
    } else {
      scrollTopButton.hide();
    }
  });
  $(".js-question").on("click", function () {
    console.log("clicked!!!!!!");
    if ($(this).hasClass("is-open")) {
      $(this).removeClass("is-open");
      var answer = $(this).next(".qa-box__answer");
      answer.fadeOut(500);
    } else {
      $(this).addClass("is-open");
      var _answer = $(this).next(".qa-box__answer");
      _answer.fadeIn(500);
    }
  });
});

// const windowWidth = window.innerWidth;
// const detectDevice = () => {
//   var userAgent = navigator.userAgent.toLowerCase();
//   var isMobile = /iphone|ipod|android.*mobile|windows.*phone|blackberry.*mobile/i.test(
//     userAgent
//   );

//   if (isMobile) {
//     return "sp";
//   } else {
//     return "pc";
//   }
// };
// const device = detectDevice();

var openingImages = document.querySelectorAll(".js-opening > div");
var openingTimeLine = gsap.timeline();
openingTimeLine.to(openingImages, {
  y: 0,
  duration: 1.5,
  stagger: 0.3,
  ease: "power2.inOut"
}).to(openingImages, {
  autoAlpha: 0,
  duration: 0.5,
  ease: "power2.inOut"
}).to(".opening__title-container", {
  autoAlpha: 1,
  duration: 0.5,
  ease: "power2.inOut"
}, "<0.5").to(".js-opening", {
  backgroundColor: "rgba(0, 0, 0, 0)",
  duration: 0.1,
  autoAlpha: 1,
  ease: "power2.inOut"
}).to(".opening__title-container", {
  color: "#ffffff",
  duration: 0.15
}, "<");