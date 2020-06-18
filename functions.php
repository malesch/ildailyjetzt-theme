<?php


function add_the_gallery() {
    global $current_user;
    
    // is there a user ?
    if(is_array($current_user->roles)) {
   
        // substitute your role(s):
        
        if(in_array('administrator', $current_user->roles)) {
            // hide the dashboard:
            remove_menu_page('index.php');
			 remove_menu_page('themes.php');
			 	 remove_menu_page('plugins.php');
				 	 remove_menu_page('edit-comments.php');
					 	 remove_menu_page('edit.php');
						 	 remove_menu_page('tools.php');
							  remove_submenu_page('email-newsletter','add_admin_menu_email_to_comment_posed_user');
							   remove_submenu_page('email-newsletter','add_admin_menu_email_to_registered_user');
							   remove_submenu_page('email-newsletter','add_admin_menu_email_to_simple_contact_form');
            $special=$_GET['special'];
            
            add_menu_page( 'Il Daily Jetzt','Il Daily Jetzt' , 'add_users', 'media-new.php', '','',3);
            
            
        }
    }
}
add_action('admin_menu', 'add_the_gallery');
add_filter('use_default_gallery_style', '__return_false');

function your_login_redirect() {
    // is there a user ?
      global $current_user;
  
    if(is_array($current_user->roles)) {
     
        // substitute your role(s):
      
       
    
            // pick where to redirect to, in the example: Posts page
            return admin_url('media-new.php');
        
    }
}


add_filter('login_redirect', 'your_login_redirect');



add_filter('preview_page_link ', 'my_preview');

?>