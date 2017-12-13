<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
$db_server = "localhost";

$db_name = "105021030";

$db_user = "105021030";
    
$db_passwd = "#ssBdi5qP";

//對資料庫連線
if(!@$link = mysqli_connect($db_server, $db_user, $db_passwd,$db_name))
        die("無法對資料庫連線");

//資料庫連線採UTF8
mysqli_query("SET NAMES utf8");

////選擇資料庫
if(!@mysqli_select_db($link,$db_name))
        die("無法使用資料庫");
?>