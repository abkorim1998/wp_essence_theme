<!-- Footer Section Start -->
<?php global $redux_demo ?>
<footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <h3><?php echo $redux_demo['about_title']; ?></h3>
              <div class="textwidget">
                <p><?php echo $redux_demo['about_containt']; ?></p>
              </div>
              <ul class="footer-social">
                <li><a class="facebook" href="<?php echo $redux_demo['facebook']; ?>"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="twitter" href="<?php echo $redux_demo['twitter']; ?>"><i class="lni-twitter-filled"></i></a></li>
                <li><a class="linkedin" href="<?php echo $redux_demo['linkdin']; ?>"><i class="lni-linkedin-fill"></i></a></li>
                <li><a class="google-plus" href="<?php echo $redux_demo['Google+']; ?>"><i class="lni-google-plus"></i></a></li>
              </ul> 
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Short Link</h3>
                <?php 
                  wp_nav_menu(array(
                      'theme_location' => 'footer-menu',
                      'menu_class' => 'menu',
                      'container' => '',
                  )); 
                ?>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Contact Us</h3>
                <ul class="contact-footer">
                  <li>
                    <strong>Address :</strong> <span><?php echo $redux_demo['address']; ?></span>
                  </li>
                  <li>
                    <strong>Phone :</strong> <span><?php echo $redux_demo['phone']; ?></span>
                  </li>
                  <li>
                    <strong>E-mail :</strong> <span><a href="#"><?php echo $redux_demo['email']; ?></a></span>
                  </li>
                </ul> 
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Instagram</h3>
                <ul class="instagram-footer">
                <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/instagram/insta1.jpg" alt=""></a></li>
                  <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/instagram/insta2.jpg" alt=""></a></li>
                  <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/instagram/insta3.jpg" alt=""></a></li>
                  <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/instagram/insta4.jpg" alt=""></a></li>
                  <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/instagram/insta5.jpg" alt=""></a></li>
                  <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/instagram/insta6.jpg" alt=""></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer area End -->
      
      <!-- Copyright Start  -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="site-info float-left">
              <p><?php echo $redux_demo['Copyright']; ?></p>
            </div>              
            <div class="float-right"> 

                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'copyright-area-menu',
                        'menu_class' => 'nav nav-inline',
                        'container' => '',
                        'walker' => new essence_Navwalker()
                    )); 
                ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright End -->

    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>

    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>    

    <?php wp_footer(); ?>
  </body>
</html>