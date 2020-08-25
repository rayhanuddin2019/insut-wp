<?php 

   $copyright_text         = insut_option('copyright_text','Copyright © 2020 All rights reserved.');
   $footer_back_top_button = insut_option('footer_back_top_button',1);
   
?>
        <!-- Footer Start -->
        <?php if( insut_is_footer_widget_active() ): ?> 
            <footer class="footer-01 footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <?php  dynamic_sidebar( 'footer-one' ); ?>
                        </div>
                        <div class="col-lg-8 col-md-12 cus-column">
                            <?php  dynamic_sidebar( 'footer-two' ); ?>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 cus-column-2">
                                    <?php  dynamic_sidebar( 'footer-three' ); ?>
                                </div>
                                <div class="col-lg-6 col-md-6 cus-column-2">
                                    <?php  dynamic_sidebar( 'footer-four' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        <?php endif; ?> 
        <!-- Footer End -->
        
        <!-- Copryrgint Start -->
        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <p> <?php echo insut_kses($copyright_text); ?> </p>
                    </div>
                    <?php if($footer_back_top_button): ?>
                        <div class="col-lg-6 col-md-4">
                            <?php  get_template_part( 'template-parts/footer/back-to-top');  ?>
                        </div>
                   <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- Copryrgint End -->