<?php 
include "brand.php";
//-- Перечень актуальной номенклатуры товаров
$product = [
    new Brand("Schneider", ["Розетки-Schneider", "Выключатели-Schneider", "Контроллеры-Schneider", "Контакторы-Schneider"]),
    new Brand("ABB", ["Розетки-ABB", "Выключатели-ABB", "Контроллеры-ABB", "Контакторы-ABB"]),
    new Brand("Siemens", ["Розетки-Siemens", "Выключатели-Siemens", "Контроллеры-Siemens", "Контакторы-Schneider"]),
    new Brand("Phoenix", ["Розетки-Phoenix", "Выключатели-Phoenix", "Контроллеры-Phoenix", "Контакторы-Phoenix"])
];
?>
