<?php
// подключение к базе MySQL
    class Connector {
    
        // подключение к базе данных содержащей данные пользователей сервиса, для проверки авторизации
        function ConnectDbUser () {
            // Функция возвращает строку подключения к базе данных и собственно ее подключает
            return $connect = new PDO("mysql:host=gubinv.beget.tech;port=3306;dbname=gubinv_userecomp", "gubinv_userecomp", "*5syxsFi");
        }

    }
?>