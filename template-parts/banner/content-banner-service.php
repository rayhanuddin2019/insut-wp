<?php 

    $banner_image    = '';
    $banner_title    = str_replace(['{','}'],['',''], get_the_title());
    $show            = insut_option('service_banner_show',1);
    $show_breadcrumb = insut_option('service_show_breadcrumb',1);
    $banner_class    = '';
    
     /* Title start */   

    if(insut_meta_option( get_the_ID(), 'banner_service_title' ) != ''){

        $banner_title = insut_meta_option( get_the_ID(), 'banner_service_title' );
        
    }

    /* Title end */
  

?>

<?php if($show): ?>

    <section class="page-banner banner-page bg-overlay">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="banner-content">
                         <h3 class="banner-title">
                            <?php echo esc_html($banner_title); ?>
                         </h3>
                         <div class="bread-crumbs">

                           <?php if($show_breadcrumb): ?>
                              <?php insut_get_breadcrumbs(' <i class="icofont-arrow-right"></i> '); ?>
                           <?php endif; ?> 

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>  
   
<?php endif; ?>

