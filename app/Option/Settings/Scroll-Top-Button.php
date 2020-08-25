<?php 

  // scroll
  CSF::createSection( INSUT_OPTION_KEY, array(
    'title'  => esc_html__( 'Scroll Top Button', 'insut' ),
    'icon'   => 'fa fa-arrow-up',
    'fields' => array(
        array(
            'id'      => 'enable_scroll_top',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Scroll Top', 'insut' ),
            'desc'    => esc_html__( 'If you want to enable or disable scroll to top button you can set ( YES / NO )', 'insut' ),
            'default' => true,
        ),
      
    ),
    
) ); 