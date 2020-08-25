
	<?php
	/**
	 * The main template file
	 */

		get_header(); 
		
		get_template_part( 'template-parts/banner/content', 'banner-blog' ); 

		$blog_sidebar    = insut_option('blog_sidebar',3);
		$blog_two_column = insut_option('blog_two_column',0);

		$column  = ($blog_sidebar == 1 || !is_active_sidebar('sidebar-1')) ? 'col-lg-12' : 'col-lg-7';
		global $step;
		$step = true;

	?>

	<main id="site-content" class="qomodo-main-container blog" role="main">
					<div class="container">
						<div class="row">

							<?php

								if($blog_sidebar == 2){
									get_sidebar();
								} 
							
							?>
						<?php if(!$blog_two_column): ?>
								<div class="<?php echo esc_attr($column);?>">
									<?php if ( have_posts() ) : ?>
											<div class="qomodo-page-header">
												<h2>
													<?php printf(esc_html__('Search Results for: %s', 'insut'), get_search_query()); ?>
												</h2>
												
											</div>
												<?php while ( have_posts() ) : the_post(); ?>
													<?php get_template_part( 'template-parts/blog/content', get_post_format() ); ?>
												<?php endwhile; ?>
										
										<?php get_template_part( 'template-parts/blog/paginations/pagination', 'style1' ); ?>
									<?php else : ?>
										<?php get_template_part( 'template-parts/blog/content', 'none' ); ?>
									<?php endif; ?>
								</div><!-- .col-md-8 -->
							<?php else: ?>
								<!-- Multi/2 Column -->
								<div class="<?php echo esc_attr($column);?>">
									<?php if ( have_posts() ) : ?>
												<div class="qomodo-page-header">
													<h2>
														<?php printf(esc_html__('Search Results for: %s', 'insut'), get_search_query()); ?>
													</h2>
													<?php
														// show author bio if exists
														if (get_the_author_meta('description')) {
															echo '<p>' . the_author_meta('description') . '</p>';
														}
													?>
												</div>
												<div class="row justify-content-center">  
													
													<?php while ( have_posts() ) : the_post(); ?>
														<div class="col-lg-6 col-md-6">
																<?php get_template_part( 'template-parts/blog/content', get_post_format() ); ?>
														</div>
													<?php endwhile; ?>
													
												</div>
										<?php get_template_part( 'template-parts/blog/paginations/pagination', 'style1' ); ?>
									<?php else : ?>
										<?php get_template_part( 'template-parts/blog/content', 'none' ); ?>
									<?php endif; ?>
								</div><!-- .col-md-8 -->
							<?php endif; ?>
							<?php 

								if($blog_sidebar == 3){
									get_sidebar();
								}

							?>
							
						</div><!-- .row -->
					</div><!-- .container -->

		
	</main><!-- #main-content -->
	<?php get_footer(); ?>