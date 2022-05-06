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

$js = $nv_Request->get_int('js', 'get', 0);
$is_system = $nv_Request->get_int('system', 'get', 0);
$log_userid = $is_system ? 0 : $admin_info['admin_id'];

if ($js) {
    nv_insert_logs(NV_LANG_DATA, 'login', '[' . $admin_info['username'] . '] ' . $lang_global['admin_logout_title'], ' Client IP:' . NV_CLIENT_IP, $log_userid);
    nv_admin_logout();
    session_destroy();
    if (defined('NV_IS_USER_FORUM') OR defined('SSO_SERVER')) {
        require_once NV_ROOTDIR . '/' . $global_config['dir_forum'] . '/nukeviet/logout.php';
    }
    exit('1');
}

$ok = $nv_Request->get_int('ok', 'get', 0);
if ($ok) {
    nv_insert_logs(NV_LANG_DATA, 'login', '[' . $admin_info['username'] . '] ' . $lang_global['admin_logout_title'], ' Client IP:' . NV_CLIENT_IP, $log_userid);
    nv_admin_logout();
    session_destroy();
    $info = $lang_global['admin_logout_ok'];
    $info .= '<meta http-equiv="Refresh" content="5;URL=' . $global_config['site_url'] . '" />';
    if (defined('NV_IS_USER_FORUM') OR defined('SSO_SERVER')) {
        require_once NV_ROOTDIR . '/' . $global_config['dir_forum'] . '/nukeviet/logout.php';
    }
} else {
    $url = ($client_info['referer'] != '') ? $client_info['referer'] : (isset($_SERVER['SCRIPT_URI']) ? $_SERVER['SCRIPT_URI'] : '');
    $info = $lang_global['admin_logout_question'] . " ?<br /><br />\n";
    $info .= '<a href="' . NV_BASE_SITEURL . 'index.php?second=admin_logout&amp;ok=1">' . $lang_global['ok'] . "</a> | \n";
    $info .= '<a href="' . $url . '">' . $lang_global['cancel'] . "</a>\n";
}

nv_info_die($global_config['site_description'], $lang_global['admin_logout_title'], $info);
