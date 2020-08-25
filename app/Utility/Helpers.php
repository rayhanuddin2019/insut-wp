<?php
use Insut\Core\Hook\Insut_Unyson_Google_Fonts;
/**
 * Helpers methods
 * List all your static functions you wish to use globally on your theme
 */

if ( ! function_exists( 'insut_header_style' ) ) :
	function insut_header_style() {
		$header_text_color = get_header_textcolor();
	
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}
   }
endif;

if ( ! function_exists( 'insut_starts_with' ) ) {
	/**
	 * Determine if a given string starts with a given substring.
	 *
	 * @param  string  $haystack
	 * @param  string|array  $needles
	 * @return bool
	 */
	function insut_starts_with($haystack, $needles)
	{
		foreach ((array) $needles as $needle) {
			if ($needle != '' && substr($haystack, 0, strlen($needle)) === (string) $needle) {
				return true;
			}
		}
		return false;
	}
}

/*-------------------------------
    DAY LINK TO ARCHIVE PAGE
---------------------------------*/
if ( !function_exists('insut_day_link') ) {
   /**
    * insut_day_link() archive link
    * @return string return sting url for post.
    */
    function insut_day_link() {
        $archive_year   = get_the_time('Y');
        $archive_month  = get_the_time('m');
        $archive_day    = get_the_time('d');
        echo get_day_link( $archive_year, $archive_month, $archive_day);
    }
}

if ( ! function_exists('insut_assets') ) {
	/**
	 * Easily point to the assets dist folder.
	 *
	 * @param  string  $path
	 */
	function insut_assets($path)
	{
		if (! $path) {
			return;
		}

		echo get_template_directory_uri() . '/assets/' . $path;
	}
}

if ( ! function_exists('insut_svg') ) {
	/**
	 * Easily point to the assets dist folder.
	 *
	 * @param  string  $path
	 */
	function insut_svg($path)
	{
		if (! $path) {
			return;
		}

		echo get_template_part('assets/svg/inline', $path . '.svg');
	}
}

if(!function_exists('insut_get_post_category')){
   function insut_get_post_category($tax = 'category') {
   
      static $list = [];
      if( !count( $list ) ) {
         $categories = get_terms( $tax, array(
            'orderby'    => 'name', 
            'order'      => 'DESC',
            'hide_empty' => false,
            'number'     => 200
         ));
   
        foreach( $categories as $category ) {
           $list[$category->term_id] = $category->name;
        }
      }
    
      return $list;
   }
}

if(!function_exists('insut_get_post_tags')){

   function insut_get_post_tags($tax = 'post_tag') {
      
      static $list = [];
      if( !count( $list ) ) {
         $categories = get_terms( $tax, array(
            'orderby'       => 'name', 
            'order'         => 'DESC',
            'hide_empty'    => false,
            'number'        => 200
         
      ) );

      foreach( $categories as $category ) {
         $list[$category->term_id] = $category->name;
      }
      }
   
      return $list;
   }
}


function insut_child_category_meta(){ 
   $post_child_cat = insut_option('blog_child_cat_show',1);
   if( $post_child_cat ){
      return;
   }

   $insut_cat_term     = get_queried_object();
   $insut_cat_children = get_terms( $insut_cat_term->taxonomy, array(
       'parent'     => $insut_cat_term->term_id,
       'hide_empty' => false
   ) );

   if(!$insut_cat_children){
     return;
   }

   if ( $insut_cat_children ) { 

         echo '<div class="sub-category-list">';
            foreach( $insut_cat_children as $insut_subcat )
            {
               echo '<a class="post-cat" href="'. esc_url(get_term_link($insut_subcat, esc_html($insut_subcat->taxonomy))) .'" >'.
               esc_html($insut_subcat->name). 
                  '</a>';
            }
         echo '</div>';

   }

}

function insut_category_meta(){
       
   $blog_cat_show   = insut_option('blog_category','yes');
   $blog_cat_single = insut_option('blog_category_single','no');
  
    
    if( $blog_cat_show != 'yes' ){
     return;
   }
  
      echo '<span class="category">';  

         $cat = get_the_category();
         if( $blog_cat_single == 'yes' ) {
            
            shuffle($cat);

            if ( isset($cat[0]) ) {

               echo  '<a 
                        class="post-cat" 
                        href="'. esc_url(get_category_link($cat[0]->term_id) ).'"
                        
                        >'.'<span class="before"></span>'.
                        
                        esc_html(get_cat_name($cat[0]->term_id)).
                        '<span class="after"></span> '. 
                     '</a>';

            }

            return; 
         }

         if( $cat ) {
            
                  foreach( $cat as $value ):

                     echo  '<a 
                              class="post-cat" 
                              href="'. esc_url (get_category_link($value->term_id) ) .'"
                              >'. 
                                esc_html(get_cat_name($value->term_id)).
                              '</a>';
              
                  endforeach;   
            
         }
      echo '</span>';
   
}

