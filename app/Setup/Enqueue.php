<?php
namespace Insut\Setup;

/**
 * Enqueue.
 */
class Enqueue 
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function register() 
	{
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'admin_enqueue_scripts',  array( $this, 'admin_enqueue_scripts' )  );
	    
	}
   
    public function admin_enqueue_scripts(){
		
		wp_enqueue_style( 'icofont', INSUT_CSS . '/icofont.min.css', null, INSUT_VERSION );
		wp_enqueue_style( 'insut-icon', INSUT_CSS . '/insut-icon.css', null, INSUT_VERSION );
		wp_enqueue_script('insut-admin', INSUT_JS . '/admin.js', array('jquery'), INSUT_VERSION, true);
		$insut_data = [
			
			'widget_update' => esc_html__( 'Already updated', 'insut' )
	    ];
	   
	   wp_localize_script( 'insut-admin', 'insut_obj', $insut_data);
	}
	public function enqueue_scripts() 
	{
		

    	// stylesheets
		// ::::::::::::::::::::::::::::::::::::::::::
		if ( !is_admin() ) {
			// wp_enqueue_style() $handle, $src, $deps, $version

			// 3rd party css
			wp_enqueue_style( 'insut-fonts', insut_google_fonts_url(['Poppins:300,400;500,600,700,800,900','Rubik:300,400,500,700,900']), null, INSUT_VERSION );		
			wp_enqueue_style( 'fontawesome', INSUT_CSS . '/font-awesome.min.css', null, INSUT_VERSION );
			wp_enqueue_style( 'icofont', INSUT_CSS . '/icofont.min.css', null, INSUT_VERSION );
			wp_enqueue_style( 'bootstrap', INSUT_CSS . '/bootstrap.css', null, INSUT_VERSION );
			wp_enqueue_style( 'animate', INSUT_CSS . '/animate.css', null, INSUT_VERSION );
			wp_enqueue_style( 'owl-carousel', INSUT_CSS . '/owl.carousel.min.css', null, INSUT_VERSION );
			wp_enqueue_style( 'owl-carousel', INSUT_CSS . '/owl.carousel.min.css', null, INSUT_VERSION );
			wp_enqueue_style( 'select2', INSUT_CSS . '/select2.min.css', null, INSUT_VERSION );
			wp_enqueue_style( 'lightcase', INSUT_CSS . '/lightcase.css', null, INSUT_VERSION );
			wp_enqueue_style( 'slick', INSUT_CSS . '/slick.css', null, INSUT_VERSION );
		
			// theme css
			wp_enqueue_style( 'insut-icon', INSUT_CSS . '/insut-icon.css', null, INSUT_VERSION );
			wp_enqueue_style( 'insut-preset', INSUT_CSS . '/preset.css', null, INSUT_VERSION );
			wp_enqueue_style( 'insut-blog', INSUT_CSS . '/blog.css', null, INSUT_VERSION );
			wp_enqueue_style( 'insut-theme', INSUT_CSS . '/theme.css', null, INSUT_VERSION );
			wp_enqueue_style( 'insut-responsive', INSUT_CSS . '/responsive.css', null, INSUT_VERSION );
			

		}

		// javascripts
		// :::::::::::::::::::::::::::::::::::::::::::::::
		if ( !is_admin() ) {
			
			// 3rd party scripts
	
			
			wp_enqueue_script( 'bootstrap', INSUT_JS . '/bootstrap.min.js', array( 'jquery' ), INSUT_VERSION, true );
			wp_enqueue_script( 'appear', INSUT_JS . '/jquery.appear.js', array( 'jquery' ), INSUT_VERSION, true );
			wp_enqueue_script( 'shuffle', INSUT_JS . '/jquery.shuffle.min.js', array( 'jquery' ), INSUT_VERSION, true );
			wp_enqueue_script( 'easing', INSUT_JS . '/jquery.easing.1.3.js', array( 'jquery' ), INSUT_VERSION, true );
			wp_enqueue_script( 'jquery-ui', INSUT_JS . '/jquery-ui.js', array( 'jquery' ), INSUT_VERSION, true );
			wp_enqueue_script( 'lightcase', INSUT_JS . '/lightcase.js', array( 'jquery' ), INSUT_VERSION, true );
			wp_enqueue_script( 'owl-carousel', INSUT_JS . '/owl.carousel.min.js', array( 'jquery' ), INSUT_VERSION, true );
			wp_enqueue_script( 'select2', INSUT_JS . '/select2.min.js', array( 'jquery' ), INSUT_VERSION, true );
			wp_enqueue_script( 'slick', INSUT_JS . '/slick.js', array( 'jquery' ), INSUT_VERSION, true );
			wp_enqueue_script( 'goodshare', INSUT_JS . '/goodshare.min.js', array( 'jquery' ), INSUT_VERSION, true );
			
			// theme scripts
			wp_enqueue_script( 'insut-skip-link-focus-fix', INSUT_JS . '/skip-link-focus-fix.js', array( ), INSUT_VERSION, true );
			wp_enqueue_script( 'insut-script', INSUT_JS . '/theme.js', array( 'jquery','bootstrap','slick','appear','shuffle','easing','goodshare','jquery-ui','lightcase','owl-carousel','select2' ), INSUT_VERSION, true );
		
			$insut_data = [
				 'ajax_url' => admin_url( 'admin-ajax.php' ),
				 'loadmore_text' => esc_html__( 'Loading More Posts...', 'insut' )
			];
			
			wp_localize_script( 'insut-script', 'insut_obj', $insut_data);
			// Load WordPress Comment js
			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		    	wp_enqueue_script( 'comment-reply' );
			}

		}
    }
}
