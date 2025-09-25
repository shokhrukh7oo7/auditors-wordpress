<?php
get_header();
?>

<main>
    <section class="bg zero-padding">
        <div class="news-image-banner">
            <!-- <img src="/assets/images/banner/news-banner.png" alt="image" /> -->
            <?php the_post_thumbnail('full'); ?>
        </div>
        <div class="container">
            <div class="news-detail-content-wrapper">
                <div class="news-nav">
                    <!-- <a href="/index.html">Главная /</a> -->
                    <!-- <a href="/assets/pages/news.html">Новости /</a> -->
                    <!-- <a href="#" class="news-active">Ежегодная конференция аудиторов 2025</a> -->
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>
                </div>

                <div class="news-detail-header-wrapper">
                    <h1><?php the_title(); ?></h1>
                    <p><?php echo get_the_date('d F Y в H:i'); ?></p>
                </div>

                <div class="news-detail-body-wrapper">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="seminar-section-wrapper">
        <div class="container">
            <div class="seminar-wrapper development">
                <div class="events-section">
                    <h2 class="events-title-news-detail">Последние новости</h2>
                </div>
                <div class="seminar-card-wrapper">
                    <div class="row m-0">
                        <?php
                        $related = new WP_Query([
                            'post_type' => 'news',
                            'posts_per_page' => 4,
                            'post__not_in' => [get_the_ID()]
                        ]);
                        if ($related->have_posts()):
                            while ($related->have_posts()):
                                $related->the_post(); ?>
                                <div class="col-12 col-sm-6 col-md-6 col-md-4 col-lg-3 mb-4 px-2">
                                    <div class="card-wrapper">
                                        <div class="card-img">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail('medium', ['class' => 'seminar-card-image']); ?>
                                            <?php else: ?>
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/seminar/seminar-1.png"
                                                    class="seminar-card-image" alt="image" />
                                            <?php endif; ?>

                                            <div class="arrow-icon-wrapper">
                                                <img src="<?= get_template_directory_uri(); ?>/assets/images/seminar/arrow.svg"
                                                    alt="arrow" class="arrow-icon" />
                                            </div>
                                        </div>

                                        <div class="card-content">
                                            <p class="card-date"><?php echo get_the_date('d F Y'); ?></p>
                                            <h4 class="card-header"><?php the_title(); ?></h4>
                                            <p class="card-description"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                            <a href="<?php the_permalink(); ?>" class="btn card-btn">Читать подробнее</a>
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
</main>

<?php
get_footer();
?>