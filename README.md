Showcase: User Registration & Login System
โปรเจกต์นี้เป็นเว็บไซต์ Showcase สำหรับสาธิตระบบสมาชิกพื้นฐาน สร้างขึ้นด้วย PHP และ MySQL สำหรับฝั่ง Back-End และใช้ HTML, CSS, JavaScript สำหรับฝั่ง Front-End

✨ คุณสมบัติหลัก (Features)
ระบบสมาชิก:
สมัครสมาชิก (Register)
เข้าสู่ระบบ (Login)
ออกจากระบบ (Logout)
หน้าแสดงสินค้า: หน้าหลักสำหรับแสดงรายการสินค้า (Mock-up)
หน้าข้อมูลผู้พัฒนา: แสดงรายละเอียดเกี่ยวกับเทคโนโลยีที่ใช้ในโปรเจกต์
ดีไซน์: ออกแบบให้ดูสะอาดตาและรองรับการแสดงผลบนหน้าจอขนาดเล็ก (Responsive) ในบางส่วน

💻 เทคโนโลยีที่ใช้ (Technology Stack)
Front-End: HTML5, CSS3, JavaScript
Back-End: PHP
Database: MySQL
Local Server: XAMPP (Apache & MySQL)

🚀 วิธีการติดตั้งและใช้งาน (Installation)
คุณจะต้องมีโปรแกรม XAMPP ติดตั้งบนเครื่องคอมพิวเตอร์ของคุณก่อน

ขั้นตอนที่ 1: เตรียมไฟล์โปรเจกต์
ดาวน์โหลดหรือ Clone โปรเจกต์นี้ลงบนเครื่องของคุณ
นำโฟลเดอร์โปรเจกต์ทั้งหมดไปวางไว้ในไดเรกทอรี htdocs ของ XAMPP
ตำแหน่งตัวอย่าง: C:/xampp/htdocs/TShowcaseRegisterLogin

ขั้นตอนที่ 2: ตั้งค่าฐานข้อมูล (Database)
เปิดโปรแกรม XAMPP Control Panel และกด Start ที่โมดูล Apache และ MySQL
เปิดเว็บเบราว์เซอร์แล้วเข้าไปที่ http://localhost/phpmyadmin/
สร้างฐานข้อมูลใหม่ โดยคลิกที่แท็บ Databases และตั้งชื่อฐานข้อมูลว่า showcaseregisterlogin จากนั้นกด Create
เลือกฐานข้อมูล showcaseregisterlogin ที่เพิ่งสร้าง แล้วไปที่แท็บ SQL
คัดลอกโค้ด SQL ที่ไฟล์ชื่อว่า SQL เปิดโปรแกรม HeidiSQL ขึ้นมาแล้ว วางโค๊ดที่คัดลองแล้วกด Run ที่เป็นรูปสามเหลี่ยมสีฟ้า / เพื่อสร้างตาราง users

ตัวอย่าง: http://localhost/PHP-Showcase-Login-Register-main/index.php
ตอนนี้คุณสามารถทดลองสมัครสมาชิกและเข้าสู่ระบบได้แล้ว!
📁 โครงสร้างไฟล์ (File Structure)
/PHP-Showcase-Login-Register-main
├── Banner/                 # โฟลเดอร์เก็บรูปภาพ Banner
├── Product/                # โฟลเดอร์เก็บรูปภาพสินค้า
├── css/
│   ├── style.css           # สไตล์ชีทหลักของเว็บ
│   └── auth.css            # สไตล์ชีทสำหรับหน้า Login/Register
├── db_connect.php          # ไฟล์เชื่อมต่อฐานข้อมูล
├── index.php               # หน้าหลัก (แสดงสินค้า)
├── develop.php             # หน้าข้อมูลผู้พัฒนา
├── login.php               # หน้าฟอร์มล็อกอิน
├── login_process.php       # สคริปต์ xử lý การล็อกอิน
├── register.php            # หน้าฟอร์มสมัครสมาชิก
├── register_process.php    # สคริปต์ xử lý การสมัครสมาชิก
├── logout.php              # สคริปต์สำหรับออกจากระบบ
└── README.md               # ไฟล์ที่คุณกำลังอ่านอยู่

👤 ผู้จัดทำ
Theerapat Sisongnang - (Theerapat_SsnThee)