<?php 

    // social
    CSF::createSection( INSUT_OPTION_KEY, array(
        'title'  => esc_html__( 'PortFolio', 'insut' ),
        'icon'   => 'fa fa-briefcase',
        'fields' => array(
            array(
                'id'        => 'portfolio_tab_list',
                'type'      => 'group',
                'title'      => esc_html__( 'PortFolio', 'insut' ),
                'fields'    => array(
                 
                  array(
                    'id'    => 'tab_menu',
                    'type'  => 'text',
                    'title' => esc_html__( 'Menu / Category Name', 'insut' ),
                  ),
                  array(
                    'id'    => 'tab_menu_slug',
                    'type'  => 'text',
                    'title' => esc_html__( 'Menu Slug', 'insut' ),
                    'help' => esc_html__( 'Write down Slug with hypen and lowwecase latter', 'insut' ),
                    
                  ),
               
                  array(
                    'id'        => 'portfolio_list',
                    'type'      => 'group',
                    'title' => esc_html__( 'PortFolio List', 'insut' ),
                    'fields'    => array(
                      array(
                        'id'    => 'title',
                        'type'  => 'text',
                        'title' => esc_html__( 'Title', 'insut' ),
                      ),
                      array(
                        'id'    => 'sub_title',
                        'type'  => 'text',
                        'title' => esc_html__( 'Sub Title', 'insut' ),
                      ),
                      array(
                        'id'           => 'image',
                        'type'         => 'upload',
                        'title'        => esc_html__( 'Screenshot', 'insut' ),
                        'library'      => 'image',
                        'placeholder'  => 'http://',
                        'button_title' => esc_html__( 'Add Image', 'insut' ),
                        'remove_title' => esc_html__( 'Renmove Image', 'insut' ),
                      ),
                      array(
                        'id'           => 'overlay_image',
                        'type'         => 'upload',
                        'title'        => esc_html__( 'Hover Shape image', 'insut' ),
                        'library'      => 'image',
                        'placeholder'  => 'http://',
                        'button_title' => esc_html__( 'Add Image', 'insut' ),
                        'remove_title' => esc_html__( 'Renmove Image', 'insut' ),
                      ),
                      array(
                        'id'    => 'date',
                        'type'  => 'date',
                        'title' => esc_html__( 'Date', 'insut' ),
                        'settings' => array(
                          'dateFormat'      => 'yy/mm/dd',
                          
                        )
                      ),
                    
                    ),
                  ),
                 
                ),
              
              ),
              

        ),

    ) );