function insut_single_category_meta(){
       
   $blog_cat_show   = insut_option('blog_single_category','yes');
   $blog_cat_single = insut_option('blog_category_single','no');
  
    
    if( $blog_cat_show != 'yes' ){
     return;
    }
  
      echo '<div class="page_category">';  

         $cat = get_the_category();
         if( $blog_cat_single == 'yes' ) {
            
            shuffle($cat);

            if ( isset($cat[0]) ) {

               echo  '<a 
                        class="post-cat" 
                        href="'. esc_url(get_category_link($cat[0]->term_id) ).'"
                        
                        >'.'<span class="before"></span>'.
                        
                        esc_html(get_cat_name($cat[0]->term_id)).
                        '<span class="after"></span> '. 
                     '</a>';

            }

            return; 
         }

         if( $cat ) {
            
                  foreach( $cat as $value ):

                     echo  '<a 
                              class="post-cat" 
                              href="'. esc_url (get_category_link($value->term_id) ) .'"
                              >'. 
                                esc_html(get_cat_name($value->term_id)).
                              '</a>';
              
                  endforeach;   
            
         }
      echo '</div>';
   
}



/*------------------------------------------------------
   DISPLAY META INFORMATION FOR A SPECIFIC POST
-------------------------------------------------------*/
if ( ! function_exists( 'insut_post_meta' ) ) :
   // post and post meta
  function insut_post_meta() {
   ?>
      <div class="sbp-meta">

         <?php 
      
            // for other blog ,category ,tags, arcgive page
          
              
               if( insut_option('blog_author',1) ):
                 

                        if( insut_option('blog_author_image',0) ):
                        
                           printf(
                              '<a href="%2$s">%1$s %3$s</a>',
                              get_avatar( get_the_author_meta( 'ID' ), 55 ), 
                              esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), 
                              get_the_author()
                           );

                        else:

                           printf(
                              '<a href="%1$s"><i class="fal fa-user"></i> %2$s</a>',
                              esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), 
                              get_the_author()
                           );

                        endif;

                 
               endif;
              
               if ( get_post_type() === 'post' && insut_option('blog_date','1') ) {
                     echo sprintf('<a class="calendar" href="%s">','#');    
                     echo '<i class="icofont-ui-calendar"></i>';
                     echo get_the_date(get_option( 'date_format' ));
                     echo '</a>';
               }
              
               
               if( insut_option('blog_comment',1) ):  
                  printf('<span class="comments"><i class="icofont-speech-comments"></i> %1$s</span>',
                  esc_html(get_comments_number(get_the_ID())) 
                  ); 
               endif;

               if( insut_option('blog_views',0) ):  
                  printf('<span class="like"><i class="icofont-heart-alt"></i> %1$s</span>',
                  esc_html(insut_get_postview(get_the_ID())) 
                  ); 
               endif;

               insut_random_category_retrip();
              
           
         ?>
      </div>
   <?php }
 endif;  

if ( !function_exists( 'insut_content_estimated_reading_time' ) ) {
  
   function insut_content_estimated_reading_time( $content = '', $wpm = 200 ) {
     
      if($content == ''){
         $content = get_the_content();
      } 

      $clean_content = esc_html( $content );
      $word_count    = str_word_count( $clean_content );
      $time          = ceil( $word_count / $wpm );

      if($time<=1){
         $time .= esc_html__(' minute read','insut');
      }else{
         $time .= esc_html__(' minutes read','insut'); 
      }

      return $time;
     }

}
if ( !function_exists('insut_link_pages') ):

   function insut_link_pages() {

      $args = array(
         'before'			    => '<div class="page-links"><span class="page-link-text">' . esc_html__( 'More pages: ', 'insut' ) . '</span>',
         'after'				 => '</div>',
         'link_before'		 => '<span class="page-link">',
         'link_after'		 => '</span>',
         'next_or_number'	 => 'number',
         'separator'			 => '  ',
         'nextpagelink'		 => esc_html__( 'Next ', 'insut' ) . '<i class="fas fa-angle-right"></i>',
         'previouspagelink' => '<i class="fas fa-angle-left"></i>' . esc_html__( ' Previous', 'insut' ),
      );
      
      wp_link_pages( $args );
   }

endif;

function insut_title_limit($title, $limit=20){

      $title  =  wp_trim_words($title,$limit,'');
      echo esc_html($title);

}

