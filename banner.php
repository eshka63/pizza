<?php
$banner = array(
    array(
        "title" => "Только настроящие итальянские ингредиенты",
        "subtitle" => "Наша миссия - подарить незабываемые впечатления",
        "linkClass" => "item-first"
    ),
    array(
        "title" => "Мы добавляем только оригинальные ингредиенты!",
        "subtitle" => "Ваш идеальный завтрак",
        "linkClass" => "item-second"
    )
);

?>


<!-- Баннер -->
<div class="row">
    <div class="owl-carousel owl-theme">

        <?php
        for ($row = 0; $row < 2; $row++) {

            ?>
            <div class="item <?php echo $banner[$row]["linkClass"] ?>">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-8 col-sm-12">
                            <h3><?php echo $banner[$row]["title"] ?></h3>
                            <h1><?php echo $banner[$row]["subtitle"] ?></h1>
                            <a href="#team" class="section-btn btn btn-default smoothScroll">Заказать</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <!-- Баннер -->