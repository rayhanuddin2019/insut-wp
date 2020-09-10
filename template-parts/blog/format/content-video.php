

    <div class="single-blog-post <?php echo esc_attr(is_sticky()?'sticky':''); ?>">
        <?php if(has_post_thumbnail()): ?>
            <div class="sbp-thumb">
                    <img class="img-fluid" src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt=" <?php the_title(); ?>">
                 <div class="sbp-icon">
                 <?php 
                     $image_icon = insut_meta_option(get_the_id(),'image_icon');
                   ?>
                   <?php if( $image_icon == '' ):  ?> 
                        <i class="insut-Icon11"><span class="path3"></span></i>
                    <?php else: ?>
                        <i class="<?php echo esc_attr($image_icon); ?>"><span class="path3"></span></i>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="sbp-details clearfix <?php echo esc_attr(!has_post_thumbnail()?'border-top':''); ?>">
            <?php insut_post_meta() ?> 
            <?php insut_social_share() ?> 
           
            <h3 class="sbp-title">
               <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <p>
                 <?php insut_excerpt( insut_option('blog_excerpt_word',30), null ); ?>
            </p>
                <?php 
                      if( !is_single() && insut_option('blog_readmore',1) == true ):

                          printf('<div class="qomodo-post-footer readmore-btn-area"><a class="read-more" href="%1$s">%2$s <i class="icofont-arrow-right"></i></a></div>',
                          get_the_permalink(),
                          insut_option('blog_readmore_text','Read More')
                          );

                      endif; 
                ?>

        </div>
    </div>