<?php

function andgo_theme_scripts() {
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), null, true);
    wp_enqueue_script('jquery-3', get_template_directory_uri() . '/assets/js/jquery-3.0.0.min.js', array('jquery'), null, true);
    wp_enqueue_script('mCustomScrollbar', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-validate', get_template_directory_uri() . '/assets/js/jquery.validate.js', array('jquery'), null, true);
    wp_enqueue_script('modernizer', get_template_directory_uri() . '/assets/js/modernizer.js', array(), null, true);
    wp_enqueue_script('plugin', get_template_directory_uri() . '/assets/js/plugin.js', array('jquery'), null, true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), null, true);
    wp_enqueue_script('slider-setting', get_template_directory_uri() . '/assets/js/slider-setting.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true); 
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'andgo_theme_scripts');

function andgo_theme_styles() {
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css');
    wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css'); 
    wp_enqueue_style('bootstrap-reboot', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css'); 
    wp_enqueue_style('default-skin', get_template_directory_uri() . '/assets/css/default-skin.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('icomoon', get_template_directory_uri() . '/assets/css/icomoon.css');
    wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css');
    wp_enqueue_style('mCustomScrollbar', get_template_directory_uri() . '/assets/css/jquery.mCustomScrollbar.min.css');
    wp_enqueue_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css');
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css'); 
}

add_action('wp_enqueue_scripts', 'andgo_theme_styles');

?>
