<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $insut_profile_options = 'insut_profile_options';

    //
    // Create profile options
    CSF::createProfileOptions( $insut_profile_options, array(
      'data_type' => 'serialize', // The type of the database save options. `serialize` or `unserialize`
    ) );

    //
    
  

}
