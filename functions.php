<?php

$SiteUrl="Banksite.com";
$SiteName="Banksite";

function bank_scripts() {

wp_enqueue_style('style', get_stylesheet_uri()); // get root style.css

/* -- Vendor CSS -- */

wp_enqueue_style('customcss', get_stylesheet_directory_uri() . '/css/core.css' );
wp_enqueue_style('customcss', get_stylesheet_directory_uri() . '/css/custom.css' );
wp_enqueue_style('colorcore', get_stylesheet_directory_uri() . '/css/color/color-core.css' );
wp_enqueue_style('responsivecss', get_stylesheet_directory_uri() . '/css/responsive.css' );
wp_enqueue_style('nivoslider', get_stylesheet_directory_uri() . '/vendor/fontawesome-free/css/all.min.css' );
wp_enqueue_style('bootstrapsubas', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/vendor/animate/animate.min.css' );
wp_enqueue_style('simpleline', get_stylesheet_directory_uri() . '/vendor/simple-line-icons/css/simple-line-icons.min.css' );
wp_enqueue_style('carousel', get_stylesheet_directory_uri() . '/vendor/owl.carousel/assets/owl.carousel.min.css' );
wp_enqueue_style('owltheme', get_stylesheet_directory_uri() . '/vendor/owl.carousel/assets/owl.theme.default.min.css' );
wp_enqueue_style('magnificpopup', get_stylesheet_directory_uri() . '/vendor/magnific-popup/magnific-popup.min.css' );

/* -- Theme CSS --*/
wp_enqueue_style('themecss', get_stylesheet_directory_uri() . '/css/theme.css' );
wp_enqueue_style('themeelements', get_stylesheet_directory_uri() . '/css/theme-elements.css' );
wp_enqueue_style('themeblog', get_stylesheet_directory_uri() . '/css/theme-blog.css' );
wp_enqueue_style('themeshop', get_stylesheet_directory_uri() . '/css/theme-shop.css' );

/*-- Current Page CSS -- */
wp_enqueue_style('settings', get_stylesheet_directory_uri() . '/vendor/rs-plugin/css/settings.css' );
wp_enqueue_style('layers', get_stylesheet_directory_uri() . '/vendor/rs-plugin/css/layers.css' );
wp_enqueue_style('navigation', get_stylesheet_directory_uri() . '/vendor/rs-plugin/css/navigation.css' );
wp_enqueue_style('component', get_stylesheet_directory_uri() . '/vendor/circle-flip-slideshow/css/component.css' );

/* -- Skin CSS -- */
wp_enqueue_style('default', get_stylesheet_directory_uri() . '/css/skins/default.css' );

/* -- Theme Custom CSS -- */
wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/css/custom.css' );

//-- Demo CSS (put css dependency here for elemnets used)--
  wp_enqueue_style('demoeducationcss', get_stylesheet_directory_uri() . '/css/demos/demo-education.css' );

//<!-- Head Libs -->

// wp_enqueue_script('jquery');

wp_enqueue_script('jquerysubas', get_stylesheet_directory_uri() . '/js/vendor/jquery-3.1.1.min.js', array('jquery'), '', true );

wp_enqueue_script('modernizerporto', get_stylesheet_directory_uri() . '/vendor/modernizr/modernizr.min.js', array('jquery'), '', true );

// <!-- Vendor -->

wp_enqueue_script('jquerymin', get_stylesheet_directory_uri() . '/vendor/jquery/jquery.min.js', array(''), '', true );
wp_enqueue_script('jappear', get_stylesheet_directory_uri() . '/vendor/jquery.appear/jquery.appear.min.js', array('jquery'), '', true );
wp_enqueue_script('jeasing', get_stylesheet_directory_uri() . '/vendor/jquery.easing/jquery.easing.min.js', array('jquery'), '', true );
wp_enqueue_script('jcookie', get_stylesheet_directory_uri() . '/vendor/jquery.cookie/jquery.cookie.min.js', array('jquery'), '', true );
wp_enqueue_script('jpopper', get_stylesheet_directory_uri() . '/vendor/popper/umd/popper.min.js', array('jquery'), '', true );
wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), '', true );
wp_enqueue_script('commonjs', get_stylesheet_directory_uri() . '/vendor/common/common.min.js', array('jquery'), '', true );
wp_enqueue_script('validatejs', get_stylesheet_directory_uri() . '/vendor/jquery.validation/jquery.validate.min.js', array('jquery'), '', true );
wp_enqueue_script('easypiechart', get_stylesheet_directory_uri() . '/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js', array('jquery'), '', true );
wp_enqueue_script('gmap', get_stylesheet_directory_uri() . '/vendor/jquery.gmap/jquery.gmap.min.js', array(''), '4.1', true );
wp_enqueue_script('lazyload', get_stylesheet_directory_uri() . '/vendor/jquery.lazyload/jquery.lazyload.min.js', array('jquery'), '', true );
wp_enqueue_script('jisotope', get_stylesheet_directory_uri() . '/vendor/isotope/jquery.isotope.min.js', array('jquery'), '', true );
wp_enqueue_script('owlcarousel', get_stylesheet_directory_uri() . '/vendor/owl.carousel/owl.carousel.min.js', array('jquery'), '', true );
wp_enqueue_script('magnificpopup', get_stylesheet_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), '', true );
wp_enqueue_script('videjs', get_stylesheet_directory_uri() . '/vendor/vide/jquery.vide.min.js', array('jquery'), '', true );
wp_enqueue_script('vivusjs', get_stylesheet_directory_uri() . '/vendor/vivus/vivus.min.js', array('jquery'), '', true );


// <!-- Theme Base, Components and Settings -->
wp_enqueue_script('themejs', get_stylesheet_directory_uri() . '/js/theme.js', array('jquery'), '', true );

//<!-- Current Page Vendor and Views -->
wp_enqueue_script('toolsjs', get_stylesheet_directory_uri() . '/vendor/rs-plugin/js/jquery.themepunch.tools.min.js', array('jquery'), '', true );
wp_enqueue_script('revolution', get_stylesheet_directory_uri() . '/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquery'), '', true );
wp_enqueue_script('flipshow', get_stylesheet_directory_uri() . '/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js', array('jquery'), '', true );
wp_enqueue_script('viewhome', get_stylesheet_directory_uri() . '/js/views/view.home.js', array('jquery'), '4.1', true );

//<!-- Theme Custom -->
wp_enqueue_script('customjs', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), '4.1', true );

//<!-- Theme Initialization Files -->
wp_enqueue_script('themeinitjs', get_stylesheet_directory_uri() . '/js/theme.init.js', array('jquery'), '', true );

// Subas Js //



wp_enqueue_script('bootstrapsubas', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
wp_enqueue_script('nivo', get_stylesheet_directory_uri() . '/lib/js/jquery.nivo.slider.js', array('jquery'), '', true );
wp_enqueue_script('pluginsjs', get_stylesheet_directory_uri() . '/js/plugins.js', array('jquery'), '', true );
wp_enqueue_script('mainjs', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '', true );
wp_enqueue_script('modernizersubas', get_stylesheet_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array('jquery'), '', true );
}

add_action('wp_enqueue_scripts', 'bank_scripts' );


// Add Menus

function BankSite_menus() {
    register_nav_menus(array(
      'header-menu' => __('Header Menu', 'BankSite')
    ) );
}

add_action('init', 'BankSite_menus');


?>
