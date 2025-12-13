<?php require('config.php'); ?>
<!DOCTYPE html>
<html lang="vi" class="">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="Description" content="<?=$ManhDev->site('motaWeb');?>">
<meta name="Author" content="Mạnh Dev | Zalo: 0528139892">
<meta name="Keywords" content="<?=$ManhDev->site('tukhoaWeb');?>">
<link rel="icon" href="<?=$ManhDev->site('faviWeb');?>" type="image/x-icon">
<meta name="X-CSRF-TOKEN" content="<?=random('qwertyuiopasdfghjklzxcvbnm1234567890', 20);?>">

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="/assets/js/function.js?v=<?=time();?>" aria-hidden="true"></script>
<link href="/assets/css/manhdev.css?<?=time();?>" rel="stylesheet">
<link href="/plugins/toastr/toastr.min.css?v=96" rel="stylesheet" type="text/css">
<link href="/assets/css/jsvectormap.min.css?<?=time();?>" rel="stylesheet" type="text/css">
<link href="/assets/css/bootstrap.min.css?<?=time();?>" id="bootstrap-style" rel="stylesheet" type="text/css">
<link href="/assets/css/icons.min.css?<?=time();?>" rel="stylesheet" type="text/css">
<link href="/assets/css/app.min.css?<?=time();?>" id="app-style" rel="stylesheet" type="text/css">
<link href="/assets/css/app.css?t=<?=time();?>" rel="stylesheet">
<link rel="stylesheet" href="ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.14/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.14/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.10/dist/clipboard.min.js"></script>
<style>
.btn-block {
    width: 100%;
}
    @media  only screen and (min-width: 768px) {
        button.vertical-menu-btn{
            display: none;
        }
    }
    h3.logo-text {
        margin-top: 25px;
        text-align: center;
    }
    img.side-menu__icon {
    margin-right: 15px;
}
tr.bg-primary {
    color: #fff;
}
.alert h1, .alert h2, .alert h3, .alert h4, .alert h5, .alert h6{
    color: #fff;
}
</style>
<?php if($ManhDev->site('heartWeb') == "1") { ?>
      <script type='text/javascript'>
          !function (e, t, a) { function n() { c( ".heart{width: 10px;height: 10px;position: fixed;background: #f00;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);}.heart:after,.heart:before{content: '';width: inherit;height: inherit;background: inherit;border-radius: 50%;-webkit-border-radius: 50%;-moz-border-radius: 50%;position: fixed;}.heart:after{top: -5px;}.heart:before{left: -5px;}" ), o(), r() } function r() { for (var e = 0; e < d.length; e++) d[e].alpha <= 0 ? (t.body.removeChild(d[e].el), d.splice(e, 1)) : (d[e].y--, d[e].scale += .004, d[e].alpha -= .013, d[e].el.style.cssText = "left:" + d[e].x + "px;top:" + d[e].y + "px;opacity:" + d[e].alpha + ";transform:scale(" + d[e].scale + "," + d[e].scale + ") rotate(45deg);background:" + d[e].color + ";z-index:99999"); requestAnimationFrame(r) } function o() { var t = "function" == typeof e.onclick && e.onclick; e.onclick = function (e) { t && t(), i(e) } } function i(e) { var a = t.createElement("div"); a.className = "heart", d.push({ el: a, x: e.clientX - 5, y: e.clientY - 5, scale: 1, alpha: 1, color: s() }), t.body.appendChild(a) } function c(e) { var a = t.createElement("style"); a.type = "text/css"; try { a.appendChild(t.createTextNode(e)) } catch (t) { a.styleSheet.cssText = e } t.getElementsByTagName("head")[0].appendChild(a) } function s() { return "rgb(" + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + ")" } var d = []; e.requestAnimationFrame = function () { return e.requestAnimationFrame || e.webkitRequestAnimationFrame || e.mozRequestAnimationFrame || e.oRequestAnimationFrame || e.msRequestAnimationFrame || function (e) { setTimeout(e, 1e3 / 60) } }(), n() }(window, document); </script>
      <?php } ?>
