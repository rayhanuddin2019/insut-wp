<?php 
        
        // footer a top-tab
        CSF::createSection( INSUT_OPTION_KEY, array(
            'id'    => 'footer_tab',                         // Set a unique slug-like ID
            'title' => esc_html__( 'Footer', 'insut' ),
            'icon'  => 'fa fa-cog',
        ) ); 
         // top  call to action
         CSF::createSection( INSUT_OPTION_KEY, array(
            'parent' => 'footer_tab', // The slug id of the parent section
            'title'  => esc_html__( 'Call To Action', 'insut' ),
            'icon'   => 'fa fa-paint-brush',
            'fields' => array(

                array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Call To Action', 'insut' ),
                ),

                array(

                    'id'      => 'footer_call_to_action',
                    'type'    => 'switcher',
                    'title'   => esc_html__( 'Enable Call To Action', 'insut' ),
                    'default' => false

                ),
                
                array(
                    'id'          => 'footer_call_to_action_permited_pages',
                    'type'        => 'select',
                    'title'       => esc_html__( 'Permitted Pages', 'insut' ),
                    'chosen'      => true,
                    'multiple'    => true,
                    'placeholder' => esc_html__('Select pages','insut'),
                    'options'     => array(
                        'all'     => esc_html__( 'All', 'insut' ),
                        'post'    => esc_html__( 'Post', 'insut' ),
                        'page'    => esc_html__( 'Page', 'insut' ),
                        'service' => esc_html__( 'Service', 'insut' ),
                        'case'    => esc_html__( 'Case Study', 'insut' ),
                        'blog'    => esc_html__( 'Blog List', 'insut' ),
                    ),
                    'default'     => 'all'
                  ),
                  

                array(

                    'id'     => 'footer_call_to_action_bg',
                    'type'   => 'background',
                    'title'  => esc_html__( 'Call To Action Background ', 'insut' ),
                    'desc'   => esc_html__( 'Upload a new background image to set the footer background.', 'insut' ),
                    'output' => '.call-section-3',
             
                ),
                array(

                    'id'           => 'footer_call_to_action_left_image',
                    'type'         => 'upload',
                    'title'        => esc_html__( 'Upload left image', 'insut' ),
                    'library'      => 'image',
                    'placeholder'  => 'http://',
                    'button_title' => esc_html__( 'Add Image', 'insut' ),
                    'remove_title' => esc_html__( 'Remove Image','insut' ),

                ),

                array(
                    'id'         => 'footer_call_to_action_title',
                    'type'       => 'textarea',
                    'title'      => esc_html__( 'Title', 'insut' ),
                    'desc'       => esc_html__( 'Set title', 'insut' ),
                ),

                array(
                    'id'    => 'footer_call_to_action_icon',
                    'type'  => 'icon',
                    'title'      => esc_html__( 'Middle Icons', 'insut' ),
                  ),

                array(
                    'id'         => 'footer_call_to_action_button_title',
                    'type'       => 'text',
                    'title'      => esc_html__( 'Button Title', 'insut' ),
                    'desc'       => esc_html__( 'Set Button title', 'insut' ),
                ),  

                array(
                    'id'         => 'footer_call_to_action_button_link',
                    'type'       => 'text',
                    'title'      => esc_html__( 'Button link', 'insut' ),
                    'desc'       => esc_html__( 'Set Button link', 'insut' ),
                ),
                array(
                    'id'    => 'footer_call_to_action_button_icon',
                    'type'  => 'icon',
                    'title'      => esc_html__( 'Button Icons', 'insut' ),
                  ),

                array(
                    'id'         => 'footer_call_to_action_contact_title',
                    'type'       => 'text',
                    'title'      => esc_html__( 'Contact Label', 'insut' ),
                    'desc'       => esc_html__( 'Set Contact label', 'insut' ),
                ),  

                array(
                    'id'         => 'footer_call_to_action_contact_value',
                    'type'       => 'text',
                    'title'      => esc_html__( 'Contact value', 'insut' ),
                    'desc'       => esc_html__( 'Set Contact value', 'insut' ),
                ),

            ),
         ) ); 
        // Footer
        CSF::createSection( INSUT_OPTION_KEY, array(
            'parent' => 'footer_tab', // The slug id of the parent section
            'title'  => esc_html__( 'Footer layout & style', 'insut' ),
            'icon'   => 'fa fa-paint-brush',
            'fields' => array(
                array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Footer Settings', 'insut' ),
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
                    'id'      => 'footer_bg',
                    'type'    => 'background',
                    'title'   => esc_html__( 'Footer Background ', 'insut' ),
                    'desc'    => esc_html__( 'Upload a new background image to set the footer background.', 'insut' ),
                    'output' => '.footer-area',
             
                ),
                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'Footer Inner Box', 'insut' ),
                    'dependency' => array( 'footer_style', '==', 'style2' ),
                ),

                array(
                    'id'      => 'footer_inner_bg',
                    'type'    => 'background',
                    'title'   => esc_html__( 'Footer inner Background ', 'insut' ),
                    'desc'    => esc_html__( 'Upload a new background image to set the footer background.', 'insut' ),
                    'output' => '.footer-area .footer-bg-wrap',
                    'background_gradient'=> true,
                    'dependency' => array( 'footer_style', '==', 'style2' ),
             
                ),
                array(
                    'id'       => 'footer_area_inner_box_padding',
                    'type'     => 'spacing',
                    'title'   => esc_html__( 'Footer inner Padding', 'insut' ),
                    'output_mode' => 'padding',
                    'output'      => '.footer-area .footer-bg-wrap',
                    'dependency' => array( 'footer_style', '==', 'style2' ),
                  ),
                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'Footer Main Box', 'insut' ),
                ),
                array(
                    'id'       => 'footer_area_padding',
                    'type'     => 'spacing',
                    'title'   => esc_html__( 'Footer Padding', 'insut' ),
                    'output_mode' => 'padding',
                    'output'      => '.footer-01'
                  ),

 
                array(
                  'type'    => 'subheading',
                  'content' => esc_html__( 'Footer Text & Link Color', 'insut' ),
                ),

                array(
                    'id'      => 'footer_widget_title_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Widget Title Color', 'insut' ),
                    'desc'    => esc_html__( 'Set footer widget title color form here.', 'insut' ),
                    'output' => '.footer-area .widget-title'
                ),

                array(
                    'id'      => 'footer_widget_content_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Widget content Color', 'insut' ),
                    'output_important'=> true,
                    'desc'    => esc_html__( 'Set footer widget content color form here.', 'insut' ),
                    'output' => '
                        .footer-area .widget,
                         footer .widget ul li a ,
                        .footer-area div#calendar_wrap table > tbody > tr > td,
                        .footer-area div#calendar_wrap table > thead > tr > th, 
                        .footer-area div#calendar_wrap table > tbody > tr > th, 
                        .footer-area div#calendar_wrap table > tfoot > tr > th,
                        .footer-area div#calendar_wrap table > thead > tr > td, 
                        .footer-area div#calendar_wrap table > tbody > tr > td, 
                        .footer-area div#calendar_wrap table > tfoot > tr > td,
                        .footer-area div#calendar_wrap table > thead > tr > th,
                        .footer-area a,
                        .footer-area li,
                        .footer-area div#calendar_wrap caption,
                        .footer-area .content .title
                       

                    '
                ),
             
                array(
                    'id'       => 'footer_widget_title_margin',
                    'type'     => 'spacing',
                    'title'   => esc_html__( 'Widget title margin', 'insut' ),
                    'output_mode' => 'margin',
                    'output'      => '.footer-area .widget-title'
                ),

                array(
                    'id'       => 'footer_widget_content_margin',
                    'type'     => 'spacing',
                    'title'   => esc_html__( 'Widget content margin', 'insut' ),
                    'output_mode' => 'margin',
                    'output'      => '.footer-area .widget'
                ),

            
                array(
                    'id'      => 'footer_link_color',
                    'type'    => 'link_color',
                    'title'   => esc_html__( 'Footer links color', 'insut' ),
                    'desc'    => esc_html__( 'Set the footer area link color', 'insut' ),
                    'output_important'=> true,
                    'output' => '.footer-area .tagcloud a, .footer-area .widget a, .footer-area .widget ul li a.url,.footer-area .widget ul li a.rsswidget'
                ),

             
                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'Copyright & Back Button', 'insut' ),
                ),

                array(
                    'id'      => 'footer_copyright__bg',
                    'type'    => 'background',
                    'title'   => esc_html__( 'Copyright ', 'insut' ),
                    'desc'    => esc_html__( 'Upload a new background image to set the footer background.', 'insut' ),
                    'output' => '.copyright, .copyright-02',
                    
                ),

                array(
                    'id'       => 'copyright_padding',
                    'type'     => 'spacing',
                    'title'   => esc_html__( 'Copyright Padding', 'insut' ),
                    'output_mode' => 'padding',
                    'output'      => '.copyright'
                  ),

                  array(
                    'id'       => 'copyright_content_padding',
                    'type'     => 'spacing',
                    'title'   => esc_html__( 'Copyright content Padding', 'insut' ),
                    'output_mode' => 'padding',
                    'output'      => '.copyright p, .copyright-02 p'
                  ),
             

                array(
                    'id'      => 'footer_copyright_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Copyright Text Color', 'insut' ),
                    'desc'    => esc_html__( 'Set footer copyright text color form here.', 'insut' ),
                    'output'  => '.copyright p , .copyright-02 p'
                ),

                array(
                    'id'      => 'footer_copyright_link_color',
                    'type'    => 'link_color',
                    'title'   => esc_html__( 'Copyright link Color', 'insut' ),
                    'desc'    => esc_html__( 'Set footer copyright link color form here.', 'insut' ),
                    'output'  => '.copyright p a, .copyright-02 p a'
                ),

                array(
                    'id'     => 'footer_copyright_border',
                    'type'   => 'border',
                    'title'   => esc_html__( 'Copyright Border', 'insut' ),
                    'output'  => '.copyright, .copyright-02'
                  ),
                // back button
                array(
                    'id'      => 'footer_back_top_button',
                    'type'    => 'switcher',
                    'title'   => esc_html__( 'Enable Back to Button', 'insut' ),
                    'default' => true
                ), 

                array(
                    'id'     => 'footer_copyright_back_button',
                    'type'   => 'border',
                    'title'  => esc_html__( 'Back Button Border', 'insut' ),
                    'output' => '#backtotop'
                ),
    

                array(
                    'id'      => 'footer_copyright_icon_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Back Button Icon Color', 'insut' ),
                    'desc'    => esc_html__( 'Set footer Back Button icon color form here.', 'insut' ),
                    'output' => '#backtotop i'
                ),

                array(
                    'id'               => 'backbutton_button_color',
                    'type'             => 'background',
                    'output_important' => true,
                    'title'            => esc_html__( 'Button Background', 'insut' ),
                    'output'           => '#backtotop',
                    'output_mode'      => 'background-color',
                    'background_gradient' => true,
                   
                ),

                array(
                    'id'               => 'button_one_bghover_color',
                    'type'             => 'background',
                    'output_important' => true,
                    'title'            => esc_html__( 'Button Background hover bgColor', 'insut' ),
                    'output'           => '#backtotop:after',
                    'output_mode'      => 'background-color',
                    'background_gradient' => true,
                   
                ),
                  
            ),

        ) );

        // copyright
        CSF::createSection( INSUT_OPTION_KEY, array(
            'parent' => 'footer_tab', // The slug id of the parent section
            'title'  => esc_html__( 'Footer Copyright', 'insut' ),
            'icon'   => 'fa fa-copyright',
            'fields' => array(
                array(
                    'id'       => 'copyright_text',
                    'type'     => 'wp_editor',
                    'title'    => esc_html__( 'Footer Copyright', 'insut' ),
                    'desc'     => esc_html__( 'Set the footer copyright text','insut' ),
                    'settings' => array(
                        'textarea_rows' => 10,
                        'tinymce'       => true,
                        'media_buttons' => false,
                      ),
                      'default' => 'Copryright &copy; QuomodoTheme All Right Reserved.',
                ),

                array(
                    'id'      => 'enable_footer_logo',
                    'type'    => 'switcher',
                    'title'   => esc_html__( 'Footer Logo', 'insut' ),
                    'default' => true
                ),

                array(
                    'id'           => 'copyright_logo',
                    'type'         => 'upload',
                    'title'        => esc_html__( 'Copyright Logo', 'insut' ),
                    'library'      => 'image',
                    'placeholder'  => 'http://',
                    'button_title' => esc_html__( 'Add Image', 'insut' ),
                    'remove_title' => esc_html__( 'Remove Image', 'insut' ),
                ),

                 
    
      
            ),

        ) ); 