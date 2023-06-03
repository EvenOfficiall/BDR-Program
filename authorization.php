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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransConnect</title>
    <link rel="shortcut icon" href="./assets/images/logo-page.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/authorization.css">
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
                    <li><a href="./about-us.html">Про нас</a></li>
                    <li><a href="./authorization.php">Увійти</a></li>
                </ul>
            </nav>
        </header>

        <section class="login">
            <div class="container">
                <h2>Вхід</h2>
                <div class="login-block">
                    <form action="./assets/db/log-in.php" method="post" class="login-form" data-netlify="true" id="form">

                        <div class="login-form-field">
                            <label for="user-email" class="login-form-name">Пошта</label>
                            <input type="email" class="login-form-input" id="user-email" name="email">
                        </div>

                        <div class="login-form-field">
                            <label for="user-password" class="login-form-name">Пароль</label>
                            <input type="password" class="login-form-input" id="user-pass" name="password">
                        </div>

                        <button class="login-form-btn" id="launch-btn" type='submit'>УВІЙТИ</button>
                        
                        <p>У вас немає акаунту? - <a class='question-link' href="./registration.php">Зареєструйтесь!</a></p>

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
                    <li><a href="#">Про нас</a></li>
                    <li><a href="./authorization.php">Увійти</a></li>
                </ul>
            </div>
        </footer>
    </div>
</body>
</html>