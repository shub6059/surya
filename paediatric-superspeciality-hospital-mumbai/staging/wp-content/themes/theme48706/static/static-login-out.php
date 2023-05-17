<?php /* Static Name: Log in - out */ ?>	
<div id="loginout" class="clearfix">
    <?php
    	if(of_get_option("login_display_id")=="yes"){
      		$username = (get_current_user_id()!=0) ? get_userdata(get_current_user_id())->user_login : '';
      		$user_title = str_replace("%username%", $username, of_get_option("site_admin"));
		    $link_string_site = "<a href=\"".get_bloginfo('wpurl')."/wp-admin/index.php\" class='register-link' title=\"".$user_title."\">".$user_title."</a>";
			$link_string_logout = '<a href="'. wp_logout_url($_SERVER['REQUEST_URI']) .'" title="'.of_get_option("log_out").'">'.of_get_option("log_out").'</a>';
			$link_string_register = "<a href=\"".get_bloginfo('wpurl')."/wp-login.php?action=register&amp;redirect_to=".$_SERVER['REQUEST_URI']."\" class='register-link' title=\"".of_get_option("sign_up")."\">".of_get_option("sign_up")."</a>";
			$link_string_login = "<a href=\"".get_bloginfo('wpurl')."/wp-login.php?action=login&amp;redirect_to=".$_SERVER['REQUEST_URI']."\" title=\"".of_get_option("sign_in")."\">".of_get_option("sign_in")."</a>";
	
			if (!is_user_logged_in()) {
	        	echo "<span>".of_get_option("login_questions")." ".$link_string_login." ".of_get_option("word_delimiter")." </span>";
	        	echo "<span>".$link_string_register."</span>";
	     	}else{
	        	echo "<span>".$link_string_site." ".of_get_option("word_delimiter")." </span>";
	        	echo "<span>".$link_string_logout."</span>";
			}
		}
	?>
</div>