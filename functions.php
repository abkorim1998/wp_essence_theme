<?php 

add_action( "after_setup_theme", "essence_setup_theme" );
function essence_setup_theme()
{
    //TITLE & TAG SHOWING
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'main-menu' => 'Main Menu',
        'single-page-menu' => 'Single Page Menu',
        'footer-menu' => 'Footer Menu',
        'copyright-area-menu' => "Copyright Are Menu"
    ) );
    
    //REGISTER POST TYPE FOR Carousel Section
    
    //REGISTER POST TYPE FOR Carousel Section
    register_post_type("essence_carousel", array(
        "labels" => array(
            "menu_name" => "Carousel",
            "name" => "Carousel",
            "all_items" => "All Carousel",
            "add_new" => "Add New Carousel",
            "add_new_item" => "Add New Carousel"
        ),
        "supports" => array("title"),
        'public' => false,  // it's not public, it shouldn't have it's own permalink, and so on
        'publicly_queryable' => true,  // you should be able to query it
        'show_ui' => true,  // you should be able to edit it in wp-admin
        'exclude_from_search' => true,  // you should exclude it from search results
        'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
        'has_archive' => false,  // it shouldn't have archive page
        'rewrite' => false,  // it shouldn't have rewrite rules
        'show_in_menu' => 'my-unique-identifier',

    ));

    //REGISTER POST TYPE FOR SERVESES
    register_post_type("essence_services", array(
        "labels" => array(
            "menu_name" => "Services",
            "name" => "Services",
            "all_items" => "All Services",
            "add_new" => "Add New Service",
            "add_new_item" => "Add New Service"
        ),
        "supports" => array("title", "editor"),
        'public' => false,  // it's not public, it shouldn't have it's own permalink, and so on
        'publicly_queryable' => true,  // you should be able to query it
        'show_ui' => true,  // you should be able to edit it in wp-admin
        'exclude_from_search' => true,  // you should exclude it from search results
        'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
        'has_archive' => false,  // it shouldn't have archive page
        'rewrite' => false,  // it shouldn't have rewrite rules
        'show_in_menu' => 'my-unique-identifier',

    ));

    //REGISTER POST TYPE FOR FEATURES 
    register_post_type("essence_features", array(
        "labels" => array(
            "menu_name" => "Features",
            "name" => "Features",
            "all_items" => "All Features",
            "add_new" => "Add New Feature",
            "add_new_item" => "Add New Feature"
        ),
        "supports" => array("title"),
        'public' => false,  // it's not public, it shouldn't have it's own permalink, and so on
        'publicly_queryable' => true,  // you should be able to query it
        'show_ui' => true,  // you should be able to edit it in wp-admin
        'exclude_from_search' => true,  // you should exclude it from search results
        'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
        'has_archive' => false,  // it shouldn't have archive page
        'rewrite' => false,  // it shouldn't have rewrite rules
        'show_in_menu' => 'my-unique-identifier',

    ));

    //REGISTER POST TYPE FOR PORTFOLIOS
    register_post_type("essence_portfolio", array(
        "labels" => array(
            "menu_name" => "Portfolios",
            "name" => "Portfolios",
            "all_items" => "All Portfolio",
            "add_new" => "Add New Portfolio",
            "add_new_item" => "Add New Portfolio"
        ),
        "public" => true,
        "supports" => array("title", "thumbnail"),
        'show_in_menu' => 'my-unique-identifier',
    ));
    register_taxonomy( "essence_portfolio_taxonomy", "essence_portfolio", array(
        "labels" => array(
            "name" => "Types",
            "menu_name" => "Types",
            "all_items" => "All Types",
            "add_new" => "Add New Types",
            "add_new_item" => "Add New Types"
        ),
        "public" => true,
        "hierarchical" => true,
    ));


    //REGISTER POST TYPE FOR Testimonial
    register_post_type("essence_testimonial", array(
        "labels" => array(
            "menu_name" => "Testimonial",
            "name" => "Testimonial",
            "all_items" => "All Testimonial",
            "add_new" => "Add New Testimonial",
            "add_new_item" => "Add New Testimonial"
        ),
        "public" => true,
        "supports" => array("title"),
        'show_in_menu' => 'my-unique-identifier',
    ));

    //REGISTER POST TYPE FOR Team
    register_post_type("essence_team", array(
        "labels" => array(
            "menu_name" => "Teams",
            "name" => "Teams",
            "all_items" => "All Team Member",
            "add_new" => "Add Team Member",
            "add_new_item" => "Add Team Member",
        ),
        "public" => true,
        "supports" => array("title"),
        'show_in_menu' => 'my-unique-identifier',
        
    ));

    //REGISTER POST TYPE FOR clients
    register_post_type("essence_clients_post", array(
        "labels" => array(
            "menu_name" => "Clients",
            "name" => "Clients",
            "all_items" => "All clients",
            "add_new" => "Add a Client",
            "add_new_item" => "Add a Client",
        ),
        "public" => true,
        "supports" => array("title"),
        'public' => false,  // it's not public, it shouldn't have it's own permalink, and so on
        'publicly_queryable' => true,  // you should be able to query it
        'show_ui' => true,  // you should be able to edit it in wp-admin
        'exclude_from_search' => true,  // you should exclude it from search results
        'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
        'has_archive' => false,  // it shouldn't have archive page
        'rewrite' => false,  // it shouldn't have rewrite rules
        'show_in_menu' => 'my-unique-identifier',
    ));


}


