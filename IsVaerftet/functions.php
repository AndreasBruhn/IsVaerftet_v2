<?php
// why we are using get_template_directory_uri() (FOR SEO) -> READ: https://stackoverflow.com/questions/53800008/which-one-is-better-from-get-template-directory-uri-vs-get-theme-file-uri-and-wh




//! JavaScript & CSS files
function isvaerftet_files()
{
 //! CSS, FONTS ETC..
 wp_enqueue_style('normalize', '//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css'); // loading Normalize CDN for resets
 wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Sansita:wght@400;700&display=swap'); // loading our fonts from Google Fonts 
 wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.15.3/css/all.css'); // loading Font Awesome CDN for icons
 wp_enqueue_style('swiper-css', '//unpkg.com/swiper@7/swiper-bundle.min.css'); // loading Swiper.js CDN for styling
 wp_enqueue_style('animate-css', '//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'); // loading animate.css CDN for styling

 //! Main.css file
 wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
 wp_enqueue_style('main');

 //! Blobz -> https://toruskit.com/tools/blobz/
 wp_enqueue_style('isvaerftet_blobMin_styles', get_template_directory_uri() . '/css/blobz.min.css'); 

 //! Bootstrap CSS
 wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), false, 'all');
 wp_enqueue_style('bootstrap');

 //! AOS
 wp_register_style('aos-css', get_template_directory_uri() . '/css/aos.css', array(), false, 'all');
 wp_enqueue_style('aos-css');

  //! Glightbox CSS
 wp_register_style('glightbox-css', get_template_directory_uri() . '/css/glightbox/glightbox.min.css', array(), false, 'all');
 wp_enqueue_style('glightbox-css');
 wp_register_style('glightbox1-css', get_template_directory_uri() . '/css/glightbox/glightbox.css', array(), false, 'all');
 wp_enqueue_style('glightbox1-css');

 //! JAVASCRIPT FILES
 //! Glightbox CSS -> https://biati-digital.github.io/glightbox/
 wp_register_script('glightbox-js', get_template_directory_uri() . '/js/glightbox/glightbox.min.js', array(), false, true);
 wp_enqueue_script('glightbox-js');
 
 wp_register_script('glightbox1-js', get_template_directory_uri() . '/js/glightbox/glightbox.js', array(), false, true);
 wp_enqueue_script('glightbox1-js');
 
 //! AOS CDN -> https://michalsnik.github.io/aos/
 wp_register_script('aos', get_template_directory_uri() . '/js/animation/aos.js', array(), false, true);
 wp_enqueue_script('aos');

 //! Main js
 wp_register_script('main-js', get_template_directory_uri() . '/js/script.js', array(), false, true);
 wp_enqueue_script('main-js');

//! Swiper CDN -> https://swiperjs.com/
wp_register_script('swiper-cdn', '//unpkg.com/swiper/swiper-bundle.min.js', array(), false, true);
wp_enqueue_script('swiper-cdn');
 

 wp_register_script('specialiteter', get_template_directory_uri() . '/js/animation/specialiteter.js', array(), false, true);
 wp_enqueue_script('specialiteter');


 //! Bootstrap & jQuery dependency -> https://getbootstrap.com/
 wp_enqueue_script('jquery');

 wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js', 'jquery', false, true);
 wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'isvaerftet_files');



//! Theme Options
function isvaerftet_features()
{
 add_theme_support('title-tag'); // dynamically gets the title tag for each page and displays it in browser tab
 add_theme_support('menus'); // adds the option to pick navigation menus in admin dashboard
}
add_action('after_setup_theme', 'isvaerftet_features');

//! Remove default WordPress editor
// To avoid any confusing for the user, we've removed the default editor so it is only the created Custom Fields 
// that can be edited.
function remove_editor() {
    remove_post_type_support('page', 'editor');
  }
  add_action('admin_init', 'remove_editor');

//! Menus
// adds the option for the user of the admin to select where the menus should be displayed
register_nav_menus(array(
 'top-menu' => 'Top Menu Location',
 'footer-menu' => 'Footer Menu Location',
));





