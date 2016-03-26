/* 
 * Remove editor buttons
 * This probably belongs in your theme's functions.php file
 * Codex: http://codex.wordpress.org/Plugin_API/Filter_Reference/mce_buttons,_mce_buttons_2,_mce_buttons_3,_mce_buttons_4
 */
function myplugin_tinymce_buttons($buttons)
 {
    # Remove the text color selector
    $remove = array('wp_adv');
    //To change other buttons, look at the button class names and remove the "mce-i-" prefix

    # Find the array key and then unset
    return array_diff($buttons,$remove);

 }
add_filter('mce_buttons','myplugin_tinymce_buttons'); // this is the top row
