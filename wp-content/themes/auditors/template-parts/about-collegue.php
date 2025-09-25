<?php
/*
    Template name: О коллеги
*/
get_header();
?>

<main>
    <section class="bg-grey">
        <div class="container">
            <div class="about-collegue-header">
                <h1><?= the_field('about_collegue_header'); ?></h1>
                <p>
                    <?= the_field('about_collegue_description'); ?>
                </p>
            </div>
        </div>
    </section>

    <section class="bg-grey">
        <div class="container">
            <div class="about-collegue-banner">
                <div class="about-collegue-banner-wrapper">
                    <?php
                    $about_banner = get_field('about_collegue_banner');
                    ?>
                    <img src="<?= esc_url($about_banner['url']); ?>" alt="<?= esc_attr($about_banner['alt']); ?>" />
                </div>

                <div class="banner-description">
                    <h4><?= the_field('about_left_header'); ?></h4>
                    <p>
                        <?= the_field('about_right_description'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-grey">
        <div class="container">
            <div class="about-collegue-cards">
                <?php if (have_rows('about_cards')): ?>
                    <?php while (have_rows('about_cards')):
                        the_row();
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                        $bg = get_sub_field('bg_color');
                        $text_color = get_sub_field('text_color');
                        $text_color_desc = get_sub_field('text_color_desc');
                        ?>
                        <div class="about-collegue-card" style="background-color: <?= esc_attr($bg); ?>;">
                            <?php if ($icon): ?>
                                <img src="<?= esc_url($icon['url']); ?>" alt="<?= esc_attr($icon['alt']); ?>" />
                            <?php endif; ?>
                            <h5 style="color: <?= esc_attr($text_color); ?>">
                                <?= esc_html($title); ?>
                            </h5>
                            <p style="color: <?= esc_attr($text_color_desc); ?>">
                                <?= esc_html($text); ?>
                            </p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="banner-description about-collegue-banner-description">
                <h4><?= the_field('about_left_header_2'); ?></h4>
                <p>
                    <?= nl2br(get_field('about_right_description_2')); ?>
                </p>
            </div>
        </div>
    </section>

    <section class="tab-container">
        <div class="container">
            <div class="tabs-wrapper">
                <!-- Табы -->
                <div class="tabs">
                    <button class="tab active" data-filter="all">Все</button>
                    <button class="tab" data-filter="management">Правление</button>
                    <button class="tab" data-filter="admin">Администрация</button>
                    <button class="tab" data-filter="committee">
                        Профильные комитеты
                    </button>
                </div>

                <!-- Карточки -->
                <div class="cards">
                    <div class="card" data-category="management" data-name="Кайрат Султанов" data-role="Директор"
                        data-img="<?= get_template_directory_uri() . '/assets/images/tabs/tab-1.png' ?>" data-info="Кайрат Султанов — опытный директор с богатым
                  опытом в управлении. Он получил высшее образование в Казахском
                  национальном университете, где изучал экономику и управление.
                  После окончания университета Кайрат начал свою карьеру в
                  крупной компании, где быстро поднялся по карьерной лестнице
                  благодаря своим лидерским качествам и стратегическому
                  мышлению. В течение нескольких лет он работал в различных
                  отраслях, включая финансы и технологии, прежде чем занять
                  должность директора в своей текущей компании. Кайрат активно
                  участвует в общественной жизни и стремится внедрять инновации
                  в своей области." data-phone="+71231231234" data-email="k.sultanov@auditor.kz">
                        <img src="<?= get_template_directory_uri() . '/assets/images/tabs/tab-1.png' ?>" alt="" />
                        <h3>Кайрат Султанов</h3>
                        <p>Директор</p>
                        <p class="card-info">
                            Московский государственный университет. 25 лет стажа в сфере
                            управления.
                        </p>
                    </div>

                    <div class="card" data-category="management" data-name="Алина Ким" data-role="Зам директора"
                        data-img="<?= get_template_directory_uri() . '/assets/images/tabs/tab-2.png' ?>" data-info="Алина Ким — опытный директор с богатым
                  опытом в управлении. Она получила высшее образование в Казахском
                  национальном университете, где изучала экономику и управление.
                  После окончания университета Алина начала свою карьеру в
                  крупной компании, где быстро поднялась по карьерной лестнице
                  благодаря своим лидерским качествам и стратегическому
                  мышлению. В течение нескольких лет она работала в различных
                  отраслях, включая финансы и технологии, прежде чем занять
                  должность директора в своей текущей компании. Алина активно
                  участвует в общественной жизни и стремится внедрять инновации
                  в своей области." data-phone="+71231231234" data-email="a.kim@auditor.kz">
                        <img src="<?= get_template_directory_uri() . '/assets/images/tabs/tab-2.png' ?>" alt="" />
                        <h3>Алина Ким</h3>
                        <p>Зам директора</p>
                        <p class="card-info">
                            Московский государственный университет. 25 лет стажа в сфере
                            управления.
                        </p>
                    </div>

                    <div class="card" data-category="committee" data-name="Айгул Сабирова" data-role="Маркетолог"
                        data-img="<?= get_template_directory_uri() . '/assets/images/tabs/tab-3.png' ?>" data-info="Айгул Сабирова — опытный директор с богатым
                  опытом в управлении. Она получила высшее образование в Казахском
                  национальном университете, где изучала экономику и управление.
                  После окончания университета Айгул начала свою карьеру в
                  крупной компании, где быстро поднялась по карьерной лестнице
                  благодаря своим лидерским качествам и стратегическому
                  мышлению. В течение нескольких лет она работала в различных
                  отраслях, включая финансы и технологии, прежде чем занять
                  должность директора в своей текущей компании. Айгул активно
                  участвует в общественной жизни и стремится внедрять инновации
                  в своей области." data-phone="+71231231234" data-email="s.aygul@auditor.kz">
                        <img src="<?= get_template_directory_uri() . '/assets/images/tabs/tab-3.png' ?>" alt="" />
                        <h3>Айгул Сабирова</h3>
                        <p>Маркетолог</p>
                        <p class="card-info">
                            Московский государственный университет. 25 лет стажа в сфере
                            управления.
                        </p>
                    </div>

                    <div class="card" data-category="committee" data-name="Гульназ Ахмедова" data-role="HR менеджер"
                        data-img="<?= get_template_directory_uri() . '/assets/images/tabs/tab-4.png' ?>" data-info="Гульназ Ахмедова — опытный директор с богатым
                  опытом в управлении. Она получила высшее образование в Казахском
                  национальном университете, где изучала экономику и управление.
                  После окончания университета Гульназ начала свою карьеру в
                  крупной компании, где быстро поднялась по карьерной лестнице
                  благодаря своим лидерским качествам и стратегическому
                  мышлению. В течение нескольких лет она работала в различных
                  отраслях, включая финансы и технологии, прежде чем занять
                  должность директора в своей текущей компании. Гульназ активно
                  участвует в общественной жизни и стремится внедрять инновации
                  в своей области." data-phone="+71231231234" data-email="a.gulnaz@auditor.kz">
                        <img src="<?= get_template_directory_uri() . '/assets/images/tabs/tab-4.png' ?>" alt="" />
                        <h3>Гульназ Ахмедова</h3>
                        <p>HR менеджер</p>
                        <p class="card-info">
                            Московский государственный университет. 25 лет стажа в сфере
                            управления.
                        </p>
                    </div>

                    <div class="card" data-category="admin" data-name="Бекзат Ибраев" data-role="Менеджер"
                        data-img="<?= get_template_directory_uri() . '/assets/images/tabs/tab-5.png' ?>" data-info="Бекзат Ибраев — опытный директор с богатым
                  опытом в управлении. Он получил высшее образование в Казахском
                  национальном университете, где изучал экономику и управление.
                  После окончания университета Бекзат начал свою карьеру в
                  крупной компании, где быстро поднялся по карьерной лестнице
                  благодаря своим лидерским качествам и стратегическому
                  мышлению. В течение нескольких лет он работал в различных
                  отраслях, включая финансы и технологии, прежде чем занять
                  должность директора в своей текущей компании. Бекзат активно
                  участвует в общественной жизни и стремится внедрять инновации
                  в своей области." data-phone="+71231231234" data-email="b.ibrayev@auditor.kz">
                        <img src="<?= get_template_directory_uri() . '/assets/images/tabs/tab-5.png' ?>" alt="" />
                        <h3>Бекзат Ибраев</h3>
                        <p>Менеджер</p>
                        <p class="card-info">
                            Московский государственный университет. 25 лет стажа в сфере
                            управления.
                        </p>
                    </div>

                    <div class="card" data-category="admin" data-name="Алмаз Рустамов" data-role="Менеджер"
                        data-img="<?= get_template_directory_uri() . '/assets/images/tabs/tab-6.png' ?>" data-info="Алмаз Рустамов — опытный директор с богатым
                  опытом в управлении. Он получил высшее образование в Казахском
                  национальном университете, где изучал экономику и управление.
                  После окончания университета Алмаз начал свою карьеру в
                  крупной компании, где быстро поднялся по карьерной лестнице
                  благодаря своим лидерским качествам и стратегическому
                  мышлению. В течение нескольких лет он работал в различных
                  отраслях, включая финансы и технологии, прежде чем занять
                  должность директора в своей текущей компании. Алмаз активно
                  участвует в общественной жизни и стремится внедрять инновации
                  в своей области." data-phone="+71231231234" data-email="r.almaz@auditor.kz">
                        <img src="<?= get_template_directory_uri() . '/assets/images/tabs/tab-6.png' ?>" alt="" />
                        <h3>Алмаз Рустамов</h3>
                        <p>Менеджер</p>
                        <p class="card-info">
                            Московский государственный университет. 25 лет стажа в сфере
                            управления.
                        </p>
                    </div>

                    <div class="card" data-category="management" data-name="Кериме Алиева" data-role="Директор"
                        data-img="<?= get_template_directory_uri() . '/assets/images/tabs/tab-7.png' ?>" data-info="Кериме Алиева — опытный директор с богатым
                  опытом в управлении. Она получила высшее образование в Казахском
                  национальном университете, где изучала экономику и управление.
                  После окончания университета Кериме начала свою карьеру в
                  крупной компании, где быстро поднялась по карьерной лестнице
                  благодаря своим лидерским качествам и стратегическому
                  мышлению. В течение нескольких лет она работала в различных
                  отраслях, включая финансы и технологии, прежде чем занять
                  должность директора в своей текущей компании. Кериме активно
                  участвует в общественной жизни и стремится внедрять инновации
                  в своей области." data-phone="+71231231234" data-email="k.aliyeva@auditor.kz">
                        <img src="<?= get_template_directory_uri() . '/assets/images/tabs/tab-7.png' ?>" alt="" />
                        <h3>Кериме Алиева</h3>
                        <p>Директор</p>
                        <p class="card-info">
                            Московский государственный университет. 25 лет стажа в сфере
                            управления.
                        </p>
                    </div>

                    <div class="card" data-category="admin" data-name="Бекзат Ибраев" data-role="Бухгалтер"
                        data-img="<?= get_template_directory_uri() . '/assets/images/tabs/tab-5.png' ?>" data-info="Бекзат Ибраев — опытный бухгалтер с богатым
                  опытом в управлении. Он получил высшее образование в Казахском
                  национальном университете, где изучал экономику и управление.
                  После окончания университета Бекзат начал свою карьеру в
                  крупной компании, где быстро поднялся по карьерной лестнице
                  благодаря своим лидерским качествам и стратегическому
                  мышлению. В течение нескольких лет он работал в различных
                  отраслях, включая финансы и технологии, прежде чем занять
                  должность директора в своей текущей компании. Бекзат активно
                  участвует в общественной жизни и стремится внедрять инновации
                  в своей области." data-phone="+71231231234" data-email="b.ibraev@auditor.kz">
                        <img src="<?= get_template_directory_uri() . '/assets/images/tabs/tab-5.png' ?>" alt="" />
                        <h3>Бекзат Ибраев</h3>
                        <p>Бухгалтер</p>
                        <p class="card-info">
                            Московский государственный университет. 25 лет стажа в сфере
                            управления.
                        </p>
                    </div>

                    <div class="card" data-category="management" data-name="Алина Ким" data-role="Зам директор"
                        data-img="<?= get_template_directory_uri() . '/assets/images/tabs/tab-2.png' ?>" data-info="Алина Ким — опытный директор с богатым
                  опытом в управлении. Она получила высшее образование в Казахском
                  национальном университете, где изучала экономику и управление.
                  После окончания университета Алина начала свою карьеру в
                  крупной компании, где быстро поднялась по карьерной лестнице
                  благодаря своим лидерским качествам и стратегическому
                  мышлению. В течение нескольких лет она работала в различных
                  отраслях, включая финансы и технологии, прежде чем занять
                  должность директора в своей текущей компании. Алина активно
                  участвует в общественной жизни и стремится внедрять инновации
                  в своей области." data-phone="+71231231234" data-email="k.alina@auditor.kz">
                        <img src="<?= get_template_directory_uri() . '/assets/images/tabs/tab-2.png' ?>" alt="" />
                        <h3>Алина Ким</h3>
                        <p>Зам директор</p>
                        <p class="card-info">
                            Московский государственный университет. 25 лет стажа в сфере
                            управления.
                        </p>
                    </div>

                    <div class="card" data-category="committee" data-name="Гульназ Ахмедова" data-role="HR менеджер"
                        data-img="<?= get_template_directory_uri() . '/assets/images/tabs/tab-4.png' ?>" data-info="Гульназ Ахмедова — опытный директор с богатым
                  опытом в управлении. Она получила высшее образование в Казахском
                  национальном университете, где изучала экономику и управление.
                  После окончания университета Гульназ начала свою карьеру в
                  крупной компании, где быстро поднялась по карьерной лестнице
                  благодаря своим лидерским качествам и стратегическому
                  мышлению. В течение нескольких лет она работала в различных
                  отраслях, включая финансы и технологии, прежде чем занять
                  должность директора в своей текущей компании. Гульназ активно
                  участвует в общественной жизни и стремится внедрять инновации
                  в своей области." data-phone="+71231231234" data-email="a.gulnaz@auditor.kz">
                        <img src="<?= get_template_directory_uri() . '/assets/images/tabs/tab-4.png' ?>" alt="" />
                        <h3>Гульназ Ахмедова</h3>
                        <p>HR менеджер</p>
                        <p class="card-info">
                            Московский государственный университет. 25 лет стажа в сфере
                            управления.
                        </p>
                    </div>

                    <div class="card" data-category="management" data-name="Кайрат Султанов" data-role="Директор"
                        data-img="<?= get_template_directory_uri() . '/assets/images/tabs/tab-1.png' ?>" data-info="Кайрат Султанов — опытный директор с богатым
                  опытом в управлении. Он получил высшее образование в Казахском
                  национальном университете, где изучал экономику и управление.
                  После окончания университета Кайрат начал свою карьеру в
                  крупной компании, где быстро поднялся по карьерной лестнице
                  благодаря своим лидерским качествам и стратегическому
                  мышлению. В течение нескольких лет он работал в различных
                  отраслях, включая финансы и технологии, прежде чем занять
                  должность директора в своей текущей компании. Кайрат активно
                  участвует в общественной жизни и стремится внедрять инновации
                  в своей области." data-phone="+71231231234" data-email="k.sultanov@auditor.kz">
                        <img src="<?= get_template_directory_uri() . '/assets/images/tabs/tab-1.png' ?>" alt="" />
                        <h3>Кайрат Султанов</h3>
                        <p>Директор</p>
                        <p class="card-info">
                            Московский государственный университет. 25 лет стажа в сфере
                            управления.
                        </p>
                    </div>

                    <div class="card" data-category="management" data-name="Айгул Сабирова" data-role="Зам директор"
                        data-img="<?= get_template_directory_uri() . '/assets/images/tabs/tab-2.png' ?>" data-info="Айгул Сабирова — опытный директор с богатым
                  опытом в управлении. Она получила высшее образование в Казахском
                  национальном университете, где изучала экономику и управление.
                  После окончания университета Айгул начала свою карьеру в
                  крупной компании, где быстро поднялась по карьерной лестнице
                  благодаря своим лидерским качествам и стратегическому
                  мышлению. В течение нескольких лет она работала в различных
                  отраслях, включая финансы и технологии, прежде чем занять
                  должность директора в своей текущей компании. Айгул активно
                  участвует в общественной жизни и стремится внедрять инновации
                  в своей области." data-phone="+71231231234" data-email="s.aygul@auditor.kz">
                        <img src="<?= get_template_directory_uri() . '/assets/images/tabs/tab-2.png' ?>" alt="" />
                        <h3>Айгул Сабирова</h3>
                        <p>Зам директор</p>
                        <p class="card-info">
                            Московский государственный университет. 25 лет стажа в сфере
                            управления.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-grey">
        <div class="about-collegue-bg-wrapper">
            <div class="container">
                <div class="banner-description">
                    <?php if ($title = get_field('docs_title')): ?>
                        <h4><?= esc_html($title); ?></h4>
                    <?php endif; ?>

                    <div class="download-wrapper">
                        <?php if ($desc = get_field('docs_description')): ?>
                            <p><?= esc_html($desc); ?></p>
                        <?php endif; ?>

                        <?php if (have_rows('docs_files')): ?>
                            <div class="download-box">
                                <?php while (have_rows('docs_files')):
                                    the_row();
                                    $file_title = get_sub_field('file_title');
                                    $file_link = get_sub_field('file_link');
                                    $file_icon = get_sub_field('file_icon');
                                    ?>
                                    <?php if ($file_link): ?>
                                        <a href="<?= esc_url($file_link['url']); ?>" download>
                                            <?= esc_html($file_title); ?>
                                            <?php if ($file_icon): ?>
                                                <img src="<?= esc_url($file_icon['url']); ?>"
                                                    alt="<?= esc_attr($file_icon['alt']); ?>" />
                                            <?php endif; ?>
                                        </a>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg p-0">
        <div class="container">
            <div class="banner-description m-0 pt-5">
                <h4><?= the_field('about_left_header_3'); ?></h4>
                <p>
                    <?= nl2br(get_field('about_right_description_3')); ?>
                </p>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/sections/partners-section'); ?>
</main>

<?php
get_footer();
?>