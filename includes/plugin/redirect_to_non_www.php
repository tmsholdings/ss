<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2022 Tập Đoàn TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://tms.vn
 */

if (!defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

nv_add_hook($module_name, 'check_server', $priority, function () {
    global $nv_Server;

    $original_host = $nv_Server->getOriginalHost();
    if (str_starts_with($original_host, 'www.')) {
        nv_redirect_location($nv_Server->getOriginalProtocol() . '://' . substr($original_host, 4) . $nv_Server->getOriginalPort() . $_SERVER['REQUEST_URI']);
    }
});
