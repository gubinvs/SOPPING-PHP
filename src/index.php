<!DOCTYPE html>
<html lang="en">
<?php
$_titlePage = "Компонент энергии - поставки комплектующих для средств автоматизации";
$_headDescr = "Комплексные поставки комплектующих для средств автоматизации";
$_canonical = "Прописать требования яндекса";
require_once 'php/modules/head.php';
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
                
            ?>
        
    
    
        <form method="post" action="do_register.php">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        </div>
    </main>
    <!--Подключение скриптов JS-->
    <script src="js/app.js" type="module"></script>
</body>
</html>