<?php
//建立資料庫連線所需參數
$dsn="mysql:host=localhost;charset=utf8;dbname=th_54_national";
//$dsn="mysql:host=localhost;charset=utf8;dbname=th53j_National";
//建立PDO物件
$pdo=new PDO($dsn,'root','mack1007');

//啟用session
session_start();

?>