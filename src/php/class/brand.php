<?php

// Класс с параметрами номенклатуры и ее типами
class Brand {
    
    public $name;  //-- Бренд
    public $types;  //-- Тип номенклатуры
   

    //-- конструктор для добавления данных о бренде и его типе
    function AddItem($brend, $types) {
        $this->name = $brend;
        $this->types = $types;
    }

    //--конструктор по умолчанию
    function __construct($brend, $types)
    {
        $this->name = $brend;
        for ($i = 0; $i < count($types); $i++) {
            $this->types[$i] = $types[$i];
        }
    }

    //-- конструктор для добавления данных о бренде и типе номенклатуры с массивом типов номенклатуры
    function AddArray($brend, $types) {
        $this->name = $brend;
        for ($i = 0; $i < count($types); $i++){
            $this->types[$i] = $types[$i];
        }
    }

    //-- метод печати данных о номенклатуре если типов номенклатуры только один
    function displayBrand() {
        echo $this->name;
        echo $this->types;
    }

    //-- метод вывода данных о номенклатыре на экран с несколькими типами номенклатуры
    function displayBrandArray() {
        echo "$this->name<br>";
        for ($i=0; $i < count($this->types); $i++){
            echo $this->types[$i];
        }
    }
}

?>