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

$allow_func = ['main', 'language', 'smtp'];
if ($site_fulladmin) {
    $allow_func[] = 'system';
    $allow_func[] = 'security';
}
if (defined('NV_IS_GODADMIN')) {
    $allow_func[] = 'ftp';
    $allow_func[] = 'security';
    $allow_func[] = 'cronjobs';
    $allow_func[] = 'cronjobs_add';
    $allow_func[] = 'cronjobs_edit';
    $allow_func[] = 'cronjobs_del';
    $allow_func[] = 'cronjobs_act';
    $allow_func[] = 'plugin';
    $allow_func[] = 'variables';
    $allow_func[] = 'ssettings';
    $allow_func[] = 'cdn_backendhost';
}

$menu_top = [
    'title' => $module_name,
    'module_file' => '',
    'custom_title' => $lang_global['mod_settings']
];

unset($page_title, $select_options);

define('NV_IS_FILE_SETTINGS', true);

//Document
$array_url_instruction['main'] = 'https://wiki.tms.vn/nukeviet4:admin:settings';
$array_url_instruction['system'] = 'https://wiki.tms.vn/nukeviet4:admin:settings:system';
$array_url_instruction['smtp'] = 'https://wiki.tms.vn/nukeviet4:admin:settings:smtp';
$array_url_instruction['security'] = 'https://wiki.tms.vn/nukeviet4:admin:settings:security';
$array_url_instruction['plugin'] = 'https://wiki.tms.vn/nukeviet4:admin:settings:plugin';
$array_url_instruction['cronjobs'] = 'https://wiki.tms.vn/nukeviet4:admin:settings:cronjobs';
$array_url_instruction['ftp'] = 'https://wiki.tms.vn/nukeviet4:admin:settings:ftp';
$array_url_instruction['variables'] = 'https://wiki.tms.vn/nukeviet4:admin:setting:variables';

/**
 * nv_admin_add_theme()
 *
 * @param mixed $contents
 * @return
 */
