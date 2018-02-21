<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

//Set logo on WP login page to Inhabitent logo
function inhabitent_login_logo() { ?>
	<style type="text/css">
			#login h1 a, .login h1 a {
				background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-text-dark.svg);
				height:65px;
				width:320px;
				background-size: 320px 65px;
				background-repeat: no-repeat;
				padding-bottom: 30px;
			}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'inhabitent_login_logo' );

//Set logo URL on WP login page to point to Inhabitent home
function inhabitent_loginlogo_url($url) {
	return get_home_url();
}
add_filter( 'login_headerurl', 'inhabitent_loginlogo_url' );

//Customise the title attribute for the login logo link
function inhabitent_login_title() {
	return 'Inhabitent Camping Supply Co.';
}
add_filter('login_headertitle', 'inhabitent_login_title');

//Update hero image on About page
function update_about_page_hero_image() {
	if( is_page_template('about.php') ) {
		$hero_image = CFS()->get( 'header_image' );
		$css = ".page-template-about {background-image: url('$hero_image'); height: 100vh;}";
		wp_add_inline_style( 'red-starter-style', $css );
	}
}
add_action('wp_enqueue_scripts','update_about_page_hero_image');