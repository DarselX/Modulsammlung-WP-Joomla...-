<?php
	include("../wp-load.php");
	
	if(is_user_logged_in())
	{
	    $user=wp_get_current_user();
	    $role=(array) $user->roles;
	} else {
	    echo "none";
	}

	if($role[0]=="administrator")
	{
	    shell_exec("sudo mcserver -s");
	    echo "starting";
	}
?>