<?php
/**
 * Promo Box Section options
 *
 * @package Theme Palace
 * @subpackage Mega Blog
 * @since Mega Blog 1.0.0
 */

// Add Promo Box section
$wp_customize->add_section( 'mega_blog_promo_box_section', array(
	'title'             => esc_html__( 'Promo Box','mega-blog' ),
	'description'       => esc_html__( 'Promo Box Section options.', 'mega-blog' ),
	'panel'             => 'mega_blog_front_page_panel',
) );

// Promo Box content enable control and setting
$wp_customize->add_setting( 'mega_blog_theme_options[promo_box_section_enable]', array(
	'default'			=> 	$options['promo_box_section_enable'],
	'sanitize_callback' => 'mega_blog_sanitize_switch_control',
) );

$wp_customize->add_control( new Mega_Blog_Switch_Control( $wp_customize, 'mega_blog_theme_options[promo_box_section_enable]', array(
	'label'             => esc_html__( 'Promo Box Section Enable', 'mega-blog' ),
	'section'           => 'mega_blog_promo_box_section',
	'on_off_label' 		=> mega_blog_switch_options(),
) ) );

for ( $i = 1; $i <= 3; $i++ ) :
	// promo_box pages drop down chooser control and setting
	$wp_customize->add_setting( 'mega_blog_theme_options[promo_box_content_page_' . $i . ']', array(
		'sanitize_callback' => 'mega_blog_sanitize_page',
	) );

	$wp_customize->add_control( new Mega_Blog_Dropdown_Chooser( $wp_customize, 'mega_blog_theme_options[promo_box_content_page_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Page %d', 'mega-blog' ), $i ),
		'section'           => 'mega_blog_promo_box_section',
		'choices'			=> mega_blog_page_choices(),
		'active_callback'	=> 'mega_blog_is_promo_box_section_enable',
	) ) );
endfor;
