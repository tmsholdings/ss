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

if (!nv_function_exists('nv_news_category')) {
    /**
     * nv_block_config_news_category()
     *
     * @param string $module
     * @param array  $data_block
     * @param array  $lang_block
     * @return string
     */
    function nv_block_config_news_category($module, $data_block, $lang_block)
    {
        global $nv_Cache, $site_mods;

        $html_input = '';
        $html = '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">' . $lang_block['catid'] . ':</label>';
        $html .= '<div class="col-sm-9"><select name="config_catid" class="form-control">';
        $html .= '<option value="0"> -- </option>';
        $sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $site_mods[$module]['module_data'] . '_cat ORDER BY sort ASC';
        $list = $nv_Cache->db($sql, '', $module);
        foreach ($list as $l) {
            if ($l['status'] == 1 or $l['status'] == 2) {
                $xtitle_i = '';

                if ($l['lev'] > 0) {
                    for ($i = 1; $i <= $l['lev']; ++$i) {
                        $xtitle_i .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                    }
                }
                $html_input .= '<input type="hidden" id="config_catid_' . $l['catid'] . '" value="' . NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module . '&amp;' . NV_OP_VARIABLE . '=' . $l['alias'] . '" />';
                $html .= '<option value="' . $l['catid'] . '" ' . (($data_block['catid'] == $l['catid']) ? ' selected="selected"' : '') . '>' . $xtitle_i . $l['title'] . '</option>';
            }
        }
        $html .= '</select>';
        $html .= $html_input;
        $html .= '<script type="text/javascript">';
        $html .= '    $("select[name=config_catid]").change(function() {';
        $html .= '        $("input[name=title]").val(trim($("select[name=config_catid] option:selected").text()));';
        $html .= '        $("input[name=link]").val($("#config_catid_" + $("select[name=config_catid]").val()).val());';
        $html .= '    });';
        $html .= '</script>';
        $html .= '</div></div>';
        $html .= '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">' . $lang_block['title_length'] . ':</label>';
        $html .= '<div class="col-sm-9">';
        $html .= "<select name=\"config_title_length\" class=\"form-control\">\n";
        $html .= '<option value="">' . $lang_block['title_length'] . "</option>\n";
        for ($i = 0; $i < 100; ++$i) {
            $html .= '<option value="' . $i . '" ' . (($data_block['title_length'] == $i) ? ' selected="selected"' : '') . '>' . $i . "</option>\n";
        }
        $html .= "</select>\n";
        $html .= '</div>';
        $html .= '</div>';

        return $html;
    }

    /**
     * nv_block_config_news_category_submit()
     *
     * @param string $module
     * @param array  $lang_block
     * @return array
     */
    function nv_block_config_news_category_submit($module, $lang_block)
    {
        global $nv_Request;
        $return = [];
        $return['error'] = [];
        $return['config'] = [];
        $return['config']['catid'] = $nv_Request->get_int('config_catid', 'post', 0);
        $return['config']['title_length'] = $nv_Request->get_int('config_title_length', 'post', 0);

        return $return;
    }

    /**
     * nv_news_category()
     *
     * @param array $block_config
     * @return string|void
     */
    function nv_news_category($block_config)
    {
        global $module_array_cat, $lang_module, $global_config, $module_name, $catid;

        if (file_exists(NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/news/block_category.tpl')) {
            $block_theme = $global_config['module_theme'];
        } else {
            $block_theme = 'default';
        }

        $xtpl = new XTemplate('block_category.tpl', NV_ROOTDIR . '/themes/' . $block_theme . '/modules/news');

        if (!empty($module_array_cat)) {
            $title_length = $block_config['title_length'];
            $xtpl->assign('LANG', $lang_module);
            $xtpl->assign('BLOCK_ID', $block_config['bid']);
            $xtpl->assign('TEMPLATE', $block_theme);
            $xtpl->assign('MENUID', $block_config['bid']);

            foreach ($module_array_cat as $cat) {
                if (in_array((int) $cat['status'], [1, 2], true) and ($block_config['catid'] == 0 and $cat['parentid'] == 0 or ($block_config['catid'] > 0 and $cat['parentid'] == $block_config['catid']))) {
                    $cat['title0'] = nv_clean60($cat['title'], $title_length);
                    $active = ($module_name == $block_config['module'] and !empty($catid) and $cat['catid'] == $catid);
                    $subcat = '';
                    $subactive = false;
                    if (!empty($cat['subcatid'])) {
                        $subcat = nv_news_sub_category($cat['subcatid'], $title_length, $block_theme, $block_config, $cat['catid'], $subactive);
                    }

                    $cat['active'] = $active ? ' class="active"' : '';
                    $cat['expanded'] = $subactive ? 'true' : 'false';
                    $cat['collapsed'] = $subactive ? '' : ' collapsed';
                    $xtpl->assign('CAT', $cat);

                    if (!empty($subcat)) {
                        $xtpl->assign('SUBCAT', $subcat);
                        $xtpl->parse('main.cat.subcat');
                    }
                    $xtpl->parse('main.cat');
                }
            }

            $xtpl->parse('main');

            return $xtpl->text('main');
        }
    }

    /**
     * nv_news_sub_category()
     *
     * @param string $list_sub
     * @param int    $title_length
     * @param string $block_theme
     * @param int    $parentid
     * @return string
     */
    function nv_news_sub_category($list_sub, $title_length, $block_theme, $block_config, $parentid, &$active)
    {
        global $module_array_cat, $module_name, $catid;

        if (empty($list_sub)) {
            return '';
        }
        $xtpl = new XTemplate('block_category.tpl', NV_ROOTDIR . '/themes/' . $block_theme . '/modules/news');
        $xtpl->assign('MENUID', $block_config['bid']);
        $xtpl->assign('PARENTID', $parentid);

        $show = false;
        $list = explode(',', $list_sub);
        foreach ($list as $_catid) {
            $subcat = $module_array_cat[$_catid];
            $subcat['title0'] = nv_clean60($subcat['title'], $title_length);
            $_active = ($module_name == $block_config['module'] and !empty($catid) and $subcat['catid'] == $catid);

            $sub = '';
            $subactive = false;
            if (!empty($subcat['subcatid'])) {
                $sub = nv_news_sub_category($subcat['subcatid'], $title_length, $block_theme, $block_config, $subcat['catid'], $subactive);
            }

            if (!$active) {
                $active = $_active || $subactive;
            }
            !$show && $show = $_active || $subactive;
            $subcat['active'] = $_active ? ' class="active"' : '';
            $subcat['expanded'] = $subactive ? 'true' : 'false';
            $subcat['collapsed'] = $subactive ? '' : ' collapsed';
            $xtpl->assign('SUBCAT', $subcat);

            if (!empty($sub)) {
                $xtpl->assign('SUB', $sub);
                $xtpl->parse('subcat.loop.sub');
            }
            $xtpl->parse('subcat.loop');
        }

        $xtpl->assign('SHOW', $show ? ' show' : '');
        $xtpl->parse('subcat');

        return $xtpl->text('subcat');
    }
}

if (defined('NV_SYSTEM')) {
    global $site_mods, $module_name, $global_array_cat, $module_array_cat, $nv_Cache, $catid;
    $module = $block_config['module'];
    if (isset($site_mods[$module])) {
        if ($module == $module_name) {
            $module_array_cat = $global_array_cat;
            unset($module_array_cat[0]);
        } else {
            $module_array_cat = [];
            $sql = 'SELECT catid, parentid, title, alias, viewcat, subcatid, numlinks, description, keywords, groups_view, status FROM ' . NV_PREFIXLANG . '_' . $site_mods[$module]['module_data'] . '_cat ORDER BY sort ASC';
            $list = $nv_Cache->db($sql, 'catid', $module);
            if (!empty($list)) {
                foreach ($list as $l) {
                    $module_array_cat[$l['catid']] = $l;
                    $module_array_cat[$l['catid']]['link'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module . '&amp;' . NV_OP_VARIABLE . '=' . $l['alias'];
                }
            }
        }
        $content = nv_news_category($block_config);
    }
}
