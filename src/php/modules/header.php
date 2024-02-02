<header>
    <div class="container header__container">
        <nav class="header-nav">
            <ul class="header-nav__list">
                <li class="header-nav__item">+7 (812) 921-59-71</li>
                <li class="header-nav__item">|</li>
                <li class="header-nav__item">
                    <div class="header-social-icon header-social-icon1"></div>
                </li>
                <li class="header-nav__item">
                    <div class="header-social-icon header-social-icon2"></div>
                </li>
                <li class="header-nav__item">
                    <div class="header-social-icon header-social-icon3"></div>
                </li>
            </ul>
            <ul class="header-nav__list header-nav__list_tutorial">
                <li class="header-nav__item header-nav__item_company">Для юридических лиц</li>
                <li class="header-nav__item">Способы доставки</li>
                <li class="header-nav__item">Способы оплаты</li>
            </ul>
        </nav>
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
</header>