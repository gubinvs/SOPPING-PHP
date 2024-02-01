<?php

// Класс с параметрами номенклатуры и ее типами
class Nomenclature {
    
    public $brend;  //-- Бренд
    public $types;  //-- Тип номенклатуры
   

    //-- конструктор для добавления данных о бренде и его типе
    function AddItem($brend, $types) {
        $this->brend = $brend;
        $this->types = $types;
    }

    //-- конструктор для добавления данных о бренде и типе номенклатуры с массивом типов номенклатуры
    function AddArray($brend, $types) {
        $this->brend = $brend;
        for ($i = 0; $i < count($types); $i++){
            $this->types[$i] = $types[$i];
        }
    }

    //-- метод печати данных о номенклатуре если типов номенклатуры только один
    function displayNomenclature() {
        echo $this->brend;
        echo $this->types;
    }

    //-- метод вывода данных о номенклатыре на экран с несколькими типами номенклатуры
    function displayNomenclatureArray() {
        echo "$this->brend<br>";
        for ($i=0; $i < count($this->types); $i++){
            echo $this->types[$i];
            echo "<br>";
        }
    }
}

?>