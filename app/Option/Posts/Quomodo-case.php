<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $post_prefix = 'insut_case_options';
  
  
    // Create a metabox for post
    CSF::createMetabox( $post_prefix, array(
      'title'     => 'Settings',
      'post_type' => 'quomodo-case',
    ) );
    
    CSF::createSection( $post_prefix, array(
      'title'  =>  esc_html__( 'General', 'insut'),
      'fields' => array(
         
        array(
            'id'         => 'case_client_name',
            'type'       => 'text',
            'title'      => esc_html__( 'Client Name', 'insut' ),
            'desc'       => esc_html__( 'Set Client Name', 'insut' ),
        ),

        array(
          'id'         => 'case_duration',
          'type'       => 'text',
          'title'      => esc_html__( 'Case Duration', 'insut' ),
          'desc'       => esc_html__( 'Set Case Duration', 'insut' ),
      ),
         
      )
    ) );
   
      // Banner section
      CSF::createSection( $post_prefix, array(
        'title'  => 'Banner',
        'fields' => array(

          array(
              'id'      => 'banner_page_title',
              'type'    => 'text',
              'title'   => esc_html__( 'Banner Title', 'insut' ),
              
          ), 
        
          array(

            'id'      => 'banner_case_image',
            'type'    => 'background',
            'title'   => esc_html__( 'Upload Background', 'insut' ),
            'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'insut' ),
            'output' => '.single-quomodo-case .page-banner'
          ),


            array(
                'id'    => 'banner_case_image_overlay',
                'type'  => 'color',
                'title' => esc_html__( 'Overlay Color', 'insut' ),
            ),

            array(
                'id'      => 'banner_case_image_opacity',
                'type'    => 'text',
                'title'   => esc_html__( 'Overlay Opacity', 'insut' ),
                'desc'    => esc_html__( 'Enter Fraction Value', 'insut' ),
            ),

            array(
              'id'     => 'banner_case_title_color',
              'type'   => 'color',
              'title'  => esc_html__( 'Title Color', 'insut' ),
              'output' => '.single-quomodo-case .banner-content .banner-title'
            ),

            array(
                'id'     => 'banner_case_breadcrumb_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Breadcrumb Color', 'insut' ),
                'output' => '.single-quomodo-case .banner-content .bread-crumbs, .single-quomodo-case .banner-content .bread-crumbs a',
                'output_important' => true
            ),

          array(
              'id'     => 'banner_case_breadcrumb_icon_color',
              'type'   => 'color',
              'title'  => esc_html__( 'Breadcrumb Icon Color', 'insut' ),
              'output' => '.single-quomodo-case .banner-content .bread-crumbs i',
              'output_important' => true
          ),

        
    
        )
      ) );
  
  
  }
  