<?php



// Класс с параметрами номенклатуры
class Nomenclature {
    
    public $brend;  //-- Бренд
    public $type;  //-- Тип номенклатуры

    function __addNomenclature ($brend, $type) {
        $this->$brend = $brend;
        $this->$type = $type;
    }

    function __printNomenclature () {
        echo $this->brend;
        echo $this->type;
    }

}








?>