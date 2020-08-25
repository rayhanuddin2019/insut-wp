<?php

namespace Insut\Setup;

class Setup
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        add_action( 'after_setup_theme', array( $this, 'setup' ) );
       
    }

    public function setup()
    {
        /*
         * You can activate this if you're planning to build a multilingual theme
         */
        
        load_theme_textdomain( 'insut', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
  
        add_theme_support( 'title-tag' );
  
        add_theme_support( 'post-thumbnails' );
        add_theme_support('post-formats', [
           'standard', 'image', 'video', 'audio'
        ]);
        
        //1200 x 628
        set_post_thumbnail_size(1200, 780, ['center', 'center']);
        add_image_size( 'insut_two_column', 350, 228, [ 'center', 'center' ] );
        add_image_size( 'insut_one_column', 730, 475, [ 'center', 'center' ] );
        add_image_size( 'insut_sidebar_img', 80, 80, true );
  
        add_theme_support( 'html5', array(
              'search-form',
              'comment-form',
              'comment-list',
              'gallery',
              'caption',
        ) );

  
    }
 
}
