<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2021 Tập Đoàn TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://tms.vn
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE') or !defined('NV_IS_MODADMIN')) {
    exit('Stop!!!');
}

$menu_top = [
    'title' => $module_name,
    'module_file' => '',
    'custom_title' => $lang_global['mod_themes']
];

define('NV_IS_FILE_THEMES', true);

// Document
$array_url_instruction['main'] = 'https://wiki.tms.vn/nukeviet4:admin:themes';
$array_url_instruction['config'] = 'https://wiki.tms.vn/nukeviet4:admin:themes:config';
$array_url_instruction['setuplayout'] = 'https://wiki.tms.vn/nukeviet4:admin:themes:setuplayout';
$array_url_instruction['blocks'] = 'https://wiki.tms.vn/nukeviet4:admin:themes:blocks';
$array_url_instruction['xcopyblock'] = 'https://wiki.tms.vn/themes:xcopyblock';
$array_url_instruction['package_theme_module'] = 'https://wiki.tms.vn/themes:package_theme_module';
