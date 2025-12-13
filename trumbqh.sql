-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th1 23, 2024 lúc 12:07 AM
-- Phiên bản máy phục vụ: 10.6.15-MariaDB-cll-lve
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dotugsxg_trumbqhiu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `trading` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `id_fb` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `name` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ctk` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `stk` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `toi_thieu` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `bank`
--

INSERT INTO `bank` (`id`, `img`, `name`, `ctk`, `stk`, `toi_thieu`) VALUES
(4, 'https://play-lh.googleusercontent.com/g4opzz09xGJxjSJjkP_TABKffpRu7i4xJPXLerYMbyXUWjDB6cTGy07ebyth91ZBQYs', 'Mb Bank', 'BUI QUANG HIEU', '999988882002', '10000'),
(6, 'https://upload.wikimedia.org/wikipedia/vi/f/fe/MoMo_Logo.png', 'Momo', 'BUI QUANG HIEU', '0789396963', '10000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `code` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `taskId` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `seri` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `pin` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `loaithe` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `menhgia` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `thucnhan` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `note` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `callback` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `cards`
--

INSERT INTO `cards` (`id`, `code`, `taskId`, `seri`, `pin`, `loaithe`, `menhgia`, `thucnhan`, `username`, `status`, `note`, `callback`, `time`) VALUES
(1, '69527', '579346', '14780523698753', '258096321478509', 'Viettel', '10000', '8000', 'dienvo1', 'thatbai', 'Nạp Thẻ Thất Bại', NULL, '21:22 22-08-2023'),
(2, '976433', '579347', '14780523698742', '258096314785933', 'Viettel', '10000', '8000', 'dienvo1', 'thatbai', 'Nạp Thẻ Thất Bại', NULL, '21:34 22-08-2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categoriesGame`
--

