# disable visual editor
function emersonthis_disable_visual_editor(){
    # add logic here if you want to permit it selectively
    return false;
}
add_filter('user_can_richedit' , 'emersonthis_disable_visual_editor' , 50);