//theme menu

add_action('admin_menu', 'my_plugin_menu');

function my_plugin_menu() {
    add_menu_page('Essence Dashboard', 'Essence', 'read', 'my-unique-identifier', 'my_plugin_function', '', 25);
    
}

function my_plugin_function(){
   echo "<h1>welcome to Essence theme</h1>";
}



//REQUIRE SHORTCODES FILE
if (file_exists(dirname(__FILE__)."/lib/shortcodes/shortcodes.php")) {
    require_once(dirname(__FILE__)."/lib/shortcodes/shortcodes.php");
}

//META BOX
if (file_exists(dirname(__FILE__)."/lib/meta-box/init.php")) {
    require_once(dirname(__FILE__)."/lib/meta-box/init.php");
}
if (file_exists(dirname(__FILE__)."/lib/meta-box/config.php")) {
    require_once(dirname(__FILE__)."/lib/meta-box/config.php");
}
//META BOX ICON
if (file_exists(dirname(__FILE__)."/lib/meta-box/icon/predefined-array-fontawesome.php")) {
    require_once(dirname(__FILE__)."/lib/meta-box/icon/predefined-array-fontawesome.php");
}
if (file_exists(dirname(__FILE__)."/lib/meta-box/icon/iconselect.php")) {
    require_once(dirname(__FILE__)."/lib/meta-box/icon/iconselect.php");
}
//Redux Framework
if (file_exists(dirname(__FILE__)."/lib/theme-option/ReduxCore/framework.php")) {
    require_once(dirname(__FILE__)."/lib/theme-option/ReduxCore/framework.php");
}
if (file_exists(dirname(__FILE__)."/lib/theme-option/sample/config.php")) {
    require_once(dirname(__FILE__)."/lib/theme-option/sample/config.php");
}

//for nev walker
if (file_exists(dirname(__FILE__)."/lib/menu/wp-bootstrap-navwalker.php")) {
    require_once(dirname(__FILE__)."/lib/menu/wp-bootstrap-navwalker.php");
}

//tgm plugin
if (file_exists(dirname(__FILE__)."/lib/plugin/tgm-script/requerd-plugin.php")) {
    require_once(dirname(__FILE__)."/lib/plugin/tgm-script/requerd-plugin.php");
}

//vc map code
if (file_exists(dirname(__FILE__)."/lib/shortcodes/essence-vc-shortcodes.php")) {
    require_once(dirname(__FILE__)."/lib/shortcodes/essence-vc-shortcodes.php");
}


