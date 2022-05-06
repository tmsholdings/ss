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

$submenu['content'] = $lang_module['voting_add'];

$allow_func = [
    'main',
    'content',
    'del',
    'setting'
];

define('NV_IS_FILE_ADMIN', true);

// Document
$array_url_instruction['main'] = 'https://wiki.tms.vn/nukeviet4:admin:voting';
$array_url_instruction['content'] = 'https://wiki.tms.vn/nukeviet4:admin:voting#them_tham_do';
