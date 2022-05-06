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

$site_fulladmin = (defined('NV_IS_GODADMIN') or (defined('NV_IS_SPADMIN') and $global_config['idsite'] > 0));

$submenu['main'] = $lang_module['site_config'];

if ($site_fulladmin) {
    $submenu['system'] = $lang_module['global_config'];
}

if (isset($admin_mods['language'])) {
    $submenu['language'] = $lang_global['mod_language'];
}

$submenu['smtp'] = $lang_module['smtp_config'];

if ($site_fulladmin) {
    $submenu['security'] = $lang_module['security'];
}

if (defined('NV_IS_GODADMIN')) {
    $submenu['plugin'] = $lang_module['plugin'];
    $submenu['cronjobs'] = $lang_global['mod_cronjobs'];
    $submenu['ftp'] = $lang_module['ftp_config'];
    $submenu['cdn_backendhost'] = $lang_module['cdn_backendhost'];
    $submenu['ssettings'] = $lang_module['ssettings'];
    $submenu['variables'] = $lang_module['variables'];
}
