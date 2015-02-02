<?php 
	$user_id = get_current_user_id();
	$user = new WP_User( $user_id );
	if ( !empty( $user->roles ) && is_array( $user->roles ) )
		{
			foreach ( $user->roles as $role )
			$user_role = $role;
		}
	echo $user_role; // prints current logged in user role.	
?>	