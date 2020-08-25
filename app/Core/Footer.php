<?php
namespace Insut\Core;

/**
 * Sidebar.
 */
class Footer
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        add_action( 'widgets_init', array( $this, 'widgets_init' ) );
    }

    /*
    *    Define the sidebar
    */
    public function widgets_init()
    {
       
        register_sidebar(
            array(
                'name'          => esc_html__('Footer One', 'insut'),
                'id'            => 'footer-one',
                'description'   => esc_html__('Footer one Widget.', 'insut'),
                'before_widget' => '<div id="%1$s" class="widget footer-1-widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        register_sidebar(
            array(
                'name'          => esc_html__('Footer Two', 'insut'),
                'id'            => 'footer-two',
                'description'   => esc_html__('Footer  widget.', 'insut'),
                'before_widget' => '<div id="%1$s" class="widget footer-2-widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        register_sidebar(
            array(
                'name'          => esc_html__('Footer Three', 'insut'),
                'id'            => 'footer-three',
                'description'   => esc_html__('Footer widget.', 'insut'),
                'before_widget' => '<div id="%1$s" class="widget footer-3-widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
        
        register_sidebar(
            array(
                'name'          => esc_html__('Footer Four', 'insut'),
                'id'            => 'footer-four',
                'description'   => esc_html__('Footer widget.', 'insut'),
                'before_widget' => '<div id="%1$s" class="widget footer-4-widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

      

      
      
    }
}
