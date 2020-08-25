<?php 

    // Blog a top-tab
    CSF::createSection( INSUT_OPTION_KEY, array(
        'id'    => 'blog_tab', // Set a unique slug-like ID
        'title'  => esc_html__( 'Blog', 'insut' ),
        'icon'     => 'fa fa-book',
    ) ); 
    // Blog
    CSF::createSection( INSUT_OPTION_KEY, array(
        'parent' => 'blog_tab', // The slug id of the parent section
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'General', 'insut' ),
        'fields' => array(
          
            array(
                'id'          => 'blog_sidebar',
                'type'        => 'select',
                'title'       => esc_html__('Blog Sidebar', 'insut'),
                'placeholder' => 'Select an option',
                'options'     => array(
                    '1' => esc_html__('No sidebar', 'insut'),
                    '2' => esc_html__('Left Sidebar', 'insut'),
                    '3' => esc_html__('Right Sidebar', 'insut'),
                ),
                'default'     => '3'
              ),

           
            array(
                'id'      => 'blog_box_shadow',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Box Shadow', 'insut' ),
                'default' => true
            ), 
            array(
                'id'      => 'blog_author',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Author', 'insut' ),
                'default' => false
            ), 
            
            array(
                'id'      => 'blog_author_image',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Author image', 'insut' ),
                'default' => false
            ), 

            array(
                'id'      => 'blog_date',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Date', 'insut' ),
                'default' => true
            ),
            
            array(
                'id'      => 'blog_comment',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Comment', 'insut' ),
                'default' => true
            ), 
            
            array(
                'id'      => 'blog_views',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Views', 'insut' ),
                'default' => false
            ),
            
            array(
                'id'      => 'blog_category',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Category', 'insut' ),
                'default' => true
            ),
            
            array(
                'id'      => 'blog_category_single',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Category Single', 'insut' ),
                'default' => false
            ),
            array(
                'id'      => 'blog_readmore',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Readmore', 'insut' ),
                'default' => true
            ), 
            array(
                'id'      => 'blog_readmore_text',
                'type'    => 'text',
                'title'   => esc_html__( 'Blog Readmore Text', 'insut' ),
                'default' => esc_html__( 'Read More', 'insut' ),
            ),
          
            array(
                'id'      => 'blog_post_nav',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Navigation', 'insut' ),
                'default' => true
            ),

            array(
            'id'          => 'blog_post_nav_alignment',
            'type'        => 'select',
            'title'   => esc_html__( 'Navigation Alignment', 'insut' ),
            'placeholder' => 'Select an option',
            'options'     => array(
                'text-left'  => esc_html__( 'Left', 'insut' ),
                'text-center' => esc_html__( 'Center', 'insut' ),
                'text-right'    => esc_html__( 'Right', 'insut' ),
            ),
            'default'     => 'text-center'
            ),
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog & Page Default Options', 'insut' ),
            ),
            
            array(
                'id'      => 'blog_excerpt_word',
                'type'    => 'number',
                'title'   => esc_html__( 'Blog Excerpt Word', 'insut' ),
                'desc'    => esc_html__( 'Set the words that how many words you want to show in every blog post item.', 'insut' ),
                'default' => '30',
            ),
       

        )
    ) ); 
     // fav icon
    CSF::createSection( INSUT_OPTION_KEY, array(
        'parent' => 'blog_tab', // The slug id of the parent section  
        'title'  => esc_html__('Sidebar Style','insut'),
        'icon'   => 'fa fa-image',
        'fields' => array(

            array(
                'id'      => 'news__sidebars_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Sidebar Background', 'insut' ),
                'desc'    => esc_html__( 'Upload a new background image to set the footer background.', 'insut' ),
                'default' => array(
                    'image'      => '',
                    'repeat'     => 'no-repeat',
                    'position'   => 'center center',
                    'attachment' => 'scroll',
                    'size'       => 'cover',
                   
                ),
                'output' => '.news__sidebars .widget'
            ),
           
            array(
                    'id'      => 'news__sidebars_padding_top',
                    'type'    => 'slider',
                    'title'   => esc_html__( 'Sidebar Padding Top', 'insut' ),
                    'min'     => 0,
                    'max'     => 200,
                    'step'    => 1,
                    'unit'    => 'px',
                    
            ),
            array(
                    'id'      => 'news__sidebars_padding_bottom',
                    'type'    => 'slider',
                    'title'   => esc_html__( 'Sidebar Padding Bottom', 'insut' ),
                    'min'     => 0,
                    'max'     => 200,
                    'step'    => 1,
                    'unit'    => 'px',
                    
            ),
        

         
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Text & Link Color', 'insut' ),
            ),
            array(
                'id'      => 'news__sidebars_widget_title_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Widget Title Color', 'insut' ),
                'desc'    => esc_html__( 'Set Sideabr widget title color form here.', 'insut' ),
                'output' => '.news__sidebars .widget .widget-title'
            ),
            array(
                'id'      => 'news__sidebars_widget_content_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Widget content Color', 'insut' ),
                'desc'    => esc_html__( 'Set footer widget content color form here.', 'insut' ),
                'output' => '.news__sidebars select , .news__sidebars .tagcloud a,.news__sidebars ul li a.rsswidget,.news__sidebars .widget,.news__sidebars ul li a,.news__sidebars .widget ul li a.url'
            ),
            array(
                'id'     => 'sidebar_border_color',
                'type'   => 'border',
                'title'  => esc_html__( 'Border Color', 'insut' ),
                'output' => '.news__sidebars ul li'
            ),
            array(
                'id'      => 'sidebar_widget_title_margin_top',
                'type'    => 'slider',
                'title'   => esc_html__( 'Widget Title Margin Top', 'insut' ),
                'min'     => 0,
                'max'     => 200,
                'step'    => 1,
                'unit'    => 'px',
                
          ),
            array(
                'id'      => 'sidebar_widget_title_margin_bottom',
                'type'    => 'slider',
                'title'   => esc_html__( 'Widget Title Margin bottom', 'insut' ),
                'min'     => 0,
                'max'     => 200,
                'step'    => 1,
                'unit'    => 'px',
                
          ),
       
            array(
                'id'      => 'sidebars_link_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Sideber links color', 'insut' ),
                'desc'    => esc_html__( 'Set the Sidebar area link color', 'insut' ),
                'output' => '.news__sidebars .single-blog-post a .news__sidebars .tagcloud a, .news__sidebars .widget a, .news__sidebars .widget ul li a.url,.news__sidebars .widget ul li a.rsswidget'
            ),

            array(
                'id'      => 'sidebar_link_hover',
                'type'    => 'color',
                'title'   => esc_html__( 'Sidebar links Hover color', 'insut' ),
                'desc'    => esc_html__( 'Set the footer area link hover color', 'insut' ),
                'output' => '.news__sidebars .single-blog-post a:hover, .news__sidebars .tagcloud a:hover,.news__sidebars .widget a:hover, .news__sidebars .widget ul li a.url:hover,.news__sidebars .widget ul li a.rsswidget:hover'
            ),

        )
    ) );