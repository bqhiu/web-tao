
<header id="page-topbar" class="isvertical-topbar">
<div class="navbar-header">
<div class="d-flex">
<button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
<i class="fas fa-bars align-middle"></i>
</button>

<div class="page-title-box align-self-center d-none d-md-block">
<h4 class="page-title mb-0"></h4>
</div>

</div>
<div class="d-flex">
<div class="dropdown d-inline-block">
<button type="button" class="btn header-item noti-icon" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-magnifying-glass icon-sm align-middle"></i>
</button>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
<form class="p-2">
<div class="search-box">
<div class="position-relative">
<input type="text" class="form-control rounded bg-light border-0" placeholder="Tìm Kiếm 1 Thứ Gì Đó...">
<i class="fas fa-magnifying-glass search-icon"></i>
</div>
</div>
</form>
</div>
</div>
<div class="dropdown d-inline-block">
<button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-bell icon-sm align-middle"></i>
<span class="noti-dot bg-danger rounded-pill">4</span>
</button>
<div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown-v">
<div class="p-3">
<div class="row align-items-center">
<div class="col">
<h5 class="m-0 font-size-15"> Thông báo </h5>
</div>
</div>
</div>
<div data-simplebar="init" style="max-height: 250px;"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
<a href="#!" class="text-reset notification-item">
<div class="d-flex">
<div class="flex-shrink-0 avatar-sm me-3">
<span class="avatar-title bg-primary rounded-circle font-size-18">
<i class="fas fa-user"></i>
</span>
</div>
<div class="flex-grow-1">
<h6 class="mb-1 text-danger">Quản Trị Viên</h6>
<div>
<p class="mb-0">Hệ Thống Đã Cập Nhật Giao Diện Hoàn Toàn Mới</p>
<p class="text-muted font-size-13 mb-0 float-end">3 Phút Trước</p>
</div>
</div>
</div>
</a>
</div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
<div class="p-2 border-top d-grid">
<a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
<span><b>Đóng</b></span>
</a>
</div>
</div>
</div>
<div class="dropdown d-inline-block">
<button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<img class="rounded-circle header-profile-user" src="https://ui-avatars.com/api/?background=0D8ABC&amp;color=fff&amp;name=<?=$ManhDev->users('name');?>" alt="Header Avatar">
<span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15"><?=$ManhDev->users('username');?></span>
</button>
<div class="dropdown-menu dropdown-menu-end pt-0">
<div class="p-3 border-bottom">
<h6 class="mb-0"><?=$ManhDev->users('username');?></h6>
<p class="mb-0 font-size-11 text-muted"><?=tien($ManhDev->users('money'));?> Coin</p>
</div>
<a class="dropdown-item" href="/profile/info"><i class="fas fa-user-alt text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Tài khoản của tôi</span></a>
<a class="dropdown-item" href="/recharge/banking"><i class="fas fa-wallet text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Nạp tiền tài khoản</span></a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="/auth/logout"><i class="fas fa-power-off text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Đăng xuất</span></a>
</div>
</div>
</div>
</div>
</header>

<div class="vertical-menu">

<div class="navbar-brand-box">
<a href="/" class="logo logo-dark">
<span class="logo-sm">
<img src="<?=$ManhDev->site('logoWeb');?>" alt="" height="26">
</span>
<span class="logo-lg">
<h3 class="logo-text"><?=$ManhDev->site('nameWeb');?></h3>
</span>
</a>
<a href="/" class="logo logo-light">
<span class="logo-lg">
<h3 class="logo-text"><?=$ManhDev->site('nameWeb');?></h3>
</span>
<span class="logo-sm">
<span class="logo-sm">
<img src="<?=$ManhDev->site('logoWeb');?>" alt="" height="26">
</span>
</span>
</a>
</div>
<button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
<i class="bx bx-menu align-middle"></i>
</button>
<div data-simplebar="init" class="sidebar-menu-scroll">
    <div class="simplebar-wrapper" style="margin: 0px;">
        <div class="simplebar-height-auto-observer-wrapper">
            <div class="simplebar-height-auto-observer"></div></div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;">
                        <div class="simplebar-content" style="padding: 0px;">

<div id="sidebar-menu">
<ul class="metismenu list-unstyled" id="side-menu">
<li class="menu-title" data-key="t-menu">Dashboard</li>
<li class="mm-active"><a href="/" class="active">
<img src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/null/external-home-finance-kiranshastry-lineal-color-kiranshastry.png" alt="" class="side-menu__icon"> Trang
chủ
</a>
</li>
<li><a href="/profile/info">
<img src="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png" alt="" class="side-menu__icon"> Tài khoản của tôi
</a>
</li>

