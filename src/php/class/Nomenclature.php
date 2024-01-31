<?php



// Класс с параметрами номенклатуры
class Nomenclature {
    
    public $brend;  //-- Бренд
    public $types;  //-- Тип номенклатуры

    function __construct($brend, $types) {
        $this->brend = $brend;
        $this->types = $types;
    }

    function displayNomenclature() {
        echo $this->brend;
        echo $this->types;

    }
}








?>