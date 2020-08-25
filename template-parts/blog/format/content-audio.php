
      <?php $audio_link = insut_meta_option(get_the_ID(),'feature_audio'); ?>
  
      <div class="single-blog-post <?php echo esc_attr(is_sticky()?'sticky':''); ?>">
          <div class="sbp-details clearfix">
              <?php insut_post_meta() ?> 
              <?php insut_social_share() ?> 
            
              <h3 class="sbp-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <?php if($audio_link!=''): ?>
                  <div class="blog-audio">
                    <?php echo wp_oembed_get($audio_link); ?>
                  </div>
              <?php endif; ?>
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