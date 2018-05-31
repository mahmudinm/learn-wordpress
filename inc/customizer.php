<?php 

function learn_customize_register( $wp_customize ) {

	$wp_customize->add_section( 'navbar', array(
		'priority'       => 160,
		'title'          => __( 'Navbar Color', 'learn' ),
		'description'    => __( 'Change Navbar Color', 'learn' )
	) );
	
	$wp_customize->add_setting( 'navbar_color', array(
		'type'                 => 'theme_mod',
		'default'              => __( '#343a40', 'learn' )
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'navbar_color',
		array(
			'label'      => __( 'Navbar Color', 'learn' ),
			'section'    => 'navbar',
			'settings'   => 'navbar_color',
		)
	) );
	
} 

add_action( 'customize_register', 'learn_customize_register' );