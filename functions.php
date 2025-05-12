<?php

function mwm_theme_assets() {
  // Cargar el style.css del tema (obligatorio en WordPress)
  wp_enqueue_style(
    'mwm-style',
    get_stylesheet_uri(),
    [],
    filemtime(get_stylesheet_directory() . '/style.css')
  );

  // Cargar el CSS del header desde /assets/css/header.css
  wp_enqueue_style(
    'mwm-header-style',
    get_template_directory_uri() . '/assets/css/header.css',
    [],
    filemtime(get_template_directory() . '/assets/css/header.css')
  );
  
  // Cargar el CSS para el nav
  wp_enqueue_style(
    'mwm-nav-style',
    get_template_directory_uri() . '/assets/css/nav.css',
    [],
    filemtime(get_template_directory() . '/assets/css/nav.css')
  );

  //Cargar el CSS para footer
  wp_enqueue_style(
    'mwm-footer-style',
    get_template_directory_uri() . '/assets/css/footer.css',
    [],
    filemtime(get_template_directory() . '/assets/css/footer.css')
  );

  //Cargar el CSS para newsletter
  wp_enqueue_style(
    'mwm-newsletter-style',
    get_template_directory_uri() . '/assets/css/newsletter.css',
    [],
    filemtime(get_template_directory() . '/assets/css/newsletter.css')
  );

  //Cargar el CSS para features
  wp_enqueue_style(
    'features-style',
    get_template_directory_uri() . '/assets/css/features.css',
    [],
    filemtime(get_template_directory() . '/assets/css/features.css')
  );

  //Cargar el CSS de page-makeup
    wp_enqueue_style(
      'mwm-makeup-style',
      get_template_directory_uri() . '/assets/css/page-makeup.css',
      [],
      filemtime(get_template_directory() . '/assets/css/page-makeup.css')
    );

  // Cargar el CSS de page-home
    wp_enqueue_style(
      'mwm-home-style',
      get_template_directory_uri() . '/assets/css/page-home.css',
      [],
      filemtime(get_template_directory() . '/assets/css/page-home.css')
    );
}

add_action('wp_enqueue_scripts', 'mwm_theme_assets');

function enqueue_swiper_assets() {
    // Estilos de Swiper
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');

    // Script de Swiper
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);

    // Tu script personalizado (opcionalmente aquí puedes poner la configuración del Swiper)
    wp_enqueue_script('custom-swiper-init', get_template_directory_uri() . '/assets/js/swiper-init.js', array('swiper-js'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');