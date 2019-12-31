<?php 

function ju_misc_customizer_section( $wp_customize ){
	$wp_customize->add_setting( 'ju_header_show_search', [
		'default'		=>	'yes'
	]);

	$wp_customize->add_setting( 'ju_header_show_cart', array(
		'default'		=>	'yes',
	));

	$wp_customize->add_setting( 'ju_footer_copyright_text', array(
		'default'		=>	'Copyrights &copy; 2019 All Rights Reserved.',
	));

	$wp_customize->add_setting( 'ju_footer_tos_page', array(
		'default'		=>	0,
	));

	$wp_customize->add_setting( 'ju_footer_privacy_page', array(
		'default'		=>	0,
	));

	$wp_customize->add_section( 'ju_misc_section', [
		'title'			=>	__( 'Udemy Misc Settings', 'udemy' ),
		'priority'		=>	30
	]);

	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'ju_header_show_search_input',
		array(
			'label'		=>	__( 'Show Search Button in Header', 'udemy' ),
			'section'	=>	'ju_misc_section',
			'settings'	=>	'ju_header_show_search',
			'type'		=>	'checkbox',
			'choices'	=>	[
				'yes'	=>	'Yes'
			]


		)


	));
}