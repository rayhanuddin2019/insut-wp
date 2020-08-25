<?php
/*----------------------------------------------------
LOAD COMPOSER PSR - 4
-----------------------------------------------------*/
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ):
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
endif;

/*----------------------------------------------------
SHORTHAND CONTANTS FOR THEME VERSION
-----------------------------------------------------*/
if ( site_url() === 'http://localhost/production' ) {
    define( 'INSUT_VERSION', time() );
} else {
    define( 'INSUT_VERSION', time() );
    //define('INSUT_VERSION', wp_get_theme()->version); /* If it make it slow for loading please use manually like: 1.0.0 */
}



/*----------------------------------------------------
SHORTHAND CONTANTS FOR THEME ASSETS URL
-----------------------------------------------------*/
define( 'INSUT_THEME_URI', get_template_directory_uri() );
define( 'INSUT_IMG', INSUT_THEME_URI . '/assets/images' );
define( 'INSUT_CSS', INSUT_THEME_URI . '/assets/css' );
define( 'INSUT_JS', INSUT_THEME_URI . '/assets/js' );

/*----------------------------------------------------
SHORTHAND CONTANTS FOR THEME ASSETS DIRECTORY PATH
-----------------------------------------------------*/
define( 'INSUT_THEME_DIR', get_template_directory() );
define( 'INSUT_IMG_DIR', INSUT_THEME_DIR . '/assets/images' );
define( 'INSUT_CSS_DIR', INSUT_THEME_DIR . '/assets/css' );
define( 'INSUT_JS_DIR', INSUT_THEME_DIR . '/assets/js' );

// option prefix
define( 'INSUT_OPTION_KEY', 'insut_settings' );
/*----------------------------------------------------
SET UP THE CONTENT WIDTH VALUE BASED ON THE THEME'S DESIGN
-----------------------------------------------------*/
if ( !isset( $content_width ) ) {
    $content_width = 800;
}
if ( class_exists( 'Insut\\Init' ) ):
    Insut\Init::register_services();
endif;

/*----------------------------------------------------
UTILITY
-----------------------------------------------------*/
require_once INSUT_THEME_DIR . '/app/Utility/global.php';
require_once INSUT_THEME_DIR . '/app/Utility/Helpers.php';
require_once INSUT_THEME_DIR . '/app/Utility/template-tags.php';

/*----------------------------------------------------
option init
-----------------------------------------------------*/

require_once INSUT_THEME_DIR . '/app/Option/Init.php';


/*----------------------------------------------------
AJAX LOAD MORE OPTIONS
-----------------------------------------------------*/
require_once INSUT_THEME_DIR . '/app/Core/Hook/Ajax.php';


  

  

 
