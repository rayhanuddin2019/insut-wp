<?php 

    $banner_image    = '';
    $banner_title    = get_the_title();
    $show            = insut_option('page_banner_show',1);
    $show_breadcrumb = insut_option('page_show_breadcrumb',1);
    $banner_class    = '';
    
     /* Title start */   

    if(insut_meta_option( get_the_ID(), 'banner_page_title' ) != ''){

        $banner_title = insut_meta_option( get_the_ID(), 'banner_page_title' );
        
     }elseif(insut_option( 'banner_page_title') !=''){

        $banner_title = insut_option( 'banner_page_title');
        
    }else{

        $banner_title = get_the_title(); 
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

