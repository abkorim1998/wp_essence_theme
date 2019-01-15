<?php






//Main Carousel Section
//<!-- Main Carousel Section -->
add_shortcode("essence_carousel", "carousel_short_code" );
function carousel_short_code()
{  

ob_start() ?>


<div id="carousel-area">
    <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-slider" data-slide-to="1"></li>
        <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
        <?php
            $carousel = new WP_Query(array(
                "post_type" => "essence_carousel",
            ));
            
            while($carousel->have_posts()) : $carousel->the_post();
            
        ?>

        <?php if( get_post_meta( get_the_id(), "_carousel_design", true ) == "design-1" ) : ?>
        <div class="carousel-item">
            <img src="<?php echo get_post_meta( get_the_id(), "_carousel_image", true ); ?>" alt="">
            <div class="carousel-caption text-left">
            <h3 class="wow fadeInRight" data-wow-delay="0.2s"><?php echo get_post_meta( get_the_id(), "_title_up", true ); ?></h1>  
            <h2 class="wow fadeInRight" data-wow-delay="0.4s"><?php the_title(); ?></h2>
            <h4 class="wow fadeInRight" data-wow-delay="0.6s"><?php echo get_post_meta( get_the_id(), "_title_down", true ); ?></h4>
            
            <?php if( get_post_meta( get_the_id(), "_firstbtn_checkbox", true ) == "show" ): ?>
                <a href="<?php echo get_post_meta( get_the_id(), "_button1_url", true ); ?>" class="btn btn-lg btn-common btn-effect wow fadeInRight"  data-wow-delay="0.9s"><?php echo get_post_meta( get_the_id(), "_button1_text", true ); ?></a>
            <?php endif; ?>

            <?php if( get_post_meta( get_the_id(), "_secondbtn_checkbox", true ) == "show" ): ?>
                <a href="<?php echo get_post_meta( get_the_id(), "_button2_url", true ); ?>" class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="1.2s"><?php echo get_post_meta( get_the_id(), "_button2_text", true ); ?></a>
            <?php endif; ?>

            </div>
        </div>
        <?php endif; ?>
        
        <?php if( get_post_meta( get_the_id(), "_carousel_design", true ) == "design-2") : ?>
        <div class="carousel-item">
            <img src="<?php echo get_post_meta( get_the_id(), "_carousel_image", true ); ?>" alt="">
            <div class="carousel-caption text-center">
            <h3 class="wow fadeInDown" data-wow-delay="0.3s"><?php echo get_post_meta( get_the_id(), "_title_up", true ); ?></h3>
            <h2 class="wow bounceIn" data-wow-delay="0.6s"><?php the_title(); ?></h2> 
            <h4 class="wow fadeInUp" data-wow-delay="0.9s"><?php echo get_post_meta( get_the_id(), "_title_down", true ); ?></h4>
            
            <?php if( get_post_meta( get_the_id(), "_firstbtn_checkbox", true ) == "show" ): ?>
                <a href="<?php echo get_post_meta( get_the_id(), "_button1_url", true ); ?>" class="btn btn-lg btn-common btn-effect wow fadeInRight"  data-wow-delay="0.9s"><?php echo get_post_meta( get_the_id(), "_button1_text", true ); ?></a>
            <?php endif; ?>

            <?php if( get_post_meta( get_the_id(), "_secondbtn_checkbox", true ) == "show" ): ?>
                <a href="<?php echo get_post_meta( get_the_id(), "_button2_url", true ); ?>" class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="1.2s"><?php echo get_post_meta( get_the_id(), "_button2_text", true ); ?></a>
            <?php endif; ?>
           
            </div>
        </div>
        <?php endif; ?>

        <?php if( get_post_meta( get_the_id(), "_carousel_design", true ) == "design-3") : ?>
        <div class="carousel-item">
            <img src="<?php echo get_post_meta( get_the_id(), "_carousel_image", true ); ?>" alt="">
            <div class="carousel-caption text-center">
            <h3 class="wow fadeInDown" data-wow-delay="0.3s"><?php echo get_post_meta( get_the_id(), "_title_up", true ); ?></h3>
            <h2 class="wow fadeInRight" data-wow-delay="0.6s"><?php the_title(); ?></h2> 
            <h4 class="wow fadeInUp" data-wow-delay="0.6s"><?php echo get_post_meta( get_the_id(), "_title_down", true ); ?></h4>
            
            <?php if( get_post_meta( get_the_id(), "_firstbtn_checkbox", true ) == "show" ): ?>
                <a href="<?php echo get_post_meta( get_the_id(), "_button1_url", true ); ?>" class="btn btn-lg btn-common btn-effect wow fadeInRight"  data-wow-delay="0.9s"><?php echo get_post_meta( get_the_id(), "_button1_text", true ); ?></a>
            <?php endif; ?>

            <?php if( get_post_meta( get_the_id(), "_secondbtn_checkbox", true ) == "show" ): ?>
                <a href="<?php echo get_post_meta( get_the_id(), "_button2_url", true ); ?>" class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="1.2s"><?php echo get_post_meta( get_the_id(), "_button2_text", true ); ?></a>
            <?php endif; ?>
            
            </div>
        </div>
        <?php endif; ?>

        <?php endwhile; ?>

        </div>
        <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
        <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
        <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
    </div>  

<?php  return ob_get_clean(); }  
// <!-- Main Carousel Section End --> 
//Main Carousel Section End



