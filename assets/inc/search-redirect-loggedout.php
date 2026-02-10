<?php

function agk_fngl_2026_search_redirect_logged_out()
{
    if (is_search() && !is_user_logged_in()) {
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
        get_template_part(404);
        exit;
    }
}
add_action('template_redirect', 'agk_fngl_2026_search_redirect_logged_out');