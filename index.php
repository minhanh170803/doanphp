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
    <title><?= $setting['school_name'] ?> - Trang chính thức</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        color: #333;
    }

    nav {
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .hero {
        background: linear-gradient(to right, #004aad, #1597e5);
        color: white;
        padding: 100px 0;
        text-align: center;
    }

    .section {
        padding: 60px 0;
    }

    .section h2 {
        font-weight: 600;
        margin-bottom: 20px;
    }

    footer {
        background: #222;
        color: #ccc;
        padding: 20px 0;
        text-align: center;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #004aad;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <img src="logo.png" width="40" class="me-2">
                <?= $setting['school_name'] ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Giới thiệu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Liên hệ</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Đăng nhập</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero" id="home">
        <div class="container">
            <h1 class="display-4 fw-bold">Chào mừng đến với <?= $setting['school_name'] ?></h1>
            <p class="lead">Hệ thống quản lý trường học toàn diện</p>
        </div>
    </section>

    <section class="section" id="about">
        <div class="container text-center">
            <h2>Giới thiệu</h2>
            <p><?= $setting['school_name'] ?> là nền tảng hiện đại giúp quản lý học sinh, giáo viên, lớp học và các hoạt
                động nhà trường một cách hiệu quả.</p>
        </div>
    </section>

    <section class="section bg-light" id="contact">
        <div class="container">
            <h2 class="text-center mb-4">Liên hệ</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="send_message.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Nội dung</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi liên hệ</button>
                    </form>

    </section>

    <footer>
        <div class="container">
            <p>&copy; <?= date('Y') ?> <?= $setting['school_name'] ?>. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php } ?>