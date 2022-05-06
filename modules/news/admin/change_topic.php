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
if (!defined('NV_IS_AJAX')) {
    exit('Wrong URL');
}

$topicid = $nv_Request->get_int('topicid', 'post', 0);
$mod = $nv_Request->get_string('mod', 'post', '');
$new_vid = $nv_Request->get_int('new_vid', 'post', 0);

if (empty($topicid)) {
    exit('NO_' . $topicid);
}
$content = 'NO_' . $topicid;

if ($mod == 'weight' and $new_vid > 0) {
    $sql = 'SELECT COUNT(*) FROM ' . NV_PREFIXLANG . '_' . $module_data . '_topics WHERE topicid=' . $topicid;
    $numrows = $db->query($sql)->fetchColumn();
    if ($numrows != 1) {
        exit('NO_' . $topicid);
    }

    $sql = 'SELECT topicid FROM ' . NV_PREFIXLANG . '_' . $module_data . '_topics WHERE topicid!=' . $topicid . ' ORDER BY weight ASC';
    $result = $db->query($sql);

    $weight = 0;
    while ($row = $result->fetch()) {
        ++$weight;
        if ($weight == $new_vid) {
            ++$weight;
        }
        $sql = 'UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_topics SET weight=' . $weight . ' WHERE topicid=' . $row['topicid'];
        $db->query($sql);
    }

    $sql = 'UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_topics SET weight=' . $new_vid . ' WHERE topicid=' . $topicid;
    $db->query($sql);

    $content = 'OK_' . $topicid;
    $nv_Cache->delMod($module_name);
}

include NV_ROOTDIR . '/includes/header.php';
echo $content;
include NV_ROOTDIR . '/includes/footer.php';
