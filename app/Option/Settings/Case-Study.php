<?php 

CSF::createSection( INSUT_OPTION_KEY, array(
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'Case Study','insut'),
        'fields' => array(

            array(
                'id'      => 'case_name',
                'type'       => 'text',
                'title'      => esc_html__( 'Case Name', 'insut' ),
                'desc'       => esc_html__( 'Set case name', 'insut' ),
                
            ), 
            array(
                'id'      => 'case_menu',
                'type'       => 'text',
                'title'      => esc_html__( 'Case Menu Name', 'insut' ),
                'desc'       => esc_html__( 'Set Case Menu name', 'insut' ),
                
            ), 
            array(
                'id'         => 'case_slug_name',
                'type'       => 'text',
                'title'      => esc_html__( 'Case Slug Name', 'insut' ),
                'desc'       => esc_html__( 'Set Case slug ', 'insut' ),
              
            ),
           

            array(
                'id'      => 'case_exclude_from_search',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Search Exclude', 'insut' ),
                'default' => true
            ), 

            array(
                'id'      => 'case_details_page',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Details page', 'insut' ),
                'default' => true
            ), 
            array(
                'id'      => 'case_related_post',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Related Post', 'insut' ),
                'default' => false
            ), 
            array(
                'id'         => 'case_related_post_number',
                'type'       => 'text',
                'title'      => esc_html__( 'Related Case Study Limit', 'insut' ),
                'desc'       => esc_html__( 'Load related case Study Items by category ', 'insut' ),
              
            ),


        )
    ) ); 