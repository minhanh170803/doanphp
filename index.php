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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #fefefe;
            }

            .header {
                background: #fdc830;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                padding: 10px 30px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: sticky;
                top: 0;
                z-index: 999;
            }

            .header .logo img {
                height: 60px;
            }

            .nav ul {
                list-style: none;
                display: flex;
                gap: 30px;
                margin: 0;
                padding: 0;
            }

            .nav a {
                color: #0d6efd;
                text-decoration: none;
                font-weight: 600;
                transition: color 0.3s;
            }

            .nav a:hover {
                color: #fdc830;
            }

            .btn-login {
                background-color: #fdc830;
                color: white;
                padding: 8px 16px;
                border-radius: 30px;
                font-weight: bold;
                text-decoration: none;
            }

            .hero {
                background: url('static/img/image/banner-hero.jpg') no-repeat center center/cover;
                color: white;
                text-align: center;
                padding: 120px 20px 100px;
                position: relative;
            }

            .hero::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                z-index: 1;
            }

            .hero .container {
                position: relative;
                z-index: 2;
            }

            .hero h2 {
                font-size: 3rem;
                font-weight: bold;
                margin-bottom: 20px;
            }

            .hero p {
                font-size: 1.2rem;
                margin-bottom: 30px;
            }

            .btn {
                background-color: #0d6efd;
                color: white;
                padding: 12px 24px;
                border: none;
                border-radius: 30px;
                text-decoration: none;
                font-weight: bold;
            }

            .section-title {
                text-align: center;
                font-size: 2.2rem;
                font-weight: bold;
                margin-bottom: 40px;
                color: #0d6efd;
            }

            .about img {
                border-radius: 15px;
            }

            .course-list {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 25px;
            }

            .course {
                padding: 25px;
                background: #fff;
                border-radius: 15px;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
                transition: transform 0.3s;
            }

            .course:hover {
                transform: translateY(-10px);
            }

            .course h3 {
                color: #0d6efd;
                font-weight: bold;
            }

            .activities {
                text-align: center;
            }

            .activities .swiper {
                width: 100%;
                padding: 20px 60px;
            }

            .activities .swiper-slide {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                height: 100%;
                padding: 10px;
                background: #fff;
                border-radius: 10px;
                overflow: hidden;
                transition: transform 0.3s ease;
            }

            .activities .swiper-slide img {
                width: 100%;
                height: 220px;
                object-fit: cover;
                border-radius: 10px;
            }

            .activities .swiper-slide figcaption {
                font-size: 1rem;
                color: #0d6efd;
                font-weight: bold;
                padding-top: 10px;
                text-align: center;
            }

            .swiper-button-next,
            .swiper-button-prev {
                color: #0d6efd;
                width: 40px;
                height: 40px;
                top: 50%;
                transform: translateY(-50%);
                background-color: rgba(255, 255, 255, 0.8);
                border-radius: 50%;
            }

            .swiper-button-prev {
                left: 10px;
            }

            .swiper-button-next {
                right: 10px;
            }

            .footer {
                background: #fdc830;
                color: #000;
                /* ✅ Màu đen */
                padding: 40px 20px;
            }

            .footer-grid {
                display: flex;
                flex-wrap: wrap;
                gap: 40px;
                justify-content: space-between;
            }

            .footer-section {
                flex: 1;
                max-width: 300px;
            }

            .footer-section h4 {
                color: #0d6efd;
                margin-bottom: 15px;
            }

            .social-icons a {
                color: #0d6efd;
                display: inline-block;
                margin-right: 15px;
                font-size: 1rem;
                transition: transform 0.3s;
            }

            .social-icons a:hover {
                transform: scale(1.1);
            }

            .social-icons img {
                width: 20px;
                height: 20px;
            }

            .footer-section p {
                font-size: 0.9rem;
                line-height: 1.5;
            }

            .footer .text-center {
                margin-top: 30px;
                font-size: 0.9rem;
            }
        </style>

    </head>

    <body>
        <header class="header">
            <div class="logo">
                <img src="logo.png" alt="Logo Sunshine">
            </div>
            <nav class="nav d-flex align-items-center">
                <ul>
                    <li><a href="#about">Giới thiệu</a></li>
                    <li><a href="#courses">Khóa học</a></li>
                    <li><a href="#activities">Hoạt động</a></li>
                </ul>
                <a href="login.php" id="login-button" class="btn-login ms-4">Đăng nhập</a>
            </nav>
        </header>

        <section id="hero" class="hero">
            <div class="container">
                <img src="img/herosunshine.jpg" alt="Hero Image" class="img-fluid mb-4"
                    style="border-radius: 15px; max-height: 400px; object-fit: cover;">
                <h2><?= $setting['slogan'] ?></h2>
                <p>Tham gia <?= $setting['school_name'] ?> và bắt đầu hành trình chinh phục tiếng Anh của bạn.</p>
                <a href="#courses" class="btn">Khám phá khóa học</a>
            </div>
        </section>

        <section id="about" class="about py-5">
            <div class="container">
                <h2 class="section-title" data-aos="fade-up">Về chúng tôi</h2>
                <div class="row align-items-center">
                    <div class="col-md-6" data-aos="fade-right">
                        <img src="img/2.jpg" alt="Giới thiệu" class="img-fluid">
                    </div>
                    <div class="col-md-6" data-aos="fade-left">

                        <ul>
                            <li>Tiếng Anh Mầm non, Tiểu học, Trung học</li>
                            <li>Tiếng Anh giao tiếp cho gia đình</li>
                        </ul>
                        <p>Cùng <?= $setting['school_name'] ?>, chinh phục tiếng Anh dễ dàng và hiệu quả nhé!</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="courses" class="courses py-5 bg-light">
            <div class="container">
                <h2 class="section-title" data-aos="fade-up">Các khóa học</h2>
                <div class="course-list">
                    <div class="course" data-aos="zoom-in">
                        <h3>Tiếng Anh Mầm non</h3>
                        <p>Giúp các bé làm quen với tiếng Anh thông qua các hoạt động vui chơi và học tập thú vị.</p>
                    </div>
                    <div class="course" data-aos="zoom-in">
                        <h3>Tiếng Anh Tiểu học</h3>
                        <p>Củng cố nền tảng tiếng Anh với từ vựng và ngữ pháp cơ bản cho học sinh tiểu học.</p>
                    </div>
                    <div class="course" data-aos="zoom-in">
                        <h3>Tiếng Anh Trung học</h3>
                        <p>Phát triển kỹ năng ngôn ngữ toàn diện để chuẩn bị cho các kỳ thi quan trọng.</p>
                    </div>
                    <div class="course" data-aos="zoom-in">
                        <h3>Tiếng Anh cho Gia đình</h3>
                        <p>Các lớp học linh hoạt, phù hợp cho cả gia đình cùng tham gia học tập và nâng cao trình độ.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="activities" class="activities py-5">
            <div class="container">
                <h2 class="section-title" data-aos="fade-up">Hoạt động nổi bật</h2>
                <div class="swiper">
                    <!-- ✅ sửa từ swiper-container thành swiper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure>
                                <img src="img/3.jpg" alt="Trại hè Sunshine Summer Camp 2025">
                                <figcaption>Trại hè Sunshine Summer Camp 2024</figcaption>
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="img/trongcay2.jpg" alt="Trồng cây">
                                <figcaption>Tập cho các bé trồng cây</figcaption>
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="img/rcv1.jpg" alt="Rung chuông vàng 2024">
                                <figcaption>Rung chuông vàng 2024</figcaption>
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="img/rcv2.jpg" alt="Rung chuông vàng 2024">
                                <figcaption>Rung chuông vàng 2024</figcaption>
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="img/games.jpg" alt="Trò chơi tiếng Anh">
                                <figcaption>Trò chơi tiếng Anh</figcaption>
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="img/ngoaikhoa.jpg" alt="Ngoại khóa">
                                <figcaption>Ngoại khóa</figcaption>
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="img/trungthu-2023.jpg" alt="Trung thu 2023">
                                <figcaption>Trung thu 2023</figcaption>
                            </figure>
                        </div>
                    </div>

                    <!-- Nút điều hướng -->
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
                        <img src="img/logo.png" alt="Logo Sunshine" width="80">

                        <div class="social-icons">
                            <a href="https://www.facebook.com/Sunshineclubkt" target="_blank">
                                <img src="img/facebook.png" alt="Facebook">
                            </a>
                            <a href="https://www.youtube.com/@sunshineenglishcenterkt8872" target="_blank">
                                <img src="img/Youtube_logo.png" alt="YouTube">
                            </a>
                        </div>
                    </div>
                    <div class="footer-section">
                        <h4 style="color: black;">Liên hệ</h4>
                        <p>Cơ sở 1: 233/3 Thi Sách, tổ 6, P. Thắng Lợi, TP. Kon Tum</p>
                        <p>Cơ sở 2: 132 Phạm Văn Đồng, P. Lê Lợi, TP. Kon Tum</p>
                        <p>Hotline: 0902366062</p>
                        <p>Email: sunshinektcenter01@gmail.com</p>
                    </div>
                </div>
                <p class="text-center mt-3" style="color: black;">&copy; <?= $setting['current_year'] ?>
                    <?= $setting['school_name'] ?>. All rights reserved.</p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
        <script>
            const swiper = new Swiper('.swiper', {
                loop: true,
                // autoplay: {
                //     delay: 3000,
                //     disableOnInteraction: false
                // },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                slidesPerView: 3,
                spaceBetween: 30,
                breakpoints: {
                    0: {
                        slidesPerView: 1
                    },
                    768: {
                        slidesPerView: 2
                    },
                    992: {
                        slidesPerView: 3
                    }
                }
            });


            AOS.init();
        </script>
    </body>

    </html>
<?php } else {
    header("Location: login.php");
    exit;
} ?>