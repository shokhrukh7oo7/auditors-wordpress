<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package auditors
 */

get_header();
?> 
<main>
	<section class="bg">
		<div class="container">
			<div class="page-404-wrapper">
				<h1>404</h1>
				<p>Мы не смогли найти запрошенную страницу</p>
				<a href="/index.html" class="btn back-btn">На главную страницу</a>
			</div>
		</div>
	</section>
</main>

<!-- <main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'auditors'); ?></h1>
			</header>

			<div class="page-content">
				<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'auditors'); ?></p>

					<?php
					get_search_form();

					the_widget('WP_Widget_Recent_Posts');
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e('Most Used Categories', 'auditors'); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby' => 'count',
									'order' => 'DESC',
									'show_count' => 1,
									'title_li' => '',
									'number' => 10,
								)
							);
							?>
						</ul>
					</div>

					<?php
					/* translators: %1$s: smiley */
					$auditors_archive_content = '<p>' . sprintf(esc_html__('Try looking in the monthly archives. %1$s', 'auditors'), convert_smilies(':)')) . '</p>';
					the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$auditors_archive_content");

					the_widget('WP_Widget_Tag_Cloud');
					?>

			</div>
		</section>

	</main> -->

<?php
get_footer();
