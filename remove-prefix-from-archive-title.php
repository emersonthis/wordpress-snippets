# Remove the default "Category:", "Archive:", etc from the title of archive pages
# Source: https://wordpress.stackexchange.com/questions/179585/remove-category-tag-author-from-the-archive-title

add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;
        }
    return $title;
});
