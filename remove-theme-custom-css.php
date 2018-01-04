/**
 * Remove the additional CSS section, introduced in 4.7, from the Customizer.
 * @param $wp_customize WP_Customize_Manager
 */
function emersonthis_remove_css_section( $wp_customize ) {
	$wp_customize->remove_section( 'custom_css' );
}
add_action( 'customize_register', 'emersonthis_remove_css_section', 15 );
