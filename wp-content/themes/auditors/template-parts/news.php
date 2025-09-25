<?php
/*
    Template Name: Новости
*/
get_header();
?>

<main>
    <section class="seminar-section-wrapper">
        <div class="container">
            <div class="seminar-wrapper development">
                <div class="events-section">
                    <h2 class="events-title-development">Новости и аналитика</h2>
                </div>

                <div class="seminar-card-wrapper">
                    <div class="row m-0">
                        <?php
                        // пагинация
                        $paged = get_query_var('paged') ? get_query_var('paged') : 1;

                        $news = new WP_Query([
                            'post_type'      => 'news',
                            'posts_per_page' => 12, // по 12 на страницу
                            'paged'          => $paged,
                            'orderby'        => 'date',
                            'order'          => 'DESC',
                        ]);

                        if ($news->have_posts()):
                            while ($news->have_posts()): $news->the_post(); ?>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 px-2">
                                    <div class="card-wrapper">
                                        <div class="card-img">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail('medium', ['class' => 'seminar-card-image']); ?>
                                            <?php else: ?>
                                                <img src="<?= get_template_directory_uri() . '/assets/images/seminar/default.png' ?>"
                                                    class="seminar-card-image" alt="<?php the_title(); ?>" />
                                            <?php endif; ?>
                                            <div class="arrow-icon-wrapper">
                                                <img src="<?= get_template_directory_uri() . '/assets/images/seminar/arrow.svg' ?>"
                                                    alt="arrow" class="arrow-icon" />
                                            </div>
                                        </div>

                                        <div class="card-content">
                                            <p class="card-date"><?= get_the_date('j F Y'); ?></p>
                                            <h4 class="card-header"><?php the_title(); ?></h4>
                                            <p class="card-description"><?= get_the_excerpt(); ?></p>
                                            <a href="<?php the_permalink(); ?>" class="btn card-btn">Читать подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                    </div>

                    <!-- пагинация -->
                    <div class="pagination">
                        <?php
                        echo paginate_links([
                            'total'     => $news->max_num_pages,
                            'current'   => $paged,
                            'prev_text' => '«',
                            'next_text' => '»',
                        ]);
                        ?>
                    </div>

                    <?php else: ?>
                        <p>Пока новостей нет.</p>
                    <?php endif; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
