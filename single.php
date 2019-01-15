<?php  get_header(); ?>



<header class="hero-area">
    <nav class="navbar navbar-expand-md fixed-top scrolling-navbar mainmenu-area">
        <div class="container">
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo $redux_demo['theme_logo']['url'] ; ?>" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="lni-menu"></i>
            </button>

            <?php 
            //   wp_nav_menu(array(
            //       'theme_location' => 'single_page_menu',
            //       'menu_class' => 'navbar-nav mr-auto w-100 justify-content-end',
            //       'container_class' => 'collapse navbar-collapse',
            //       'container_id' => 'navbarCollapse',
            //       'walker' => new essence_Navwalker()
                  
            //   )); 
            ?>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_home_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php the_permalink(); ?>">Single Blog</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <div class="container">
        <?php 
            while(have_posts()) : the_post();
        ?>
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <div class="contents text-center">
                    <h2 class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"><?php the_title(); ?></h2>
                    <div class="post-meta">
                        <ul>
                            <li><i class="lni-calendar"></i> <a href="<?php the_permalink(); ?>"><?php echo get_the_date("d F Y", get_the_id()); ?></a></li>
                            <li><i class="lni-user"></i> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></li>
                            <li><i class="lni-bubble"></i> <a href="<?php the_permalink(); ?>"><?php comments_number(); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</header>

<div id="blog-single">
    <div class="container">
        <?php 
            while(have_posts()) : the_post();
        ?>
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <div class="blog-post">
                    <div class="post-thumb">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </div>
                    <div class="post-content">
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
        </div>



        <?php
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>

       
        <?php endwhile; ?> 


    </div>
</div>



<?php  get_footer(); ?>