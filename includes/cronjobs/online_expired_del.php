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
 * cron_online_expired_del()
 *
 * @return true
 */
function cron_online_expired_del()
{
    global $db;
    $db->query('DELETE FROM ' . NV_SESSIONS_GLOBALTABLE . ' WHERE onl_time < ' . (NV_CURRENTTIME - NV_ONLINE_UPD_TIME));

    return true;
}
