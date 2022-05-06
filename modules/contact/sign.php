<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2021 Tập Đoàn TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://tms.vn
 */

if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}

$sign_content = '<br /><br />----------<br />Best regards,<br /><br />' . $admin_info['full_name'] . '<br />';
if (!empty($admin_info['position'])) {
    $sign_content .= $admin_info['position'] . '<br />';
}
$sign_content .= '<br />';
$sign_content .= 'E-mail: ' . $admin_info['email'] . '<br />';
//$sign_content .= 'Website: ' . $global_config['site_name'] . '<br />' . $global_config['site_url'];
