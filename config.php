<?php
$db_host='127.4.77.130';	
$db_user='admineSF2jqi';
$db_pass='zcZWiInQNu3h';
$db_name='managelib';

if(!@mysql_connect($db_server, $db_user, $db_pass))
        die("無法對資料庫連線");

    mysql_query("SET NAMES utf8");
if(!@mysql_select_db($db_name))
		die("無法使用資料庫")
?>