CREATE TABLE `categoriesGame` (
  `id` int(11) NOT NULL,
  `code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `giamgia` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `categoriesGame`
--

INSERT INTO `categoriesGame` (`id`, `code`, `img`, `title`, `giamgia`) VALUES
(1, 'nick-free-fire-gia-re', 'https://cdn.upanh.info/storage/upload/images/MUA-NICK-FF-SIEU-RE.gif?t=1661178731', 'Nick Free Fire Giá Rẻ', 'on');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `money` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `code`, `img`, `title`, `note`, `money`, `status`) VALUES
(1, 'clone-viet-name-vie-2fa-avt-0---5FR-goi-y-ban-be-viet-very-hotmail', 'https://i.imgur.com/C4PA73D.png', 'Clone IP Viẹt, Name Việt, 2FA+AVT , 0-5FR, 50% Gợi ý Bạn Bè Việt, Very HOTMAIL', 'Dịnh Dạng: ID|PASS|@FA|TOKEN', '1300', 'on'),
(3, 'via-ip-viet-name-viet-2faavt-tren-1k-ban-be', 'https://i.imgur.com/C4PA73D.png', 'TOKEN FB DẠNG EAAD6V7 (NEW, bảo hành 1-1 khi mua bị die)', 'Dạng xuất: token tỉ lệ block 1%', '300000', 'on');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `avatar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `chat`
--

INSERT INTO `chat` (`id`, `avatar`, `username`, `note`, `time`) VALUES
(258, 'https://ui-avatars.com/api/?background=random&name=admin', 'admin', 'hhihi', '02:31 03-09-2023'),
(259, 'https://ui-avatars.com/api/?background=random&name=letrongtruyen', 'letrongtruyen', 'um', '10:10 05-10-2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `checkscam_uytin`
--

CREATE TABLE `checkscam_uytin` (
  `id` int(11) NOT NULL,
  `code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `id_fb` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `name` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `phone` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `website` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `money` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `dich_vu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `mo_ta` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `checkscam_uytin`
--

INSERT INTO `checkscam_uytin` (`id`, `code`, `id_fb`, `name`, `phone`, `website`, `money`, `dich_vu`, `mo_ta`) VALUES
(2, 'bui-quang-hieu', '100041154973838', 'Bùi Quang Hiệu', '0987654321', 'DICHVUBLACK.ID.VN', '99999999', 'VIP', 'OK ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cron`
--

CREATE TABLE `cron` (
  `id` int(11) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `phone` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `tranId` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `partnerId` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `partnerName` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `partnerCode` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `amount` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `demo_img_code`
--

CREATE TABLE `demo_img_code` (
  `id` int(11) NOT NULL,
  `code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `demo_img_code`
--

INSERT INTO `demo_img_code` (`id`, `code`, `img`) VALUES
(2, 'ma-nguon-clone-v6-ban-via-random-mail-netflix--co-nap-atuo-momo-atm-card-co-tinh-nang-quet-ma-qr', '/anh/CODE_5181.png'),
(3, 'code-web-ban-nhieu-loai-acc-game', '/anh/CODE_5135.png'),
(4, 'code-web-ban-nhieu-loai-acc-game', '/anh/CODE_9469.png'),
(5, 'code-giong-subgiare-co-nap-tu-dong-site-con-api-don-qua-subgiare-bao-vip', '/anh/CODE_5590.png'),
(6, 'code-giong-subgiare-co-nap-tu-dong-site-con-api-don-qua-subgiare-bao-vip', '/anh/CODE_1907.png'),
(7, 'code-shop-ban-acc-game-ban-den-ban-acc-lien-quan-lien-minh-fifa-free-fire--co-nap-the-momo-bank-tu-dong', '/anh/CODE_7668.png'),
(8, 'code-web-giong-subgiarevn-100--ban-moi-', '/anh/CODE_9730.png'),
(9, 'code-ban-xu-ttc--tds-co-auto-nap--auto-momo', '/anh/CODE_2062.png'),
(10, 'code-dich-vu-fb--vip-like-sieu-ngon---ban-dep', '/anh/CODE_3359.png'),
(11, 'code-bot-tuong-tac', '/anh/CODE_2078.png'),
(12, 'code-dich-vu-ban-mail', '/anh/CODE_6453.png'),
(13, 'code-trao-doi-sub', '/anh/CODE_1591.png'),
(14, 'web-dich-vu-facebook-giong-subgiarevn-100', '/anh/CODE_2656.png'),
(15, 'web-gach-the-co-auto-rut-momo-api-doi-card-co-the-cho-web-khac-dau-api', '/anh/CODE_3952.png'),
(16, 'code-gach-the-cao-ho-tro-3-cap-bac-nap---rut-tien-tu-dong-mua-the-nap-dien-thoai-auto', '/anh/CODE_4874.png'),
(17, 'code-gach-the-cao-ho-tro-3-cap-bac-nap---rut-tien-tu-dong-mua-the-nap-dien-thoai-auto', '/anh/CODE_3851.png'),
(18, 'code-web-phim-sieu-vip', '/anh/CODE_4399.png'),
(19, 'code-web-phim-sieu-vip', '/anh/CODE_3259.png'),
(20, 'code-web-phim-giong-phimmoi', '/anh/CODE_5267.png'),
(21, 'code-checkscam-ban-dep-co-tick', '/anh/CODE_2413.png'),
(22, 'web-check-scam-ban-co-tick-xanh-giao-dien-admin-de-dung', '/anh/CODE_3684.png'),
(23, 'shop-ban-acc-free-fire-lien-quan-dep', '/anh/CODE_6212.png'),
(24, 'web-ban-acc-lien-quan-free-fire-pubg-fo4-dep', '/anh/CODE_7252.png'),
(25, 'code-cho-thue-api-momo-tpbank-mbbank-acb-vietcombank-thesieure', '/anh/CODE_7478.png'),
(26, 'web-scam-acc-ff-dep', '/anh/CODE_2125.png'),
(27, 'code-ban-source-code-ban-theme-giao-dien-2', '/anh/CODE_9099.png'),
(28, 'code-web-tool-mmo-nhiu-chuc-nang', '/anh/CODE_4095.png'),
(29, 'template-blogger-ban-theme--code--co-nut-download', '/anh/CODE_9585.png'),
(30, 'code-web-key-v3', '/anh/CODE_6327.png'),
(31, 'code-web-cho-thue-api-momo-auto-nap-sieu-xin', '/anh/CODE_4144.png'),
(32, 'code-web-dvfb-dep-api-nhiu-nguon--traodoisub-subgiare-hacklike17--fix-all-loi', '/anh/CODE_2881.png'),
(33, 'code-web-gioi-thieu-ban-than-sieu-dep', '/anh/CODE_1947.png'),
(34, 'code-web-card-v2-sieu-xinh-auto-nap-bank-mua-the-doi-the-auto-sieu-xin', '/anh/CODE_4075.png'),
(35, 'code-web-card-v2-sieu-xinh-auto-nap-bank-mua-the-doi-the-auto-sieu-xin', '/anh/CODE_2391.png'),
(36, 'code-web-ban-source-code-dep-auto-card', '/anh/CODE_1160.png'),
(37, 'code-web-ban-source-code-dep-auto-card', '/anh/CODE_6725.png'),
(38, 'web-dvfb-sieu-ban-dep-api-nhieu-nguon-auto-nap-bank-sieu-vip', '/anh/CODE_8714.png'),
(39, 'web-dvfb-sieu-ban-dep-api-nhieu-nguon-auto-nap-bank-sieu-vip', '/anh/CODE_2949.png'),
(40, 'share-code-web-ban-key-tai-khoan-dvmxh-hosting-tao-website', '/anh/CODE_6163.png'),
(41, 'share-code-web-ban-key-tai-khoan-dvmxh-hosting-tao-website', '/anh/CODE_5876.png'),
(42, 'share-code-ban-ma-nguon-tao-shop-thue-otp-cuc-ngon', '/anh/CODE_3821.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `domain`
--

CREATE TABLE `domain` (
  `id` int(11) NOT NULL,
  `activite` varchar(255) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `trangthai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `domain`
--

INSERT INTO `domain` (`id`, `activite`, `user`, `name`, `trangthai`) VALUES
(1, 'thegioisub.net', 'letrongtruyen', 'Le Trong Truyen', 'SUCCESS');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ds_sitecon`
--

CREATE TABLE `ds_sitecon` (
  `id` int(11) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `site_con` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history_accGame`
--

CREATE TABLE `history_accGame` (
  `id` int(11) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `idGame` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `money` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `trading` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `noteAcc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history_Code`
--

CREATE TABLE `history_Code` (
  `id` int(11) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `money` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `trading` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history_createWeb`
--

CREATE TABLE `history_createWeb` (
  `id` int(11) NOT NULL,
  `trading` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `money` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `domain` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `timemua` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `note_giahan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `end` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history_Dvmxh`
--

CREATE TABLE `history_Dvmxh` (
  `id` int(11) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `trading` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `type_service` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `type_server` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `uid` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `sever` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `amount` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `money` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `cmt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `type` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history_Host`
--

CREATE TABLE `history_Host` (
  `id` int(11) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `goi` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `login` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `taikhoan` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `matkhau` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ngaymua` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ngayhet` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `domain` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `money` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history_Momo`
--

CREATE TABLE `history_Momo` (
  `id` int(11) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `transactionId` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `amount` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `sender` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `senderId` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history_spam_sms`
--

CREATE TABLE `history_spam_sms` (
  `id` int(11) NOT NULL,
  `username` text DEFAULT NULL,
  `magd` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `id_server` varchar(255) DEFAULT NULL,
  `time` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `key_log`
--

CREATE TABLE `key_log` (
  `id` int(11) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `name` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `key_code` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `amount` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `start` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `end` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `listGame`
--

CREATE TABLE `listGame` (
  `id` int(11) NOT NULL,
  `code_categories` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `idGame` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `giagoc` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `giagiam` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `noteAccount` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `imgDemo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `trading` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_Host`
--

CREATE TABLE `list_Host` (
  `id` int(11) NOT NULL,
  `code` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `title` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `capacity` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `money` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `list_Host`
--

INSERT INTO `list_Host` (`id`, `code`, `title`, `capacity`, `money`, `note`) VALUES
(1, 'goi-hong-kong-1', 'Gói HongKong 1', '300', '10000', '<li>Băng thông: vô hạn <i class=\'text-success fa fa-check-circle\'></i></li>\r\n                <li class=\"text-primary\">Free chứng chỉ SSL <i class=\'text-success fa fa-check-circle\'></i></li>\r\n                <li>Miền khác: vô hạn <i class=\'text-success fa fa-check-circle\'></i></li>\r\n                <li>Miền bí danh: vô hạn <i class=\'text-success fa fa-check-circle\'></i></li>\r\n                <li>Các thông số khác: vô hạn <i class=\'text-success fa fa-check-circle\'></i></li>\r\n                <li>Backup: không có <i class=\'text-danger fa fa-times-circle\'></i></li>'),
(2, 'goi-hongkong-2', 'Gói HongKong 2', '1000', '20000', '<li>Băng thông: vô hạn <i class=\'text-success fa fa-check-circle\'></i></li>\n                <li class=\"text-primary\">Free chứng chỉ SSL <i class=\'text-success fa fa-check-circle\'></i></li>\n                <li>Miền khác: vô hạn <i class=\'text-success fa fa-check-circle\'></i></li>\n                <li>Miền bí danh: vô hạn <i class=\'text-success fa fa-check-circle\'></i></li>\n                <li>Các thông số khác: vô hạn <i class=\'text-success fa fa-check-circle\'></i></li>\n                <li>Backup: không có <i class=\'text-danger fa fa-times-circle\'></i></li>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `log_site`
--

CREATE TABLE `log_site` (
  `id` int(11) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `type` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ip` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `useragent` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `log_site`
--

INSERT INTO `log_site` (`id`, `username`, `type`, `note`, `ip`, `useragent`, `time`) VALUES
(910, 'Admin', 'login', 'Đăng Nhập Vào Hệ Thống', '2405:4803:c675:e800:e85f:9bab:edb8:44c7', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1', '22:50 20-01-2024');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `momo_auto`
--

CREATE TABLE `momo_auto` (
  `id` int(11) NOT NULL,
  `apikey` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `phone` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `momo_auto`
--

INSERT INTO `momo_auto` (`id`, `apikey`, `phone`) VALUES
(1, 'apikeymomo', '0333293290');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `notification`
--

INSERT INTO `notification` (`id`, `note`, `time`) VALUES
(4, 'Chào Mừng Bạn Đến Hệ Thống Seeding Dịch Vụ Mạng Xã Hội Hàng Đầu Việt Nam : DICHVUBLACK.ID.VN', '23-01-2024');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `key_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `options`
--

INSERT INTO `options` (`id`, `key_code`, `value`, `status`) VALUES
(1, 'note_modal', 'Chào Mừng Bạn Đến Hệ Thống Seeding Dịch Vụ Mạng Xã Hội Hàng Đầu Việt Nam : DICHVUBLACK.ID.VN', 'ON'),
(2, 'account', 'Mua Bán Tài Khoản', 'ON'),
(3, 'card', 'Gạch Thẻ Cào', 'ON'),
(4, 'domain', 'Check Domain', 'ON'),
(5, 'hosting', 'Bán Hosting', 'ON'),
(6, 'coder', 'Bán Code Website', 'ON'),
(7, 'keytool', 'Bán Key Tool', 'ON'),
(8, 'mxh', 'Dịch Vụ Mạng Xã Hội', 'ON'),
(9, 'checkscam', 'Checkscam', 'ON'),
(10, 'api_key_card', 'bc8a2a87df98b16da5b65f8fd069f2a6', 'ON'),
(11, 'api_key_host', '1b787e9614225a7caaf76e23ef5172f71d6faf78f0a5253893e9dd27c', 'ON'),
(12, 'nd_bank', 'NAPTIEN ', 'ON'),
(13, 'money_key', '500', 'ON'),
(14, 'website', 'Tạo Website', 'ON'),
(15, 'token_subgiare', '00ff15ce-5a35-4001-b1db-4a7078ac1ee0', 'ON\r\n'),
(16, 'nickgame', 'Bán Tài Khoản Game', 'ON'),
(17, 'api_key_momo', 'OQVGPcZrpeFCzLHxquKDTlEaNMwWXJmsnYUbBgvhfRdtjyiSAIok', 'ON'),
(18, 'api_key_mbbank', 'CtqwJNseRVYoWiLmgMBlHjnOkdvErTQZDXUcKaGpzfuPAhFIyxbS', 'ON'),
(19, 'api_key_vcb', '8A3164E3-955D-E909-2025-70A5528B9A58', 'ON'),
(20, 'stk_mbbank', '6768682222', 'ON\r\n'),
(21, 'captcha', '6LeBCF0iAAAAAAtWralaChoUb4atrP4ESqV2qDYW', 'ON'),
(23, 'order_auto', 'Dịch Vụ MXH Auto?', 'ON'),
(24, 'id_tele', '', 'ON'),
(25, 'token_tele', '', 'ON'),
(26, 'api_key_acb', '444', 'ON'),
(27, 'stk_acb', '555', 'ON\r\n'),
(28, 'pass_acb', '666', 'ON');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `title` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `amount` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `money` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `trading` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `server`
--

CREATE TABLE `server` (
  `id` int(11) NOT NULL,
  `code_service` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `code_type` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `sever` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `money` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `max_buff` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `display` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `server`
--

INSERT INTO `server` (`id`, `code_service`, `code_type`, `title`, `sever`, `money`, `status`, `max_buff`, `display`) VALUES
(6, 'like-post', 'facebook', 'Like việt rẻ đang rất chậm', 'sv2', '2', 'on', '1500000', ' <b class=\"text-info\">(nên dùng ổn định)</b>'),
(9, 'like-post', 'facebook', 'Like Việt, hỗ trợ cảm xúc chậm', 'sv3', '7', 'on', '10000', ''),
(10, 'sub-follow', 'facebook', 'Follow dạng mới, max 3m/id Độc quyền (Max Tốc Nên Dùng Bá nhất)', 'sv1', '10', 'on', '99999999', ' <b class=\"text-warning\">(New)</b>'),
(11, 'sub-follow', 'facebook', 'ncc', '10', '30', 'on', '1000000', ' <b class=\"text-danger\">(Hot)</b>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `server_spam_sms`
--

CREATE TABLE `server_spam_sms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `time` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `server_spam_sms`
--

INSERT INTO `server_spam_sms` (`id`, `name`, `time`, `price`, `status`) VALUES
(1, 'Server 1', 90, 300, '1'),
(2, 'Server 2', 300, 1350, '1'),
(3, 'Server 3', 600, 2500, '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `service`
--

INSERT INTO `service` (`id`, `code`, `title`, `img`) VALUES
(6, 'dich-vu-facebook', 'Dịch Vu Facebook', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `nameAdmin` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `phoneAdmin` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `faceAdmin` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `idPage` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `nameWeb` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `logoWeb` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `biaWeb` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `faviWeb` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `motaWeb` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `tukhoaWeb` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `discountWeb` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `heartWeb` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `colorWeb` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `nameAdmin`, `phoneAdmin`, `faceAdmin`, `idPage`, `nameWeb`, `logoWeb`, `biaWeb`, `faviWeb`, `motaWeb`, `tukhoaWeb`, `discountWeb`, `heartWeb`, `colorWeb`) VALUES
(1, 'Bùi Quang Hiệu', '0866022313', '100041154973838', '4', 'DICHVUBLACK', 'https://t4.ftcdn.net/jpg/03/62/59/03/360_F_362590351_nM6CWER6PMhuDw7j3WqIhpmiHWxMHZmv.jpg', 'https://static.kinhtedothi.vn/images/upload/2022/05/25/f1.jpg', 'https://www.facebook.com/images/fb_icon_325x325.png', 'Hệ Thống Chuyên Cung Cấp Dịch Vụ Mạng Xã Hội Phục Vụ Bạn Mọi Lúc Mọi Nơi - Các Dịch Vụ Trên Website Hoàn Toàn Tự Động - Thiết Kế Độc Đáo - An Toàn Cho Người Dùng.', 'Hệ Thống Chuyên Cung Cấp Dịch Vụ Mạng Xã Hội Phục Vụ Bạn Mọi Lúc Mọi Nơi - Các Dịch Vụ Trên Website Hoàn Toàn Tự Động - Thiết Kế Độc Đáo - An Toàn Cho Người Dùng.', '20', '1', '#1833cc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `soucerCode`
--

CREATE TABLE `soucerCode` (
  `id` int(11) NOT NULL,
  `img` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `money` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `download` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `linkDown` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `soucerCode`
--

INSERT INTO `soucerCode` (`id`, `img`, `title`, `money`, `download`, `note`, `code`, `linkDown`) VALUES
(3, 'https://i.imgur.com/tpsL6Ta.png', ' Mã nguồn clone v6, bán via, random, mail, netflix, ... có nạp atuo momo, atm, card, có tính năng quét mã QR', '150000', '0', ' Mã nguồn clone v6, bán via, random, mail, netflix, ... có nạp atuo momo, atm, card, có tính năng quét mã QR', 'ma-nguon-clone-v6-ban-via-random-mail-netflix--co-nap-atuo-momo-atm-card-co-tinh-nang-quet-ma-qr', 'https://drive.google.com/file/d/1NB6NikhQn_67X2xDT4WQC-vBuzjNWBDY/view?usp=sharing'),
(4, 'https://i.imgur.com/xkE6hKQ.png', 'Code Web Bán Nhiều Loại Acc Game', '50000', '0', 'Code Web Bán Nhiều Loại Acc Game Giống Trumacc.vn ...', 'code-web-ban-nhieu-loai-acc-game', 'https://drive.google.com/file/d/1uc6cikw6jqouLZPZkfuDDhRKWXrMUPZH/view?usp=drive_link'),
(5, 'https://i.imgur.com/86jFlHF.png', 'Code giống subgiare, có nạp tự động, site con, api đơn qua subgiare, bao vip', '5000', '0', 'Code giống subgiare, có nạp tự động, site con, api đơn qua subgiare, bao vip', 'code-giong-subgiare-co-nap-tu-dong-site-con-api-don-qua-subgiare-bao-vip', 'https://drive.google.com/file/d/1KLktx8zlXkmO7EDsd3Nn86JUU3YgTu_K/view'),
(6, 'https://i.imgur.com/4jlxS3P.png', 'Code đăng bán mã nguồn online tích hợp nạp thẻ, nạp MOMO auto ', '5000', '0', 'Code đăng bán mã nguồn online tích hợp nạp thẻ, nạp MOMO auto ', 'code-dang-ban-ma-nguon-online-tich-hop-nap-the-nap-momo-auto', 'https://drive.google.com/file/d/1MbMuaIwXi3Lqf0cC4lIOAt4tMFviRTtE/view?usp=drive_link'),
(7, 'https://i.imgur.com/jtApJCe.jpg', 'Code shop bán acc game bản đen, bán acc liên quân, liên minh, fifa, free fire, .. Có nạp thẻ, momo, bank tự động', '5000', '0', 'Code shop bán acc game bản đen, bán acc liên quân, liên minh, fifa, free fire, .. Có nạp thẻ, momo, bank tự động', 'code-shop-ban-acc-game-ban-den-ban-acc-lien-quan-lien-minh-fifa-free-fire--co-nap-the-momo-bank-tu-dong', 'https://drive.google.com/file/d/1rLaiJ1IZrEFudlh50kXFCOJU_rzBn_6F/view'),
(8, 'https://i.imgur.com/MfmlV6f.png', 'Code Web Giống Subgiare.vn 100% ( Bản Mới ) ', '5000', '0', 'Code Web Giống Subgiare.vn 100% ( Bản Mới ) Api nhiều nguồn, auto nạp bank, card', 'code-web-giong-subgiarevn-100--ban-moi-', 'https://drive.google.com/file/d/17JE-c86qsSyG8nH6h29qZ4fhzmUNzwsu/view?usp=drive_link'),
(9, 'https://i.imgur.com/10fKZOg.png', 'Code bán xu ttc , tds có auto nạp , auto momo', '5000', '0', 'Code bán xu ttc , tds có auto nạp , auto momo', 'code-ban-xu-ttc--tds-co-auto-nap--auto-momo', 'https://drive.google.com/file/d/1dCtU0f3qQnsHrDDNg_TulbiOra2iPNZH/view'),
(10, 'https://i.imgur.com/JitFMAE.png', 'code dịch vụ fb + vip like siêu ngon - bản đẹp', '5000', '0', 'code dịch vụ fb + vip like siêu ngon - bản đẹp', 'code-dich-vu-fb--vip-like-sieu-ngon---ban-dep', 'https://www.mediafire.com/file/il7dj4jl72t6sv3/[tuanori.com]+Code+viplike+++d%E1%BB%8Bch+v%E1%BB%A5+fb+si%C3%AAu+%C4%91%E1%BA%B9p.zip/'),
(11, 'https://i.imgur.com/4LZqp7L.png', 'code bot tương tác', '5000', '0', 'code bot tương tác', 'code-bot-tuong-tac', 'https://drive.google.com/file/d/1hQPCcOdcMLOtuJK5JCMvw-5s_3n1Pu3Y/view'),
(12, 'https://i.imgur.com/v6boulW.png', 'code dịch vụ bán mail', '5000', '0', 'code dịch vụ bán mail', 'code-dich-vu-ban-mail', 'https://drive.google.com/file/d/1Im5v30q9k_iEyQd79Y6-DnO2eFXKDeQt/view'),
(13, 'https://i.imgur.com/yRMiUcC.png', 'Code Trao Đổi Sub', '5000', '0', 'Code Trao Đổi Sub', 'code-trao-doi-sub', 'https://drive.google.com/file/d/1kFtyOWPlRV71dyXBEajgHkIS8LPiMSvV/view'),
(14, 'https://i.imgur.com/T78YiDE.png', 'Code gạch thẻ cào, hỗ trợ 3 cấp bậc, nạp - rút tiền tự động, mua thẻ, nạp điện thoại auto', '5000', '0', 'Có thể thay đổi chiết khấu, đổi website api, tùy chỉnh cấu hình website theo ý thích', 'code-gach-the-cao-ho-tro-3-cap-bac-nap---rut-tien-tu-dong-mua-the-nap-dien-thoai-auto', 'https://drive.google.com/file/d/1vuULaXo_GUr4xBI-WQayi73xXx85Mr7h/view'),
(15, 'https://i.imgur.com/lmNgpC4.png', 'Code web phim siêu vip', '5000', '0', 'Code web phim siêu vip', 'code-web-phim-sieu-vip', 'https://www.mediafire.com/file/6rr8ssmt86dfw9f/[tuanori.com]+code+web+phim+.zip/file'),
(16, 'https://i.imgur.com/IdwN8vw.png', ' Code web phim giống phimmoi', '5000', '0', 'Vui lòng đọc hướng dẫn sử dụng trong file\r\n', 'code-web-phim-giong-phimmoi', 'https://drive.google.com/file/d/1UkZhHMvkp4Uh8ITcy1f0ADWkIcLBgnIa/view'),
(17, 'https://i.imgur.com/qm5dIZ0.jpg', 'Code CheckScam Bản Đẹp Có Tick', '5000', '0', 'Code CheckScam Bản Đẹp Có Tick', 'code-checkscam-ban-dep-co-tick', 'https://www.mediafire.com/file/g3t9uekdud80z0c/Code_Checkscam_T%25C3%25ADm_C%25C3%25B3_Tick.zip/file'),
(18, 'https://i.imgur.com/03LqTj6.png', 'Code cho thuê API momo, tpbank, mbbank, acb, vietcombank, thesieure', '5000', '0', 'Code cho thuê API momo, tpbank, mbbank, acb, vietcombank, thesieure', 'code-cho-thue-api-momo-tpbank-mbbank-acb-vietcombank-thesieure', 'https://drive.google.com/file/d/1ETqmD54IXqpwth3GIC4fXqyZtwEr0rRp/view'),
(19, 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg07PVPI7Tea84k66No0t811vkAT_uUY-42PYaewBAeM66JWBrjcKRIq0ODIzPLaFWXO3S5DTVxsst1HDqk60hKNmNCJSMdSBqlioA-lYMT33MAvtoeyt4TYVl8sP6uIdR_CJfAM8jowrKzYj5Sb9QQZ00YT83uVhY2Kd5I60dJF0S5uiAV1EnfpILt/w1600/A%CC%89nh%20ma%CC%80n%20hi%CC%80nh%202023-02-26%20lu%CC%81c%2011.45.13.png', 'Code bán source code, bán theme giao diện 2', '1900000', '0', 'Mã nguồn chính chủ, không keylog, backdoor.\r\nGiao toàn bộ mã nguồn để tuỳ chỉnh riêng.\r\nHỗ trợ cài đặt code lên web hoàn chỉnh\r\nCập nhật bản mới trực tiếp tại trang Admin\r\nBảo hành nếu có lỗi do code\r\nCam kết hỗ trợ setup đầy đủ như demo 100%, hỗ trợ anydesk/teamview ngay khi khách cần setup (hot)', 'code-ban-source-code-ban-theme-giao-dien-2', 'https://letrongtruyen.io.vn/'),
(20, 'https://i.imgur.com/0QgOzDz.png', 'CODE WEB TOOL MMO NHIỀU CHỨC NĂNG', '200000', '0', 'CODE WEB TOOL MMO NHIỀU CHỨC NĂNG, CHECK DOMAIN, whois domain, Chuyển Văn Bản Thành Giọng Nói,.... Hơn 200 Chức Năng Khác Nhau. Hỗ Trợ Setup a-z Khi Mua Code', 'code-web-tool-mmo-nhiu-chuc-nang', 'https://drive.google.com/file/d/1wad-iRO0G5lpX4OjEmj1re13iemdyxbH/view?usp=drivesdk'),
(21, 'https://i.imgur.com/EOtb9NF.png', 'Template blogger bán theme , code , có nút download', '5000', '0', 'Template blogger bán theme , code , có nút download', 'template-blogger-ban-theme--code--co-nut-download', 'https://www.mediafire.com/file/mhcfokd7wvnwgoz/[tuanori.com]+code+b%C3%A1n+code+,+b%C3%A1n+theme.txt/file'),
(22, 'https://i.imgur.com/tv5bu8V.png', 'CODE WEB KEY V3', '50000', '0', 'CODE WEB KEY V3', 'code-web-key-v3', 'https://www.mediafire.com/file/t3lomtqfs2kibfu/code+web+key+v3.zip/file'),
(23, 'https://i.imgur.com/0zsa8AX.png', 'Code Web Cho Thuê API MOMO, Auto Nạp siêu xịn ( Update 1/9/2023 )', '50000', '0', 'Code Web Cho Thuê API MOMO, Auto Nạp siêu xịn', 'code-web-cho-thue-api-momo-auto-nap-sieu-xin--update-192023-', 'https://drive.google.com/file/d/1ux3-pUytelwpNkjeKXnZRPHhW-hAO-bc/view?usp=drive_link'),
(24, 'https://i.imgur.com/e465OU7.png', 'CODE WEB DVFB ĐẸP API NHIỀU NGUỒN ( TraoDoiSub, Subgiare, hacklike17, ...) Fix all lỗi', '200000', '0', 'CODE WEB DVFB API NHIỀU NGUỒN ( TraoDoiSub, Subgiare, hacklike17, ...) Fix all lỗi, auto bank, card,.. Hỗ Trợ Setup A-Z', 'code-web-dvfb-dep-api-nhiu-nguon--traodoisub-subgiare-hacklike17--fix-all-loi', 'https://drive.google.com/file/d/1AlMJxsGwJ_B-_1EQutk1hDET3nI8npCt/view?usp=drive_link'),
(25, 'https://i.imgur.com/OeRooCS.png', 'Code Web Giới Thiệu Bản Thân Siêu Đẹp', '5000', '0', 'Code Web Giới Thiệu Bản Thân Siêu Đẹp', 'code-web-gioi-thieu-ban-than-sieu-dep', 'https://drive.google.com/file/d/1epZPgJA6tenJJLl8uOWB6XRdzPLxSkx-/view?usp=sharing'),
(26, 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgheBv8Yt44SNdbkcgah-PvND3WICiOAKuWWYZl5-_Bvgqvz8Rl-kdQenm3OL5b7JR4kBfTKDZPrGhNWa9v6strBfriH2uWjtBF3AjnHJa15_zycdm6DcgN6BKP2_tomqai4uJPsmrnMKUO6a-nUV2kWo1pgsQh9zmJ4NP6fLDwNokFMrqZPBQjwo0o/w650/ec91ef7d-594c-4b75-940f-f72b475ffff3.png', 'Code Web Card V2 Siêu Xinh, Auto Nạp Bank, Mua Thẻ, Đổi Thẻ Auto siêu xịn', '100000', '0', 'Code Web Card V2 Siêu Xinh, Auto Nạp Bank, Mua Thẻ, Đổi Thẻ Auto siêu xịn, Auto Bank Qua Dichvudark,…', 'code-web-card-v2-sieu-xinh-auto-nap-bank-mua-the-doi-the-auto-sieu-xin', 'https://drive.google.com/file/d/1pRZ2ogml0SDyBUn9_RoyOjX-sGv22ynp/view?usp=drive_link'),
(27, 'https://i.imgur.com/jeNSDrW.jpg', 'Code Web Bán Source Code Đẹp, Auto Card', '50000', '0', 'Code Web Bán Source Code Đẹp, Auto Card', 'code-web-ban-source-code-dep-auto-card', 'https://drive.google.com/file/d/18P5usXuXty4M-L0R_qNOlcIida52mwcR/view?usp=drive_link');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `soucerWeb`
--

CREATE TABLE `soucerWeb` (
  `id` int(11) NOT NULL,
  `code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `money` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `soucerWeb`
--

INSERT INTO `soucerWeb` (`id`, `code`, `img`, `title`, `money`, `note`) VALUES
(2, 'clonev6', 'https://i.imgur.com/G0HKxEF.jpg', 'Web clone v6, bán via, random, mail, netflix, ... có nạp atuo momo, atm, card, có tính năng quét mã QR', '150000', 'Web clone v6, bán via, random, mail, netflix, ... có nạp atuo momo, atm, card, có tính năng quét mã QR'),
(3, 'web-gach-the-co-auto-rut-momo-api-doi-card-co-the-cho-web-khac-dau-api', 'https://i.imgur.com/9W7zyf8.png', 'Web Gạch Thẻ, Có Auto Rút Momo, Api đổi card, có thể cho web khác đấu api', '100000', 'Web Gạch Thẻ, Có Auto Rút Momo, Api đổi card, có thể cho web khác đấu api'),
(4, 'shop-ban-acc-free-fire-lien-quan-dep', 'https://i.imgur.com/LgdkiXT.png', 'Shop Bán Acc Free Fire, Liên Quân Đẹp', '50000', 'Shop Bán Acc Free Fire, Liên Quân Đẹp, Admin Dễ Dùng'),
(5, 'web-ban-acc-lien-quan-free-fire-pubg-fo4-dep', 'https://i.imgur.com/4FFFOub.png', 'Web Bán Acc Liên Quân, Free Fire, PUBG, FO4,.. Đẹp', '100000', 'Web Bán Acc Liên Quân, Free Fire, PUBG, FO4,.. Đẹp, ( Giống Trumacc.vn ) Admin Dễ Dùng'),
(6, 'web-dvfb-sieu-ban-dep-api-nhieu-nguon-auto-nap-bank-sieu-vip', 'https://i.imgur.com/7ihkMZt.png', 'Web DVFB Siêu Bản Đẹp, Api Nhiều Nguồn, Auto Nạp Bank Siêu Vip', '200000', 'Web DVFB Siêu Bản Đẹp, Api Nhiều Nguồn, Auto Nạp Bank Siêu Vip');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `title` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `url` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `support`
--

INSERT INTO `support` (`id`, `title`, `url`) VALUES
(5, 'Facebook', 'https://www.facebook.com/BQHieu.info'),
(6, 'Zalo', 'https://zalo.me/0843217283');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transferMoney`
--

CREATE TABLE `transferMoney` (
  `id` int(11) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `receiver` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `money` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `type` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `type_service` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `code_service` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `type`
--

INSERT INTO `type` (`id`, `code`, `title`, `img`, `type`, `type_service`, `code_service`, `note`) VALUES
(6, 'like-post-sale', 'like post sale', 'dfsf', 'Like', 'Facebook', 'dich-vu-facebook', 'kkk');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `password` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `password2` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `email` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `name` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `phone` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `tong_nap` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `money` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `tong_tru` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `level` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `securityEmail` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `securityPass` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `otp_code` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `bannd` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `apitoken` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `lastdate` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `password2`, `email`, `name`, `phone`, `tong_nap`, `money`, `tong_tru`, `level`, `securityEmail`, `securityPass`, `otp_code`, `bannd`, `apitoken`, `lastdate`, `time`) VALUES
(3, 'admin', 'adminvip', NULL, 'admin@gmail.com', 'admin', '0987654321', '999999', '999999', '0', '3', '0', '0', '', '0', 'JRCL-YAQW-SIDY-ZOXT', '09:06 23-01-2024', '22:18 20-01-2024');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `withdrawCard`
--

CREATE TABLE `withdrawCard` (
  `id` int(11) NOT NULL,
  `username` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `banking` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `nameBank` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `numberBank` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `branchBank` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `statusBank` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `moneyBank` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categoriesGame`
--
ALTER TABLE `categoriesGame`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `checkscam_uytin`
--
ALTER TABLE `checkscam_uytin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cron`
--
ALTER TABLE `cron`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `demo_img_code`
--
ALTER TABLE `demo_img_code`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ds_sitecon`
--
ALTER TABLE `ds_sitecon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `history_accGame`
--
ALTER TABLE `history_accGame`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `history_Code`
--
ALTER TABLE `history_Code`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `history_createWeb`
--
ALTER TABLE `history_createWeb`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `history_Dvmxh`
--
ALTER TABLE `history_Dvmxh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `history_Host`
--
ALTER TABLE `history_Host`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `history_Momo`
--
ALTER TABLE `history_Momo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `key_log`
--
ALTER TABLE `key_log`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `listGame`
--
ALTER TABLE `listGame`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `list_Host`
--
ALTER TABLE `list_Host`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `log_site`
--
ALTER TABLE `log_site`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `momo_auto`
--
ALTER TABLE `momo_auto`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `server`
--
ALTER TABLE `server`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `soucerCode`
--
ALTER TABLE `soucerCode`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `soucerWeb`
--
ALTER TABLE `soucerWeb`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transferMoney`
--
ALTER TABLE `transferMoney`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `withdrawCard`
--
ALTER TABLE `withdrawCard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `categoriesGame`
--
ALTER TABLE `categoriesGame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `checkscam_uytin`
--
ALTER TABLE `checkscam_uytin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `cron`
--
ALTER TABLE `cron`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `demo_img_code`
--
ALTER TABLE `demo_img_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `ds_sitecon`
--
ALTER TABLE `ds_sitecon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `history_accGame`
--
ALTER TABLE `history_accGame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `history_Code`
--
ALTER TABLE `history_Code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;

--
-- AUTO_INCREMENT cho bảng `history_createWeb`
--
ALTER TABLE `history_createWeb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `history_Dvmxh`
--
ALTER TABLE `history_Dvmxh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `history_Host`
--
ALTER TABLE `history_Host`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `history_Momo`
--
ALTER TABLE `history_Momo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `key_log`
--
ALTER TABLE `key_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `listGame`
--
ALTER TABLE `listGame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `list_Host`
--
ALTER TABLE `list_Host`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `log_site`
--
ALTER TABLE `log_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=916;

--
-- AUTO_INCREMENT cho bảng `momo_auto`
--
ALTER TABLE `momo_auto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `server`
--
ALTER TABLE `server`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `soucerCode`
--
ALTER TABLE `soucerCode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `soucerWeb`
--
ALTER TABLE `soucerWeb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `transferMoney`
--
ALTER TABLE `transferMoney`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `withdrawCard`
--
ALTER TABLE `withdrawCard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
