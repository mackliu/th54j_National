<?php include_once "../api/db.php"; 
$station=$pdo->query("SELECT * FROM `station` WHERE `id`='{$_GET['id']}'")->fetch();
?>
<h1 class="border p-3 my-3 text-center">修改「<span id='title'><?=$station['name'];?></span>」</h1>
    <form>
    <div class="row w-100">
        <label for="" class="col-2">行駛時間(分鐘)</label>   
        <input  type="number" name="minute" id="minute" value="<?=$station['minute'];?>" class='form-group form-control col-10'
                min='0' step="1" required>
    </div>
    <div class="row w-100">
        <label for="" class="col-2">停留時間(分鐘)</label>   
        <input  type="number" name="waiting" id="waiting" value="<?=$station['waiting'];?>" class='form-group form-control col-10'
                min='0' step="1" required>
    </div>
    <div class="row w-100">
        <input  type="button" value="修改" class='col-12 btn btn-success my-1' onclick="save()">
        <input  type="button" value="回上頁" class='col-12 btn btn-secondary my-1' onclick="load('admin_station.php');setActive('AdminStation')">
    </div>
    </form>
    <script>
function save(){
    let data={minute:$("#minute").val(),
              waiting:$("#waiting").val(),
              id:<?=$station['id'];?>
        }
    $.post("./api/edit_station.php",data,()=>{
        load('admin_station.php')
        setActive("AdminStation")
    })
}
</script>