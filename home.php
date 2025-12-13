<?php require('config/head.php');
if(empty($ManhDev->users('username'))) {
echo "<script>location.href = '/auth/login'</script>";
}
?>
<title>Trang Chủ - Hệ Thống Dịch Vụ Mạng Xã Hội</title>
<?php require('config/nav.php'); ?>
<div class="row">
<div class="col-md-4">
<div class="card">
<div class="card-body">
<div class="d-flex justify-content-between">
<div>
<h6 class="font-size-15">Tổng Nạp Tiền</h6>
<h4 class="mt-3 pt-1 mb-0 font-size-22"><?=tien($ManhDev->users('tong_nap'));?> Coin</h4>
</div>
<div class="">
<div class="avatar">
<div class="avatar-title rounded bg-soft-primary">
<i class="fas fa-dollar font-size-24 mb-0"></i>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card">
<div class="card-body">
<div class="d-flex justify-content-between">
<div>
<h6 class="font-size-15">Số Dư Hiện Có</h6>
<h4 class="mt-3 pt-1 mb-0 font-size-22"><?=tien($ManhDev->users('money'));?> Coin</h4>
</div>
<div class="">
<div class="avatar">
<div class="avatar-title rounded bg-soft-success">
<i class="fas fa-dollar font-size-24 mb-0"></i>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card">
<div class="card-body">
<div class="d-flex justify-content-between">
<div>
<h6 class="font-size-15">Số Tiền Đã Dùng</h6>
<h4 class="mt-3 pt-1 mb-0 font-size-22"><?=tien($ManhDev->users('tong_tru'));?> Coin</h4>
</div>
<div class="">
<div class="avatar">
<div class="avatar-title rounded bg-soft-info">
 <i class="fas fa-dollar font-size-24 mb-0"></i>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row row-sm">
    <div class="col-md-9 col-lg-9 col-xl-9 mb-3">
        <div class="card">
            <div class="card-body" style="max-height: 570px; overflow: auto; overscroll-behavior: auto;">
                <h3>Thông Báo Website</h3>
                <div class="row">
            <style>
               .avt_noti {
                   height: 35px;
               }
               .avt {
                   height: 80px;
               }
           </style>


<div class="card">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="d-flex align-items-start">
                            <div class="d-flex align-items-start">
                                    <img src="/images/profile.png" alt="" width="50" height="50">
                                </div>
                                <h5 class="text mb-1 fs-2">Chào mừng <big class="text-info"> <?=$ManhDev->users('username');?> </big>  đến với website chúng tôi!
                                </h5>
                            </div>
                            <div class="d-flex align-items">
 <!--   Phần coin                            <div class="border-end pe-4 border-muted border-opacity-10">
                                    <h3 class="mb-1 fw-semibold fs-3 d-flex align-content-center">
                                        0 VNĐ
                                    </h3>
                                    <p class="mb-0 text-dark">Số dư</p>
                                </div>
                                <div class="ps-4">
                                    <h3 class="mb-1 fw-semibold fs-3 d-flex align-content-center">
                                        0 VNĐ
                                    </h3>
                                    <p class="mb-0 text-dark">Tổng nạp</p>
                                </div>  -->
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="welcome-bg-img mb-n7 text-end">
                                <img src="/images/newslater2.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

        <?php
$note = $ManhDev->get_list("SELECT * FROM `notification` ORDER BY `id` DESC");
foreach($note as $tb) { ?>
<div class="col-md-12 mb-3">
<div class="card">
<div class="card-body">
<div class="d-flex align-items-start mb-3">
<div class="d-flex align-items-start">
<img src="https://graph.facebook.com/<?=$ManhDev->site('faceAdmin');?>/picture?width=200&amp;height=200&amp;access_token=6628568379|c1e620fa708a1d5696fb991c1bde5662" alt="Mạnh Dev - Zalo: 0528139892" class="rounded-circle avt_noti">
<div class="me-2">
<h6 class="mb-0">&nbsp;<span style="color: #FFFFFF;text-shadow: 0px 4px 5px #000; background: transparent url('https://i.imgur.com/1ZHeaAQ.gif');"><?=$ManhDev->site('nameAdmin');?></span> <img src="https://i.imgur.com/Fcupuom.gif" alt="Đã Xác Minh" style="height: 14px;"></h6>
<small class="text-muted">&nbsp;<?=$tb['time'];?></small>
</div>
</div>
</div>
<?=$tb['note'];?>
</div>
</div>
</div>
<?php } ?>
</div>
</div>
</div>
</div>


    <div class="col-lg-3 col-xl-3 mb-3">
        <div class="card mb-3">
            <div class="card-body">
                <h5>Nâng Cấp Tài Khoản</h5>
                    <center><img src="https://img.icons8.com/external-flaticons-flat-flat-icons/64/null/external-delivery-truck-black-friday-flaticons-flat-flat-icons.png" alt="" width="80" height="80">
                    </center>
                    <div class="text-center mb-3">
                        <h5>
                           Nâng cấp bậc!
                        </h5>
                        <p class="text-soft">Bạn sẽ nhận được nhiều ưu hơn hơn như: giảm giá dịch vụ, tạo website riêng, hỗ trợ ...</p>
                    </div>
                    <div class="d-grid col-12 text-center">
                        <a href="/profile/upgrade" class="btn btn-danger">Nâng Cấp Ngay</a>
                    </div>
            </div>
        </div>
        
</div>
</div>

    <?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'note_modal' ")['status'] == "ON") { ?>
<div class="modal fade" id="ledoanminhchien" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thông Báo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <img style="height: 26px" src="https://preview.keenthemes.com/assets/kt_close_icon.svg"  alt=""/>
                        </span>
                    </button>
            </div>
        <div class="modal-body">
            <p><?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'note_modal' ")['value'];?></p>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
</div>
<?php } ?>
</div>

<?php require('config/foot.php'); ?>