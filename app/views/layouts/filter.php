<div class="filter__box-mini">
    <div class="title__box-mini">
        <p>Фильтры и сортировка</p>
        <i class="fas fa-times"></i>
    </div>
    <div class="contetnt__filter">
        <div class="catalog__nav-filter">
            <div id="category" class="catalog__filter">
                <div class="list__filter-dress">
                    <div class="title__box">
                        <p>Женское</p>
                        <img src="/app/template/img/chevron-right-solid.svg" class="catalog__icon" alt="">
                    </div>
                    <div class="list__link">
                        <ul>

                            <?php foreach ($categoriesWomen as $categoryWomen): ?>
                                <li>
                                    <a href="/category/<?php echo $categoryWomen['id']; ?>">
                                        <?php echo $categoryWomen['name']; ?>
                                    </a>
                                </li>
                            <?php endforeach;?>

                        </ul>
                    </div>
                </div>
                <div class="list__filter-dress">
                    <div class="title__box">
                        <p>Мужское</p>
                        <img src="/app/template/img/chevron-right-solid.svg" class="catalog__icon" alt="">
                    </div>
                    <div class="list__link">
                        <ul>

                            <?php foreach ($categoriesMen as $categoryMen): ?>
                                <li>
                                    <a href="/category/<?php echo $categoryMen['id']; ?>">
                                        <?php echo $categoryMen['name']; ?>
                                    </a>
                                </li>
                            <?php endforeach;?>

                        </ul>
                    </div>
                </div>
                <div class="list__filter-dress">
                    <div class="title__box">
                        <a href="#">Не знаю кто я</a>
                    </div>
                </div>
            </div>
            <div class="filter__mini-box">
                <div class="title__filter">РАЗМЕР
                </div>
                <div class="content__filter">
                    <ul class="list__filter-mini">
                        <li>
                            <button id="size1-mini" class="button-size" type="button">XS</button>
                        </li>
                        <li>
                            <button id="size2-mini" class="button-size" type="button">S</button>
                        </li>
                        <li>
                            <button id="size3-mini" class="button-size" type="button">M</button>
                        </li>
                        <li>
                            <button id="size4-mini" class="button-size" type="button">L</button>
                        </li>
                        <li>
                            <button id="size5-mini" class="button-size" type="button">XL</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>