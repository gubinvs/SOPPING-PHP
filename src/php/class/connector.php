<?php
// подключение к базе MySQL
    class Connector {

        static $host, $port, $dbName, $dbUser, $dbPass;
    
        /// Путь к файлу с данными для подключения
        function ConnectDb ($fileName) {
            // Открывая файл для чтения (параметр r)
            $fd = fopen("$fileName", 'r') or die("не удалось открыть файл");
       


            fclose($fd);



            // Функция возвращает строку подключения к базе данных и собственно ее подключает
            return $connect = new PDO("mysql:host=gubinv.beget.tech;port=3306;dbname=gubinv_userecomp", "gubinv_userecomp", "*5syxsFi");
        }

    }
?>