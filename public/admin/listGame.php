<?php
require('head.php'); 
require('nav.php'); 

if(isset($_GET['xoa_categoriesGame'])) {
$id = $_GET['xoa_categoriesGame'];

$ManhDev->xoa("categoriesGame", "`id` = '$id' ");
echo '<script type="text/javascript">location.href = "/admin/listGame";</script>';
}


if(isset($_GET['xoa_accGame'])) {
$id = $_GET['xoa_accGame'];

$ManhDev->xoa("listGame", "`id` = '$id' ");
echo '<script type="text/javascript">location.href = "/admin/listGame";</script>';
}

if(isset($_GET['xoa_list'])) {
$id = $_GET['xoa_list'];

$ManhDev->xoa("history_accGame", "`id` = '$id' ");
echo '<script type="text/javascript">location.href = "/admin/listGame";</script>';
}
?>
<div class="row">
<section class="col-lg-12 connectedSortable">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">THỂ LOẠI GAME</h3>
                    <div class="text-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Thêm Thể Loại</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body table-responsive p-0">
                        <table id="datatable1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>STT</th>
                                    <th>Ảnh</th>
                                    <th>Tiêu Đề</th>
                                    <th>Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
<?php 
  $i = 1;
  $user = $ManhDev->query("SELECT * FROM `categoriesGame` ORDER BY `id` DESC ");
  while ($row1 = mysqli_fetch_array($user)) { ?>
                                <tr class="text-center">
                                    <td><?=$i++;?></td>
                                    <td><img src="<?=$row1['img'];?>" height="80px"></td>
                                    <td><?=$row1['title'];?></td>
                                    <td><a href="?xoa_categoriesGame=<?=$row1['id'];?>" class="btn btn-danger btn-sm">Xóa</a></td>
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
                <h4 class="modal-title">THÊM THỂ LOẠI</h4>
            </div>
            <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ẢNH ĐẠI DIỆN:</label>
                        <input type="text" class="form-control" id="img" placeholder="Link Ảnh Đại Diện">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">TÊN THỂ LOẠI:</label>
                        <input type="text" class="form-control" id="title" placeholder="Nick Free Fire, Nick Liên Quân,...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">GIẢM 50%:</label>
                        <select id="giamgia" class="form-control">
                            <option value="on">ON</option>
                            <option value="off">OFF</option>
                        </select>
                    </div>
                
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">ĐÓNG</button>
                <button type="submit" id="theloai" class="btn btn-primary">THÊM NGAY</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
		$('#theloai').click(function() {
		$('#theloai').html('Đang Xử Lý...').prop('disabled', true);
		var formData = {
		    'type'      : 'theloai',
		    'img'       : $("#img").val(),
            'title'     : $("#title").val(),
            'giamgia'   : $("#giamgia").val()
		};
		$.post("/api/admin/accGame", formData,
			function (data) {
			    if(data.status == 'error'){
				Swal.fire('Thông báo', data.msg, data.status);
				$('#theloai').html('THÊM NGAY').prop('disabled', false);
			    } else {
			     setTimeout(function(){ location.href = "" },2000);
			     Swal.fire('Thông báo', data.msg, data.status);
			     $('#theloai').html('THÊM NGAY').prop('disabled', false);
			    }
		}, "json");
	});
});
</script>

<section class="col-lg-12 connectedSortable">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">TÀI KHOẢN GAME</h3>
                    <div class="text-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-acc">Thêm Tài Khoản</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body table-responsive p-0">
                        <table id="datatable1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>STT</th>
                                    <th>Ảnh</th>
                                    <th>Thể Loại</th>
                                    <th>Mã Số</th>
                                    <th>Giá Tiền</th>
                                    <th>Mô Tả</th>
                                    <th>Tài Khoản</th>
                                    <th>Trạng Thái</th>
                                    <th>Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
