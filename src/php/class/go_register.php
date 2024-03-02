<?php
// Регистрация нового пользователя в базе данных
include_once 'connectorMSQL.php';

try {
    // Подключение к базе данных с параметрами пользователя
    $con = new ConnectorMSQL();
    $db = $con->ConnectDbUser();
    if ($con) {
        echo 'Все в порядке, подключились и работаем!';
    } else {
        echo 'Нет подключения к базе данных';
    }
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
        echo "Ошибка подключения базы данных файл go_register.php";
    }

    // Формирование запроса в базу данных
    $sql = 'INSERT INTO `userSystems`(`userEmail`, `userPassword`) VALUES ("gubinvs@gmail.com", "qwerty")';
    


    // Передача запроса в базу данных
    $db->exec($sql);
?>
