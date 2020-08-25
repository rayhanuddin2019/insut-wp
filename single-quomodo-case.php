<?php
/**
 * the template for displaying all posts.
 */

   get_header(); 
   get_template_part( 'template-parts/banner/content', 'banner-case-study' );

?>

  <main id="site-content" class="qomodo-main-container blog-single" role="main">
                   <div class="case-details-section">
                      <?php while ( have_posts() ) : the_post(); ?>
                              <article id="post-<?php the_ID(); ?>" <?php post_class(["qomodo-post-content","post-single"]); ?>>
                                <?php get_template_part( 'template-parts/blog/content', 'case-study' ); ?>
                              </article>
                      <?php endwhile; ?>
                  </div> 
  </main> <!--#main-content -->
  
<?php get_footer(); ?>