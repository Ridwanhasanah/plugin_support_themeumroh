<?php
include(plugin_dir_path(__FILE__) . '../Model/dbconnect.php');

function rEnqueueScripts(){
	//global $pagenow;
	if (is_admin()) {
		# code...
	
	//wp_enqueue_style('radmin-css', plugins_url( '../assets/blue/css/blue.css', __FILE__ ) );
	//wp_enqueue_style('radmin-css', plugins_url( '../assets/blue/css/print.css', __FILE__ ) );
	
	
		/*wp_enqueue_style('radmin-css', plugins_url( '../assets/blue/css/ie6.css', __FILE__ ) );
		wp_enqueue_style('radmin-css', plugins_url( '../assets/blue/css/ie7.css', __FILE__ ) );
*/



		wp_enqueue_style('radmin-css', plugins_url( '../assets/css/rstyle.css', __FILE__ ) );
		
	//}else{
	//	echo " huh ";
	//}
		}
}

add_action( 'admin_enqueue_scripts', 'rEnqueueScripts' );

function biodata(){

	//if (get_home_url().$pagenow.'?page=single-'.$id2) {
		wp_enqueue_style('radmin-css', plugins_url( '../assets/blue/css/blue.css', __FILE__ ) );
		wp_enqueue_style('radmin-css', plugins_url( '../assets/blue/css/print.css', __FILE__ ) );
	//}
}

//add_action('admin_enqueue_scripts','biodata' );

include(plugin_dir_path(__FILE__) . '../View/menuDaftarUmroh.php');
?>