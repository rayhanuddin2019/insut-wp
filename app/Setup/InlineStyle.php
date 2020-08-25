<?php

namespace Insut\Setup;
use Insut\Core\Hook\Insut_Unyson_Google_Fonts;

/**
* Enqueue.
*/

class InlineStyle  {
    /**
    * register default hooks and actions for WordPress
    * @return
    */

    public function register()
    {
        add_action( 'wp_enqueue_scripts',  array( $this, 'dynamic_style' ) );
    }

    public function dynamic_style() {
       
        $unit                                = 'px';
        $preloader_bg                        = insut_option('preloader_bg');
        $body_text_color                     = insut_option('main_text_color');
   
        $custom_css = '';

	
       // Banner page Overlay Color Opacity
       if(is_page()){

            $banner_page_image_overlay  = '';
            $banner_page_image_opacity  = '';

            if(insut_meta_option( get_the_ID(), 'banner_page_image_overlay' ) != ''){
                $banner_page_image_overlay =  insut_meta_option( get_the_ID(), 'banner_page_image_overlay' );
            }elseif(insut_option( 'banner_page_image_overlay' ) !=''){
              $banner_page_image_overlay =  insut_option( 'banner_page_image_overlay' );
            }

            if(insut_meta_option( get_the_ID(), 'banner_page_image_opacity' ) != ''){
                $banner_page_image_opacity =  insut_meta_option( get_the_ID(), 'banner_page_image_opacity' );
            }elseif(insut_option( 'banner_page_image_opacity' ) !=''){
              $banner_page_image_opacity =  insut_option( 'banner_page_image_opacity' );
            }

            // color
            if($banner_page_image_overlay != ''){
                $custom_css .="
                .page .bg-overlay:before{
                      background:$banner_page_image_overlay;
                  }
              ";
            }
             // opacity
            if($banner_page_image_opacity != ''){
                $custom_css .="
                .page .bg-overlay:before{
                      opacity:$banner_page_image_opacity;
                  }
              ";
            }
          
          
       }else{
           
        $banner_blog_image_overlay  = '';
        $banner_blog_image_opacity  = '';

        if(insut_option( 'banner_blog_image_overlay' ) !=''){
          $banner_blog_image_overlay =  insut_option( 'banner_blog_image_overlay' );
        }

        if(insut_option( 'banner_blog_image_opacity' ) !=''){
          $banner_blog_image_opacity =  insut_option( 'banner_blog_image_opacity' );
        }

        // color
        if($banner_blog_image_overlay != ''){
            $custom_css .="
            .blog-banner .bg-overlay:before{
                  background:$banner_blog_image_overlay;
              }
          ";
        }
         // opacity
        if($banner_blog_image_opacity != ''){
            $custom_css .="
            .blog-banner .bg-overlay:before{
                  opacity:$banner_blog_image_opacity;
              }
          ";
        }  

       } 
       // page banner end
       //case study 
       if(is_singular('quomodo-case')){

        $banner_page_image_overlay  = '';
        $banner_page_image_opacity  = '';

        if( insut_meta_option( get_the_ID(), 'banner_case_image_overlay' ) != '' ){
            $banner_page_image_overlay =  insut_meta_option( get_the_ID(), 'banner_case_image_overlay' );
        }

        if( insut_meta_option( get_the_ID(), 'banner_case_image_opacity' ) != '' ){
            $banner_page_image_opacity =  insut_meta_option( get_the_ID(), 'banner_case_image_opacity' );
        }

        // color
        if( $banner_page_image_overlay != '' ){
            $custom_css .="
            .single-quomodo-case .bg-overlay:before{
                  background:$banner_page_image_overlay;
              }
          ";
        }
         // opacity
        if( $banner_page_image_opacity != '' ){
            $custom_css .="
            .single-quomodo-case .bg-overlay:before{
                  opacity:$banner_page_image_opacity;
              }
          ";
        }
      

       }

        //Service
        if( is_singular('quomodo-service') ){

          $banner_page_image_overlay  = '';
          $banner_page_image_opacity  = '';
  
          if( insut_meta_option( get_the_ID(), 'banner_service_image_overlay' ) != '' ){
              $banner_page_image_overlay =  insut_meta_option( get_the_ID(), 'banner_service_image_overlay' );
          }
  
          if( insut_meta_option( get_the_ID(), 'banner_service_image_opacity' ) != '' ){
              $banner_page_image_opacity =  insut_meta_option( get_the_ID(), 'banner_service_image_opacity' );
          }
  
          // color
          if( $banner_page_image_overlay != '' ){
              $custom_css .="
              .single-quomodo-service .bg-overlay:before{
                    background:$banner_page_image_overlay;
                }
            ";
          }
           // opacity
          if( $banner_page_image_opacity != '' ){
              $custom_css .="
              .single-quomodo-service .bg-overlay:before{
                    opacity:$banner_page_image_opacity;
                }
            ";
          }
        
  
         }
        
          /*----------------------------------
            CSS ALL DEVICE
        -----------------------------------*/
        if( insut_option( 'custom_css' ) ){
            $custom_css .= insut_option( 'custom_css' );
        }
        /*----------------------------------
            CSS IPAD DEVICE
        -----------------------------------*/
        if( insut_option( 'custom_css_ipad' ) ){
            $custom_css.="
                @media (min-width: 1024px) and (max-width: 1400px) {
                    ".insut_option( 'custom_css_ipad' )."
                }
            ";
        }
        /*----------------------------------
            CSS TABLET DEVICE
        -----------------------------------*/
        if( insut_option( 'custom_css_tablet' ) ){
            $custom_css.="
                @media (min-width: 768px) and (max-width: 991px) {
                    ".insut_option( 'custom_css_tablet' )."
                }
            ";
        }
        /*----------------------------------
            CSS MOBILE DEVICE
        -----------------------------------*/
        if( insut_option( 'custom_css_mobile' ) ){
            $custom_css.="
                @media only screen and (max-width: 767px) {
                    ".insut_option( 'custom_css_mobile' )."
                }
            ";
        }

        wp_add_inline_style( 'insut-theme', $custom_css );
    }

}