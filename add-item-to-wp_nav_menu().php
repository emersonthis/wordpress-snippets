// Source: https://galengidman.com/2014/05/08/adding-static-menu-items-to-wp_nav_menu/
function emersonthis_nav_wrap() {
  // default value of 'items_wrap' is <ul id="%1$s" class="%2$s">%3$s</ul>'
  // open the <ul>, set 'menu_class' and 'menu_id' values
  $wrap  = '<ul id="%1$s" class="%2$s">';
  // get nav items as configured in /wp-admin/
  $wrap .= '%3$s';
  // the static link 
  $wrap .= '<li>NEW ITEM HERE</li>';
  $wrap .= '</ul>';
  // return the result
  return $wrap;
}
// Call for the new wp_nav_menu somewhere in the template files...
/*
<nav>
  <?php wp_nav_menu(array(
    'theme_location' => 'my_menu_location',
    'items_wrap' => my_nav_wrap()
  )); ?>
</nav>
*/
