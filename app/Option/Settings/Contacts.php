<?php 

CSF::createSection( INSUT_OPTION_KEY, array(
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'Address Book','insut'),
        'fields' => array(

            array(
                'id'      => 'contacts_name',
                'type'       => 'text',
                'title'      => esc_html__( 'Contacts Name', 'insut' ),
                'desc'       => esc_html__( 'Set Contacts name', 'insut' ),
                
            ), 
            array(
                'id'      => 'contacts_menu',
                'type'       => 'text',
                'title'      => esc_html__( 'Contacts Menu Name', 'insut' ),
                'desc'       => esc_html__( 'Set Contacts Menu name', 'insut' ),
                
            ), 
            array(
                'id'         => 'contacts_slug_name',
                'type'       => 'text',
                'title'      => esc_html__( 'Contacts Slug Name', 'insut' ),
                'desc'       => esc_html__( 'Set contacts slug ', 'insut' ),
              
            ),

            array(
                'id'      => 'contacts_exclude_from_search',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Search Exclude', 'insut' ),
                'default' => true
            ), 

            array(
                'id'      => 'contacts_details_page',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Details page', 'insut' ),
                'default' => true
            ), 

        )
    ) ); 