<script>
        const profile = {
            "id": <?=$ManhDev->users('id');?>,
            "fullname": "<?=$ManhDev->users('name');?>",
            "email": "<?=$ManhDev->users('email');?>",
            "username": "<?=$ManhDev->users('username');?>",
            "coin": <?=$ManhDev->users('money');?>,
            "blocked": <?=$ManhDev->users('bannd');?>,
            "detail_blocked": "<?=status_user($ManhDev->users('bannd'));?>",
            "api_token": "<?=$ManhDev->users('apitoken');?>",
            "created_at": "<?=$ManhDev->users('time');?>",
            "updated_at": "<?=$ManhDev->users('lastdate');?>",
            "avatar": "https://ui-avatars.com/api/?background=random&name=<?=$ManhDev->users('name');?>",
            "isAdmin": false,
            "isAgency": false,
            "position": "Khách Hàng",
            "levelMember": "<?=level($ManhDev->users('level'));?>",
            "pepper": "<?=$ManhDev->users('tong_nap');?>",
            "statusAccount": "<?=status_user($ManhDev->users('bannd'));?>",
        };
        const setting = {
            "website": "<?=$_SERVER['SERVER_NAME'];?>",
            "url_website": "https://<?=$_SERVER['SERVER_NAME'];?>",
            "title": "[ <?=$ManhDev->site('nameWeb');?> ] Hệ thống dịch vụ mạng xã hội số 1 toàn cầu",
            "description": "<?=$ManhDev->site('motaWeb');?>",
            "keywords": "<?=$ManhDev->site('tukhoaWeb');?>",
            "website": "<?=$_SERVER['SERVER_NAME'];?>",
            "anti_ddos": "on",
            
        };
    </script>
    
<style type="text/css" id="s./node_modules/css-loader/index.js!./node_modules/sass-loader/lib/loader.js!./package/src/animation.scss-0">
/**
 * @license
 * Copyright Akveo. All Rights Reserved.
 * Licensed under the MIT License. See License.txt in the project root for license information.
 */
.eva-animation {
  animation-duration: 1s;
  animation-fill-mode: both; }

.eva-infinite {
  animation-iteration-count: infinite; }

.eva-icon-shake {
  animation-name: eva-shake; }

.eva-icon-zoom {
  animation-name: eva-zoomIn; }

.eva-icon-pulse {
  animation-name: eva-pulse; }

.eva-icon-flip {
  animation-name: eva-flipInY; }

.eva-hover {
  display: inline-block; }

.eva-hover:hover .eva-icon-hover-shake, .eva-parent-hover:hover .eva-icon-hover-shake {
  animation-name: eva-shake; }

.eva-hover:hover .eva-icon-hover-zoom, .eva-parent-hover:hover .eva-icon-hover-zoom {
  animation-name: eva-zoomIn; }

.eva-hover:hover .eva-icon-hover-pulse, .eva-parent-hover:hover .eva-icon-hover-pulse {
  animation-name: eva-pulse; }

.eva-hover:hover .eva-icon-hover-flip, .eva-parent-hover:hover .eva-icon-hover-flip {
  animation-name: eva-flipInY; }

@keyframes eva-flipInY {
  from {
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    animation-timing-function: ease-in;
    opacity: 0; }
  40% {
    transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    animation-timing-function: ease-in; }
  60% {
    transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    opacity: 1; }
  80% {
    transform: perspective(400px) rotate3d(0, 1, 0, -5deg); }
  to {
    transform: perspective(400px); } }

@keyframes eva-shake {
  from,
  to {
    transform: translate3d(0, 0, 0); }
  10%,
  30%,
  50%,
  70%,
  90% {
    transform: translate3d(-3px, 0, 0); }
  20%,
  40%,
  60%,
  80% {
    transform: translate3d(3px, 0, 0); } }

