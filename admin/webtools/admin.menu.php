<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2021 Tập Đoàn TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://tms.vn
 */

if (!defined('NV_ADMIN')) {
    exit('Stop!!!');
}

$submenu['statistics'] = $lang_module['global_statistics'];
$submenu['clearsystem'] = $lang_module['clearsystem'];
if (empty($global_config['idsite'])) {
    $submenu['checkupdate'] = $lang_module['checkupdate'];
    $submenu['config'] = $lang_module['config'];
}
