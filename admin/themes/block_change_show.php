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

$bid = $nv_Request->get_int('bid', 'post');

list($bid, $act) = $db->query('SELECT bid, act FROM ' . NV_BLOCKS_TABLE . '_groups WHERE bid=' . $bid)->fetch(3);

if ((int) $bid > 0 and md5(NV_CHECK_SESSION . '_' . $bid) == $nv_Request->get_string('checkss', 'post')) {
    $act = $act ? 0 : 1;
    $db->query('UPDATE ' . NV_BLOCKS_TABLE . '_groups SET act=' . $act . ' WHERE bid=' . $bid);
    $nv_Cache->delMod('themes');

    nv_jsonOutput(['status' => 'ok', 'act' => $act ? 'act' : 'deact']);
} else {
    nv_jsonOutput(['status' => 'error']);
}
