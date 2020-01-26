<?php 

function ju_recent_recipes_tabs(){
	add_action( 'bp_template_title', 'ju_buddypress_recent_posts_title' );
	add_action( 'bp_template_content', 'ju_buddypress_posts_content' );
	bp_core_load_template(
		apply_filters( 'bp_core_template_plugin', 'members/single/plugins' )
	);
}