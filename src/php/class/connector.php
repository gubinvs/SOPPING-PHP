<?php 
    class Connector {
    // подключение к базе MySQL

        // подключение к базе данных с пользователями сервиса
        function ConnectDbUser () {
            // Функция возвращает строку подключения к базе данных и собственно ее подключает
            return $connect = new PDO("mysql:host=gubinv.beget.tech;port=3306;dbname=gubinv_userecomp", "gubinv_userecomp", "*5syxsFi");
        }

    }
?>