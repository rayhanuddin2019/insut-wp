<?php 

  if( ! insut_option('footer_call_to_action',0) ){
     return;
  }

  $allowed_page = insut_footer_cta_allowed_pages(insut_option('footer_call_to_action_permited_pages'));

  if( ! $allowed_page ){
     return;
  }
  
  

  $footer_call_to_action_left_image = insut_option('footer_call_to_action_left_image');
  $call_to_action_icon              = insut_option('footer_call_to_action_icon');
  $button_title                     = insut_option('footer_call_to_action_button_title');
  $button_link                      = insut_option('footer_call_to_action_button_link');
  $button_icon                      = insut_option('footer_call_to_action_button_icon');
  $contact_title                    = insut_option('footer_call_to_action_contact_title');
  $contact_value                    = insut_option('footer_call_to_action_contact_value');
  $title                            = insut_option('footer_call_to_action_title');
  $title                            = str_replace(['{', '}'], ['<span>', '</span>'], $title );

 ?>    
    <!-- Call To Action Start -->
    <section class="call-section-3 cta-color">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 noPadding">
                        <div class="calltoaction-area">
                            <div class="row">
                                <div class="col-lg-6 noPaddingRight">
                                    <img src=" <?php echo esc_url($footer_call_to_action_left_image); ?> " alt="<?php echo esc_attr__( 'Call To Action', 'insut' ) ?>">
                                </div>
                                <div class="col-lg-6">
                                    <div class="cta-content">
                                        <h3>
                                            <?php echo insut_kses($title); ?>
                                        </h3>
                                        <div class="call-info">
                                            <a href="<?php echo esc_url($button_link); ?>" class="insut-btn">
                                            <?php if( $button_icon == ''): ?>
                                                <i class="insut-Logo"> <span class="path3"></span> </i>
                                            <?php else: ?>
                                                <i class="<?php echo esc_attr($button_icon); ?>"> <span class="path3"></span> </i>
                                            <?php endif; ?>
                                                
                                            <?php echo esc_html($button_title); ?>
                                            </a>
                                            <h5><span><?php echo esc_html($contact_title); ?></span>
                                             <?php echo esc_html($contact_value); ?>
                                            
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Middle Icon -->
                            <div class="find-icon">
                                 <?php if($call_to_action_icon == ''): ?>
                                    <i class="insut-Icon14"></i>
                                 <?php else: ?>
                                    <i class="<?php echo esc_attr($call_to_action_icon); ?>"></i>
                                 <?php endif; ?>
                               
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action End -->