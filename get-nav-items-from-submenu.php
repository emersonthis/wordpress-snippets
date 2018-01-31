/** 
Get a list of objects from a submenu
@param str $menu_slug The slug of the menu you want to search 
@param str $submenu_title CASE SENSITIVE title of menu heading you want pages from
@return array
*/
function get_submenu_items($menu_slug, $submenu_title) {
    $nav = wp_get_nav_menu_items($menu_slug);
    if (!$nav) return false;
    $educationItemId = null;
    $list = [];
    foreach ($nav as $item) {
        if ($item->menu_item_parent == $educationItemId) $list[] = $item;
        if ($item->title === $submenu_title) $educationItemId = $item->ID;
    }
    return $list;
}
