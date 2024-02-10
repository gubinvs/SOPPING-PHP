<?php
// подключение к базе MySQL
    class Connector {

        public $dbHost, $dbUser, $dbPass;

        /// Путь к файлу с данными для подключения
        function ConnectDb ($fileName) {

            // Открывая файл для чтения (параметр r) из коорого построчно считываются параметры (host, port, dbName, dbUser, dbPass)
            $fd = fopen("$fileName", 'r') or die("не удалось открыть файл");
            
            for ($i=0; !feof($fd); $i++) {
                $db[$i] = fgets($fd);
                // echo $db[$i];
            }
            fclose($fd);

            // Заполняю поля данными из файла
            $this->dbHost = $db[0];
            $this->dbUser = $db[1];
            $this->dbPass = $db[2];
        }

    }
?>