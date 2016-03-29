# remove media buttons
function RemoveAddMediaButtons(){
    # do this conditionally if you want to be more selective
    remove_action( 'media_buttons', 'media_buttons' );
}
add_action('admin_head', 'RemoveAddMediaButtonsForNonAdmins');
