<?php
  
   $blog_author = insut_option('blog_single_author_box',0); 
  
   $user_id = get_the_author_meta( 'ID' );
   $insut_profile_options = get_user_meta( get_the_author_meta( 'ID' ) , 'insut_profile_options', true );
   $social = isset($insut_profile_options['social_share'])?$insut_profile_options['social_share']:'';

?> 
<?php if( $blog_author ): ?>
       <div class="blog-post-author d-block d-sm-flex">
            <div class="thumb">
              <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
            </div>
            <div class="content">
                <h4 class="title"><?php echo get_the_author(); ?></h4>
                <p> <?php echo get_the_author_meta('user_description'); ?> </p>
             
            </div>
        </div>
        
<?php endif; ?>