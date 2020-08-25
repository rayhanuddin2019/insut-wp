<?php 
 

 // Post Page
CSF::createSection( INSUT_OPTION_KEY, array(
    'icon'   => 'fa fa-book',
    'title' => esc_html__( 'Post & Page', 'insut' ),
    'fields' => array(

        array(
          'type'    => 'subheading',
          'content' => esc_html__( 'Post Setting', 'insut' ),
        ),

        array(
            'id'      => 'single_post_tags',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Post tags', 'insut' ),
            'desc'    => esc_html__( 'If you want to enable or disable post tags you can set ( YES / NO )', 'insut' ),
            'default' => true,
        ),

        array(
            'id'      => 'blog_single_author_box',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Blog Author About', 'insut' ),
            'default' => false
        ),

        array(
          'type'    => 'subheading',
          'content' => esc_html__( '404 Error Page Setting', 'insut' ),
        ),
       

        array(
            'id'      => 'enable_404_header',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Override 404 header', 'insut' ),
            'desc'    => esc_html__( 'If you want to Override  404 page header ( YES / NO )', 'insut' ),
            'default' => true,
        ),

        array(
            'id'      => 'enable_404_footer',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable 404 footer', 'insut' ),
            'desc'    => esc_html__( 'If you want to enable or disable 404 page footer you can set ( YES / NO )', 'insut' ),
            'default' => false,
        ),
        array(
            'id'      => 'error_enable_main_container',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Blog Container', 'insut' ),
            'desc'    => esc_html__( 'If you want to enable or disable 404 page footer you can set ( YES / NO )', 'insut' ),
            'default' => false,
        ),

        array(
            'id'     => 'header_contact_info',
            'type'   => 'repeater',
            'title'   => esc_html__( 'Header Contact Info', 'insut' ),
            'fields' => array(
          
              array(
                'id'    => 'label',
                'type'  => 'text',
                'title'   => esc_html__( 'Label', 'insut' ),
              ),

              array(
                'id'    => 'content',
                'type'  => 'text',
                'title'   => esc_html__( 'Content', 'insut' ),
              ),

              array(
                'id'      => 'icon',
                'type'    => 'icon',
                'title'   => esc_html__( 'Icon', 'insut' ),
                'default' => 'fa fa-volume-control-phone'
              ),
          
            ),
            'default'   => array(
                array(
                  'label' => 'Head Office:',
                  'content' => '+00 823 468 739',
                ),
                array(
                  'label' => 'USA:',
                  'content' => '+00 823 468 739',
                ),
                array(
                    'label' => 'UK:',
                    'content' => '+00 823 468 739',
                  )
              )
          ),
          
    ),
) );