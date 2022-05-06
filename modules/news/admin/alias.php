<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2021 Tập Đoàn TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://tms.vn
 */

if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}

$title = $nv_Request->get_title('title', 'post', '');
$id = $nv_Request->get_int('id', 'post', 0);
$mod = $nv_Request->get_string('mod', 'post', '');

include NV_ROOTDIR . '/includes/header.php';
echo get_mod_alias($title, $mod, $id);
include NV_ROOTDIR . '/includes/footer.php';
