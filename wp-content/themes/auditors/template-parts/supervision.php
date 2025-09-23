<?php
/*
    Template name: Надзор
*/
get_header();
?>

<main>
    <section class="bg">
        <div class="container">
            <div class="standards-content-wrapper">
                <h1><?= the_field('header'); ?></h1>
                <div class="standards-content-description-wrapper">
                    <div class="standards-content-description">
                        <?= the_field('content'); ?>
                    </div>
                </div>
            </div>

            <div class="become-a-member-accordion-wrapper">
                <h2><?= the_field('accordion_header'); ?></h2>
                <?php if (have_rows('accordion_items')): ?>
                    <div class="accordion">
                        <?php
                        $i = 1;
                        while (have_rows('accordion_items')):
                            the_row();
                            $title = get_sub_field('accordion_title');
                            $content = get_sub_field('accordion_content');
                            ?>
                            <div class="accordion-item">
                                <button id="accordion-button-<?php echo $i; ?>" aria-expanded="false">
                                    <span class="accordion-title">
                                        <?= esc_html($title); ?>
                                    </span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <p><?= esc_html($content); ?></p>
                                </div>
                            </div>
                            <?php
                            $i++;
                        endwhile;
                        ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/sections/request-section'); ?>
</main>

<?php
get_footer();
?>