<!doctype html>
<html lang="vi" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Hệ Thống Chuyên Cung Cấp Dịch Vụ Mạng Xã Hội Phục Vụ Bạn Mọi Lúc Mọi Nơi - Các Dịch Vụ Trên Website Hoàn Toàn Tự Động - Thiết Kế Độc Đáo - An Toàn Cho Người Dùng.">
    <meta name="author" content="Mạnh Dev">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.facebook.com/images/fb_icon_325x325.png">
    <title>Dịch Vụ Mạng Xã Hội Uy Tín Số 1 Việt Nam</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="/assets/css/bootstrap.min1.css?1765470655" rel="stylesheet">
    <link href="/assets/css/style1.css?1765470655" rel="stylesheet">
    <link href="/assets/css/icons.css?1765470655" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --bg-dark: #05050a;
            --bg-card: rgba(255, 255, 255, 0.03);
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --accent-cyan: #00f2ff;
            --accent-purple: #bd00ff;
            --text-main: #ffffff;
            --text-muted: #94a3b8;
            --glass-border: 1px solid rgba(255, 255, 255, 0.08);
        }

        /* --- ANTI-COPY CSS (Lớp bảo vệ 1: Chống bôi đen) --- */
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-dark) !important;
            color: var(--text-main);
            overflow-x: hidden;
            position: relative;
            /* Chống bôi đen text */
            -webkit-user-select: none; /* Safari */
            -ms-user-select: none; /* IE 10 and IE 11 */
            user-select: none; /* Standard syntax */
        }

        /* Vẫn cho phép nhập liệu ở các ô input/textarea nếu sau này có dùng */
        input, textarea {
            -webkit-user-select: text;
            user-select: text;
        }

        img {
            /* Chống kéo thả ảnh */
            -webkit-user-drag: none;
            -khtml-user-drag: none;
            -moz-user-drag: none;
            -o-user-drag: none;
            user-drag: none;
            pointer-events: none; /* Chặn chuột tác động trực tiếp vào ảnh (nâng cao) */
        }
        /* Restore pointer events for logos/links containing images so they are clickable */
        a img { pointer-events: none; } 
        a { pointer-events: auto; }

        /* --- BACKGROUND EFFECTS --- */
        .cyber-grid {
            position: fixed;
            top: 0; left: 0; width: 200vw; height: 200vh;
            background-image: 
                linear-gradient(rgba(0, 242, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(189, 0, 255, 0.03) 1px, transparent 1px);
            background-size: 40px 40px;
            transform: perspective(500px) rotateX(60deg) translateY(-100px) translateZ(-200px);
            animation: gridMove 20s linear infinite;
            z-index: -2;
            pointer-events: none;
        }
        @keyframes gridMove {
            0% { transform: perspective(500px) rotateX(60deg) translateY(0) translateZ(-200px); }
            100% { transform: perspective(500px) rotateX(60deg) translateY(40px) translateZ(-200px); }
        }

        .glow-blob {
            position: fixed;
            width: 500px; height: 500px; border-radius: 50%;
            z-index: -1; filter: blur(80px); opacity: 0.4;
            animation: floatBlob 10s infinite alternate;
        }
        .blob-1 { top: -10%; left: -10%; background: radial-gradient(circle, var(--accent-purple) 0%, transparent 70%); }
        .blob-2 { bottom: -10%; right: -10%; background: radial-gradient(circle, var(--accent-cyan) 0%, transparent 70%); }

        @keyframes floatBlob {
            0% { transform: translate(0, 0); }
            100% { transform: translate(30px, 30px); }
        }

        h1, h2, h3, h4, h5, .hero-title { font-family: 'Space Grotesk', sans-serif; }

        /* --- TYPEWRITER EFFECT --- */
        .typewrite > .wrap { 
            border-right: 0.08em solid #fff;
            padding-right: 5px;
            background: linear-gradient(to right, #00f2ff, #bd00ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 20px rgba(0, 242, 255, 0.3);
            animation: blink 0.7s infinite;
        }
        @keyframes blink { 50% { border-color: transparent; } }

        /* --- HEADER --- */
        .crypto-header {
            background: rgba(5, 5, 10, 0.7);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-bottom: var(--glass-border);
            padding: 12px 0;
            position: sticky; top: 0; z-index: 1000;
            transition: 0.3s;
        }

        .crypto-btn {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            color: #fff; padding: 10px 24px; border-radius: 50px;
            font-weight: 600; transition: all 0.3s;
            display: inline-flex; align-items: center; justify-content: center;
            text-decoration: none; font-size: 14px;
        }
        .crypto-btn:hover {
            border-color: var(--accent-cyan);
            background: rgba(0, 242, 255, 0.1);
            box-shadow: 0 0 15px rgba(0, 242, 255, 0.2);
            transform: translateY(-2px);
            color: #fff;
        }
        .crypto-btn-primary { background: var(--primary-gradient); border: none; }
        
        /* --- SECURITY CORE --- */
        .hero-section { padding: 120px 0 80px; position: relative; overflow: hidden; }
        .hero-title { font-size: 3.8rem; line-height: 1.2; margin-bottom: 24px; letter-spacing: -1px; }

        .tech-orb-wrapper {
            position: relative; width: 450px; height: 450px;
            display: flex; justify-content: center; align-items: center; margin: 0 auto;
        }

        .orb-core {
            width: 200px; height: 200px; border-radius: 50%;
            background: radial-gradient(circle at 50% 50%, rgba(9, 9, 20, 0.95) 20%, #000 100%);
            border: 1px solid rgba(0, 242, 255, 0.5);
            box-shadow: 0 0 50px rgba(0, 242, 255, 0.2);
            position: absolute; z-index: 2;
            display: flex; align-items: center; justify-content: center;
            overflow: hidden;
        }

        /* Hexagon Grid Overlay */
        .hex-grid {
            position: absolute; width: 100%; height: 100%;
            background-image: 
                linear-gradient(30deg, #111 12%, transparent 12.5%, transparent 87%, #111 87.5%, #111),
                linear-gradient(150deg, #111 12%, transparent 12.5%, transparent 87%, #111 87.5%, #111),
                linear-gradient(30deg, #111 12%, transparent 12.5%, transparent 87%, #111 87.5%, #111),
                linear-gradient(150deg, #111 12%, transparent 12.5%, transparent 87%, #111 87.5%, #111),
                linear-gradient(60deg, rgba(0, 242, 255, 0.1) 25%, transparent 25.5%, transparent 75%, rgba(0, 242, 255, 0.1) 75%, rgba(0, 242, 255, 0.1)),
                linear-gradient(60deg, rgba(0, 242, 255, 0.1) 25%, transparent 25.5%, transparent 75%, rgba(0, 242, 255, 0.1) 75%, rgba(0, 242, 255, 0.1));
            background-size: 20px 35px;
            background-position: 0 0, 0 0, 10px 18px, 10px 18px, 0 0, 10px 18px;
            opacity: 0.3;
        }

        .fingerprint-icon {
            font-size: 5rem;
            background: linear-gradient(180deg, #00f2ff 0%, #0066ff 100%);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
            opacity: 0.9; filter: drop-shadow(0 0 15px rgba(0, 242, 255, 0.6));
            animation: pulseFinger 3s ease-in-out infinite;
            z-index: 2;
        }

        .scan-line {
            position: absolute; width: 100%; height: 3px;
            background: #00f2ff;
            box-shadow: 0 0 15px #00f2ff, 0 0 30px #00f2ff;
            top: 0; left: 0;
            animation: scanMove 2.5s cubic-bezier(0.4, 0, 0.2, 1) infinite;
            opacity: 0.8; z-index: 3;
        }

        /* Particles escaping */
        .core-particles {
            position: absolute; width: 100%; height: 100%;
            animation: rotateParticles 10s linear infinite;
        }
        .particle {
            position: absolute; width: 4px; height: 4px; background: #00f2ff; border-radius: 50%;
            box-shadow: 0 0 5px #00f2ff;
        }
        .p1 { top: 20%; left: 20%; animation: floatP 3s infinite; }
        .p2 { bottom: 30%; right: 20%; animation: floatP 4s infinite 1s; }
        .p3 { top: 40%; right: 10%; animation: floatP 5s infinite 0.5s; }

        @keyframes scanMove { 0% { top: 0; opacity: 0; } 10% { opacity: 1; } 90% { opacity: 1; } 100% { top: 100%; opacity: 0; } }
        @keyframes pulseFinger { 0%, 100% { opacity: 0.7; transform: scale(1); } 50% { opacity: 1; transform: scale(1.05); } }
        @keyframes rotateParticles { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
        @keyframes floatP { 0%, 100% { transform: translate(0,0); opacity: 0.5; } 50% { transform: translate(10px, -10px); opacity: 1; } }

        .orbit-ring {
            position: absolute; border-radius: 50%;
            top: 50%; left: 50%; transform: translate(-50%, -50%);
            pointer-events: none; display: flex; align-items: center; justify-content: center;
        }
        .ring-inner { width: 300px; height: 300px; border: 1px dashed rgba(189, 0, 255, 0.3); animation: spinRight 20s linear infinite; }
        .ring-outer { width: 420px; height: 420px; border: 1px solid rgba(255, 255, 255, 0.08); box-shadow: 0 0 20px rgba(0, 242, 255, 0.05); animation: spinLeft 25s linear infinite; }
        
        .planet-holder { position: absolute; top: 50%; left: 50%; width: 100%; height: 100%; transform: translate(-50%, -50%); }
        .planet-icon {
            position: absolute; width: 45px; height: 45px;
            background: rgba(15, 15, 25, 0.9); backdrop-filter: blur(5px);
            border: 1px solid rgba(255,255,255,0.15); border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 20px; box-shadow: 0 0 15px rgba(0,0,0,0.5); color: #fff;
        }
        .ring-inner .planet-icon { animation: spinLeft 20s linear infinite; }
        .ring-outer .planet-icon { animation: spinRight 25s linear infinite; }

        .pos-inner-1 { top: 0; left: 50%; transform: translate(-50%, -50%); color: #1877F2; }
        .pos-inner-2 { bottom: 0; left: 50%; transform: translate(-50%, 50%); color: #fff; }
        .pos-outer-1 { top: 15%; left: 15%; transform: translate(-50%, -50%); color: #fff; border-color: #00f2ff; }
        .pos-outer-2 { top: 15%; right: 15%; transform: translate(50%, -50%); color: #E4405F; border-color: #E4405F; }
        .pos-outer-3 { bottom: 0; left: 50%; transform: translate(-50%, 50%); color: #fff; }

        @keyframes spinRight { 100% { transform: translate(-50%, -50%) rotate(360deg); } }
        @keyframes spinLeft { 100% { transform: translate(-50%, -50%) rotate(-360deg); } }

        /* --- STAT CARDS --- */
        .stat-card {
            background: linear-gradient(145deg, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.01) 100%);
            border: var(--glass-border);
            border-radius: 20px; padding: 30px;
            transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%; position: relative; overflow: hidden;
            z-index: 1;
        }
        
        .stat-card::after {
            content: ''; position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            border-radius: 20px;
            padding: 2px; /* Border thickness */
            background: linear-gradient(45deg, transparent, rgba(0, 242, 255, 0.5), transparent);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0; transition: 0.4s;
            pointer-events: none;
        }

        .stat-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            border-color: transparent; /* Hide original border */
        }
        
        .stat-card:hover::after { opacity: 1; }

        /* Icon Animation on Hover */
        .stat-card:hover .stat-icon {
            transform: scale(1.1) rotate(10deg);
            background: rgba(0, 242, 255, 0.1);
            color: #fff;
            box-shadow: 0 0 20px rgba(0, 242, 255, 0.4);
        }

        .stat-icon {
            width: 65px; height: 65px;
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 16px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.8rem; margin-bottom: 25px;
            color: var(--accent-cyan);
            transition: 0.4s;
        }

        .feedback-card {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.05);
            border-radius: 20px; padding: 30px; height: 100%; transition: 0.3s;
        }
        .feedback-card:hover { transform: translateY(-5px); background: rgba(255, 255, 255, 0.04); border-color: rgba(255,255,255,0.2); }

        .crypto-footer {
            border-top: 1px solid rgba(255,255,255,0.05);
            background: #020205; padding: 80px 0 30px; margin-top: 100px;
        }
        
        /* Mobile Fixes */
        @media (max-width: 991px) {
            .hero-title { font-size: 2.5rem !important; text-align: center; }
            .hero-section { padding-top: 50px; text-align: center; }
            .tech-orb-wrapper { width: 320px; height: 320px; margin-top: 50px; }
            .orb-core { width: 140px; height: 140px; }
            .fingerprint-icon { font-size: 3.5rem; }
            .ring-inner { width: 210px; height: 210px; }
            .ring-outer { width: 300px; height: 300px; }
            .mobile-nav-right { display: flex; gap: 8px; align-items: center; }
            .mobile-nav-btn { padding: 8px 14px; font-size: 13px; white-space: nowrap; }
        }
        @media (max-width: 400px) {
            .logo-horizontal span { display: none !important; }
            .mobile-nav-btn { padding: 6px 10px; font-size: 12px; }
        }
    </style>
</head>

<!-- Thêm oncontextmenu="return false" để chặn chuột phải ngay từ thẻ body -->
<body class="app ltr landing-page horizontal" oncontextmenu="return false;">

    <div class="cyber-grid"></div>
    <div class="glow-blob blob-1"></div>
    <div class="glow-blob blob-2"></div>

    <!-- Header -->
    <div class="crypto-header">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <a class="logo-horizontal d-flex align-items-center text-decoration-none" href="/">
                        <img src="https://www.facebook.com/images/fb_icon_325x325.png" alt="Logo" style="height: 38px; filter: drop-shadow(0 0 5px rgba(255,255,255,0.3));">
                        <span class="fw-bold fs-20 ms-2 text-white d-none d-sm-block text-uppercase" style="font-family: 'Space Grotesk'; letter-spacing: 1px;">DICHVUBLACK</span>
                    </a>
                </div>
                <div class="d-none d-lg-flex align-items-center gap-4">
                    <nav class="nav">
                        <a class="nav-link text-white opacity-75 hover-opacity-100" href="/">Trang Chủ</a>
                        <a class="nav-link text-white opacity-75 hover-opacity-100" href="#features">Tính Năng</a>
                        <a class="nav-link text-white opacity-75 hover-opacity-100" href="#feedback">Đánh Giá</a>
                    </nav>
                    <div class="d-flex gap-2">
                        <a href="/auth/login" class="crypto-btn">Đăng Nhập</a>
                        <a href="/auth/register" class="crypto-btn crypto-btn-primary">Đăng Ký</a>
                    </div>
                </div>
                <div class="d-lg-none mobile-nav-right">
                    <a href="/auth/login" class="crypto-btn mobile-nav-btn">Đăng Nhập</a>
                    <a href="/auth/register" class="crypto-btn crypto-btn-primary mobile-nav-btn">Đăng Ký</a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-main">
        <!-- Hero Section -->
        <div class="hero-section" id="home">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="1000">
                        <div class="d-inline-flex align-items-center px-3 py-1 rounded-pill border border-secondary mb-4" style="background: rgba(255,255,255,0.05);">
                            <span class="text-success me-2">●</span>
                            <span class="text-white fs-12 fw-bold text-uppercase ls-1">Hệ thống hoạt động 24/7</span>
                        </div>
                        <h1 class="hero-title">
                            Tăng Tương Tác <br>
                            <!-- Typing Effect Here -->
                            <a href="" class="typewrite text-decoration-none" data-period="2000" data-type='[ "Đỉnh Cao Công Nghệ", "Bảo Mật Tuyệt Đối", "Tự Động Hóa 100%", "Chi Phí Tối Ưu" ]'>
                                <span class="wrap"></span>
                            </a>
                        </h1>
                        <p class="text-muted fs-16 fs-md-18 mb-4 pe-lg-5 line-height-16">
                            Giải pháp Marketing tự động hóa hoàn toàn. Giúp thương hiệu của bạn bùng nổ trên mọi nền tảng mạng xã hội với công nghệ lõi bảo mật hiện đại.
                        </p>
                        <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start">
                            <a href="/auth/login" class="crypto-btn crypto-btn-primary px-4 py-3 fs-16">
                                <i class="fa fa-rocket me-2"></i> Đăng nhập ngay
                            </a>
                            <a href="/auth/register" class="crypto-btn px-4 py-3 fs-16">
                                <i class="fa fa-play-circle me-2"></i> Đăng ký
                            </a>
                        </div>
                        <div class="mt-5 d-flex gap-5 justify-content-center justify-content-lg-start border-top border-secondary pt-4" style="border-color: rgba(255,255,255,0.1) !important;">
                            <div><h3 class="fw-bold text-white mb-0">1.2M+</h3><small class="text-muted">Đơn hoàn thành</small></div>
                            <div><h3 class="fw-bold text-white mb-0">99.9%</h3><small class="text-muted">Uptime</small></div>
                            <div><h3 class="fw-bold text-white mb-0">24/7</h3><small class="text-muted">Hỗ trợ</small></div>
                        </div>
                    </div>

                    <!-- Tech Orb Animation -->
                    <div class="col-lg-6 order-1 order-lg-2 mb-5 mb-lg-0" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="tech-orb-wrapper">
                            <!-- Security Core (Fingerprint + Hex Grid + Particles) -->
                            <div class="orb-core">
                                <div class="hex-grid"></div> <!-- NEW Hexagon Grid -->
                                <div class="scan-line"></div>
                                <div class="core-particles">
                                    <div class="particle p1"></div>
                                    <div class="particle p2"></div>
                                    <div class="particle p3"></div>
                                </div>
                                <i class="fas fa-fingerprint fingerprint-icon"></i>
                            </div>
                            
                            <div class="orbit-ring ring-inner">
                                <div class="planet-holder">
                                    <div class="planet-icon pos-inner-1"><i class="fab fa-facebook-f"></i></div>
                                    <div class="planet-icon pos-inner-2"><i class="fab fa-google"></i></div>
                                </div>
                            </div>

                            <div class="orbit-ring ring-outer">
                                <div class="planet-holder">
                                    <div class="planet-icon pos-outer-1"><i class="fab fa-tiktok"></i></div>
                                    <div class="planet-icon pos-outer-2"><i class="fab fa-instagram"></i></div>
                                    <div class="planet-icon pos-outer-3"><i class="fab fa-threads"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section (Upgraded Cards) -->
        <div class="section py-5" id="features">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <span class="text-accent-cyan text-uppercase fs-12 fw-bold ls-1 mb-2 d-block" style="color: var(--accent-cyan)">Tính năng nổi bật</span>
                    <h2 class="fw-bold mb-3">Tại Sao Chọn Chúng Tôi?</h2>
                    <p class="text-muted">Công nghệ AI tiên tiến giúp tối ưu hóa chiến dịch của bạn</p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="stat-card">
                            <div class="stat-icon"><i class="fa fa-bolt"></i></div>
                            <h4 class="fw-bold text-white">Tốc Độ Siêu Tốc</h4>
                            <p class="text-muted mb-0">Hệ thống xử lý đơn hàng tự động ngay lập tức 24/7. Không có độ trễ, đảm bảo tiến độ cho mọi chiến dịch.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="stat-card">
                            <div class="stat-icon"><i class="fa fa-shield-alt"></i></div>
                            <h4 class="fw-bold text-white">Bảo Mật & An Toàn</h4>
                            <p class="text-muted mb-0">Mọi thông tin người dùng được mã hóa đầu cuối. Cam kết bảo mật danh tính khách hàng 100%.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="stat-card">
                            <div class="stat-icon"><i class="fa fa-headset"></i></div>
                            <h4 class="fw-bold text-white">Hỗ Trợ Tận Tâm</h4>
                            <p class="text-muted mb-0">Đội ngũ support chuyên nghiệp luôn túc trực để giải quyết mọi vấn đề của bạn nhanh nhất.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feedback Section -->
        <div class="section py-5 position-relative" id="feedback">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <span class="text-uppercase fs-12 fw-bold ls-1 mb-2 d-block" style="color: var(--accent-purple)">Đánh giá từ khách hàng</span>
                    <h2 class="fw-bold mb-3">Cộng Đồng Tin Dùng</h2>
                </div>

                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="800">
                        <div class="feedback-card">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                <i class="fa fa-quote-right text-muted opacity-25 fs-24"></i>
                            </div>
                            <p class="text-white mb-4 fs-15 text-muted-2">"Dịch vụ rất nhanh và uy tín. Mình đã lên đơn Facebook like và thấy tương tác về ngay lập tức. Support hỗ trợ nhiệt tình lắm!"</p>
                            <div class="d-flex align-items-center mt-auto">
                                <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center text-white fw-bold" style="width: 40px; height: 40px;">N</div>
                                <div class="ms-3"><h6 class="fw-bold text-white mb-0">Nguyễn Văn Nam</h6><small class="text-muted" style="font-size: 12px;">Kinh doanh Online</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="800">
                        <div class="feedback-card" style="border-color: rgba(0, 242, 255, 0.3);">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                <i class="fa fa-quote-right text-muted opacity-25 fs-24"></i>
                            </div>
                            <p class="text-white mb-4 fs-15">"Hệ thống ổn định nhất mà mình từng dùng. Giao diện đẹp, dễ sử dụng trên điện thoại. Nạp tiền tự động cực nhanh."</p>
                            <div class="d-flex align-items-center mt-auto">
                                <div class="rounded-circle bg-success d-flex align-items-center justify-content-center text-white fw-bold" style="width: 40px; height: 40px;">T</div>
                                <div class="ms-3"><h6 class="fw-bold text-white mb-0">Trần Thị Thu</h6><small class="text-muted" style="font-size: 12px;">Tiktoker</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="800">
                        <div class="feedback-card">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-alt"></i></div>
                                <i class="fa fa-quote-right text-muted opacity-25 fs-24"></i>
                            </div>
                            <p class="text-white mb-4 fs-15 text-muted-2">"Giá cả rất hợp lý cho đại lý. Mình đã tích hợp API vào web riêng và hoạt động rất trơn tru. Sẽ ủng hộ dài dài."</p>
                            <div class="d-flex align-items-center mt-auto">
                                <div class="rounded-circle bg-warning d-flex align-items-center justify-content-center text-white fw-bold" style="width: 40px; height: 40px;">H</div>
                                <div class="ms-3"><h6 class="fw-bold text-white mb-0">Hoàng Tuấn Anh</h6><small class="text-muted" style="font-size: 12px;">Developer</small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="crypto-footer">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <a class="d-flex align-items-center text-decoration-none mb-3" href="/">
                        <img src="https://www.facebook.com/images/fb_icon_325x325.png" alt="Logo" height="40">
                        <span class="fs-22 fw-bold text-white ms-2">DICHVUBLACK</span>
                    </a>
                    <p class="text-muted fs-14">Hệ thống cung cấp dịch vụ Social Media Marketing hàng đầu.</p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="#" class="text-white fs-18 opacity-50 hover-opacity-100 transition-all"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white fs-18 opacity-50 hover-opacity-100 transition-all"><i class="fab fa-telegram"></i></a>
                        <a href="#" class="text-white fs-18 opacity-50 hover-opacity-100 transition-all"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-6">
                    <h5 class="text-white fw-bold mb-3 fs-16">Platform</h5>
                    <ul class="list-unstyled text-muted fs-14">
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none hover-text-white">Về chúng tôi</a></li>
                        <li class="mb-2"><a href="/auth/login" class="text-muted text-decoration-none hover-text-white">Đăng nhập</a></li>
                        <li class="mb-2"><a href="/auth/register" class="text-muted text-decoration-none hover-text-white">Đăng ký</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6">
                    <h5 class="text-white fw-bold mb-3 fs-16">Chính sách</h5>
                    <ul class="list-unstyled text-muted fs-14">
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none hover-text-white">Điều khoản sử dụng</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none hover-text-white">Chính sách bảo mật</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none hover-text-white">Hoàn tiền</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5 class="text-white fw-bold mb-3 fs-16">Liên hệ</h5>
                    <ul class="list-unstyled text-muted fs-14">
                        <li class="mb-2"><i class="fa fa-envelope me-2 text-accent-cyan"></i> bqh.31.10@gmail.com</li>
                        <li class="mb-2"><i class="fa fa-phone me-2 text-accent-cyan"></i> 0789.396.963</li>
                    </ul>
                </div>
            </div>
            <div class="text-center border-top border-secondary pt-4 mt-5 opacity-50">
                <p class="mb-0 text-sm">© 2025 DICHVUBLACK. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min1.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Init AOS
        AOS.init({ once: true, offset: 50, duration: 800, easing: 'ease-out-cubic' });

        // Header Scroll Effect
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.crypto-header').css({ 'background': 'rgba(5, 5, 10, 0.9)', 'box-shadow': '0 4px 20px rgba(0,0,0,0.4)' });
            } else {
                $('.crypto-header').css({ 'background': 'rgba(5, 5, 10, 0.7)', 'box-shadow': 'none' });
            }
        });

        // Typewriter Effect Script
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) { delta /= 2; }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() { that.tick(); }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i=0; i<elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // Inject CSS for cursor
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };

        // --- SCRIPT CHỐNG COPY NÂNG CAO (Lớp bảo vệ 2 & 3) ---
        // 1. Chặn phím tắt (F12, Ctrl+U, Ctrl+C, Ctrl+S...)
        document.onkeydown = function(e) {
            // F12
            if(e.keyCode == 123) {
                return false;
            }
            // Ctrl+Shift+I (DevTools)
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
                return false;
            }
            // Ctrl+Shift+J (DevTools Console)
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
                return false;
            }
            // Ctrl+Shift+C (DevTools Inspect)
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
                return false;
            }
            // Ctrl+U (View Source)
            if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
                return false;
            }
            // Ctrl+S (Save Page)
            if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){
                return false;
            }
            // Ctrl+P (Print)
            if(e.ctrlKey && e.keyCode == 'P'.charCodeAt(0)){
                return false;
            }
        }
        
        // 2. Chặn Chuột phải (Context Menu) - Đã có trong thẻ <body> nhưng thêm JS để chắc chắn
        document.addEventListener("contextmenu", function(e){
            e.preventDefault();
        }, false);
    </script>
</body>
</html>