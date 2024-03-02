<!DOCTYPE html>
<html lang="en">
<?php
    $_titlePage = "Ко";
    $_headDescr = "Компл";
    $_stylePage = "style";
    $_canonical = "Прописать требования яндекса";
    require_once 'head.php';
    require_once '../class/connectorMSQL.php';
?>

<body>
    <!--Подключение header-->
    <?php require_once "header.php"; ?>
    <!--Основная секция страницы-->
    <main>
        <div class="container">
            <h1>Авторизация пользователя:</h1>
            <form method="POST" action="../php/class/go_register.php" class="registraction-form">
                <div class="mb-3">
                    <label for="username" class="form-label">Имя пользователя</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Регистрация</button>
                <input type="hidden" name="act" value="order">
            </form>
        </div>
    </main>
<!--Подключение скриптов JS-->
<script src="js/app.js" type="module"></script>
</body>
</html>