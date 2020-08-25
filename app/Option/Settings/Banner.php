<?php 
    // Blog
     // footer a top-tab
     CSF::createSection( INSUT_OPTION_KEY, array(
        'id'    => 'banner_tab', // Set a unique slug-like ID
        'title'  => esc_html__( 'Banner', 'insut' ),
        'icon'     => 'fa fa-cog',
    ) );
    CSF::createSection( INSUT_OPTION_KEY, array(
        'parent' => 'banner_tab', // The slug id of the parent section
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'Content Settings', 'insut' ),
        'fields' => array(
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog Banner', 'insut' ),
            ),
         
            array(
                'id'      => 'blog_banner_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Banner', 'insut' ),
                'default' => true
            ),
            
            array(
                'id'      => 'blog_show_breadcrumb',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Breadcrumb', 'insut' ),
                'default' => true
            ),
            
            array(
                'id'      => 'banner_blog_title',
                'type'    => 'text',
                'title'   => esc_html__( 'Blog title', 'insut' ),
                
            ), 
            array(

                'id'      => 'banner_blog_image',
                'type'    => 'background',
                'title'   => esc_html__( 'Upload Background', 'insut' ),
                'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'insut' ),
                'output' => '.blog-banner .page-banner'
            ),

         
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Page Banner', 'insut' ),
            ),
            
            array(

                'id'      => 'page_banner_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Page Banner Show ', 'insut' ),
                'default' => true
            ),
            
            array(
                'id'      => 'page_show_breadcrumb',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Page Breadcrumb', 'insut' ),
                'default' => true
            ),
            
            array(

                'id'      => 'banner_page_title',
                'type'    => 'text',
                'title'   => esc_html__( 'Page Title', 'insut' ),
                'default' => ''
            ), 

            array(

                'id'      => 'banner_page_image',
                'type'    => 'background',
                'title'   => esc_html__( 'Upload Background', 'insut' ),
                'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'insut' ),
                'output' => '.page .page-banner'
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Service Banner', 'insut' ),
            ),

            array(
                'id'      => 'service_banner_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Service Banner', 'insut' ),
                'default' => true
            ),
            array(
                'id'      => 'service_show_breadcrumb',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Service Breadcrumb', 'insut' ),
                'default' => true
            ),
            array(

                'id'      => 'banner_service_image',
                'type'    => 'background',
                'title'   => esc_html__( 'Upload Background', 'insut' ),
                'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'insut' ),
                'output' => '.single-quomodo-service .page-banner'
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Case Study Banner', 'insut' ),
            ),

            array(
                'id'      => 'case_banner_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Case Banner', 'insut' ),
                'default' => true
            ),

            array(
                'id'      => 'case_show_breadcrumb',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Case Breadcrumb', 'insut' ),
                'default' => true
            ),

            array(

                'id'      => 'banner_case_image',
                'type'    => 'background',
                'title'   => esc_html__( 'Upload Background', 'insut' ),
                'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'insut' ),
                'output' => '.single-quomodo-case .page-banner'
            ),
   
       
        )
    ) ); 
    CSF::createSection( INSUT_OPTION_KEY, array(
        'parent' => 'banner_tab', // The slug id of the parent section
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'Style', 'insut' ),
        'fields' => array(
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog Banner', 'insut' ),
            ),

            array(
                'id'    => 'banner_blog_title_color',
                'type'  => 'color',
                'title' => esc_html__( 'Title Color', 'insut' ),
                'output' => '.blog-banner .banner-title'
            ),

            array(
                'id'     => 'banner_blog_breadcrumb_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Page Breadcrumb Color', 'insut' ),
                'output' => '.blog-banner .banner-content .bread-crumbs,.blog-banner .banner-content .bread-crumbs a',
                'output_important' => true
            ),

            array(
                'id'     => 'banner_blog_breadcrumb_icon_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Breadcrumb Icon Color', 'insut' ),
                'output' => '.blog-banner .bread-crumbs i',
                'output_important' => true
            ),

         
            array(
                'id'    => 'banner_blog_image_overlay',
                'type'  => 'color',
                'title' => esc_html__( 'Overlay Color', 'insut' ),
            ),

            array(
                'id'    => 'banner_blog_image_opacity',
                'type'  => 'slider',
                'title' => esc_html__( 'Overlay Opacity', 'insut' ),
                'min'     => 0,
                'max'     => 1,
                'step'    => 0.1
            ),
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Page Banner', 'insut' ),
            ),
       
            array(
                'id'     => 'banner_page_title_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Page Title Color', 'insut' ),
                'output' => '.banner-title'
            ),
            array(
                'id'     => 'banner_page_breadcrumb_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Page Breadcrumb Color', 'insut' ),
                'output' => ' .banner-content .bread-crumbs, .banner-content .bread-crumbs a',
                'output_important' => true
            ),

            array(
                'id'     => 'banner_page_breadcrumb_icon_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Breadcrumb Icon Color', 'insut' ),
                'output' => '.page .banner-content .bread-crumbs i',
                'output_important' => true
            ),


            array(
                'id'    => 'banner_page_image_overlay',
                'type'  => 'color',
                'title' => esc_html__( 'Overlay Color', 'insut' ),
            ),

            array(
                'id'    => 'banner_page_image_opacity',
                'type'  => 'slider',
                'title' => esc_html__( 'Overlay Opacity', 'insut' ),
                'min'     => 0,
                'max'     => 1,
                'step'    => 0.1
            ),
            // service
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Service Banner', 'insut' ),
            ),
       
            array(
                'id'     => 'banner_service_title_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Service Title Color', 'insut' ),
                'output' => '.single-quomodo-service .banner-title'
            ),
            array(
                'id'     => 'banner_service_breadcrumb_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Service Breadcrumb Color', 'insut' ),
                'output' => '.single-quomodo-service .banner-content .bread-crumbs, .single-quomodo-service .banner-content .bread-crumbs a',
                'output_important' => true
            ),

            array(
                'id'     => 'banner_service_breadcrumb_icon_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Breadcrumb Icon Color', 'insut' ),
                'output' => '.single-quomodo-service .banner-content .bread-crumbs i',
                'output_important' => true
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Case Banner', 'insut' ),
            ),
       
            array(
                'id'     => 'banner_casee_title_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Case Title Color', 'insut' ),
                'output' => '.single-quomodo-case .banner-title'
            ),
            array(
                'id'     => 'banner_case_breadcrumb_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Case Breadcrumb Color', 'insut' ),
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