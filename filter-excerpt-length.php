/**
 * Changed excerpt length to 30 words
 */
function emersonthis_excerpt_length($length) {
return 30;
}
add_filter('excerpt_length', 'emersonthis_excerpt_length');
