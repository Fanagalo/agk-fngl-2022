<?php 

function agk_fngl_2022_filter_search_cat($query) {
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type', array('post', 'page'));
        $query->set('cat',array('201','203','214','215'));
    }
return $query;
}
add_filter('pre_get_posts','agk_fngl_2022_filter_search_cat');