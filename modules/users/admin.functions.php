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

define('NV_IS_FILE_ADMIN', true);

//Document
$array_url_instruction['main'] = 'https://wiki.tms.vn/nukeviet4:admin:users';
$array_url_instruction['user_add'] = 'https://wiki.tms.vn/nukeviet4:admin:users#them_tai_khoản_mới';
$array_url_instruction['user_waiting'] = 'https://wiki.tms.vn/nukeviet4:admin:users#thanh_vien_dợi_kich_hoạt';
$array_url_instruction['groups'] = 'https://wiki.tms.vn/nukeviet4:admin:users#nhom_thanh_vien';
$array_url_instruction['question'] = 'https://wiki.tms.vn/nukeviet4:admin:users#cau_hỏi_bảo_mật';
$array_url_instruction['siteterms'] = 'https://wiki.tms.vn/nukeviet4:admin:users#nội_quy_site';
$array_url_instruction['fields'] = 'https://wiki.tms.vn/nukeviet4:admin:users#tuy_biến_dữ_liệu';
$array_url_instruction['config'] = 'https://wiki.tms.vn/nukeviet4:admin:users#cấu_hinh_module_thanh_vien';
$array_url_instruction['editcensor'] = 'https://wiki.tms.vn/nukeviet4:admin:users#kiểm_duyệt_thong_tin_chỉnh_sửa_của_thanh_vien';

define('NV_MOD_TABLE', ($module_data == 'users') ? NV_USERS_GLOBALTABLE : $db_config['prefix'] . '_' . $module_data);

// Xác định cấu hình module
$global_users_config = [];
$cacheFile = NV_LANG_DATA . '_' . $module_data . '_config_' . NV_CACHE_PREFIX . '.cache';
$cacheTTL = 3600;
if (($cache = $nv_Cache->getItem($module_name, $cacheFile, $cacheTTL)) != false) {
    $global_users_config = unserialize($cache);
} else {
    $sql = 'SELECT config, content FROM ' . NV_MOD_TABLE . '_config';
    $result = $db->query($sql);
    while ($row = $result->fetch()) {
        $global_users_config[$row['config']] = $row['content'];
    }
    $cache = serialize($global_users_config);
    $nv_Cache->setItem($module_name, $cacheFile, $cache, $cacheTTL);
}

require NV_ROOTDIR . '/modules/' . $module_file . '/global.functions.php';

$array_systemfield_cfg = [
    'first_name' => [0, 100],
    'last_name' => [0, 100],
    'question' => [3, 255],
    'answer' => [3, 255],
    'sig' => [0, 1000]
];
