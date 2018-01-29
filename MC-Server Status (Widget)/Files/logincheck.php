<?php
include("../wp-load.php");

	if(is_user_logged_in())
	{
	    $user=wp_get_current_user();
	    $role=(array) $user->roles;
		echo $role[0];
	} else {
	    echo "none";
	}
?>