<?php

function hook_persistags_render_linklist($data, $conf){

    // Displays favorite links only if the user is logged in.
    if($data['_LOGGEDIN_'] && !empty($conf->get('plugins.FAVORITE_TAGS'))){
        $html = '<div class="clearfix" style="overflow:hidden;">';
        $tags = explode(',', $conf->get('plugins.FAVORITE_TAGS'));

        foreach ($tags as $tag) {
            $html .= '<a href="?searchtags=' . $tag . '" class="favorite-tag" style="float:left;">' . $tag . '</a>';
        }

        $html .= '</div><hr>';

        $data['plugin_start_zone'][] = $html;
    }

    return $data;
}