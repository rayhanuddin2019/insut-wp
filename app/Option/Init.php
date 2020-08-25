<?php 

if( !class_exists( 'CSF' ) ) {
  return;
}

 /*
  Include all option file here
 */

 /* Theme menu page */

 require_once INSUT_THEME_DIR . '/app/Option/Parent-page.php';
/* Theme Option  Settings*/
 require_once INSUT_THEME_DIR . '/app/Option/Settings/General.php';
 require_once INSUT_THEME_DIR . '/app/Option/Settings/Style.php';
 require_once INSUT_THEME_DIR . '/app/Option/Settings/Header.php';
// require_once INSUT_THEME_DIR . '/app/Option/Settings/Fav-Icon.php';
 require_once INSUT_THEME_DIR . '/app/Option/Settings/Banner.php';
 require_once INSUT_THEME_DIR . '/app/Option/Settings/Blog.php';
 require_once INSUT_THEME_DIR . '/app/Option/Settings/Post-Page.php';
 require_once INSUT_THEME_DIR . '/app/Option/Settings/Scroll-Top-Button.php';
 require_once INSUT_THEME_DIR . '/app/Option/Settings/Pre-Loader.php';
 require_once INSUT_THEME_DIR . '/app/Option/Settings/Elementor-Builder.php';
 require_once INSUT_THEME_DIR . '/app/Option/Settings/Social.php';
 require_once INSUT_THEME_DIR . '/app/Option/Settings/Footer.php';
 require_once INSUT_THEME_DIR . '/app/Option/Settings/Custom-css.php';
 //require_once INSUT_THEME_DIR . '/app/Option/Settings/Faq.php';
 require_once INSUT_THEME_DIR . '/app/Option/Settings/Case-Study.php';
 require_once INSUT_THEME_DIR . '/app/Option/Settings/Service.php';
 require_once INSUT_THEME_DIR . '/app/Option/Settings/Contacts.php';
 require_once INSUT_THEME_DIR . '/app/Option/Settings/Portfolio.php';
 require_once INSUT_THEME_DIR . '/app/Option/Settings/BackUp.php';

 
 /* Post Meta */
 require_once INSUT_THEME_DIR . '/app/Option/Posts/Post.php';
 require_once INSUT_THEME_DIR . '/app/Option/Posts/Quomodo-service.php';
 require_once INSUT_THEME_DIR . '/app/Option/Posts/Quomodo-contacts.php';
 require_once INSUT_THEME_DIR . '/app/Option/Posts/Quomodo-case.php';
 require_once INSUT_THEME_DIR . '/app/Option/Posts/Page.php';

  /* Taxonomy Meta */
  //Category
 // require_once INSUT_THEME_DIR . '/app/Option/Taxonomy/Category.php';

  /* User */
  require_once INSUT_THEME_DIR . '/app/Option/User.php';

