<?php
require('head.php'); 
require('nav.php');

if(isset($_GET['xoa'])) {
$id = $_GET['xoa'];

$ManhDev->xoa("notification", "`id` = '$id' ");
echo '<script type="text/javascript">location.href = "/admin/notification";</script>';
}
?>
<div class="col-xl-12">
<div class="row">
<div class="col-md-6 mb-3">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Thêm Thông Báo Sảnh</h3>
        </div>
    <div class="card-body">
        <div class="form-group">
            <label class="form-label">Nội Dung Thông Báo:</label>
            <textarea class="form-control" id="note" rows="6" placeholder="Nội Dung Thông Báo"></textarea>
        </div>
        <div class="form-group">
            <button type="button" id="submit" class="btn btn-success btn-block">Thêm Ngay</button>
        </div>
<script type="text/javascript">
$(document).ready(function(){
		$('#submit').click(function() {
		$('#submit').html('Đang Xử Lý...').prop('disabled', true);
		var formData = {
		    'type'     : 'sanh',
            'note'     : $("#note").val()
		};
		$.post("/api/admin/notification", formData,
			function (data) {
			    if(data.status == 'error'){
				Swal.fire('Thông báo', data.msg, data.status);
				$('#submit').html('Thêm Ngay').prop('disabled', false);
			    } else {
			     setTimeout(function(){ location.href = "" },2000);
			     Swal.fire('Thông báo', data.msg, data.status);
			     $('#submit').html('Thêm Ngay').prop('disabled', false);
			    }
		}, "json");
	});
});
</script>
</div>
</div>
</div>

<div class="col-md-6">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Thêm Thông Báo Nổi Modal Sảnh</h3>
        </div>
    <div class="card-body">
        <div class="form-group" >
            <label class="form-control-label" for="input-email">Trạng Thái:</label>
            <select id="status" class="form-control">
                <option value="<?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'note_modal' ")['status'];?>"><?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'note_modal' ")['status'];?></option>
                <option value="ON">ON</option>
                <option value="OFF">OFF</option>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label">Nội Dung Thông Báo:</label>
            <textarea class="form-control textarea" id="note_modal" placeholder="Nội Dung Thông Báo"><?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'note_modal' ")['value'];?></textarea>
        </div>
        <div class="form-group">
            <button type="button" id="submit_modal" class="btn btn-primary btn-block">Lưu Lại</button>
        </div>
<script type="text/javascript">
$(document).ready(function(){
		$('#submit_modal').click(function() {
		$('#submit_modal').html('Đang Xử Lý...').prop('disabled', true);
		var formData = {
		    'type'     : 'modal',
		    'status'   : $("#status").val(),
            'note'     : $("#note_modal").val()
		};
		$.post("/api/admin/notification", formData,
			function (data) {
			    if(data.status == 'error'){
				Swal.fire('Thông báo', data.msg, data.status);
				$('#submit_modal').html('Xác Nhận').prop('disabled', false);
			    } else {
			     setTimeout(function(){ location.href = "" },2000);
			     Swal.fire('Thông báo', data.msg, data.status);
			     $('#submit_modal').html('Xác Nhận').prop('disabled', false);
			    }
		}, "json");
	});
});
</script>
</div>
</div>
</div>
</div></div>

<section class="col-lg-12 connectedSortable">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">DANH SÁCH THÔNG BÁO</h3>
        </div>
    <div class="card-body">
        <div class="card-body table-responsive p-0">
                        <table id="datatable1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>STT</th>
                                    <th>NOTE</th>
                                    <th>TIME</th>
                                    <th>Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
  $i = 1;
  $user = $ManhDev->query("SELECT * FROM `notification` ORDER BY `id` DESC ");
  while ($row1 = mysqli_fetch_array($user) ) 
  {?>
                                <tr>
                                    <td><?=$i++;?></td>
                                    <td><?=$row1['note'];?></td>
                                    <td><?=$row1['time'];?></td>
                                    <td><a href="?xoa=<?=$row1['id'];?>" class="btn btn-danger btn-sm">Xóa</a></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
    </div>
</div>
</section>
<?php require('foot.php'); ?>