function nv_admin_add_theme($contents)
{
    global $global_config, $module_file, $my_head, $my_footer, $lang_module;

    $xtpl = new XTemplate('cronjobs_add.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
    $xtpl->assign('LANG', $lang_module);

    $my_head .= '<link type="text/css" href="' . ASSETS_STATIC_URL . "/js/jquery-ui/jquery-ui.min.css\" rel=\"stylesheet\" />\n";

    $my_footer .= '<script type="text/javascript" src="' . ASSETS_STATIC_URL . "/js/jquery-ui/jquery-ui.min.js\"></script>\n";
    $my_footer .= '<script type="text/javascript" src="' . ASSETS_LANG_STATIC_URL . '/js/language/jquery.ui.datepicker-' . NV_LANG_INTERFACE . ".js\"></script>\n";

    if ($contents['is_error']) {
        $xtpl->parse('main.error');
    }

    $xtpl->assign('DATA', $contents);

    foreach ($contents['run_file'][2] as $run) {
        $xtpl->assign('RUN_FILE', ['key' => $run, 'selected' => $contents['run_file'][3] == $run ? ' selected="selected"' : '']);
        $xtpl->parse('main.run_file');
    }

    for ($i = 0; $i < 24; ++$i) {
        $xtpl->assign('HOUR', ['key' => $i, 'selected' => $i == $contents['hour'][1] ? ' selected="selected"' : '']);
        $xtpl->parse('main.hour');
    }

    for ($i = 0; $i < 60; ++$i) {
        $xtpl->assign('MIN', ['key' => $i, 'selected' => $i == $contents['min'][1] ? ' selected="selected"' : '']);
        $xtpl->parse('main.min');
    }

    for ($i = 0; $i < 2; ++$i) {
        $xtpl->assign('INTER_VAL_TYPE', [
            'key' => $i,
            'title' => $lang_module['cron_interval_type' . $i],
            'selected' => $i == $contents['inter_val_type'] ? ' selected="selected"' : ''
        ]);
        $xtpl->parse('main.inter_val_type');
    }

    $xtpl->assign('DELETE', !empty($contents['del'][1]) ? ' checked="checked"' : '');

    $xtpl->parse('main');

    return $xtpl->text('main');
}

/**
 * main_theme()
 *
 * @param mixed $contents
 * @return
 */
function main_theme($contents)
{
    if (empty($contents)) {
        return '';
    }

    global $global_config, $module_name, $module_file, $lang_global, $lang_module;

    $xtpl = new XTemplate('cronjobs_list.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
    $xtpl->assign('GLANG', $lang_global);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('FORM_ACTION', NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=cronjobs');

    $url = urlRewriteWithDomain(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&loadcron=' . md5('cronjobs' . $global_config['sitekey']), NV_MY_DOMAIN);
    if ($global_config['cronjobs_interval'] <= 1 or $global_config['cronjobs_interval'] > 59) {
        $interval = '*';
    } else {
        $interval = '*/' . $global_config['cronjobs_interval'];
    }
    $code = $interval . ' * * * *  /usr/bin/wget --spider &quot;' . $url . '&quot;  &gt;/dev/null 2&gt;&amp;1';
    $xtpl->assign('CRON_CODE', $code);

    if ($global_config['cronjobs_last_time'] > 0) {
        $xtpl->assign('LAST_CRON', sprintf($lang_module['cron_last_time'], nv_date('d/m/Y H:i:s', $global_config['cronjobs_last_time'])));
        $xtpl->assign('NEXT_CRON', sprintf($lang_module['cron_next_time'], nv_date('d/m/Y H:i:s', ($global_config['cronjobs_last_time'] + $global_config['cronjobs_interval'] * 60))));
        $xtpl->parse('main.next_cron');
    }
    
    if (isset($global_config['cronjobs_launcher']) and $global_config['cronjobs_launcher'] == 'server') {
        $xtpl->parse('main.launcher_server');
        $xtpl->parse('main.cron_code');
    } else {
        $xtpl->parse('main.launcher_system');
    }

    for ($i = 1; $i < 60; ++$i) {
        $xtpl->assign('CRON_INTERVAL', [
            'val' => $i,
            'sel' => $i == $global_config['cronjobs_interval'] ? ' selected="selected"' : '',
            'name' => plural($i, $lang_global['plural_min'])
        ]);
        $xtpl->parse('main.cronjobs_interval');
    }

    foreach ($contents as $id => $values) {
        $xtpl->assign('DATA', [
            'caption' => $values['caption'],
            'edit' => empty($values['edit']) ? [] : $values['edit'],
            'disable' => empty($values['disable']) ? [] : $values['disable'],
            'delete' => empty($values['delete']) ? [] : $values['delete'],
            'id' => $id
        ]);

        if (!empty($values['edit'][0])) {
            $xtpl->parse('main.crj.edit');
        }
        if (!empty($values['disable'][0])) {
            $xtpl->parse('main.crj.disable');
        }
        if (!empty($values['delete'][0])) {
            $xtpl->parse('main.crj.delete');
        }

        foreach ($values['detail'] as $key => $value) {
            $xtpl->assign('ROW', [
                'key' => $key,
                'value' => $value
            ]);

            $xtpl->parse('main.crj.loop');
        }

        $xtpl->parse('main.crj');
    }

    $xtpl->parse('main');
    return $xtpl->text('main');
}

/**
 * Cập nhật lại thời điểm thực hiện tiếp theo của Cronjob
 * @return bool
 */
function update_cronjob_next_time()
{
    global $nv_Cache, $db;

    // Kiểm tra xem cron đang chạy không, nếu đang chạy thì không cập nhật
    $files = nv_scandir(NV_ROOTDIR . '/' . NV_LOGS_DIR . '/data_logs/', '/^cronjobs\_(.*)\.txt/i');
    $timeout = NV_CURRENTTIME - 300;
    foreach ($files as $file) {
        if (@filemtime(NV_ROOTDIR . '/' . NV_LOGS_DIR . '/data_logs/' . $file) > $timeout) {
            return true;
        }
    }

    // Xác định thời điểm chạy tiếp theo
    $cronjobs_next_time = 0;
    $sql = 'SELECT start_time, inter_val, inter_val_type, last_time FROM ' . NV_CRONJOBS_GLOBALTABLE . ' WHERE act=1';
    $result = $db->query($sql);
    while ($row = $result->fetch()) {
        if (empty($row['last_time'])) {
            $next_time = $row['start_time'];
        } else {
            $next_time = $row['last_time'] + ($row['inter_val'] * 60);
        }
        if (empty($cronjobs_next_time) or $cronjobs_next_time > $next_time) {
            $cronjobs_next_time = $next_time;
        }
    }

    if ($cronjobs_next_time > 0 and $db->exec('UPDATE ' . NV_CONFIG_GLOBALTABLE . " SET config_value = '" . $cronjobs_next_time . "' WHERE lang = '" . NV_LANG_DATA . "' AND module = 'global' AND config_name = 'cronjobs_next_time' AND (CAST(config_value AS UNSIGNED) <= " . NV_CURRENTTIME . ' OR CAST(config_value AS UNSIGNED) >= ' . $cronjobs_next_time . ')')) {
        $nv_Cache->delMod('settings');
    }

    $nv_Cache->delMod('settings');
}
