
<?php // Класс для подключения к базе данных
// new PDO("mysql:host=адрес_сервера;port=номер_порта;dbname=имя_базы_данных", "имя_пользователя", "пароль")

class ConnectorMSQL {

    // Подключение к базе данных с пользователями зарегистрированными в системе
    function ConnectDbUser () {
        // выполнение подключения
        $connector = new PDO("mysql:host=gubinv.beget.tech;port=3306;dbname=gubinv_userecomp", "gubinv_userecomp", "2jPlV&Nd");
        return $connector;
    }

}?>