//SERVICES SHORTCODES
//<!-- Services Section Start -->
add_shortcode("essence_services", "services_short_code" );
function services_short_code($attr, $containt = null )
{  

$attributes = extract( shortcode_atts( array(
    "title" => "Our Services",
    "subtitle" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy",
    "section_bgcolor" => "#fff",
), $attr));    
ob_start() ?>

<section id="services" class="section" style="background:<?php echo $section_bgcolor; ?> !important;">
    <div class="container">
        <div class="section-header">          
            <h2 class="section-title"><?php echo $title; ?></h2>
            <span><?php $word = explode(' ', $title); echo $word[1] ;?></span>
            <p class="section-subtitle"><?php echo $subtitle; ?></p>
        </div>
        <div class="row">

            <?php 
                $services = new WP_Query(array(
                    "post_type" => "essence_services",
                    "posts_per_page" => 6
                ));
                while( $services->have_posts()) : $services->the_post();
            ?>

            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="item-boxes services-item wow fadeInDown" data-wow-delay="<?php echo get_post_meta( get_the_id(), "_box_delay", true ); ?>">
                    <div class="icon <?php echo get_post_meta( get_the_id(), "_icon_color", true ); ?>">
                    <i class="<?php echo get_post_meta( get_the_id(), "_services_icon", true ); ?>"></i>
                    </div>
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
            
            <?php endwhile ?>
            
        </div>
    </div>
</section>
<?php  return ob_get_clean(); }  
// <!--Services Section End -->
//Services Section End 


//Call to Action Start
//<!-- Call to Action Start -->
add_shortcode('call_to_action_1', "essence_call_to_action_function");
function essence_call_to_action_function( $attr, $content = null)
{

    $attributes = extract( shortcode_atts( array(
        "title"         => "Are You Ready To Get Started?",
        "button_text"   => "Purchase Now!",
        "button_url"    => "#",
        "section_bgcolor" => "#f9f9f9",
    ),$attr));


ob_start(); ?>

    <section class="call-action section" style="background:<?php echo $section_bgcolor; ?> !important;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10">
            <div class="cta-trial text-center">
              <h3><?php echo $title; ?></h3>
              <p><?php echo $content; ?></p>
              <a href="<?php echo $button_url; ?>" class="btn btn-common btn-effect"><?php echo $button_text; ?></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
<?php  return ob_get_clean(); }
// <!-- Call to Action End -->
// Call to Action End


