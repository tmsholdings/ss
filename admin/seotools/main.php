<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2021 Tập Đoàn TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://tms.vn
 */

if (!defined('NV_IS_FILE_SEOTOOLS')) {
    exit('Stop!!!');
}

if (defined('NV_IS_GODADMIN')) {
    $redirect_op = 'pagetitle';
    nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $redirect_op);
}
if (defined('NV_IS_SPADMIN') and $global_config['idsite'] > 0) {
    $redirect_op = 'metatags';
    nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $redirect_op);
}

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
