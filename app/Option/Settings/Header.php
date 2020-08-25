<?php 

   // header a top-tab
    CSF::createSection( INSUT_OPTION_KEY, array(
        'id'    => 'header_tab', // Set a unique slug-like ID
        'title'   => esc_html__( 'Header', 'insut' ),
        'icon'     => 'fa fa-home',
    ) ); 


    // Header
    CSF::createSection( INSUT_OPTION_KEY, array(
        'parent' => 'header_tab', // The slug id of the parent section
        'title'   => esc_html__( 'Header', 'insut' ),
        'icon'   => 'fa fa-credit-card',
        'fields' => array(
 
            
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
            ),
   
            array(
                'id'      => 'transparent_header',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Disable Transparent Header', 'insut' ),
                'default' => true,
            ),
            array(
                'id'      => 'header_main_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Header Background', 'insut' ),
                'desc'    => esc_html__( 'Set the header background form here.', 'insut' ),
                'background_gradient'=> true,
                'output' =>'.header-01,.header-03,.header-02'
            ),
         
            // Button
            array(
                'id'      => 'button_enable',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Cta Button', 'insut' ),
                'desc'    => esc_html__( 'If you want to enable or disable button you can set ( YES / NO )', 'insut' ),
                'default' => false,
            ),
    
            array(
                'id'         => 'button_text',
                'type'       => 'text',
                'title'      => esc_html__( 'Button lebel', 'insut' ),
                'desc'       => esc_html__( 'Set the Button text.', 'insut' ),
                'default'    => esc_html__( 'Contact Us', 'insut' ),
                'dependency' => array( 'button_enable', '==', 'true' ),
            ),
    
            array(
                'id'         => 'button_link',
                'type'       => 'text',
                'title'      => esc_html__( 'Button url', 'insut' ),
                'desc'       => esc_html__( 'Set the Button url.', 'insut' ),
                'default'    => '#',
                'dependency' => array( 'button_enable', '==', 'true' ),
            ),
             
             //flag
            array(
                'id'      => 'enable_flag',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Flag', 'insut' ),
                'desc'    => esc_html__( 'If you want to enable or disable flag you can set ( YES / NO )', 'insut' ),
                'default' => false,
            ),

            array(
                'id'     => 'flag_label',
                'type'   => 'text',
                'title'  => esc_html__( 'Flag Label', 'insut' ),
                'default'  => esc_html__( 'English', 'insut' ),
                
            ),

            array(
                'id'         => 'flag_image',
                'type'       => 'media',
                'title'      => esc_html__( 'Flag Upload', 'insut' ),
                'desc'       => esc_html__( 'Set National Flag', 'insut' ),
            ),
           
            array(
                'id'     => 'flag_url',
                'type'   => 'text',
                'title'  => esc_html__( 'Flag Url', 'insut' ),
          
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Button Styling', 'insut' ),
            ),
        
            array(
                'id'     => 'button_one_text_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Button Color', 'insut' ),
                'output' => 'header .contact-btn,header .get-a-quote',
                'output_important' => true,
            ),  

            array(
                'id'     => 'button_one_texthover_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Button Hover Color', 'insut' ),
                'output' => 'header .contact-btn:hover,header .get-a-quote:hover',
                'output_important' => true,
               
            ), 

            array(

                'id'               => 'button_one_bg_color',
                'type'             => 'background',
                'output_important' => true,
                'title'            => esc_html__( 'Button Background Color', 'insut' ),
                'output'           => 'header .contact-btn ,header .get-a-quote',
                'output_mode'      => 'background-color',
                'background_gradient' => true,
                
            ), 
            
            array(
                'id'               => 'button_one_bghover_color',
                'type'             => 'background',
                'output_important' => true,
                'title'            => esc_html__( 'Button Background hover bgColor', 'insut' ),
                'output'           => 'header .contact-btn:after ,header .get-a-quote:after',
                'output_mode'      => 'background-color',
                'background_gradient' => true,
               
            ),

            array(
                'id'     => 'button_one_border',
                'type'   => 'border',
                'title'  => esc_html__( 'Button Border', 'insut' ),
                'output' => 'header .contact-btn , header .get-a-quote'
            ),
           
           
        )
    ) );
    CSF::createSection( INSUT_OPTION_KEY, array(
        'parent' => 'header_tab', // The slug id of the parent section
        'title'   => esc_html__( 'Contact Info', 'insut' ),
        'icon'   => 'fa fa-address-book',
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Topbar Contact', 'insut' ),
            ),

            array(

                'id'      => 'header_contact_phone',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Phone', 'insut' ),
                'desc'    => esc_html__( 'If you want to enable or disable phone you can set ( YES / NO )', 'insut' ),
                'default' => false,
            ),
    
            array(

                'id'         => 'header_contact_phone_label',
                'type'       => 'text',
                'title'      => esc_html__( 'Phone Label', 'insut' ),
                'desc'       => esc_html__( 'Give Phone Lavel here', 'insut' ),
                'default'    => esc_html__( 'Call Us', 'insut' ),
                'dependency' => array( 'header_contact_phone', '==', 'true' ),

            ),
            array(

                'id'         => 'header_contact_phone_value',
                'type'       => 'text',
                'title'      => esc_html__( 'Phone Number', 'insut' ),
                'desc'       => esc_html__( 'Give phone number here', 'insut' ),
                'default'    => esc_html__( '+00 823 468 739', 'insut' ),
                'dependency' => array( 'header_contact_phone', '==', 'true' ),

            ),

            // email
            array(

                'id'      => 'header_contact_email',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Email', 'insut' ),
                'desc'    => esc_html__( 'If you want to enable or disable email you can set ( YES / NO )', 'insut' ),
                'default' => false,
            ),
    
            array(

                'id'         => 'header_contact_email_label',
                'type'       => 'text',
                'title'      => esc_html__( 'Email Label', 'insut' ),
                'desc'       => esc_html__( 'Give Email Lavel here', 'insut' ),
                'default'    => esc_html__( 'Email Us', 'insut' ),
                'dependency' => array( 'header_contact_email', '==', 'true' ),

            ),

            array(

                'id'         => 'header_contact_email_value',
                'type'       => 'text',
                'title'      => esc_html__( 'Email', 'insut' ),
                'desc'       => esc_html__( 'Give email here', 'insut' ),
                'default'    => esc_html__( 'insut@gmail.com', 'insut' ),
                'dependency' => array( 'header_contact_email', '==', 'true' ),

            ),

            // address
            array(

                'id'      => 'header_contact_address',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Address', 'insut' ),
                'desc'    => esc_html__( 'If you want to enable or disable address you can set ( YES / NO )', 'insut' ),
                'default' => false,

            ),
    
            array(

                'id'         => 'header_contact_address_label',
                'type'       => 'text',
                'title'      => esc_html__( 'Address Label', 'insut' ),
                'desc'       => esc_html__( 'Give Address Lavel here', 'insut' ),
                'default'    => esc_html__( 'Address', 'insut' ),
                'dependency' => array( 'header_contact_address', '==', 'true' ),

            ),

            array(

                'id'         => 'header_contact_address_value',
                'type'       => 'textarea',
                'title'      => esc_html__( 'Email', 'insut' ),
                'desc'       => esc_html__( 'Give address here', 'insut' ),
                'default'    => esc_html__( '86 Mist Street, USA', 'insut' ),
                'dependency' => array( 'header_contact_address', '==', 'true' ),
            ),

          
       
        )   

        ) );
    // Main menu
    CSF::createSection( INSUT_OPTION_KEY, array(
        'parent' => 'header_tab', // The slug id of the parent section
        'title'      => esc_html__( 'Main Menu', 'insut' ),
        'icon'   => 'fa fa-sitemap',
        'fields' => array(
          
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Background', 'insut' ),
            ),
            
            array(
                'id'      => 'menu_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Menu Background', 'insut' ),
                'desc'    => esc_html__( 'Set the menu background form here.', 'insut' ),
                'output_important'=> true,
                'output' =>'.navbar.navbar-expand-lg'
            ),
            // header one
            array(
                'id'      => 'menu_shape_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Menu Shape Background', 'insut' ),
                'desc'    => esc_html__( 'Set the menu background shape form here.', 'insut' ),
                 
                'background_gradient'=> true,
                'output_important'=> true,
                'output' =>'.navbar.navbar-expand-lg:after'
            ),
           
         
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Color', 'insut' ),
            ),

            array(
                'id'      => 'menu_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Color', 'insut' ),
                'desc'    => esc_html__( 'Set the menu color by color picker', 'insut' ),
                'default' => '',
                'output'  => '.navbar-expand-lg .navbar-nav li .nav-link,.navbar-two.navbar-expand-lg .navbar-nav li .nav-link, .navbar-three.navbar-expand-lg .navbar-nav li .nav-link'
            ),
            array(
                'id'      => 'menu_hover',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Hover Color', 'insut' ),
                'desc'    => esc_html__( 'Set the menu hover color by color picker', 'insut' ),
                'default' => '',
                'output'  => '.navbar-expand-lg .navbar-nav li .nav-link:hover,.navbar-two.navbar-expand-lg .navbar-nav li .nav-link:hover,.navbar-three.navbar-expand-lg .navbar-nav li .nav-link:hover'
            ),
            array(
                'id'               => 'menu_hover_icon_bg',
                'type'             => 'background',
                'title'            => esc_html__( 'Menu Hover shape', 'insut' ),
                'desc'             => esc_html__( 'Set the menu hover top icon.', 'insut' ),
                'background_color' => true,
                'output'           => '.navbar-expand-lg .navbar-nav li .nav-link:before,.navbar-two.navbar-expand-lg .navbar-nav li .nav-link:before,.navbar-two.navbar-expand-lg .navbar-nav li .nav-link:after,.navbar-three.navbar-expand-lg .navbar-nav li .nav-link:before,.navbar-three.navbar-expand-lg .navbar-nav li .nav-link:after',
        
            ),
            
            //dropdown
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Dropdown Color & Hover', 'insut' ),
            ),
            array(
                'id'      => 'menu_dropdown_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Dropdown Color', 'insut' ),
                'desc'    => esc_html__( 'Set the menu dropdown color by color picker', 'insut' ),
                'default' => '',
                'output'  => '.navbar-expand-lg .navbar-nav li .dropdown-menu a'
            ),
            array(
                'id'      => 'menu_dropdown_hover__text_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Dropdown Hover Color', 'insut' ),
                'desc'    => esc_html__( 'Set the menu dropdown hover color by color picker', 'insut' ),
                'default' => '',
                'output'  => '.navbar-expand-lg .navbar-nav li .dropdown-menu li a:hover,.navbar-two.navbar-expand-lg .navbar-nav li .dropdown-menu li a:hover,.navbar-three.navbar-expand-lg .navbar-nav li .dropdown-menu li a:hover'
            ),
          						
            array(
                'id'      => 'menu_dropdown_item_background',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Dropdown Background Color', 'insut' ),
                'desc'    => esc_html__( 'Set the dropdown background color by color picker', 'insut' ),
                'default' => '',
                'output_mode' => 'background-color',
                'output'  => '.navbar-expand-lg .navbar-nav li .dropdown-menu li'
            ),

            array(
                'id'      => 'menu_dropdown__item_hover_background',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Dropdown Hover Background Color', 'insut' ),
                'desc'    => esc_html__( 'Set the dropdown background color by color picker', 'insut' ),
                'default' => '',
                'output_mode' => 'background-color',
                'output'  => '.navbar-expand-lg .navbar-nav li .dropdown-menu li:hover'
            ),
          

        )
    ) );

  

    
    // Logo section
    CSF::createSection( INSUT_OPTION_KEY, array(
        'parent' => 'header_tab', // The slug id of the parent section
        'title'  => 'Logos',
        'icon'   => 'fa fa-file-image-o',
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Main Image Logo', 'insut' ),
            ),
            array(
                'id'      => 'logo',
                'type'    => 'upload',
                'title'   => esc_html__( 'Upload Main Logo', 'insut' ),
                'desc'    => esc_html__( 'Upload main logo width 180px and height 65px.', 'insut' ),
                'default' => '',
                'help'    => esc_html__( 'Note: Please use logo image max width: 250px and max height 100px.', 'insut' ),
            ),
            array(
                'id'      => 'dark_logo',
                'type'    => 'upload',
                'title'   => esc_html__( 'Upload white Logo', 'insut' ),
                'desc'    => esc_html__( 'Upload Color logo width 180px and height 65px.', 'insut' ),
                'default' => '',
                'help'    => esc_html__( 'Note: Please use logo image max width: 250px and max height 100px.', 'insut' ),
            ),
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Text Logo Color', 'insut' ),
            ),
            array(
                'id'      => 'logo_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Text Logo Color', 'insut' ),
                'desc'    => esc_html__( 'Set the text logo color by color picker.', 'insut' ),
                'output' => '.logo-title a',
            ),
           
           

        )
    ) );