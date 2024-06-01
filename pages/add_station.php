<h1 class="border p-3 my-3 text-center">新增站點</h1>
<form action="./api/add_station.php" method="post">

    <div class="row w-100">
        <label for="" class="col-2">站點名稱</label>
        <input type="text" name="name" id="name" class='form-group form-control col-10'>
    </div>
    <div class="row w-100">
        <label for="" class="col-2">行駛時間(分鐘)</label>
        <input type="number" name="minute" id="addMinute" class='form-group form-control col-10' min='0' step="1" required>
    </div>
    <div class="row w-100">
        <label for="" class="col-2">停留時間(分鐘)</label>
        <input type="number" name="waiting" id="addWaiting" class='form-group form-control col-10' min='0' step="1" required>
    </div>
    <div class="row w-100">
        <input type="button" value="新增" class='col-12 btn btn-success my-1' onclick='save()'>
        <input type="button" value="回上頁" class='col-12 btn btn-secondary my-1' onclick="load('admin_station.php');setActive($('.mod').eq(1))">
    </div>
</form>
<script>
    function save() {
        $.post("./api/add_station.php", {
                name: $("#name").val(),
                minute: $("#addMinute").val(),
                waiting: $("#addWaiting").val()
            })
            .then(() => {
                load('admin_station.php');
                setActive($('.mod').eq(1))
            })
    }
</script>