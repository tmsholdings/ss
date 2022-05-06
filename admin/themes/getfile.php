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

$filename = $nv_Request->get_title('filename', 'get', '');
$checkss = $nv_Request->get_title('checkss', 'get', '');
$mod = $nv_Request->get_title('mod', 'get', '');

$path_filename = NV_BASE_SITEURL . NV_TEMP_DIR . '/' . $filename;

if (!empty($mod) and nv_is_file($path_filename, NV_TEMP_DIR) and $checkss == md5($filename . NV_CHECK_SESSION)) {
    //Download file
    $download = new NukeViet\Files\Download(NV_DOCUMENT_ROOT . $path_filename, NV_ROOTDIR . '/' . NV_TEMP_DIR, $mod);
    $download->download_file();
    exit();
}

$contents = 'file not exist !';

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
