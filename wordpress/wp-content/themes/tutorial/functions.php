<?php

function head_JS_CSS(){
    if (is_single() || is_page()) {
    global $post;
    $head_JS_CSS = get_post_meta($post->ID, 'head_JS_CSS', true);
    echo $head_JS_CSS;
    }
    }
    add_action("wp_head","head_JS_CSS");
    add_action("get_header", 'remove_admin_login_header');
	
	
function remove_admin_login_header(){
    remove_action('wp_head', '_admin_bar_bump_cb');
}
?>
