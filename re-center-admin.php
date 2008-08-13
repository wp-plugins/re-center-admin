<?php
/*
Plugin Name: Re-Center Admin 
Version: 1.0
Plugin URI: http://www.robalan.com
Description: "Re-Center WP-Admin" is a plugin designed to do exactly what it says - re-center the WordPress 2.5 Admin interface. All proper credit to "Remove Max Width" by Dion Hulse - http://dd32.id.au - all I really did was regress and modify some CSS...
Author: Rob Alan
Author URI: http://www.robalan.com
*/

/*
Changelog:
1.0: Initial Release
*/


add_action('admin_head','rmw_head',99); //Hook late after all css has been done
function rmw_head(){ ?>
<style type="text/css" media="all">
	.wrap, 
	.updated,
	.error,
	#the-comment-list td.comment {
		max-width: 960px;
		margin: 0 auto;
	}
</style>
<?php } ?>