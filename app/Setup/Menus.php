<?php
namespace Insut\Setup;

/**
 * Menus
 */
class Menus
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        add_action( 'after_setup_theme', array( $this, 'menus' ) );
    }

    public function menus()
    {
        /*
        Register all your menus here
        */
        register_nav_menus( array(
            'primary'     => esc_html__( 'Primary', 'insut' ),
            'footer'      => esc_html__( 'Footer Menu', 'insut' ),
          
        ) );
    }
}
