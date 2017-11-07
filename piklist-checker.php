# Warns the admin if Piklist isn't installed but is necessary for your theme
# Source: https://piklist.com/learn/doc/piklist-checker/
# include Piklist checker file in theme or plugin... http://plugins.svn.wordpress.org/piklist/assets/class-piklist-checker.php
# add to functions.php
add_action('init', 'my_init_function');
function my_init_function(){
  if(is_admin()){
   include_once('path-to-file/class-piklist-checker.php'); 
 
   if (!piklist_checker::check(__FILE__, 'theme')){ //use 'theme' parameter when included in a theme. ommit it for plugins
     return;
   }
  }
}
