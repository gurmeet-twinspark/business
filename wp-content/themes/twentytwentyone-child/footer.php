 <div class="container-fluid">
  <div class="container">
     <div class="row">
      
      <div class="swiper-container">
      <div class="swiper-wrapper">
       <?php 
        $loopargs  = array( 'post_type' => 'testimonials', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');

        $query = new WP_Query( $loopargs );
      
        if ( $query->have_posts() ) :
        while($query->have_posts()) : $query->the_post(); ?>
        <div class="swiper-slide">
          <div class= "content">
              <p><?php the_content();?></p>
              <div class ="img">
                <img class="grow-in w-100" src="<?php echo get_the_post_thumbnail_url(); ?>">
              </div>
              <div class="details">
                <h2><?php the_title();?><br><span><?php the_excerpt(); ?></span></h2>
                <?php the_field('client_name') ;?>
                <?php the_field('company'); ?>
              </div>
            </div>
          </div>
             <?php
               endwhile; 
               wp_reset_query();
              endif;?> 
           </div>
      </div>
          </div>
        </div> 
     </div>

     <!-- section accordion -->
     <div class="row">
       <div class="col-md-8 ">
      <?php 
        $args  = array( 'post_type' => 'accordion', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');

        $query = new WP_Query( $args );
        $i=1;
        if ( $query->have_posts() ) :
        while($query->have_posts()) : $query->the_post(); ?>
        <div class="accordion">
          <div class="accordion-item">
            <h2 class="accordion-button"
            data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>"><?php the_title(); ?>
            </h2>
            <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse show" >
              <div class="accordion-body">
                <p><strong> <?php the_content(); ?></strong></p>
                </div>
              </div>
              </div>
            </div>
            <?php
              $i++;
              endwhile; 

              wp_reset_query();
              endif;?> 
          </div>
     </div>

     <!-- section tab -->
    <div class="row">
       <div class="container mt-2">
        <?php 
                $args  = array( 'post_type' => 'tabs', 'posts_per_page' => -1 , 'order'=> 'ASC', 'post_status'  => 'publish');

                $query = new WP_Query( $args );
                $j = 1;
                if ( $query->have_posts() ) :
                while($query->have_posts()) : $query->the_post(); ?>
               <ul class= "nav nav-tabs">
                <li class= "nav-item"><a class= "nav-link "  href="#section<?php echo $j; ?>"><?php the_title(); ?></a></li>
                </ul>

            <div class= "tab-content">
                  <div class= "tab pane " id="section<?php echo $j; ?>">
                    <div class= "row border g-0 rounded shadow-sm">
                      <div class="col p-4">
                        <h3><?php the_title(); ?> </h3>
                        <p><?php the_content(); ?></p>
                      </div>
                      <div class= "col-auto">
                        <img class="grow-in w-100" src="<?php echo get_the_post_thumbnail_url(); ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                 $j++;
                  endwhile; 

                  wp_reset_query();
                  endif; ?>
     </div>
   </div>

   <div class="row"></div>

   <footer id="footer">
      <!-- End Footer Widgets -->
      
      <div class="footer-copyright">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h3 class="section-title wow fadeInUp">Visual</h3>
                  <p class="wow fadeInUp"> All Rights Reserved. Copyright © 2016 
                  <a href="http://templatestock.co" target="_blank">Template Stock</a> 
                  </p>
                  <ul class="social-icons subheading">
                     <li>
                        <a href="#">
                           <i class="icon ion-social-twitter"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-facebook"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-googleplus"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-instagram-outline"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-pinterest"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-skype"></i>
                        </a>
                     </li>
                     <li>
                            <a href="#">
                           <i class="icon ion-social-linkedin"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-dropbox"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-vimeo"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-youtube"></i>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- End Footer Copyright -->
      
   </footer>
   <!-- End Footer 1 -->
   
   <!-- Start Back To Top -->
   <a id="back-to-top">
      <i class="icon ion-chevron-up"></i>
   </a>
   <!-- End Back To Top -->
   

<!-- End Site Wrapper -->
<!-- jQuery -->
<?php wp_footer();?>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/plugins/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/plugins/moderniz.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/plugins/smoothscroll.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/plugins/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/no-ui-slider/jquery.nouislider.all.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/plugins/revslider.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/plugins/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/plugins/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/plugins/parallax.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/plugins/easign1.3.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/plugins/cubeportfolio.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/plugins/owlcarousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/plugins/tweetie.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/plugins/gmap3.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/plugins/wow.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/plugins/counterup.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/scripts.js"></script>

</body>
 <script>
      var swiper = new Swiper(".swiper-container", {
        effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: '2',

      loop: true,
      
      },
    );
  </script>
</html>


