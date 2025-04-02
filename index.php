<?php
include "DB_connection.php";
include "data/setting.php";
$setting = getSetting($conn);
if ($setting != 0) {
?>
    <!DOCTYPE html>
    <html lang="vi">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $setting['school_name'] ?> - Trang chủ</title>
        <link rel="stylesheet" href="css/homepage-style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    </head>

    <body>
        <header class="header">
            <div class="logo">
                <img src="logo.png" alt="Logo Sunshine" width="150" height="150">
                <h1><?= $setting['school_name'] ?></h1>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="#about">Giới thiệu</a></li>
                    <li><a href="#courses">Khóa học</a></li>
                    <li><a href="#activities">Hoạt động</a></li>
                </ul>
                <a href="login.php" id="login-button" class="btn-login">Đăng nhập</a>
            </nav>
        </header>

        <section id="hero" class="hero">
            <div class="container">
                <img src="logo.png" alt="Học tiếng Anh" class="hero-image">
                <h2><?= $setting['slogan'] ?></h2>
                <p>Tham gia <?= $setting['school_name'] ?> và bắt đầu hành trình chinh phục tiếng Anh của bạn.</p>
                <a href="#courses" class="btn">Khám phá khóa học</a>
            </div>
        </section>

        <section id="about" class="about">
            <div class="container">
                <img src="static/img/image/about_us.jpg" alt="Giới thiệu về chúng tôi">
                <div class="about-text">
                    <h2>Về chúng tôi</h2>
                    <p><?= $setting['about'] ?></p>
                    <ul>
                        <li>Tiếng Anh Mầm non, Tiểu học, Trung học</li>
                        <li>Tiếng Anh giao tiếp cho gia đình</li>
                    </ul>
                    <p>Cùng <?= $setting['school_name'] ?>, chinh phục tiếng Anh dễ dàng và hiệu quả nhé!</p>
                </div>
            </div>
        </section>

        <section id="courses" class="courses">
            <div class="container">
                <h2>Các khóa học</h2>
                <div class="course-list">
                    <div class="course toddler">
                        <h3>Tiếng Anh Mầm non</h3>
                        <p>Giúp các bé làm quen với tiếng Anh thông qua các hoạt động vui chơi và học tập thú vị.</p>
                    </div>
                    <div class="course primary">
                        <h3>Tiếng Anh Tiểu học</h3>
                        <p>Củng cố nền tảng tiếng Anh với từ vựng và ngữ pháp cơ bản cho học sinh tiểu học.</p>
                    </div>
                    <div class="course secondary">
                        <h3>Tiếng Anh Trung học</h3>
                        <p>Phát triển kỹ năng ngôn ngữ toàn diện để chuẩn bị cho các kỳ thi quan trọng.</p>
                    </div>
                    <div class="course family">
                        <h3>Tiếng Anh cho Gia đình</h3>
                        <p>Các lớp học linh hoạt, phù hợp cho cả gia đình cùng tham gia học tập và nâng cao trình độ.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="activities" class="activities">
            <div class="container">
                <h2>Các hoạt động của trung tâm</h2>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="static/img/image/rcv-2024.JPG" alt="Hoạt động ngoại khóa"></div>
                        <div class="swiper-slide"><img src="static/img/image/trungthu-2023.jpg" alt="Cuộc thi hùng biện">
                        </div>
                        <div class="swiper-slide"><img src="static/img/image/rcv1.JPG" alt="Sự kiện gia đình"></div>
                        <div class="swiper-slide"><img src="static/img/image/rcv2.JPG" alt="Trại hè Anh ngữ"></div>
                        <div class="swiper-slide"><img src="static/img/image/games.jpg" alt="Trò chơi tiếng Anh"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="footer-grid">
                    <div class="footer-section">
                        <img src="static/img/image/logosunshine.jpg" alt="Logo Sunshine" width="80">
                        <h4>Mạng xã hội:</h4>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/Sunshineclubkt" target="_blank"><img
                                    src="static/img/image/facebook-icon.png" alt="Facebook"></a>
                            <a href="https://www.youtube.com/@sunshineenglishcenterkt8872" target="_blank"><img
                                    src="static/img/image/youtube-icon.png" alt="YouTube"></a>
                        </div>
                    </div>
                    <div class="footer-section">
                        <h4>Liên hệ</h4>
                        <p>Cơ sở 1: 233/3 Thi Sách, tổ 6, P. Thắng Lợi, TP. Kon Tum</p>
                        <p>Cơ sở 2: 132 Phạm Văn Đồng, P. Lê Lợi, TP. Kon Tum</p>
                        <p>Hotline: 0902366062</p>
                        <p>Email: sunshinektcenter01@gmail.com</p>
                    </div>
                </div>
                <p>&copy; <?= $setting['current_year'] ?> <?= $setting['school_name'] ?>. All rights reserved.</p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
            const swiper = new Swiper('.swiper-container', {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                }
            });
        </script>
    </body>

    </html>
<?php } else {
    header("Location: login.php");
    exit;
} ?>