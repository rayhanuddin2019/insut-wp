
<?php
   // related post 
   if( !insut_option( 'service_related_post',0 ) ){
     return;
   }

   $related_service = insut_related_posts_by_service_cat(get_the_id());
   $service_icon    = insut_option('service_related_post_icon',0);
   
   if(!is_array($related_service) || count($related_service) ==0){
      return;
   }

?>
 
     <!-- Related Service Start -->
     <div class="related-service-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <h3 class="relative-title"> <?php echo esc_html__('Related Services:','insut'); ?> </h3>
                        <!-- Service Relative Slider Start -->
                        <div class="relative-slider owl-carousel">
                            <!-- Service Item Start -->
                            <?php foreach($related_service as $service) : ?>
                            <div class="single-service-box text-center">
                                <div class="service-img">
                                <?php if(has_post_thumbnail($service)): ?>
                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url($service, 'full')); ?>" alt="<?php the_title_attribute($service); ?>">
                                <?php endif; ?> 
                                    <div class="ser-post-icon">

                                        <?php
   
                                          $title_icon  = insut_meta_option( $service->ID ,'title_icon','','insut_service_options'); 
                                          
                                        ?>
                                      
                                        <?php if( $service_icon && $title_icon !='' ):  ?>
                                        
                                            <i class="<?php echo esc_attr($title_icon); ?>"></i>
                                        <?php else: ?>
                                            <i class="flaticon-wifi-router"></i>
                                        <?php endif; ?>
                                     
                                    </div>
                                    
                                </div>
                                <?php
                                   $service_title = str_replace(['{','}'],['',''],get_the_title($service));
                                   
                                ?>
                                <h4><a href="<?php echo esc_url(get_the_permalink($service)); ?>"> <?php echo esc_html($service_title); ?> </a></h4>
                                <a class="read-more" href="<?php echo esc_url(get_the_permalink($service)); ?>"> <?php echo esc_html__('Details','insut'); ?> <i class="icofont-arrow-right"></i> </a>
                            </div>
                            <?php endforeach; ?>
                            <!-- Service Item End -->
     
                        </div>
                        <!-- Service Relative Slider End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Related Service End -->