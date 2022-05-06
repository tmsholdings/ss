<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2021 Tập Đoàn TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://tms.vn
 */

if (!defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

if (defined('NV_IS_FILE_THEMES')) {
    //include config theme
    require NV_ROOTDIR . '/modules/menu/menu_config.php';
}

if (defined('NV_SYSTEM')) {
    require_once NV_ROOTDIR . '/modules/menu/menu_blocks.php';
    $content = nv_menu_blocks($block_config);
}
