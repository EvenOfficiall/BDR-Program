<?php 
    session_start();
    require_once '../db/connect.php';

    $cargo_id = $_GET['id'];
    $companion_id = $_GET['id'];

    $cargo = mysqli_query($connect, "SELECT * FROM `cargo` WHERE `id` = '$cargo_id'");
    $cargo = mysqli_fetch_assoc($cargo);

    $companion = mysqli_query($connect, "SELECT * FROM `companion` WHERE `id` = '$companion_id'");
    $companion = mysqli_fetch_assoc($companion);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransConnect</title>
    <link rel="shortcut icon" href="./assets/images/logo-page.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/cagro-create.css">
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
                    <li><a href="./admin-panel.php">Панель управління</a></li>
                    <li><a href="./profile.php">Профіль(<?= $_SESSION['user']['name'] ?>)</a></li>
                    <li><a href="./assets/db/log-out.php">Вийти</a></li>
                </ul>
            </nav>
        </header>

        <section class="creation">
            <div class="container">
                <h2>Редагування послуги</h2>
                <div class="creation-block">
                    <form action="../db/update-cargo-script.php" method="post" class="creation-form" data-netlify="true">

                        <input type="hidden" name="id" value="<?= $cargo['id'] ?>">

                        <div class="creation-form-field">
                            <label class="creation-form-name">Дата</label>
                            <input type="date" class="creation-form-input" name="date" value="<?= $cargo['date'] ?>">
                        </div>

                        <div class="creation-form-field">
                            <label class="creation-form-name">Звідки</label>
                            <input type="text" class="creation-form-input" name="from_where" value="<?= $cargo['from_where'] ?>">
                        </div>

                        <div class="creation-form-field">
                            <label class="creation-form-name">Куди</label>
                            <input type="text" class="creation-form-input" name="to_where" value="<?= $cargo['to_where'] ?>">
                        </div>

                        <div class="creation-form-field">
                            <label class="creation-form-name">Інформація</label>
                            <p5>тип автомобіля/причіпа, назва вантажу, вага вантажу</p5>
                            <input type="textarea" class="creation-form-input" name="info" value="<?= $cargo['info'] ?>">
                        </div>

                        <div class="creation-form-field">
                            <label class="creation-form-name">Ціна</label>
                            <input type="text" class="creation-form-input" name="price" value="<?= $cargo['price'] ?>">
                        </div>

                        <div class="creation-form-field">
                            <label class="creation-form-name">Контакти</label>
                            <p5>ім'я, пошта, телефон (по бажанню)</p5>
                            <input type="textarea" class="creation-form-input" name="contacts" value="<?= $cargo['contacts'] ?>">
                        </div>

                        <button class="creation-form-btn" id="launch-btn" type='submit'>ЗМІНИТИ</button>

                    </form>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <p>&copy; 2023 TransConnect. Всі права захищені.</p>
                <ul class="footer-links">
                    <li><a href="./admin-panel.php">Панель управління</a></li>
                    <li><a href="./profile.php">Профіль(<?= $_SESSION['user']['name'] ?>)</a></li>
                    <li><a href="./assets/db/log-out.php">Вийти</a></li>
                </ul>
            </div>
        </footer>
    </div>
</body>
</html>