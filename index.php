<?php get_header() ;?>

<section id="features" class="section">
<div class="container">
     
<?php if ( have_posts() ) :

    while ( have_posts() ) : the_post(); ?>

    
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    <a href="<?php the_permalink(); ?>"><h3> <?php  the_title(); ?> </h3></a>
    <p><?php   the_content(); ?></p>
    <?php  echo "<hr>"; ?>
 
    

   

<?php 
   endwhile;

endif;
?>
</div>
</section>
<?php get_footer(); ?>