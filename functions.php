<?php
    include('inc/assets.php');

    function w3arts_theme_setup() {
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'w3arts')
        ));
    }
    add_action('after_setup_theme', 'w3arts_theme_setup');

?>