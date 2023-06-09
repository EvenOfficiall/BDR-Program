<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: menu.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransConnect</title>
    <link rel="shortcut icon" href="./assets/images/logo-page.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/registration.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap">
    <script src="script.js"></script>
</head>

<body>
    <div class="containter">
        <header>
            <nav>
                <div class="logo">
                    <a href="./main-page.html">TransConnect</a>
                </div>
                <ul class="nav-links">
                    <li><a href="./about-us.php">Про нас</a></li>
                    <li><a href="./authorization.php">Увійти</a></li>
                </ul>
            </nav>
        </header>

        <section class="registration">
            <div class="container">
                <h2>Реєстрація</h2>
                <div class="registration-block">
                    <form action="/assets/db/sign-up.php" method="post" class="registration-form" data-netlify="true" id="form">
                        <div class="registration-form-field">
                            <label for="user-name" class="registration-form-name">Ім’я</label>
                            <input type="text" class="registration-form-input" id="user-name" name="name">
                        </div>
                        <div class="registration-form-field">
                            <label for="user-email" class="registration-form-name">Пошта</label>
                            <input type="email" class="registration-form-input" id="user-email" name="email">
                        </div>
                        <div class="registration-form-field">
                            <label for="user-password" class="registration-form-name">Пароль</label>
                            <input type="password" class="registration-form-input" id="user-pass" name="password">
                        </div>
                        <div class="registration-form-field">
                            <label for="user-confirm-pass" class="registration-form-name">Підтвердіть пароль</label>
                            <input type="password" class="registration-form-input" id="user-confirm-pass" name="password_confirm">
                        </div>
                        <button class="registration-form-btn" id="launch-btn" type='submit'>РЕЄСТРАЦІЯ</button>
                        
                        <?php 
                            if ($_SESSION['message']) {
                                echo '<p class="message"> ' . $_SESSION['message'] . ' </p>';
                            }
                            unset($_SESSION['message']);
                        ?>

                    </form>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <p>&copy; 2023 TransConnect. Всі права захищені.</p>
                <ul class="footer-links">
                    <li><a href="./about-us.html">Про нас</a></li>
                    <li><a href="./authorization.php">Увійти</a></li>
                </ul>
            </div>
        </footer>
    </div>
</body>
</html>