<?php
function mandatory_excerpt($data) {
  $excerpt = $data['post_excerpt'];
  if (empty($excerpt)) {
    if ($data['post_status'] === 'publish') {
      add_filter('redirect_post_location', 'excerpt_error_message_redirect', 99);
    }
    $data['post_status'] = 'draft';
  }
  return $data;
}
add_filter('wp_insert_post_data', 'mandatory_excerpt');

function excerpt_error_message_redirect($location) {
  # remove "Post published messages"
  $location = str_replace('&message=6', '', $location); # new post published message
  $location = str_replace('&message=10', '', $location); # published post updated message
  # add our new "Excerpt required" error message param
  return add_query_arg('excerpt_required', 1, $location);
}
function excerpt_admin_notice() {
  if (!isset($_GET['excerpt_required'])) return;
  switch (absint($_GET['excerpt_required'])) {
    case 1:
      $message = 'Excerpt is required to publish a post.';
      break;
    default:
      $message = 'Unexpected error';
  }
  echo '<div id="notice" class="error"><p>' . $message . '</p></div>';
}
add_action('admin_notices', 'excerpt_admin_notice');
