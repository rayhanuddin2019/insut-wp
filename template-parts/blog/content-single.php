

    <!-- Single Blog Start -->
  
        <div class="post-details-area">
            <?php if ( has_post_thumbnail() && !post_password_required() ) : ?>
            <?php  $image_icon = insut_meta_option(get_the_id(),'image_icon'); ?>
                <div class="post-d-thumb">
                    <img src="<?php echo get_the_post_thumbnail_url(null,'full'); ?>" alt=" <?php the_title_attribute(); ?>">
                    <div class="sbp-icon">
                        <?php if( $image_icon == '' ):  ?> 
                            <i class="insut-Icon11"> <span class="path3"></span> </i>
                        <?php else: ?>
                            <i class="<?php echo esc_attr($image_icon); ?>"> <span class="path3"></span> </i>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="content-area clearfix">
                <?php insut_post_meta() ?> 
                <?php insut_social_share() ?> 
                <h3 class="sbp-title">
                    <?php the_title(); ?>
                </h3>
                <?php
                    if ( is_search() ) {
                        the_excerpt();
                        } else {
                            the_content( esc_html__( 'Continue reading &rarr;', 'insut' ) );
                            insut_link_pages();
                    }
                ?>
                
                <?php get_template_part( 'template-parts/blog/blog-parts/part', 'tags' ); ?>

                <?php  if ( is_user_logged_in() && is_single() ) { ?>
                        <p style="float:left;">
                            <?php
                                edit_post_link( 
                                esc_html__( 'Edit', 'insut' ), 
                                '<span class="meta-edit">', 
                                '</span>'
                                );
                            ?>
                        </p>
                <?php } ?>
            </div>
        </div>

    <!-- Single Blog End -->
  
    