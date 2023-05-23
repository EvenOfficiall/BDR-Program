<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransConnect</title>
    <link rel="shortcut icon" href="./assets/images/logo-page.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/menu.css">
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
                <h2>Ласкаво просимо на TransConnect</h2>
                <div class="service-card">
                    <h3>Вантажні перевезення</h3>
                    <p>Натисніть на кнопку "Додати вантаж", щоб додати новий вантаж.<br>Натисніть на кнопку "Пропозиції", щоб переглянути всі актуальні пропозиції.</p>
                    <a href="cargo-create.php" class="cta-button">ДОДАТИ ВАНТАЖ</a>
                    <a href="cargo-table.php" class="cta-button">ПРОПОЗИЦІЇ</a>
                </div>
                <div class="service-card">
                    <h3>Пассажирські перевезення</h3>
                    <p>Натисніть на кнопку "Додати поїздку", щоб додати нову поїздку.<br>Натисніть на кнопку "Пропозиції", щоб переглянути всі актуальні пропозиції.</p>
                    <a href="companion-create.php" class="cta-button">ДОДАТИ ПОЇЗДКУ</a>
                    <a href="companion-table.php" class="cta-button">ПРОПОЗИЦІЇ</a>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <p>&copy; 2023 TransConnect. Всі права захищені.</p>
                <ul class="footer-links">
                    <!-- <li><a href="#">Головна</a></li> -->
                    <li><a href="./profile.php">Профіль(<?= $_SESSION['user']['name'] ?>)</a></li>
                    <li><a href="./assets/db/log-out.php">Вийти</a></li>
                </ul>
            </div>
        </footer>
    </div>
</body>
</html>