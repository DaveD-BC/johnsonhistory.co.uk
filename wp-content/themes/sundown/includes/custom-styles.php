<?php
/**
 * Master generated style function
 *
 * @package Sundown
 */

/**
 * Add body classes to identify the child theme
 */
function sundown_body_classes( $classes ) {
	$classes[] = strtolower( wp_get_theme() ) . '-child';
	return $classes;
}
add_filter( 'body_class', 'sundown_body_classes', 15 );

/**
 * Dynamic styles for the frontend
 */
function sundown_custom_styling() {
    $options = cryout_get_option();
    extract($options);

    ob_start(); ?>

    /* Sundown custom style */

	.hamburger span,
	.hamburger span:nth-child(2)::after  {
		background: transparent;
		border-color: <?php echo esc_html( $theme_menutext ) ?>;
	}

	.burgermenu-active.bravada-over-menu .site-header-bottom .hamburger span {
		background: <?php echo esc_html( $theme_submenutext ) ?>;
		border-color: <?php echo esc_html( $theme_submenutext ) ?>;
		color:  <?php echo esc_html( $theme_menubackground ) ?>;
	}

	.bravada-over-menu:not(.burgermenu-active) .site-header-bottom:not(.header-fixed) .hamburger span {
		background: transparent;
		border-color: <?php echo esc_html( $theme_menubackground ) ?>;
	}

	nav#mobile-menu,
	nav#mobile-menu #mobile-nav a {
		color: <?php echo esc_html( $theme_menutext ) ?>;
	}

	nav#mobile-menu	{
		background-color: <?php echo esc_html( $theme_menubackground ) ?>;
	}

	.bravada-over-menu .header-fixed.site-header-bottom #site-title a,
	.bravada-over-menu .header-fixed.site-header-bottom #site-description {
		color: <?php echo esc_html( $theme_menubackground ) ?>;
	}

	body:not(.bravada-over-menu) .site-header-bottom #site-title a::before,
	.bravada-over-menu .header-fixed.site-header-bottom #site-title a::before {
		background: <?php echo esc_html( $theme_accent1 ) ?>;
	}

	.animated-title span.cry-single.animated-letter,
	.animated-title span.cry-double.animated-letter {
		color: <?php echo esc_html( $theme_overlaytext ) ?>;
	}

	.lp-block i[class^="blicon"]::before {
		color: <?php echo esc_html( $theme_accent1 ) ?>;
	}

	.widget-title,
	#comments-title,
	#reply-title,
	.related-posts .related-main-title,
	.main .page-title,
	#nav-below em,
	.lp-text .lp-text-title,
	.lp-boxes-animated .lp-box-title {
		background-image: linear-gradient(to bottom, rgba(<?php echo  esc_html( cryout_hex2rgb( $theme_accent1 ) ) ?>,1) 0%, rgba(<?php echo esc_html( cryout_hex2rgb( $theme_accent1 ) ) ?>,1) 100%);
	}

	.single .author-info {
		background-color: <?php echo esc_html( cryout_hexdiff( $theme_contentbackground, 17 ) ) ?>;
	}

    /* end Sundown custom style */
    <?php
    return preg_replace( '/((background-)?color:\s*?)[;}]/i', '', ob_get_clean() );

} // sundown_custom_styling()


/**
 * Load custom styles
 */
function sundown_custom_styles( $style = '' ) {

	return $style . sundown_custom_styling();

} // sundown_custom_styles()
// this filer is applied in sundown_setup()


/* FIN */
