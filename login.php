<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sunshine Center</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="icon" href="logo.png">
    <style>
    body.body-login {
        background: #fff;
        /* Đổi nền trang thành màu trắng */
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .login {
        background-color: white;
        padding: 30px 40px;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 400px;
    }

    h3 {
        color: #0d6efd;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .btn-primary {
        background-color: #0d6efd;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .form-label {
        color: #333;
    }

    .alert-danger {
        font-size: 0.9rem;
    }

    .text-light {
        font-size: 0.9rem;
        margin-top: 20px;
    }

    .black-fill {
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .password-field {
        position: relative;
    }

    .password-field input[type="password"] {
        padding-right: 40px;
        /* Tăng khoảng cách bên phải để icon không bị chồng lên */
    }

    .password-field .show-password {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        cursor: pointer;
        color: #0d6efd;
    }
    </style>
</head>

<body class="body-login">
    <div class="black-fill">
        <div class="d-flex justify-content-center align-items-center flex-column">
            <form class="login" method="post" action="req/login.php">

                <div class="text-center mb-3">
                    <img src="logo.png" width="80" alt="Logo">
                </div>
                <h3 class="text-center">Sunshine Login</h3>

                <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_GET['error'] ?>
                </div>
                <?php } ?>

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="uname" required>
                </div>

                <div class="mb-3 password-field">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass" required id="password">
                    <span class="show-password" onclick="togglePassword()">👁️</span> <!-- Show password icon -->
                </div>

                <div class="mb-4">
                    <label class="form-label">Login As</label>
                    <select class="form-control" name="role" required>
                        <option value="1">Admin</option>
                        <option value="3">Student</option>
                        <option value="2">Teacher</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
                <div class="text-center mt-3">
                    <a href="index.php" class="text-decoration-none text-primary">&larr; Back to Home</a>
                </div>
            </form>

            <div class="text-center text-light">
                Copyright &copy; 2024 Sunshine English Center. All rights reserved.
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function togglePassword() {
        var passwordField = document.getElementById('password');
        var passwordIcon = document.querySelector('.show-password');
        if (passwordField.type === "password") {
            passwordField.type = "text";
            passwordIcon.textContent = "🙈";
        } else {
            passwordField.type = "password";
            passwordIcon.textContent = "👁️";
        }
    }
    </script>
</body>

</html>