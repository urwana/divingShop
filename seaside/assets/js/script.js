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
    },
    on: {
      init: function init() {
        var firstSlide = document.querySelector(".swiper-slide-active img");
        gsap.fromTo(firstSlide, {
          scale: 1.2
        }, {
          scale: 1,
          duration: 20,
          ease: "power2.out",
          onComplete: function onComplete() {
            gsap.set(firstSlide, {
              scale: 1.2
            });
          }
        });
      },
      slideChangeTransitionStart: function slideChangeTransitionStart() {
        var activeSlide = document.querySelector(".swiper-slide-active img");
        gsap.set(activeSlide, {
          scale: 1.2
        });
        gsap.to(activeSlide, {
          scale: 1,
          duration: 12,
          ease: "power2.out",
          onComplete: function onComplete() {
            gsap.set(activeSlide, {
              scale: 1.2
            });
          }
        });
      }
    }
  });

  // キャンペーンセクション swiper
  var swipertour = new Swiper(".js-swiper-tour", {
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
      nextEl: ".swiper-tour__button-next",
      prevEl: ".swiper-tour__button-prev"
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

  // スクロールトップボタン
  var documentHeight = Math.max(document.body.scrollHeight, document.documentElement.scrollHeight);
  var keyVisualHeight = $(".js-key-visual").height();
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

  // FAQ qabox
  $(".js-question").on("click", function () {
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

  // modal
  var targetPhoto = $(".js-modalPhoto");
  var modal = $(".js-modal");
  var overlay = $(".js-modalOverlay");
  var modalContents = $(".js-modalContents");
  targetPhoto.on("click", function () {
    modal.fadeIn(400);
    modalContents.html($(this).prop("outerHTML"));
    // スクロール位置を戻す
    $("html, body").css("overflow", "hidden");
  });
  overlay.on("click", function () {
    modal.fadeOut(400);
    $("html, body").css("overflow", "visible");
  });

  // information tab
  var informationTab = $(".js-information");
  var informationContent = $(".js-information-content");
  var iconPath = get_template_directory_uri.templateUrl + "/assets/images/common/whale-icon.svg";
  var iconWhitePath = get_template_directory_uri.templateUrl + "/assets/images/common/whale-icon-w.svg";
  var pageLoadTabAction = function pageLoadTabAction() {
    var hash = window.location.hash;
    if (hash) {
      if (hash == "#licence") {
        tabAction($(".js-information").eq(0));
      } else if (hash == "#fun") {
        tabAction($(".js-information").eq(1));
      } else if (hash == "#trial") {
        tabAction($(".js-information").eq(2));
      }
    }
  };
  var tabAction = function tabAction(targetTab) {
    targetTab.addClass("current").siblings().removeClass("current");
    var tabIndex = $(targetTab).index();
    informationContent.stop(true, true).slideUp(300).eq(tabIndex).stop(true, true).slideDown(300);
    var infoElements = document.querySelectorAll(".js-information");
    infoElements.forEach(function (infoElement) {
      var imgElement = infoElement.querySelector("img");
      imgElement.src = iconPath;
      if ($(infoElement).hasClass("current")) {
        imgElement.src = iconWhitePath;
      }
    });
  };
  var tabHoverAction = function tabHoverAction(targetTab, eventType) {
    if (targetTab.hasClass("current")) return;
    var imgElement = targetTab.find("img");
    if (eventType === "mouseover") {
      imgElement.attr("src", iconWhitePath);
    } else if (eventType === "mouseout") {
      imgElement.attr("src", iconPath);
    }
  };
  informationTab.on("click", function () {
    tabAction($(this));
  });
  informationTab.on("mouseover mouseout", function () {
    tabHoverAction($(this), event.type);
  });
  document.addEventListener("DOMContentLoaded", pageLoadTabAction());

  // tour button
  var contactButton = $(".js-contact-button");
  contactButton.on("click", function (e) {
    e.preventDefault();
    window.location.href = "/seaside/contact";
  });

  // year month day toggle
  var yearArrows = $(".js-yearLabel");
  var dataToggle = function dataToggle(self) {
    if (self.hasClass("open")) {
      self.removeClass("open");
      self.siblings().hide(500);
    } else {
      self.addClass("open");
      self.siblings().show(500);
    }
  };
  yearArrows.on("click", function (e) {
    e.preventDefault();
    dataToggle($(this));
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

// オープニングアニメーション
var useGsap = $("body").hasClass("js-gsap");
if (useGsap) {
  var openingImages = document.querySelectorAll(".js-opening > figure");
  var openingTimeLine = gsap.timeline();
  openingTimeLine.to(openingImages, {
    y: 0,
    duration: 2,
    stagger: 0.3,
    ease: "power2.inOut"
  }).to(openingImages, {
    autoAlpha: 0,
    duration: 1.5,
    ease: "power2.inOut"
  }).to(".opening__title-container", {
    autoAlpha: 1,
    duration: 1,
    ease: "power2.inOut"
  }, "<0.5").to(".js-opening", {
    backgroundColor: "rgba(0, 0, 0, 0)",
    duration: 1,
    autoAlpha: 1,
    ease: "power2.inOut"
  }).to(".opening__title-container", {
    color: "#ffffff",
    duration: 0.5
  }, "<");
}