// Features Section Start
//<!-- Features Section Start -->
add_shortcode("features", "essence_features_shortcode_fun");
function essence_features_shortcode_fun( $attr, $content = null )
{

$attributes = extract( shortcode_atts( array(
    "title" => "Why Choose Us",
    "subtitle"  => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.",
    "section_bgcolor" => "#fff",
), $attr));
ob_start(); ?>

<section id="features" class="section" style="background:<?php echo $section_bgcolor; ?> !important;">
    <div class="container">

        <div class="section-header">          
          <h2 class="section-title"><?php echo $title ?></h2>
          <span><?php $word = explode(' ', $title); echo $word[0] ;?></span>
          <p class="section-subtitle"><?php echo $subtitle ?></p>
        </div>

        <div class="row">
        <?php 
            $feature = new WP_Query( array(
                "post_type" => "essence_features",
                "posts_per_page"    => 6
            ));

            while($feature->have_posts()) : $feature->the_post();
        ?>
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="<?php echo get_post_meta( get_the_id(), "_feature_icon", true ); ?>"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="<?php echo get_post_meta( get_the_id(), "_feature_icon", true ); ?>"></i></div>
                <h4><?php the_title(); ?></h4>
                <p><?php echo get_post_meta( get_the_id(), "_feature_content", true ); ?></p>
              </div>
            </div>
          </div>
          <!-- End featured -->
        <?php endwhile ?>
        </div>

    </div>
</section>
       

<?php return ob_get_clean();}
//<!-- Features Section End --> 
// Features Section End



//Start Video promo Section
//<!-- Start Video promo Section -->
add_shortcode("video_promo", "video_promo_section_short_fun");
function video_promo_section_short_fun($attr, $content = null)
{

$attributes = extract( shortcode_atts( array(

    "title" => "OUR INTRODUCTORY VIDEO",
    "subtitle" => "Learn more about us, its only 30mins",
    "url"   => "https://www.youtube.com/embed/LSgBpbgTlhw",
    "section_bgimg" => "",


), $attr));

$bg = wp_get_attachment_image_src( $section_bgimg );
// $section_bgimg_df = get_template_directory_uri()."/img/bg/video.jpg";

ob_start();?>

<section class="video-promo section" <?php if(isset($bg[0])) echo 'style="background:url( '. $bg[0] .' ) !important"';  ?>>
    <div class="overlay"></div>
    <div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="video-promo-content text-center">
            <a href="<?php echo $url; ?>" class="video-popup"><i class="lni-film-play"></i></a>
            <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms"><?php echo $title; ?></h2>
            <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms"><?php echo $subtitle; ?></p>
            </div>
        </div>
    </div>
    </div>
</section>

<?php return ob_get_clean(); }
//<!-- End Video Promo Section -->
//End Video Promo Section


//Portfolio Section
//<!-- Portfolio Section -->
add_shortcode("portfolio", "portfolio_section_shortcode_fan");
function portfolio_section_shortcode_fan($attr, $content = null)
{
    $attributes = extract( shortcode_atts(array(
        "section_bgcolor" => "#f9f9f9",
        "title" => "Our Works",
        "subtitle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.",
    ), $attr));

ob_start();?>
<section id="portfolios" class="section" style="background:<?php echo $section_bgcolor; ?> !important;">
    <div class="container">

        <div class="section-header">          
          <h2 class="section-title"><?php echo $title; ?></h2>
          <span><?php $word = explode(' ', $title); echo $word[1] ;?></span>
          <p class="section-subtitle"><?php echo $subtitle; ?></p>
        </div>

        <div class="row">          
          <div class="col-md-12">
            <div class="controls text-center">
                <a class="filter active btn btn-common btn-effect" data-filter="all">All</a>
                <?php $terms = get_terms("essence_portfolio_taxonomy"); foreach($terms as $term): ?>
                <a class="filter btn btn-common btn-effect" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
                <?php endforeach; ?>
            </div>
          </div>
        </div>

        <!-- Portfolio Recent Projects -->
        <div id="portfolio" class="row">
            <?php 
                $portfolio = new WP_Query(array(
                    "post_type" => "essence_portfolio",
                    "posts_per_page" => 6
                ));
                while( $portfolio->have_posts() ) : $portfolio->the_post();
            ?>
            <div class="col-lg-4 col-md-6 col-xs-12 mix <?php 
                $terms = get_the_terms(get_the_id(), "essence_portfolio_taxonomy");
                foreach($terms as $term){echo $term->slug." ";}
            ?> ">
                <div class="portfolio-item">
                <div class="shot-item">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />  
                    <div class="single-content">
                    <div class="fancy-table">
                        <div class="table-cell">
                        <div class="zoom-icon">
                            <a class="lightbox" href="<?php echo get_the_post_thumbnail_url(); ?>"><i class="lni-zoom-in item-icon"></i></a>
                        </div>
                        <a href="<?php the_permalink(); ?>">View Project</a>
                        </div>
                    </div>
                    </div>
                </div>               
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    </section>

<?php return ob_get_clean();}
//<!-- Portfolio Section -->
//Portfolio Section end