<li><a href="/recharge/banking">
<img src="https://img.icons8.com/external-wanicon-flat-wanicon/64/null/external-banking-online-security-wanicon-flat-wanicon.png" alt="" class="side-menu__icon"> Nạp tiền vào tài khoản
</a>
</li>

<li>
    <a href="/profile/upgrade"><img src="https://img.icons8.com/external-smashingstocks-flat-smashing-stocks/66/null/external-membership-shopping-and-retail-smashingstocks-flat-smashing-stocks.png" alt="" class="side-menu__icon"> Cấp bậc tài khoản</a>
</li>


<?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'card' ")['status'] == "ON") { ?>
<li>
    <a href="/service/card/order"><img src="https://salt.tikicdn.com/ts/tmp/75/62/db/37060092c38af527b818fdcdc659e3eb.png" alt="" class="side-menu__icon"> Gạch Thẻ Cào</a>
</li>

<?php } ?>

<?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'account' ")['status'] == "ON") { ?>
<li>
    <a href="/service/account/order"><img src="https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-buy-cyber-monday-wanicon-flat-wanicon.png" alt="" class="side-menu__icon"> Mua Tài Nguyên</a>
</li>

<?php } ?>


<?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'website' ")['status'] == "ON") { ?>
<li>
    <a href="/service/createWeb/view"><img src="https://img.icons8.com/color/48/000000/globe--v1.png" alt="" class="side-menu__icon"> Tạo Website</a>
</li>

<?php } ?>

<?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'checkscam' ")['status'] == "ON") { ?>
<li>
    <a href="/service/checkscamer/view"><img src="https://i.imgur.com/Y6ThsFU.png" alt="" class="side-menu__icon"> Bảo Hiểm Dịch Vụ</a>
</li>
<?php } ?>  

<!---
<li><a href="https://dichvublack.link">
<img src="https://i.imgur.com/Y6ThsFU.png" alt="" class="side-menu__icon"> Check Scam
</a>
</li>
-->

<span class="dropdown-header mt-4">DỊCH VỤ</span>

<?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'coder' ")['status'] == "ON") { ?>
<li>
    <a href="/service/code/order"><img src="https://img.icons8.com/external-flat-juicy-fish/344/external-code-data-science-flat-flat-juicy-fish.png" alt="" class="side-menu__icon"> Mã nguồn</a>
</li>
<?php } ?> 

<?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'nickgame' ")['status'] == "ON") { ?>
<li><a class="has-arrow" aria-expanded="false">
<img src="https://cdn2.iconfinder.com/data/icons/esport-1/64/Gamer-Joystick-Video_Game-Player-Avatar-512.png" alt="" class="side-menu__icon"> Dịch Vụ Game
</a>
<ul class="sub-menu mm-collapse" aria-expanded="false">
<li>
    <a class="slide-item" href="/service/accGame/order">
        <span class="menu-item">Mua Acc Game</span></a>
</li>

<li>
    <a class="slide-item" href="/service/accGame/list">
        <span class="menu-item">Lịch Sử Mua Acc</span></a>
</li>
</ul>
</li>
<?php } ?>

<?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'mxh' ")['status'] == "ON") { ?>
<li>
    <a class="has-arrow" aria-expanded="false">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/2048px-2021_Facebook_icon.svg.png" alt="" class="side-menu__icon"> Dịch Vụ Facebook</a>
<ul class="sub-menu mm-collapse" aria-expanded="false">
<li>
    <a href="/service/facebook/like-post/buy"><span class="menu-item">Tăng Like Bài Viết</span>
    </a>
</li>

<li>
    <a href="/service/facebook/sub-follow/buy"><span class="menu-item">Tăng Theo Dõi Profile</span></a>
</li>

<li>
    <a href="/service/facebook/like-page/buy">
        <span class="menu-item">Tăng Like/Follow Page</span></a>
</li>

<li>
    <a href="/service/facebook/comment/buy">
        <span class="menu-item">Tăng Bình Luận</span></a></li>

<li>
    <a href="/service/facebook/eye-live/buy">
        <span class="menu-item">Tăng Mắt Live</span></a>
</li>

<li>
    <a href="/service/facebook/view-video/buy">
        <span class="menu-item">Tăng Lượt Xem Video</span></a>
