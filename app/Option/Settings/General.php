<?php 

CSF::createSection( INSUT_OPTION_KEY, array(
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'General','insut'),
        'fields' => array(

            array(
                'id'      => 'general_text_logo',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Text Logo', 'insut' ),
                'default' => false
            ), 

            array(
                'id'         => 'general_blog_title',
                'type'       => 'text',
                'title'      => esc_html__( 'Blog Title', 'insut' ),
                'desc'       => esc_html__( 'Set global blog title', 'insut' ),
                'default'    => esc_html__( 'Blog', 'insut' ),
                'dependency' => array( 'general_text_logo', '==', 'true' )
            ),

            array(
                'id'      => 'breadcrumb_enable',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Breadcrumb', 'insut' ),
                'default' => true
            ), 

            array(
                'id'         => 'general_breadcrumb_limit',
                'type'       => 'number',
                'title'      => esc_html__( 'Breadcrumb limit', 'insut' ),
                'desc'       => esc_html__( 'Set the breadcrump text limit', 'insut' ),
                'default'    => '50',
                'dependency' => array( 'breadcrumb_enable', '==', 'true' )
                
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Contact form', 'insut' ),
            ),

            array(
                'id'      => 'contact_form_enable',
                'type'    => 'switcher',
                'title'   => esc_html__( 'PopUp Contact', 'insut' ),
                'default' => true
            ),
           
            array(
                'id'          => 'contact_form_shortcode',
                'type'        => 'select',
                'title'       => esc_html__( 'Select Contact Shortcode', 'insut' ),
                'options'     => insut_get_contact_forms_seven_list(),
                
              ),

        )
    ) ); 