//Start Pricing Table Section
//<!-- Start Pricing Table Section -->
add_shortcode("pricing", "essence_pricing_function");
function essence_pricing_function($attr,$content = null){
$attributes = extract( shortcode_atts(array(
    
    //section 
    "section_bgcolor" => "#fff",
    "title" => "Pricing Plans",
    "subtitle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.",

    //pricing box 1
    "fast_pricing_title" => "Starter Plan",
    "fast_pricing_price" => "49$",
    "fast_pricing_1s_list" => "Consectetur adipiscing",
    "fast_pricing_2s_list" => "Nunc luctus nulla et tellus",
    "fast_pricing_3s_list" => "Suspendisse quis metus",
    "fast_pricing_4s_list" => "Vestibul varius fermentum erat",
    "fast_pricing_btn_text" => "Get Plan",
    "fast_pricing_btn_url" => "#",

    //pricing box 2
    "second_pricing_title" => "Popular Plan",
    "second_pricing_price" => "99$",
    "second_pricing_1s_list" => "Consectetur adipiscing",
    "second_pricing_2s_list" => "Nunc luctus nulla et tellus",
    "second_pricing_3s_list" => "Suspendisse quis metus",
    "second_pricing_4s_list" => "Vestibul varius fermentum erat",
    "second_pricing_btn_text" => "Get Plan",
    "second_pricing_btn_url" => "#",

    //pricing box 3
    "third_pricing_title" => "Premium Plan",
    "third_pricing_price" => "199$",
    "third_pricing_1s_list" => "Consectetur adipiscing",
    "third_pricing_2s_list" => "Nunc luctus nulla et tellus",
    "third_pricing_3s_list" => "Suspendisse quis metus",
    "third_pricing_4s_list" => "Vestibul varius fermentum erat",
    "third_pricing_5s_list" => "Suspendisse quis metus",
    "third_pricing_btn_text" => "Get Plan",
    "third_pricing_btn_url" => "#",

), $attr));
ob_start();?>


<!-- Start Pricing Table Section -->
<div id="pricing" class="section pricing-section" style="background:<?php echo $section_bgcolor; ?> !important;">
    <div class="container">
        <div class="section-header">          
            <h2 class="section-title"><?php echo $title; ?></h2>
            <span><?php $word = explode(' ', $title); echo $word[0]; ?></span>
            <p class="section-subtitle"><?php echo $subtitle; ?></p>
        </div>

        <div class="row pricing-tables">
        
            <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table">
                <div class="pricing-details">
                <h2><?php echo $fast_pricing_title; ?></h2>
                <div class="price"><?php echo $fast_pricing_price; ?><span>/mo</span></div>
                <ul>
                    <li><?php echo $fast_pricing_1s_list; ?></li>
                    <li><?php echo $fast_pricing_2s_list; ?></li>
                    <li><?php echo $fast_pricing_3s_list; ?></li>
                    <li><?php echo $fast_pricing_4s_list; ?></li>
                    <li> - </li>
                </ul>
                </div>
                <div class="plan-button">
                <a href="<?php echo $fast_pricing_btn_url; ?>" class="btn btn-common btn-effect"><?php echo $fast_pricing_btn_text; ?></a>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table pricing-big">
                <div class="pricing-details">
                <h2><?php echo $second_pricing_title; ?></h2>
                <div class="price"><?php echo $second_pricing_price; ?><span>/mo</span></div>
                <ul>
                    <li><?php echo $second_pricing_1s_list; ?></li>
                    <li><?php echo $second_pricing_2s_list; ?></li>
                    <li><?php echo $second_pricing_3s_list; ?></li>
                    <li><?php echo $second_pricing_4s_list; ?></li>
                    <li> - </li>
                </ul>
                </div>
                <div class="plan-button">
                <a href="<?php echo $second_pricing_btn_url; ?>" class="btn btn-common btn-effect"><?php echo $second_pricing_btn_text; ?></a>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table">
                <div class="pricing-details">
                <h2><?php echo $third_pricing_title; ?></h2>
                <div class="price"><?php echo $third_pricing_price; ?><span>/mo</span></div>
                <ul>
                    <li><?php echo $third_pricing_1s_list; ?></li>
                    <li><?php echo $third_pricing_2s_list; ?></li>
                    <li><?php echo $third_pricing_3s_list; ?></li>
                    <li><?php echo $third_pricing_4s_list; ?></li>
                    <li><?php echo $third_pricing_5s_list; ?></li>
                </ul>
                </div>
                <div class="plan-button">
                <a href="<?php echo $third_pricing_btn_url; ?>third" class="btn btn-common btn-effect"><?php echo $third_pricing_btn_text; ?></a>
                </div>
            </div>
            </div>

        </div>
    </div>
</div>
<!-- End Pricing Table Section -->

<?php return ob_get_clean();}
// <!-- End Pricing Table Section -->
//End Pricing Table Section