</li>

<li>
    <a href="/service/facebook/share/buy">
        <span class="menu-item">Tăng Chia Sẻ</span></a>
</li>

<li>
    <a href="/service/facebook/member-group/buy">
        <span class="menu-item">Tăng Thành Viên (Group)</span></a>
</li>

<li>
    <a href="/service/facebook/view-story/buy">
        <span class="menu-item">Tăng Lượt Xem Tin</span></a>
</li>

<li>
    <a href="/service/facebook/vip-like/buy">
        <span class="menu-item">Vip Like</span></a>
</li>
</ul>
</li>

<li><a class="has-arrow" aria-expanded="false">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png" alt="" class="side-menu__icon"> Dịch vụ Instagram
</a>
<ul class="sub-menu mm-collapse" aria-expanded="false">
<li>
    <a class="slide-item" href="/service/instagram/like/buy">
        <span class="menu-item">Tăng Like</span></a>
</li>

<li>
    <a class="slide-item" href="/service/instagram/sub-follow/buy">
        <span class="menu-item">Tăng Follow</span></a>
</li>

<li>
    <a class="slide-item" href="/service/instagram/view/buy">
        <span class="menu-item">Tăng View</span></a>
</li>
</ul>
</li>

<li>
    <a class="has-arrow" aria-expanded="false">
<img src="https://sf-tb-sg.ibytedtos.com/obj/eden-sg/uhtyvueh7nulogpoguhm/tiktok-icon2.png" alt="" class="side-menu__icon"> Dịch vụ Tiktok
</a>
<ul class="sub-menu mm-collapse" aria-expanded="false">
<li>
    <a class="slide-item" href="/service/tiktok/like/buy">
        <span class="menu-item">Tăng Tym Video</span></a>
</li>

<li>
    <a class="slide-item" href="/service/tiktok/sub-follow/buy">
        <span class="menu-item">Sub/Follow</span></a>
</li>

<li>
    <a class="slide-item" href="/service/tiktok/view/buy">
        <span class="menu-item">Tăng Lượt Xem Video</span></a>
</li>


<li><a class="slide-item" href="/service/tiktok/eye-live/buy">
    <span class="menu-item">Tăng Mắt Live</span></a>
</li>
</ul>
</li>

<li><a class="has-arrow" aria-expanded="false">
<img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="" class="side-menu__icon"> Dịch vụ Youtube
</a>
<ul class="sub-menu mm-collapse" aria-expanded="false">
<li>
    <a class="slide-item" href="/service/youtube/like/buy">
        <span class="menu-item">Tăng Like Video</span></a>
</li>

<li>
    <a class="slide-item" href="/service/youtube/sub-follow/buy">
        <span class="menu-item">Tăng Follow Kênh</span></a>
</li>
</ul>
</li>

<li>
<a class="has-arrow" aria-expanded="false">
<img src="https://www.freeiconspng.com/thumbs/twitter-icon/twitter-icon-8.png" alt="" class="side-menu__icon"> Dịch vụ Twitter
</a>
<ul class="sub-menu mm-collapse" aria-expanded="false">
<li>
    <a class="slide-item" href="/service/twitter/like/buy">
        <span class="menu-item">Tăng Like Bài Viết</span></a>
</li>

<li>
    <a class="slide-item" href="/service/twitter/sub-follow/buy"><span class="menu-item">Tăng Sub/Follow</span></a>
</li>
</ul>
</li>

<li>
<a class="has-arrow" aria-expanded="false">
<img src="https://www.freepnglogos.com/uploads/shopee-logo/shopee-circle-logo-design-shopping-bag-13.png" alt="" class="side-menu__icon"> Dịch Vụ Shopee
</a>
<ul class="sub-menu mm-collapse" aria-expanded="false">
<li>
    <a class="slide-item" href="/service/shopee/like/buy">
        <span class="menu-item">Tăng Like</span></a>
</li>

<li>
    <a class="slide-item" href="/service/shopee/sub-follow/buy"><span class="menu-item">Tăng Sub/Follow</span></a>
</li>
</ul>
</li>
<?php } ?>

<span class="dropdown-header mt-4">Công Cụ &amp; Hỗ Trợ</span>

<?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'keytool' ")['status'] == "ON") { ?>
<li>
    <a href="/service/key/order"><img src="https://img.icons8.com/arcade/64/null/password.png" alt="" class="side-menu__icon"> Mua Key Tool</a>
