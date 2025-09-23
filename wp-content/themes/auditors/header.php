<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package auditors
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
		<div class="container">
			<div class="header-wrapper">
				<div class="logo-wrapper">
					<?php
					$logo = get_field('header_logo', 'option');
					?>
					<a href="<?= esc_url(home_url('/')); ?>">
						<img src="<?= esc_url($logo['url']); ?>" alt="<?= esc_attr($logo['alt']); ?>" />
					</a>
					<!-- <p>Коллегия аудиторов</p> -->
				</div>

				<nav class="navbar-menu-wrapper" id="nav-menu">
					<?php
					wp_nav_menu([
						'theme_location' => 'header_menu',
						'container' => false,
						'menu_class' => 'navbar-menu-list',
						'add_li_class' => 'navbar-menu-item',
					])
						?>
				</nav>

				<div class="langugage-container">
					<div class="language-wrapper">
						<div class="dropdown">
							<?php
							$languages = pll_the_languages(array(
								'hide_if_empty' => 0,
								'raw' => 1
							));

							if ($languages) {
								$current_lang = pll_current_language();
								?>
								<a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
									aria-expanded="false">
									<?= esc_html($languages[$current_lang]['name']); ?>
								</a>

								<ul class="dropdown-menu">
									<?php foreach ($languages as $slug => $lang_item): ?>
										<?php if ($slug !== $current_lang): ?>
											<li>
												<a class="dropdown-item" href="<?= esc_url($lang_item['url']); ?>">
													<?= esc_html($lang_item['name']); ?>
												</a>
											</li>
										<?php endif; ?>
									<?php endforeach; ?>
								</ul>
							<?php } ?>
						</div>
					</div>

					<button class="btn show-btn" id="show-btn"><?= the_field('header_btn_text', 'option'); ?></button>
					<!-- Бургер -->
					<button class="burger" id="burger-btn" aria-label="Открыть меню">
						<span></span>
						<span></span>
						<span></span>
					</button>
				</div>
			</div>
		</div>
	</header>