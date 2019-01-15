<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Essence - Bootstrap 4 Template</title>

    <?php wp_head(); 
    global $redux_demo;
    ?>
  </head>
  
<body <?php body_class() ?> >

<!-- Header Section Start -->
<header id="slider-area">  
<nav class="<?php if(!is_single()) echo 'navbar navbar-expand-md fixed-top scrolling-navbar'?> bg-white">
    <div class="container">
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo $redux_demo['theme_logo']['url'] ; ?>" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
        </button>

            <?php 
              wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'menu_class' => 'navbar-nav mr-auto w-100 justify-content-end',
                  'container_class' => 'collapse navbar-collapse',
                  'container_id' => 'navbarCollapse',
                  'walker' => new essence_Navwalker()
                  
              )); 
            ?>

    </div>
</nav>         
</header>