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
					<a href="/index.html"><img src="<?= get_template_directory_uri() . '/assets/images/logo.svg'?>" alt="logo" /></a>
					<p>Коллегия аудиторов</p>
				</div>

				<nav>
					<div class="navbar-menu-wrapper" id="nav-menu">
						<ul class="navbar-menu-list">
							<li class="navbar-menu-item">
								<a href="#" class="active">Главная</a>
							</li>
							<li class="navbar-menu-item">
								<a href="./assets/pages/about-collegue.html">О коллеги</a>
							</li>
							<li class="navbar-menu-item">
								<a href="./assets/pages/membership.html">Членство</a>
							</li>
							<li class="navbar-menu-item">
								<a href="./assets/pages/become-a-member.html">Стать аудитором</a>
							</li>
							<li class="navbar-menu-item">
								<a href="./assets/pages/devolopment.html">Развитие</a>
							</li>
							<li class="navbar-menu-item">
								<a href="./assets/pages/standards.html">Стандарты</a>
							</li>
							<li class="navbar-menu-item">
								<a href="./assets/pages/supervision.html">Надзор</a>
							</li>
							<li class="navbar-menu-item">
								<a href="./assets/pages/news.html">Новости</a>
							</li>
							<li class="navbar-menu-item">
								<a href="./assets/pages/contacts.html">Контакты</a>
							</li>
						</ul>
					</div>
				</nav>

				<div class="langugage-container">
					<div class="language-wrapper">
						<div class="dropdown">
							<a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
								aria-expanded="false">
								Рус
							</a>

							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">En</a></li>
								<li><a class="dropdown-item" href="#">Uz</a></li>
							</ul>
						</div>
					</div>

					<button class="btn show-btn" id="show-btn">Подать заявку</button>
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