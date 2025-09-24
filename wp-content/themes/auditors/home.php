<?php
/*
    Template name: Главная страница
*/
get_header();
?>

<main>
    <section>
        <div class="banner-wrapper" style="background-image: url('<?= get_field("banner_image"); ?>')">
            <div class="container">
                <div class="banner-content">
                    <h1><?= the_field("banner_header"); ?></h1>
                    <p>
                        <?= the_field("banner_description"); ?>
                    </p>
                    <div class="banner-btn-wrapper">
                        <a href="#" class="left-btn"><?= the_field("banner_left_button"); ?></a>
                        <a href="#" class="right-btn"><?= the_field("banner_right_button"); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-collegue-section">
        <div class="about-collegue-wrapper">
            <div class="container">
                <div class="about-collegue">
                    <h3><?= the_field("header"); ?></h3>
                    <p>
                        <?= the_field("description"); ?>
                    </p>
                    <a href="#" class="btn about-collegue-btn"><?= the_field("text_button"); ?></a>
                </div>
            </div>
        </div>
    </section>

    <section class="facts-section">
        <div class="facts-wrapper">
            <div class="container">
                <div class="facts-content">
                    <h3><?= the_field("fact_header"); ?></h3>
                    <div class="fact-item-wrapper">
                        <div class="fact-item">
                            <h5><?= the_field("fact_header_1"); ?></h5>
                            <p>
                                <?= the_field("fact_description_1"); ?>
                            </p>
                            <a href="#" class="btn fact-btn"><?= the_field("fact_button_1"); ?></a>
                        </div>
                        <div class="fact-item">
                            <h5><?= the_field("fact_header_2"); ?></h5>
                            <p>
                                <?= the_field("fact_description_2"); ?>
                            </p>
                            <a href="#" class="btn fact-btn"><?= the_field("fact_button_2"); ?></a>
                        </div>
                        <div class="fact-item">
                            <h5><?= the_field("fact_header_3"); ?></h5>
                            <p>
                                <?= the_field("fact_description_3"); ?>
                            </p>
                            <a href="#" class="btn fact-btn"><?= the_field("fact_button_3"); ?></a>
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
                    <h2 class="events-title"><?= the_field('seminar_header'); ?></h2>
                    <div class="calendar-wrapper">
                        <a href="<?= get_permalink(26) ?>">
                            <?php
                            $icon = get_field('calendar_icon');
                            ?>
                            <img src="<?= esc_url($icon['url']); ?>" alt="<?= esc_attr($icon['alt']); ?>" />
                            <?= the_field('seminar_btn_text'); ?>
                        </a>
                    </div>
                </div>

                <div class="seminar-card-wrapper">
                    <div class="row m-0">
                        <?php
                        $seminars = new WP_Query([
                            'post_type' => 'development',
                            'posts_per_page' => 4
                        ]);
                        if ($seminars->have_posts()):
                            while ($seminars->have_posts()):
                                $seminars->the_post();
                                $date = get_field('event_date');
                                $desc = get_field('event_desc');
                                $link = get_field('event_link');
                                $extra_icon = get_field('arrow');
                                $status = get_field('event_status'); // здесь хранится ключ (registration_open / closed)
                                $status_field = get_field_object('event_status'); // объект поля с choices
                                ?>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 px-2">
                                    <div class="card-wrapper">
                                        <div class="card-img">
                                            <?php if ($status): ?>
                                                <p class="<?= $status === 'registration_open' ? 'green-tag' : 'red-tag'; ?>">
                                                    <?= esc_html($status_field['choices'][$status]); ?>
                                                </p>
                                            <?php endif; ?>

                                            <?php if (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail('medium', ['class' => 'seminar-card-image']); ?>
                                            <?php endif; ?>

                                            <div class="arrow-icon-wrapper">
                                                <img src="<?= esc_url($extra_icon['url']); ?>"
                                                    alt="<?= esc_attr($extra_icon['alt']); ?>" class="arrow-icon" />
                                            </div>
                                        </div>

                                        <div class="card-content">
                                            <?php if ($date): ?>
                                                <p class="card-date"><?= esc_html($date); ?></p>
                                            <?php endif; ?>

                                            <h4 class="card-header"><?php the_title(); ?></h4>

                                            <?php if ($desc): ?>
                                                <p class="card-description"><?= esc_html($desc); ?></p>
                                            <?php endif; ?>

                                            <?php if ($link): ?>
                                                <a href="#" class="btn card-btn"><?= esc_html($link); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>
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
                            <img src="<?= get_template_directory_uri() . './assets/images/newspaper.svg' ?>"
                                alt="image" />
                            Все новости
                        </a>
                    </div>
                </div>

                <div class="news-card-wrapper">
                    <div class="row m-0">
                        <div class="col-12 col-sm-6 col-md-6 col-md-4 col-lg-3 mb-4 px-2">
                            <div class="card-wrapper">
                                <div class="card-img">
                                    <img src="<?= get_template_directory_uri() . './assets/images/news/news-1.png' ?>"
                                        class="seminar-card-image" alt="image" />
                                    <div class="arrow-icon-wrapper">
                                        <img src="<?= get_template_directory_uri() . './assets/images/seminar/arrow.svg' ?>"
                                            alt="image" class="arrow-icon" />
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
                                    <img src="<?= get_template_directory_uri() . './assets/images/news/news-2.png' ?>"
                                        class="seminar-card-image" alt="image" />
                                    <div class="arrow-icon-wrapper">
                                        <img src="<?= get_template_directory_uri() . './assets/images/seminar/arrow.svg' ?>"
                                            alt="image" class="arrow-icon" />
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
                                    <img src="<?= get_template_directory_uri() . './assets/images/news/news-3.png' ?>"
                                        class="seminar-card-image" alt="image" />
                                    <div class="arrow-icon-wrapper">
                                        <img src="<?= get_template_directory_uri() . './assets/images/seminar/arrow.svg' ?>"
                                            alt="image" class="arrow-icon" />
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
                                    <img src="<?= get_template_directory_uri() . './assets/images/news/news-4.png' ?>"
                                        class="seminar-card-image" alt="image" />
                                    <div class="arrow-icon-wrapper">
                                        <img src="<?= get_template_directory_uri() . './assets/images/seminar/arrow.svg' ?>"
                                            alt="image" class="arrow-icon" />
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

    <?php get_template_part('template-parts/sections/partners-section'); ?>

</main>

<?php
get_footer();
?>