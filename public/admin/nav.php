<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Trang Chủ</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://zalo.me/0528139892" class="nav-link">Liên Hệ Kỹ Thuật</a>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <center><a href="/" class="brand-link">
      <span class="brand-text font-weight-light text-center">Trang Quản Trị</span>
    </a></center>

    <!-- Sidebar -->
    <div class="sidebar">
    
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">  
        <li class="nav-item">
            <a href="/admin/home" class="nav-link">
              <img src="https://khinenthuanhung.vn/wp-content/uploads/2018/02/Home-icon.png" width="25">
              <p>Trang Chủ ADMIN</p>
            </a>
         
          </li>
          
          <li class="nav-item">
            <a href="/admin/member" class="nav-link">
              <img src="https://d338t8kmirgyke.cloudfront.net/icons/icon_pngs/000/017/951/original/group_6576064.png" width="25">
              <p>Quản Lí Thành Viên</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="/admin/PublicMoney" class="nav-link">
              <img src="https://image.winudf.com/v2/image1/Y29tLm1lbWJlcnNncmFtLnBsYXlfaWNvbl8xNTQ4OTUwNTcxXzAwOQ/icon.png?w=&fakeurl=1" width="25">
              <p>Cộng Tiền User</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="/admin/card" class="nav-link">
              <img src="https://cdn.iconscout.com/icon/free/png-256/credit-card-955-1115056.png" width="25">
              <p>Quản Lí Nạp Thẻ</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="/admin/bank" class="nav-link">
              <img src="https://cdn.iconscout.com/icon/free/png-256/online-banking-2076381-1756172.png" width="25">
              <p>Quản Lý Bank</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="/admin/AutoBank" class="nav-link">
              <img src="https://img.icons8.com/color/48/000000/auto-sms.png" width="25">
              <p>Setting Auto Bank</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="/admin/notification" class="nav-link">
              <img src="https://cdn-icons-png.flaticon.com/512/1827/1827272.png" width="25">
              <p>Thông Báo Website</p>
            </a>
          </li>
          
         <li class="nav-item">
            <a href="/admin/function" class="nav-link">
              <img src="https://cdn-icons-png.flaticon.com/512/994/994809.png" width="25">
              <p>Danh Sách Chức Năng</p>
            </a>
          </li>
          <li class="nav-header">Dịch Vụ Website</li>
          <?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'account' ")['status'] == "ON") { ?>
         <li class="nav-item">
            <a href="/admin/account" class="nav-link">
              <img src="https://img.icons8.com/fluency/48/000000/accounting.png" width="25">
              <p>Bán Tài Khoản</p>
            </a>
          </li>
         <?php } ?>
         
         <?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'card' ")['status'] == "ON") { ?>
         <li class="nav-item">
            <a href="/admin/upCard" class="nav-link">
              <img src="https://img.icons8.com/color/48/000000/card-exchange--v1.png" width="25">
              <p>Gạch Thẻ Cào</p>
            </a>
          </li>
         <?php } ?>
         
         <?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'hosting' ")['status'] == "ON") { ?>
         <li class="nav-item">
            <a href="/admin/hosting" class="nav-link">
              <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/FA5252/external-database-computer-programming-flaticons-lineal-color-flat-icons.png" width="25">
              <p>Danh Sách Hosting</p>
            </a>
          </li>
         <?php } ?>
         
         <?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'coder' ")['status'] == "ON") { ?>
         <li class="nav-item">
            <a href="/admin/coder" class="nav-link">
              <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/000000/external-code-agile-flaticons-lineal-color-flat-icons-2.png" width="25">
              <p>Danh Sách Code</p>
            </a>
          </li>
         <?php } ?>
         
         <?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'website' ")['status'] == "ON") { ?>
         <li class="nav-item">
            <a href="/admin/createWeb" class="nav-link">
              <img src="https://img.icons8.com/color/48/000000/globe--v1.png" width="25">
              <p>Dịch Vụ Tạo Web</p>
            </a>
          </li>
         <?php } ?>
         
         <?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'keytool' ")['status'] == "ON") { ?>
         <li class="nav-item">
            <a href="/admin/keytool" class="nav-link">
              <img src="https://img.icons8.com/external-xnimrodx-blue-xnimrodx/64/000000/external-key-software-and-application-xnimrodx-blue-xnimrodx.png" width="25">
              <p>Danh Sách Key Tool</p>
            </a>
          </li>
         <?php } ?>
         
         <?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'nickgame' ")['status'] == "ON") { ?>
         <li class="nav-item">
            <a href="/admin/listGame" class="nav-link">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Video-Game-Controller-Icon-IDV-green.svg/768px-Video-Game-Controller-Icon-IDV-green.svg.png" width="25">
              <p>Dịch Vụ Acc Game</p>
            </a>
          </li>
         <?php } ?>
         
         <?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'mxh' ")['status'] == "ON") { ?>
         <li class="nav-item">
            <a href="/admin/mxh" class="nav-link">
              <img src="https://cdn-icons-png.flaticon.com/512/6400/6400284.png" width="25">
              <p>Danh Sách DV MXH</p>
            </a>
          </li>
         <?php } ?>
         
         <?php if($ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'checkscam' ")['status'] == "ON") { ?>
         <li class="nav-item">
            <a href="/admin/checkscam" class="nav-link">
              <img src="https://i.imgur.com/BHy3704.png" width="25">
              <p>Danh Sách Hồ Sơ</p>
            </a>
          </li>
         <?php } ?>
         
         <li class="nav-item">
            <a href="/admin/setAdmin" class="nav-link">
              <img src="https://img.icons8.com/fluency/48/000000/user-male-circle.png" width="25">
              <p>Thông Tin Quản Trị</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="/admin/addNotification" class="nav-link">
              <img src="https://img.icons8.com/office/16/FA5252/customer-support.png" width="25">
              <p>Thêm Liên Hệ</p>
            </a>
          </li>
         
         <li class="nav-item">
            <a href="/admin/setting" class="nav-link">
              <img src="https://img.icons8.com/color-glass/48/000000/settings-3.png" width="25">
              <p>Cài Đặt Website</p>
            </a>
          </li>
        </ul>
      </nav>
    
    </div>
   
  </aside>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?=$url_site_name;?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   