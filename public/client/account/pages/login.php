<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cổng Đăng Nhập | Space Voyager</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --space-bg: #0b0e14;
            --accent-cyan: #00f2ea;
            --accent-purple: #7000ff;
            --glass-surface: rgba(255, 255, 255, 0.03);
            --glass-border: rgba(255, 255, 255, 0.15); /* Tăng độ sáng viền */
            --text-primary: #ffffff;
            --text-secondary: #e2e8f0; /* Sáng hơn màu xám cũ */
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--space-bg);
            color: var(--text-primary);
            min-height: 100vh;
            overflow: hidden;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* --- VŨ TRỤ BACKGROUND --- */
        .stars {
            position: absolute;
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
            position: absolute;
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
            border: 1px solid rgba(255, 255, 255, 0.08); /* Sáng hơn xíu */
            transform: rotateX(75deg);
            box-shadow: 0 0 20px rgba(112, 0, 255, 0.15);
        }

        .ring-1 { width: 400px; height: 400px; animation: spinLeft 20s linear infinite; }
        .ring-2 { width: 550px; height: 550px; animation: spinRight 30s linear infinite; }
        .ring-3 { width: 700px; height: 700px; animation: spinLeft 40s linear infinite; border-color: rgba(255, 255, 255, 0.03); }

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

        @keyframes floatAstronaut {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        @keyframes orbitRotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        @keyframes spinLeft { 100% { transform: rotateX(75deg) rotateZ(360deg); } }
        @keyframes spinRight { 100% { transform: rotateX(75deg) rotateZ(-360deg); } }

        /* --- LOGIN FORM --- */
        .login-wrapper {
            width: 100%;
            max-width: 420px;
            padding: 20px;
            position: relative;
            z-index: 10;
        }

        .glass-card {
            background: rgba(11, 14, 20, 0.8); /* Tăng độ tối nền card để chữ trắng nổi hơn */
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
        }
        
        .brand-subtitle {
            text-align: center;
            color: #cbd5e1; /* Sáng hơn */
            font-size: 0.95rem;
            margin-bottom: 30px;
        }

        .form-group-space {
            margin-bottom: 20px;
            position: relative;
        }

        /* Label Style Mới - Rõ ràng hơn */
        .label-custom {
            color: #ffffff; /* Màu trắng hoàn toàn */
            font-weight: 600; /* In đậm hơn */
            font-size: 0.9rem;
            margin-bottom: 8px;
            display: block;
            text-shadow: 0 1px 2px rgba(0,0,0,0.5); /* Tạo bóng nhẹ cho chữ */
        }

        .form-control-space {
            background: rgba(255, 255, 255, 0.07);
            border: 1px solid var(--glass-border);
            color: white;
            padding: 14px 16px 14px 45px;
            border-radius: 12px;
            width: 100%;
            transition: all 0.3s;
            font-weight: 500;
        }

        .form-control-space::placeholder {
            color: #94a3b8; /* Placeholder giữ màu xám nhẹ để phân biệt */
        }

        .form-control-space:focus {
            background: rgba(255, 255, 255, 0.12);
            border-color: var(--accent-cyan);
            box-shadow: 0 0 0 4px rgba(0, 242, 234, 0.1);
            outline: none;
            color: white;
        }

        .input-icon-space {
            position: absolute;
            left: 16px;
            top: 42px; /* Căn chỉnh lại vị trí icon do có label */
            color: #cbd5e1; /* Icon sáng hơn */
            transition: 0.3s;
            z-index: 5;
        }

        .form-control-space:focus + .input-icon-space {
            color: var(--accent-cyan);
        }

        .btn-space {
            width: 100%;
            padding: 14px;
            border-radius: 12px;
            border: none;
            background: linear-gradient(90deg, var(--accent-purple), #5046e5);
            color: white;
            font-weight: 700;
            font-family: 'Outfit', sans-serif;
            letter-spacing: 0.5px;
            margin-top: 10px;
            transition: all 0.3s;
            text-transform: uppercase;
        }

        .btn-space:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -5px rgba(112, 0, 255, 0.5);
            color: white;
        }

        .form-check-input {
            background-color: rgba(255,255,255,0.1);
            border-color: #64748b;
        }
        .form-check-input:checked {
            background-color: var(--accent-purple);
            border-color: var(--accent-purple);
        }

        .form-check-label-custom {
            color: #ffffff; /* Trắng sáng */
            font-size: 0.9rem;
            font-weight: 500;
        }

        .divider {
            height: 1px;
            background: rgba(255,255,255,0.15);
            margin: 25px 0;
        }

        /* Modal Styles */
        .modal-content {
            background: #151923;
            border: 1px solid rgba(255,255,255,0.2);
            color: white;
        }
        .modal-header { border-bottom: 1px solid rgba(255,255,255,0.1); }
        .btn-close { filter: invert(1); }
        
        .footer-text {
            color: #e2e8f0;
            font-size: 0.95rem;
        }
    </style>
</head>
<body>

    <!-- 1. HỆ THỐNG NỀN VŨ TRỤ -->
    <div class="stars"></div>

    <!-- 2. PHI HÀNH GIA VÀ VỆ TINH XOAY -->
    <div class="astronaut-container">
        <!-- Ảnh Phi hành gia -->
        <img src="https://cdn3d.iconscout.com/3d/premium/thumb/astronaut-3837497-3200237.png" alt="Astronaut" class="astronaut-img">
        
        <!-- Các vòng quỹ đạo -->
        <div class="orbit-ring ring-1"></div>
        <div class="orbit-ring ring-2"></div>
        
        <!-- Các vệ tinh (đốm sáng) xoay -->
        <div class="satellite s1"><div class="sat-dot"></div></div>
        <div class="satellite s2"><div class="sat-dot"></div></div>
        <div class="satellite s3"><div class="sat-dot"></div></div>
    </div>

    <!-- 3. FORM ĐĂNG NHẬP (NỔI BÊN TRÊN) -->
    <div class="login-wrapper">
        <div class="glass-card">
            <div class="text-center">
                <i class="fas fa-planet-ring fa-2x mb-3" style="color: var(--accent-cyan); filter: drop-shadow(0 0 10px rgba(0,242,234,0.6));"></i>
                <h2 class="brand-title">WELCOME BACK</h2>
                <p class="brand-subtitle">Truy cập hệ thống quản trị</p>
            </div>

            <form>
                <div class="form-group-space">
                    <label class="label-custom ps-1">Tài khoản</label>
                    <div style="position: relative;">
                        <input class="form-control-space" type="text" id="username" placeholder="Nhập tên đăng nhập">
                        <i class="fas fa-user-astronaut input-icon-space" style="top: 50%; transform: translateY(-50%);"></i>
                    </div>
                </div>

                <div class="form-group-space">
                    <label class="label-custom ps-1">Mật khẩu</label>
                    <div style="position: relative;">
                        <input class="form-control-space" type="password" id="password" placeholder="••••••••">
                        <i class="fas fa-key input-icon-space" style="top: 50%; transform: translateY(-50%);"></i>
                        <button type="button" id="btnPassword" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); background: none; border: none; color: #94a3b8; cursor: pointer;">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="auth-remember-check" checked>
                        <label class="form-check-label form-check-label-custom" for="auth-remember-check">Ghi nhớ tôi</label>
                    </div>
                    <a href="https://fb.com/100041154973838" class="text-decoration-none fw-bold" style="color: var(--accent-cyan); font-size: 0.9rem;">Quên mật khẩu?</a>
                </div>

                <button class="btn-space" type="button" id="login">
                    ĐĂNG NHẬP <i class="fas fa-rocket ms-2"></i>
                </button>
            </form>

            <div class="divider"></div>

            <div class="text-center">
                <p class="footer-text mb-0">Chưa có tài khoản? 
                    <a href="/auth/register" class="fw-bold text-decoration-none" style="color: var(--accent-cyan);">Đăng ký ngay</a>
                </p>
            </div>
        </div>
    </div>

    <!-- MODAL XÁC NHẬN MAIL -->
    <div class="modal fade" id="verimail" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold"><i class="fas fa-envelope me-2"></i>Xác Thực Email</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <b id="ketqua_mail" class="d-block mb-3"></b>
                    <input class="form-control-space mb-3 text-center fw-bold fs-5" style="letter-spacing: 3px;" type="number" id="macode" placeholder="Nhập Mã Code">
                    <button type="submit" class="btn-space" id="xacnhanmail">Xác Nhận</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL XÁC NHẬN PASS 2 -->
    <div class="modal fade" id="veripass" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold"><i class="fas fa-shield-alt me-2"></i>Bảo Mật Cấp 2</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <b id="ketqua_pass2" class="d-block mb-3"></b>
                    <input class="form-control-space mb-3" type="password" id="mkc2" placeholder="Nhập Mật Khẩu Cấp 2">
                    <button type="submit" class="btn-space" id="xacnhanpass">Mở Khóa</button>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        $(document).ready(function(){
            // Xử lý nút Login
            $('#login').click(function() {
                var btn = $(this);
                btn.html('<i class="fas fa-circle-notch fa-spin"></i> Đang Xử Lý...').prop('disabled', true);
                
                var formData = {
                    'type'        : 'login',
                    'username'    : $("#username").val(),
                    'password'    : $("#password").val()
                };

                // Gọi AJAX về PHP Backend
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
                            btn.html('ĐĂNG NHẬP <i class="fas fa-rocket ms-2"></i>').prop('disabled', false);
                        } else if(data.status == 'Mail') {
                            var myModal = new bootstrap.Modal(document.getElementById('verimail'));
                            myModal.show();
                            btn.html('ĐĂNG NHẬP <i class="fas fa-rocket ms-2"></i>').prop('disabled', false);
                        } else if(data.status == 'Pass') {
                            var myModal = new bootstrap.Modal(document.getElementById('veripass'));
                            myModal.show();
                            btn.html('ĐĂNG NHẬP <i class="fas fa-rocket ms-2"></i>').prop('disabled', false);
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
                            setTimeout(function(){ location.href = "/" }, 2000); 
                            btn.html('ĐĂNG NHẬP <i class="fas fa-rocket ms-2"></i>').prop('disabled', false);
                        }
                    }, "json").fail(function() {
                        // Demo fallback
                        console.log("Backend offline, demo mode only");
                         Swal.fire({
                                title: 'Demo Mode',
                                text: 'Vui lòng chạy trên localhost có PHP để login',
                                icon: 'warning',
                                background: '#151923',
                                color: '#fff'
                            });
                        btn.html('ĐĂNG NHẬP <i class="fas fa-rocket ms-2"></i>').prop('disabled', false);
                    });
            });

            // Xử lý xác nhận Mail
            $('#xacnhanmail').click(function() {
                $(this).html('<i class="fas fa-circle-notch fa-spin"></i> Checking...').prop('disabled', true);
                var formData = {
                    'type'      : 'xacnhanmail',
                    'username'  : $("#username").val(),
                    'macode'    : $("#macode").val(),
                };
                $.post("/api/profile/AuthForm", formData,
                    function (data) {
                        if(data.status == 'error'){
                            $('#ketqua_mail').html('<div class="alert alert-danger bg-danger bg-opacity-10 border-danger text-danger text-center">' + data.msg + '</div>');
                            $('#xacnhanmail').html('Xác Nhận').prop('disabled', false);
                        } else {
                            setTimeout(function(){ location.href = "/" },2000);  
                            $('#ketqua_mail').html('<div class="alert alert-success bg-success bg-opacity-10 border-success text-success text-center">' + data.msg + '</div>');
                            $('#xacnhanmail').html('Xác Nhận').prop('disabled', false);
                        }
                    }, "json");
            });

            // Xử lý xác nhận Pass 2
            $('#xacnhanpass').click(function() {
                $(this).html('<i class="fas fa-circle-notch fa-spin"></i> Checking...').prop('disabled', true);
                var formData = {
                    'type'      : 'xacnhanpass',
                    'username'  : $("#username").val(),
                    'mkc2'      : $("#mkc2").val(),
                };
                $.post("/api/profile/AuthForm", formData,
                    function (data) {
                        if(data.status == 'error'){
                            $('#ketqua_pass2').html('<div class="alert alert-danger bg-danger bg-opacity-10 border-danger text-danger text-center">' + data.msg + '</div>');
                            $('#xacnhanpass').html('Mở Khóa').prop('disabled', false);
                        } else {
                            setTimeout(function(){ location.href = "/" },2000);  
                            $('#ketqua_pass2').html('<div class="alert alert-success bg-success bg-opacity-10 border-success text-success text-center">' + data.msg + '</div>');
                            $('#xacnhanpass').html('Mở Khóa').prop('disabled', false);
                        }
                    }, "json");
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