/*----------------------------------------
   CUSTOM COMMENNS WALKER
-------------------------------------------*/
if ( !function_exists('insut_comment_style') ):

   function insut_comment_style( $comment, $args, $depth ) {
      if ( 'div' === $args[ 'style' ] ) {
         $tag		 = 'div';
         $add_below	 = 'comment';
      } else {
         $tag		 = 'li ';
         $add_below	 = 'div-comment';
      }
      ?>
      <?php
      if ( $args[ 'avatar_size' ] != 0 ) {
         echo get_avatar( $comment, $args[ 'avatar_size' ], '', '', array( 'class' => 'comment-avatar float-left' ) );
      }
      ?>
      <<?php
      echo insut_kses( $tag );
      comment_class( empty( $args[ 'has_children' ] ) ? '' : 'parent'  );
      ?> id="comment-<?php comment_ID() ?>"><?php if ( 'div' != $args[ 'style' ] ) { ?>
         <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php }
      ?>	
         <div class="meta-data">
   
            <div class="float-right reply"><?php
               comment_reply_link(
               array_merge(
               $args, array(
                  'add_below'	 => $add_below,
                  'depth'		 => $depth,
                  'max_depth'	 => $args[ 'max_depth' ]
               ) ) );
               ?>
            </div>
   
   
            <span class="comment-author vcard"><?php
               printf( insut_kses( '<cite class="fn">%s</cite> <span class="says">%s</span>', 'insut' ), get_comment_author_link(), esc_html__( 'says:', 'insut' ) );
               ?>
            </span>
            <?php if ( $comment->comment_approved == '0' ) { ?>
               <em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'insut' ); ?></em><br/><?php }
            ?>
   
            <div class="comment-meta commentmetadata comment-date">
               <?php
               // translators: 1: date, 2: time
               printf(
               esc_html__( '%1$s at %2$s', 'insut' ), get_comment_date(), get_comment_time()
               );
               ?>
               <?php edit_comment_link( esc_html__( '(Edit)', 'insut' ), '  ', '' ); ?>
            </div>
         </div>	
         <div class="comment-content">
            <?php comment_text(); ?>
         </div>
         <?php if ( 'div' != $args[ 'style' ] ) : ?>
         </div><?php
      endif;
   }
endif;

/*---------------------------------------
   EXCERPT CUSTOM WORD COUNT
-----------------------------------------*/
function insut_excerpt( $words = 40, $more = '' ) {

   if( $more == 'button' ){
      $more = '<a class="btn btn-primary">'.esc_html__('read more', 'insut').'</a>';
   }

   $excerpt         = get_the_excerpt();
   $trimmed_content = wp_trim_words( $excerpt, $words, $more );

   echo wp_kses_post( $trimmed_content );
}

/*--------------------------------------
   SINGLE POST NAVIGATION
---------------------------------------*/
if ( !function_exists('insut_post_nav') ):

// display navigation to the next/previous set of posts
// ----------------------------------------------------------------------------------------
function insut_post_nav() {
   // Don't print empty markup if there's nowhere to navigate.
  
      if( !insut_option('blog_post_nav','1') ){
         return;
      }

      $next_post	 = get_next_post();
      $pre_post	 = get_previous_post();
      if ( !$next_post && !$pre_post ) {
         return;
      }
   ?>
      <nav class="qomodo-post-navigation clearfix">
         <div class="post-previous">
            <?php if ( !empty( $pre_post ) ): ?>
               <a href="<?php echo get_the_permalink( $pre_post->ID ); ?>">
                  <h3><?php echo get_the_title( $pre_post->ID ) ?></h3>
                  <span><i class="far fa-angle-left"></i><?php esc_html_e( 'Previous post', 'insut' ) ?></span>
               </a>
            <?php endif; ?>
         </div>
         <div class="post-next">
            <?php if ( !empty( $next_post ) ): ?>
               <a href="<?php echo get_the_permalink( $next_post->ID ); ?>">
                  <h3><?php echo get_the_title( $next_post->ID ) ?></h3>
   
                  <span><?php esc_html_e( 'Next post', 'insut' ) ?> <i class="far fa-angle-right"></i></span>
               </a>
            <?php endif; ?>
         </div>
      </nav>
   <?php }
 endif;
