<?php
// Регистрация нового пользователя в базе данных
include_once 'connectorMSQL.php';

try {
    // Подключение к базе данных с параметрами пользователя
    $con = new ConnectorMSQL();
    $db = $con->ConnectDbUser();
        if (!$con) {
            echo 'Нет подключения к базе данных';
        }
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
        echo "Ошибка подключения базы данных файл go_register.php";
    }

    // Приняли данные (методом post) инициализируем и присваиваем значение переменным данными из сообщения.
    if ($_POST['act'] == 'order') {
        $userName = ($_POST['username']);
        $userPassword = ($_POST['password']);
    }

    // Формирование запроса в базу данных
    $sql = "INSERT INTO `userSystems`(`userEmail`, `userPassword`) VALUES ( '$userName', '$userPassword' )";
    echo "Запрос: " . $sql;

    // Передача запроса в базу данных
    //$db->exec($sql);
    // echo "Добавлен в базу данных";
    
    // Отключение от базы данных
    $con = null;
    // echo "<br>" . "Базу отключил!"

    // После удачной регистрации пользователя открываем страницу:
    $new_url = '../../index.php';
    header('Location: ' . $new_url);
?>
