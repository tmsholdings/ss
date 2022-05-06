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

$submenu['main'] = $lang_module['nv_lang_data'];
if (empty($global_config['idsite'])) {
    if ($global_config['lang_multi'] and sizeof($global_config['allow_sitelangs']) > 1) {
        $submenu['countries'] = $lang_module['countries'];
    }
    $submenu['interface'] = $lang_module['nv_lang_interface'];
    $submenu['check'] = $lang_module['nv_lang_check'];
    if (defined('NV_IS_GODADMIN')) {
        $submenu['setting'] = $lang_global['mod_settings'];
    }
}
