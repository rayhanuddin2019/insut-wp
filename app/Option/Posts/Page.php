<?php 


   $header_footer_url = admin_url( 'edit.php?post_type=qheader-footer' );
  // Control core classes for avoid errors
  if( class_exists( 'CSF' ) ) {

      //
      // Set a unique slug-like ID
      $post_prefix = 'insut_page_options';
    
      //
      // Create a metabox for post
      CSF::createMetabox( $post_prefix, array(
        'title'     => 'Settings',
        'post_type' => 'page',
      ) );
    
      // Banner section
      CSF::createSection( $post_prefix, array(
        'title'  => 'Banner',
        'fields' => array(

          array(
              'id'      => 'banner_page_title',
              'type'    => 'text',
              'title'   => esc_html__( 'Page Banner', 'insut' ),
              
          ), 

        
          array(

            'id'      => 'banner_page_image',
            'type'    => 'background',
            'title'   => esc_html__( 'Upload Background', 'insut' ),
            'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'insut' ),
            'output' => '.page .page-title'
          ),


            array(
                'id'    => 'banner_page_image_overlay',
                'type'  => 'color',
                'title' => esc_html__( 'Overlay Color', 'insut' ),
            ),

            array(
                'id'      => 'banner_page_image_opacity',
                'type'    => 'text',
                'title'   => esc_html__( 'Overlay Opacity', 'insut' ),
                'desc'    => esc_html__( 'Enter Fraction Value', 'insut' ),
            ),

            array(
              'id'     => 'banner_page_title_color',
              'type'   => 'color',
              'title'  => esc_html__( 'Page Title Color', 'insut' ),
              'output' => '.page .page-title-content .title'
            ),

            array(
                'id'     => 'banner_page_breadcrumb_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Page Breadcrumb Color', 'insut' ),
                'output' => '.page .page-title-content nav ol li, .page-title-content .breadcrumb li a',
                'output_important' => true
            ),

          array(
              'id'     => 'banner_page_breadcrumb_icon_color',
              'type'   => 'color',
              'title'  => esc_html__( 'Breadcrumb Icon Color', 'insut' ),
              'output' => '.page .page-title-content .breadcrumb li i',
              'output_important' => true
          ),

    
        )
      ) );
    
      //
      // Header section
      CSF::createSection( $post_prefix, array(
        'title'  => 'Header',
        'fields' => array(

             array(
                'id'      => 'header_style_override',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Override Header', 'insut' ),
                'desc'    => esc_html__( 'If you want to override header style you can set ( YES / NO )', 'insut' ),
                'default' => false,
            ),
       
            array(
              'id'      => 'header_style',
              'type'    => 'image_select',
              'title'   => esc_html__( 'Header Style', 'insut' ),
              'desc'    => esc_html__( 'Select the header style which you want to show on your website.', 'insut' ),
              'options' => array(
                  'style1' => INSUT_IMG. '/admin/header/header-1.png',
                  'style2' => INSUT_IMG. '/admin/header/header-2.png',
                  'style3' => INSUT_IMG. '/admin/header/header-3.png',
              ),
              'default' => 'style1',
              'dependency' => array( 'header_style_override', '==', 'true' ),
            ),

        

        )
      ) );

   

       // Elementor Header section
       CSF::createSection( $post_prefix, array(
        'title'  => esc_html__('Elementor Header Footer','insut'),
        'fields' => array(
    
           // elementor header footer
          array(
            'id'      => 'builder_header_layout_style',
            'type'    => 'Select',
            'title'   => esc_html__('Header','insut'),
            'options' => insut_header_footer_templates('header'),
            'desc'    => esc_html__('Create Footer from','insut'). '<a href='. $header_footer_url. '>'. esc_html__(' Here','insut').'</a>',
          ),

          array(
            'id'      => 'builder_footer_layout_style',
            'type'    => 'Select',
            'title'   => esc_html__('Footer','insut'),
            'options' => insut_header_footer_templates('footer'),
            'desc'    => esc_html__('Create Footer from','insut'). '<a href='. $header_footer_url. '>'. esc_html__(' Here','insut').'</a>',
          ),
    
        )
      ) );
      // newslatter
      CSF::createSection( $post_prefix, array(
        'title'  => esc_html__('Footer','insut'),
        'fields' => array(

                array(
                  'id'      => 'call_to_action_enable',
                  'type'    => 'switcher',
                  'title'   => esc_html__( 'Enable Call To Action', 'insut' ),
                  'desc'    => esc_html__( 'If you want to override Call To Action Settings  you can set ( YES / NO )', 'insut' ),
                  'default' => true,
                ),
                 
                array(
                  'id'      => 'override_footer',
                  'type'    => 'switcher',
                  'title'   => esc_html__( 'Override Footer style', 'insut' ),
                  'desc'    => esc_html__( 'If you want to override Footer  Settings  you can set ( YES / NO )', 'insut' ),
                  'default' => false,
                ),

                array(
                  'id'      => 'footer_style',
                  'type'    => 'image_select',
                  'title'   => esc_html__( 'Footer Style', 'insut' ),
                  'desc'    => esc_html__( 'Select the Footer style which you want to show on your website.', 'insut' ),
                  'options' => array(
                           
                    'style1'       => INSUT_IMG. '/admin/footer/style1.png',
                    'style2'       => INSUT_IMG. '/admin/footer/style2.png',
                    
                  ),
                  'default' => 'style1',
              ),
              array(
                'id'    => 'footer__three_style_bg',
                'type'  => 'color',
                'title'   => esc_html__( 'Footer Background ', 'insut' ),
                'output' => '.page .footer-area.footer-7-area .video-bg',
                'output_mode' => 'background-color',
                'dependency' => array( 'footer_style', '==', 'style3' ),
              ),
     
               array(
                'id'      => 'footer_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Footer Background ', 'insut' ),
                'desc'    => esc_html__( 'Upload a new background image to set the footer background.', 'insut' ),
                'default' => array(
                    'image'      => '',
                    'repeat'     => 'no-repeat',
                    'position'   => 'center center',
                    'attachment' => 'scroll',
                    'size'       => 'cover',
                    'color'      => '#182044',
                ),
                'output' => '.page .footer-area',
                'dependency' => array( 'footer_style', '==', 'style1' ),
              ),

              array(
                'id'      => 'footer_copyright__bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Footer Background ', 'insut' ),
                'desc'    => esc_html__( 'Upload a new background image to set the footer background.', 'insut' ),
                'default' => array(
                    'image'      => '',
                    'repeat'     => 'no-repeat',
                    'position'   => 'center center',
                    'attachment' => 'scroll',
                    'size'       => 'cover',
                    'color'      => '#182044',
                ),
                'output' => '.page .footer-area',
                'dependency' => array( 'footer_style', '==', 'copyright' ),
              ),
            
              array(
                'id'    => 'topbar_2_shape_background_image',
                'type'  => 'background',
                'title' => esc_html__( 'Footer Background', 'insut' ),
                'dependency' => array( 'footer_style', '==', 'style2'  ),
                'output' => '.page .footer-area.footer-2-area.footer-4-area .footer-bg'
              ),
         
        )
      ) );
    
  }
  