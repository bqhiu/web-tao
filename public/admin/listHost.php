<?php
require('head.php'); 
require('nav.php'); 

if(isset($_GET['xoa'])) {
$id = $_GET['xoa'];

$ManhDev->xoa("history_Host", "`id` = '$id' ");
echo '<script type="text/javascript">location.href = "/admin/hosting";</script>';
}

if(isset($_GET['xoa_host'])) {
$id = $_GET['xoa_host'];

$ManhDev->xoa("list_Host", "`id` = '$id' ");
echo '<script type="text/javascript">location.href = "/admin/hosting";</script>';
}
?>
<div class="row">
<section class="col-lg-12 connectedSortable">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">DANH SÁCH HOSTING ĐANG BÁN</h3>
                    <div class="text-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Thêm Hosting</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body table-responsive p-0">
                        <table id="datatable1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Dung Lượng</th>
                                    <th>Giá Tiền</th>
                                    <th>Note</th>
                                    <th>Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
<?php 
  $i = 1;
  $user = $ManhDev->query("SELECT * FROM `list_Host` ORDER BY `id` DESC ");
  while ($row1 = mysqli_fetch_array($user)) { ?>
                                <tr class="text-center">
                                    <td><?=$i++;?></td>
                                    <td><?=$row1['title'];?></td>
                                    <td><?=$row1['capacity'];?>MB</td>
                                    <td><?=tien($row1['money']);?>đ</td>
                                    <td><?=$row1['note'];?></td>
                                    <td>
                                        <a href="?xoa_host=<?=$row1['id'];?>" class="btn btn-danger btn-sm">Xóa</a></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</section>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">THÊM HOSTING BÁN</h4>
            </div>
            <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">TÊN GÓI HOST:</label>
                        <input type="text" class="form-control" id="title" placeholder="Gói Hosting VietNam...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Số MB Host:</label>
                        <input type="number" class="form-control" id="capacity" placeholder="1000">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Giá Tiền:</label>
                        <input type="number" class="form-control" id="money" placeholder="Giá Tiền">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nội Dung Mô Tả:</label>
                        <textarea type="text" class="form-control" id="note" placeholder="Nội Dung Mô Tả"></textarea>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">ĐÓNG</button>
                <button type="submit" id="themngay" class="btn btn-primary">THÊM NGAY</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
		$('#themngay').click(function() {
		$('#themngay').html('Đang Xử Lý...').prop('disabled', true);
		var formData = {
		    'title'     : $("#title").val(),
		    'capacity'  : $("#capacity").val(),
		    'money'     : $("#money").val(),
		    'note'      : $("#note").val()
		};
		$.post("/api/admin/addHost", formData,
			function (data) {
			    if(data.status == 'error'){
				Swal.fire('Thông báo', data.msg, data.status);
				$('#themngay').html('THÊM NGAY').prop('disabled', false);
			    } else {
			     setTimeout(function(){ location.href = "" },2000);
			     Swal.fire('Thông báo', data.msg, data.status);
			     $('#themngay').html('THÊM NGAY').prop('disabled', false);
			    }
		}, "json");
	});
});
</script>

<section class="col-lg-12 connectedSortable">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">DANH SÁCH ĐƠN HÀNG HOSTING</h3>
                </div>
                <div class="card-body">
                    <div class="card-body table-responsive p-0">
                        <table id="datatable1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>STT</th>
                                    <th>Tài Khoản</th>
                                    <th>Gói</th>
                                    <th>Tên Miền</th>
                                    <th>Giá Tiền</th>
                                    <th>Ngày Mua</th>
                                    <th>Ngày Hết</th>
                                    <th>Trạng Thái</th>
                                    <th>Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
<?php 
  $i = 1;
  $user = $ManhDev->query("SELECT * FROM `history_Host` ORDER BY `id` DESC ");
  while ($row1 = mysqli_fetch_array($user)) { ?>
                                <tr class="text-center">
                                    <td><?=$i++;?></td>
                                    <td><?=$row1['username'];?></td>
                                    <td><?=$row1['goi'];?></td>
                                    <td><?=$row1['domain'];?></td>
                                    <td><?=tien($row1['money']);?></td>
                                    <td><?=$row1['ngaymua'];?></td>
                                    <td><?=$row1['ngayhet'];?></td>
                                    <td><?=host($row1['status']);?></td>
                                    <td>
                                        <?php if($row1['status'] == "xuly") { ?>
                                        <a href="/admin/setHost/<?=$row1['id'];?>" class="btn btn-success btn-sm">Duyệt</a>
                                        <?php } else { ?>
                                        <a href="/admin/setHost/<?=$row1['id'];?>" class="btn btn-info btn-sm">Cập Nhật</a>
                                        <?php } ?>
                                        <a href="?xoa=<?=$row1['id'];?>" class="btn btn-danger btn-sm">Xóa</a></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</section>
</div>
<?php require('foot.php'); ?>