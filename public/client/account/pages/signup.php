<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký Tài Khoản | Space Voyager</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Recaptcha API (Thêm vào để hiển thị Captcha) -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <style>
        :root {
            --space-bg: #0b0e14;
            --accent-cyan: #00f2ea;
            --accent-purple: #7000ff;
            --glass-surface: rgba(11, 14, 20, 0.75);
            --glass-border: rgba(255, 255, 255, 0.15);
            --text-primary: #ffffff;
            --text-secondary: #e2e8f0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--space-bg);
            color: var(--text-primary);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px 0;
        }

        /* --- VŨ TRỤ BACKGROUND --- */
        .stars {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: radial-gradient(circle at center, #1b2735 0%, #090a0f 100%);
            z-index: -2;
        }
        
        .stars::before {
            content: "";
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background-image: 
                radial-gradient(white 1px, transparent 1.2px),
                radial-gradient(white 1px, transparent 1.2px);
            background-size: 50px 50px, 100px 100px;
            background-position: 0 0, 25px 25px;
            opacity: 0.3;
        }

        /* --- PHI HÀNH GIA & VỆ TINH --- */
        .astronaut-container {
            position: fixed;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            width: 600px;
            height: 600px;
            z-index: -1;
            pointer-events: none;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .astronaut-img {
            width: 280px;
            animation: floatAstronaut 6s ease-in-out infinite;
            filter: drop-shadow(0 0 30px rgba(0, 242, 234, 0.3));
            z-index: 2;
        }

        .orbit-ring {
            position: absolute;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.08);
            transform: rotateX(75deg);
            box-shadow: 0 0 20px rgba(112, 0, 255, 0.15);
        }

        .ring-1 { width: 400px; height: 400px; animation: spinLeft 20s linear infinite; }
        .ring-2 { width: 550px; height: 550px; animation: spinRight 30s linear infinite; }

        .satellite {
            position: absolute;
            top: 50%; left: 50%;
            width: 100%; height: 100%;
            margin-top: -50%; margin-left: -50%;
            border-radius: 50%;
            animation: orbitRotate linear infinite;
        }

        .sat-dot {
            position: absolute;
            background: white;
            border-radius: 50%;
            box-shadow: 0 0 10px white, 0 0 20px var(--accent-cyan);
        }

        .s1 { animation-duration: 8s; width: 100%; height: 100%; }
        .s1 .sat-dot { top: 0; left: 50%; width: 6px; height: 6px; margin-left: -3px; margin-top: -3px; }
        .s2 { animation-duration: 12s; width: 120%; height: 120%; animation-direction: reverse; }
        .s2 .sat-dot { top: 50%; right: 0; width: 4px; height: 4px; background: var(--accent-cyan); }
        .s3 { animation-duration: 25s; width: 80%; height: 80%; transform: rotateX(60deg) rotateY(20deg); }
        .s3 .sat-dot { bottom: 0; left: 50%; width: 8px; height: 8px; background: var(--accent-purple); }

        @keyframes floatAstronaut { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-20px); } }
        @keyframes orbitRotate { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
        @keyframes spinLeft { 100% { transform: rotateX(75deg) rotateZ(360deg); } }
        @keyframes spinRight { 100% { transform: rotateX(75deg) rotateZ(-360deg); } }

        /* --- SIGNUP FORM --- */
        .auth-wrapper {
            width: 100%;
            max-width: 500px;
            padding: 20px;
            position: relative;
            z-index: 10;
        }

        .glass-card {
            background: var(--glass-surface);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            padding: 40px 30px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
        }

        .brand-title {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 5px;
            background: linear-gradient(135deg, #fff 0%, #e2e8f0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-transform: uppercase;
        }
        
        .brand-subtitle {
            text-align: center;
            color: #cbd5e1;
            font-size: 0.95rem;
            margin-bottom: 25px;
        }

        .form-group-space {
            margin-bottom: 15px;
            position: relative;
        }

        .label-custom {
            color: #ffffff;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 6px;
            display: block;
            text-shadow: 0 1px 2px rgba(0,0,0,0.5);
        }

        .form-control-space {
            background: rgba(255, 255, 255, 0.07);
            border: 1px solid var(--glass-border);
            color: white;
            padding: 12px 16px 12px 45px;
            border-radius: 12px;
            width: 100%;
            transition: all 0.3s;
            font-weight: 500;
        }

        .form-control-space::placeholder { color: #94a3b8; }

        .form-control-space:focus {
            background: rgba(255, 255, 255, 0.12);
            border-color: var(--accent-cyan);
            box-shadow: 0 0 0 4px rgba(0, 242, 234, 0.1);
            outline: none;
            color: white;
        }

        /* --- SỬA LỖI ICON BỊ LỆCH --- */
        .input-icon-space {
            position: absolute;
            left: 16px;
            top: 50%; /* Căn giữa theo chiều dọc */
            transform: translateY(-50%); /* Căn giữa chính xác */
            color: #cbd5e1;
            transition: 0.3s;
            z-index: 5;
        }

        .form-control-space:focus + .input-icon-space { color: var(--accent-cyan); }

        /* Eye Icon cho Password */
        .password-toggle-btn {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #94a3b8;
            cursor: pointer;
            z-index: 6;
        }

        .btn-space {
            width: 100%;
            padding: 14px;
            border-radius: 12px;
            border: none;
            background: linear-gradient(90deg, #ef4444, #b91c1c);
            color: white;
            font-weight: 700;
            font-family: 'Outfit', sans-serif;
            letter-spacing: 0.5px;
            margin-top: 15px;
            text-transform: uppercase;
            transition: all 0.3s;
        }

        .btn-space:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -5px rgba(239, 68, 68, 0.5);
            color: white;
        }

        .divider {
            height: 1px;
            background: rgba(255,255,255,0.15);
            margin: 20px 0;
        }

        .footer-text { color: #e2e8f0; font-size: 0.95rem; }
        
        /* --- SỬA LỖI RECAPTCHA --- */
        /* Chỉ căn giữa, không can thiệp vào giao diện gốc của Google */
        .recaptcha-container {
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
            overflow: hidden; /* Tránh tràn nếu màn hình quá nhỏ */
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <!-- PHP Header Logic (Giữ nguyên) -->
    <!-- 
    <?php include $_SERVER['DOCUMENT_ROOT'].'/config/head.php'; 
    if($ManhDev->users('username')) {
    echo "<script>location.href = '/auth/login'</script>";
    }
    ?>
    -->

    <!-- 1. HỆ THỐNG NỀN VŨ TRỤ -->
    <div class="stars"></div>

    <!-- 2. PHI HÀNH GIA VÀ VỆ TINH XOAY -->
    <div class="astronaut-container">
        <img src="https://cdn3d.iconscout.com/3d/premium/thumb/astronaut-3837497-3200237.png" alt="Astronaut" class="astronaut-img">
        <div class="orbit-ring ring-1"></div>
        <div class="orbit-ring ring-2"></div>
        <div class="satellite s1"><div class="sat-dot"></div></div>
        <div class="satellite s2"><div class="sat-dot"></div></div>
        <div class="satellite s3"><div class="sat-dot"></div></div>
    </div>

    <!-- 3. FORM ĐĂNG KÝ -->
    <div class="auth-wrapper">
        <div class="glass-card">
            <div class="text-center">
                <i class="fas fa-user-astronaut fa-2x mb-3" style="color: var(--accent-cyan); filter: drop-shadow(0 0 10px rgba(0,242,234,0.6));"></i>
                <h2 class="brand-title">ĐĂNG KÝ TÀI KHOẢN</h2>
                <p class="brand-subtitle">Bắt đầu hành trình của bạn</p>
            </div>

            <form>
                <!-- Họ Tên -->
                <div class="form-group-space">
                    <label class="label-custom ps-1">Họ Và Tên</label>
                    <div style="position: relative;">
                        <input class="form-control-space" type="text" id="name" placeholder="Nhập họ và tên">
                        <i class="fas fa-id-card input-icon-space"></i>
                    </div>
                </div>

                <!-- SĐT -->
                <div class="form-group-space">
                    <label class="label-custom ps-1">Số Điện Thoại</label>
                    <div style="position: relative;">
                        <input class="form-control-space" type="number" id="phone" placeholder="Nhập số điện thoại">
                        <i class="fas fa-phone-alt input-icon-space"></i>
                    </div>
                </div>

                <!-- Gmail -->
                <div class="form-group-space">
                    <label class="label-custom ps-1">Email</label>
                    <div style="position: relative;">
                        <input class="form-control-space" type="email" id="email" placeholder="Nhập địa chỉ Email">
                        <i class="fas fa-envelope input-icon-space"></i>
                    </div>
                </div>

                <!-- Tài khoản -->
                <div class="form-group-space">
                    <label class="label-custom ps-1">Tài Khoản</label>
                    <div style="position: relative;">
                        <input class="form-control-space" type="text" id="username" placeholder="Tên đăng nhập">
                        <i class="fas fa-user input-icon-space"></i>
                    </div>
                </div>

                <!-- Mật khẩu -->
                <div class="form-group-space">
                    <label class="label-custom ps-1">Mật Khẩu</label>
                    <div style="position: relative;">
                        <input class="form-control-space" type="password" id="password" placeholder="Mật khẩu bảo mật">
                        <i class="fas fa-lock input-icon-space"></i>
                        <button type="button" class="password-toggle-btn" id="btnPassword">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <!-- Captcha Area -->
                <div class="mb-3 recaptcha-container">
                    <!-- Tôi đã đưa về đúng code nguyên bản như bạn yêu cầu -->
                    <!-- Chú ý: Cần đảm bảo file config/head.php của bạn đã bao gồm script recaptcha api.js hoặc dùng dòng script tôi thêm ở thẻ head -->
                    
                    <!-- PHP Code gốc (Uncomment khi đưa vào file php): -->
                    <!-- 
                    <div class="g-recaptcha" data-sitekey="6LeKDyksAAAAAFJYHVqTIFsZSOBcZ2aovy8T5quS"<?=$ManhDev->get_row("SELECT * FROM `options` WHERE `key_code` = 'captcha' ")['value'];?>"></div> 
                    -->
                    
                    <!-- HTML hiển thị demo (Xóa dòng dưới khi chạy thật): -->

                    <!-- Vào để lách 2FA recaptcha của GG: https://www.google.com/recaptcha/admin/create -->
                    <!-- Acc bqh.31.10 Vào để quản lý key hiện tại https://www.google.com/recaptcha/admin/site/740888458/setup -->
                    
                    <div class="g-recaptcha" data-sitekey="6LeKDyksAAAAAFJYHVqTIFsZSOBcZ2aovy8T5quS"></div>
                </div>

                <!-- Nút Đăng Ký -->
                <button class="btn-space" type="button" id="signup">
                    ĐĂNG KÝ NGAY <i class="fas fa-rocket ms-2"></i>
                </button>
            </form>

            <div class="divider"></div>

            <div class="text-center">
                <p class="footer-text mb-0">Bạn đã có tài khoản? 
                    <a href="/auth/login" class="fw-bold text-decoration-none" style="color: var(--accent-cyan);">Đăng nhập ngay</a>
                </p>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Script Logic Xử Lý (Copy từ signup.php cũ) -->
    <script>
        $(document).ready(function(){
            $('#signup').click(function() {
                var btn = $(this);
                btn.html('<i class="fas fa-circle-notch fa-spin"></i> Đang Xử Lý...').prop('disabled', true);
                
                var formData = {
                    'type'        : 'signup',
                    'name'        : $("#name").val(),
                    'phone'       : $("#phone").val(),
                    'email'       : $("#email").val(),
                    'username'    : $("#username").val(),
                    'password'    : $("#password").val(),
                    'captcha'     : $("#g-recaptcha-response").val() // Lưu ý: Element này do Google Captcha sinh ra
                };

                $.post("/api/profile/AuthForm", formData,
                    function (data) {
                        if(data.status == 'error') {
                            Swal.fire({
                                title: 'Thông Báo',
                                text: data.msg,
                                icon: 'error',
                                background: '#151923',
                                color: '#fff'
                            });
                            btn.html('ĐĂNG KÝ NGAY <i class="fas fa-rocket ms-2"></i>').prop('disabled', false);
                        } else {
                            Swal.fire({
                                title: 'Thành Công',
                                text: data.msg,
                                icon: 'success',
                                background: '#151923',
                                color: '#fff',
                                showConfirmButton: false,
                                timer: 1500
                            });
                            setTimeout(function(){ location.href = "/auth/login" }, 2000); 
                            btn.html('ĐĂNG KÝ NGAY <i class="fas fa-rocket ms-2"></i>').prop('disabled', false);
                        }
                    }, "json").fail(function() {
                         // Demo fallback
                        console.log("Backend offline or Captcha missing");
                         Swal.fire({
                                title: 'Demo Mode',
                                text: 'Vui lòng chạy trên localhost có PHP để đăng ký',
                                icon: 'warning',
                                background: '#151923',
                                color: '#fff'
                            });
                        btn.html('ĐĂNG KÝ NGAY <i class="fas fa-rocket ms-2"></i>').prop('disabled', false);
                    });
            });

            // Toggle Password Eye
            $('#btnPassword').click(function() {
                const input = $('#password');
                const icon = $(this).find('i');
                if(input.attr('type') === 'password') {
                    input.attr('type', 'text');
                    icon.removeClass('fa-eye').addClass('fa-eye-slash').css('color', '#00f2ea');
                } else {
                    input.attr('type', 'password');
                    icon.removeClass('fa-eye-slash').addClass('fa-eye').css('color', '#94a3b8');
                }
            });
        });
    </script>
</body>
</html>