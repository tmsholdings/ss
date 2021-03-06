<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2021 Tập Đoàn TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://tms.vn
 */

if (!defined('NV_MAINFILE') or !defined('NV_IS_CRON')) {
    exit('Stop!!!');
}

/**
 * cron_auto_del_cache()
 *
 * @return bool
 */
function cron_auto_del_cache()
{
    $result = true;
    $dir = NV_ROOTDIR . '/' . NV_CACHEDIR;

    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if (preg_match("/(.*)\.cache/", $file) and (filemtime($dir . '/' . $file) + 3600) < NV_CURRENTTIME) {
                if (!@unlink($dir . '/' . $file)) {
                    $result = false;
                }
            }
        }

        closedir($dh);
        clearstatcache();
    }

    return $result;
}
