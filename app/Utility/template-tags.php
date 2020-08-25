<?php

if ( ! function_exists( 'insut_post_thumbnail' ) ) :
	
	function insut_post_thumbnail() {

		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) : ?>

			<div class="post-thumbnail post_img">
				<?php the_post_thumbnail(); ?>
			</div>

		<?php else : ?>

		<a class="post-thumbnail post_img" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
				the_post_thumbnail( 'post-thumbnail', array(
					'alt' => the_title_attribute( array(
						'echo' => false,
					) ),
				) );
			?>
		</a>

		<?php
		endif; 
	}
endif;

if ( ! function_exists( 'insut_return' ) ) :

  function insut_return($arg){
 
   return $arg;
  }

endif;


// display meta information for a specific post
// ----------------------------------------------------------------------------------------
if ( !function_exists('insut_get_breadcrumbs') ) {
   
	function insut_get_breadcrumbs( $seperator = '/', $word = '' ) {

		$general_breadcrumb_limit = insut_option('general_breadcrumb_limit');
		
        
		if($general_breadcrumb_limit > 0){
			$word = $general_breadcrumb_limit;
		}
		
		
		if ( !is_home() ) {

			echo '<i class="fa fa-home"></i> <a href="';
			   echo esc_url( get_home_url( '/' ) );
			echo '">';
		
			echo esc_html__( 'Home', 'insut' );
			echo "</a>".'&nbsp;'.wp_kses_post( $seperator ).'&nbsp;';

			if ( is_category() || is_single() ) {
			
				if(is_single()){
					$category = get_the_category();
					if(empty($category) || is_array($category)){
						$category = get_the_category(get_queried_object_id());
					}
		            
				}else{

					$category = get_category( get_query_var( 'cat' ) );

				} 
				if( is_array($category) && isset($category[0]) ) {
					echo ' <a href='.get_category_link($category[0]->term_id). '>';
				}else{
					if(isset($category->term_id)){
						echo ' <a href='.get_category_link($category->term_id). '>';	
					}
					
				}
				
				
				$post		 = get_queried_object();
				
				$postType	 = get_post_type_object( get_post_type( $post ) );

				if( !empty( $category ) ) {
					if(is_array($category)){

						echo esc_html( $category[0]->cat_name ) . '</a>';

					}else{
						
						echo esc_html( $category->cat_name ) . '</a> ';
					}
					

				} elseif( $postType ) {

					echo esc_html( $postType->labels->singular_name ) . '</a>';

				}
				
				if( is_single() ) {

                     $filter_title = str_replace(['{', '}'], ['', ''], get_the_title());
                  	echo '&nbsp;'. wp_kses_post( $seperator ).'&nbsp;';
				    	echo esc_html( $word ) != '' ? wp_trim_words( $filter_title, $word ) : $filter_title;
					
					
				}
				
			} elseif( is_page() ) {

				
				  echo esc_html( $word ) != '' ? wp_trim_words( get_the_title(), $word ) : get_the_title();
				

			}
		}
		if ( is_tag() ) {

			
			  single_tag_title();
			

		} elseif ( is_day() ) {

			echo esc_html__( 'Blogs for', 'insut' ) . " ";
		    	the_time( 'F jS, Y' );
			

		} elseif ( is_month() ) {

			echo esc_html__( 'Blogs for', 'insut' ) . " ";
			   the_time( 'F, Y' );
			

		} elseif ( is_year() ) {

			echo esc_html__( 'Blogs for', 'insut' ) . " ";
			   the_time( 'Y' );
			

		} elseif ( is_author() ) {

			echo esc_html__( 'Author Blogs', 'insut' );
			

		} elseif ( isset( $_GET[ 'paged' ] ) && !empty( $_GET[ 'paged' ] ) ) {

			echo  esc_html__( 'Blogs', 'insut' );
		

		} elseif ( is_search() ) {

			echo esc_html__( 'Search Result', 'insut' );
			

		} elseif ( is_404() ) {

			echo esc_html__( '404 Not Found', 'insut' );
			

		}
		
	
	}

}

// wp_body_open() backword compatibility
if ( ! function_exists( 'wp_body_open' ) ) :
	
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}

endif;

/*-----------------------------
	RANDOM SINGLE TAG
------------------------------*/
if ( !function_exists( 'insut_random_tag_retrip' ) ): 
	function insut_random_tag_retrip(){

		if ( 'post' === get_post_type() ) {

			if ( has_tag() ) {
				$tags       = get_the_tags();
				$tag_count  = count($tags);
				$single_tag = $tags[random_int( 0, $tag_count-1 )];

				if ( get_the_tags() ) {
					echo '<a href="'.esc_url( get_category_link( $single_tag->term_id ) ).'">'.esc_html( $single_tag->name ).'</a>';
				}
			}
		}
	}
endif;

/*-----------------------------
	RANDOM SINGLE CATEGORY
------------------------------*/
if ( !function_exists( 'insut_random_category_retrip' ) ): 

	function insut_random_category_retrip(){

		$blog_cat_show   = insut_option( 'blog_category', '1' );
		$single          = insut_option( 'blog_category_single','0');
		
		if( ! $blog_cat_show ){
          return;
		}

		if ( 'post' === get_post_type() ) {

			$category        = get_the_category();
			$cat_count       = count($category);
			$single_cat      = $category[random_int( 0, $cat_count-1 )];

			if( !get_the_category() ){
               return;
			}
			
		      
				foreach( $category as $sl=> $value ):
					if($sl == 0){

					
					echo   '<a 
								class="post-cat" 
								href="'. esc_url (get_category_link($value->term_id) ) .'"
								><i class="icofont-ui-folder" aria-hidden="true"></i>'. 
								esc_html(get_cat_name($value->term_id)).
							'</a>';
					if ($single) {
						break;
					}	
				}else{
					echo   '<a 
						class="post-cat" 
						href="'. esc_url (get_category_link($value->term_id) ) .'"
						>'. 
						esc_html(get_cat_name($value->term_id)).
					'</a>';	
				}	
				endforeach;  
			
                 	
			
		}
	}

endif;