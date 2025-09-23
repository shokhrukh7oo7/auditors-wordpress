<?php
$lang = pll_current_language();
?>

<section class="bg">
    <div class="consultation-wrapper">
        <div class="container">
            <div class="consultation-left-right-wrapper">
                <div class="consultation-left">
                    <h2><?= the_field('header_' . $lang, 'option'); ?></h2>
                </div>
                <div class="consultation-right">
                    <div class="form-wrapper">
                        <h4><?= the_field('form_header_' . $lang, 'option'); ?></h4>
                        <form>
                            <input type="text" class="form-control"
                                placeholder="<?= the_field('form_name_' . $lang, 'option'); ?>" required />
                            <input type="tel" class="form-control"
                                placeholder="<?= the_field('form_phone_' . $lang, 'option'); ?>" required />
                            <input type="email" class="form-control"
                                placeholder="<?= the_field('form_email_' . $lang, 'option'); ?>" required />
                            <button type="submit" class="btn consultation-btn">
                                <?= the_field('form_btn_text_' . $lang, 'option'); ?>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>