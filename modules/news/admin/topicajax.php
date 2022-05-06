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

$q = $nv_Request->get_title('term', 'get', '', 1);
if (empty($q)) {
    return;
}

$db_slave->sqlreset()
    ->select('title')
    ->from(NV_PREFIXLANG . '_' . $module_data . '_topics')
    ->where('title LIKE :title OR keywords LIKE :keywords')
    ->order('weight ASC')
    ->limit(50);

$sth = $db_slave->prepare($db_slave->sql());
$sth->bindValue(':title', '%' . $q . '%', PDO::PARAM_STR);
$sth->bindValue(':keywords', '%' . $q . '%', PDO::PARAM_STR);
$sth->execute();

$array_data = [];
while (list($title) = $sth->fetch(3)) {
    $array_data[] = $title;
}

nv_jsonOutput($array_data);
