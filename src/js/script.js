"use strict";

function _typeof(obj) {
  "@babel/helpers - typeof";
  return (
    (_typeof =
      "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
        ? function (obj) {
            return typeof obj;
          }
        : function (obj) {
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
  const checkWindowSize = () => {
    const windowWidth = window.innerWidth;
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
  const swiper = new Swiper(".swiper", {
    effect: "fade",
    speed: 800,
    loop: true,
    autoplay: {
      delay: 5000,
    },
    on: {
      init: function () {
        const firstSlide = document.querySelector(".swiper-slide-active img");
        gsap.fromTo(
          firstSlide,
          { scale: 1.2 },
          {
            scale: 1,
            duration: 20,
            ease: "power2.out",
            onComplete: function () {
              gsap.set(firstSlide, { scale: 1.2 });
            },
          }
        );
      },
      slideChangeTransitionStart: function () {
        const activeSlide = document.querySelector(".swiper-slide-active img");
        gsap.set(activeSlide, { scale: 1.2 });
        gsap.to(activeSlide, {
          scale: 1,
          duration: 12,
          ease: "power2.out",
          onComplete: function () {
            gsap.set(activeSlide, { scale: 1.2 });
          },
        });
      },
    },
  });

  // キャンペーンセクション swiper
  const swipertour = new Swiper(".js-swiper-tour", {
    loop: true,
    slidesPerView: "auto",
    spaceBetween: 20,
    centeredSlides: false,
    grabCursor: true,
    keyboard: {
      enabled: true,
    },
    breakpoints: {
      769: {
        spaceBetween: 40,
      },
    },
    navigation: {
      nextEl: ".swiper-tour__button-next",
      prevEl: ".swiper-tour__button-prev",
    },
  });

  // 画像スクリーンアニメーション
  // TODO: gsap で書き換える
  const AllColorAnimationElements = $(".js-colorAnimation");
  const switchingSpeed = 700;
  AllColorAnimationElements.each(function () {
    $(this).append('<div class="color-mask"></div>');
    const colorMask = $(this).find($(".color-mask")),
      imageElement = $(this).find("img");
    let counter = 0;
    imageElement.css("opacity", "0");
    colorMask.css("width", "0%");
    colorMask.on("inview", function () {
      if (counter == 0) {
        $(this)
          .delay(200)
          .animate(
            {
              width: "100%",
            },
            switchingSpeed,
            function () {
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

  // スクロールトップボタン
  const documentHeight = Math.max(
    document.body.scrollHeight,
    document.documentElement.scrollHeight
  );
  const keyVisualHeight = $(".js-key-visual").height();
  const footerHeight = $(".footer").height();
  const scrollTopButton = $(".js-scroll-to-top");
  const viewportHeight = $(window).height();

  const bottomHideHight = documentHeight - footerHeight - viewportHeight;
  $(window).scroll(function () {
    const scrollPosition = $(window).scrollTop();
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
      const answer = $(this).next(".qa-box__answer");
      answer.fadeOut(500);
    } else {
      $(this).addClass("is-open");
      const answer = $(this).next(".qa-box__answer");
      answer.fadeIn(500);
    }
  });

  // modal
  const targetPhoto = $(".js-modalPhoto");
  const modal = $(".js-modal");
  const overlay = $(".js-modalOverlay");
  const modalContents = $(".js-modalContents");
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
  const informationTab = $(".js-information");
  const informationContent = $(".js-information-content");
  const iconPath =
    get_template_directory_uri.templateUrl +
    "/assets/images/common/whale-icon.svg";
  const iconWhitePath =
    get_template_directory_uri.templateUrl +
    "/assets/images/common/whale-icon-w.svg";

  const pageLoadTabAction = function () {
    const hash = window.location.hash;
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

  const tabAction = function (targetTab) {
    targetTab.addClass("current").siblings().removeClass("current");
    const tabIndex = $(targetTab).index();
    informationContent
      .stop(true, true)
      .slideUp(300)
      .eq(tabIndex)
      .stop(true, true)
      .slideDown(300);
    const infoElements = document.querySelectorAll(".js-information");
    infoElements.forEach((infoElement) => {
      const imgElement = infoElement.querySelector("img");
      imgElement.src = iconPath;
      if ($(infoElement).hasClass("current")) {
        imgElement.src = iconWhitePath;
      }
    });
  };

  const tabHoverAction = function (targetTab, eventType) {
    if (targetTab.hasClass("current")) return;
    const imgElement = targetTab.find("img");
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
  const contactButton = $(".js-contact-button");

  contactButton.on("click", function (e) {
    e.preventDefault();
    window.location.href = "/seaside/contact";
  });

  // year month day toggle
  const yearArrows = $(".js-yearLabel");

  const dataToggle = function (self) {
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
const useGsap = $("body").hasClass("js-gsap");
if (useGsap) {
  const openingImages = document.querySelectorAll(".js-opening > figure");
  const openingTimeLine = gsap.timeline();
  openingTimeLine
    .to(openingImages, {
      y: 0,
      duration: 2,
      stagger: 0.3,
      ease: "power2.inOut",
    })
    .to(openingImages, {
      autoAlpha: 0,
      duration: 1.5,
      ease: "power2.inOut",
    })
    .to(
      ".opening__title-container",
      {
        autoAlpha: 1,
        duration: 1,
        ease: "power2.inOut",
      },
      "<0.5"
    )
    .to(".js-opening", {
      backgroundColor: "rgba(0, 0, 0, 0)",
      duration: 1,
      autoAlpha: 1,
      ease: "power2.inOut",
    })
    .to(
      ".opening__title-container",
      {
        color: "#ffffff",
        duration: 0.5,
      },
      "<"
    );
}
