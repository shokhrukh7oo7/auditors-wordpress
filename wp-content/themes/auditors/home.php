<?php
/*
    Template name: Главная страница
*/
get_header();
?>

<main>
    <section>
        <div class="banner-wrapper" style="background-image: url('<?= get_template_directory_uri() . '/assets/images/banner/banner.png'?>')">
            <div class="container">
                <div class="banner-content">
                    <h1>Стабильность. Уверенность. Профессионализм.</h1>
                    <p>
                        Коллегия аудиторов Казахстана помогает развитию аудиторского
                        бизнеса, соблюдая высокие этические стандарты и укрепляя доверие
                        к профессии
                    </p>
                    <div class="banner-btn-wrapper">
                        <a href="#" class="left-btn">Вступить в Коллегию</a>
                        <a href="#" class="right-btn">Узнать больше</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-collegue-section">
        <div class="about-collegue-wrapper">
            <div class="container">
                <div class="about-collegue">
                    <h3>Кратко о Коллеги</h3>
                    <p>
                        Коллегия аудиторов Казахстана – одна из двух крупнейших
                        профессиональных организаций страны в сфере аудита, объединяющая
                        более 90 аудиторских компаний и свыше 200 аттестованных
                        аудиторов. Мы оказываем методическую поддержку членам, проводим
                        обучающие мероприятия и защищаем интересы аудиторов во
                        взаимодействии с государственными органами и международными
                        структурами.
                    </p>
                    <a href="#" class="btn about-collegue-btn">Подробнее о нас</a>
                </div>
            </div>
        </div>
    </section>

    <section class="facts-section">
        <div class="facts-wrapper">
            <div class="container">
                <div class="facts-content">
                    <h3>Ключевые факты</h3>
                    <div class="fact-item-wrapper">
                        <div class="fact-item">
                            <h5>Международное сотрудничество:</h5>
                            <p>
                                Партнёрские связи с ключевыми организациями. Коллегия
                                стремится к вступлению в Международную федерацию бухгалтеров
                                (IFAC) и налаживает сотрудничество с глобальными
                                профессиональными сообществами. Наш образовательный проект
                                «Аудитор РК» уже получил 5-летнюю аккредитацию от ACCA –
                                ведущей международной ассоциации бухгалтеров, что
                                подтверждает соответствие нашим программ мировым стандартам.
                            </p>
                            <a href="#" class="btn fact-btn">Календаь семинаров</a>
                        </div>
                        <div class="fact-item">
                            <h5>Опыт работы:</h5>
                            <p>
                                с 2007 года на страже качества аудита (более 15 лет
                                деятельности). Коллегия была создана аудиторами в
                                соответствии с Законом РК «Об аудиторской деятельности» и
                                официально аккредитована Министерством финансов РК в 2007
                                году
                            </p>
                            <a href="#" class="btn fact-btn">Вступить в Коллегию</a>
                        </div>
                        <div class="fact-item">
                            <h5>Масштаб сообщества:</h5>
                            <p>
                                90+ аудиторских фирм и 200+ аудиторов уже состоят в
                                Коллегии, что составляет практически половину всех
                                сертифицированных аудиторов страны – сильный показатель
                                доверия профессионального сообщества.
                            </p>
                            <a href="#" class="btn fact-btn">Как стать аудитором</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="seminar-section-wrapper">
        <div class="container">
            <div class="seminar-wrapper">
                <div class="events-section">
                    <h2 class="events-title">Ближайшие мероприятия:</h2>
                    <div class="calendar-wrapper">
                        <a href="#">
                            <img src="<?= get_template_directory_uri() . './assets/images/calendar-dots.svg'?>" alt="image" />
                            Календарь семинаров
                        </a>
                    </div>
                </div>

                <div class="seminar-card-wrapper">
                    <div class="row m-0">
                        <div class="col-12 col-sm-6 col-md-6 col-md-4 col-lg-3 mb-4 px-2">
                            <div class="card-wrapper">
                                <div class="card-img">
                                    <p class="green-tag">Регистрация открыта</p>
                                    <img src="<?= get_template_directory_uri() . './assets/images/seminar/seminar-1.png'?>" class="seminar-card-image"
                                        alt="image" />
                                    <div class="arrow-icon-wrapper">
                                        <img src="<?= get_template_directory_uri() . './assets/images/seminar/arrow.svg'?>" alt="image" class="arrow-icon" />
                                    </div>
                                </div>

                                <div class="card-content">
                                    <p class="card-date">12 октября в 10:00</p>
                                    <h4 class="card-header">
                                        Ежегодная конференция аудиторов 2025
                                    </h4>
                                    <p class="card-description">
                                        Ежегодная конференция аудиторов 2025 для членов коллеги
                                    </p>
                                    <a href="#" class="btn card-btn">Регистрация</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-md-4 col-lg-3 mb-4 px-2">
                            <div class="card-wrapper">
                                <div class="card-img">
                                    <p class="green-tag">Регистрация открыта</p>
                                    <img src="<?= get_template_directory_uri() . './assets/images/seminar/seminar-2.png'?>" class="seminar-card-image"
                                        alt="image" />
                                    <div class="arrow-icon-wrapper">
                                        <img src="<?= get_template_directory_uri() . './assets/images/seminar/arrow.svg'?>" alt="image" class="arrow-icon" />
                                    </div>
                                </div>

                                <div class="card-content">
                                    <p class="card-date">15 октября в 10:00</p>
                                    <h4 class="card-header">
                                        Ежегодная конференция аудиторов 2025
                                    </h4>
                                    <p class="card-description">
                                        Ежегодная конференция аудиторов 2025 для членов коллеги
                                    </p>
                                    <a href="#" class="btn card-btn">Регистрация</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-md-4 col-lg-3 mb-4 px-2">
                            <div class="card-wrapper">
                                <div class="card-img">
                                    <p class="red-tag">Завершение подачи заявок</p>
                                    <img src="<?= get_template_directory_uri() . './assets/images/seminar/seminar-3.png'?>" class="seminar-card-image"
                                        alt="image" />
                                    <div class="arrow-icon-wrapper">
                                        <img src="<?= get_template_directory_uri() . './assets/images/seminar/arrow.svg'?>" alt="image" class="arrow-icon" />
                                    </div>
                                </div>

                                <div class="card-content">
                                    <p class="card-date">20 октября в 10:00</p>
                                    <h4 class="card-header">
                                        Ежегодная конференция аудиторов 2025
                                    </h4>
                                    <p class="card-description">
                                        Ежегодная конференция аудиторов 2025 для членов коллеги
                                    </p>
                                    <a href="#" class="btn card-btn">Регистрация</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-md-4 col-lg-3 mb-4 px-2">
                            <div class="card-wrapper">
                                <div class="card-img">
                                    <p class="green-tag">Регистрация открыта</p>
                                    <img src="<?= get_template_directory_uri() . './assets/images/seminar/seminar-1.png'?>" class="seminar-card-image"
                                        alt="image" />
                                    <div class="arrow-icon-wrapper">
                                        <img src="<?= get_template_directory_uri() . './assets/images/seminar/arrow.svg'?>" alt="image" class="arrow-icon" />
                                    </div>
                                </div>

                                <div class="card-content">
                                    <p class="card-date">25 октября в 10:00</p>
                                    <h4 class="card-header">
                                        Ежегодная конференция аудиторов 2025
                                    </h4>
                                    <p class="card-description">
                                        Ежегодная конференция аудиторов 2025 для членов коллеги
                                    </p>
                                    <a href="#" class="btn card-btn">Регистрация</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section-wrapper">
        <div class="container">
            <div class="news-wrapper">
                <div class="events-section">
                    <h2 class="events-title">Новости</h2>
                    <div class="calendar-wrapper">
                        <a href="#">
                            <img src="<?= get_template_directory_uri() . './assets/images/newspaper.svg'?>" alt="image" />
                            Все новости
                        </a>
                    </div>
                </div>

                <div class="news-card-wrapper">
                    <div class="row m-0">
                        <div class="col-12 col-sm-6 col-md-6 col-md-4 col-lg-3 mb-4 px-2">
                            <div class="card-wrapper">
                                <div class="card-img">
                                    <img src="<?= get_template_directory_uri() . './assets/images/news/news-1.png'?>" class="seminar-card-image" alt="image" />
                                    <div class="arrow-icon-wrapper">
                                        <img src="<?= get_template_directory_uri() . './assets/images/seminar/arrow.svg'?>" alt="image" class="arrow-icon" />
                                    </div>
                                </div>

                                <div class="card-content">
                                    <p class="card-date">20 октября в 10:00</p>
                                    <h4 class="card-header">
                                        Семинар по налоговым стратегиям
                                    </h4>
                                    <p class="card-description">
                                        Ежегодная конференция аудиторов 2025 для членов коллеги
                                    </p>
                                    <a href="#" class="btn card-btn">Читать подробнее »</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-md-4 col-lg-3 mb-4 px-2">
                            <div class="card-wrapper">
                                <div class="card-img">
                                    <img src="<?= get_template_directory_uri() . './assets/images/news/news-2.png'?>" class="seminar-card-image" alt="image" />
                                    <div class="arrow-icon-wrapper">
                                        <img src="<?= get_template_directory_uri() . './assets/images/seminar/arrow.svg'?>" alt="image" class="arrow-icon" />
                                    </div>
                                </div>

                                <div class="card-content">
                                    <p class="card-date">15 октября в 10:00</p>
                                    <h4 class="card-header">
                                        Воркшоп по финансовому анализу
                                    </h4>
                                    <p class="card-description">
                                        Ежегодная конференция аудиторов 2025 для членов коллеги
                                    </p>
                                    <a href="#" class="btn card-btn">Читать подробнее »</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-md-4 col-lg-3 mb-4 px-2">
                            <div class="card-wrapper">
                                <div class="card-img">
                                    <img src="<?= get_template_directory_uri() . './assets/images/news/news-3.png'?>" class="seminar-card-image" alt="image" />
                                    <div class="arrow-icon-wrapper">
                                        <img src="<?= get_template_directory_uri() . './assets/images/seminar/arrow.svg'?>" alt="image" class="arrow-icon" />
                                    </div>
                                </div>

                                <div class="card-content">
                                    <p class="card-date">25 октября в 10:00</p>
                                    <h4 class="card-header">
                                        Круглый стол по внутреннему контролю
                                    </h4>
                                    <p class="card-description">
                                        Ежегодная конференция аудиторов 2025 для членов коллеги
                                    </p>
                                    <a href="#" class="btn card-btn">Читать подробнее »</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-md-4 col-lg-3 mb-4 px-2">
                            <div class="card-wrapper">
                                <div class="card-img">
                                    <img src="<?= get_template_directory_uri() . './assets/images/news/news-4.png'?>" class="seminar-card-image" alt="image" />
                                    <div class="arrow-icon-wrapper">
                                        <img src="<?= get_template_directory_uri() . './assets/images/seminar/arrow.svg'?>" alt="image" class="arrow-icon" />
                                    </div>
                                </div>

                                <div class="card-content">
                                    <p class="card-date">12 октября в 10:00</p>
                                    <h4 class="card-header">
                                        Ежегодная конференция аудиторов 2025
                                    </h4>
                                    <p class="card-description">
                                        Ежегодная конференция аудиторов 2025 для членов коллеги
                                    </p>
                                    <a href="#" class="btn card-btn">Читать подробнее »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/sections/partner-section'); ?>

    <!-- <section class="partner-section-wrapper">
        <div class="container">
            <div class="partner-wrapper">
                <div class="partner-header">
                    <h3>Наши партнеры</h3>
                </div>

                <div class="partner-logo-wrapper">
                    <div class="row m-0">
                        <div class="col-12 col-sm-6 col-md-6 col-md-4 col-lg-3 my-2">
                            <div class="partner-card-img">
                                <img src="<?= get_template_directory_uri() . './assets/images/partners/apexbank.jpg'?>" alt="image" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-md-4 col-lg-3 my-2">
                            <div class="partner-card-img">
                                <img src="<?= get_template_directory_uri() . './assets/images/partners/AVO BANK.png'?>" alt="image" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-md-4 col-lg-3 my-2">
                            <div class="partner-card-img">
                                <img src="<?= get_template_directory_uri() . './assets/images/partners/biznes rivojlantirish banki.png'?>" alt="image" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-md-4 col-lg-3 my-2">
                            <div class="partner-card-img">
                                <img src="<?= get_template_directory_uri() . './assets/images/partners/HUdudgaz.png'?>" alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
</main>

<?php
get_footer();
?>