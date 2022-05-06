<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2021 Tập Đoàn TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://tms.vn
 */

if (!defined('NV_IS_MOD_RSS')) {
    exit('Stop!!!');
}

/**
 * nv_get_rss_link()
 *
 * @return string
 */
function nv_get_rss_link()
{
    global $db, $nv_Cache, $module_data, $global_config, $site_mods;
    $contentrss = '';

    foreach ($site_mods as $mod_name => $mod_info) {
        if ($mod_info['rss'] == 1 and isset($mod_info['alias']['rss']) and file_exists(NV_ROOTDIR . '/modules/' . $mod_info['module_file'] . '/funcs/rss.php')) {
            $mod_data = $mod_info['module_data'];
            $mod_file = $mod_info['module_file'];

            $contentrss .= '<li><a rel="nofollow" title="' . $mod_info['custom_title'] . '" href="' . NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $mod_name . '&amp;' . NV_OP_VARIABLE . '=' . $mod_info['alias']['rss'] . '">' . $mod_info['custom_title'] . '</a>';
            if (file_exists(NV_ROOTDIR . '/modules/' . $mod_file . '/rssdata.php')) {
                $rssarray = [];
                include NV_ROOTDIR . '/modules/' . $mod_file . '/rssdata.php';

                if (!empty($rssarray)) {
                    $contentrss .= '<ul>';
                    foreach ($rssarray as $value) {
                        $parentid = (isset($value['parentid'])) ? $value['parentid'] : 0;
                        if ($parentid == 0) {
                            $contentrss .= '<li><a rel="nofollow" title="' . $value['title'] . '" href="' . $value['link'] . '">' . $value['title'] . '</a>';
                            $catid = (isset($value['catid'])) ? $value['catid'] : 0;
                            if ($catid > 0) {
                                $contentrss .= nv_get_sub_rss_link($rssarray, $catid);
                            }
                            $contentrss .= '</li>';
                        }
                    }
                    $contentrss .= '</ul>';
                }
                $contentrss .= '</li>';
            }
        }
    }

    return $contentrss;
}

/**
 * nv_get_sub_rss_link()
 *
 * @param array $rssarray
 * @param int   $id
 * @return string
 */
function nv_get_sub_rss_link($rssarray, $id)
{
    $content = '';
    foreach ($rssarray as $value) {
        if (isset($value['parentid']) and $value['parentid'] == $id) {
            $content .= '<li><a rel="nofollow" title="' . $value['title'] . '" href="' . $value['link'] . '">' . $value['title'] . '</a>';
            $catid = (isset($value['catid'])) ? $value['catid'] : 0;
            if ($catid > 0) {
                $content .= nv_get_sub_rss_link($rssarray, $catid);
            }
            $content .= '</li>';
        }
    }

    if (!empty($content)) {
        $content = '<ul>' . $content . '</ul>';
    }

    return $content;
}

$page_title = $module_info['site_title'];
$page_url = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name;
$canonicalUrl = getCanonicalUrl($page_url, true, true);

$array = '';
$content_file = NV_ROOTDIR . '/' . NV_DATADIR . '/' . NV_LANG_DATA . '_' . $module_data . 'Content.txt';
if (file_exists($content_file)) {
    $array = file_get_contents($content_file);
}

$contents = nv_rss_main_theme($array);

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
