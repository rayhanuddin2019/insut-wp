
<?php
/**
 * the template for displaying 404 pages (Not Found)
 */

   get_header();


?>
         <?php if(insut_option('error_enable_main_container',0)): ?>
                  <main id="site-content" class="qomodo-main-container blog" role="main">
               <?php  endif; ?>
                           <!-- 404 Section Start -->
                              <section class="section-404" style="background-image: url(<?php echo esc_url(INSUT_IMG); ?>/404.jpg);">
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-lg-5 col-md-8">
                                                <div class="content-404">
                                                   <h2><span> <?php echo esc_html__('Sorry,','insut'); ?> </span> <?php echo esc_html__('This Page Is Not Found.','insut'); ?> </h2>
                                                   <p>
                                                      <?php echo esc_html__('Commodo consequat duis aute irure dolor reprehender
                                                      voluptate velit fugiat nulla pariatur.','insut'); ?>
                                                   </p>
                                                   <a href="<?php echo esc_url(home_url('/')); ?>"><i class="icofont-arrow-left"></i> <?php echo esc_html__('Back to Home' , 'insut'); ?> </a>
                                                </div>
                                          </div>
                                       </div>
                                    </div>
                              </section>  
                           <!-- 404 Section End -->
               <?php if(insut_option('error_enable_main_container',0)): ?>        
                  </main><!-- Main container end -->
         <?php  endif; ?>

         <?php if(insut_option('enable_404_footer',0)): ?>         
            <?php get_footer(); ?>
         <?php else: ?>
           <?php wp_footer(); ?>
         <?php endif; ?>