<?php
/**
 * the template for displaying all posts.
 */

   get_header(); 
   get_template_part( 'template-parts/banner/content', 'banner-blog' );
   $blog_sidebar    = insut_option('blog_sidebar',1);
   $blog_two_column = insut_option('blog_two_column',0);
 
   $column  = ($blog_sidebar == 1 || !is_active_sidebar('sidebar-1')) ? 'col-lg-12' : 'col-lg-8';
  
?>

<main id="site-content" class="qomodo-main-container blog-single" role="main">
    <div class="container">
        <div class="row">
              <?php

								if($blog_sidebar == 2){
									get_sidebar();
								} 
							
              ?>
              
                    <div class="<?php echo esc_attr($column);?>">
                       <div class="single-blog-section">
                          <?php while ( have_posts() ) : the_post(); ?>
                                  <article id="post-<?php the_ID(); ?>" <?php post_class(["qomodo-post-content","post-single"]); ?>>
                                    <?php get_template_part( 'template-parts/blog/content', 'single' ); ?>
                                  </article>
                                  <?php
                                    get_template_part( 'template-parts/blog/blog-parts/part', 'author' );
                                    insut_post_nav();
                                    comments_template(); 
                                    insut_set_postview();
                                    
                                  ?>
                          <?php endwhile; ?>
                    </div> <!-- .col-md-8 -->
                </div> <!-- blog section -->
              <?php 

								if($blog_sidebar == 3){
									get_sidebar();
								}

							?>
         </div> <!-- .row -->
    </div> <!-- .container -->
</main> <!--#main-content -->
<?php get_footer(); ?>