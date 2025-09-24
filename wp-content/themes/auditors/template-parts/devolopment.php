<?php
/*
    Template name: Развитие
*/
get_header();
?>

<main>
    <section class="seminar-section-wrapper ">
        <div class="container">
            <div class="seminar-wrapper development">
                <div class="events-section">
                    <h2 class="events-title-development"><?= the_field('header'); ?></h2>
                </div>

                <div class="seminar-card-wrapper">
                    <div class="container">
                        <div class="row m-0">
                            <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                            $seminars = new WP_Query([
                                'post_type' => 'development',
                                'posts_per_page' => 12,
                                'paged' => $paged
                            ]);

                            if ($seminars->have_posts()):
                                while ($seminars->have_posts()):
                                    $seminars->the_post();
                                    $date = get_field('event_date');
                                    $desc = get_field('event_desc');
                                    $link = get_field('event_link');
                                    $extra_icon = get_field('arrow');
                                    $status = get_field('event_status'); // ключ (registration_open / closed)
                                    $status_field = get_field_object('event_status'); // объект с choices
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

                                                <?php if ($extra_icon): ?>
                                                    <div class="arrow-icon-wrapper">
                                                        <img src="<?= esc_url($extra_icon['url']); ?>"
                                                            alt="<?= esc_attr($extra_icon['alt']); ?>" class="arrow-icon" />
                                                    </div>
                                                <?php endif; ?>
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

                                <?php endwhile; ?>
                            <?php else: ?>
                                <p>Постов пока нет.</p>
                            <?php endif; ?>
                        </div>

                        <!-- Пагинация -->
                        <div class="pagination-wrapper">
                            <?php
                            echo paginate_links([
                                'total' => $seminars->max_num_pages,
                                'current' => $paged,
                                'mid_size' => 2,
                                'prev_text' => '«',
                                'next_text' => '»'
                            ]);
                            ?>
                        </div>

                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>