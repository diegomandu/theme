<?php 

function ju_customize_register( $wp_customize ){
	$wp_customize->add_setting( 'ju_facebook_handle',[
		'default'	=>	''
	]);

	$wp_customize->add_section( 'ju_social_section', [
		'title'		=>	__( 'Udemy Social Settings', 'udemy' ),
		'priority'	=>	30
	]);

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'ju_social_facebook_input',
		array(
			'label'			=>	__( 'Facebook Handle', 'udemy' ),
			'section'		=>	'ju_social_section',
			'settings'		=>	'ju_facebook_handle'
		)
	));

}