//Counter Section Start
//<!-- Counter Section Start -->
add_shortcode("counter", "essence_counter_shortcode_fun");
function essence_counter_shortcode_fun($attr, $content = null){

$attributes = extract( shortcode_atts(array(
    "section_bgcolor" => "#F97794",
    //first Counter box
    "first_box_icon" => "lni-rocket",
    "first_box_title" => "Faster",
    "first_box_coun" => "100",
    "first_box_sing" => "%",

    //second Counter box
    "second_box_icon" => "lni-coffee-cup",
    "second_box_title" => "Cup of Coffee",
    "second_box_coun" => "700",
    "second_box_sing" => "",

    //third Counter box
    "third_box_icon" => "lni-user",
    "third_box_title" => "Active Clients",
    "third_box_coun" => "10000",
    "third_box_sing" => "+",

    //fourth Counter box
    "fourth_box_icon" => "lni-heart",
    "fourth_box_title" => "Peoples Love",
    "fourth_box_coun" => "1689",
    "fourth_box_sing" => "",

), $attr));

ob_start();?>


<div class="counters section" style="background:<?php echo $section_bgcolor; ?> !important;">
      <div class="container">
        <div class="row"> 
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item"> 
              <div class="icon">
                <i class="<?php echo $first_box_icon; ?>"></i>
              </div>                
              <div class="fact-count">
                <h3><span class="counter"><?php echo $first_box_coun; ?></span><?php echo $first_box_sing; ?></h3>
                <h4><?php echo $first_box_title; ?></h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="<?php echo $second_box_icon; ?>"></i>
              </div>                
              <div class="fact-count">
                <h3><span class="counter"><?php echo $second_box_coun; ?></span><?php echo $second_box_sing; ?></h3>
                <h4><?php echo $second_box_title; ?></h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="<?php echo $third_box_icon; ?>"></i>
              </div>                
              <div class="fact-count">
                <h3><span class="counter"><?php echo $third_box_coun; ?></span><?php echo $third_box_sing; ?></h3>
                <h4><?php echo $third_box_title; ?></h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="<?php echo $fourth_box_icon; ?>"></i>
              </div>                
              <div class="fact-count">
                <h3><span class="counter"><?php echo $fourth_box_coun; ?></span><?php echo $fourth_box_sing; ?></h3>
                <h4><?php echo $fourth_box_title; ?></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   

<?php return ob_get_clean();}
// <!-- Counter Section End -->
// Counter Section End




//Testimonial Section Start
//<!-- Testimonial Section Start -->
add_shortcode("testimonial", "essence_testimonial_shortcode_fun");
function essence_testimonial_shortcode_fun($attr, $content = null){

    $attributes = extract( shortcode_atts(array(
        "section_bgcolor" => "#f9f9f9",
        "post_per_page"   => "6",
    ), $attr)); 

ob_start();?>
<section class="testimonial section" style="background:<?php echo $section_bgcolor; ?> !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="touch-slider owl-carousel">

            <?php
                $testimonial = new WP_Query(array(
                    "post_type" => "essence_testimonial",
                    "posts_per_page" => $post_per_page
                ));

                while($testimonial->have_posts()) : $testimonial->the_post();

            ?>
                <div class="item">
                <div class="testimonial-item">
                    <div class="author">
                    <div class="img-thumb">
                    <img src="<?php echo get_post_meta( get_the_id(), "_Author_image", true); ?>" alt="">
                    </div>
                    <div class="author-info">
                        <h2><a href="<?php the_permalink(); ?>"><?php echo get_post_meta( get_the_id(), "_Author_neme", true); ?></a></h2>
                        <span><?php echo get_post_meta( get_the_id(), "_Author_position", true); ?></span>
                    </div>
                    </div>
                    <div class="content-inner">
                    <p class="description"><?php echo get_post_meta( get_the_id(), "_author_content", true); ?></p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star"></i></span>
                    <span><i class="lni-star"></i></span>
                    </div>
                </div>
                </div>
                
            <?php endwhile; ?>
                
            </div>
            </div>
        </div>
    </div>
</section>
<?php return ob_get_clean();}
// <!-- Testimonial Section End --> 
// <!-- Testimonial Section End -->






