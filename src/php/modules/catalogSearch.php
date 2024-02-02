<div class="container header__container">
    <div class="control-block"> <img class="logo" src="../img/compEnergy.svg" alt="Логотип интернет-интернет магазина Компонент энергии">
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
    ?>
</div>