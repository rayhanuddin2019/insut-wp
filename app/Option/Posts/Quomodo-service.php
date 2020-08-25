<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $post_prefix = 'insut_service_options';
  
    //
    // Create a metabox for post
    CSF::createMetabox( $post_prefix, array(
      'title'     => 'Settings',
      'post_type' => 'quomodo-service',
    ) );
    
    CSF::createSection( $post_prefix, array(
      'title'  =>  esc_html__( 'General', 'insut'),
      'fields' => array(
         
        array(
          'id'    => 'excerpt',
          'type'  => 'wp_editor',
          'title' => esc_html__('Excerp','insut'),
          'tinymce'       => true,
          'quicktags'     => true,
          'media_buttons' => false,
          'height'        => '100px',
          'desc'    => esc_html__( ' You can use { some line } for highlighted text', 'insut' ),
        ),

        array(
            'id'      => 'title_icon',
            'type'    => 'icon',
            'title'   => esc_html__( 'Title Icon', 'insut' ),
            'desc'    => esc_html__( 'Set the thumb icon ', 'insut' ),
        ),

        array(
            'id'         => 'service_type',
            'type'       => 'text',
            'title'      => esc_html__( 'Service Type', 'insut' ),
            'desc'       => esc_html__( 'Set service Type ', 'insut' ),
        ),

        array(
            'id'         => 'service_type_slug',
            'type'       => 'text',
            'title'      => esc_html__( 'Service Type Slug', 'insut' ),
            'desc'       => esc_html__( 'Set service Type slug ', 'insut' ),
        ),

        array(
            'id'      => 'service_menu_icon',
            'type'    => 'icon',
            'title'   => esc_html__( 'Type Icon', 'insut' ),
            'desc'    => esc_html__( 'Set the service type icon ', 'insut' ),
        ),
         
      )
    ) );
    //

      // Banner section
      CSF::createSection( $post_prefix, array(
        'title'  => 'Banner',
        'fields' => array(

          array(
              'id'      => 'banner_service_title',
              'type'    => 'text',
              'title'   => esc_html__( 'Banner Title', 'insut' ),
              
          ), 
        
          array(

            'id'      => 'banner_service_image',
            'type'    => 'background',
            'title'   => esc_html__( 'Upload Background', 'insut' ),
            'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'insut' ),
            'output' => '.single-quomodo-service .page-banner'
          ),

            array(
                'id'    => 'banner_service_image_overlay',
                'type'  => 'color',
                'title' => esc_html__( 'Overlay Color', 'insut' ),
            ),

            array(
                'id'      => 'banner_service_image_opacity',
                'type'    => 'text',
                'title'   => esc_html__( 'Overlay Opacity', 'insut' ),
                'desc'    => esc_html__( 'Enter Fraction Value', 'insut' ),
            ),

            array(
              'id'     => 'banner_service_title_color',
              'type'   => 'color',
              'title'  => esc_html__( 'Title Color', 'insut' ),
              'output' => '.single-quomodo-service .banner-content .banner-title'
            ),

            array(
                'id'     => 'banner_service_breadcrumb_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Breadcrumb Color', 'insut' ),
                'output' => '.single-quomodo-service .banner-content .bread-crumbs, .single-quomodo-case .banner-content .bread-crumbs a',
                'output_important' => true
            ),

          array(
              'id'     => 'banner_service_breadcrumb_icon_color',
              'type'   => 'color',
              'title'  => esc_html__( 'Breadcrumb Icon Color', 'insut' ),
              'output' => '.single-quomodo-service .banner-content .bread-crumbs i',
              'output_important' => true
          ),
  
        )
      ) );
   
  
  
  }
  