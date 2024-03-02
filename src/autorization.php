<!DOCTYPE html>
<html lang="en">
<?php
$_titlePage = "Регистрация пользователя";
$_headDescr = "Страница регистрации пользователя в интернет магазине компонет энергии";
$_stylePage = "css/rp-style.css";
$_canonical = "Прописать требования яндекса";
require_once 'php/modules/head.php';
require_once 'php/class/connectorMSQL.php';
?>

<body>
    <!--Подключение header-->
    <?php require_once "php/modules/header.php"; ?>
    <!--Основная секция страницы-->
    <main>
        <div class="container page-registration-container">
            <h1 class="mb-3">Авторизация пользователя:</h1>
            <form method="POST" action="php/class/go_register.php">
                <div class="mb-3">
                    <label for="username" class="form-label">E-mail пользователя *</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль *</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">* Обязательное для заполнение поле</label>
                </div>
                <button type="submit" class="btn btn-outline-warning">Авторизация</button>
                <input type="hidden" name="act" value="order">

            </form>
        </div>
    </main>
    <!--Подключение скриптов JS-->
    <script src="js/app.js" type="module"></script>
</body>

</html>