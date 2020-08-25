<?php 

   $copyright_text         = insut_option('copyright_text','Copyright © 2020 All rights reserved.');
   $footer_back_top_button = insut_option('footer_back_top_button',1);

   $logo              = INSUT_IMG . '/logo2.png';
   $insut_logo_url    = insut_option( 'copyright_logo', $logo );
   
   
?>
        <!-- Footer Start -->
        <footer class="footer-02 footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-bg-wrap">
                            <div class="row">
                                <div class="col-lg-3 col-md-5">
                                   <?php  dynamic_sidebar( 'footer-one' ); ?>
                                </div>
                                <div class="col-lg-5 col-md-7">
                                    <?php  dynamic_sidebar( 'footer-two' ); ?>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <?php  dynamic_sidebar( 'footer-three' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- Copryrgint Start -->
        <section class="copyright-02">
            
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-md-5">
                        <p> <?php echo insut_kses($copyright_text); ?>  </p>
                    </div>

                    <?php if(insut_option('enable_footer_logo',1)): ?>
                        <div class="col-lg-2 col-md-3 noPadding">
                            <!-- Logo -->
                            <div class="cory-logo">
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <img src="<?php echo esc_url($insut_logo_url); ?>" alt="<?php echo esc_attr__( 'Copyright Logo', 'insut' ) ?>">
                                </a>
                            </div>
                            <!-- Logo -->
                        </div>
                    <?php endif; ?>
                    <?php

                        $footer_menu = insut_footer_menu();
                        if($footer_menu):
                        $count = count($footer_menu);
                     
                    ?>

                    <div class="col-lg-5 col-md-4">

                        <ul class="site-link">
                            <?php foreach($footer_menu as $key => $menu_item): ?>
                                
                               <li>
                                   <a href="<?php echo esc_url($menu_item->url); ?>"> <?php echo esc_html($menu_item->title); ?> </a>
                                    <?php if(++$key != $count): ?>
                                    -
                                    <?php endif; ?>
                                </li>

                            <?php endforeach; ?> 
                        </ul>  

                    </div>
                    <?php endif; ?>  
                </div>
            </div>
        </section>
        <!-- Copryrgint End -->