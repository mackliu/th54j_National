<?php
include_once "db.php";
$before=$pdo->query("SELECT max(`id`) FROM `station`")->fetchColumn();
//建立新增資料用的SQL語法
$sql="INSERT INTO `station` (`name`, `before`,`minute`,`waiting`) 
 VALUES ('{$_POST['name']}','$before', '{$_POST['minute']}', '{$_POST['waiting']}')";

//執行SQL語法
$pdo->exec($sql);

//導向回到admin.php?pos=bus
//header("location:../admin.php?pos=bus");


