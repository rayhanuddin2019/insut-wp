<?php
namespace Insut\Core\Hook;

/**
 * demo import.
 */
class Demo
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function register()
	{
	
       add_filter( 'fw:ext:backups-demo:demos', [$this,'backups_demos'] );

	}
	
    function backups_demos( $demos ) {
        
        $demo_content_installer	 = 'http://wp.quomodosoft.com/insut/demo-content';
        $demos_array			 = array(
            'default'			 => array(
                    'title'			 => esc_html__( 'Demo', 'insut' ),
                    'screenshot'	 => esc_url( $demo_content_installer ) . '/default/screenshot.jpg',
                    'preview_link'	 => esc_url( 'https://themeforest.net/user/quomodotheme/portfolio' ),
            ),
            
        );

        $download_url = esc_url( $demo_content_installer ) . '/download.php';
        
        foreach ( $demos_array as $id => $data ) {
            $demo = new \FW_Ext_Backups_Demo( $id, 'piecemeal', array(
                'url'		 => $download_url,
                'file_id'	 => $id,
            ) );
            $demo->set_title( $data[ 'title' ] );
            $demo->set_screenshot( $data[ 'screenshot' ] );
            $demo->set_preview_link( $data[ 'preview_link' ] );
            $demos[ $demo->get_id() ]	 = $demo;
            unset( $demo );
        }

        return $demos;
    }


}




