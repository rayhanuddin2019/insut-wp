<?php
    // get header customizer option 
  
   
    $logo              = INSUT_IMG . '/logo2.png';
    $insut_logo_url    = insut_option( 'dark_logo', $logo );
    
    if($insut_logo_url == ''){
        $insut_logo_url = $logo;
    }
    
    $header_contact    = insut_option('header_contact_info',[]);


?>
        <!-- Main Header Start -->
        <header class="header-03">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="topbar-wrap clearfix">
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
                            <?php if(is_array( $header_contact)): ?>  
                                <!-- Info Start-->
                                <?php foreach($header_contact as $item): ?>
                                    <div class="single-info">
                                         <?php if($item['icon'] != ''): ?>
                                            <i class="<?php echo esc_attr($item['icon']); ?>"></i>  
                                         <?php else: ?> 
                                            <i class="insut-Icon10"></i>   
                                         <?php endif; ?>
                                        <h5><span> <?php echo esc_html($item['label']) ?> </span> <?php echo esc_html($item['content']) ?></h5>
                                    </div>
                                <?php endforeach; ?>
                                <!-- Info End-->
                            <?php endif; ?>
                          
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Header End -->

   




