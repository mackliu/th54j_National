<?php 
include_once "db.php";
//取得前端傳來的email
$email=$_POST['email'];
//檢查email是否已在email列表中
$exit=$pdo->query("select count(*) from `users` where `email`='$email'")->fetchColumn();
if(!$exit){
    echo 1;  //回傳1代表email不在email列表中
    exit();
}

//檢查是否已填寫過表單
$active=$pdo->query("select count(*) from `result` where `email`='$email'")->fetchColumn();
if(!$active){
    echo 2;   //回傳2代表未回應或填寫過表單
    exit();
}

//檢查是否已被分配到接駁車
$feeback=$pdo->query("select count(*) from `result` where `email`='$email' AND (`bus` is null OR length(`bus`)<4)")->fetchColumn();
if($feeback){
    echo 3;   //回傳3代表未被分配到接駁車
    exit();
}

//取得接駁車編號
$bus=$pdo->query("select * from `result` where `email`='$email'")->fetch();
echo $bus['bus'];

