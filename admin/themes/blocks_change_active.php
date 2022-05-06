<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2021 Tập Đoàn TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://tms.vn
 */

if (!defined('NV_IS_FILE_THEMES')) {
    exit('Stop!!!');
}

$list = $nv_Request->get_string('list', 'post,get');
$selectthemes = $nv_Request->get_string('selectthemes', 'post,get');
$array_bid = explode(',', $list);
if (!empty($array_bid) and md5($selectthemes . NV_CHECK_SESSION) == $nv_Request->get_string('checkss', 'post,get')) {
    $array_bid = array_map('intval', $array_bid);

    $list = $nv_Request->get_string('active_device', 'post,get');
    $array_active_device = explode(',', $list);
    $array_active_device = array_map('intval', $array_active_device);
    if (in_array(1, $array_active_device, true) or (in_array(2, $array_active_device, true) and in_array(3, $array_active_device, true) and in_array(4, $array_active_device, true))) {
        $active = 1;
    } else {
        $active = implode(',', $array_active_device);
    }

    $db->query('UPDATE ' . NV_BLOCKS_TABLE . '_groups SET active=' . $db->quote($active) . ' WHERE bid in (' . implode(',', $array_bid) . ')');
    $nv_Cache->delMod('themes');

    echo $lang_module['block_update_success'];
} else {
    echo $lang_module['block_error_noblock'];
}
