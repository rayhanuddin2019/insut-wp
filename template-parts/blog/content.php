
<?php $format = get_post_format(); ?>

<article <?php post_class(); ?>>
   <?php get_template_part( 'template-parts/blog/format/content', $format ); ?>       
</article>