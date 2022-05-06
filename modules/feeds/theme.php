<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2021 Tập Đoàn TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://tms.vn
 */

if (!defined('NV_IS_MOD_RSS')) {
    exit('Stop!!!');
}

/**
 * nv_rss_main_theme()
 *
 * @param string $array
 * @return string
 */
function nv_rss_main_theme($array)
{
    $array .= '<div class="tree"><ul>';
    $array .= nv_get_rss_link();
    $array .= '</ul></div>';

    return $array;
}