function insut_get_top_post(){
   $blog_top_post = insut_option('blog_top_post');

   if($blog_top_post == 'no'){
       return new \WP_Query(); 
   }

   $blog_top_post_settings = insut_option('blog_top_post_settings');

   if(!isset($blog_top_post_settings['yes'])){
      return new \WP_Query(); 
   } 
  
   $settings = $blog_top_post_settings['yes'];
      $arg = [
         'post_type'        => 'post',
         'post_status'      => 'publish',
         'order'            => $settings['order'],
         'posts_per_page'   => $settings['count'],
         'category__in'     => $settings['category'],
         'tag__in'          => $settings['tags'],
         'suppress_filters' => false,
   ];
  
   if($settings['skip_post']>0){
      $arg['offset'] = $settings['skip_post'];
   }
 
   return  new \WP_Query( $arg ); 
}

//date 
function insut_post_time_ago_function() {
   
   return sprintf( esc_html__( '%s ago', 'insut' ), human_time_diff(get_the_time ( 'U' ), current_time( 'timestamp' ) ) );
}


function insut_get_current_date(){
   
    return date_i18n( get_option( 'date_format' ) );
}

/*
* get default header footer id
* @return bool
*/
if( !function_exists( 'insut_header_footer_templates') ){
   function insut_header_footer_templates( $type= 'header' ){
      $list = [];
      $args = array(
         'post_type'           => 'qheader-footer',
         'orderby'             => 'id',
         'order'               => 'DESC',
         'posts_per_page'      => -1,
         'ignore_sticky_posts' => 1,
         'meta_query'          => array(
            array(
                  'key'     => '_qhf_template_type',
                  'compare' => 'LIKE',
                  'value'   => $type,
            ),
            
         ),
      );

      $data = get_posts($args);
      $list['--'] = esc_html__( 'None', 'insut' );
      foreach($data as $item){
         $list[$item->ID] = $item->post_title;
      }
      
      return $list;

   }
}
/*
* get images sizes
* @return bool
*/
function insut_get_all_image_sizes() {
	global $_wp_additional_image_sizes;

	$default_image_sizes = array( 'thumbnail', 'medium', 'large' );
	 
	foreach ( $default_image_sizes as $size ) {
		$image_sizes[$size]['width']	= intval( get_option( "{$size}_size_w") );
		$image_sizes[$size]['height'] = intval( get_option( "{$size}_size_h") );
		$image_sizes[$size]['crop']	= get_option( "{$size}_crop" ) ? get_option( "{$size}_crop" ) : false;
	}
	
	if ( isset( $_wp_additional_image_sizes ) && count( $_wp_additional_image_sizes ) )
		$image_sizes = array_merge( $image_sizes, $_wp_additional_image_sizes );
		
	return $image_sizes;
}
function insut_blog_first_article(){

   global $step;
   if(insut_option('blog_two_column')){
      return 'mt-40';
   }  
   if( $step ){
       $step   = false;
       return '';
   }

   return 'mt-40';

}

function insut_str_snake_case($str, array $noStrip = [])
{
        // non-alpha and non-numeric characters become spaces
        $str = preg_replace('/[^a-z0-9' . implode("", $noStrip) . ']+/i', ' ', $str);
        $str = trim($str);
        $str = str_replace(" ", "_", $str);
        $str = strtolower($str);

        return $str;
}

function insut_get_contact_forms_seven_list(){
   $forms_list = array();
   $forms_args = array( 'posts_per_page' => -1, 'post_type'=> 'wpcf7_contact_form' );
   $forms      = get_posts( $forms_args );

   if( $forms ){
       foreach ( $forms as $form ){
           $forms_list[$form->ID] = $form->post_title;
       }
   }else{
       $forms_list[ esc_html__( 'No contact form found', 'insut' ) ] = 0;
   }
   return $forms_list;
}

function insut_social_share($attr_cls = 'sbp-social'){
   // option social.php 
   $post_social_share_show = insut_option('post_social_share_show',0);
  
   if(!$post_social_share_show){
      return;
   }

   $general_social_share = insut_option('social_share',[]);
  
   if( !is_array($general_social_share) ){
      return;  
   }

   ?>
        <ul class="<?php echo esc_attr($attr_cls); ?>">
           
               <?php
                 foreach($general_social_share as $share){
                     if(isset($share['bookmark_icon'])){
 
               ?>
                   <li> <a href="<?php echo esc_url(get_the_permalink()); ?>" data-social="<?php echo esc_attr($share['social_type']); ?>"><i class="<?php echo esc_attr($share['bookmark_icon']); ?>"></i></a> </li>
               <?php
                    }
               } 
              ?>
              
        
         </ul>
   <?php
  

}

if( !function_exists('insut_footer_menu')){
   function insut_footer_menu(){

      $footer_menu = get_nav_menu_locations(); 
      if(isset($footer_menu['footer'])){
         $menuID     = $footer_menu['footer'];
         return wp_get_nav_menu_items($menuID);
      } 
      return false; 
}
}



