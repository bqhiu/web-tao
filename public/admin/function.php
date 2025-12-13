<?php
require('head.php'); 
require('nav.php');
?>
<section class="col-lg-12 connectedSortable">
<div class="row">
<div class="col-lg-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">ON/OFF CHỨC NĂNG WEBSITE</h3>
        </div>
    <div class="card-body">
        <div class="row">
        <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label">Bán Tài Khoản</label>
            <select id="account" class="form-control">
                <option value="<?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'account' ")['status'];?>"><?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'account' ")['status'];?></option>
                <option value="ON">ON</option>
                <option value="OFF">OFF</option>
            </select>
        </div>
    </div>
    
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label">Gạch Thẻ Cào</label>
            <select id="card" class="form-control">
                <option value="<?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'card' ")['status'];?>"><?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'card' ")['status'];?></option>
                <option value="ON">ON</option>
                <option value="OFF">OFF</option>
            </select>
        </div>
    </div>
    
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label">Check Tên Miền</label>
            <select id="domain" class="form-control">
                <option value="<?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'domain' ")['status'];?>"><?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'domain' ")['status'];?></option>
                <option value="ON">ON</option>
                <option value="OFF">OFF</option>
            </select>
        </div>
    </div>
    
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label">Bán Hosting</label>
            <select id="hosting" class="form-control">
                <option value="<?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'hosting' ")['status'];?>"><?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'hosting' ")['status'];?></option>
                <option value="ON">ON</option>
                <option value="OFF">OFF</option>
            </select>
        </div>
    </div>
    
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label">Bán Code Website</label>
            <select id="coder" class="form-control">
                <option value="<?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'coder' ")['status'];?>"><?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'coder' ")['status'];?></option>
                <option value="ON">ON</option>
                <option value="OFF">OFF</option>
            </select>
        </div>
    </div>
    
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label">Bán Key Tool</label>
            <select id="keytool" class="form-control">
                <option value="<?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'keytool' ")['status'];?>"><?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'keytool' ")['status'];?></option>
                <option value="ON">ON</option>
                <option value="OFF">OFF</option>
            </select>
        </div>
    </div>
    
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label">Dịch Vụ MXH</label>
            <select id="mxh" class="form-control">
                <option value="<?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'mxh' ")['status'];?>"><?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'mxh' ")['status'];?></option>
                <option value="ON">ON</option>
                <option value="OFF">OFF</option>
            </select>
        </div>
    </div>
    
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label">Link Checkscam</label>
            <select id="checkscam" class="form-control">
                <option value="<?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'checkscam' ")['status'];?>"><?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'checkscam' ")['status'];?></option>
                <option value="ON">ON</option>
                <option value="OFF">OFF</option>
            </select>
        </div>
    </div>
    
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label">Dịch Vụ Tạo Web</label>
            <select id="website" class="form-control">
                <option value="<?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'website' ")['status'];?>"><?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'website' ")['status'];?></option>
                <option value="ON">ON</option>
                <option value="OFF">OFF</option>
            </select>
        </div>
    </div>
    
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label">Dịch Vụ Acc Game</label>
            <select id="accgame" class="form-control">
                <option value="<?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'nickgame' ")['status'];?>"><?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'nickgame' ")['status'];?></option>
                <option value="ON">ON</option>
                <option value="OFF">OFF</option>
            </select>
        </div>
    </div>
    
     <div class="col-lg-12">
    <div class="form-group">
            <button type="button" id="submit" class="btn btn-success btn-block">Lưu</button>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</section>
<script type="text/javascript">
$(document).ready(function(){
		$('#submit').click(function() {
		$('#submit').html('Đang Xử Lý...').prop('disabled', true);
		var formData = {
            'account'   : $("#account").val(),
            'card'      : $("#card").val(),
            'domain'    : $("#domain").val(),
            'hosting'   : $("#hosting").val(),
            'coder'     : $("#coder").val(),
            'keytool'   : $("#keytool").val(),
            'mxh'       : $("#mxh").val(),
            'checkscam' : $("#checkscam").val(),
            'website'   : $("#website").val(),
            'accgame'   : $("#accgame").val(),
		};
		$.post("/api/admin/function", formData,
			function (data) {
			    if(data.status == 'error'){
				Swal.fire('Thông báo', data.msg, data.status);
				$('#submit').html('Xác Nhận').prop('disabled', false);
			    } else {
			     setTimeout(function(){ location.href = "" },2000);
			     Swal.fire('Thông báo', data.msg, data.status);
			     $('#submit').html('Xác Nhận').prop('disabled', false);
			    }
		}, "json");
	});
});
</script>
<?php require('foot.php'); ?>