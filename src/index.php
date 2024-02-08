<!DOCTYPE html>
<html lang="en">
<?php
$_titlePage = "Компонент энергии - поставки комплектующих для средств автоматизации";
$_headDescr = "Комплексные поставки комплектующих для средств автоматизации";
$_canonical = "dg";
require_once 'php/modules/head.php';
require_once 'php/class/connector.php';
?>

<body>
    <!--Подключение header-->
    <?php
    require_once "php/modules/header.php";
    ?>

    <!--Основная секция страницы-->
    <main>
        <h1 class="visually-hidden h1-visually h1__visually" style="visibility: hidden;">Комплектующие для средств автоматизации у нас на сайте</h1>
        <div class="container">
            <span>Подключение к базе данных:</span>
            <?php
            // Подключение к базе данных с пользователями для проверки и авторизации
                $conn = new Connector();
                $conn->ConnectDbUser();
            ?>

        </div>
    </main>
    <!--Подключение скриптов JS-->
    <script src="js/app.js" type="module"></script>
</body>



</html>