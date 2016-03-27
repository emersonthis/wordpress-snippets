# Adds instruction text after the post title input
# https://make.wordpress.org/core/2012/12/01/more-hooks-on-the-edit-screen/
add_action( 'edit_form_after_title', 'emersonthis_edit_form_after_title' );
// add_action( 'edit_form_after_editor', 'emersonthis_edit_form_after_title' );
// add_action( 'edit_form_advanced', 'emersonthis_edit_form_after_title' );
function emersonthis_edit_form_after_title() {
    echo '<p style="margin-bottom:0;"><strong>TIP:</strong> To create a single line break use SHIFT+RETURN. By default, RETURN creates a new paragraph.</p>';
}