//Call To Action2 Section Start
//<!-- Call To Action2 Section Start -->
add_shortcode("call_to_action_2", "essence_call_toaction2_shortcode_fun");
function essence_call_toaction2_shortcode_fun($attr, $content = null){

    $attributes = extract( shortcode_atts(array(
        "title" => "Stil confused? Download a free lite version to get started!",
        "button_text" => "Download",
        "button_url" => "#",
        "section_bgimg" => "",
    ), $attr));

    $bg = wp_get_attachment_image_src( $section_bgimg );

ob_start();?>

<section id="cta" class="section" data-stellar-background-ratio="0.5" <?php if(isset($bg[0])) echo 'style="background:url( '. $bg[0] .' ) !important"';  ?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">            
                <div class="cta-text">
                    <h5><?php echo $title; ?></h5>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 text-right">
                <a href="<?php echo $button_url; ?>" class="btn btn-border"><?php echo $button_text; ?></a>
            </div>
        </div>
    </div>
</section>

<?php return ob_get_clean();}
// <!-- Call To Action2 Section Start -->
// Call To Action2 Section Start


//Team section Start
//<!-- Team section Start -->
add_shortcode("team", "essence_team_member_section_shortcode");
function essence_team_member_section_shortcode($attr, $content = null){

    $attributes = extract( shortcode_atts(array(
        "title" => "Our Team",
        "subtitle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.",
        "section_bgcolor" => "#fff",
        "post_per_page" => "4",
    ), $attr));

ob_start();?>


<section id="team" class="section" style="background:<?php echo $section_bgcolor; ?> !important;">
    <div class="container">
    <div class="section-header">          
        <h2 class="section-title"><?php echo $title; ?></h2>
        <span><?php $word = explode(' ', $title); echo $word[1]; ?></span>
        <p class="section-subtitle"><?php echo $subtitle; ?></p>
    </div>
    <div class="row">
        <?php
            $team = new WP_Query(array(
                "post_type" => "essence_team",
                "posts_per_page" => $post_per_page
            ));
            while ( $team->have_posts()) :  $team->the_post();
           
        ?>
        <div class="col-lg-3 col-md-6 col-xs-12">
        <div class="single-team">
            <img src="<?php echo get_post_meta( get_the_id(), "_team_member_image", true); ?>" alt="">
            <div class="team-details">
            <div class="team-inner">
                <h4 class="team-title"><?php echo get_post_meta( get_the_id(), "_team_member_neme", true); ?></h4>
                <p><?php echo get_post_meta( get_the_id(), "_team_member_profession", true); ?></p>
                <ul class="social-list">
                <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                </ul>
            </div>
            </div>
        </div>
        </div>

        <?php endwhile; ?>
       
    </div>
    </div>
</section>


<?php return ob_get_clean();}
// <!-- Team section End -->
// Team section End






