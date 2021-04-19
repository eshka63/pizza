<?php
$menu = array(
    array(
        "img" => "tovar1",
        "title" => "1+1 Бургер-пепперони",
        "disc" => "CЛАДКИЙ ГОРЧИЧНЫЙ СОУС, ОХОТНИЧЬИ КОЛБАСКИ, СВЕЖИЕ ШАМПИНЬОНЫ, СВЕЖИЙ ЛУК",
        "price" => "26 рублей",
        "phpSendForm" => "link"
    ),
    array(
        "img" => "tovar2",
        "title" => "Мясная-охотничья",
        "disc" => "CОУС ГРИЛЬ, СВЕЖИЕ ТОМАТЫ, СВЕЖИЙ ЛУК, СЫР МОЦАРЕЛЛА, БАЗИЛИК",
        "price" => "18 рублей",
        "phpSendForm" => "link"
    ),
    array(
        "img" => "tovar3",
        "title" => "Цыпленок",
        "disc" => "КРЫЛЫШКИ КУРИННЫЕ,СЛИВОЧНЫЙ СЫР, ОМЛЕТ ТАМАГО, ТОМАТ, СТРУЖКА ТУНЦА",
        "price" => "15 рублей",
        "phpSendForm" => "link"

    ),
    array(
        "img" => "tovar4",
        "title" => "Pizza",
        "disc" => "КadsadasНЦА",
        "price" => "25 рублей",
        "phpSendForm" => "link"

    )
);
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                <h2>Пицца</h2>
            </div>
        </div>

        <?php
        for ($row = 0; $row < 10; $row++) {

            ?>
            <div class="col-md-4 col-sm-4">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                    <img src="images/menu/<?php echo $menu[$row]["img"] ?>.jpg" class="img-responsive" alt="">
                    <div class="team-hover">
                        <div class="team-item">
                            <h4>Ваш заказ</h4>
                            <ul class="social-icon">
                                <form action="php/tovar1.php" method="post" role="form" data-wow-delay="0.8s">
                                    <input type="text" class="orderForm" name="name" placeholder="Ваше имя" required>
                                    <input type="text" class="orderForm" name="num" placeholder="Мобильный номер"
                                           required>
                                    <input type="text" class="orderForm" name="adr" placeholder="Адрес" required>
                                    <select name="sizepz" class="orderForm">
                                        <option disabled>Размер пиццы</option>
                                        <option style="color: #333">23 см</option>
                                        <option style="color: #333">30 см</option>
                                        <option style="color: #333">40 см</option>
                                    </select>
                                    <button type="submit" class="form-control" style="border-radius: 6px" name="submit">
                                        Заказать
                                    </button>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-info">
                    <h3><?php echo $menu[$row]["title"] ?></h3>
                    <p><?php echo $menu[$row]["disc"] ?></p>
                    <h4 style="color: red"><?php echo $menu[$row]["price"] ?></h4>
                </div>
            </div>
            <?php
        }
        ?>

    </div>
</div>