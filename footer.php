
         <?php
               // footer style option
              $footer = insut_option("footer_style","style1");
              $override = insut_meta_option(get_the_id(),"override_footer",0);
              
            //   if( $override ){

            //      $footer = insut_meta_option(get_the_id(),"footer_style",'style4');

            //   }
              get_template_part( 'template-parts/footer/call-to-action' );
              get_template_part( 'template-parts/footer/footer', $footer );
         ?>

         <?php wp_footer(); ?>
      </div>
   </body>
</html>