<?php include_once "./api/db.php";
//使用迴圈快速新增75筆資料範例
$all=$pdo->query("select * from `users` ")->fetchAll(PDO::FETCH_ASSOC);
foreach($all as $idx => $user){
    if($idx<75){
        $name=explode("@",$user['email'])[0];
        $pdo->exec("insert into `result` (`name`,`email`) values('$name','{$user['email']}')");
    }
}