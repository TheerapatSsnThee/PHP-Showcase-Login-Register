<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/auth.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="login-register-body">

    <div class="auth-wrapper">
        <div class="auth-decoration-section">
            <div class="decoration-content">
                <h2>ยินดีต้อนรับ</h2>
                <p>โปรเจค Showcase สำหรับระบบสมาชิกด้วย HTML CSS PHP MySQL</p>
                <div class="logo-circle">
                    GitHub : <br>Theerapat_SsnThee
                </div>
            </div>
        </div>

        <div class="auth-form-section">
            <div class="form-container">
                <h2>เข้าสู่ระบบ</h2>
                <?php
                    if(isset($_GET['error'])) {
                        if($_GET['error'] == 'emptyfields') {
                            echo '<p class="error-message">กรุณากรอก Username และ Password</p>';
                        } else {
                            echo '<p class="error-message">Username หรือ Password ไม่ถูกต้อง</p>';
                        }
                    }
                    if(isset($_GET['status']) && $_GET['status'] == 'success') {
                        echo '<p class="success-message">สมัครสมาชิกสำเร็จ! กรุณาเข้าสู่ระบบ</p>';
                    }
                ?>
                <form action="login_process.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div class="input-with-icon">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                            </svg>
                            <input type="text" name="username" id="username" placeholder="กรอกชื่อผู้ใช้ของคุณ" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                         <div class="input-with-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 9h6v5H5z"/>
                            </svg>
                            <input type="password" name="password" id="password" placeholder="กรอกรหัสผ่าน" required>
                        </div>
                    </div>
                    <button type="submit" class="btn">Login</button>
                </form>
                <p class="switch-form-link">ยังไม่มีบัญชี? <a href="register.php">สมัครสมาชิกที่นี่</a></p>
            </div>
        </div>
    </div>

</body>
</html>