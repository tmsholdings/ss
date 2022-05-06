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
 * cron_notification_autodel()
 *
 * @return true
 */
function cron_notification_autodel()
{
    global $db, $global_config;

    if ($global_config['notification_autodel']) {
        $db->query('DELETE FROM ' . NV_NOTIFICATION_GLOBALTABLE . ' WHERE add_time > ' . (NV_CURRENTTIME - (86400 * $global_config['notification_autodel'])));
    }

    return true;
}
