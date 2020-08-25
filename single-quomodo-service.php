<?php
/**
 * the template for displaying all posts.
 */

   get_header(); 
   get_template_part( 'template-parts/banner/content', 'banner-service' );

?>

<main id="site-content" class="qomodo-main-container blog-single" role="main">
      <div class="service-details-section">
        <?php while ( have_posts() ) : the_post(); ?>
        
                <article id="post-<?php the_ID(); ?>" <?php post_class(["qomodo-post-content","post-single"]); ?>>
                  <?php get_template_part( 'template-parts/blog/content', 'service' ); ?>
                </article>
                
        <?php endwhile; ?>
      </div> 
      <?php get_template_part( 'template-parts/blog/blog-parts/part', 'service-related' ); ?> 
</main> <!--#main-content -->
<?php get_footer(); ?>