//Subcribe Section Start
//<!-- Subcribe Section Start -->
add_shortcode("subcribe_box", "essence_subcribe_section_shortcode");
function essence_subcribe_section_shortcode($attr, $content = null){

    $attributes = extract( shortcode_atts(array(
        //section
        "section_bgimg" => "",

        //subcribe box
        "subcribe_box_title" => "Subscribe to Newsletter",
        "subcribe_box_subtitle" => "Weekly Freebies and More!",
        

        //first subcribe sub item box
        "first_sub_item_title" => "Weekly Free Learning Materials",
        "first_sub_item_subtitle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, laborum libero beatae obcaecati.",
        "first_sub_item_icon" => "lni-bullhorn",
        
        //second subcribe sub item box
        "second_sub_item_title" => "Free PDF to Get Started",
        "second_sub_item_subtitle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, laborum libero beatae obcaecati.",
        "second_sub_item_icon" => "lni-book",

        //third subcribe sub item box
        "third_sub_item_title" => "10% Instant Discount",
        "third_sub_item_subtitle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, laborum libero beatae obcaecati.",
        "third_sub_item_icon" => "lni-timer",
        
    ), $attr));

    $bg = wp_get_attachment_image_src( $section_bgimg );

ob_start();?>


<div id="subscribe" class="section" <?php if(isset($bg[0])) echo 'style="background:url( '. $bg[0] .' ) !important"';  ?>>
    <div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-5 col-md-12 col-xs-12">
        <div class="subscribe-form">
            <div class="form-wrapper">
            <div class="sub-title text-center">
                <h3><?php echo $subcribe_box_title; ?></h3>
                <p><?php echo $subcribe_box_subtitle; ?></p>
            </div>

            <?php echo do_shortcode($content); ?>

            </div>
        </div>
        </div>
        <div class="col-lg-6 col-md-12 col-xs-12">
        <div class="sub-item-box">
            <div class="icon-box">
            <i class="<?php echo $first_sub_item_icon; ?>"></i>
            </div>
            <div class="text-box">
            <h4><?php echo $first_sub_item_title; ?></h4>
            <p><?php echo $first_sub_item_subtitle; ?></p>
            </div>
        </div>
        <div class="sub-item-box">
            <div class="icon-box">
            <i class="<?php echo $second_sub_item_icon; ?>"></i>
            </div>
            <div class="text-box">
            <h4><?php echo $second_sub_item_title; ?></h4>
            <p><?php echo $second_sub_item_subtitle; ?></p>
            </div>
        </div>
        <div class="sub-item-box">
            <div class="icon-box">
            <i class="<?php echo $third_sub_item_icon; ?>"></i>
            </div>
            <div class="text-box">
            <h4><?php echo $third_sub_item_title; ?></h4>
            <p><?php echo $third_sub_item_subtitle; ?></p>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

<?php return ob_get_clean(); }
// <!-- Subcribe Section End -->
//  Subcribe Section End




// Blog Section
//<!-- Blog Section -->
add_shortcode("blog_section", "essence_blog_section_shortcode");
function essence_blog_section_shortcode($attr, $content = null){

    $attributes = extract( shortcode_atts(array(
        //section
        "title" => "Blogs",
        "subtitle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.",
        "section_bgcolor" => "#fff",
        "post_per_page"   => "3",
        
    ), $attr));

ob_start();?>

<section id="blog" class="section" style="background:<?php echo $section_bgcolor; ?> !important;">
    <!-- Container Starts -->
    <div class="container">
    <div class="section-header">          
        <h2 class="section-title"><?php echo $title; ?></h2>
        <span><?php $word = explode(' ', $title); echo $word[0]; ?></span>
        <p class="section-subtitle"><?php echo $subtitle; ?></p>
    </div>
    <div class="row">

        <?php
            $blog = new WP_Query(array(
                "post_type" => "post",
                "posts_per_page" => $post_per_page
            ));
            while($blog->have_posts()) : $blog->the_post();
        ?>

        <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
        <!-- Blog Item Starts -->
        <div class="blog-item-wrapper">
            <div class="blog-item-img">
            <a href="single-post.html">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </a>                
            </div>
            <div class="blog-item-text"> 
            <div class="date"><i class="lni-calendar"></i><?php echo get_the_date("d F, Y", get_the_id()); ?></div>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="meta-tags">
                <span><a href="#"><i class="lni-eye"></i> 4.5k Views</a></span>
                <span><a href="<?php the_permalink(); ?>"><i class="lni-bubble"></i><?php comments_number(); ?></a></span>
                <span><a href="<?php the_permalink(); ?>"><i class="lni-reply"></i> 332</a></span>
            </div>
            </div>
        </div>
        <!-- Blog Item Wrapper Ends-->
        </div>
        <?php endwhile; ?>

    </div>
    </div>
</section>


<?php return ob_get_clean(); }
// <!-- blog Section End -->
//  blog Section End






