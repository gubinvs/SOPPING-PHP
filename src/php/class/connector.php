
<?php // Класс для подключения к базе данных

class ConnectorMSQL {

    public $dbHost;         // Адрес базы данных
    public $dbNameBase;     // Имя базы данных
    public $dbNameUser;     // Имя пользователя базы данных
    public $dbPassword;     // Пароль пользователя базы данных

    function ConnectDB ($dbHost, $dbNameBase, $dbNameUser, $dbPassword) {
        $dbHost;
        // выполнение подключения
        $db = new PDO("mysql:host=$dbHost;dbname=$dbNameBase", $dbNameUser, $dbPassword);
        return $db;
    }

}?>