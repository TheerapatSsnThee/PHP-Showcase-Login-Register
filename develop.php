<?php
session_start(); // เริ่ม session เพื่อให้ Navbar แสดงข้อมูล login ถูกต้อง
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Info</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="nav-left">
                <a href="index.php" class="logo">GitHub: Theerapat_SsnThee</a>
                <div class="main-links">
                    <a href="develop.php">Developer</a>
                </div>
            </div>

            <div class="nav-right">
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <div class="user-info" id="userInfo">
                        <span><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                        <a href="logout.php" class="logout-btn">Logout</a>
                    </div>
                <?php else: ?>
                    <a href="login.php">Login</a>
                    <a href="register.php">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="content-wrapper">
            <div class="page-header">
                <h1>About Development</h1>
                <p>ข้อมูลเกี่ยวกับผู้พัฒนาและเทคโนโลยีที่ใช้ในโปรเจกต์นี้</p>
            </div>

            <div class="developer-card">
                <div class="developer-image">
                    <img src="img/Theerapat_SsnThee.jpg" alt="Developer Picture">
                </div>
                <div class="developer-info">
                    <h2>Theerapat_SsnThee</h2>
                    <p>Full-Stack Developer</p>
                    <a href="https://github.com/TheerapatSsnThee" target="_blank" class="github-link">Visit GitHub Profile</a>
                </div>
            </div>

            <div class="tech-stack">
                <h2><span class="icon">💻</span> Technology Stack</h2>
                <ul class="tech-list">
                    <li>
                        <span class="tech-icon">🌐</span>
                        <div class="tech-details">
                            <strong>Front-End:</strong>
                            <span>HTML5, CSS3, JavaScript (ES6)</span>
                        </div>
                    </li>
                    <li>
                        <span class="tech-icon">🐘</span>
                        <div class="tech-details">
                            <strong>Back-End:</strong>
                            <span>PHP</span>
                        </div>
                    </li>
                     <li>
                        <span class="tech-icon">🐬</span>
                        <div class="tech-details">
                            <strong>Database:</strong>
                            <span>MySQL</span>
                        </div>
                    </li>
                     <li>
                        <span class="tech-icon">🎨</span>
                        <div class="tech-details">
                            <strong>Design & Style:</strong>
                            <span>Custom CSS with Flexbox & Grid</span>
                        </div>
                    </li>
                     <li>
                        <span class="tech-icon">🛠️</span>
                        <div class="tech-details">
                            <strong>Tools:</strong>
                            <span>Visual Studio Code, XAMPP, Git & GitHub</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div> </main>

    <footer class="footer">
        <div class="container">
            <p>© 2025 Theerapat_SsnThee Project</p>
        </div>
    </footer>

    <script>
        const userInfo = document.getElementById('userInfo');
        if (userInfo) {
            userInfo.addEventListener('click', function(event) {
                if (!event.target.classList.contains('logout-btn')) {
                    this.classList.toggle('active');
                }
            });
            document.addEventListener('click', function(event) {
                if (userInfo && !userInfo.contains(event.target)) {
                    userInfo.classList.remove('active');
                }
            });
        }
    </script>
</body>
</html>