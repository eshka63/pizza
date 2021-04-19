<?php
$reviews = array(
    array(
        "disc" => "Спасибо за пиццу. Доставили очень быстро!",
        "author" => "Андрей"
    ),
    array(
        "disc" => "Вкусно готовят. Быстро доставили. Рекомендую!!!",
        "author" => "Саша"
    ),
    array(
        "disc" => "Отзыв!!!",
        "author" => "Элёр"
    )
);

?>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                <h2>Отзывы</h2>
            </div>
        </div>
        <div class="col-md-offset-2 col-md-8 col-sm-12">
            <div class="owl-carousel owl-theme">
                <?php
                for ($row = 0; $row < 3; $row++) {

                    ?>
                    <div class="item">
                        <p><?php echo $reviews[$row]["disc"] ?></p>
                        <div class="tst-author">
                            <span><?php echo $reviews[$row]["author"] ?></span>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>