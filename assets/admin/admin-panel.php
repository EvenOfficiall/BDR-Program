<?php 
    session_start();
    require_once '../db/connect.php';

    $pr
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransConnect</title>
    <link rel="shortcut icon" href="./assets/images/logo-page.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/admin-panel.css">
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
                    <li><a href="../../profile.php">Профіль(<?= $_SESSION['user']['name'] ?>)</a></li>
                    <li><a href="../db/log-out.php">Вийти</a></li>
                </ul>
            </nav>
        </header>

        <section class="table-section">
            <div class="container">
            <h2>Актуальні пропозиції (Вантажі)</h2>
                <table class="table-card">
                    <tr>
                        <th>Дата</th>
                        <th>Звідки</th>
                        <th>Куди</th>
                        <th>Інформація</th>
                        <th>Ціна</th>
                        <th>Контакти</th>
                        <th colspan="2">Додаткові функції</th>
                    </tr>

                    <?php
                        $cargo = mysqli_query($connect, "SELECT * FROM `cargo` ORDER BY `cargo`.`id` DESC");
                        $cargo = mysqli_fetch_all($cargo);
                        foreach ($cargo as $crg) {
                            ?>
                                <tr>
                                    <td><?= $crg[1] ?></td>
                                    <td><?= $crg[2] ?></td>
                                    <td><?= $crg[3] ?></td>
                                    <td><?= $crg[4] ?></td>
                                    <td><?= $crg[5] ?> грн</td>
                                    <td><?= $crg[6] ?></td>
                                    <td><a href="./update-cargo.php?id=<?= $crg[0] ?>" class='update-btn'>Редагувати</a></td>
                                    <td><a href="../db/delete-cargo.php?id=<?= $crg[0] ?>" class='delete-btn'>Видалити</a></td>
                                </tr>
                            <?php
                        }
                    ?>
                </table>

                <h2>Актуальні пропозиції(Попутники)</h2>
                <table class="table-card">
                    <tr>
                        <th>Дата</th>
                        <th>Звідки</th>
                        <th>Куди</th>
                        <th>Інформація</th>
                        <th>Ціна</th>
                        <th>Контакти</th>
                        <th colspan="2">Додаткові функції</th>
                    </tr>

                    <?php
                        $companion = mysqli_query($connect, "SELECT * FROM `companion` ORDER BY `companion`.`id` DESC");
                        $companion = mysqli_fetch_all($companion);
                        foreach ($companion as $cmp) {
                            ?>
                                <tr>
                                    <td><?= $cmp[1] ?></td>
                                    <td><?= $cmp[2] ?></td>
                                    <td><?= $cmp[3] ?></td>
                                    <td><?= $cmp[4] ?></td>
                                    <td><?= $cmp[5] ?> грн</td>
                                    <td><?= $cmp[6] ?></td>
                                    <td><a href="./update-companion.php?id=<?= $cmp[0] ?>" class='update-btn'>Редагувати</a></td>
                                    <td><a href="../db/delete-companion.php?id=<?= $cmp[0] ?>" class='delete-btn'>Видалити</a></td>
                                </tr>
                            <?php
                        }
                    ?>
                </table>

            </div>
        </section>

        <footer>
            <div class="container">
                <p>&copy; 2023 TransConnect. Всі права захищені.</p>
                <ul class="footer-links">
                <li><a href="./admin-panel.php">Панель управління</a></li>
                    <li><a href="../../profile.php">Профіль(<?= $_SESSION['user']['name'] ?>)</a></li>
                    <li><a href="../db/log-out.php">Вийти</a></li>
                </ul>
            </div>
        </footer>
    </div>
</body>
</html>