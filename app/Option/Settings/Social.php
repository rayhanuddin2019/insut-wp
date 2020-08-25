<?php 

    // social
    CSF::createSection( INSUT_OPTION_KEY, array(
        'title'  => esc_html__( 'Social', 'insut' ),
        'icon'   => 'fa fa-share-alt',
        'fields' => array(
            array(
                'id'           => 'social_share',
                'type'         => 'group',
                'title'        => esc_html__( 'Add Social Bookmark', 'insut' ),
                'button_title' => esc_html__( 'Add New Bookmark', 'insut' ),
                'desc'         => esc_html__( 'Set the social bookmark icon and link here. Esay to use it just click the add icon button and search your social icon and set the url for the profile .', 'insut' ),
                'fields'       => array(
                   
                    array(
                        'id'      => 'bookmark_icon',
                        'type'    => 'icon',
                        'title'   => esc_html__( 'Social Icon', 'insut' ),
                        'desc'    => esc_html__( 'Set the social profile icon like ( facebook, twitter, linkedin, youtube ect. )', 'insut' ),
                        'default' => 'fa fa-facebook'
                    ),

                   
                    array(
                        'id'          => 'social_type',
                        'type'        => 'select',
                        'title'       => 'Select',
                        'placeholder' => esc_html__( 'Select an type' , 'insut' ),
                        'options'     => insut_social_share_list(),
                        
                      ),
                ),
            ),

            array(
                'id'           => 'social_link',
                'type'         => 'group',
                'title'        => esc_html__( 'Add Social Link', 'insut' ),
                'button_title' => esc_html__( 'Add New Bookmark', 'insut' ),
                'desc'         => esc_html__( 'Set the social bookmark icon and link here. Esay to use it just click the add icon button and search your social icon and set the url for the profile .', 'insut' ),
                'fields'       => array(
                   
                    array(
                        'id'      => 'bookmark_icon',
                        'type'    => 'icon',
                        'title'   => esc_html__( 'Social Icon', 'insut' ),
                        'desc'    => esc_html__( 'Set the social profile icon like ( facebook, twitter, linkedin, youtube ect. )', 'insut' ),
                        'default' => 'fa fa-facebook'
                    ),

                    array(
                        'id'      => 'bookmark_url',
                        'type'    => 'text',
                        'title'   => esc_html__( 'Profile Url', 'insut' ),
                        'desc'    => esc_html__( 'Type the social profile url lik http://facebook.com/yourpage. also you can add (facebook, twitter, linkedin, youtube etc.)', 'insut' ),
                        'default' => 'http://facebook.com/quomodosoft'
                    ),
                   
                ),
            ),
            array(
                'id'      => 'enable_header_social',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Header Social', 'insut' ),
                'desc'    => esc_html__( 'Set the header social hide or not.', 'insut' ),
                'default' => true,
            ),
            
            array(
                'id'      => 'post_social_share_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Blog Social Share', 'insut' ),
                'desc'    => esc_html__( 'Set the Social social hide or not.', 'insut' ),
                'default' => false,
            ),
            array(
                'id'      => 'enable_footer_social',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Footer Social', 'insut' ),
                'desc'    => esc_html__( 'Set the footer social hide or not.', 'insut' ),
                'default' => false,
            ),

            array(
                'id'         => 'social_color',
                'type'       => 'color',
                'title'      => esc_html__( 'Footer Social Color', 'insut' ),
                'desc'       => esc_html__( 'Set the footer social bookmark color from here.', 'insut' ),
                'default'    => '',
                'dependency' => array( 'enable_footer_social', '==', 'true' ),
            ),

            array(
                'id'         => 'social_hover_color',
                'type'       => 'color',
                'title'      => esc_html__( 'Footer Social Hover Color', 'insut' ),
                'desc'       => esc_html__( 'Set the footer social bookmark hover color from here.', 'insut' ),
                'default'    => '',
                'dependency' => array( 'enable_footer_social', '==', 'true' ),
            ),

        ),

    ) );