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

/**
 * nv_online_upd()
 *
 * @throws PDOException
 */
function nv_online_upd()
{
    global $db, $client_info, $user_info;
    $userid = 0;
    $username = 'guest';
    if (isset($user_info['userid']) and $user_info['userid'] > 0) {
        $userid = $user_info['userid'];
        $username = $user_info['username'];
    } elseif ($client_info['is_bot']) {
        $username = 'bot:' . $client_info['browser']['name'];
    }

    $sth = $db->prepare('UPDATE ' . NV_SESSIONS_GLOBALTABLE . ' SET userid = ' . $userid . ', username = :username, onl_time = ' . NV_CURRENTTIME . ' WHERE session_id = :session_id');
    $sth->bindParam(':session_id', $client_info['session_id'], PDO::PARAM_STR);
    $sth->bindParam(':username', $username, PDO::PARAM_STR);
    $sth->execute();
    if (!$sth->rowCount()) {
        try {
            $sth = $db->prepare('INSERT INTO ' . NV_SESSIONS_GLOBALTABLE . ' VALUES ( :session_id, ' . $userid . ', :username, ' . NV_CURRENTTIME . ')');
            $sth->bindParam(':session_id', $client_info['session_id'], PDO::PARAM_STR);
            $sth->bindParam(':username', $username, PDO::PARAM_STR);
            $sth->execute();
        } catch (PDOException $e) {
            //die($e->getMessage());
        }
    }
}

nv_online_upd();
