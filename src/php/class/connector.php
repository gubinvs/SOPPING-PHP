
<?php // Класс для подключения к базе данных
// new PDO("mysql:host=адрес_сервера;port=номер_порта;dbname=имя_базы_данных", "имя_пользователя", "пароль")

class ConnectorMSQL {

    public $dbHost;         // Адрес базы данных
    public $dbPort;         // Порт базы данных
    public $dbNameBase;     // Имя базы данных
    public $dbNameUser;     // Имя пользователя базы данных
    public $dbPassword;     // Пароль пользователя базы данных

    function ConnectDB ($dbHost, $dbPort, $dbNameBase, $dbNameUser, $dbPassword) {
        // выполнение подключения
        $conn = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbNameBase", $dbNameUser, $dbPassword);
        
        
        return $conn;
    }

}?>