@keyframes eva-pulse {
  from {
    transform: scale3d(1, 1, 1); }
  50% {
    transform: scale3d(1.2, 1.2, 1.2); }
  to {
    transform: scale3d(1, 1, 1); } }

@keyframes eva-zoomIn {
  from {
    opacity: 1;
    transform: scale3d(0.5, 0.5, 0.5); }
  50% {
    opacity: 1; } }
</style>
<style>
.--savior-overlay-transform-reset {
  transform: none !important;
}
.--savior-overlay-z-index-top {
  z-index: 2147483643 !important;
}
.--savior-overlay-position-relative {
  position: relative;
}
.--savior-overlay-overflow-x-visible {
  overflow-x: visible !important;
}
.--savior-overlay-overflow-y-visible {
  overflow-y: visible !important;
}
.--savior-overlay-z-index-reset {
  z-index: auto !important;
}
.--savior-overlay-display-none {
  display: none !important;
}
.--savior-overlay-clearfix {
  clear: both;
}
.--savior-overlay-reset-filter {
  filter: none !important;
  backdrop-filter: none !important;
}
.--savior-tooltip-host {
  z-index: 9999;
  position: absolute;
  top: 0;
}
/*Override css styles for Twitch.tv*/
main.--savior-overlay-z-index-reset {
  z-index: auto !important;
}
main.--savior-overlay-z-index-top {
  z-index: auto !important;
}
main.--savior-overlay-z-index-top .channel-root__player-container + div,
main.--savior-overlay-z-index-top .video-player-hosting-ui__container + div {
  opacity: 0.1;
}
/*Dirty hack for facebook big video page e.g: https://www.facebook.com/abc/videos/...*/
.--savior-backdrop {
  position: fixed !important;
  z-index: 2147483642 !important;
  top: 0;
  left: 0;
  height: 100vh;
  width: 100vw;
  background-color: rgba(0,0,0,0.9);
}
.--savior-overlay-twitter-video-player {
  position: fixed;
  width: 80%;
  height: 80%;
  top: 10%;
  left: 10%;
}
/* Fix conflict css with zingmp3 */
.zm-video-modal.--savior-overlay-z-index-reset {
  position: absolute;
}
/* Dirty hack for xvideos99 */
#page #main.--savior-overlay-z-index-reset {
  z-index: auto !important;
}
/* Overlay for ok.ru */
#vp_w.--savior-overlay-z-index-reset.media-layer.media-layer__video {
  position: absolute;
  overflow-y: hidden;
}
/* Fix missing controller for tv.naver.com */
.--savior-overlay-z-index-top.rmc_controller,
.--savior-overlay-z-index-top.rmc_setting_intro,
.--savior-overlay-z-index-top.rmc_highlight,
.--savior-overlay-z-index-top.rmc_control_settings {
  z-index: 2147483644 !important;
}
/* Dirty hack for douyi.com */
.swiper-wrapper.--savior-overlay-z-index-reset .swiper-slide:not(.swiper-slide-active),
.swiper-wrapper.--savior-overlay-transform-reset .swiper-slide:not(.swiper-slide-active) {
  display: none;
}
.videoWrap + div > div {
  pointer-events: unset;
}
/* Dirty hack for fpt.ai */
.mfp-wrap.--savior-overlay-z-index-top {
  position: relative;
}
.mfp-wrap.--savior-overlay-z-index-top .mfp-close {
  display: none;
}
.mfp-wrap.--savior-overlay-z-index-top .mfp-content {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
section.--savior-overlay-z-index-reset>main[role="main"].--savior-overlay-z-index-reset + nav {
  z-index: -1 !important;
}
section.--savior-overlay-z-index-reset>main[role="main"].--savior-overlay-z-index-reset section.--savior-overlay-z-index-reset div.--savior-overlay-z-index-reset ~ div {
  position: relative;
}
@-moz-keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@-webkit-keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@-o-keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
</style>
</head>


<body class="" data-sidebar-size="lg" data-layout-mode="light" data-topbar="light" data-sidebar="light">
<div id="layout-wrapper">