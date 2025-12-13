<?php
require('head.php'); 
require('nav.php');

if(isset($_GET['xoa'])) {
$id = $_GET['xoa'];

$ManhDev->xoa("support", "`id` = '$id' ");
echo '<script type="text/javascript">location.href = "/admin/addNotification";</script>';
}
?>
<section class="col-lg-12 connectedSortable">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">THÊM THÔNG TIN LIÊN HỆ</h3>
        </div>
    <div class="card-body">
        <div class="form-group">
            <label class="form-label">Tên Phương Thức:</label>
            <input type="text" class="form-control" id="title" placeholder="Nhập Tên App - Phương Thức Liên Hệ">
        </div>
        <div class="form-group">
            <label class="form-label">Đường Dẫn Liên Hệ:</label>
            <input type="url" class="form-control" id="url" placeholder="Nhập Link Dẫn Đến Profile">
        </div>
        <div class="form-group">
            <button type="button" id="submit" class="btn btn-success btn-block">Thêm Ngay</button>
        </div>
<script type="text/javascript">
$(document).ready(function(){
		$('#submit').click(function() {
		$('#submit').html('Đang Xử Lý...').prop('disabled', true);
		var formData = {
            'title'  : $("#title").val(),
            'url'    : $("#url").val()
		};
		$.post("/api/admin/setSuport", formData,
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
</section>

<section class="col-lg-12 connectedSortable">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">DANH SÁCH LIÊN HỆ</h3>
        </div>
    <div class="card-body">
        <div class="card-body table-responsive p-0">
                        <table id="datatable1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>STT</th>
                                    <th>TITLE</th>
                                    <th>LINK</th>
                                    <th>Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
  $i = 1;
  $user = $ManhDev->query("SELECT * FROM `support` ORDER BY `id` DESC ");
  while ($row1 = mysqli_fetch_array($user) ) 
  {?>
                                <tr class="text-center">
                                    <td><?=$i++;?></td>
                                    <td><?=$row1['title'];?></td>
                                    <td><?=$row1['url'];?></td>
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