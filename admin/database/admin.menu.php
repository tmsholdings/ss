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

$submenu['file'] = $lang_module['file_backup'];
if (defined('NV_IS_GODADMIN')) {
    $submenu['sampledata'] = $lang_module['sampledata'];
    $submenu['setting'] = $lang_global['mod_settings'];
}
