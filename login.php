<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

// Prevent caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TechInnovate Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <style>
        body {
            background-image:url('images/ww.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 20px 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .logo {
            max-width: 100px;
            min-width:70px;
            margin-bottom: 20px;
        }
        .main-content {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">
            <a class="navbar-brand" href="#">TechInnovate Solutions</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="login.php" aria-current="page">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="form-container mt-2">
                        <div class="text-center mb-1">
                            <img src="images/Symbol.svg.svg" alt="TechInnovate Solutions Logo" class="logo">
                            <h2>TechInnovate Solutions</h2>
                        </div>
                        <div id="loginForm">
                            <h3 class="text-center mb-2">Login</h3>
                            <form id="loginFormElement">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-warning w-100">Login</button>
                            </form>
                            <p class="mt-3 text-center">Don't have an account? <a href="#" id="showRegister">Register here</a></p>
                            <div id="message" class="mt-3"></div>
                        </div>
                        <div id="registerForm" style="display: none;">
                            <h3 class="text-center mb-1">Register</h3>
                            <form id="registerFormElement">
                                <div class="mb-1">
                                    <label for="registerUsername" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="registerUsername" name="registerUsername" required>
                                </div>
                                <div class="mb-1">
                                    <label for="registerEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="registerEmail" name="registerEmail" required>
                                </div>
                                <div class="mb-1">
                                    <label for="registerPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="registerPassword" name="registerPassword" required>
                                </div>
                                <div class="mb-2">
                                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                                </div>
                                <button type="submit" class="btn btn-warning w-100">Register</button>
                            </form>
                            <p class="mt-3 text-center">Already have an account? <a href="#" id="showLogin">Login here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('loginFormElement').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);

            fetch('auth.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                if (data === 'success') {
                    document.getElementById('message').innerHTML = '<div class="alert alert-success">Login successful. Redirecting to dashboard in 3 seconds...</div>';
                    setTimeout(() => {
                        window.location.href = 'dashboard.php';
                    }, 3000);
                } else {
                    document.getElementById('message').innerHTML = `<div class="alert alert-danger">${data}</div>`;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('message').innerHTML = '<div class="alert alert-danger">An error occurred. Please try again.</div>';
            });
        });

        document.getElementById('showRegister').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('loginForm').style.display = 'none';
            document.getElementById('registerForm').style.display = 'block';
        });

        document.getElementById('showLogin').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('registerForm').style.display = 'none';
            document.getElementById('loginForm').style.display = 'block';
        });

        document.getElementById('registerFormElement').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            formData.append('action', 'register');

            fetch('auth.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                if (data.includes('successful')) {
                    document.getElementById('message').innerHTML = '<div class="alert alert-success">Registration successful. Redirecting to dashboard in 3 seconds...</div>';
                    this.reset();
                    document.getElementById('registerForm').style.display = 'none';
                    document.getElementById('loginForm').style.display = 'block';
                    setTimeout(() => {
                        window.location.href = 'dashboard.php';
                    }, 3000);
                } else {
                    document.getElementById('message').innerHTML = `<div class="alert alert-danger">${data}</div>`;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('message').innerHTML = '<div class="alert alert-danger">An error occurred. Please try again.</div>';
            });
        });
    </script>
</body>
</html>

