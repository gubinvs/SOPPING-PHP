<?php
/// Авторизация пользователя в системе

include_once '../class/connectorMSQL.php';


// Создание подключение к базе данных с пользователями:
$conn = new ConnectorMSQL();
$conn->ConnectDbUser();

// Создается условие, если пользователь авторизован он направляется на страницу личного кабинета, если авторизации нет, 
// направляется на страницу регистрации



?>