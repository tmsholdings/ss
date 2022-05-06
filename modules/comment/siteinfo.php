<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2021 Tập Đoàn TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://tms.vn
 */

if (!defined('NV_IS_FILE_SITEINFO')) {
    exit('Stop!!!');
}

$lang_siteinfo = nv_get_lang_module($mod);

// Tong so binh luan
$number = $db->query('SELECT COUNT(*) FROM ' . NV_PREFIXLANG . '_' . $mod_data . ' WHERE status= 0')->fetchColumn();
if ($number > 0) {
    $pendinginfo[] = [
        'key' => $lang_siteinfo['siteinfo_queue_comments'],
        'value' => number_format($number),
        'link' => NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $mod . '&amp;sstatus=0',
    ];
}
