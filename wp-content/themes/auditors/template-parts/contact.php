<?php
/*
    Template name: Контакты
*/
get_header();
?>

<main>
    <section class="bg">
        <div class="container">
            <div class="contact-container">
                <div class="contact-wrapper">
                    <div class="contact-content">
                        <h6>Свяжитесь с нами</h6>
                        <h1>Контакты</h1>
                        <p>Оставьте заявку и наши менеджеры свяжутся с вами</p>
                        <ul>
                            <li>
                                <img src="<?= get_template_directory_uri() . '/assets/images/Email.svg' ?>"
                                    alt="image" />
                                <a href="mailto:info@auditors.kz">info@auditors.kz</a>
                            </li>
                            <li>
                                <img src="<?= get_template_directory_uri() . '/assets/images/Phone.svg' ?>"
                                    alt="image" />
                                <a href="tel:+77271234567">+7 (727) 123-45-67</a>
                                <a href="tel:+77271234568">+7 (727) 123-45-68</a>
                                <a href="tel:+77271234569">+7 (727) 123-45-69</a>
                            </li>
                            <li>
                                <img src="<?= get_template_directory_uri() . '/assets/images/Pin.svg' ?>" alt="image" />
                                <p>г.Алматы, ул.Ауэзова, 175, 4 этаж, кабинет 1</p>
                            </li>
                        </ul>
                    </div>

                    <div class="contact-form">
                        <form>
                            <div class="form-item-wrapper">
                                <div class="form-item">
                                    <p>Фамилия</p>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-item">
                                    <p>Имя</p>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>

                            <div class="form-item-wrapper">
                                <div class="form-item">
                                    <p>Эл.почта</p>
                                    <input type="email" class="form-control" />
                                </div>
                                <div class="form-item">
                                    <p>Номер телефона</p>
                                    <input type="tel" class="form-control" />
                                </div>
                            </div>

                            <div class="form-item-wrapper-two">
                                <p>Выберите тему</p>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Выбрать из списка</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="form-item-wrapper-three">
                                <p>Сообщение</p>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>

                            <div class="checkbox-wrapper">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkIndeterminate" />
                                    <label class="form-check-label" for="checkIndeterminate">
                                        Я принимаю Публичную оферту и Политику конфиденциальности
                                    </label>
                                </div>
                            </div>

                            <div class="contact-btn-wrapper">
                                <button type="submit" class="btn contact-btn">
                                    Отправить
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="contact-map-wrapper">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.293671119465!2d69.23712462222197!3d41.30247455466229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8ba2102fa8bd%3A0xd7a334a42d5cffcd!2z0KHQvtGO0Lcg0J_QuNGB0LDRgtC10LvQtdC5!5e0!3m2!1sru!2s!4v1732011600720!5m2!1sru!2s"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>