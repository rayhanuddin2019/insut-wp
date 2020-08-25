<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $post_prefix = 'insut_post_options';
  
    //
    // Create a metabox for post
    CSF::createMetabox( $post_prefix, array(
      'title'     => 'Settings',
      'post_type' => 'post',
    ) );
    
    CSF::createSection( $post_prefix, array(
      'title'  =>  esc_html__( 'General', 'insut'),
      'fields' => array(
            
        array(
          'id'      => 'image_icon',
          'type'    => 'icon',
          'title'   => esc_html__( 'Icon', 'insut' ),
          'desc'    => esc_html__( 'Set the Thumb icon ', 'insut' ),
        ),
 
         
      )
    ) );
    //
    // Header section
    CSF::createSection( $post_prefix, array(
      'title'  =>  esc_html__( 'Video', 'insut'),
      'fields' => array(
  
        array(
          'id'    => 'feature_video_id',
          'type'  => 'text',
          'title'  =>  esc_html__( 'Video Url', 'insut'),
          'desc'  =>  esc_html__( 'Provide Url here From Youtube', 'insut'),
        ),
  
      )
    ) );

    CSF::createSection( $post_prefix, array(
      'title'  =>  esc_html__( 'Audio', 'insut'),
      'fields' => array(
  
            array(
              'id'    => 'feature_audio',
              'type'  => 'text',
              'title'  =>  esc_html__( 'Audio URL', 'insut'),
              'desc'  =>  esc_html__( 'Provide SoundCloud audio url', 'insut'),
            ),
  
      )
    ) );

  
  
  }
  