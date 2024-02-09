<?php
// подключение к базе MySQL
    class Connector {

        /// Путь к файлу с данными для подключения
        function ConnectDb ($fileName) {
            // Открывая файл для чтения (параметр r) из коорого построчно считываются параметры (host, port, dbName, dbUser, dbPass)
            $fd = fopen("$fileName", 'r') or die("не удалось открыть файл");
            $db = [];
            for ($i=0; !feof($fd); $i++) {
                $db[$i] = fgets($fd);
            }
            fclose($fd);

            // Функция возвращает строку подключения к базе данных и собственно ее подключает
            //$connect = new PDO("mysql:host=gubinv.beget.tech;port=3306;dbname=gubinv_userecomp", "gubinv_userecomp", "*5syxsFi");
            $conn = "mysql:host=$db[0];port=$db[1];dbname=$db[2]";
            
            echo $conn;
        }

    }
?>