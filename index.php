<?php
// TShowcaseRegisterLogin/index.php

// session_start() เป็นฟังก์ชันที่ต้องเรียกใช้เป็นอันดับแรกสุดของไฟล์เสมอ
// หน้าที่ของมันคือการเริ่มหรือเข้าถึง session ที่มีอยู่แล้ว
// session ใช้สำหรับเก็บข้อมูลของผู้ใช้ไว้ชั่วคราวระหว่างที่ยังอยู่ในเว็บไซต์ เช่น สถานะการล็อกอิน, ชื่อผู้ใช้
session_start();
?>
<!DOCTYPE html> <html lang="en"> <head>
    <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Showcase</title> <link rel="stylesheet" href="css/style.css"> </head>
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
                <?php
                // เริ่มโค้ด PHP เพื่อตรวจสอบสถานะการล็อกอิน
                // isset($_SESSION['loggedin']) ตรวจสอบว่ามี session ชื่อ 'loggedin' อยู่หรือไม่
                // && $_SESSION['loggedin'] === true ตรวจสอบว่าค่าของ session นั้นเป็น true จริงๆ
                // เงื่อนไขนี้จะเป็นจริงก็ต่อเมื่อผู้ใช้ล็อกอินสำเร็จแล้วเท่านั้น
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true):
                ?>
                    <div class="user-info" id="userInfo">
                        <span><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                        <a href="logout.php" class="logout-btn">Logout</a>
                    </div>
                <?php else: ?>
                    <a href="login.php">Login</a>
                    <a href="register.php">Register</a>
                <?php endif; // จบเงื่อนไข if-else ของ PHP ?>
            </div>
        </div>
    </nav>

    <header class="banner-slider">
        <div class="slides">
            <div class="slide active"><img src="Banner/Banner.jpg" alt="Banner 1"></div>
            <div class="slide"><img src="Banner/Banner2.png" alt="Banner 2"></div>
            <div class="slide"><img src="Banner/Banner3.png" alt="Banner 3"></div>
        </div>
        <button class="slider-btn prev">&#10094;</button> <button class="slider-btn next">&#10095;</button> </header>

    <main class="products">
        <div class="container">
            <div class="products-header">
                 <h2>Products</h2>
            </div>
            <div class="product-grid">
                <div class="product-card">
                    <div class="product-image-container">
                        <img src="Product/Product1.jpg" alt="Product 1"> </div>
                    <div class="product-info">
                        <h3>เสื้อแขนยาว</h3>
                        <p>฿249.00</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image-container">
                        <img src="Product/Product2.jpg" alt="Product 2">
                    </div>
                    <div class="product-info">
                        <h3>เสื้อแขนสั้น</h3>
                        <p>฿199.00</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image-container">
                        <img src="Product/Product3.png" alt="Product 3">
                    </div>
                    <div class="product-info">
                        <h3>Intel i7-14700K RAM 64GB RX7900 XT </h3>
                        <p>฿45000.00</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image-container">
                        <img src="Product/Product4.png" alt="Product 4">
                    </div>
                    <div class="product-info">
                        <h3>Ryzen 7-9700X RAM 64GB RTX5090</h3>
                        <p>฿56000.00</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <p>© 2025 Theerapat_SsnThee Project</p>
        </div>
    </footer>

    <script>
        // --- Logic สำหรับปุ่ม Logout ---
        // เลือก Element ที่มี id="userInfo" มาเก็บในตัวแปร userInfo
        const userInfo = document.getElementById('userInfo');
        // ตรวจสอบว่ามี Element นี้ในหน้าเว็บหรือไม่ (ป้องกัน error ถ้าผู้ใช้ไม่ได้ล็อกอิน)
        if (userInfo) {
            // เพิ่ม Event Listener เพื่อ "ดักฟัง" เหตุการณ์ 'click' ที่เกิดขึ้นบน userInfo
            userInfo.addEventListener('click', function(event) {
                // ตรวจสอบว่าสิ่งที่ถูกคลิก "ไม่ใช่" ปุ่ม logout
                if (!event.target.classList.contains('logout-btn')) {
                    // ถ้าไม่ใช่ปุ่ม logout ให้สลับ (toggle) คลาส 'active' เพื่อแสดง/ซ่อนเมนู
                    this.classList.toggle('active');
                }
            });

            // เพิ่ม Event Listener ให้กับ "ทั้งเอกสาร" เพื่อดักฟังการคลิก
            document.addEventListener('click', function(event) {
                // ตรวจสอบว่ามี userInfo และจุดที่คลิก "ไม่ได้อยู่ภายใน" บริเวณของ userInfo
                if (userInfo && !userInfo.contains(event.target)) {
                    // ถ้าคลิกนอกเมนู ให้ลบคลาส 'active' ออก (ทำให้เมนูปิด)
                    userInfo.classList.remove('active');
                }
            });
        }

        // --- Logic สำหรับ Banner Slider ---
        // เลือก Element ของสไลด์และปุ่มทั้งหมดมาเก็บในตัวแปร
        const slides = document.querySelectorAll('.slide');
        const nextBtn = document.querySelector('.next');
        const prevBtn = document.querySelector('.prev');
        // สร้างตัวแปรสำหรับเก็บตำแหน่งสไลด์ปัจจุบัน เริ่มจาก 0 (สไลด์แรก)
        let currentSlide = 0;

        // สร้างฟังก์ชันสำหรับอัปเดตการแสดงผลของสไลด์ทั้งหมด
        function updateSlides() {
            // วนลูปสไลด์ทุกอัน
            slides.forEach((slide, index) => {
                // ลบคลาสสถานะทั้งหมดออกก่อน
                slide.classList.remove('active', 'prev', 'next');
                // ตรวจสอบตำแหน่งของสไลด์แต่ละอันเทียบกับ currentSlide
                if (index === currentSlide) {
                    // ถ้าเป็นสไลด์ปัจจุบัน ให้เพิ่มคลาส 'active'
                    slide.classList.add('active');
                } else if (index === (currentSlide - 1 + slides.length) % slides.length) {
                    // ถ้าเป็นสไลด์ "ก่อนหน้า" ให้เพิ่มคลาส 'prev'
                    // (% slides.length ใช้เพื่อให้วนกลับไปสไลด์สุดท้ายเมื่ออยู่ที่สไลด์แรก)
                    slide.classList.add('prev');
                } else if (index === (currentSlide + 1) % slides.length) {
                    // ถ้าเป็นสไลด์ "ถัดไป" ให้เพิ่มคลาส 'next'
                    slide.classList.add('next');
                }
            });
        }

        // เพิ่ม Event Listener ให้ปุ่ม 'Next'
        nextBtn.addEventListener('click', () => {
            // เมื่อคลิก ให้เลื่อนไปยังสไลด์ถัดไป (วนกลับไป 0 เมื่อถึงสไลด์สุดท้าย)
            currentSlide = (currentSlide + 1) % slides.length;
            // เรียกใช้ฟังก์ชันเพื่ออัปเดตการแสดงผล
            updateSlides();
        });

        // เพิ่ม Event Listener ให้ปุ่ม 'Prev'
        prevBtn.addEventListener('click', () => {
            // เมื่อคลิก ให้ย้อนกลับไปสไลด์ก่อนหน้า
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            // เรียกใช้ฟังก์ชันเพื่ออัปเดตการแสดงผล
            updateSlides();
        });

        // เรียกใช้ฟังก์ชัน updateSlides() ครั้งแรกเมื่อโหลดหน้าเว็บเสร็จ
        // เพื่อตั้งค่าการแสดงผลของสไลด์เริ่มต้นให้ถูกต้อง
        updateSlides();
    </script>
</body>
</html>