// Clients Section
//<!-- Clients Section -->
add_shortcode("clients", "essence_clients_section_shortcode");
function essence_clients_section_shortcode($attr, $content = null){

    $attributes = extract( shortcode_atts(array(
        //section
        "section_bgcolor" => "#f9f9f9",
        "posts_per_page"  => "8"
        
    ), $attr));
    
ob_start();?>


<div id="clients" class="section" style="background:<?php echo $section_bgcolor; ?> !important;">
    <!-- Container Ends -->
    <div class="container">
    <!-- Row and Scroller Wrapper Starts -->
    <div class="row" id="clients-scroller">

    <?php 
        $clients = new WP_Query(array(
            "post_type" => "essence_clients_post",
            "posts_per_page" => $posts_per_page,
        ));
        while($clients->have_posts()) : $clients->the_post();
    ?>
        <div class="client-item-wrapper">
        <img src="<?php echo get_post_meta( get_the_id(), "_clients_image", true ); ?>" alt="">
        </div>

        <?php endwhile; ?>

    </div>
    </div>
</div>
    


<?php return ob_get_clean(); }
// <!-- Client Section End --> 
//  Client Section End 





// Contact Section Start
//<!-- Contact Section Start -->
add_shortcode("contact_section", "essence_contact_section_shortcode");
function essence_contact_section_shortcode($attr, $content = null){

    $attributes = extract( shortcode_atts(array(
        //section
        "title" => "Get In Touch",
        "subtitle" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.",
        "section_bgcolor" => "#fff",

        // first contact info
        "first_info_box_icon" => "lni-map",
        "first_info_box_title" => "Location",
        "first_info_box_subtitle" => "1900 Pico Blvd, New York br Centernial, colorado",

        // second contact info
        "second_info_box_icon" => "lni-star",
        "second_info_box_title" => "E-mail",
        "second_info_box_subtitle" => "info@example.com",

        // third contact info
        "third_info_box_icon" => "lni-phone",
        "third_info_box_title" => "Phone",
        "third_info_box_subtitle" => "+48 123 456 789",
        
    ), $attr));

ob_start();?>



<section id="contact" class="section" style="background:<?php echo $section_bgcolor; ?> !important;">      
    <div class="contact-form">
    <div class="container">
        <div class="section-header">          
        <h2 class="section-title"><?php echo $title; ?></h2>
        <span><?php $word = explode(' ', $title); echo $word[0]; ?></span>
        <p class="section-subtitle"><?php echo $subtitle; ?></p>
        </div>
        <div class="row">          
        <div class="col-lg-9 col-md-9 col-xs-12">
            <div class="contact-block">

                <?php echo do_shortcode($content); ?>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-12">
            <div class="contact-deatils">
                <!-- Content Info -->
                <div class="contact-info_area">
                <div class="contact-info">
                <i class="<?php echo $first_info_box_icon; ?>"></i>
                <h5><?php echo $first_info_box_title; ?></h5>
                <p><?php echo $first_info_box_subtitle; ?></p>
                </div>
                <!-- Content Info -->
                <div class="contact-info">
                <i class="<?php echo $second_info_box_icon; ?>"></i>
                <h5><?php echo $second_info_box_title; ?></h5>
                <p><?php echo $second_info_box_subtitle; ?></p>
                </div>
                <!-- Content Info -->
                <div class="contact-info">
                <i class="<?php echo $third_info_box_icon; ?>"></i>
                <h5><?php echo $third_info_box_title; ?></h5>
                <p><?php echo $third_info_box_subtitle; ?></p>
                </div>
                <!-- Icon -->
                <ul class="footer-social">
                    <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                    <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>            
</section>



<?php return ob_get_clean(); }
// <!-- Contact Section End -->
//  Contact Section End



//  Map Section Start
// <!-- Map Section Start -->
add_shortcode("map", "essence_map_section_shortcode");
function essence_map_section_shortcode($attr, $content = null){

    $attributes = extract( shortcode_atts(array(
        //section
        "url" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34015.943594576835!2d-106.43242624069771!3d31.677719472407432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75d90e99d597b%3A0x6cd3eb9a9fcd23f1!2sCourtyard+by+Marriott+Ciudad+Juarez!5e0!3m2!1sen!2sbd!4v1533791187584",
       
    ), $attr));

ob_start();?>

 <section id="google-map-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 padding-0">
            <object style="border:0; height: 450px; width: 100%;" data="<?php echo $url; ?>"></object>
            </div>
        </div>
    </div>
</section>

<?php return ob_get_clean(); }
// <!-- Map Section End -->
//  Map Section End
