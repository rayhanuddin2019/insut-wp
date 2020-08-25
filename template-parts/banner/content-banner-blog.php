<?php 


      $banner_image             = '';
      $banner_title             = get_bloginfo( 'name' );
      $show                     = insut_option('blog_banner_show',1);
      $show_breadcrumb          = insut_option('blog_show_breadcrumb',1);
      $banner_class             = '';

      /* Title start */   

      if( insut_option( 'banner_blog_title') != '' ){

         $banner_title = insut_option( 'banner_blog_title');
            
      }

      /* Title end */
     
?>
<?php if($show): ?>

   
<div class="blog-banner">

      <section class="page-banner bg-overlay">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="banner-content">
                         <h3 class="banner-title">
                                 <?php 
                                       if(is_archive()){
                                          the_archive_title();
                                       }else{
                                          echo esc_html($banner_title);
                                       }
                                 ?> 
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
      
</div>

<?php endif; ?>

