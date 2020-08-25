<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $post_prefix = 'insut_contacts_options';
  
    //
    // Create a metabox for post
    CSF::createMetabox( $post_prefix, array(
      'title'     => 'Settings',
      'post_type' => 'quomodo-contacts',
      'data_type' => 'unserialize'
    ) );
    
    CSF::createSection( $post_prefix, array(
      'title'  =>  esc_html__( 'General', 'insut'),
      'fields' => array(
      
        array(
          'id'          => 'insut_contacts_type',
          'type'        => 'select',
          'title'       => esc_html__( 'Contact Type', 'insut' ),
          'desc'        => esc_html__( 'Set Contacts Type ', 'insut' ),
          'placeholder' => esc_html__( 'Select an Option', 'insut' ),
          'options'     => array(
            'branch'   => esc_html__( 'Branch', 'insut' ),
            'agent'    => esc_html__( 'Agents', 'insut' ),
            'provider' => esc_html__( 'Medical Provider', 'insut' ),
          ),
          'default'     => 'branch'
        ),

        array(
          'id'      => 'insut_address',
          'type'    => 'textarea',
          'title'   => esc_html__( 'Address', 'insut' ),
          
        ),

        array(
          
          'id'      => 'insut_email',
          'type'    => 'text',
          'title'   => esc_html__( 'Email', 'insut' ),
          
        ),

        array(
          'id'      => 'insut_phone',
          'type'    => 'text',
          'title'   => esc_html__( 'TelePhone', 'insut' ),
          
        ),

        array(
          'id'      => 'insut_working_hours',
          'type'    => 'text',
          'title'   => esc_html__( 'Working Hours', 'insut' ),
        ),
        
         
      )
    ) );
    //

  }
  