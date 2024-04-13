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