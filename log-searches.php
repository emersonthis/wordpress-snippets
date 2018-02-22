/*
 * WRITE SEARCHES TO LOGS
 * Loosely based off of: https://wordpress.org/plugins/log-searches/
 */
add_action('pre_get_posts', function($query) {
    if (!is_search() || !$query->is_main_query() || is_user_logged_in()) return;
    
    $ip = $_SERVER['REMOTE_ADDR'];
    $term = stripslashes(get_search_query());
    
    //Ignore stupid crap
    $term_blacklist = ['tweet'];
    $agent_blacklist = ['bingbot'];
    if (in_array(strtolower($term),$term_blacklist)) return;
    foreach ($agent_blacklist as $a) if (strpos($a,$agent) !== false) return;
    
    //Customize this to format the log message however you want
    $msg = implode("\t", [
        "[SEARCH]",
        $term
    ]);
    error_log($msg);

}, 1 );