<?php 
  $i = 1;
  $accgame = $ManhDev->query("SELECT * FROM `listGame` WHERE `status` = 'dangban' ORDER BY `id` DESC ");
  while ($row = mysqli_fetch_array($accgame)) { ?>
                                <tr>
                                    <td><?=$i++;?></td>
                                    <td class="text-center"><img src="<?=$row['img'];?>" height="80px"></td>
                                    <td><?=$ManhDev->get_row("SELECT * FROM `categoriesGame` WHERE `code` = '".$row['code_categories']."' ")['title'];?></td>
                                    <td class="text-center"><?=$row['idGame'];?></td>
                                    <td class="text-center"><?=tien($row['giagiam']);?>đ</td>
                                    <td><?=$row['note'];?></td>
                                    <td><?=$row['noteAccount'];?></td>
                                    <td class="text-center"><?=accgame($row['status']);?></td>
                                    <td class="text-center"><a href="?xoa_accGame=<?=$row['id'];?>" class="btn btn-danger btn-sm">Xóa</a></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</section>

<div class="modal fade" id="modal-acc">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">THÊM TÀI KHOẢN BÁN</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                        <label for="exampleInputEmail1">THỂ LOẠI:</label>
                        <select id="theloai1" class="form-control">
                            <?php
                  $result = $ManhDev->query("SELECT * FROM `categoriesGame` ");
                  while ($row = mysqli_fetch_array($result) ) { ?>
                  <option value="<?=$row['code'];?>"><?=$row['title'];?></option>
                  <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ẢNH ĐẠI DIỆN:</label>
                        <input type="text" class="form-control" id="avt" placeholder="Link Ảnh Đại Diện">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">GIÁ GỐC:</label>
                        <input type="number" class="form-control" id="giagoc" placeholder="Giá Tiền Gốc">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">GIÁ GIẢM:</label>
                        <input type="number" class="form-control" id="giagiam" placeholder="Giảm Xuống Còn">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">MÔ TẢ TÀI KHOẢN:</label>
                        <textarea type="text" class="form-control" id="mota" placeholder="Mô Tả Tài Khoản" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">THÔNG TIN ĐĂNG NHẬP:</label>
                        <textarea type="text" class="form-control" id="note" placeholder="Tài Khoản: manhdev
Mật Khẩu: 12345678" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">LINK ẢNH DEMO:</label>
                        <textarea type="text" class="form-control" id="imgDemo" placeholder="Mỗi Link Ảnh 1 Dòng" rows="4"></textarea>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">ĐÓNG</button>
                <button type="submit" id="accgame" class="btn btn-primary">THÊM NGAY</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
		$('#accgame').click(function() {
		$('#accgame').html('Đang Xử Lý...').prop('disabled', true);
		var formData = {
		    'type'     : 'accgame',
		    'categories' : $("#theloai1").val(),
		    'img'      : $("#avt").val(),
            'giagoc'   : $("#giagoc").val(),
            'giagiam'  : $("#giagiam").val(),
            'mota'     : $("#mota").val(),
            'thongtin' : $("#note").val(),
            'imgDemo'  : $("#imgDemo").val(),
		};
		$.post("/api/admin/accGame", formData,
			function (data) {
			    if(data.status == 'error'){
				Swal.fire('Thông báo', data.msg, data.status);
				$('#accgame').html('THÊM NGAY').prop('disabled', false);
			    } else {
			     setTimeout(function(){ location.href = "" },2000);
			     Swal.fire('Thông báo', data.msg, data.status);
			     $('#accgame').html('THÊM NGAY').prop('disabled', false);
			    }
		}, "json");
	});
});
</script>

<section class="col-lg-12 connectedSortable">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">KHÁCH MUA TÀI KHOẢN</h3>
                </div>
                <div class="card-body">
                    <div class="card-body table-responsive p-0">
                        <table id="datatable1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>STT</th>
                                    <th>Tài Khoản</th>
                                    <th>Mã Số</th>
                                    <th>Mã Giao Dịch</th>
                                    <th>Sản Phẩm</th>
                                    <th>Giá Tiền</th>
                                    <th>Thông Tin</th>
                                    <th>Thời Gian</th>
                                    <th>Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
<?php 
  $i = 1;
  $user = $ManhDev->query("SELECT * FROM `history_accGame` ORDER BY `id` DESC ");
  while ($row1 = mysqli_fetch_array($user)) { ?>
                                <tr class="text-center">
                                    <td><?=$i++;?></td>
                                    <td><?=$row1['username'];?></td>
                                    <td><?=$row1['idGame'];?></td>
                                    <td><?=$row1['trading'];?></td>
                                    <td><?=$row1['title'];?></td>
                                    <td><?=tien($row1['money']);?> Coin</td>
                                    <td><?=$row1['noteAcc'];?></td>
                                    <td><?=$row1['time'];?></td>
                                    <td><a href="?xoa_list=<?=$row1['id'];?>" class="btn btn-danger btn-sm">Xóa</a></td>
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