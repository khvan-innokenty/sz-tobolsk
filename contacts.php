<?php include "header.php"; ?>
    <div class="content">
        <div class="container">
            <ul class="breadcrumbs"><li><a href="/">Главная</a></li><li>Контакты</li></ul>

            <h1>Контакты</h1>

            <div class="addresses">
                <div class="addresses__item">
                    <h2>Поликлиника №1</h2>
                    <p>423570, Республика Татарстан, г.Нижнекамск, ул. Менделеева д.46</p>
                    <p>ОМС, ДМС, платные услуги</p>
                    <p>Вызов врача на дом: +7 8555 41-90-20</p>
                    <h3>Режим работы</h3>
                </div>
                <div class="addresses__item">
                    <h2>Школьный бульвар 3</h2>
                    <p>423575, Республика Татарстан, г. Нижнекамск, ул. Школьный бульвар д.3</p>
                    <p>ОМС, платные услуги</p>
                    <p>Вызов врача на дом: +7 8555 41-90-20</p>
                    <p>Справочная: +7 8555 41-90-09</p>
                    <h3>Режим работы</h3>
                    <p>Ежедневно, с 07:00 до 19:00</p>
                    <p>Кабинет неотложной помощи &mdash; ежедневно, с 08:00 до 19:00</p>
                </div>
                <div class="addresses__item">
                    <h2>Сююмбике 59</h2>
                    <p>423570, Республика Татарстан, г. Нижнекамск, ул. Сююмбике д. 59</p>
                    <p>ОМС, платные услуги</p>
                    <p>Вызов врача на дом: +7 8555 41-90-20</p>
                    <p>Справочная: +7 8555 45-30-80</p>
                    <h3>Режим работы</h3>
                    <p>понедельник-пятница, с 07:00 до 19:00</p>
                    <p>Процедурный кабинет &mdash; с 07:00 до 14:00</p>
                </div>
            </div>

            <div class="contacts">
                <div class="contacts__left">
                    <div class="contacts__map" id="map" data-coords="[[55.658721, 51.813502], [55.632536, 51.818262], [55.650027, 51.799983]]" data-zoom="13"></div>
                    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
                </div>
                <div class="contacts__right">
                    <h2>Задать вопрос</h2>
                    <form class="js-form" action="/ajax/question.php" data-success="Ваше сообщение получено. Мы скоро свяжемся с Вами." id="contact-form">
                        <input type="text" name="name" placeholder="Ф.И.О.">
                        <div class="contacts-form">
                            <div class="contacts-form__item"><input type="tel" name="phone" placeholder="Телефон"></div>
                            <div class="contacts-form__item"><input type="email" name="email" placeholder="Email"></div>
                        </div>
                        <textarea name="message" placeholder="Сообщение" rows="4"></textarea>
                        <input type="checkbox" class="appointment__checkbox" name="legal" id="legal-contact">
                        <label for="legal-contact" class="appointment__checkbox__label">Я даю согласие на обработку персональных данных, с условиями <a href="/legal.php" target="_blank">Политики обработки и защиты персональных данных</a> ознакомлен.</label>
                        <button class="button appointment__submit" type="submit" disabled><span class="text">Отправить</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php include "footer.php";