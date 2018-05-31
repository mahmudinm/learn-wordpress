<?php 

function learn_customize_register( $wp_customize ) {

	$wp_customize->add_section( 'navbar', array(
		'priority'       => 160,
		'title'          => __( 'Navbar Settings', 'learn' ),
		'description'    => __( 'Change Navbar Settings', 'learn' )
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
	
			$wp_customize->add_setting( 'navbar_align', array(
				'type'                 => 'theme_mod',
				'default'              => __( 'mr-auto', 'learn' )
			) );

			$wp_customize->add_control( 'navbar_align', array(
				'label'       => __( 'Navbar Align', 'learn' ),
				'description' => __( 'Navbar Align Left Right', 'learn' ),
				'section'     => 'navbar',
				'type'        => 'select', // text (default | variations email/url/number/hidden/date), textarea, checkbox, radio/select (requires choices array below), dropdown-pages
				'choices'  => array(
					'ml-auto'  => 'Left',
					'mr-auto' => 'Right',
				),
				'settings'    => 'navbar_align'
			) );
			

} 

add_action( 'customize_register', 'learn_customize_register' );