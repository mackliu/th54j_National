<?php include_once "./api/db.php";?>
<?php

//判斷$_SESSION['login']這個變數是否存在
if(!isset($_SESSION['login'])){

    //如果$_SESSION['login']不存在，表示管理者未登入，
    //將使用者導回登入頁
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>南港展覽館接駁專車-系統管理</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./js/jquery.js"></script>
    <script src="./js/js.js"></script>
</head>
<body>
<?php include "header.php";?>   
<div class="container mt-5">
<div class="border p-3">
    <a href="#" class='mod btn btn-light active' onclick="load('admin_bus.php');setActive(this)">接駁車管理</a>
    <a href="#" class='mod btn btn-light' onclick="load('admin_station.php');setActive(this)">站點管理</a>
    <a href="#" class='mod btn btn-light' onclick="load('admin_form.php');setActive(this)">表單管理</a>
</div>
<div class="main">

</div>
</div>

<script src="./js/bootstrap.js"></script>
<script>
load("admin_bus.php");

/**
 * 自訂函式，使用jQuery的$.load()方法來載入指定的頁面
 */
function load(page){
    $(".main").load(`pages/${page}`);
}

function setActive(dom=$(".mod").eq(0)){
    $(".mod").removeClass("active");
    $(dom).addClass("active");
}
</script>
</body>
</html>
