<?php
namespace Insut\Core\Hook;

/**
 * Tags.
 */
class Blog
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function register()
	{
		
		add_filter( 'comment_form_defaults', [$this,'insut_add_submit_button_attr_class'] );
		add_filter( 'get_search_form', [$this,'insut_search_form'] );
		add_filter( 'next_posts_link_attributes', [$this,'next_posts_link_attributes'] );
		add_filter( 'previous_posts_link_attributes', [$this,'previous_posts_link_attributes'] );
		//add_filter( 'widget_title', [$this,'widget_title'] );
		add_filter( 'get_comment_date', [$this,'change_comment_date_format'], 10, 3 );
		
		if(!is_admin()) { 
			add_filter('pre_get_posts',[$this,'insut_search_filter']);
		}
		
	}
	function change_comment_date_format( $date, $date_format, $comment ){
		return sprintf( esc_html__( '%s ago', 'insut' ), human_time_diff(strtotime( $comment->comment_date ), current_time( 'timestamp' ) ) );

	}
    public function widget_title($title){

		if($title !=''){

			return $title.'<span> </span>'; 
		}	

		return $title; 
	}
	public function next_posts_link_attributes($attr){
		return 'class="next"';
	}
	
	public function previous_posts_link_attributes($attr){
		return 'class="prev"';
	}

	public function insut_search_form( $form ) {

		$form = '
			<form  method="get" action="' . esc_url( home_url( '/' ) ) . '" class="search-form">
			       
		        	<input name="s" type="search" placeholder="'.esc_attr__('Search here','insut').'">
					<button type="submit"><i class="icofont-search"></i></button>
				
			</form>';
	   return $form;
	}

	public function insut_add_submit_button_attr_class( $arg ) {
 
		$arg['class_submit'] = 'submit btn-comment btn btn-primary';

		return $arg;
	}

	
    // allow search post type
	function insut_search_filter($query) {
		 
	
		if ($query->is_search) {
			$query->set('post_type', 'post');
		}
		return $query;
	}


}











