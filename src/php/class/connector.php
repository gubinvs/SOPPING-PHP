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
                echo $db[$i];
            }
            fclose($fd);

            // Функция возвращает строку подключения к базе данных и собственно ее подключает         
            return '"mysql:host=$db[0];port=$db[1];dbname=$db[2]", "$db[3]", "$db[4]"';
           
        }

    }
?>