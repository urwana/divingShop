<?php
function enqueue_scripts_and_styles()
{
  wp_deregister_script('jquery');
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP&display=swap', [], null);
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], null);
  wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css', [], null);
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', [], null, true);
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null, true);
  wp_enqueue_script('jquery-inview', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', ['jquery'], null, true);
  wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', [], null, true);
  wp_enqueue_script('gsap-custom-ease', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/CustomEase.min.js', ['gsap'], null, true);
  wp_enqueue_script('gsap-scroll-trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', ['gsap'], null, true);
  wp_enqueue_script('gsap-scroll-to-plugin', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js', ['gsap'], null, true);
  wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], null, true);
  $template_directory_uri = array(
    'templateUrl' => get_template_directory_uri(),
  );
  wp_localize_script('custom-script', 'get_template_directory_uri', $template_directory_uri);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts_and_styles');