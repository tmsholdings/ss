<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2021 Tập Đoàn TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://tms.vn
 */

if (!defined('NV_IS_FILE_MODULES')) {
    exit('Stop!!!');
}

$func_id = $nv_Request->get_int('id', 'post', 0);
$content = 'ERR_' . $func_id;

if ($func_id > 0) {
    $row = $db->query('SELECT in_submenu FROM ' . NV_MODFUNCS_TABLE . ' WHERE func_id=' . $func_id)->fetch();
    if (!empty($row)) {
        $in_submenu = $row['in_submenu'] ? 0 : 1;
        $db->query('UPDATE ' . NV_MODFUNCS_TABLE . ' SET in_submenu=' . $in_submenu . ' WHERE func_id=' . $func_id);
        $nv_Cache->delMod('modules');
        $content = 'OK_' . $func_id;
    }
}

include NV_ROOTDIR . '/includes/header.php';
echo $content;
include NV_ROOTDIR . '/includes/footer.php';
