<?php 


        // pre-loader
        CSF::createSection( INSUT_OPTION_KEY, array(
       
			'title'   => esc_html__( 'Preloader', 'insut' ),
            'icon'   => 'fa fa-spinner',
		    'fields' => array(
				array(
				  'type'    => 'subheading',
				  'content' => esc_html__( 'Preloader Type', 'insut' ),
				),
				array(
					'id'      => 'enable_preloader',
					'type'    => 'switcher',
					'title'   => esc_html__( 'Enable Preloader', 'insut' ),
					'desc'    => esc_html__( 'If you want to enable or disable preloader you can set ( YES / NO )', 'insut' ),
					'default' => true,
				),
				array(
					'id'      => 'prloader_style',
					'type'    => 'image_select',
					'title'   => esc_html__( 'Select Preloader Style', 'insut' ),
					'desc'    => esc_html__( 'You can set specifc preloader style in every page form here.', 'insut' ),
					'options' => array(
					
					),
					'default'    => 'style_22',
					'dependency' => array( 'enable_preloader', '==', 'true' ),
				),
				array(
				  'type'    => 'subheading',
				  'content' => esc_html__( 'Preloader Background & Color', 'insut' ),
				),
				
				array(
					'id'      => 'preloader_bg',
					'type'    => 'background',
					'title'   => esc_html__( 'Preloader Background', 'insut' ),
					'class'   => '.loaders-container',
					'output'  => '.loaders-container',
					'desc'    => esc_html__( 'Upload a new background image or select color to set the preloader background.', 'insut' ),
					'default' => array(
						'image'      => '',
						'repeat'     => 'repeat',
						'position'   => 'center center',
						'attachment' => 'scroll',
						'size'       => '',
						'color'      => '#ffffff',
					),
				),

				array(
					'id'                    => 'preloader_text_color',
					'type'                  => 'background',
					'title'                 => esc_html__( 'Preloader Text Color', 'insut' ),
					'desc'                  => esc_html__( 'Set the preloader text color', 'insut' ),
					'default'               => '#fff',
					'background_image'      => false,
					'background_position'   => false,
					'background_repeat'     => false,
					'background_attachment' => false,
					'background_size'       => false,
					'output'                => '.loaders-container .loader__wrap .line',
					
				),
		    ),
        ) ); 