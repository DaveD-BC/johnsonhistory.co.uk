<?php

/**
 * Defaults
 */
function sundown_defaults( $defaults = array() ) {

	$sundown_defaults = array(

		"theme_sitelayout"			=> '1c',
		"theme_sitewidth"  			=> 1120,
		"theme_magazinelayout"		=> 2,
		"theme_headerheight"		=> 600,
		"theme_lpsliderimage"		=> esc_url( get_stylesheet_directory_uri() ) . '/resources/images/slider/sundown.jpg',

		"theme_sitebackground" 		=> "#FFFFFF",
		"theme_sitetext" 			=> "#333333",
		"theme_titletext"			=> "#000000",
		"theme_headingstext"			=> "#000000",
		"theme_contentbackground"	=> "#FFFFFF",
		"theme_accent1" 				=> "#bf211e",
		"theme_accent2" 				=> "#000000",

		"theme_menubackground"		=> "#FFFFFF",
		"theme_menutext" 			=> "#000000",
		"theme_submenutext" 		=> "#000000",
		"theme_submenubackground"	=> "#FFFFFF",

		"theme_overlaybackground1"			=> "#1c110a",
		"theme_overlaybackgroundposition1"	=> 8,
		"theme_overlaybackground2"			=> "#724614",
		"theme_overlaybackgroundposition2"	=> 100,
		"theme_overlayangle"  				=> 180,
		"theme_overlayopacity"  				=> 30,

		"theme_footerbackground"		=> "#1e3231",
		"theme_footertext"			=> "#DBDBDB",
		"theme_lppostsbg"			=> "#FFFFFF",

		"theme_fgeneral" 			=> 'Source Sans Pro/gfont',
		// "theme_fgeneralgoogle"	=> '',
		"theme_fgeneralsize" 		=> '18',
		"theme_fgeneralweight" 		=> '400',

		"theme_fsitetitle"			=> 'Source Sefir Pro/gfont',
		//"theme_fsitetitlegoogle"	=> '',
		"theme_fsitetitlesize" 		=> 1.2,
		"theme_fsitetitleweight"	=> '700',
		"theme_fsitetitlevariant" 	=> 'none',

		"theme_fmenu" 			=> 'Source Sefir Pro/gfont',
		//"theme_fmenugoogle"	=> '',
		"theme_fmenusize" 		=> 1.8,
		"theme_fmenuweight"		=> '700',

		"theme_ftitles" 		=> 'Source Sefir Pro/gfont',
		//"theme_ftitlesgoogle"	=> '',
		"theme_ftitlessize" 	=> 1.7,
		"theme_ftitlesweight"	=> '700',

		"theme_meta" 				=> 'inherit',
		//"theme_metatitlesgoogle"	=> '',
		"theme_metatitlessize" 		=> 1,
		"theme_metatitlesweight"		=> '300',
		"theme_metatitlesvariant"	=> 'none',

		"theme_singletitle" 		=> 'Source Sefir Pro/gfont',
		//"theme_singletitlegoogle"	=> '',
		"theme_singletitlesize" 	=> 4.4,
		"theme_singletitleweight"	=> '700',
		"theme_singletitlevariant"	=> '',
		"theme_singletitlelineheight" => 1.3,

		"theme_singlemeta" 			=> 'inherit',
		//"theme_singlemetagoogle"	=> '',
		"theme_singlemetasize" 		=> 1.1,
		"theme_singlemetaweight"	=> '300',
		"theme_singlemetavariant"	=> '',

		"theme_fheadings" 			=> 'Source Sefir Pro/gfont',
		//"theme_fheadingsgoogle"	=> '',
		"theme_fheadingssize" 		=> 100,
		"theme_fheadingsweight"		=> '700',
		"theme_fheadingsvariant"	=> '',
		"theme_fheadingslineheight" => 1.2,
		"theme_fheadingsspace" => 0.5,

		"theme_fwtitle" 			=> 'Source Sefir Pro/gfont',
		//"theme_fwtitlegoogle"		=> '',
		"theme_fwtitlesize" 		=> 1.2,
		"theme_fwtitleweight"		=> '700',
		"theme_fwtitlelineheight" 	=> 2,

		"theme_fwcontent" 			=> 'inherit',
		//"theme_fwcontentgoogle"	=> '',
		"theme_fwcontentsize" 		=> 1,
		"theme_fwcontentweight"		=> '400',
		"theme_fwcontentlineheight" => 1.8,

		"theme_excerptlength"	=> 25,
		"theme_excerptcont"		=> 'Read more'

	); // sundown_defaults array

	$result = array_merge( $defaults, $sundown_defaults );

	return $result;

} // sundown_defaults()
add_filter( 'bravada_option_defaults_array', 'sundown_defaults' );

// needed? for the .org preview
function sundown_filter_defaults(){
	add_filter( 'bravada_option_defaults_array', 'sundown_defaults' );
} // sundown_filter_defaults()
add_action( 'customize_register', 'sundown_filter_defaults' );


/**
 * Handle theme labels in customize panels
 */
function sundown_about_theme_name( $initial ) {
	return __( 'About Sundown', 'sundown' );
} // sundown_about_theme_name()
add_filter( 'cryout_about_theme_name', 'sundown_about_theme_name' );

function sundown_about_theme_plus_desc( $initial ) {
	$theme = wp_get_theme();
	// translators: %1$s is the name of the child theme, %2$s is the name of the parent theme
	return '<h3>' . sprintf( esc_html__( '%1$s is a child theme of %2$s', 'sundown' ), esc_html( $theme->get( 'Name' ) ), ucwords( esc_html( $theme->get( 'Template' ) ) ) ) . '</h3>' . $initial;
} // sundown_about_theme_plus_desc()
add_filter( 'cryout_about_theme_plus_desc', 'sundown_about_theme_plus_desc' );

function sundown_about_theme_slug_swap( $initial ){
	return str_replace( array( 'bravada', 'Bravada' ), array( 'sundown', 'Sundown' ), $initial );
} // sundown_about_theme_slug_swap()
add_filter( 'cryout_about_theme_review_link', 'sundown_about_theme_slug_swap' );
add_filter( 'cryout_about_theme_manage_link', 'sundown_about_theme_slug_swap' );

// FIN
