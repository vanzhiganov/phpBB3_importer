<?php
define('IN_PHPBB', false);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_user.' . $phpEx);

$user_row = array(
    'username'              => $argv[1],
    'user_password'         => phpbb_hash($argv[3]),
    'user_email'            => $argv[2],
    'group_id'              => (int) 2,
    'user_timezone'         => (float) 4,
    'user_dst'              => $is_dst,
    'user_lang'             => "ru",
    'user_type'             => USER_NORMAL,
    //'user_actkey'           => $user_actkey,
    //'user_ip'               => $user_ip,
    'user_regdate'          => time(),
    'user_inactive_reason'  => $user_inactive_reason,
    'user_inactive_time'    => $user_inactive_time,
);
$user_id = user_add($user_row);
