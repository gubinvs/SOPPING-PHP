<!DOCTYPE html>
<html lang="en">
<?php
$_titlePage = "Компонент энергии - поставки комплектующих для средств автоматизации";
$_headDescr = "Комплексные поставки комплектующих для средств автоматизации";
$_canonical = "Прописать требования яндекса";
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
            <?php   
                $conn = new Connector();
                $conn->ConnectDb("files/dbuser.txt");
                echo $conn;
            ?>
        </div>
    </main>
    <!--Подключение скриптов JS-->
    <script src="js/app.js" type="module"></script>
</body>



</html>