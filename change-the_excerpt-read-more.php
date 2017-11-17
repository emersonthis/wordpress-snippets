function emersonthis_new_excerpt_more($more) {
    return <a href="' . get_the_permalink() . '">Read the rest</a>]';
}
add_filter('excerpt_more', 'emersonthis_new_excerpt_more', 21 );
