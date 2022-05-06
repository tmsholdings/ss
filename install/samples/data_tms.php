<?php

/**
 * TMS cms Management System
 * @version 4.x
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2022 Tập Đoàn TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://tms.vn
 */

if (!defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

$sample_base_siteurl = '/';
$sql_create_table = [];


$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_authors_oauth`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_authors_oauth` (
  `id` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int unsigned NOT NULL COMMENT 'ID của quản trị',
  `oauth_server` varchar(50) NOT NULL COMMENT 'Eg: facebook, google...',
  `oauth_uid` varchar(50) NOT NULL COMMENT 'ID duy nhất ứng với server',
  `oauth_email` varchar(50) NOT NULL COMMENT 'Email',
  `oauth_id` varchar(50) NOT NULL DEFAULT '',
  `addtime` int unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_id` (`admin_id`,`oauth_server`,`oauth_uid`),
  KEY `oauth_email` (`oauth_email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci COMMENT='Bảng lưu xác thực 2 bước từ oauth của admin'";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'admin_theme', 'admin_default')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'date_pattern', 'l, d/m/Y')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'time_pattern', 'H:i')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'online_upd', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'statistic', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'site_phone', '02877777676')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'mailer_mode', 'mail')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'smtp_host', 'smtp.gmail.com')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'smtp_ssl', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'smtp_port', '465')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'verify_peer_ssl', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'verify_peer_name_ssl', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'smtp_username', 'user@gmail.com')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'smtp_password', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'sender_name', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'sender_email', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'reply_name', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'reply_email', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'force_sender', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'force_reply', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'notify_email_error', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'googleAnalyticsID', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'googleAnalyticsSetDomainName', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'googleAnalyticsMethod', 'classic')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'googleAnalytics4ID', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'searchEngineUniqueID', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'zaloOAAccessTokenTime', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'zaloOARefreshToken', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'zaloOAAccessToken', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'zaloAppSecretKey', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'zaloAppID', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'metaTagsOgp', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'pageTitleMode', 'pagetitle')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'description_length', '170')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_unickmin', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_unickmax', '20')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_upassmin', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_upassmax', '32')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'dir_forum', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_unick_type', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_upass_type', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowmailchange', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowuserpublic', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowquestion', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowloginchange', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowuserlogin', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowuserloginmulti', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'allowuserreg', '2')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'is_user_forum', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'openid_servers', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'openid_processing', 'connect,create,auto')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'user_check_pass_time', '59940')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'auto_login_after_reg', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'email_dot_equivalent', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'whoviewuser', '2')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'ssl_https', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'facebook_client_id', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'facebook_client_secret', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'google_client_id', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'google_client_secret', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'referer_blocker', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'private_site', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'max_user_admin', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'max_user_number', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'captcha_area', 'r,m,p')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'captcha_type', 'captcha')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'dkim_included', 'sendmail,mail')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'smime_included', 'sendmail,mail')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_csp', '{\"default-src\":{\"self\":1},\"script-src\":{\"self\":1,\"unsafe-inline\":1,\"unsafe-eval\":1,\"hosts\":[\"*.google.com\",\"*.google-analytics.com\",\"*.googletagmanager.com\",\"*.gstatic.com\",\"*.facebook.com\",\"*.facebook.net\",\"*.twitter.com\",\"*.zalo.me\",\"*.zaloapp.com\",\"*.tawk.to\",\"*.cloudflareinsights.com\"]},\"style-src\":{\"self\":1,\"data\":1,\"unsafe-inline\":1,\"hosts\":[\"*.google.com\",\"*.googleapis.com\",\"*.tawk.to\"]},\"img-src\":{\"self\":1,\"data\":1,\"hosts\":[\"*.twitter.com\",\"*.google.com\",\"*.googleapis.com\",\"*.google-analytics.com\",\"*.gstatic.com\",\"*.facebook.com\",\"tawk.link\",\"*.tawk.to\",\"static.tms.vn\"]},\"font-src\":{\"self\":1,\"data\":1,\"hosts\":[\"*.googleapis.com\",\"*.gstatic.com\",\"*.tawk.to\"]},\"connect-src\":{\"self\":1,\"hosts\":[\"*.google-analytics.com\",\"*.zalo.me\",\"*.tawk.to\",\"wss://*.tawk.to\"]},\"media-src\":{\"self\":1,\"hosts\":[\"*.tawk.to\"]},\"frame-src\":{\"self\":1,\"hosts\":[\"*.google.com\",\"*.youtube.com\",\"*.facebook.com\",\"*.facebook.net\",\"*.twitter.com\",\"*.zalo.me\"]},\"form-action\":{\"self\":1,\"hosts\":[\"*.google.com\"]}}')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_csp_act', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_csp_script_nonce', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_rp', 'no-referrer-when-downgrade, strict-origin-when-cross-origin')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'nv_rp_act', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'pass_timeout', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'oldpass_num', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'send_pass', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'ogp_image', 'uploads/tms-holdings-ho-chi-minh.jpg')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'cronjobs_last_time', '1651616783')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'cronjobs_interval', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'cronjobs_launcher', 'system')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_gfx_num', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'closed_site', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'site_reopening_time', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'notification_active', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'notification_autodel', '15')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'site_keywords', 'NukeViet, portal, mysql, php')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'block_admin_ip', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'admfirewall', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'dump_autobackup', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'dump_backup_ext', 'gz')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'dump_backup_day', '30')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'file_allowed_ext', 'adobe,archives,audio,documents,flash,images,real,video')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'forbid_extensions', 'htm,html,htmls,js,php,php3,php4,php5,phtml,inc')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'forbid_mimes', 'application/ecmascript,application/javascript,application/x-javascript,text/ecmascript,text/html,text/javascript,application/x-httpd-php,application/x-httpd-php-source,application/php,application/x-php,text/php,text/x-php')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'nv_max_size', '134217728')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'nv_overflow_size', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'upload_checking_mode', 'strong')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'upload_alt_require', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'upload_auto_alt', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'upload_chunk_size', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'useactivate', '2')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'allow_sitelangs', 'vi')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'read_type', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'rewrite_enable', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'rewrite_optional', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'rewrite_endurl', '/')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'rewrite_exturl', '.html')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'rewrite_op_mod', 'news')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'autocheckupdate', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'autoupdatetime', '24')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'gzip_method', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'resource_preload', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'authors_detail_main', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'spadmin_add_admin', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'timestamp', '1651616645')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'version', '4.6.00')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'cookie_httponly', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'admin_check_pass_time', '1800')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'admin_user_logout', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'cookie_secure', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'cookie_SameSite', 'Lax')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'is_flood_blocker', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'max_requests_60', '40')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'max_requests_300', '150')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'is_login_blocker', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'login_number_tracking', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'login_time_tracking', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'login_time_ban', '30')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'nv_display_errors_list', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'display_errors_list', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'nv_auto_resize', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'dump_interval', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'nv_static_url', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'cdn_url', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'assets_cdn', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'two_step_verification', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'admin_2step_opt', 'code')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'admin_2step_default', 'code')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'recaptcha_sitekey', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'recaptcha_secretkey', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'recaptcha_type', 'image')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'recaptcha_ver', '2')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'users_special', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'crosssite_restrict', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'crosssite_valid_domains', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'crosssite_valid_ips', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'crosssite_allowed_variables', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'crossadmin_restrict', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'crossadmin_valid_domains', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'crossadmin_valid_ips', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'domains_whitelist', '[\"youtube.com\",\"www.youtube.com\",\"google.com\",\"www.google.com\",\"drive.google.com\",\"docs.google.com\"]')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'domains_restrict', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'remote_api_access', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'remote_api_log', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'allow_null_origin', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ip_allow_null_origin', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'cookie_notice_popup', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'zaloOfficialAccountID', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'end_url_variables', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'request_uri_check', 'page')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'XSSsanitize', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'admin_XSSsanitize', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_gfx_width', '150')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_gfx_height', '40')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_max_width', '2500')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_max_height', '2500')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_mobile_mode_img', '480')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_live_cookie_time', '31104000')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_live_session_time', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_anti_iframe', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_anti_agent', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_allowed_html_tags', 'embed, object, param, a, b, blockquote, br, caption, col, colgroup, div, em, h1, h2, h3, h4, h5, h6, hr, i, img, li, p, span, strong, s, sub, sup, table, tbody, td, th, tr, u, ul, ol, iframe, figure, figcaption, video, audio, source, track, code, pre')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'define', 'nv_debug', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_domain', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_logo', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_banner', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_favicon', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_description', 'Siêu Sàn - Tạo Gian Hàng Website Miễn Phí - Tạo Website Miễn Phí Trọn Đời')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_keywords', 'thiết kế website miễn phí, thiết kế web, gian hàng miễn phí, website bất động sản, siêu sàn')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'theme_type', 'r')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_theme', 'default')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'preview_theme', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'user_allowed_theme', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'mobile_theme', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'site_home_module', 'home')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'switch_mobi_des', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'upload_logo', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'upload_logo_pos', 'bottomRight')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'autologosize1', '50')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'autologosize2', '40')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'autologosize3', '30')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'autologomod', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'name_show', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'disable_site_content', 'Vì lý do kỹ thuật website tạm ngưng hoạt động. Thành thật xin lỗi các bạn vì sự bất tiện này!')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'global', 'opensearch_link', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'seotools', 'prcservice', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'auto_postcomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'allowed_comm', '-1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'view_comm', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'setcomm', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'activecomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'emailcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'adminscomm', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'sortcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'captcha_area_comm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'perpagecomm', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'timeoutcomm', '360')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'allowattachcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'about', 'alloweditorcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'zaloOASecretKey', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'zaloWebhookIPs', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'check_zaloip_expired', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'indexfile', 'viewcat_main_right')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'mobile_indexfile', 'viewcat_page_new')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'per_page', '20')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'st_links', '10')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'homewidth', '100')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'homeheight', '150')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'blockwidth', '70')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'blockheight', '75')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'imagefull', '460')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'copyright', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'showtooltip', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'tooltip_position', 'bottom')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'tooltip_length', '150')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'showhometext', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'timecheckstatus', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'config_source', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'show_no_image', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'allowed_rating', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'allowed_rating_point', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'facebookappid', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'socialbutton', 'facebook,twitter')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'alias_lower', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'tags_alias', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'auto_tags', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'tags_remind', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'keywords_tag', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'copy_news', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'structure_upload', 'Ym')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'imgposition', '2')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'htmlhometext', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'order_articles', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'identify_cat_change', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'elas_use', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'elas_host', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'elas_port', '9200')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'elas_index', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'instant_articles_active', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'instant_articles_template', 'default')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'instant_articles_httpauth', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'instant_articles_username', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'instant_articles_password', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'instant_articles_livetime', '60')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'instant_articles_gettime', '120')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'instant_articles_auto', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'auto_postcomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'allowed_comm', '-1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'view_comm', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'setcomm', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'activecomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'emailcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'adminscomm', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'sortcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'captcha_area_comm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'perpagecomm', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'timeoutcomm', '360')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'allowattachcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'alloweditorcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'frontend_edit_alias', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'frontend_edit_layout', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'news', 'captcha_type', 'captcha')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'contact', 'bodytext', 'Để không ngừng nâng cao chất lượng dịch vụ và đáp ứng tốt hơn nữa các yêu cầu của Quý khách, chúng tôi mong muốn nhận được các thông tin phản hồi. Nếu Quý khách có bất kỳ thắc mắc hoặc đóng góp nào, xin vui lòng liên hệ với chúng tôi theo thông tin dưới đây. Chúng tôi sẽ phản hồi lại Quý khách trong thời gian sớm nhất.')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'contact', 'sendcopymode', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'contact', 'captcha_type', 'captcha')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'auto_postcomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'allowed_comm', '-1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'view_comm', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'setcomm', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'activecomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'emailcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'adminscomm', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'sortcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'captcha_area_comm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'perpagecomm', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'timeoutcomm', '360')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'allowattachcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'page', 'alloweditorcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'comment', 'captcha_type', 'captcha')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'auto_postcomm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'allowed_comm', '-1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'view_comm', '6')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'setcomm', '4')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'activecomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'emailcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'adminscomm', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'sortcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'captcha_area_comm', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'perpagecomm', '5')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'timeoutcomm', '360')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'allowattachcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'siteterms', 'alloweditorcomm', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'banners', 'captcha_type', 'captcha')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('vi', 'home', 'next_execute', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'statistics_timezone', 'Asia/Bangkok')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'site', 'site_email', 'doitac@sieusan.vn')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'error_set_logs', '1')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'error_send_email', 'info@tms.vn')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'site_lang', 'vi')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'my_domains', 'quanlybds')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'site_timezone', 'byCountry')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'proxy_blocker', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'str_referer_blocker', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'lang_geo', '0')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ftp_server', 'localhost')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ftp_port', '21')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ftp_user_name', '')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ftp_user_pass', '6cwENY8FwUF3PfD0zqjz5Q,,')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ftp_path', '/')";
$sql_create_table[] = "REPLACE INTO `" . $db_config['prefix'] . "_config` (`lang`, `module`, `config_name`, `config_value`) VALUES ('sys', 'global', 'ftp_check_login', '0')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_cronjobs`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_cronjobs` (
  `id` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `start_time` int unsigned NOT NULL DEFAULT '0',
  `inter_val` int unsigned NOT NULL DEFAULT '0',
  `inter_val_type` tinyint unsigned NOT NULL DEFAULT '0' COMMENT '0: Lặp lại sau thời điểm bắt đầu thực tế, 1:lặp lại sau thời điểm bắt đầu trong CSDL',
  `run_file` varchar(255) NOT NULL,
  `run_func` varchar(255) NOT NULL,
  `params` varchar(255) DEFAULT NULL,
  `del` tinyint unsigned NOT NULL DEFAULT '0',
  `is_sys` tinyint unsigned NOT NULL DEFAULT '0',
  `act` tinyint unsigned NOT NULL DEFAULT '0',
  `last_time` int unsigned NOT NULL DEFAULT '0',
  `last_result` tinyint unsigned NOT NULL DEFAULT '0',
  `vi_cron_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `is_sys` (`is_sys`)
) ENGINE=MyISAM  AUTO_INCREMENT=10  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (1, 1651615164, 5, 0, 'online_expired_del.php', 'cron_online_expired_del', '', 0, 1, 1, 1651616783, 1, 'Xóa các dòng ghi trạng thái online đã cũ trong CSDL')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (2, 1651615164, 1440, 0, 'dump_autobackup.php', 'cron_dump_autobackup', '', 0, 1, 1, 1651615189, 1, 'Tự động lưu CSDL')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (3, 1651615164, 60, 0, 'temp_download_destroy.php', 'cron_auto_del_temp_download', '', 0, 1, 1, 1651615189, 1, 'Xóa các file tạm trong thư mục tmp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (4, 1651615164, 30, 0, 'ip_logs_destroy.php', 'cron_del_ip_logs', '', 0, 1, 1, 1651615189, 1, 'Xóa IP log files, Xóa các file nhật ký truy cập')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (5, 1651615164, 1440, 0, 'error_log_destroy.php', 'cron_auto_del_error_log', '', 0, 1, 1, 1651615189, 1, 'Xóa các file error_log quá hạn')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (6, 1651615164, 360, 0, 'error_log_sendmail.php', 'cron_auto_sendmail_error_log', '', 0, 1, 0, 0, 0, 'Gửi email các thông báo lỗi cho admin')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (7, 1651615164, 60, 0, 'ref_expired_del.php', 'cron_ref_expired_del', '', 0, 1, 1, 1651615189, 1, 'Xóa các referer quá hạn')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (8, 1651615164, 60, 0, 'check_version.php', 'cron_auto_check_version', '', 0, 1, 1, 1651615189, 1, 'Kiểm tra phiên bản NukeViet')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_cronjobs` (`id`, `start_time`, `inter_val`, `inter_val_type`, `run_file`, `run_func`, `params`, `del`, `is_sys`, `act`, `last_time`, `last_result`, `vi_cron_name`) VALUES (9, 1651615164, 1440, 0, 'notification_autodel.php', 'cron_notification_autodel', '', 0, 1, 1, 1651615189, 1, 'Xóa thông báo cũ')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_extension_files`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_extension_files` (
  `idfile` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL DEFAULT 'other',
  `title` varchar(55) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `lastmodified` int unsigned NOT NULL DEFAULT '0',
  `duplicate` smallint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`idfile`)
) ENGINE=MyISAM  AUTO_INCREMENT=76  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_ips`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_ips` (
  `id` mediumint NOT NULL AUTO_INCREMENT,
  `type` tinyint unsigned NOT NULL DEFAULT '0',
  `ip` varchar(32) DEFAULT NULL,
  `mask` tinyint unsigned NOT NULL DEFAULT '0',
  `area` tinyint NOT NULL,
  `begintime` int DEFAULT NULL,
  `endtime` int DEFAULT NULL,
  `notice` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip` (`ip`,`type`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_ips` (`id`, `type`, `ip`, `mask`, `area`, `begintime`, `endtime`, `notice`) VALUES (1, 1, '127.0.0.1', 0, 1, 1651615185, 0, '')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_language`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_language` (
  `id` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `idfile` mediumint unsigned NOT NULL DEFAULT '0',
  `langtype` varchar(50) NOT NULL DEFAULT 'lang_module',
  `lang_key` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `filelang` (`idfile`,`lang_key`,`langtype`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_language_file`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_language_file` (
  `idfile` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `module` varchar(50) NOT NULL,
  `admin_file` varchar(200) NOT NULL DEFAULT '0',
  `langtype` varchar(50) NOT NULL DEFAULT 'lang_module',
  PRIMARY KEY (`idfile`),
  UNIQUE KEY `module` (`module`,`admin_file`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_notification`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_notification` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `admin_view_allowed` tinyint unsigned NOT NULL DEFAULT '0' COMMENT 'Cấp quản trị được xem: 0,1,2',
  `logic_mode` tinyint unsigned NOT NULL DEFAULT '0' COMMENT '0: Cấp trên xem được cấp dưới, 1: chỉ cấp hoặc người được chỉ định',
  `send_to` varchar(250) NOT NULL DEFAULT '' COMMENT 'Danh sách id người nhận, phân cách bởi dấu phảy',
  `send_from` mediumint unsigned NOT NULL DEFAULT '0',
  `area` tinyint unsigned NOT NULL,
  `language` char(3) NOT NULL,
  `module` varchar(50) NOT NULL,
  `obid` int unsigned NOT NULL DEFAULT '0',
  `type` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `add_time` int unsigned NOT NULL,
  `view` tinyint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `send_to` (`send_to`),
  KEY `admin_view_allowed` (`admin_view_allowed`),
  KEY `logic_mode` (`logic_mode`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_plugins`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_plugins` (
  `pid` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `plugin_lang` varchar(3) NOT NULL DEFAULT 'all',
  `plugin_file` varchar(50) NOT NULL,
  `plugin_area` varchar(50) NOT NULL DEFAULT '',
  `plugin_module_name` varchar(50) NOT NULL DEFAULT '',
  `plugin_module_file` varchar(50) NOT NULL DEFAULT '',
  `hook_module` varchar(50) NOT NULL DEFAULT '',
  `weight` tinyint NOT NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `plugin` (`plugin_lang`,`plugin_file`,`plugin_area`,`plugin_module_name`,`hook_module`)
) ENGINE=MyISAM  AUTO_INCREMENT=1001  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_plugins` (`pid`, `plugin_lang`, `plugin_file`, `plugin_area`, `plugin_module_name`, `plugin_module_file`, `hook_module`, `weight`) VALUES (1, 'all', 'qrcode.php', 'get_qr_code', '', '', '', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_plugins` (`pid`, `plugin_lang`, `plugin_file`, `plugin_area`, `plugin_module_name`, `plugin_module_file`, `hook_module`, `weight`) VALUES (2, 'all', 'cdn_js_css_image.php', 'change_site_buffer', '', '', '', 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_setup_extensions`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_setup_extensions` (
  `id` int NOT NULL DEFAULT '0',
  `type` varchar(10) NOT NULL DEFAULT 'other',
  `title` varchar(55) NOT NULL,
  `is_sys` tinyint(1) NOT NULL DEFAULT '0',
  `is_virtual` tinyint(1) NOT NULL DEFAULT '0',
  `basename` varchar(50) NOT NULL DEFAULT '',
  `table_prefix` varchar(55) NOT NULL DEFAULT '',
  `version` varchar(50) NOT NULL,
  `addtime` int NOT NULL DEFAULT '0',
  `author` text NOT NULL,
  `note` varchar(255) DEFAULT '',
  UNIQUE KEY `title` (`type`,`title`),
  KEY `id` (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'about', 1, 1, 'about', 'about', '4.5.00 1626512400', 1651615773, 'Tập Đoàn TMS Holdings <contact@tms.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'zalo', 1, 0, 'zalo', 'zalo', '4.6.00 1637048941', 1651615164, 'Tập Đoàn TMS Holdings <contact@tms.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (20, 'module', 'contact', 0, 1, 'contact', 'contact', '4.5.00 1626512400', 1651615164, 'Tập Đoàn TMS Holdings <contact@tms.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (1, 'module', 'news', 0, 1, 'news', 'news', '4.5.00 1626512400', 1651615164, 'Tập Đoàn TMS Holdings <contact@tms.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (284, 'module', 'seek', 1, 0, 'seek', 'seek', '4.5.00 1626512400', 1651615164, 'Tập Đoàn TMS Holdings <contact@tms.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (24, 'module', 'users', 1, 1, 'users', 'users', '4.5.00 1626512400', 1651615164, 'Tập Đoàn TMS Holdings <contact@tms.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (27, 'module', 'statistics', 0, 0, 'statistics', 'statistics', '4.5.00 1626512400', 1651615164, 'Tập Đoàn TMS Holdings <contact@tms.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (29, 'module', 'menu', 0, 0, 'menu', 'menu', '4.5.00 1626512400', 1651615164, 'Tập Đoàn TMS Holdings <contact@tms.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (283, 'module', 'feeds', 1, 0, 'feeds', 'feeds', '4.5.00 1626512400', 1651615164, 'Tập Đoàn TMS Holdings <contact@tms.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (282, 'module', 'page', 1, 1, 'page', 'page', '4.5.00 1626512400', 1651615164, 'Tập Đoàn TMS Holdings <contact@tms.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (281, 'module', 'comment', 1, 0, 'comment', 'comment', '4.5.00 1626512400', 1651615164, 'Tập Đoàn TMS Holdings <contact@tms.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (0, 'module', 'home', 1, 0, 'home', 'home', '4.3.06 1651615654', 1651615654, 'Tập Đoàn TMS Holdings <contact@tms.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (327, 'module', 'two-step-verification', 1, 0, 'two-step-verification', 'two_step_verification', '4.5.00 1626512400', 1651615164, 'Tập Đoàn TMS Holdings <contact@tms.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (307, 'theme', 'default', 0, 0, 'default', 'default', '4.5.00 1626512400', 1651615164, 'Tập Đoàn TMS Holdings <contact@tms.vn>', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_extensions` (`id`, `type`, `title`, `is_sys`, `is_virtual`, `basename`, `table_prefix`, `version`, `addtime`, `author`, `note`) VALUES (311, 'theme', 'mobile_default', 0, 0, 'mobile_default', 'mobile_default', '4.5.00 1626512400', 1651615164, 'Tập Đoàn TMS Holdings <contact@tms.vn>', '')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_setup_language`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_setup_language` (
  `lang` char(2) NOT NULL,
  `setup` tinyint(1) NOT NULL DEFAULT '0',
  `weight` smallint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`lang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_setup_language` (`lang`, `setup`, `weight`) VALUES ('vi', 1, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_backupcodes`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_backupcodes` (
  `userid` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `is_used` tinyint unsigned NOT NULL DEFAULT '0',
  `time_used` int unsigned NOT NULL DEFAULT '0',
  `time_creat` int unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `userid` (`userid`,`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_config`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_config` (
  `config` varchar(100) NOT NULL,
  `content` text,
  `edit_time` int unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`config`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('access_admin', 'a:8:{s:15:\"access_viewlist\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:12:\"access_addus\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:14:\"access_waiting\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:17:\"access_editcensor\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:13:\"access_editus\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:12:\"access_delus\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:13:\"access_passus\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:13:\"access_groups\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}}', 1651615511)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('password_simple', '000000|1234|2000|12345|111111|123123|123456|654321|696969|1234567|1234569|11223344|12345678|12345679|23456789|66666666|66668888|68686868|87654321|88888888|99999999|123456789|999999999|1234567890|aaaaaa|abc123|abc123@|abc@123|admin123|admin123@|admin@123|adobe1|adobe123|azerty|baseball|dragon|football|harley|hoilamgi|iloveyou|jennifer|jordan|khongbiet|khongco|khongcopass|letmein|macromedia|master|michael|monkey|mustang|nuke123|nuke123@|nuke@123|password|photoshop|pussy|qwerty|shadow|superman', 1651615511)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('deny_email', 'yoursite.com|mysite.com|localhost|xxx', 1651615511)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('deny_name', 'anonimo|anonymous|god|linux|nobody|operator|root', 1651615511)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('avatar_width', '80', 1651615511)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('avatar_height', '80', 1651615511)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('active_group_newusers', '0', 1651615511)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('active_editinfo_censor', '0', 1651615511)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('active_user_logs', '1', 1651615511)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('min_old_user', '16', 1651615511)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('register_active_time', '86400', 1651615164)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('auto_assign_oauthuser', '0', 1651615511)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('admin_email', '0', 1651615511)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_config` (`config`, `content`, `edit_time`) VALUES ('siteterms_vi', '<p> Để trở thành thành viên, bạn phải cam kết đồng ý với các điều khoản dưới đây. Chúng tôi có thể thay đổi lại những điều khoản này vào bất cứ lúc nào và chúng tôi sẽ cố gắng thông báo đến bạn kịp thời.<br /> <br /> Bạn cam kết không gửi bất cứ bài viết có nội dung lừa đảo, thô tục, thiếu văn hoá; vu khống, khiêu khích, đe doạ người khác; liên quan đến các vấn đề tình dục hay bất cứ nội dung nào vi phạm luật pháp của quốc gia mà bạn đang sống, luật pháp của quốc gia nơi đặt máy chủ của website này hay luật pháp quốc tế. Nếu vẫn cố tình vi phạm, ngay lập tức bạn sẽ bị cấm tham gia vào website. Địa chỉ IP của tất cả các bài viết đều được ghi nhận lại để bảo vệ các điều khoản cam kết này trong trường hợp bạn không tuân thủ.<br /> <br /> Bạn đồng ý rằng website có quyền gỡ bỏ, sửa, di chuyển hoặc khoá bất kỳ bài viết nào trong website vào bất cứ lúc nào tuỳ theo nhu cầu công việc.<br /> <br /> Đăng ký làm thành viên của chúng tôi, bạn cũng phải đồng ý rằng, bất kỳ thông tin cá nhân nào mà bạn cung cấp đều được lưu trữ trong cơ sở dữ liệu của hệ thống. Mặc dù những thông tin này sẽ không được cung cấp cho bất kỳ người thứ ba nào khác mà không được sự đồng ý của bạn, chúng tôi không chịu trách nhiệm về việc những thông tin cá nhân này của bạn bị lộ ra bên ngoài từ những kẻ phá hoại có ý đồ xấu tấn công vào cơ sở dữ liệu của hệ thống.</p>', 1274757129)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_edit`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_edit` (
  `userid` mediumint unsigned NOT NULL,
  `lastedit` int unsigned NOT NULL DEFAULT '0',
  `info_basic` text NOT NULL,
  `info_custom` text NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_field`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_field` (
  `fid` mediumint NOT NULL AUTO_INCREMENT,
  `field` varchar(25) NOT NULL,
  `weight` int unsigned NOT NULL DEFAULT '1',
  `field_type` enum('number','date','textbox','textarea','editor','select','radio','checkbox','multiselect') NOT NULL DEFAULT 'textbox',
  `field_choices` text NOT NULL,
  `sql_choices` text NOT NULL,
  `match_type` enum('none','alphanumeric','unicodename','email','url','regex','callback') NOT NULL DEFAULT 'none',
  `match_regex` varchar(250) NOT NULL DEFAULT '',
  `func_callback` varchar(75) NOT NULL DEFAULT '',
  `min_length` int NOT NULL DEFAULT '0',
  `max_length` bigint unsigned NOT NULL DEFAULT '0',
  `required` tinyint unsigned NOT NULL DEFAULT '0',
  `show_register` tinyint unsigned NOT NULL DEFAULT '0',
  `user_editable` tinyint unsigned NOT NULL DEFAULT '0',
  `show_profile` tinyint NOT NULL DEFAULT '1',
  `class` varchar(50) NOT NULL,
  `language` text NOT NULL,
  `default_value` varchar(255) NOT NULL DEFAULT '',
  `is_system` tinyint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fid`),
  UNIQUE KEY `field` (`field`)
) ENGINE=MyISAM  AUTO_INCREMENT=8  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `is_system`) VALUES (1, 'first_name', 1, 'textbox', '', '', 'none', '', '', 0, 100, 1, 1, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:4:\"Tên\";i:1;s:0:\"\";}}', '', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `is_system`) VALUES (2, 'last_name', 2, 'textbox', '', '', 'none', '', '', 0, 100, 0, 1, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:20:\"Họ và tên đệm\";i:1;s:0:\"\";}}', '', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `is_system`) VALUES (3, 'gender', 3, 'select', 'a:3:{s:1:\"N\";s:3:\"N/A\";s:1:\"M\";s:3:\"Nam\";s:1:\"F\";s:4:\"Nữ\";}', '', 'none', '', '', 0, 255, 0, 0, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:12:\"Giới tính\";i:1;s:0:\"\";}}', '2', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `is_system`) VALUES (4, 'birthday', 4, 'date', 'a:1:{s:12:\"current_date\";i:0;}', '', 'none', '', '', 0, 0, 0, 0, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:22:\"Ngày tháng năm sinh\";i:1;s:0:\"\";}}', '0', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `is_system`) VALUES (5, 'sig', 5, 'textarea', '', '', 'none', '', '', 0, 1000, 0, 0, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:9:\"Chữ ký\";i:1;s:0:\"\";}}', '', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `is_system`) VALUES (6, 'question', 6, 'textbox', '', '', 'none', '', '', 3, 255, 1, 1, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:22:\"Câu hỏi bảo mật\";i:1;s:0:\"\";}}', '', 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_field` (`fid`, `field`, `weight`, `field_type`, `field_choices`, `sql_choices`, `match_type`, `match_regex`, `func_callback`, `min_length`, `max_length`, `required`, `show_register`, `user_editable`, `show_profile`, `class`, `language`, `default_value`, `is_system`) VALUES (7, 'answer', 7, 'textbox', '', '', 'none', '', '', 3, 255, 1, 1, 1, 1, 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:22:\"Trả lời câu hỏi\";i:1;s:0:\"\";}}', '', 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_groups`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_groups` (
  `group_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `alias` varchar(240) NOT NULL,
  `email` varchar(100) DEFAULT '',
  `group_type` tinyint unsigned NOT NULL DEFAULT '0' COMMENT '0:Sys, 1:approval, 2:public',
  `group_color` varchar(10) NOT NULL,
  `group_avatar` varchar(255) NOT NULL,
  `require_2step_admin` tinyint unsigned NOT NULL DEFAULT '0',
  `require_2step_site` tinyint unsigned NOT NULL DEFAULT '0',
  `is_default` tinyint unsigned NOT NULL DEFAULT '0',
  `add_time` int NOT NULL,
  `exp_time` int NOT NULL,
  `weight` int unsigned NOT NULL DEFAULT '0',
  `act` tinyint unsigned NOT NULL,
  `idsite` int unsigned NOT NULL DEFAULT '0',
  `numbers` mediumint unsigned NOT NULL DEFAULT '0',
  `siteus` tinyint unsigned NOT NULL DEFAULT '0',
  `config` varchar(250) DEFAULT '',
  PRIMARY KEY (`group_id`),
  UNIQUE KEY `kalias` (`alias`,`idsite`),
  KEY `exp_time` (`exp_time`)
) ENGINE=MyISAM  AUTO_INCREMENT=13  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `alias`, `email`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (1, 'Super-Admin', '', 0, '', '', 0, 0, 0, 1651615164, 0, 1, 1, 0, 1, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `alias`, `email`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (2, 'General-Admin', '', 0, '', '', 0, 0, 0, 1651615164, 0, 2, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `alias`, `email`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (3, 'Module-Admin', '', 0, '', '', 0, 0, 0, 1651615164, 0, 3, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `alias`, `email`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (4, 'Users', '', 0, '', '', 0, 0, 0, 1651615164, 0, 4, 1, 0, 1, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `alias`, `email`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (7, 'New-Users', '', 0, '', '', 0, 0, 0, 1651615164, 0, 5, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `alias`, `email`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (5, 'Guest', '', 0, '', '', 0, 0, 0, 1651615164, 0, 6, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups` (`group_id`, `alias`, `email`, `group_type`, `group_color`, `group_avatar`, `require_2step_admin`, `require_2step_site`, `is_default`, `add_time`, `exp_time`, `weight`, `act`, `idsite`, `numbers`, `siteus`, `config`) VALUES (6, 'All', '', 0, '', '', 0, 0, 0, 1651615164, 0, 7, 1, 0, 0, 0, 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_groups_detail`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_groups_detail` (
  `group_id` smallint unsigned NOT NULL DEFAULT '0',
  `lang` char(2) NOT NULL DEFAULT '',
  `title` varchar(240) NOT NULL,
  `description` varchar(240) NOT NULL DEFAULT '',
  `content` text,
  UNIQUE KEY `group_id_lang` (`lang`,`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (1, 'vi', 'Super Admin', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (2, 'vi', 'General Admin', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (3, 'vi', 'Module Admin', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (4, 'vi', 'Users', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (7, 'vi', 'New Users', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (5, 'vi', 'Guest', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (6, 'vi', 'All', '', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (10, 'vi', 'Người hâm mộ', 'Nhóm những người hâm mộ hệ thống NukeViet', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (11, 'vi', 'Người quản lý', 'Nhóm những người quản lý website xây dựng bằng hệ thống NukeViet', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_detail` (`group_id`, `lang`, `title`, `description`, `content`) VALUES (12, 'vi', 'Lập trình viên', 'Nhóm Lập trình viên hệ thống NukeViet', '')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_groups_users`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_groups_users` (
  `group_id` smallint unsigned NOT NULL DEFAULT '0',
  `userid` mediumint unsigned NOT NULL DEFAULT '0',
  `is_leader` tinyint unsigned NOT NULL DEFAULT '0',
  `approved` tinyint unsigned NOT NULL DEFAULT '0',
  `data` text NOT NULL,
  `time_requested` int unsigned NOT NULL DEFAULT '0' COMMENT 'Thời gian yêu cầu tham gia',
  `time_approved` int unsigned NOT NULL DEFAULT '0' COMMENT 'Thời gian duyệt yêu cầu tham gia',
  PRIMARY KEY (`group_id`,`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_groups_users` (`group_id`, `userid`, `is_leader`, `approved`, `data`, `time_requested`, `time_approved`) VALUES (1, 1, 1, 1, '0', 1651615180, 1651615180)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_info`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_info` (
  `userid` mediumint unsigned NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_info` (`userid`) VALUES (1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_login`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_login` (
  `userid` mediumint unsigned NOT NULL,
  `clid` char(32) NOT NULL,
  `logtime` int unsigned NOT NULL,
  `mode` tinyint unsigned NOT NULL DEFAULT '0',
  `agent` varchar(255) NOT NULL,
  `ip` char(50) NOT NULL,
  `openid` varchar(255) NOT NULL DEFAULT '',
  UNIQUE KEY `userid` (`userid`,`clid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_oldpass`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_oldpass` (
  `userid` mediumint unsigned NOT NULL DEFAULT '0',
  `password` varchar(150) NOT NULL DEFAULT '',
  `pass_creation_time` int NOT NULL DEFAULT '0',
  UNIQUE KEY `pass_creation_time` (`userid`,`pass_creation_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_openid`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_openid` (
  `userid` mediumint unsigned NOT NULL DEFAULT '0',
  `openid` char(50) NOT NULL DEFAULT '',
  `opid` char(50) NOT NULL DEFAULT '',
  `id` char(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  UNIQUE KEY `opid` (`openid`,`opid`),
  KEY `userid` (`userid`),
  KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_question`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_question` (
  `qid` smallint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(240) NOT NULL DEFAULT '',
  `lang` char(2) NOT NULL DEFAULT '',
  `weight` mediumint unsigned NOT NULL DEFAULT '0',
  `add_time` int unsigned NOT NULL DEFAULT '0',
  `edit_time` int unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`qid`),
  UNIQUE KEY `title` (`title`,`lang`)
) ENGINE=MyISAM  AUTO_INCREMENT=8  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (1, 'Bạn thích môn thể thao nào nhất', 'vi', 1, 1274840238, 1274840238)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (2, 'Món ăn mà bạn yêu thích', 'vi', 2, 1274840250, 1274840250)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (3, 'Thần tượng điện ảnh của bạn', 'vi', 3, 1274840257, 1274840257)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (4, 'Bạn thích nhạc sỹ nào nhất', 'vi', 4, 1274840264, 1274840264)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (5, 'Quê ngoại của bạn ở đâu', 'vi', 5, 1274840270, 1274840270)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (6, 'Tên cuốn sách &quot;gối đầu giường&quot;', 'vi', 6, 1274840278, 1274840278)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_users_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES (7, 'Ngày lễ mà bạn luôn mong đợi', 'vi', 7, 1274840285, 1274840285)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_users_reg`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_users_reg` (
  `userid` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL DEFAULT '',
  `md5username` char(32) NOT NULL DEFAULT '',
  `password` varchar(150) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `first_name` varchar(255) NOT NULL DEFAULT '',
  `last_name` varchar(255) NOT NULL DEFAULT '',
  `gender` char(1) NOT NULL DEFAULT '',
  `birthday` int NOT NULL,
  `sig` text,
  `regdate` int unsigned NOT NULL DEFAULT '0',
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL DEFAULT '',
  `checknum` varchar(50) NOT NULL DEFAULT '',
  `users_info` text,
  `openid_info` text,
  `idsite` mediumint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `login` (`username`),
  UNIQUE KEY `md5username` (`md5username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_about`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_about` (
  `id` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `alias` varchar(250) NOT NULL,
  `image` varchar(255) DEFAULT '',
  `imagealt` varchar(255) DEFAULT '',
  `imageposition` tinyint unsigned NOT NULL DEFAULT '0',
  `description` text,
  `bodytext` mediumtext NOT NULL,
  `keywords` text,
  `socialbutton` tinyint NOT NULL DEFAULT '0',
  `activecomm` varchar(255) DEFAULT '',
  `layout_func` varchar(100) DEFAULT '',
  `weight` smallint NOT NULL DEFAULT '0',
  `admin_id` mediumint unsigned NOT NULL DEFAULT '0',
  `add_time` int NOT NULL DEFAULT '0',
  `edit_time` int NOT NULL DEFAULT '0',
  `status` tinyint unsigned NOT NULL DEFAULT '0',
  `hitstotal` mediumint unsigned NOT NULL DEFAULT '0',
  `hot_post` tinyint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_about_config`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_about_config` (
  `config_name` varchar(30) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  UNIQUE KEY `config_name` (`config_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('viewtype', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('facebookapi', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('per_page', '20')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('news_first', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('related_articles', '5')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('copy_page', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('alias_lower', '1')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_about_config` (`config_name`, `config_value`) VALUES ('socialbutton', 'facebook,twitter')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_blocks_groups`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_blocks_groups` (
  `bid` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `theme` varchar(55) NOT NULL,
  `module` varchar(55) NOT NULL,
  `file_name` varchar(55) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `template` varchar(55) DEFAULT NULL,
  `position` varchar(55) DEFAULT NULL,
  `exp_time` int DEFAULT '0',
  `active` varchar(10) DEFAULT '1',
  `act` tinyint unsigned NOT NULL DEFAULT '1',
  `groups_view` varchar(255) DEFAULT '',
  `all_func` tinyint NOT NULL DEFAULT '0',
  `weight` int NOT NULL DEFAULT '0',
  `config` text,
  PRIMARY KEY (`bid`),
  KEY `theme` (`theme`),
  KEY `module` (`module`),
  KEY `position` (`position`),
  KEY `exp_time` (`exp_time`)
) ENGINE=MyISAM  AUTO_INCREMENT=31  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (15, 'default', 'users', 'global.user_button.php', 'Đăng nhập thành viên', '', 'no_title', '[PERSONALAREA]', 0, '1', 1, '6', 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (17, 'default', 'menu', 'global.bootstrap.php', 'Menu Site', '', 'no_title', '[MENU_SITE]', 0, '1', 1, '6', 1, 1, 'a:2:{s:6:\"menuid\";i:1;s:12:\"title_length\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (18, 'default', 'contact', 'global.contact_default.php', 'Contact Default', '', 'no_title', '[CONTACT_DEFAULT]', 0, '1', 1, '6', 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (19, 'default', 'theme', 'global.social.php', 'Social icon', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', 1, '6', 1, 1, 'a:3:{s:8:\"facebook\";s:32:\"http://www.facebook.com/nukeviet\";s:7:\"youtube\";s:37:\"https://www.youtube.com/user/nukeviet\";s:7:\"twitter\";s:28:\"https://twitter.com/nukeviet\";}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (22, 'mobile_default', 'menu', 'global.metismenu.php', 'Menu Site', '', 'no_title', '[MENU_SITE]', 0, '1', 1, '6', 1, 1, 'a:2:{s:6:\"menuid\";i:1;s:12:\"title_length\";i:0;}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (23, 'mobile_default', 'users', 'global.user_button.php', 'Sign In', '', 'no_title', '[MENU_SITE]', 0, '1', 1, '6', 1, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (24, 'mobile_default', 'contact', 'global.contact_default.php', 'Contact Default', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', 1, '6', 1, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (25, 'mobile_default', 'contact', 'global.contact_form.php', 'Feedback', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', 1, '6', 1, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (26, 'mobile_default', 'theme', 'global.social.php', 'Social icon', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', 1, '6', 1, 3, 'a:3:{s:8:\"facebook\";s:32:\"http://www.facebook.com/nukeviet\";s:7:\"youtube\";s:37:\"https://www.youtube.com/user/nukeviet\";s:7:\"twitter\";s:28:\"https://twitter.com/nukeviet\";}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (27, 'mobile_default', 'theme', 'global.QR_code.php', 'QR code', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', 1, '6', 1, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (28, 'mobile_default', 'theme', 'global.copyright.php', 'Copyright', '', 'no_title', '[FOOTER_SITE]', 0, '1', 1, '6', 1, 1, 'a:5:{s:12:\"copyright_by\";s:0:\"\";s:13:\"copyright_url\";s:0:\"\";s:9:\"design_by\";s:25:\"Tập Đoàn TMS Holdings\";s:10:\"design_url\";s:14:\"http://tms.vn/\";s:13:\"siteterms_url\";s:39:\"/index.php?language=vi&amp;nv=siteterms\";}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (29, 'mobile_default', 'theme', 'global.menu_footer.php', 'Các chuyên mục chính', '', 'primary', '[MENU_FOOTER]', 0, '1', 1, '6', 1, 1, 'a:1:{s:14:\"module_in_menu\";a:9:{i:0;s:5:\"about\";i:1;s:4:\"news\";i:2;s:5:\"users\";i:3;s:7:\"contact\";i:4;s:6:\"voting\";i:5;s:7:\"banners\";i:6;s:4:\"seek\";i:7;s:5:\"feeds\";i:8;s:9:\"siteterms\";}}')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_groups` (`bid`, `theme`, `module`, `file_name`, `title`, `link`, `template`, `position`, `exp_time`, `active`, `act`, `groups_view`, `all_func`, `weight`, `config`) VALUES (30, 'mobile_default', 'theme', 'global.company_info.php', 'Công ty chủ quản', '', 'primary', '[COMPANY_INFO]', 0, '1', 1, '6', 1, 1, 'a:13:{s:12:\"company_name\";s:58:\"Công ty cổ phần phát triển nguồn mở Việt Nam\";s:15:\"company_address\";s:72:\"Phòng 1706 - Tòa nhà CT2 Nàng Hương, 583 Nguyễn Trãi, Hà Nội\";s:16:\"company_sortname\";s:25:\"Tập Đoàn TMS Holdings\";s:15:\"company_regcode\";s:0:\"\";s:16:\"company_regplace\";s:0:\"\";s:21:\"company_licensenumber\";s:0:\"\";s:22:\"company_responsibility\";s:0:\"\";s:15:\"company_showmap\";i:1;s:14:\"company_mapurl\";s:326:\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2634.116366996857!2d105.79399620326203!3d20.9844946314258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac93055e2f2f%3A0x91f4b423089193dd!2zQ8O0bmcgdHkgQ-G7lSBwaOG6p24gUGjDoXQgdHJp4buDbiBOZ3Xhu5NuIG3hu58gVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1558315703646!5m2!1svi!2s\";s:13:\"company_phone\";s:58:\"+84-24-85872007[+842485872007]|+84-904762534[+84904762534]\";s:11:\"company_fax\";s:15:\"+84-24-35500914\";s:13:\"company_email\";s:14:\"contact@tms.vn\";s:15:\"company_website\";s:13:\"http://tms.vn\";}')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_blocks_weight`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_blocks_weight` (
  `bid` mediumint NOT NULL DEFAULT '0',
  `func_id` mediumint NOT NULL DEFAULT '0',
  `weight` mediumint NOT NULL DEFAULT '0',
  UNIQUE KEY `bid` (`bid`,`func_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 70, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 69, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 70, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 69, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 70, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 69, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 70, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 69, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 70, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 69, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 70, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 69, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 70, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 69, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 70, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 69, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 70, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 69, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 70, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 69, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 70, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 69, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 70, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 69, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 70, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 69, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 14, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 15, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 16, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 17, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 18, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 45, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 46, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 53, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 54, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 14, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 15, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 16, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 17, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 18, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 45, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 46, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 53, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 54, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 14, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 15, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 16, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 17, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 18, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 45, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 46, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 53, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 54, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 14, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 15, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 16, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 17, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 18, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 45, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 46, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 53, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 54, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 68, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 68, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 68, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 68, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (19, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (15, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (17, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (18, 68, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 14, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 15, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 16, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 17, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 18, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 45, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 46, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 53, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 54, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (22, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 1, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 2, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 3, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 4, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 5, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 6, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 7, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 8, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 9, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 10, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 11, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 12, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 13, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 14, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 15, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 16, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 17, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 18, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 19, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 20, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 21, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 22, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 23, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 24, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 25, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 26, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 27, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 28, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 29, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 30, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 31, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 32, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 33, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 34, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 35, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 36, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 37, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 38, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 39, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 40, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 41, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 42, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 43, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 44, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 45, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 46, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 47, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 48, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 49, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 50, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 51, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 52, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 53, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 54, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 55, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 56, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 57, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 58, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 59, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 60, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 61, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 62, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 63, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 64, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 65, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (23, 66, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 14, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 15, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 16, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 17, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 18, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 45, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 46, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 53, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 54, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (24, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 1, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 2, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 3, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 4, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 5, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 6, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 7, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 8, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 9, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 10, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 11, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 12, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 13, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 14, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 15, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 16, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 17, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 18, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 19, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 20, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 21, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 22, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 23, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 24, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 25, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 26, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 27, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 28, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 29, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 30, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 31, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 32, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 33, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 34, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 35, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 36, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 37, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 38, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 39, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 40, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 41, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 42, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 43, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 44, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 45, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 46, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 47, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 48, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 49, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 50, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 51, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 52, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 53, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 54, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 55, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 56, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 57, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 58, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 59, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 60, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 61, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 62, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 63, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 64, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 65, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (25, 66, 2)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 1, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 2, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 3, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 4, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 5, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 6, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 7, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 8, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 9, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 10, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 11, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 12, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 13, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 14, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 15, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 16, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 17, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 18, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 19, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 20, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 21, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 22, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 23, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 24, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 25, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 26, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 27, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 28, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 29, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 30, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 31, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 32, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 33, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 34, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 35, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 36, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 37, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 38, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 39, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 40, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 41, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 42, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 43, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 44, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 45, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 46, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 47, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 48, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 49, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 50, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 51, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 52, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 53, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 54, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 55, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 56, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 57, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 58, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 59, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 60, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 61, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 62, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 63, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 64, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 65, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (26, 66, 3)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 1, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 2, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 3, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 4, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 5, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 6, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 7, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 8, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 9, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 10, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 11, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 12, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 13, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 14, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 15, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 16, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 17, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 18, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 19, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 20, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 21, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 22, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 23, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 24, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 25, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 26, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 27, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 28, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 29, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 30, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 31, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 32, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 33, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 34, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 35, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 36, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 37, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 38, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 39, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 40, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 41, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 42, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 43, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 44, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 45, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 46, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 47, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 48, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 49, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 50, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 51, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 52, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 53, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 54, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 55, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 56, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 57, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 58, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 59, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 60, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 61, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 62, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 63, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 64, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 65, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (27, 66, 4)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 14, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 15, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 16, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 17, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 18, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 45, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 46, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 53, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 54, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (28, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 14, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 15, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 16, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 17, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 18, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 45, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 46, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 53, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 54, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (29, 66, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 7, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 8, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 9, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 10, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 11, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 12, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 13, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 14, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 15, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 16, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 17, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 18, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 19, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 20, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 21, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 22, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 23, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 24, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 25, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 26, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 27, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 28, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 29, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 30, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 31, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 32, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 33, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 34, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 35, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 36, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 37, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 38, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 39, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 40, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 41, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 42, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 43, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 44, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 45, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 46, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 47, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 48, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 49, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 50, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 51, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 52, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 53, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 54, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 55, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 56, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 57, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 58, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 59, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 60, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 61, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 62, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 63, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 64, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 65, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_blocks_weight` (`bid`, `func_id`, `weight`) VALUES (30, 66, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_comment`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_comment` (
  `cid` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `module` varchar(55) NOT NULL,
  `area` int NOT NULL DEFAULT '0',
  `id` mediumint unsigned NOT NULL DEFAULT '0',
  `pid` mediumint unsigned NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `attach` varchar(255) NOT NULL DEFAULT '',
  `post_time` int unsigned NOT NULL DEFAULT '0',
  `userid` mediumint unsigned NOT NULL DEFAULT '0',
  `post_name` varchar(100) NOT NULL,
  `post_email` varchar(100) NOT NULL,
  `post_ip` varchar(39) NOT NULL DEFAULT '',
  `status` tinyint unsigned NOT NULL DEFAULT '0',
  `likes` mediumint NOT NULL DEFAULT '0',
  `dislikes` mediumint NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`),
  KEY `mod_id` (`module`,`area`,`id`),
  KEY `post_time` (`post_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_contact_department`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_contact_department` (
  `id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(250) NOT NULL,
  `alias` varchar(250) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `others` text NOT NULL,
  `cats` text NOT NULL,
  `admins` text NOT NULL,
  `act` tinyint unsigned NOT NULL DEFAULT '0',
  `weight` smallint NOT NULL,
  `is_default` tinyint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `full_name` (`full_name`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_contact_department` (`id`, `full_name`, `alias`, `image`, `phone`, `fax`, `email`, `address`, `note`, `others`, `cats`, `admins`, `act`, `weight`, `is_default`) VALUES (1, 'Phòng Chăm sóc khách hàng', 'Cham-soc-khach-hang', '', '(08) 38.000.000[+84838000000]', '08 38.000.001', 'customer@mysite.com', '', 'Bộ phận tiếp nhận và giải quyết các yêu cầu, đề nghị, ý kiến liên quan đến hoạt động chính của doanh nghiệp', '{\"viber\":\"myViber\",\"skype\":\"mySkype\",\"zalo\":\"0933456789\"}', 'Tư vấn|Khiếu nại, phản ánh|Đề nghị hợp tác', '1/1/1/0;', 1, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_contact_department` (`id`, `full_name`, `alias`, `image`, `phone`, `fax`, `email`, `address`, `note`, `others`, `cats`, `admins`, `act`, `weight`, `is_default`) VALUES (2, 'Phòng Kỹ thuật', 'Ky-thuat', '', '(08) 38.000.002[+84838000002]', '08 38.000.003', 'technical@mysite.com', '', 'Bộ phận tiếp nhận và giải quyết các câu hỏi liên quan đến kỹ thuật', '{\"viber\":\"myViber2\",\"skype\":\"mySkype2\",\"zalo\":\"0923456789\"}', 'Thông báo lỗi|Góp ý cải tiến', '1/1/1/0;', 1, 2, 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_contact_reply`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_contact_reply` (
  `rid` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `id` mediumint unsigned NOT NULL DEFAULT '0',
  `reply_content` text,
  `reply_time` int unsigned NOT NULL DEFAULT '0',
  `reply_aid` mediumint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_contact_send`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_contact_send` (
  `id` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `cid` smallint unsigned NOT NULL DEFAULT '0',
  `cat` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `send_time` int unsigned NOT NULL DEFAULT '0',
  `sender_id` mediumint unsigned NOT NULL DEFAULT '0',
  `sender_name` varchar(100) NOT NULL,
  `sender_address` varchar(250) NOT NULL,
  `sender_email` varchar(100) NOT NULL,
  `sender_phone` varchar(20) DEFAULT '',
  `sender_ip` varchar(39) NOT NULL DEFAULT '',
  `is_read` tinyint unsigned NOT NULL DEFAULT '0',
  `is_reply` tinyint unsigned NOT NULL DEFAULT '0',
  `is_processed` tinyint unsigned NOT NULL DEFAULT '0',
  `processed_by` int unsigned NOT NULL DEFAULT '0',
  `processed_time` int unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `sender_name` (`sender_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_contact_supporter`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_contact_supporter` (
  `id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `departmentid` smallint unsigned NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `others` text NOT NULL,
  `act` tinyint unsigned NOT NULL DEFAULT '1',
  `weight` smallint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_home_config`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_home_config` (
  `config_name` varchar(30) NOT NULL,
  `config_value` varchar(250) NOT NULL,
  UNIQUE KEY `config_name` (`config_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('slider_title_extra', '1')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('slider_image_mobile', '1')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_email', 'info@tms.vn')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_hotline', '0967247007')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_fax', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_responsibility', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_address', 'Số 17 Đường Số 7, KDC Cityland Park Hills, Phường 10, Quận Gò Vấp, Thành phố Hồ Chí Minh')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_map', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_regplace', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_name', 'Công Ty CP Tập Đoàn TMS Holdings')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_sortname', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_regcode', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('facebook', 'https://www.facebook.com/sieusandoitac/')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('youtube', '0967247007')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('instagram', '0967247007')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('twitter', '0967247007')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('coppyright', '© Bản quyền thuộc về Tập Đoàn TMS Holdings')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_website', 'https://tms.vn')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_hometext', 'Chúng tôi  là nhà cung cấp dịch vụ tư vấn  hàng đầu  trong lĩnh vực thành lập doanh nghiệp ở nước ngoài, cung cấp các dịch vụ báo cáo tài chính và các dịch vụ liên quan đến hoạt động doanh nghiệp')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('company_phone', '0287 777 7676')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('logofooter', '/uploads/home/logo.png')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('bocongthuong', 'http://tms.vn/')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('logobocongthuong', '/uploads/home/bo-cong-thuong.png')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('messenger', 'https://m.me/sieusandoitac/')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('zalo', '0967247007')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('whatsapp', '0967247007')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('skyper', '0967247007')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('tb1', 'Cảm ơn Anh/Chị đã ghé thăm TMS Holdings')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('tb2', 'Vui lòng click vào đây để nhận thêm tư vấn!')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('tb3', 'Kết nối cùng chúng tôi qua')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_config` (`config_name`, `config_value`) VALUES ('tb0', 'TMS Holdings xin chào Anh/Chị!')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_home_slider`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_home_slider` (
  `bid` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL DEFAULT '',
  `image` varchar(250) NOT NULL,
  `image2` varchar(250) NOT NULL,
  `description` mediumtext NOT NULL,
  `weight` smallint NOT NULL DEFAULT '0',
  `status` tinyint unsigned NOT NULL DEFAULT '0' COMMENT '0: In-Active, 1: Active, 2: Expired',
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM  AUTO_INCREMENT=6  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider` (`bid`, `title`, `image`, `image2`, `description`, `weight`, `status`) VALUES (1, 'Banner trang chủ', '', '', '', 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider` (`bid`, `title`, `image`, `image2`, `description`, `weight`, `status`) VALUES (3, 'KHÁCH HÀNG NÓI VỀ CHÚNG TÔI', '', '', 'Chúng tôi trân trọng những lời khen tặng cũng như đóng góp ý kiến từ những khách hàng đã sử dụng dịch vụ của chúng tôi. Đó chính là động lực để chúng tôi cố gắng hơn nữa,mang đến những giá trị tốt nhất khi quý khách sử dụng dịch vụ sản phẩm chất lượng từ Nhang.vn', 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider` (`bid`, `title`, `image`, `image2`, `description`, `weight`, `status`) VALUES (4, 'Đối tác', '', '', '', 3, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_home_slider_rows`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_home_slider_rows` (
  `id` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `bid` mediumint unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `title_extra` varchar(250) NOT NULL,
  `title_link` varchar(250) NOT NULL,
  `description` mediumtext NOT NULL,
  `link` varchar(250) NOT NULL DEFAULT '',
  `image` varchar(250) NOT NULL DEFAULT '',
  `image_mobile` varchar(250) NOT NULL,
  `addtime` int NOT NULL DEFAULT '0',
  `weight` smallint NOT NULL DEFAULT '0',
  `status` tinyint unsigned NOT NULL DEFAULT '0' COMMENT '0: In-Active, 1: Active, 2: Expired',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  AUTO_INCREMENT=25  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (8, 4, '11', '', '', '', '', 'slider/sieuship.png', '', 1635209368, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (9, 4, '2', '', '', '', '', 'slider/vnpost.png', '', 1635209379, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (10, 4, '3', '', '', '', '', 'slider/viettelpost.png', '', 1635209393, 3, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (11, 4, '4', '', '', '', '', 'slider/grap.png', '', 1635209404, 4, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (12, 4, '5', '', '', '', '', 'slider/ahamove.png', '', 1635209415, 5, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (13, 4, '6', '', '', '', '', 'slider/ghtk_1.png', '', 1635209429, 6, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (14, 3, 'Quốc Hiệu', '35 tuổi', '', 'Gia đình tôi đã sử dụng sản phẩm mùi thơm nhẹ nhàng và ko thấy bức bí như nhang trước kia đã sài. Mong công ty có thể đưa ra nhiều sản phẩm tốt cho người dùng', '', 'slider/quochieu.png', '', 1635210008, 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (15, 3, 'Anh Phan', 'TP.Hồ Chí Minh', '', 'Gia đình tôi đã sử dụng sản phẩm mùi thơm nhẹ nhàng và ko thấy bức bí như nhang trước kia đã sài. Mong công ty có thể đưa ra nhiều sản phẩm tốt cho người dùng', '', 'slider/anhphan.png', '', 1635210072, 2, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_slider_rows` (`id`, `bid`, `title`, `title_extra`, `title_link`, `description`, `link`, `image`, `image_mobile`, `addtime`, `weight`, `status`) VALUES (16, 3, 'Đình Tứ', 'Hà Nội', '', 'Gia đình tôi đã sử dụng sản phẩm mùi thơm nhẹ nhàng và ko thấy bức bí như nhang trước kia đã sài. Mong công ty có thể đưa ra nhiều sản phẩm tốt cho người dùng', '', 'slider/dinhtu.png', '', 1635210100, 3, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_home_support`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_home_support` (
  `bid` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `weight` smallint NOT NULL DEFAULT '0',
  `status` tinyint unsigned NOT NULL DEFAULT '0' COMMENT '0: In-Active, 1: Active, 2: Expired',
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_home_support` (`bid`, `title`, `description`, `weight`, `status`) VALUES (1, 'Hỗ trợ online', '', 1, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_home_support_rows`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_home_support_rows` (
  `id` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `bid` mediumint unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `link` varchar(250) NOT NULL DEFAULT '',
  `phone` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `zalo` varchar(250) NOT NULL,
  `skyper` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL DEFAULT '',
  `addtime` int NOT NULL DEFAULT '0',
  `weight` smallint NOT NULL DEFAULT '0',
  `status` tinyint unsigned NOT NULL DEFAULT '0' COMMENT '0: In-Active, 1: Active, 2: Expired',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_menu`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_menu` (
  `id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu` (`id`, `title`) VALUES (1, 'Top Menu')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_menu_rows`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_menu_rows` (
  `id` mediumint NOT NULL AUTO_INCREMENT,
  `parentid` mediumint unsigned NOT NULL,
  `mid` smallint NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `icon` varchar(255) DEFAULT '',
  `image` varchar(255) DEFAULT '',
  `note` varchar(255) DEFAULT '',
  `weight` int NOT NULL,
  `sort` int NOT NULL DEFAULT '0',
  `lev` int NOT NULL DEFAULT '0',
  `subitem` text,
  `groups_view` varchar(255) DEFAULT '',
  `module_name` varchar(255) DEFAULT '',
  `op` varchar(255) DEFAULT '',
  `target` tinyint DEFAULT '0',
  `css` varchar(255) DEFAULT '',
  `active_type` tinyint unsigned NOT NULL DEFAULT '0',
  `status` tinyint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parentid` (`parentid`,`mid`)
) ENGINE=MyISAM  AUTO_INCREMENT=23  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (1, 0, 1, 'Giới thiệu', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=about', '', '', '', 1, 1, 0, '', '6', 'about', '', 1, '', 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (2, 0, 1, 'Tin Tức', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=news', '', '', '', 2, 2, 0, '', '6', 'news', '', 1, '', 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (3, 0, 1, 'Thành viên', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=users', '', '', '', 3, 3, 0, '', '6', 'users', '', 1, '', 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (4, 0, 1, 'Thống kê', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=statistics', '', '', '', 4, 4, 0, '', '2', 'statistics', '', 1, '', 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (5, 0, 1, 'Thăm dò ý kiến', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=voting', '', '', '', 5, 5, 0, '', '6', 'voting', '', 1, '', 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (6, 0, 1, 'Tìm kiếm', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=seek', '', '', '', 6, 6, 0, '', '6', 'seek', '', 1, '', 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_menu_rows` (`id`, `parentid`, `mid`, `title`, `link`, `icon`, `image`, `note`, `weight`, `sort`, `lev`, `subitem`, `groups_view`, `module_name`, `op`, `target`, `css`, `active_type`, `status`) VALUES (7, 0, 1, 'Liên hệ', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=contact', '', '', '', 7, 7, 0, '', '6', 'contact', '', 1, '', 1, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_modfuncs`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_modfuncs` (
  `func_id` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `func_name` varchar(55) NOT NULL,
  `alias` varchar(55) NOT NULL DEFAULT '',
  `func_custom_name` varchar(255) NOT NULL,
  `func_site_title` varchar(255) NOT NULL DEFAULT '',
  `in_module` varchar(50) NOT NULL,
  `show_func` tinyint NOT NULL DEFAULT '0',
  `in_submenu` tinyint unsigned NOT NULL DEFAULT '0',
  `subweight` smallint unsigned NOT NULL DEFAULT '1',
  `setting` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`func_id`),
  UNIQUE KEY `func_name` (`func_name`,`in_module`),
  UNIQUE KEY `alias` (`alias`,`in_module`)
) ENGINE=MyISAM  AUTO_INCREMENT=72  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (71, 'sitemap', 'sitemap', 'Sitemap', '', 'about', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (70, 'rss', 'rss', 'Rss', '', 'about', 1, 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (4, 'main', 'main', 'Main', '', 'news', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (5, 'viewcat', 'viewcat', 'Viewcat', '', 'news', 1, 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (6, 'topic', 'topic', 'Topic', '', 'news', 1, 0, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (7, 'content', 'content', 'Content', '', 'news', 1, 1, 8, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (8, 'detail', 'detail', 'Detail', '', 'news', 1, 0, 6, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (9, 'tag', 'tag', 'Tag', '', 'news', 1, 0, 9, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (10, 'rss', 'rss', 'Rss', '', 'news', 1, 1, 10, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (11, 'search', 'search', 'Search', '', 'news', 1, 1, 7, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (12, 'groups', 'groups', 'Groups', '', 'news', 1, 0, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (13, 'author', 'author', 'Author', '', 'news', 1, 0, 5, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (14, 'sitemap', 'sitemap', 'Sitemap', '', 'news', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (15, 'print', 'print', 'Print', '', 'news', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (16, 'rating', 'rating', 'Rating', '', 'news', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (17, 'savefile', 'savefile', 'Savefile', '', 'news', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (18, 'sendmail', 'sendmail', 'Sendmail', '', 'news', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (19, 'instant-rss', 'instant-rss', 'Instant Articles RSS', '', 'news', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (20, 'main', 'main', 'Main', '', 'users', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (21, 'login', 'login', 'Đăng nhập', '', 'users', 1, 1, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (22, 'register', 'register', 'Đăng ký', '', 'users', 1, 1, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (23, 'lostpass', 'lostpass', 'Khôi phục mật khẩu', '', 'users', 1, 1, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (24, 'active', 'active', 'Kích hoạt tài khoản', '', 'users', 1, 0, 5, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (25, 'lostactivelink', 'lostactivelink', 'Lostactivelink', '', 'users', 1, 0, 6, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (26, 'editinfo', 'editinfo', 'Thiết lập tài khoản', '', 'users', 1, 1, 7, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (27, 'memberlist', 'memberlist', 'Danh sách thành viên', '', 'users', 1, 1, 8, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (28, 'groups', 'groups', 'Quản lý nhóm', '', 'users', 1, 1, 9, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (29, 'avatar', 'avatar', 'Avatar', '', 'users', 1, 0, 10, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (30, 'logout', 'logout', 'Thoát', '', 'users', 1, 1, 11, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (31, 'oauth', 'oauth', 'Oauth', '', 'users', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (32, 'main', 'main', 'Main', '', 'contact', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (33, 'main', 'main', 'Main', '', 'statistics', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (34, 'allreferers', 'allreferers', 'Theo đường dẫn đến site', '', 'statistics', 1, 1, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (35, 'allcountries', 'allcountries', 'Theo quốc gia', '', 'statistics', 1, 1, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (36, 'allbrowsers', 'allbrowsers', 'Theo trình duyệt', '', 'statistics', 1, 1, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (37, 'allos', 'allos', 'Theo hệ điều hành', '', 'statistics', 1, 1, 5, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (38, 'allbots', 'allbots', 'Theo máy chủ tìm kiếm', '', 'statistics', 1, 1, 6, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (39, 'referer', 'referer', 'Đường dẫn đến site theo tháng', '', 'statistics', 1, 0, 7, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (50, 'main', 'main', 'Main', '', 'seek', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (51, 'opensearch', 'opensearch', 'Opensearch', '', 'seek', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (52, 'main', 'main', 'Main', '', 'feeds', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (53, 'main', 'main', 'Main', '', 'page', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (54, 'sitemap', 'sitemap', 'Sitemap', '', 'page', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (55, 'rss', 'rss', 'Rss', '', 'page', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (56, 'main', 'main', 'Main', '', 'comment', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (57, 'post', 'post', 'Post', '', 'comment', 1, 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (58, 'like', 'like', 'Like', '', 'comment', 1, 0, 3, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (59, 'delete', 'delete', 'Delete', '', 'comment', 1, 0, 4, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (60, 'down', 'down', 'Down', '', 'comment', 1, 0, 5, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (68, 'main', 'main', 'Main', '', 'home', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (67, 'ajax', 'ajax', 'Ajax', '', 'home', 0, 0, 0, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (69, 'main', 'main', 'Main', '', 'about', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (64, 'main', 'main', 'Main', '', 'two-step-verification', 1, 0, 1, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (65, 'confirm', 'confirm', 'Confirm', '', 'two-step-verification', 1, 0, 2, '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modfuncs` (`func_id`, `func_name`, `alias`, `func_custom_name`, `func_site_title`, `in_module`, `show_func`, `in_submenu`, `subweight`, `setting`) VALUES (66, 'setup', 'setup', 'Setup', '', 'two-step-verification', 1, 0, 3, '')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_modthemes`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_modthemes` (
  `func_id` mediumint DEFAULT NULL,
  `layout` varchar(100) DEFAULT NULL,
  `theme` varchar(100) DEFAULT NULL,
  UNIQUE KEY `func_id` (`func_id`,`layout`,`theme`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (0, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (0, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (4, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (4, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (5, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (5, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (6, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (6, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (7, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (7, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (8, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (8, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (9, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (9, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (10, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (11, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (11, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (12, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (12, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (13, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (13, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (20, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (20, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (21, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (21, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (22, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (22, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (23, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (23, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (24, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (24, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (25, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (25, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (26, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (26, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (27, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (27, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (28, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (28, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (29, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (30, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (30, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (32, 'main', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (32, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (33, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (33, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (34, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (34, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (35, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (35, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (36, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (36, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (37, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (37, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (38, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (38, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (39, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (39, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (50, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (50, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (52, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (52, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (53, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (53, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (56, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (56, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (57, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (57, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (58, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (58, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (59, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (59, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (60, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (64, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (64, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (65, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (65, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (66, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (66, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (67, 'left-main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (68, 'home', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (68, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (69, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (69, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (70, 'main', 'mobile_default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (70, 'main-right', 'default')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modthemes` (`func_id`, `layout`, `theme`) VALUES (71, 'main-right', 'default')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_modules`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_modules` (
  `title` varchar(50) NOT NULL,
  `module_file` varchar(50) NOT NULL DEFAULT '',
  `module_data` varchar(50) NOT NULL DEFAULT '',
  `module_upload` varchar(50) NOT NULL DEFAULT '',
  `module_theme` varchar(50) NOT NULL DEFAULT '',
  `custom_title` varchar(255) NOT NULL,
  `site_title` varchar(255) NOT NULL DEFAULT '',
  `admin_title` varchar(255) NOT NULL DEFAULT '',
  `set_time` int unsigned NOT NULL DEFAULT '0',
  `main_file` tinyint unsigned NOT NULL DEFAULT '0',
  `admin_file` tinyint unsigned NOT NULL DEFAULT '0',
  `theme` varchar(100) DEFAULT '',
  `mobile` varchar(100) DEFAULT '',
  `description` varchar(255) DEFAULT '',
  `keywords` text,
  `groups_view` varchar(255) NOT NULL,
  `weight` tinyint unsigned NOT NULL DEFAULT '1',
  `act` tinyint unsigned NOT NULL DEFAULT '0',
  `admins` varchar(255) DEFAULT '',
  `rss` tinyint NOT NULL DEFAULT '1',
  `sitemap` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('about', 'about', 'about', 'about', 'about', 'Giới thiệu', '', '', 1651615776, 1, 1, '', '', '', '', '6', 2, 1, '', 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('zalo', 'zalo', 'zalo', 'zalo', 'zalo', 'Zalo', '', 'Zalo', 1651615164, 0, 1, '', '', '', '', '3', 3, 0, '', 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('news', 'news', 'news', 'news', 'news', 'Tin Tức', '', '', 1651615164, 1, 1, '', '', '', '', '6', 4, 1, '', 1, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('users', 'users', 'users', 'users', 'users', 'Thành viên', '', 'Tài khoản', 1651615164, 1, 1, '', '', '', '', '6', 5, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('contact', 'contact', 'contact', 'contact', 'contact', 'Liên hệ', '', '', 1651615164, 1, 1, '', '', '', '', '6', 6, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('statistics', 'statistics', 'statistics', 'statistics', 'statistics', 'Thống kê', '', '', 1651615164, 1, 1, '', '', '', 'online, statistics', '6', 7, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('seek', 'seek', 'seek', 'seek', 'seek', 'Tìm kiếm', '', '', 1651615164, 1, 0, '', '', '', '', '6', 8, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('menu', 'menu', 'menu', 'menu', 'menu', 'Menu Site', '', '', 1651615164, 0, 1, '', '', '', '', '6', 9, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('feeds', 'feeds', 'feeds', 'feeds', 'feeds', 'RSS-feeds', '', '', 1651615164, 1, 1, '', '', '', '', '6', 10, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('page', 'page', 'page', 'page', 'page', 'Page', '', '', 1651615164, 1, 1, '', '', '', '', '6', 11, 0, '', 1, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('comment', 'comment', 'comment', 'comment', 'comment', 'Bình luận', '', 'Quản lý bình luận', 1651615164, 0, 1, '', '', '', '', '6', 12, 1, '', 0, 1)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('home', 'home', 'home', 'home', 'home', 'Trang chủ', '', '', 1651615660, 1, 1, '', '', '', '', '6', 1, 1, '', 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_modules` (`title`, `module_file`, `module_data`, `module_upload`, `module_theme`, `custom_title`, `site_title`, `admin_title`, `set_time`, `main_file`, `admin_file`, `theme`, `mobile`, `description`, `keywords`, `groups_view`, `weight`, `act`, `admins`, `rss`, `sitemap`) VALUES ('two-step-verification', 'two-step-verification', 'two_step_verification', 'two_step_verification', 'two-step-verification', 'Xác thực hai bước', '', '', 1651615164, 1, 0, '', '', '', '', '6', 13, 1, '', 0, 1)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_1`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_1` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint unsigned NOT NULL DEFAULT '0',
  `listcatid` varchar(255) NOT NULL DEFAULT '',
  `topicid` smallint unsigned NOT NULL DEFAULT '0',
  `admin_id` mediumint unsigned NOT NULL DEFAULT '0',
  `author` varchar(250) DEFAULT '',
  `sourceid` mediumint NOT NULL DEFAULT '0',
  `addtime` int unsigned NOT NULL DEFAULT '0',
  `edittime` int unsigned NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '1',
  `weight` int unsigned NOT NULL DEFAULT '0',
  `publtime` int unsigned NOT NULL DEFAULT '0',
  `exptime` int unsigned NOT NULL DEFAULT '0',
  `archive` tinyint unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `hometext` text NOT NULL,
  `homeimgfile` varchar(255) DEFAULT '',
  `homeimgalt` varchar(255) DEFAULT '',
  `homeimgthumb` tinyint NOT NULL DEFAULT '0',
  `inhome` tinyint unsigned NOT NULL DEFAULT '0',
  `allowed_comm` varchar(255) DEFAULT '',
  `allowed_rating` tinyint unsigned NOT NULL DEFAULT '0',
  `external_link` tinyint unsigned NOT NULL DEFAULT '0',
  `hitstotal` mediumint unsigned NOT NULL DEFAULT '0',
  `hitscm` mediumint unsigned NOT NULL DEFAULT '0',
  `total_rating` int NOT NULL DEFAULT '0',
  `click_rating` int NOT NULL DEFAULT '0',
  `instant_active` tinyint(1) NOT NULL DEFAULT '0',
  `instant_template` varchar(100) NOT NULL DEFAULT '',
  `instant_creatauto` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`),
  KEY `topicid` (`topicid`),
  KEY `admin_id` (`admin_id`),
  KEY `author` (`author`),
  KEY `title` (`title`),
  KEY `addtime` (`addtime`),
  KEY `edittime` (`edittime`),
  KEY `publtime` (`publtime`),
  KEY `exptime` (`exptime`),
  KEY `status` (`status`),
  KEY `instant_active` (`instant_active`),
  KEY `instant_creatauto` (`instant_creatauto`)
) ENGINE=MyISAM  AUTO_INCREMENT=13  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_1` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (1, 1, '1,5,7', 0, 1, 'Quỳnh Nhi', 1, 1274989177, 1275318126, 1, 1, 1274989140, 0, 2, 'Ra mắt công ty mã nguồn mở đầu tiên tại Việt Nam', 'Ra-mat-cong-ty-ma-nguon-mo-dau-tien-tai-Viet-Nam', 'Mã nguồn mở NukeViet vốn đã quá quen thuộc với cộng đồng CNTT Việt Nam trong mấy năm qua. Tuy chưa hoạt động chính thức, nhưng chỉ trong khoảng 5 năm gần đây, mã nguồn mở NukeViet đã được dùng phổ biến ở Việt Nam, áp dụng ở hầu hết các lĩnh vực, từ tin tức đến thương mại điện tử, từ các website cá nhân cho tới những hệ thống website doanh nghiệp.', 'nangly.jpg', 'Thành lập Tập Đoàn TMS Holdings', 1, 1, '6', 1, 0, 2, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_1` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (6, 1, '1,6', 0, 1, '', 3, 1322685920, 1322686042, 1, 2, 1322685920, 0, 2, 'Mã nguồn mở NukeViet giành giải ba Nhân tài đất Việt 2011', 'Ma-nguon-mo-NukeViet-gianh-giai-ba-Nhan-tai-dat-Viet-2011', 'Không có giải nhất và giải nhì, sản phẩm Mã nguồn mở NukeViet của Tập Đoàn TMS Holdings là một trong ba sản phẩm đã đoạt giải ba Nhân tài đất Việt 2011 - Lĩnh vực Công nghệ thông tin (Sản phẩm đã ứng dụng rộng rãi).', 'nukeviet-nhantaidatviet2011.jpg', 'Mã nguồn mở NukeViet giành giải ba Nhân tài đất Việt 2011', 1, 1, '6', 1, 0, 1, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_1` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (7, 1, '1', 0, 1, '', 4, 1445309676, 1445309676, 1, 3, 1445309520, 0, 2, 'NukeViet được ưu tiên mua sắm, sử dụng trong cơ quan, tổ chức nhà nước', 'nukeviet-duoc-uu-tien-mua-sam-su-dung-trong-co-quan-to-chuc-nha-nuoc', 'Ngày 5/12/2014, Bộ trưởng Bộ TT&TT Nguyễn Bắc Son đã ký ban hành Thông tư 20/2014/TT-BTTTT (Thông tư 20) quy định về các sản phẩm phần mềm nguồn mở (PMNM) được ưu tiên mua sắm, sử dụng trong cơ quan, tổ chức nhà nước. NukeViet (phiên bản 3.4.02 trở lên) là phần mềm được nằm trong danh sách này.', 'chuc-mung-nukeviet-thong-tu-20-bo-tttt.jpg', 'NukeViet được ưu tiên mua sắm, sử dụng trong cơ quan, tổ chức nhà nước', 1, 1, '4', 1, 0, 2, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_1` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (9, 1, '1,4', 0, 1, 'Trần Thị Thu', 0, 1445391118, 1445394180, 1, 7, 1445391060, 0, 2, 'Chương trình thực tập sinh tại công ty VINADES', 'chuong-trinh-thuc-tap-sinh-tai-cong-ty-vinades', 'Cơ hội để những sinh viên năng động được học tập, trải nghiệm, thử thách sớm với những tình huống thực tế, được làm việc cùng các chuyên gia có nhiều kinh nghiệm của công ty VINADES.', 'thuc-tap-sinh.jpg', '', 1, 1, '4', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_1` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (11, 1, '1', 0, 1, '', 0, 1445391182, 1445394133, 1, 9, 1445391120, 0, 2, 'NukeViet được Bộ GD&amp;ĐT đưa vào Hướng dẫn thực hiện nhiệm vụ CNTT năm học 2015 - 2016', 'nukeviet-duoc-bo-gd-dt-dua-vao-huong-dan-thuc-hien-nhiem-vu-cntt-nam-hoc-2015-2016', 'Trong Hướng dẫn thực hiện nhiệm vụ CNTT năm học 2015 - 2016 của Bộ Giáo dục và Đào tạo, NukeViet được đưa vào các hạng mục: Tập huấn sử dụng phần mềm nguồn mở cho giáo viên và cán bộ quản lý giáo dục; Khai thác, sử dụng và dạy học; đặc biệt phần &quot;khuyến cáo khi sử dụng các hệ thống CNTT&quot; có chỉ rõ &quot;Không nên làm website mã nguồn đóng&quot; và &quot;Nên làm NukeViet: phần mềm nguồn mở&quot;.', 'nukeviet-cms.jpg', '', 1, 1, '4', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_1` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (12, 1, '1,3', 0, 1, '', 0, 1445391217, 1445393997, 1, 10, 1445391180, 0, 2, 'Hỗ trợ tập huấn và triển khai NukeViet cho các Phòng, Sở GD&amp;ĐT', 'ho-tro-tap-huan-va-trien-khai-nukeviet-cho-cac-phong-so-gd-dt', 'Trên cơ sở Hướng dẫn thực hiện nhiệm vụ CNTT năm học 2015 - 2016 của Bộ Giáo dục và Đào tạo, Công ty cổ phần phát triển nguồn mở Việt Nam và các doanh nghiệp phát triển NukeViet trong cộng đồng NukeViet đang tích cực công tác hỗ trợ cho các phòng GD&ĐT, Sở GD&ĐT triển khai 2 nội dung chính: Hỗ trợ công tác đào tạo tập huấn hướng dẫn sử dụng NukeViet và Hỗ trợ triển khai NukeViet cho các trường, Phòng và Sở GD&ĐT', 'tap-huan-pgd-ha-dong-2015.jpg', 'Tập huấn triển khai NukeViet tại Phòng Giáo dục và Đào tạo Hà Đông - Hà Nội', 1, 1, '4', 1, 0, 1, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_1` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (2, 7, '1,7', 0, 1, 'Nguyễn Thế Hùng', 7, 1453192444, 1453192444, 1, 12, 1453192444, 0, 2, 'Hãy trở thành nhà cung cấp dịch vụ của NukeViet&#33;', 'hay-tro-thanh-nha-cung-cap-dich-vu-cua-nukeviet', 'Nếu bạn là công ty hosting, là công ty thiết kế web có sử dụng mã nguồn NukeViet, là cơ sở đào tạo NukeViet hay là công ty bất kỳ có kinh doanh dịch vụ liên quan đến NukeViet... hãy cho chúng tôi biết thông tin liên hệ của bạn để NukeViet hỗ trợ bạn trong công việc kinh doanh nhé!', 'hoptac.jpg', '', 1, 1, '6', 1, 0, 13, 0, 0, 0, 0, '', 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_2`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_2` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint unsigned NOT NULL DEFAULT '0',
  `listcatid` varchar(255) NOT NULL DEFAULT '',
  `topicid` smallint unsigned NOT NULL DEFAULT '0',
  `admin_id` mediumint unsigned NOT NULL DEFAULT '0',
  `author` varchar(250) DEFAULT '',
  `sourceid` mediumint NOT NULL DEFAULT '0',
  `addtime` int unsigned NOT NULL DEFAULT '0',
  `edittime` int unsigned NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '1',
  `weight` int unsigned NOT NULL DEFAULT '0',
  `publtime` int unsigned NOT NULL DEFAULT '0',
  `exptime` int unsigned NOT NULL DEFAULT '0',
  `archive` tinyint unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `hometext` text NOT NULL,
  `homeimgfile` varchar(255) DEFAULT '',
  `homeimgalt` varchar(255) DEFAULT '',
  `homeimgthumb` tinyint NOT NULL DEFAULT '0',
  `inhome` tinyint unsigned NOT NULL DEFAULT '0',
  `allowed_comm` varchar(255) DEFAULT '',
  `allowed_rating` tinyint unsigned NOT NULL DEFAULT '0',
  `external_link` tinyint unsigned NOT NULL DEFAULT '0',
  `hitstotal` mediumint unsigned NOT NULL DEFAULT '0',
  `hitscm` mediumint unsigned NOT NULL DEFAULT '0',
  `total_rating` int NOT NULL DEFAULT '0',
  `click_rating` int NOT NULL DEFAULT '0',
  `instant_active` tinyint(1) NOT NULL DEFAULT '0',
  `instant_template` varchar(100) NOT NULL DEFAULT '',
  `instant_creatauto` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`),
  KEY `topicid` (`topicid`),
  KEY `admin_id` (`admin_id`),
  KEY `author` (`author`),
  KEY `title` (`title`),
  KEY `addtime` (`addtime`),
  KEY `edittime` (`edittime`),
  KEY `publtime` (`publtime`),
  KEY `exptime` (`exptime`),
  KEY `status` (`status`),
  KEY `instant_active` (`instant_active`),
  KEY `instant_creatauto` (`instant_creatauto`)
) ENGINE=MyISAM  AUTO_INCREMENT=16  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_2` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (13, 2, '2', 0, 1, 'VINADES', 0, 1453194455, 1453194455, 1, 13, 1453194455, 0, 2, 'NukeViet 4.0 có gì mới?', 'nukeviet-4-0-co-gi-moi', 'NukeViet 4 là phiên bản NukeViet được cộng đồng đánh giá cao, hứa hẹn nhiều điểm vượt trội về công nghệ đến thời điểm hiện tại. NukeViet 4 thay đổi gần như hoàn toàn từ nhân hệ thống đến chức năng, giao diện người dùng. Vậy, có gì mới trong phiên bản này?', 'chuc-mung-nukeviet-thong-tu-20-bo-tttt.jpg', '', 1, 1, '4', 1, 0, 2, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_2` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (14, 2, '2', 0, 1, 'VINADES', 0, 1501837620, 1501837620, 1, 14, 1501837620, 0, 2, 'NukeViet 4.2 có gì mới?', 'nukeviet-4-2-co-gi-moi', 'NukeViet 4.2 là phiên bản nâng cấp của phiên bản NukeViet 4.0 tập trung vào việc fix các vấn đề bất cập còn tồn tại của NukeViet 4.0, Thêm các tính năng mới để tăng cường bảo mật của hệ thống cũng như tối ưu trải nghiệm của người dùng.', 'chuc-mung-nukeviet-thong-tu-20-bo-tttt.jpg', '', 1, 1, '4', 1, 1, 2, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_2` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (15, 2, '2', 0, 1, 'VINADES', 0, 1510215907, 1510215907, 1, 15, 1510215907, 0, 2, 'NukeViet 4.3 có gì mới?', 'nukeviet-4-3-co-gi-moi', 'NukeViet 4.3 là phiên bản nâng cấp của phiên bản NukeViet 4.2 tập trung vào việc fix các vấn đề bất cập còn tồn tại, tối ưu trải nghiệm của người dùng.', 'chuc-mung-nukeviet-thong-tu-20-bo-tttt.jpg', '', 1, 1, '4', 1, 1, 2, 0, 0, 0, 0, '', 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_3`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_3` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint unsigned NOT NULL DEFAULT '0',
  `listcatid` varchar(255) NOT NULL DEFAULT '',
  `topicid` smallint unsigned NOT NULL DEFAULT '0',
  `admin_id` mediumint unsigned NOT NULL DEFAULT '0',
  `author` varchar(250) DEFAULT '',
  `sourceid` mediumint NOT NULL DEFAULT '0',
  `addtime` int unsigned NOT NULL DEFAULT '0',
  `edittime` int unsigned NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '1',
  `weight` int unsigned NOT NULL DEFAULT '0',
  `publtime` int unsigned NOT NULL DEFAULT '0',
  `exptime` int unsigned NOT NULL DEFAULT '0',
  `archive` tinyint unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `hometext` text NOT NULL,
  `homeimgfile` varchar(255) DEFAULT '',
  `homeimgalt` varchar(255) DEFAULT '',
  `homeimgthumb` tinyint NOT NULL DEFAULT '0',
  `inhome` tinyint unsigned NOT NULL DEFAULT '0',
  `allowed_comm` varchar(255) DEFAULT '',
  `allowed_rating` tinyint unsigned NOT NULL DEFAULT '0',
  `external_link` tinyint unsigned NOT NULL DEFAULT '0',
  `hitstotal` mediumint unsigned NOT NULL DEFAULT '0',
  `hitscm` mediumint unsigned NOT NULL DEFAULT '0',
  `total_rating` int NOT NULL DEFAULT '0',
  `click_rating` int NOT NULL DEFAULT '0',
  `instant_active` tinyint(1) NOT NULL DEFAULT '0',
  `instant_template` varchar(100) NOT NULL DEFAULT '',
  `instant_creatauto` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`),
  KEY `topicid` (`topicid`),
  KEY `admin_id` (`admin_id`),
  KEY `author` (`author`),
  KEY `title` (`title`),
  KEY `addtime` (`addtime`),
  KEY `edittime` (`edittime`),
  KEY `publtime` (`publtime`),
  KEY `exptime` (`exptime`),
  KEY `status` (`status`),
  KEY `instant_active` (`instant_active`),
  KEY `instant_creatauto` (`instant_creatauto`)
) ENGINE=MyISAM  AUTO_INCREMENT=13  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_3` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (12, 1, '1,3', 0, 1, '', 0, 1445391217, 1445393997, 1, 10, 1445391180, 0, 2, 'Hỗ trợ tập huấn và triển khai NukeViet cho các Phòng, Sở GD&amp;ĐT', 'ho-tro-tap-huan-va-trien-khai-nukeviet-cho-cac-phong-so-gd-dt', 'Trên cơ sở Hướng dẫn thực hiện nhiệm vụ CNTT năm học 2015 - 2016 của Bộ Giáo dục và Đào tạo, Công ty cổ phần phát triển nguồn mở Việt Nam và các doanh nghiệp phát triển NukeViet trong cộng đồng NukeViet đang tích cực công tác hỗ trợ cho các phòng GD&ĐT, Sở GD&ĐT triển khai 2 nội dung chính: Hỗ trợ công tác đào tạo tập huấn hướng dẫn sử dụng NukeViet và Hỗ trợ triển khai NukeViet cho các trường, Phòng và Sở GD&ĐT', 'tap-huan-pgd-ha-dong-2015.jpg', 'Tập huấn triển khai NukeViet tại Phòng Giáo dục và Đào tạo Hà Đông - Hà Nội', 1, 1, '4', 1, 0, 1, 0, 0, 0, 0, '', 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_4`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_4` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint unsigned NOT NULL DEFAULT '0',
  `listcatid` varchar(255) NOT NULL DEFAULT '',
  `topicid` smallint unsigned NOT NULL DEFAULT '0',
  `admin_id` mediumint unsigned NOT NULL DEFAULT '0',
  `author` varchar(250) DEFAULT '',
  `sourceid` mediumint NOT NULL DEFAULT '0',
  `addtime` int unsigned NOT NULL DEFAULT '0',
  `edittime` int unsigned NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '1',
  `weight` int unsigned NOT NULL DEFAULT '0',
  `publtime` int unsigned NOT NULL DEFAULT '0',
  `exptime` int unsigned NOT NULL DEFAULT '0',
  `archive` tinyint unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `hometext` text NOT NULL,
  `homeimgfile` varchar(255) DEFAULT '',
  `homeimgalt` varchar(255) DEFAULT '',
  `homeimgthumb` tinyint NOT NULL DEFAULT '0',
  `inhome` tinyint unsigned NOT NULL DEFAULT '0',
  `allowed_comm` varchar(255) DEFAULT '',
  `allowed_rating` tinyint unsigned NOT NULL DEFAULT '0',
  `external_link` tinyint unsigned NOT NULL DEFAULT '0',
  `hitstotal` mediumint unsigned NOT NULL DEFAULT '0',
  `hitscm` mediumint unsigned NOT NULL DEFAULT '0',
  `total_rating` int NOT NULL DEFAULT '0',
  `click_rating` int NOT NULL DEFAULT '0',
  `instant_active` tinyint(1) NOT NULL DEFAULT '0',
  `instant_template` varchar(100) NOT NULL DEFAULT '',
  `instant_creatauto` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`),
  KEY `topicid` (`topicid`),
  KEY `admin_id` (`admin_id`),
  KEY `author` (`author`),
  KEY `title` (`title`),
  KEY `addtime` (`addtime`),
  KEY `edittime` (`edittime`),
  KEY `publtime` (`publtime`),
  KEY `exptime` (`exptime`),
  KEY `status` (`status`),
  KEY `instant_active` (`instant_active`),
  KEY `instant_creatauto` (`instant_creatauto`)
) ENGINE=MyISAM  AUTO_INCREMENT=11  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_4` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (8, 4, '4', 0, 1, 'Vũ Bích Ngọc', 0, 1445391061, 1445394203, 1, 4, 1445391000, 0, 2, 'Công ty VINADES tuyển dụng nhân viên kinh doanh', 'cong-ty-vinades-tuyen-dung-nhan-vien-kinh-doanh', 'Công ty cổ phần phát triển nguồn mở Việt Nam là đơn vị chủ quản của phần mềm mã nguồn mở NukeViet - một mã nguồn được tin dùng trong cơ quan nhà nước, đặc biệt là ngành giáo dục. Chúng tôi cần tuyển 05 nhân viên kinh doanh cho lĩnh vực này.', 'tuyen-dung-nvkd.png', '', 1, 1, '4', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_4` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (4, 4, '4', 0, 1, 'Phạm Quốc Tiến', 0, 1445391089, 1445394192, 1, 5, 1445391060, 0, 2, 'Tuyển dụng chuyên viên đồ hoạ phát triển NukeViet', 'Tuyen-dung-chuyen-vien-do-hoa', 'Bạn đam mê nguồn mở? Bạn là chuyên gia đồ họa? Chúng tôi sẽ giúp bạn hiện thực hóa ước mơ của mình với một mức lương đảm bảo. Hãy gia nhập Tập Đoàn TMS Holdings để xây dựng mã nguồn mở hàng đầu cho Việt Nam.', 'tuyendung-kythuat.jpg', 'Tuyển dụng', 1, 1, '6', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_4` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (5, 4, '4', 0, 1, 'Phạm Quốc Tiến', 0, 1445391090, 1445394193, 1, 6, 1445391060, 0, 2, 'Tuyển dụng lập trình viên front-end (HTML/CSS/JS) phát triển NukeViet', 'Tuyen-dung-lap-trinh-vien-front-end-HTML-CSS-JS', 'Bạn đam mê nguồn mở? Bạn đang cần tìm một công việc phù hợp với thế mạnh của bạn về front-end (HTML/CSS/JS)? Hãy gia nhập Tập Đoàn TMS Holdings để xây dựng mã nguồn mở hàng đầu cho Việt Nam.', 'tuyendung-kythuat.jpg', 'Tuyển dụng', 1, 1, '6', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_4` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (9, 1, '1,4', 0, 1, 'Trần Thị Thu', 0, 1445391118, 1445394180, 1, 7, 1445391060, 0, 2, 'Chương trình thực tập sinh tại công ty VINADES', 'chuong-trinh-thuc-tap-sinh-tai-cong-ty-vinades', 'Cơ hội để những sinh viên năng động được học tập, trải nghiệm, thử thách sớm với những tình huống thực tế, được làm việc cùng các chuyên gia có nhiều kinh nghiệm của công ty VINADES.', 'thuc-tap-sinh.jpg', '', 1, 1, '4', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_4` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (10, 4, '4', 0, 1, 'Trần Thị Thu', 0, 1445391135, 1445394444, 1, 8, 1445391120, 0, 2, 'Học việc tại công ty VINADES', 'hoc-viec-tai-cong-ty-vinades', 'Công ty cổ phần phát triển nguồn mở Việt Nam tạo cơ hội việc làm và học việc miễn phí cho những ứng viên có đam mê thiết kế web, lập trình PHP… được học tập và rèn luyện cùng đội ngũ lập trình viên phát triển NukeViet.', 'hoc-viec-tai-cong-ty-vinades.jpg', '', 1, 1, '4', 1, 0, 0, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_4` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (3, 4, '4', 0, 1, 'Phạm Quốc Tiến', 2, 1453192400, 1453192400, 1, 11, 1453192400, 0, 2, 'Tuyển dụng lập trình viên PHP phát triển NukeViet', 'Tuyen-dung-lap-trinh-vien-PHP', 'Bạn đam mê nguồn mở? Bạn đang cần tìm một công việc phù hợp với thế mạnh của bạn về PHP và MySQL? Hãy gia nhập Tập Đoàn TMS Holdings để xây dựng mã nguồn mở hàng đầu cho Việt Nam.', 'tuyendung-kythuat.jpg', 'Tuyển dụng', 1, 1, '6', 1, 0, 0, 0, 0, 0, 0, '', 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_5`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_5` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint unsigned NOT NULL DEFAULT '0',
  `listcatid` varchar(255) NOT NULL DEFAULT '',
  `topicid` smallint unsigned NOT NULL DEFAULT '0',
  `admin_id` mediumint unsigned NOT NULL DEFAULT '0',
  `author` varchar(250) DEFAULT '',
  `sourceid` mediumint NOT NULL DEFAULT '0',
  `addtime` int unsigned NOT NULL DEFAULT '0',
  `edittime` int unsigned NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '1',
  `weight` int unsigned NOT NULL DEFAULT '0',
  `publtime` int unsigned NOT NULL DEFAULT '0',
  `exptime` int unsigned NOT NULL DEFAULT '0',
  `archive` tinyint unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `hometext` text NOT NULL,
  `homeimgfile` varchar(255) DEFAULT '',
  `homeimgalt` varchar(255) DEFAULT '',
  `homeimgthumb` tinyint NOT NULL DEFAULT '0',
  `inhome` tinyint unsigned NOT NULL DEFAULT '0',
  `allowed_comm` varchar(255) DEFAULT '',
  `allowed_rating` tinyint unsigned NOT NULL DEFAULT '0',
  `external_link` tinyint unsigned NOT NULL DEFAULT '0',
  `hitstotal` mediumint unsigned NOT NULL DEFAULT '0',
  `hitscm` mediumint unsigned NOT NULL DEFAULT '0',
  `total_rating` int NOT NULL DEFAULT '0',
  `click_rating` int NOT NULL DEFAULT '0',
  `instant_active` tinyint(1) NOT NULL DEFAULT '0',
  `instant_template` varchar(100) NOT NULL DEFAULT '',
  `instant_creatauto` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`),
  KEY `topicid` (`topicid`),
  KEY `admin_id` (`admin_id`),
  KEY `author` (`author`),
  KEY `title` (`title`),
  KEY `addtime` (`addtime`),
  KEY `edittime` (`edittime`),
  KEY `publtime` (`publtime`),
  KEY `exptime` (`exptime`),
  KEY `status` (`status`),
  KEY `instant_active` (`instant_active`),
  KEY `instant_creatauto` (`instant_creatauto`)
) ENGINE=MyISAM  AUTO_INCREMENT=2  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_5` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (1, 1, '1,5,7', 0, 1, 'Quỳnh Nhi', 1, 1274989177, 1275318126, 1, 1, 1274989140, 0, 2, 'Ra mắt công ty mã nguồn mở đầu tiên tại Việt Nam', 'Ra-mat-cong-ty-ma-nguon-mo-dau-tien-tai-Viet-Nam', 'Mã nguồn mở NukeViet vốn đã quá quen thuộc với cộng đồng CNTT Việt Nam trong mấy năm qua. Tuy chưa hoạt động chính thức, nhưng chỉ trong khoảng 5 năm gần đây, mã nguồn mở NukeViet đã được dùng phổ biến ở Việt Nam, áp dụng ở hầu hết các lĩnh vực, từ tin tức đến thương mại điện tử, từ các website cá nhân cho tới những hệ thống website doanh nghiệp.', 'nangly.jpg', 'Thành lập Tập Đoàn TMS Holdings', 1, 1, '6', 1, 0, 2, 0, 0, 0, 0, '', 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_6`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_6` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint unsigned NOT NULL DEFAULT '0',
  `listcatid` varchar(255) NOT NULL DEFAULT '',
  `topicid` smallint unsigned NOT NULL DEFAULT '0',
  `admin_id` mediumint unsigned NOT NULL DEFAULT '0',
  `author` varchar(250) DEFAULT '',
  `sourceid` mediumint NOT NULL DEFAULT '0',
  `addtime` int unsigned NOT NULL DEFAULT '0',
  `edittime` int unsigned NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '1',
  `weight` int unsigned NOT NULL DEFAULT '0',
  `publtime` int unsigned NOT NULL DEFAULT '0',
  `exptime` int unsigned NOT NULL DEFAULT '0',
  `archive` tinyint unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `hometext` text NOT NULL,
  `homeimgfile` varchar(255) DEFAULT '',
  `homeimgalt` varchar(255) DEFAULT '',
  `homeimgthumb` tinyint NOT NULL DEFAULT '0',
  `inhome` tinyint unsigned NOT NULL DEFAULT '0',
  `allowed_comm` varchar(255) DEFAULT '',
  `allowed_rating` tinyint unsigned NOT NULL DEFAULT '0',
  `external_link` tinyint unsigned NOT NULL DEFAULT '0',
  `hitstotal` mediumint unsigned NOT NULL DEFAULT '0',
  `hitscm` mediumint unsigned NOT NULL DEFAULT '0',
  `total_rating` int NOT NULL DEFAULT '0',
  `click_rating` int NOT NULL DEFAULT '0',
  `instant_active` tinyint(1) NOT NULL DEFAULT '0',
  `instant_template` varchar(100) NOT NULL DEFAULT '',
  `instant_creatauto` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`),
  KEY `topicid` (`topicid`),
  KEY `admin_id` (`admin_id`),
  KEY `author` (`author`),
  KEY `title` (`title`),
  KEY `addtime` (`addtime`),
  KEY `edittime` (`edittime`),
  KEY `publtime` (`publtime`),
  KEY `exptime` (`exptime`),
  KEY `status` (`status`),
  KEY `instant_active` (`instant_active`),
  KEY `instant_creatauto` (`instant_creatauto`)
) ENGINE=MyISAM  AUTO_INCREMENT=7  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_6` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (6, 1, '1,6', 0, 1, '', 3, 1322685920, 1322686042, 1, 2, 1322685920, 0, 2, 'Mã nguồn mở NukeViet giành giải ba Nhân tài đất Việt 2011', 'Ma-nguon-mo-NukeViet-gianh-giai-ba-Nhan-tai-dat-Viet-2011', 'Không có giải nhất và giải nhì, sản phẩm Mã nguồn mở NukeViet của Tập Đoàn TMS Holdings là một trong ba sản phẩm đã đoạt giải ba Nhân tài đất Việt 2011 - Lĩnh vực Công nghệ thông tin (Sản phẩm đã ứng dụng rộng rãi).', 'nukeviet-nhantaidatviet2011.jpg', 'Mã nguồn mở NukeViet giành giải ba Nhân tài đất Việt 2011', 1, 1, '6', 1, 0, 1, 0, 0, 0, 0, '', 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_7`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_7` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint unsigned NOT NULL DEFAULT '0',
  `listcatid` varchar(255) NOT NULL DEFAULT '',
  `topicid` smallint unsigned NOT NULL DEFAULT '0',
  `admin_id` mediumint unsigned NOT NULL DEFAULT '0',
  `author` varchar(250) DEFAULT '',
  `sourceid` mediumint NOT NULL DEFAULT '0',
  `addtime` int unsigned NOT NULL DEFAULT '0',
  `edittime` int unsigned NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '1',
  `weight` int unsigned NOT NULL DEFAULT '0',
  `publtime` int unsigned NOT NULL DEFAULT '0',
  `exptime` int unsigned NOT NULL DEFAULT '0',
  `archive` tinyint unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `hometext` text NOT NULL,
  `homeimgfile` varchar(255) DEFAULT '',
  `homeimgalt` varchar(255) DEFAULT '',
  `homeimgthumb` tinyint NOT NULL DEFAULT '0',
  `inhome` tinyint unsigned NOT NULL DEFAULT '0',
  `allowed_comm` varchar(255) DEFAULT '',
  `allowed_rating` tinyint unsigned NOT NULL DEFAULT '0',
  `external_link` tinyint unsigned NOT NULL DEFAULT '0',
  `hitstotal` mediumint unsigned NOT NULL DEFAULT '0',
  `hitscm` mediumint unsigned NOT NULL DEFAULT '0',
  `total_rating` int NOT NULL DEFAULT '0',
  `click_rating` int NOT NULL DEFAULT '0',
  `instant_active` tinyint(1) NOT NULL DEFAULT '0',
  `instant_template` varchar(100) NOT NULL DEFAULT '',
  `instant_creatauto` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`),
  KEY `topicid` (`topicid`),
  KEY `admin_id` (`admin_id`),
  KEY `author` (`author`),
  KEY `title` (`title`),
  KEY `addtime` (`addtime`),
  KEY `edittime` (`edittime`),
  KEY `publtime` (`publtime`),
  KEY `exptime` (`exptime`),
  KEY `status` (`status`),
  KEY `instant_active` (`instant_active`),
  KEY `instant_creatauto` (`instant_creatauto`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_7` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (1, 1, '1,5,7', 0, 1, 'Quỳnh Nhi', 1, 1274989177, 1275318126, 1, 1, 1274989140, 0, 2, 'Ra mắt công ty mã nguồn mở đầu tiên tại Việt Nam', 'Ra-mat-cong-ty-ma-nguon-mo-dau-tien-tai-Viet-Nam', 'Mã nguồn mở NukeViet vốn đã quá quen thuộc với cộng đồng CNTT Việt Nam trong mấy năm qua. Tuy chưa hoạt động chính thức, nhưng chỉ trong khoảng 5 năm gần đây, mã nguồn mở NukeViet đã được dùng phổ biến ở Việt Nam, áp dụng ở hầu hết các lĩnh vực, từ tin tức đến thương mại điện tử, từ các website cá nhân cho tới những hệ thống website doanh nghiệp.', 'nangly.jpg', 'Thành lập Tập Đoàn TMS Holdings', 1, 1, '6', 1, 0, 2, 0, 0, 0, 0, '', 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_news_7` (`id`, `catid`, `listcatid`, `topicid`, `admin_id`, `author`, `sourceid`, `addtime`, `edittime`, `status`, `weight`, `publtime`, `exptime`, `archive`, `title`, `alias`, `hometext`, `homeimgfile`, `homeimgalt`, `homeimgthumb`, `inhome`, `allowed_comm`, `allowed_rating`, `external_link`, `hitstotal`, `hitscm`, `total_rating`, `click_rating`, `instant_active`, `instant_template`, `instant_creatauto`) VALUES (2, 7, '1,7', 0, 1, 'Nguyễn Thế Hùng', 7, 1453192444, 1453192444, 1, 12, 1453192444, 0, 2, 'Hãy trở thành nhà cung cấp dịch vụ của NukeViet&#33;', 'hay-tro-thanh-nha-cung-cap-dich-vu-cua-nukeviet', 'Nếu bạn là công ty hosting, là công ty thiết kế web có sử dụng mã nguồn NukeViet, là cơ sở đào tạo NukeViet hay là công ty bất kỳ có kinh doanh dịch vụ liên quan đến NukeViet... hãy cho chúng tôi biết thông tin liên hệ của bạn để NukeViet hỗ trợ bạn trong công việc kinh doanh nhé!', 'hoptac.jpg', '', 1, 1, '6', 1, 0, 13, 0, 0, 0, 0, '', 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_admins`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_admins` (
  `userid` mediumint unsigned NOT NULL DEFAULT '0',
  `catid` smallint NOT NULL DEFAULT '0',
  `admin` tinyint NOT NULL DEFAULT '0',
  `add_content` tinyint NOT NULL DEFAULT '0',
  `pub_content` tinyint NOT NULL DEFAULT '0',
  `edit_content` tinyint NOT NULL DEFAULT '0',
  `del_content` tinyint NOT NULL DEFAULT '0',
  `app_content` tinyint NOT NULL DEFAULT '0',
  UNIQUE KEY `userid` (`userid`,`catid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_author`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_author` (
  `id` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `uid` int unsigned NOT NULL,
  `alias` varchar(100) NOT NULL DEFAULT '',
  `pseudonym` varchar(100) NOT NULL DEFAULT '',
  `image` varchar(255) DEFAULT '',
  `description` text,
  `add_time` int unsigned NOT NULL DEFAULT '0',
  `edit_time` int unsigned NOT NULL DEFAULT '0',
  `active` tinyint unsigned NOT NULL DEFAULT '1',
  `numnews` mediumint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_authorlist`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_authorlist` (
  `id` int NOT NULL,
  `aid` mediumint NOT NULL,
  `alias` varchar(100) NOT NULL DEFAULT '',
  `pseudonym` varchar(100) NOT NULL DEFAULT '',
  UNIQUE KEY `id_aid` (`id`,`aid`),
  KEY `aid` (`aid`),
  KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_block`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_block` (
  `bid` smallint unsigned NOT NULL,
  `id` int unsigned NOT NULL,
  `weight` int unsigned NOT NULL,
  UNIQUE KEY `bid` (`bid`,`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_block_cat`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_block_cat` (
  `bid` smallint unsigned NOT NULL AUTO_INCREMENT,
  `adddefault` tinyint NOT NULL DEFAULT '0',
  `numbers` smallint NOT NULL DEFAULT '10',
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `image` varchar(255) DEFAULT '',
  `description` varchar(255) DEFAULT '',
  `weight` smallint NOT NULL DEFAULT '0',
  `keywords` text,
  `add_time` int NOT NULL DEFAULT '0',
  `edit_time` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`bid`),
  UNIQUE KEY `title` (`title`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_cat`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_cat` (
  `catid` smallint unsigned NOT NULL AUTO_INCREMENT,
  `parentid` smallint unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL,
  `titlesite` varchar(250) DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `description` text,
  `descriptionhtml` text,
  `image` varchar(255) DEFAULT '',
  `viewdescription` tinyint NOT NULL DEFAULT '0',
  `weight` smallint unsigned NOT NULL DEFAULT '0',
  `sort` smallint NOT NULL DEFAULT '0',
  `lev` smallint NOT NULL DEFAULT '0',
  `viewcat` varchar(50) NOT NULL DEFAULT 'viewcat_page_new',
  `numsubcat` smallint NOT NULL DEFAULT '0',
  `subcatid` varchar(255) DEFAULT '',
  `numlinks` tinyint unsigned NOT NULL DEFAULT '3',
  `newday` tinyint unsigned NOT NULL DEFAULT '2',
  `featured` int NOT NULL DEFAULT '0',
  `ad_block_cat` varchar(255) NOT NULL DEFAULT '',
  `keywords` text,
  `admins` text,
  `add_time` int unsigned NOT NULL DEFAULT '0',
  `edit_time` int unsigned NOT NULL DEFAULT '0',
  `groups_view` varchar(255) DEFAULT '',
  `status` smallint NOT NULL DEFAULT '1',
  PRIMARY KEY (`catid`),
  UNIQUE KEY `alias` (`alias`),
  KEY `parentid` (`parentid`),
  KEY `status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_config_post`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_config_post` (
  `group_id` smallint NOT NULL,
  `addcontent` tinyint NOT NULL,
  `postcontent` tinyint NOT NULL,
  `editcontent` tinyint NOT NULL,
  `delcontent` tinyint NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_detail`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_detail` (
  `id` int unsigned NOT NULL,
  `titlesite` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `bodyhtml` longtext NOT NULL,
  `keywords` varchar(255) DEFAULT '',
  `sourcetext` varchar(255) DEFAULT '',
  `files` text,
  `imgposition` tinyint(1) NOT NULL DEFAULT '1',
  `layout_func` varchar(100) DEFAULT '',
  `copyright` tinyint(1) NOT NULL DEFAULT '0',
  `allowed_send` tinyint(1) NOT NULL DEFAULT '0',
  `allowed_print` tinyint(1) NOT NULL DEFAULT '0',
  `allowed_save` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_logs`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_logs` (
  `id` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `sid` mediumint NOT NULL DEFAULT '0',
  `userid` mediumint unsigned NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '0',
  `note` varchar(255) NOT NULL,
  `set_time` int unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `sid` (`sid`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_rows`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_rows` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint unsigned NOT NULL DEFAULT '0',
  `listcatid` varchar(255) NOT NULL DEFAULT '',
  `topicid` smallint unsigned NOT NULL DEFAULT '0',
  `admin_id` mediumint unsigned NOT NULL DEFAULT '0',
  `author` varchar(250) DEFAULT '',
  `sourceid` mediumint NOT NULL DEFAULT '0',
  `addtime` int unsigned NOT NULL DEFAULT '0',
  `edittime` int unsigned NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '1',
  `weight` int unsigned NOT NULL DEFAULT '0',
  `publtime` int unsigned NOT NULL DEFAULT '0',
  `exptime` int unsigned NOT NULL DEFAULT '0',
  `archive` tinyint unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `hometext` text NOT NULL,
  `homeimgfile` varchar(255) DEFAULT '',
  `homeimgalt` varchar(255) DEFAULT '',
  `homeimgthumb` tinyint NOT NULL DEFAULT '0',
  `inhome` tinyint unsigned NOT NULL DEFAULT '0',
  `allowed_comm` varchar(255) DEFAULT '',
  `allowed_rating` tinyint unsigned NOT NULL DEFAULT '0',
  `external_link` tinyint unsigned NOT NULL DEFAULT '0',
  `hitstotal` mediumint unsigned NOT NULL DEFAULT '0',
  `hitscm` mediumint unsigned NOT NULL DEFAULT '0',
  `total_rating` int NOT NULL DEFAULT '0',
  `click_rating` int NOT NULL DEFAULT '0',
  `instant_active` tinyint(1) NOT NULL DEFAULT '0',
  `instant_template` varchar(100) NOT NULL DEFAULT '',
  `instant_creatauto` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`),
  KEY `topicid` (`topicid`),
  KEY `admin_id` (`admin_id`),
  KEY `author` (`author`),
  KEY `title` (`title`),
  KEY `addtime` (`addtime`),
  KEY `edittime` (`edittime`),
  KEY `publtime` (`publtime`),
  KEY `exptime` (`exptime`),
  KEY `status` (`status`),
  KEY `instant_active` (`instant_active`),
  KEY `instant_creatauto` (`instant_creatauto`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_sources`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_sources` (
  `sourceid` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL DEFAULT '',
  `link` varchar(255) DEFAULT '',
  `logo` varchar(255) DEFAULT '',
  `weight` mediumint unsigned NOT NULL DEFAULT '0',
  `add_time` int unsigned NOT NULL,
  `edit_time` int unsigned NOT NULL,
  PRIMARY KEY (`sourceid`),
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_tags`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_tags` (
  `tid` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `numnews` mediumint NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `image` varchar(255) DEFAULT '',
  `description` text,
  `keywords` varchar(255) DEFAULT '',
  PRIMARY KEY (`tid`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_tags_id`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_tags_id` (
  `id` int NOT NULL,
  `tid` mediumint NOT NULL,
  `keyword` varchar(65) NOT NULL,
  UNIQUE KEY `id_tid` (`id`,`tid`),
  KEY `tid` (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_tmp`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_tmp` (
  `id` mediumint unsigned NOT NULL,
  `admin_id` int NOT NULL DEFAULT '0',
  `time_edit` int NOT NULL,
  `time_late` int NOT NULL,
  `ip` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_news_topics`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_news_topics` (
  `topicid` smallint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(250) NOT NULL DEFAULT '',
  `image` varchar(255) DEFAULT '',
  `description` varchar(255) DEFAULT '',
  `weight` smallint NOT NULL DEFAULT '0',
  `keywords` text,
  `add_time` int NOT NULL DEFAULT '0',
  `edit_time` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`topicid`),
  UNIQUE KEY `title` (`title`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_page`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_page` (
  `id` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `alias` varchar(250) NOT NULL,
  `image` varchar(255) DEFAULT '',
  `imagealt` varchar(255) DEFAULT '',
  `imageposition` tinyint unsigned NOT NULL DEFAULT '0',
  `description` text,
  `bodytext` mediumtext NOT NULL,
  `keywords` text,
  `socialbutton` tinyint NOT NULL DEFAULT '0',
  `activecomm` varchar(255) DEFAULT '',
  `layout_func` varchar(100) DEFAULT '',
  `weight` smallint NOT NULL DEFAULT '0',
  `admin_id` mediumint unsigned NOT NULL DEFAULT '0',
  `add_time` int NOT NULL DEFAULT '0',
  `edit_time` int NOT NULL DEFAULT '0',
  `status` tinyint unsigned NOT NULL DEFAULT '0',
  `hitstotal` mediumint unsigned NOT NULL DEFAULT '0',
  `hot_post` tinyint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_page_config`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_page_config` (
  `config_name` varchar(30) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  UNIQUE KEY `config_name` (`config_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('viewtype', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('facebookapi', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('per_page', '20')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('news_first', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('related_articles', '5')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('copy_page', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('alias_lower', '1')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_page_config` (`config_name`, `config_value`) VALUES ('socialbutton', 'facebook,twitter')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_referer_stats`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_referer_stats` (
  `host` varchar(250) NOT NULL,
  `total` int NOT NULL DEFAULT '0',
  `month01` int NOT NULL DEFAULT '0',
  `month02` int NOT NULL DEFAULT '0',
  `month03` int NOT NULL DEFAULT '0',
  `month04` int NOT NULL DEFAULT '0',
  `month05` int NOT NULL DEFAULT '0',
  `month06` int NOT NULL DEFAULT '0',
  `month07` int NOT NULL DEFAULT '0',
  `month08` int NOT NULL DEFAULT '0',
  `month09` int NOT NULL DEFAULT '0',
  `month10` int NOT NULL DEFAULT '0',
  `month11` int NOT NULL DEFAULT '0',
  `month12` int NOT NULL DEFAULT '0',
  `last_update` int NOT NULL DEFAULT '0',
  UNIQUE KEY `host` (`host`),
  KEY `total` (`total`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_searchkeys`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_searchkeys` (
  `id` varchar(32) NOT NULL DEFAULT '',
  `skey` varchar(250) NOT NULL,
  `total` int NOT NULL DEFAULT '0',
  `search_engine` varchar(50) NOT NULL,
  KEY `id` (`id`),
  KEY `skey` (`skey`),
  KEY `search_engine` (`search_engine`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_siteterms`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_siteterms` (
  `id` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `alias` varchar(250) NOT NULL,
  `image` varchar(255) DEFAULT '',
  `imagealt` varchar(255) DEFAULT '',
  `imageposition` tinyint unsigned NOT NULL DEFAULT '0',
  `description` text,
  `bodytext` mediumtext NOT NULL,
  `keywords` text,
  `socialbutton` tinyint NOT NULL DEFAULT '0',
  `activecomm` varchar(255) DEFAULT '',
  `layout_func` varchar(100) DEFAULT '',
  `weight` smallint NOT NULL DEFAULT '0',
  `admin_id` mediumint unsigned NOT NULL DEFAULT '0',
  `add_time` int NOT NULL DEFAULT '0',
  `edit_time` int NOT NULL DEFAULT '0',
  `status` tinyint unsigned NOT NULL DEFAULT '0',
  `hitstotal` mediumint unsigned NOT NULL DEFAULT '0',
  `hot_post` tinyint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  AUTO_INCREMENT=3  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_siteterms` (`id`, `title`, `alias`, `image`, `imagealt`, `imageposition`, `description`, `bodytext`, `keywords`, `socialbutton`, `activecomm`, `layout_func`, `weight`, `admin_id`, `add_time`, `edit_time`, `status`, `hitstotal`, `hot_post`) VALUES (1, 'Chính sách bảo mật (Quyền riêng tư)', 'privacy', '', '', 0, 'Tài liệu này cung cấp cho bạn (người truy cập và sử dụng website) chính sách liên quan đến bảo mật và quyền riêng tư của bạn', '<strong><a id=\"index\" name=\"index\"></a>Danh mục</strong><br /> <a href=\"#1\">Điều 1: Thu thập thông tin</a><br /> <a href=\"#2\">Điều 2: Lưu trữ &amp; Bảo vệ thông tin</a><br /> <a href=\"#3\">Điều 3: Sử dụng thông tin </a><br /> <a href=\"#4\">Điều 4: Tiếp nhận thông tin từ các đối tác </a><br /> <a href=\"#5\">Điều 5: Chia sẻ thông tin với bên thứ ba</a><br /> <a href=\"#6\">Điều 6: Thay đổi chính sách bảo mật</a>  <hr  /> <h2><a id=\"1\" name=\"1\"></a>Điều 1: Thu thập thông tin</h2>  <h3>1.1. Thu thập tự động:</h3>  <div>Hệ thống này được xây dựng bằng mã nguồn NukeViet. Như mọi website hiện đại khác, chúng tôi sẽ thu thập địa chỉ IP và các thông tin web tiêu chuẩn khác của bạn như: loại trình duyệt, các trang bạn truy cập trong quá trình sử dụng dịch vụ, thông tin về máy tính &amp; thiết bị mạng v.v… cho mục đích phân tích thông tin phục vụ việc bảo mật và giữ an toàn cho hệ thống.</div>  <h3>1.2. Thu thập từ các khai báo của chính bạn:</h3>  <div>Các thông tin do bạn khai báo cho chúng tôi trong quá trình làm việc như: đăng ký tài khoản, liên hệ với chúng tôi... cũng sẽ được chúng tôi lưu trữ phục vụ công việc chăm sóc khách hàng sau này.</div>  <h3>1.3. Thu thập thông tin thông qua việc đặt cookies:</h3>  <p>Như mọi website hiện đại khác, khi bạn truy cập website, chúng tôi (hoặc các công cụ theo dõi hoặc thống kê hoạt động của website do các đối tác cung cấp) sẽ đặt một số File dữ liệu gọi là Cookies lên đĩa cứng hoặc bộ nhớ máy tính của bạn.</p>  <p>Một trong số những Cookies này có thể tồn tại lâu để thuận tiện cho bạn trong quá trình sử dụng, ví dụ như: lưu Email của bạn trong trang đăng nhập để bạn không phải nhập lại v.v…</p>  <h3>1.4. Thu thập và lưu trữ thông tin trong quá khứ:</h3>  <p>Bạn có thể thay đổi thông tin cá nhân của mình bất kỳ lúc nào bằng cách sử dụng chức năng tương ứng. Tuy nhiên chúng tôi sẽ lưu lại những thông tin bị thay đổi để chống các hành vi xóa dấu vết gian lận.</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2><a id=\"2\" name=\"2\"></a>Điều 2: Lưu trữ &amp; Bảo vệ thông tin</h2>  <div>Hầu hết các thông tin được thu thập sẽ được lưu trữ tại cơ sở dữ liệu của chúng tôi.<br /> <br /> Chúng tôi bảo vệ dữ liệu cá nhân của các bạn bằng các hình thức như: mật khẩu, tường lửa, mã hóa cùng các hình thức thích hợp khác và chỉ cấp phép việc truy cập và xử lý dữ liệu cho các đối tượng phù hợp, ví dụ chính bạn hoặc các nhân viên có trách nhiệm xử lý thông tin với bạn thông qua các bước xác định danh tính phù hợp.<br /> <br /> Mật khẩu của bạn được lưu trữ và bảo vệ bằng phương pháp mã hoá trong cơ sở dữ liệu của hệ thống, vì thế nó rất an toàn. Tuy nhiên, chúng tôi khuyên bạn không nên dùng lại mật khẩu này trên các website khác. Mật khẩu của bạn là cách duy nhất để bạn đăng nhập vào tài khoản thành viên của mình trong website này, vì thế hãy cất giữ nó cẩn thận. Trong mọi trường hợp bạn không nên cung cấp thông tin mật khẩu cho bất kỳ người nào dù là người của chúng tôi, người của NukeViet hay bất kỳ người thứ ba nào khác trừ khi bạn hiểu rõ các rủi ro khi để lộ mật khẩu. Nếu quên mật khẩu, bạn có thể sử dụng chức năng “<a href=\"/users/lostpass/\">Quên mật khẩu</a>” trên website. Để thực hiện việc này, bạn cần phải cung cấp cho hệ thống biết tên thành viên hoặc địa chỉ Email đang sử dụng của mình trong tài khoản, sau đó hệ thống sẽ tạo ra cho bạn mật khẩu mới và gửi đến cho bạn để bạn vẫn có thể đăng nhập vào tài khoản thành viên của mình.  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p> </div>  <h2><a id=\"3\" name=\"3\"></a>Điều 3: Sử dụng thông tin</h2>  <p>Thông tin thu thập được sẽ được chúng tôi sử dụng để:</p>  <div>- Cung cấp các dịch vụ hỗ trợ &amp; chăm sóc khách hàng.</div>  <div>- Thực hiện giao dịch thanh toán &amp; gửi các thông báo trong quá trình giao dịch.</div>  <div>- Xử lý khiếu nại, thu phí &amp; giải quyết sự cố.</div>  <div>- Ngăn chặn các hành vi có nguy cơ rủi ro, bị cấm hoặc bất hợp pháp và đảm bảo tuân thủ đúng chính sách “Thỏa thuận người dùng”.</div>  <div>- Đo đạc, tùy biến &amp; cải tiến dịch vụ, nội dung và hình thức của website.</div>  <div>- Gửi bạn các thông tin về chương trình Marketing, các thông báo &amp; chương trình khuyến mại.</div>  <div>- So sánh độ chính xác của thông tin cá nhân của bạn trong quá trình kiểm tra với bên thứ ba.</div>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2><a id=\"4\" name=\"4\"></a>Điều 4: Tiếp nhận thông tin từ các đối tác</h2>  <div>Khi sử dụng các công cụ giao dịch và thanh toán thông qua internet, chúng tôi có thể tiếp nhận thêm các thông tin về bạn như địa chỉ username, Email, số tài khoản ngân hàng... Chúng tôi kiểm tra những thông tin này với cơ sở dữ liệu người dùng của mình nhằm xác nhận rằng bạn có phải là khách hàng của chúng tôi hay không nhằm giúp việc thực hiện các dịch vụ cho bạn được thuận lợi.<br /> <br /> Các thông tin tiếp nhận được sẽ được chúng tôi bảo mật như những thông tin mà chúng tôi thu thập được trực tiếp từ bạn.</div>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2><a id=\"5\" name=\"5\"></a>Điều 5: Chia sẻ thông tin với bên thứ ba</h2>  <p>Chúng tôi sẽ không chia sẻ thông tin cá nhân, thông tin tài chính... của bạn cho các bên thứ 3 trừ khi được sự đồng ý của chính bạn hoặc khi chúng tôi buộc phải tuân thủ theo các quy định pháp luật hoặc khi có yêu cầu từ cơ quan công quyền có thẩm quyền.</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2><a id=\"6\" name=\"6\"></a>Điều 6: Thay đổi chính sách bảo mật</h2>  <p>Chính sách Bảo mật này có thể thay đổi theo thời gian. Chúng tôi sẽ không giảm quyền của bạn theo Chính sách Bảo mật này mà không có sự đồng ý rõ ràng của bạn. Chúng tôi sẽ đăng bất kỳ thay đổi Chính sách Bảo mật nào trên trang này và, nếu những thay đổi này quan trọng, chúng tôi sẽ cung cấp thông báo nổi bật hơn (bao gồm, đối với một số dịch vụ nhất định, thông báo bằng email về các thay đổi của Chính sách Bảo mật).</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <p style=\"text-align: right;\">Chính sách bảo mật mặc định này được xây dựng cho <a href=\"http://tms.vn\" target=\"_blank\">NukeViet CMS</a>, được tham khảo từ website <a href=\"http://webnhanh.vn/vi/thiet-ke-web/detail/Chinh-sach-bao-mat-Quyen-rieng-tu-Privacy-Policy-2147/\">webnhanh.vn</a></p>', '', 0, '4', '', 1, 1, 1651616682, 1651616682, 1, 0, 0)";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_siteterms` (`id`, `title`, `alias`, `image`, `imagealt`, `imageposition`, `description`, `bodytext`, `keywords`, `socialbutton`, `activecomm`, `layout_func`, `weight`, `admin_id`, `add_time`, `edit_time`, `status`, `hitstotal`, `hot_post`) VALUES (2, 'Điều khoản và điều kiện sử dụng', 'terms-and-conditions', '', '', 0, 'Đây là các điều khoản và điều kiện áp dụng cho website này. Truy cập và sử dụng website tức là bạn đã đồng ý với các quy định này.', '<div>Cảm ơn bạn đã sử dụng. Xin vui lòng đọc các Điều khoản một cách cẩn thận, và <a href=\"/contact/\">liên hệ</a> với chúng tôi nếu bạn có bất kỳ câu hỏi. Bằng việc truy cập hoặc sử dụng website của chúng tôi, bạn đồng ý bị ràng buộc bởi các <a href=\"/siteterms/terms-and-conditions.html\">Điều khoản và điều kiện</a> sử dụng cũng như <a href=\"/siteterms/privacy.html\">Chính sách bảo mật</a> của chúng tôi. Nếu không đồng ý với các quy định này, bạn vui lòng ngưng sử dụng website.<br /> <br /> <strong><a id=\"index\" name=\"index\"></a>Danh mục</strong><br /> <a href=\"#1\">Điều 1: Điều khoản liên quan đến phần mềm vận hành website</a><br /> <a href=\"#2\">Điều 2: Giới hạn cho việc sử dụng Website và các tài liệu trên website</a><br /> <a href=\"#3\">Điều 3: Sử dụng thương hiệu</a><br /> <a href=\"#4\">Điều 4: Các hành vi bị nghiêm cấm</a><br /> <a href=\"#5\">Điều 5: Các đường liên kết đến các website khác</a><br /> <a href=\"#6\">Điều 6: Từ chối bảo đảm</a><br /> <a href=\"#7\">Điều 7: Luật áp dụng và cơ quan giải quyết tranh chấp</a><br /> <a href=\"#8\">Điều 8: Thay đổi điều khoản và điều kiện sử dụng</a></div>  <hr  /> <h2><a id=\"1\" name=\"1\"></a>Điều khoản liên quan đến phần mềm vận hành website</h2>  <p>- Website của chúng tôi sử dụng hệ thống NukeViet, là giải pháp về website/ cổng thông tin nguồn mở được phát hành theo giấy phép bản quyền phần mềm tự do nguồn mở “<a href=\"http://www.gnu.org/licenses/old-licenses/gpl-2.0.html\" target=\"_blank\">GNU General Public License</a>” (viết tắt là GNU/GPL hay GPL) và có thể tải về miễn phí tại trang web <a href=\"http://www.tms.vn\" target=\"_blank\">www.tms.vn</a>.<br /> - Website này do chúng tôi sở hữu, điều hành và duy trì. NukeViet (hiểu ở đây là “hệ thống NukeViet” (bao gồm nhân hệ thống NukeViet và các sản phẩm phái sinh như NukeViet CMS, NukeViet Portal, <a href=\"http://edu.tms.vn\" target=\"_blank\">NukeViet Edu Gate</a>...), “www.tms.vn”, “tổ chức NukeViet”, “ban điều hành NukeViet”, &quot;Ban Quản Trị NukeViet&quot; và nói chung là những gì liên quan đến NukeViet...) không liên quan gì đến việc chúng tôi điều hành website cũng như quy định bạn được phép làm và không được phép làm gì trên website này.<br /> - Hệ thống NukeViet là bộ mã nguồn được phát triển để xây dựng các website/ cổng thông tin trên mạng. Chúng tôi (chủ sở hữu, điều hành và duy trì website này) không hỗ trợ và khẳng định hay ngụ ý về việc có liên quan đến NukeViet. Để biết thêm nhiều thông tin về NukeViet, hãy ghé thăm website của NukeViet tại địa chỉ: <a href=\"http://tms.vn\" target=\"_blank\">http://tms.vn</a>.</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2><a id=\"2\" name=\"2\"></a>Giới hạn cho việc sử dụng Website và các tài liệu trên website</h2>  <p>- Tất cả các quyền liên quan đến tất cả tài liệu và thông tin được hiển thị và/ hoặc được tạo ra sẵn cho Website này (ví dụ như những tài liệu được cung cấp để tải về) được quản lý, sở hữu hoặc được cho phép sử dụng bởi chúng tôi hoặc chủ sở hữu tương ứng với giấy phép tương ứng. Việc sử dụng các tài liệu và thông tin phải được tuân thủ theo giấy phép tương ứng được áp dụng cho chúng.<br /> - Ngoại trừ các tài liệu được cấp phép rõ ràng dưới dạng giấy phép tư liệu mở&nbsp;Creative Commons (gọi là giấy phép CC) cho phép bạn khai thác và chia sẻ theo quy định của giấy phép tư liệu mở, đối với các loại tài liệu không ghi giấy phép rõ ràng thì bạn không được phép sử dụng (bao gồm nhưng không giới hạn việc sao chép, chỉnh sửa toàn bộ hay một phần, đăng tải, phân phối, cấp phép, bán và xuất bản) bất cứ tài liệu nào mà không có sự cho phép trước bằng văn bản của chúng tôi ngoại trừ việc sử dụng cho mục đích cá nhân, nội bộ, phi thương mại.<br /> - Một số tài liệu hoặc thông tin có những điều khoản và điều kiện áp dụng riêng cho chúng không phải là giấy phép tư liệu mở, trong trường hợp như vậy, bạn được yêu cầu phải chấp nhận các điều khoản và điều kiện đó khi truy cập vào các tài liệu và thông tin này.</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2><a id=\"3\" name=\"3\"></a>Sử dụng thương hiệu</h2>  <p>- Tập Đoàn TMS Holdings, NukeViet và thương hiệu gắn với NukeViet (ví dụ NukeViet CMS, NukeViet Portal, NukeViet Edu Gate...), logo công ty VINADES thuộc sở hữu của Công ty cổ phần phát triển nguồn mở Việt Nam.<br /> - Những tên sản phẩm, tên dịch vụ khác, logo và/ hoặc những tên công ty được sử dụng trong Website này là những tài sản đã được đăng ký độc quyền và được giữ bản quyền bởi những người sở hữu và/ hoặc người cấp phép tương ứng.</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2><a id=\"4\" name=\"4\"></a>Các hành vi bị nghiêm cấm</h2>  <p>Người truy cập website này không được thực hiện những hành vi dưới đây khi sử dụng website:<br /> - Xâm phạm các quyền hợp pháp (bao gồm nhưng không giới hạn đối với các quyền riêng tư và chung) của người khác.<br /> - Gây ra sự thiệt hại hoặc bất lợi cho người khác.<br /> - Làm xáo trộn trật tự công cộng.<br /> - Hành vi liên quan đến tội phạm.<br /> - Tải lên hoặc phát tán thông tin riêng tư của tổ chức, cá nhân khác mà không được sự chấp thuận của họ.<br /> - Sử dụng Website này vào mục đích thương mại mà chưa được sự cho phép của chúng tôi.<br /> - Nói xấu, làm nhục, phỉ báng người khác.<br /> - Tải lên các tập tin chứa virus hoặc các tập tin bị hư mà có thể gây thiệt hại đến sự vận hành của máy tính khác.<br /> - Những hoạt động có khả năng ảnh hưởng đến hoạt động bình thường của website.<br /> - Những hoạt động mà chúng tôi cho là không thích hợp.<br /> - Những hoạt động bất hợp pháp hoặc bị cấm bởi pháp luật hiện hành.</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2><a id=\"5\" name=\"5\"></a>Các đường liên kết đến các website khác</h2>  <p>- Các website của các bên thứ ba (không phải các trang do chúng tôi quản lý) được liên kết đến hoặc từ website này (&quot;Các website khác&quot;) được điều hành và duy trì hoàn toàn độc lập bởi các bên thứ ba đó và không nằm trong quyền điều khiển và/hoặc giám sát của chúng tôi. Việc truy cập các website khác phải được tuân thủ theo các điều khoản và điều kiện quy định bởi ban điều hành của website đó.<br /> - Chúng tôi không chịu trách nhiệm cho sự mất mát hoặc thiệt hại do việc truy cập và sử dụng các website bên ngoài, và bạn phải chịu mọi rủi ro khi truy cập các website đó.<br /> - Không có nội dung nào trong Website này thể hiện như một sự đảm bảo của chúng tôi về nội dung của các website khác và các sản phẩm và/ hoặc các dịch vụ xuất hiện và/ hoặc được cung cấp tại các website khác.</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2><a id=\"6\" name=\"6\"></a>Từ chối bảo đảm</h2>  <p>NGOẠI TRỪ PHẠM VI BỊ CẤM THEO LUẬT PHÁP HIỆN HÀNH, CHÚNG TÔI SẼ:<br /> - KHÔNG CHỊU TRÁCH NHIỆM HAY BẢO ĐẢM, MỘT CÁCH RÕ RÀNG HAY NGỤ Ý, BAO GỒM SỰ BẢO ĐẢM VỀ TÍNH CHÍNH XÁC, MỨC ĐỘ TIN CẬY, HOÀN THIỆN, PHÙ HỢP CHO MỤC ĐÍCH CỤ THỂ, SỰ KHÔNG XÂM PHẠM QUYỀN CỦA BÊN THỨ 3 VÀ/HOẶC TÍNH AN TOÀN CỦA NỘI DỤNG WEBSITE NÀY, VÀ NHỮNG TUYÊN BỐ, ĐẢM BẢO CÓ LIÊN QUAN.<br /> - KHÔNG CHỊU TRÁCH NHIỆM CHO BẤT KỲ SỰ THIỆT HẠI HAY MẤT MÁT PHÁT SINH TỪ VIỆC TRUY CẬP VÀ SỬ DỤNG WEBSITE HAY VIỆC KHÔNG THỂ SỬ DỤNG WEBSITE.<br /> - CHÚNG TÔI CÓ THỂ THAY ĐỔI VÀ/HOẶC THAY THẾ NỘI DUNG CỦA WEBSITE NÀY, HOẶC TẠM HOÃN HOẶC NGƯNG CUNG CẤP CÁC DỊCH VỤ QUA WEBSITE NÀY VÀO BẤT KỲ THỜI ĐIỂM NÀO MÀ KHÔNG CẦN THÔNG BÁO TRƯỚC. CHÚNG TÔI SẼ KHÔNG CHỊU TRÁCH NHIỆM CHO BẤT CỨ THIỆT HẠI NÀO PHÁT SINH DO SỰ THAY ĐỔI HOẶC THAY THẾ NỘI DUNG CỦA WEBSITE.</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2><a id=\"7\" name=\"7\"></a>Luật áp dụng và cơ quan giải quyết tranh chấp</h2>  <p>- Các Điều Khoản và Điều Kiện này được điều chỉnh và giải thích theo luật của Việt Nam trừ khi có điều khoản khác được cung cấp thêm. Tất cả tranh chấp phát sinh liên quan đến website này và các Điều Khoản và Điều Kiện sử dụng này sẽ được giải quyết tại các tòa án ở Việt Nam.<br /> - Nếu một phần nào đó của các Điều Khoản và Điều Kiện bị xem là không có giá trị, vô hiệu, hoặc không áp dụng được vì lý do nào đó, phần đó được xem như là phần riêng biệt và không ảnh hưởng đến tính hiệu lực của phần còn lại.<br /> - Trong trường hợp có sự mâu thuẫn giữa bản Tiếng Anh và bản Tiếng Việt của bản Điều Khoản và Điều Kiện này, bản Tiếng Việt sẽ được ưu tiên áp dụng.</p>  <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p>  <h2><a id=\"8\" name=\"8\"></a>Thay đổi điều khoản và điều kiện sử dụng</h2>  <div>Điều khoản và điều kiện sử dụng có thể thay đổi theo thời gian. Chúng tôi bảo lưu quyền thay đổi hoặc sửa đổi bất kỳ điều khoản và điều kiện cũng như các quy định khác, bất cứ lúc nào và theo ý mình. Chúng tôi sẽ có thông báo trên website khi có sự thay đổi. Tiếp tục sử dụng trang web này sau khi đăng các thay đổi tức là bạn đã chấp nhận các thay đổi đó. <p style=\"text-align: right;\"><a href=\"#index\">Trở lại danh mục</a></p> </div>', '', 0, '4', '', 2, 1, 1651616682, 1651616682, 1, 0, 0)";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_vi_siteterms_config`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_vi_siteterms_config` (
  `config_name` varchar(30) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  UNIQUE KEY `config_name` (`config_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_siteterms_config` (`config_name`, `config_value`) VALUES ('viewtype', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_siteterms_config` (`config_name`, `config_value`) VALUES ('facebookapi', '')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_siteterms_config` (`config_name`, `config_value`) VALUES ('per_page', '20')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_siteterms_config` (`config_name`, `config_value`) VALUES ('news_first', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_siteterms_config` (`config_name`, `config_value`) VALUES ('related_articles', '5')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_siteterms_config` (`config_name`, `config_value`) VALUES ('copy_page', '0')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_siteterms_config` (`config_name`, `config_value`) VALUES ('alias_lower', '1')";
$sql_create_table[] = "INSERT INTO `" . $db_config['prefix'] . "_vi_siteterms_config` (`config_name`, `config_value`) VALUES ('socialbutton', 'facebook,twitter')";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_zalo_article`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_zalo_article` (
  `id` mediumint NOT NULL AUTO_INCREMENT,
  `zalo_id` char(100) NOT NULL DEFAULT '',
  `token` text NOT NULL,
  `type` char(10) NOT NULL DEFAULT '',
  `title` varchar(150) NOT NULL DEFAULT '',
  `author` char(50) NOT NULL DEFAULT '',
  `cover_type` char(20) NOT NULL DEFAULT '',
  `cover_photo_url` varchar(250) NOT NULL DEFAULT '',
  `cover_video_id` char(100) NOT NULL DEFAULT '',
  `cover_view` char(10) NOT NULL DEFAULT 'horizontal',
  `cover_status` char(10) NOT NULL DEFAULT 'hide',
  `description` text NOT NULL,
  `body` text NOT NULL,
  `related_medias` text NOT NULL,
  `tracking_link` varchar(250) NOT NULL DEFAULT '',
  `video_id` char(100) NOT NULL DEFAULT '',
  `video_avatar` varchar(250) NOT NULL DEFAULT '',
  `status` char(10) NOT NULL DEFAULT 'show',
  `comment` char(10) NOT NULL DEFAULT 'show',
  `create_date` int NOT NULL DEFAULT '0',
  `update_date` int NOT NULL DEFAULT '0',
  `total_view` int NOT NULL DEFAULT '0',
  `total_share` int NOT NULL DEFAULT '0',
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `zalo_id` (`zalo_id`),
  KEY `is_sync` (`is_sync`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_zalo_conversation`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_zalo_conversation` (
  `message_id` char(50) NOT NULL,
  `user_id` char(30) NOT NULL,
  `src` tinyint(1) NOT NULL DEFAULT '0',
  `time` int NOT NULL DEFAULT '0',
  `type` char(20) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `links` text NOT NULL,
  `thumb` varchar(250) NOT NULL DEFAULT '',
  `url` varchar(250) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `location` char(150) NOT NULL DEFAULT '',
  `note` text NOT NULL,
  `displayed` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_zalo_followers`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_zalo_followers` (
  `user_id` char(30) NOT NULL,
  `app_id` char(30) NOT NULL,
  `user_id_by_app` char(30) NOT NULL DEFAULT '',
  `display_name` varchar(250) NOT NULL DEFAULT '',
  `avatar120` varchar(250) NOT NULL DEFAULT '',
  `avatar240` varchar(250) NOT NULL DEFAULT '',
  `user_gender` char(1) NOT NULL DEFAULT '',
  `tags_info` text NOT NULL,
  `notes_info` text NOT NULL,
  `isfollow` tinyint(1) NOT NULL DEFAULT '1',
  `weight` mediumint NOT NULL DEFAULT '0',
  `name` char(100) NOT NULL DEFAULT '',
  `phone_code` char(10) NOT NULL DEFAULT '',
  `phone_number` char(20) NOT NULL DEFAULT '',
  `address` varchar(250) NOT NULL DEFAULT '',
  `city_id` char(10) NOT NULL DEFAULT '',
  `district_id` char(10) NOT NULL DEFAULT '',
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `updatetime` int NOT NULL DEFAULT '0',
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_zalo_settings`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_zalo_settings` (
  `skey` char(100) NOT NULL,
  `type` char(20) NOT NULL DEFAULT '',
  `svalue` text NOT NULL,
  UNIQUE KEY `info_key` (`skey`,`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_zalo_tags`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_zalo_tags` (
  `alias` char(50) NOT NULL,
  `name` char(100) NOT NULL,
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_zalo_tags_follower`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_zalo_tags_follower` (
  `tag` char(50) NOT NULL,
  `user_id` char(30) NOT NULL,
  UNIQUE KEY `tag` (`tag`,`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_zalo_template`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_zalo_template` (
  `id` smallint NOT NULL AUTO_INCREMENT,
  `type` char(10) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_zalo_upload`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_zalo_upload` (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `type` char(50) NOT NULL,
  `extension` char(10) NOT NULL,
  `file` varchar(250) NOT NULL,
  `localfile` varchar(250) NOT NULL DEFAULT '',
  `width` smallint NOT NULL DEFAULT '0',
  `height` smallint NOT NULL DEFAULT '0',
  `zalo_id` varchar(250) NOT NULL DEFAULT '',
  `description` varchar(250) NOT NULL DEFAULT '',
  `addtime` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";

$sql_create_table[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_zalo_video`";
$sql_create_table[] = "CREATE TABLE `" . $db_config['prefix'] . "_zalo_video` (
  `id` mediumint NOT NULL AUTO_INCREMENT,
  `video_id` char(100) NOT NULL DEFAULT '',
  `token` text NOT NULL,
  `video_name` char(100) NOT NULL DEFAULT '',
  `video_size` int NOT NULL DEFAULT '0',
  `description` varchar(250) NOT NULL DEFAULT '',
  `view` char(10) NOT NULL DEFAULT 'horizontal',
  `thumb` varchar(250) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `status_message` char(100) NOT NULL DEFAULT '',
  `convert_percent` int NOT NULL DEFAULT '0',
  `convert_error_code` int NOT NULL DEFAULT '0',
  `addtime` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci";
