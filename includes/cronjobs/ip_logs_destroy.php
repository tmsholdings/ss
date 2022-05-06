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
 * cron_del_ip_logs()
 *
 * @return bool
 */
function cron_del_ip_logs()
{
    $result = true;
    $dir = NV_ROOTDIR . '/' . NV_LOGS_DIR . '/ip_logs';

    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if (preg_match("/^([0-9\-]+)\.log$/", $file) and (filemtime($dir . '/' . $file) + 7200) < NV_CURRENTTIME) {
                //2 gio

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
