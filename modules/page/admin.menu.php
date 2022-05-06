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

$submenu['content'] = $lang_module['add'];

if (defined('NV_IS_SPADMIN')) {
    $submenu['config'] = $lang_module['config'];
}
