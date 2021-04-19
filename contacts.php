<div class="container">
    <div class="row">
        <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
            <div id="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1798.3631031097343!2d27.5876912119281!3d53.93018216233435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcf0cd2d82d49%3A0xdce1d04bf0bdffe2!2z0J7QsdGJ0LXQttC40YLQuNC1IOKEliAyINCR0JPQo9CY0KA!5e0!3m2!1sru!2sby!4v1613479802040!5m2!1sru!2sby"
                        allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="col-md-12 col-sm-12">
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Оставить отзыв</h2>
                </div>
            </div>
            <!-- Форма обратная связь -->
            <form action="php/otziv.php" method="post" class="wow fadeInUp" id="contact-form" role="form"
                  data-wow-delay="0.8s">
                <div class="col-md-6 col-sm-6">
                    <input type="text" class="form-control" name="name" placeholder="Ваше имя" required>
                </div>
                <div class="col-md-6 col-sm-6">
                    <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                </div>
                <div class="col-md-12 col-sm-12">
                    <textarea class="form-control" rows="6" name="message" placeholder="Ваш отзыв о нашей работе"
                              required></textarea>
                    <button type="submit" class="form-control" id="cf-submit" name="submit">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>