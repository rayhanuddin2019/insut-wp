<?php
    // get header customizer option 
  
   
    $logo              = INSUT_IMG . '/logo2.png';
    $insut_logo_url    = insut_option( 'dark_logo', $logo );
    $button_enable     = insut_option('button_enable','0');
    $button_link       = insut_option('button_link','#');
    $button_text       = insut_option('button_text','Contact Us');
    $enable_flag       = insut_option('enable_flag','0');
    $flag_url       = insut_option('flag_url','#');
    $flag_label       = insut_option('flag_label');
    $flag_image        = insut_option('flag_image','#');
    $flag              = INSUT_IMG . '/home2/flag.png';

    if(isset($flag_image['url']) && $flag_image['url'] !=''){
      
        $flag = $flag_image['url'];
    }
   
    $header_contact_phone       = insut_option('header_contact_phone','1');
    $header_contact_phone_label = insut_option('header_contact_phone_label');
    $header_contact_phone_value = insut_option('header_contact_phone_value');

    $header_contact_email       = insut_option('header_contact_email','1');
    $header_contact_email_label = insut_option('header_contact_email_label');
    $header_contact_email_value = insut_option('header_contact_email_value');

    $header_contact_address       = insut_option('header_contact_address','1');
    $header_contact_address_label = insut_option('header_contact_address_label');
    $header_contact_address_value = insut_option('header_contact_address_value');

    $enable_header_social = insut_option('enable_header_social',1);
    $social_link          = insut_option('social_link',[]);
   

?>

        <!-- Main Header Start -->
        <header class="header-02">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Topbar Start -->
                        <div class="inner-topbar clearfix">
                           <?php if($header_contact_address): ?>
                                <div class="top-left">
                                    <h5><i class="insut-Icon12"></i><a href="mailto:insut@gmail.com"><?php echo esc_html($header_contact_email_value); ?></a></h5>
                                    <h5><i class="insut-Icon13"></i><?php echo esc_html($header_contact_address_value); ?></h5>
                                </div>
                            <?php endif; ?>
                                <div class="top-right">
                                <?php if($enable_header_social && is_array($social_link)): ?>
                                    <ul class="topbar-socail">
                                            <?php foreach($social_link as $social_item): ?> 
                                                <li><a href="<?php echo esc_url($social_item['bookmark_url']); ?>"><i class="<?php echo esc_attr($social_item['bookmark_icon']); ?>"></i></a>
                                            <?php endforeach; ?> 
                                    </ul>
                                    <?php endif; ?>
                                    <?php if($enable_flag): ?>
                                      <a href="<?php echo esc_url($flag_url); ?>" class="language"><img src="<?php echo esc_url($flag); ?>" alt=" <?php echo esc_attr( $flag_label ); ?> "> <?php echo esc_html( $flag_label ); ?> </a>
                                    <?php endif; ?>
                                </div>
                            
                        </div>
                        <!-- Topbar End -->
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 noPadding">
                        <nav class="navbar navbar-two navbar-expand-lg">
                                <!-- logo Start-->
                                <?php echo insut_text_logo()?'<h1 class="logo-title">':''; ?> 
                                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                                        <?php if(insut_text_logo()): ?> 
                                            <?php echo esc_html(insut_text_logo()); ?>
                                        <?php else: ?>
                                            <img src="<?php echo esc_url($insut_logo_url); ?>" alt="<?php echo get_bloginfo('name') ?>">
                                        <?php endif; ?>
                                    </a>
                               <?php echo insut_text_logo()?'</h1>':''; ?>
                                <!-- logo End-->
                                <?php if($header_contact_phone): ?>
                                <!-- Info Start-->
                                <div class="single-info">
                                    <i class="insut-Icon10"></i>
                                    <h5>
                                        <span> 
                                            <?php echo esc_html($header_contact_phone_label); ?>
                                        </span>
                                        <?php echo esc_html($header_contact_phone_value); ?>
                                    </h5>
                                </div>
                                <!-- Info End-->
                                <?php endif; ?>
                            <!-- Mobile Btn Start -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Mobile Btn End -->

                            <!-- Nav Menu Start -->
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <?php get_template_part( 'template-parts/navigations/nav', 'primary' ); ?>
                            </div>
                            <!-- Nav Menu End -->
                            <?php if($button_enable): ?>  
                                <!-- Quote Btn Start -->
                                <a href="<?php echo esc_url($button_link); ?>" class="get-a-quote">
                                    <i class="icofont-ui-user"></i>
                                    <?php echo esc_html($button_text); ?>
                                </a>
                                <!-- Quote Btn End -->
                            <?php endif; ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Header End -->

   




