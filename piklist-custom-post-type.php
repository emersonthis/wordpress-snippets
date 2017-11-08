# Source: https://piklist.com/learn/doc/piklist_post_types/
add_filter('piklist_post_types', 'piklist_demo_post_types');
function piklist_demo_post_types($post_types)
{
  $post_types['piklist_demo'] = array(
    'labels' => piklist('post_type_labels', 'Piklist Demo')
    ,'title' => __('Enter a new Demo Title')
    ,'menu_icon' => piklist('url', 'piklist') . '/parts/img/piklist-menu-icon.svg'
    ,'page_icon' => piklist('url', 'piklist') . '/parts/img/piklist-page-icon-32.png'
    ,'supports' => array(
      'title'
      ,'post-formats'
    )
    ,'public' => true
    ,'admin_body_class' => array(
      'custom-body-class'
    )
    ,'has_archive' => true
    ,'rewrite' => array(
      'slug' => 'piklist-demo'
    )
    ,'capability_type' => 'post'
    ,'edit_columns' => array(
      'title' => __('Demo')
      ,'author' => __('Assigned to')
    )
    ,'hide_meta_box' => array(
      'author'
    )
    ,'status' => array(
      'new' => array(
        'label' => 'New'
        ,'public' => false
      )
      ,'pending' => array(
        'label' => 'Pending Review'
        ,'public' => false
      )
      ,'demo' => array(
        'label' => 'Demo'
        ,'public' => true
        ,'exclude_from_search' => true
        ,'show_in_admin_all_list' => true
        ,'show_in_admin_status_list' => true
     )
      ,'lock' => array(
        'label' => 'Lock'
        ,'public' => true
      )
    )
  );
  return $post_types;
}
