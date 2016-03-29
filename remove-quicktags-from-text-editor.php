# remove quicktags from text editor
add_filter('quicktags_settings', 'emersonthis_quicktags_settings');
function emersothi_quicktags_settings( $qtInit  ) {
    //To disable ALL butons it must be set to "," (not "")
    $qtInit['buttons'] = 'more,';
    return $qtInit;
}
