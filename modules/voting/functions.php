<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2021 Tập Đoàn TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://tms.vn
 */

if (!defined('NV_SYSTEM')) {
    exit('Stop!!!');
}

if (!in_array($op, ['detail', 'result'], true)) {
    define('NV_IS_MOD_VOTING', true);
}

if (!empty($array_op)) {
    unset($matches);
    if (preg_match("/^result\-([0-9]+)$/", $array_op[0], $matches)) {
        $id = (int) $matches[1];
        $op = 'result';
    }
}