</li>

<?php } ?>

<?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'domain' ")['status'] == "ON") { ?>
<li>
    <a href="/service/domain/order"><img src="https://img.icons8.com/external-flaticons-flat-flat-icons/64/000000/external-domain-web-development-flaticons-flat-flat-icons.png" alt="" class="side-menu__icon"> Check Tên Miền</a>
</li>

<?php } ?>

<?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'hosting' ")['status'] == "ON") { ?>
<li>
    <a href="/service/hosting/order"><img src="/images/cPanel-hosting-icon.png" alt="" class="side-menu__icon"> Mua Hosting</a>
</li>

<?php } ?>

<li><a href="/fakebill">
<img src="/langding/fakebill.png" alt="" class="side-menu__icon"> Fake bill
</a>
</li>

<li><a href="/request">
<img src="https://i.imgur.com/26huChb.png" alt="" class="side-menu__icon"> Check request
</a>
</li>

<li><a href="/cam">
<img src="https://i.imgur.com/DRuGRf0.png" alt="" class="side-menu__icon"> Ai là tôi?
</a>
</li>

<li><a href="#" class="" aria-expanded="false">         <!--- muốn thêm dấu + thì nhập "has-arrow" chỗ class --->
<img src="/images/rubik.svg" alt="" class="side-menu__icon"> Công Cụ Miễn Phí
</a>
  
  <ul class="sub-menu mm-collapse" aria-expanded="false">
<li>
    <a class="slide-item" href="/tools/get-uid">
        <span class="menu-item">Lấy UID Facebook</span></a>
        </li>
<li>
    <a class="slide-item" href="/qr-bank">
        <span class="menu-item">Tạo QR bank</span></a>
        </li>
<li>
    <a class="slide-item" href="/fake-sms-iphone">
        <span class="menu-item">Fake SMS iphone</span></a>
        </li>
<li>
    <a class="slide-item" href="/fake-cccd">
        <span class="menu-item">Fake CCCD</span></a>
        </li>
<li>
    <a class="slide-item" href="/php-tool">
        <span class="menu-item">En/Decode PHP</span></a>
        </li>
<li>
    <a class="slide-item" href="/toolweb">
        <span class="menu-item">Spam SMS</span></a>
        </li>        
<li>
    <a class="slide-item" href="/tools/get-2fa">
        <span class="menu-item">Lấy 2FA</a>
        </li>
<!--<li>
    <a class="slide-item" href="/tools/domain/check-whois">
        <span class="menu-item">Whois Tên Miền</a>
</li> -->
</ul>
</li>

<li><a href="#" class="" aria-expanded="false">         <!--- muốn thêm dấu + thì nhập "has-arrow" chỗ class --->
<img src="https://cdn-icons-png.flaticon.com/128/10439/10439779.png" alt="" class="side-menu__icon"> Hỗ Trợ 24/7
</a>
  
  <ul class="sub-menu mm-collapse" aria-expanded="false">
<li>
    <a class="slide-item" href="https://facebook.com/100041154973838">
        <span class="menu-item">Facebook</span></a>
</li>

<li>
    <a class="slide-item" href="https://zalo.me/0789396963">
        <span class="menu-item">Zalo</span></a>
</li>
</ul>
</li>
  
<ul class="sub-menu mm-collapse" aria-expanded="false">
<?php
$suppost = $ManhDev->get_list("SELECT * FROM `support` ");
foreach($suppost as $sp) { ?>
<li>
    <a class="slide-item" href="<?=$sp['url'];?>" target="_bank">
        <span class="menu-item"><?=$sp['title'];?></span></a>
</li>

<?php } ?>
</ul>
</li>

<span class="dropdown-header mt-4">Documentation</span>

<li>
    <a href="https://documenter.getpostman.com/view/20654134/VV4tSxa8#9b414183-c183-4a64-b9c5-0374d2e548c2" target="_bank"><img src="https://cdn-icons-png.flaticon.com/512/1485/1485231.png" alt="" class="side-menu__icon"> Tài Liệu Api</a>
</li>

<?php if($ManhDev->users('level') == '3') { ?>
<li>
    <a href="/admin/home"><img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/admin-panel-4-687541.png" alt="" class="side-menu__icon"> Quản Trị Viên</a>
</li>
<?php } ?>
</ul>
</div>
</div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 315px; transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
</div>
<div class="main-content">
<div class="page-content">
<div class="container-fluid">