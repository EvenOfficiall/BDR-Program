<?php 
    session_start();
    require_once './assets/db/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransConnect</title>
    <link rel="shortcut icon" href="./assets/images/logo-page.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/profile.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap">
    <script src="script.js"></script>
</head>

<body>
    <div class="containter">
        <header>
            <nav>
                <div class="logo">
                    <a href="./menu.php">TransConnect</a>
                </div>
                <ul class="nav-links">
                    <!-- <li><a href="./main-page.html">Головна</a></li> -->
                    <li><a href="./profile.php">Профіль(<?= $_SESSION['user']['name'] ?>)</a></li>
                    <li><a href="./assets/db/log-out.php">Вийти</a></li>
                </ul>
            </nav>
        </header>

        <section class="services">
            <div class="container">
                <h2>Привіт, <?= $_SESSION['user']['name'] ?></h2>
                <div class="service-card">
                    <h3>Персональна інформація</h3>
                    <div class='profile-info-block'>
                        <p class="profile-info"><b>Ім'я: </b><?= $_SESSION['user']['name'] ?></p>
                        <p class="profile-info"><b>Пошта: </b><?= $_SESSION['user']['email'] ?></p>
                    </div>
                </div>
                <div class="service-card">
                    <h3>Змінити пошту</h3>
                    <form action="./assets/db/change-email.php" method="post" class="change-form" data-netlify="true" id="form">
                        <input type="hidden", name="id", value="<?= $_SESSION['user']['id'] ?>">
                        <div class="change-field">
                            <label class="change-name">Стара пошта</label>
                            <input type="email" class="change-input" name="old_email">
                        </div>
                        <div class="change-field">
                            <label class="change-name">Нова пошта</label>
                            <input type="email" class="change-input" name="new_email">
                        </div>
                        <button class="change-btn" type='submit'>ЗМІНИТИ ПОШТУ</button>
                        <?php 
                            if ($_SESSION['message']) {
                                echo '<p class="message"> ' . $_SESSION['message'] . ' </p>';
                            }
                            unset($_SESSION['message']);
                        ?>
                    </form>
                </div>
                <div class="service-card">
                    <h3>Змінити пароль</h3>
                    <form action="#" method="post" class="change-form" data-netlify="true" id="form">
                        <div class="change-field">
                            <label class="change-name">Старий пароль</label>
                            <input type="email" class="change-input" name="old_password">
                        </div>
                        <div class="change-field">
                            <label class="change-name">Новий пароль</label>
                            <input type="email" class="change-input" name="new_password">
                        </div>
                        <button class="change-btn" type='submit'>ЗМІНИТИ ПАРОЛЬ</button>
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
                    <!-- <li><a href="#">Головна</a></li> -->
                    <li><a href="./profile.php">Профіль</a></li>
                    <li><a href="./assets/db/log-out.php">Вийти</a></li>
                </ul>
            </div>
        </footer>
    </div>
</body>
</html>