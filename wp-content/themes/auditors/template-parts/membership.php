<?php
/*
    Template name: Членство
*/
get_header();
?>

<main>
    <section>
        <div class="enter">
            <div class="container">
                <div class="enter-left-right-wrapper">
                    <div class="enter-left">
                        <h3><?= the_field('membership_header'); ?></h3>
                    </div>
                    <div class="enter-right">
                        <p>
                            <?= the_field('membership_description'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="enter-info-wrapper">
                <div class="enter-info-left-wrapper">
                    <h5><?= the_field('left_content_header'); ?></h5>
                    <p class="text-color" style="color: <?= the_field('text_color'); ?>">
                        <?= the_field('left_content_color_text'); ?>
                    </p>
                    <div class="enter-info-left-description">
                        <p>
                            <?= nl2br(get_field('left_content_description')); ?>
                        </p>
                    </div>
                </div>
                <div class="enter-info-right-wrapper">
                    <h5><?= the_field('right_content_header'); ?></h5>
                    <p class="text-color" style="color: <?= the_field('right_color_text'); ?>">
                        <?= the_field('right_content_color_text'); ?>
                    </p>
                    <div class="enter-info-right-description">
                        <p>
                            <?= nl2br(get_field('right_content_description')); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg">
        <div class="container">
            <div class="enter-one-wrapper">
                <h1></h1>
                <p>

                </p>

                <div class="card-wrapper">
                    <?php if (have_rows('cards')): ?>
                        <?php while (have_rows('cards')):
                            the_row(); ?>
                            <div class="card-item">
                                <div class="card-item-content">
                                    <h6><?php the_sub_field('card_title'); ?></h6>
                                    <p><?php the_sub_field('card_text'); ?></p>
                                </div>
                                <span><?php the_sub_field('card_number'); ?></span>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="enter-two-wrapper">
                <h1><?= the_field('header_under_card') ?></h1>
                <div class="enter-two-left-right-wrapper">
                    <div class="enter-two-left-wrapper">
                        <h5><?php the_field('member_rights_title'); ?></h5>
                        <?php if (have_rows('member_rights')): ?>
                            <ul>
                                <?php while (have_rows('member_rights')):
                                    the_row(); ?>
                                    <li><?php the_sub_field('right_text'); ?></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <div class="enter-two-right-wrapper">
                        <h5><?php the_field('member_rights_title_2'); ?></h5>
                        <?php if (have_rows('member_rights_2')): ?>
                            <ul>
                                <?php while (have_rows('member_rights_2')):
                                    the_row(); ?>
                                    <li><?php the_sub_field('right_text_2'); ?></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="enter-three-wrapper">
                <div class="enter-three-left-right-wrapper">
                    <div class="enter-three-left">
                        <h5><?= the_field('extra_section_header'); ?></h5>

                        <?php if (have_rows('extra_section')): ?>
                            <ul>
                                <?php while (have_rows('extra_section')):
                                    the_row(); ?>
                                    <li><?php the_sub_field('extra_content'); ?></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                    <div class="enter-three-right">
                        <div class="enter-three-right-card-blue">
                            <div class="enter-three-right-card-blue-content">
                                <h5><?= the_field('card_image_header'); ?></h5>
                                <h3><?= the_field('card_image_under_header'); ?></h3>
                                <p>
                                    <?= the_field('card_image_content'); ?>
                                </p>
                            </div>
                            <?php
                            $icon = get_field('card_image_icon');
                            ?>
                            <img src="<?= esc_url($icon['url']); ?>" alt="<?= esc_attr($icon['alt']); ?>" />
                            <button class="btn show-btn" id="show-btn">
                                <?= the_field('card_image_text_btn'); ?>
                            </button>
                        </div>

                        <div class="enter-three-right-card-white">
                            <div class="enter-three-right-card-white-content">
                                <h5><?= the_field('card_image_header_2'); ?></h5>
                                <h3><?= the_field('card_image_under_header_2'); ?></h3>
                                <p>
                                    <?= the_field('card_image_content_2'); ?>
                                </p>
                            </div>
                            <?php
                            $iconTwo = get_field('card_image_icon');
                            ?>
                            <img src="<?= esc_url($iconTwo['url']); ?>" alt="<?= esc_attr($iconTwo['alt']); ?>" />
                            <button class="btn member-right-btn">
                                <?= the_field('card_image_text_btn_2'); ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="enter-four-wrapper">
                <div class="enter-four-header">
                    <h1><?= the_field('table_header'); ?></h1>
                    <p>
                        <?= the_field('table_description'); ?>
                    </p>
                </div>

                <div class="table-accordion-wrapper">
                    <!-- 🔘 Кнопки переключения -->
                    <div class="button-group">
                        <button class="toggle-button active"
                            id="btn-companies"><?php echo pll__('Аудиторские компании'); ?></button>
                        <button class="toggle-button " id="btn-auditors"><?php echo pll__('Аудиторы'); ?></button>
                    </div>
                </div>

                <!-- 📋 Таблица Аудиторские компании -->
                <div class="table_component" id="companies-table" role="region" tabindex="0">
                    <table>
                        <thead>
                            <tr>
                                <th><?php echo pll__('Название компании'); ?></th>
                                <th><?php echo pll__('Телефон'); ?></th>
                                <th><?php echo pll__('Адрес'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $companies = new WP_Query([
                                'post_type' => 'audit_company',
                                'posts_per_page' => -1
                            ]);
                            if ($companies->have_posts()):
                                while ($companies->have_posts()):
                                    $companies->the_post();
                                    $phone = get_field('phone');
                                    $city_terms = get_the_terms(get_the_ID(), 'city');
                                    $city = $city_terms ? $city_terms[0]->name : '';
                                    ?>
                                    <tr>
                                        <td data-label="<?php echo pll__('Название компании'); ?>"><?php the_title(); ?></td>
                                        <td data-label="<?php echo pll__('Телефон'); ?>"><?= esc_html($phone); ?></td>
                                        <td data-label="<?php echo pll__('Город'); ?>"><?= esc_html($city); ?></td>
                                    </tr>
                                <?php endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="table_component hidden" id="auditors-table" role="region" tabindex="0">
                    <table>
                        <thead>
                            <tr>
                                <th><?php echo pll__('ФИО'); ?></th>
                                <th><?php echo pll__('Город'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $auditors = new WP_Query([
                                'post_type' => 'auditor',
                                'posts_per_page' => -1
                            ]);
                            if ($auditors->have_posts()):
                                while ($auditors->have_posts()):
                                    $auditors->the_post();
                                    $city_terms = get_the_terms(get_the_ID(), 'city');
                                    $city = $city_terms ? $city_terms[0]->name : '';
                                    ?>
                                    <tr>
                                        <td data-label="<?php echo pll__('ФИО'); ?>"><?php the_title(); ?></td>
                                        <td data-label="<?php echo pll__('Город'); ?>"><?= esc_html($city); ?></td>
                                    </tr>
                                <?php endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>