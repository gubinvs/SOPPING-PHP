<div class="container header__container">
    <div class="control-block"> <img class="logo" src="img/compEnergy.svg" alt="Логотип интернет-интернет магазина Компонент энергии">
        <ul class="control-list">
            <li class="control-list__item">
                <div class="control-list__item_img control-list__item_img1"></div>
                <div class="control-list__item_discr">Компания</div>
            </li>
            <li class="control-list__item">
                <div class="control-list__item_img control-list__item_img2"></div>
                <div class="control-list__item_discr">Заказы</div>
            </li>
            <li class="control-list__item control-list__item_basket">
                <div class="control-list__item_img control-list__item_img3"></div>
                <div class="quantity-shopping-icon shopping-icon__display-none" id="shopping-icon">
                    <div class="quantity-shopping-icon__text">299</div>
                </div>
                <div class="control-list__item_discr">Корзина</div>
            </li>
        </ul>
    </div>
    <div class="search-block">
        <div class="search-block__catalog" id="catalog-block">Каталог товаров</div>
        <form class="search-block__form">
            <input class="search-block-form__text" type="search" name="search" placeholder="Поиск по сайту">
            <button class="search-block-form__botton_submit" type="submit" name="submit"><img class="search-botton__icon" src="../img/serch.svg" alt="Кнопка поиска"></button>
        </form>
    </div>
    <?php
    include 'php/class/brandList.php';
    echo '<div class="search-block search-block-subsection search-block-none" id="catalog-list">';
    for ($i = 0; $i < count($product); $i++) {
        echo '<ul class="search-block-list">';
        echo '<li class="search-block-list__item" id="catalog-list_1">';
        echo $product[$i]->name;
        echo '</li>';
    }
    echo '</ul>';
    echo "</div>";
    //-- Переменная с первоначальным значением list-subsection_ и равно 1, это значение должно быть равно количеству брендов (brand)
    $brandItem = 1;
    //-- Цикл создает блоки в количестве записей в переменной product (количество брендов)
    do {
    //--  Определение количества записей (типов) в данном бренде (brand)
    $typeItem = count($product[$brandItem -1]->types);
    echo '<ul class="search-block-list_subsection subsection-schneider" id="list-subsection_';
    echo $brandItem;
    echo '">';
    // Цикл заполняет графы в количестве типов в продуте (подтипы бренда)
    for ($i = 0; $i < $typeItem; $i++) {
        
        echo '<li class="search-block-list_subsection__item'; 
        //-- Добавил условие, если этерация болще первой, то добавляю класс (list_subsection-none)
        if ($brandItem > 1) {
            echo ' list_subsection-none';
        }
        echo '">';
        echo $product[$brandItem - 1]->types[$i];
        echo  '</li>';
    }
    echo '</ul>';
    $brandItem ++ ;
    } while ($brandItem < count($product) + 1 );
    echo count($product);
    ?>
</div>

      
            <!-- ul(id="list-subsection_2").search-block-list_subsection.subsection-abb.list_subsection-none
                li.search-block-list_subsection__item Розетки-abb
                li.search-block-list_subsection__item Выключатели-abb
                li.search-block-list_subsection__item Контроллеры-abb
                li.search-block-list_subsection__item Контакторы-abb
            ul(id="list-subsection_3").search-block-list_subsection.subsection-siemens.list_subsection-none
                li.search-block-list_subsection__item Розетки-Siemens
                li.search-block-list_subsection__item Выключатели-Siemens
                li.search-block-list_subsection__item Контроллеры-Siemens
                li.search-block-list_subsection__item Контакторы-Siemens
            ul(id="list-subsection_4").search-block-list_subsection.subsection-phoenix.list_subsection-none
                li.search-block-list_subsection__item Розетки-Phoenix
                li.search-block-list_subsection__item Выключатели-Phoenix
                li.search-block-list_subsection__item Контроллеры-Phoenix
                li.search-block-list_subsection__item Контакторы-Phoenix -->