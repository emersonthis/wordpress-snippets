function emersonthis_format_TinyMCE( $in ) {
    $in['block_formats'] = "Paragraph=p; Heading=h2; Subheading=h3";
    return $in;
}
add_filter( 'tiny_mce_before_init', 'emersonthis_format_TinyMCE' );
