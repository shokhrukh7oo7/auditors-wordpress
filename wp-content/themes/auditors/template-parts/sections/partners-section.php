<section class="partner-section-wrapper">
    <div class="container">
        <div class="partner-wrapper">
            <div class="partner-header">
                <h3><?php pll__('Наши партнеры'); ?></h3>
            </div>

            <div class="partner-logo-wrapper">
                <div class="row m-0">
                    <?php if( have_rows('partners', 'option') ): ?>
                        <?php while( have_rows('partners', 'option') ): the_row(); 
                            $logo = get_sub_field('logo');
                        ?>
                            <?php if($logo): ?>
                                <div class="col-12 col-sm-6 col-md-6 col-md-4 col-lg-3 my-2">
                                    <div class="partner-card-img">
                                        <img src="<?= esc_url($logo['url']); ?>" alt="<?= esc_attr($logo['alt']); ?>" />
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