//ENQUEUE SCRIPTS CSS & JS
add_action( 'wp_enqueue_scripts', 'essence_enqueue_scripts' );
function essence_enqueue_scripts()
{   
    //ENQUEUE STYLE 
    wp_enqueue_style("essence_bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css");
    wp_enqueue_style("essence_line_icons", get_template_directory_uri() . "/css/line-icons.css");
    wp_enqueue_style("essence_owl_carousel", get_template_directory_uri() . "/css/owl.carousel.css");
    wp_enqueue_style("essence_owl_theme", get_template_directory_uri() . "/css/owl.theme.css");
    wp_enqueue_style("essence_nivo_lightbox", get_template_directory_uri() . "/css/nivo-lightbox.css");
    wp_enqueue_style("essence_magnific_popup", get_template_directory_uri() . "/css/magnific-popup.css");
    wp_enqueue_style("essence_animate_css", get_template_directory_uri() . "/css/animate.css");
    wp_enqueue_style("essence_color_switcher", get_template_directory_uri() . "/css/color-switcher.css");
    wp_enqueue_style("essence_menu_sideslide", get_template_directory_uri() . "/css/menu_sideslide.css");
    wp_enqueue_style("essence_faws", get_template_directory_uri() . "/lib/meta-box/icon/css/faws/css/font-awesome.min.css");
    wp_enqueue_style("essence_main_css", get_template_directory_uri() . "/css/main.css");
    wp_enqueue_style("essence_responsive_css", get_template_directory_uri() . "/css/responsive.css");
    wp_enqueue_style('comment-reply');

    //ENQUEUE SCRIPT
    wp_enqueue_script("essence_jquery_min", get_template_directory_uri() . "/js/jquery-min.js", array(), '', true);
    wp_enqueue_script("essence_popper_min", get_template_directory_uri() . "/js/popper.min.js", array("jquery"), '', true);
    wp_enqueue_script("essence_bootstrap_min", get_template_directory_uri() . "/js/bootstrap.min.js", array("jquery"), '', true);
    wp_enqueue_script("essence_classie", get_template_directory_uri() . "/js/classie.js", array("jquery"), '', true);
    wp_enqueue_script("essence_color_switcher", get_template_directory_uri() . "/js/color-switcher.js", array("jquery"), '', true);
    wp_enqueue_script("essence_jquery_mixitup", get_template_directory_uri() . "/js/jquery.mixitup.js", array("jquery"), '', true);
    wp_enqueue_script("essence_nivo_lightbox", get_template_directory_uri() . "/js/nivo-lightbox.js", array("jquery"), '', true);
    wp_enqueue_script("essence_owl_carousel", get_template_directory_uri() . "/js/owl.carousel.js", array("jquery"), '', true);
    wp_enqueue_script("essence_jquery_stellar_min", get_template_directory_uri() . "/js/jquery.stellar.min.js", array("jquery"), '', true);
    wp_enqueue_script("essence_jquery_nav", get_template_directory_uri() . "/js/jquery.nav.js", array("jquery"), '', true);
    wp_enqueue_script("essence_scrolling_nav", get_template_directory_uri() . "/js/scrolling-nav.js", array("jquery"), '', true);
    wp_enqueue_script("essence_jquery_easing_min", get_template_directory_uri() . "/js/jquery.easing.min.js", array("jquery"), '', true);
    wp_enqueue_script("essence_wow", get_template_directory_uri() . "/js/wow.js", array("jquery"), '', true);
    wp_enqueue_script("essence_jquery_vide", get_template_directory_uri() . "/js/jquery.vide.js", array("jquery"), '', true);
    wp_enqueue_script("essence_jquery_counterup_min", get_template_directory_uri() . "/js/jquery.counterup.min.js", array("jquery"), '', true);
    wp_enqueue_script("essence_jquery_magnific_popup_min", get_template_directory_uri() . "/js/jquery.magnific-popup.min.js", array("jquery"), '', true);
    wp_enqueue_script("essence_waypoints_min", get_template_directory_uri() . "/js/waypoints.min.js", array("jquery"), '', true);
    wp_enqueue_script("essence_form_validator_min", get_template_directory_uri() . "/js/form-validator.min.js", array("jquery"), '', true);
    wp_enqueue_script("essence_contact_form_script", get_template_directory_uri() . "/js/contact-form-script.js", array("jquery"), '', true);
    wp_enqueue_script("essence_main_js", get_template_directory_uri() . "/js/main.js", array("jquery"), '', true);
    wp_enqueue_script('comment-reply');
}