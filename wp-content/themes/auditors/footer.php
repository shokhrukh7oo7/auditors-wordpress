<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package auditors
 */

?>

<footer>
	<div class="container">
		<div class="row m-0">
			<div class="col-12 col-sm-6 col-lg-3 col-xl-3 mt-5">
				<div class="footer-item">
					<div class="footer-logo">
						<a href="#">
							<img src="<?= get_template_directory_uri() . '/assets/images/logo.svg' ?>" alt="image" />
						</a>
						<p>Коллегия аудиторов</p>
					</div>

					<ul>
						<li>
							<p>
								<span>Наш адрес:</span>
								г.Алматы, ул.Ауэзова, 175, 4 этаж, кабинет 1
							</p>
						</li>

						<li>
							<p>
								<span>Телефон:</span>
								+7 (727) 123-45-67, +7 (727) 123-45-68
							</p>
						</li>

						<li>
							<p>
								<span>Режим работы:</span>
								Пн-Пт: 9:00 - 18:00
							</p>
						</li>
					</ul>

					<div class="footer-social-wrapper">
						<h1>Ссылки на социальные сети:</h1>

						<ul>
							<li>
								<a href="">
									<img src="<?= get_template_directory_uri() . './assets/images/social/instagram.svg' ?>"
										alt="image" />
								</a>
							</li>
							<li>
								<a href="">
									<img src="<?= get_template_directory_uri() . './assets/images/social/youtube.svg' ?>"
										alt="image" />
								</a>
							</li>
							<li>
								<a href="">
									<img src="<?= get_template_directory_uri() . './assets/images/social/telegram.svg' ?>"
										alt="image" />
								</a>
							</li>
							<li>
								<a href="">
									<img src="<?= get_template_directory_uri() . './assets/images/social/linkedin.svg' ?>"
										alt="image" />
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-lg-3 col-xl-3 mt-5">
				<div class="footer-item">
					<h4>Навигация</h4>
					<ul>
						<li><a href="#">Главная</a></li>
						<li><a href="#">О коллеги</a></li>
						<li><a href="#">Членство</a></li>
						<li><a href="#">Стать аудитором</a></li>
						<li><a href="#">Развитие</a></li>
						<li><a href="#">Стандарты</a></li>
						<li><a href="#">Надзор</a></li>
						<li><a href="#">Новости</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
				</div>
			</div>

			<div class="col-12 col-sm-12 col-lg-6 col-xl-6 mt-5">
				<div class="footer-item">
					<h4>Полезные ссылки</h4>

					<ul class="useful-links">
						<li>
							<a href="#">История и цели</a>
						</li>
						<li>
							<a href="#">Размер и порядок уплаты взносов</a>
						</li>
						<li>
							<a href="#">Роль Профсовета</a>
						</li>
						<li>
							<a href="#">Календарь мероприятии</a>
						</li>
						<li>
							<a href="#">Международные стандарты аудита (MCA)</a>
						</li>
						<li>
							<a href="#">Публичная оферта</a>
						</li>
						<li>
							<a href="#">Политика конфиденциальности</a>
						</li>
						<li>
							<a href="#">Сотрудничество</a>
						</li>
						<li>
							<a href="#">Преимущество для компаний</a>
						</li>
						<li>
							<a href="#">Условия вступления</a>
						</li>
						<li>
							<a href="#">Путь к профессии в Казахстане</a>
						</li>
						<li>
							<a href="#">Часто задаваемые вопросы</a>
						</li>
						<li>
							<a href="#">Повышение квалификации</a>
						</li>
						<li>
							<a href="#">Тренинги</a>
						</li>
						<li>
							<a href="#">Политика мониторинга качества</a>
						</li>
						<li>
							<a href="#">Этический кодекс (IESBA Code)</a>
						</li>
						<li>
							<a href="#">Позиции Коллегии</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="copyright">
			<p>© ПАО «Коллегия аудиторов», 2025</p>
			<p>
				Все права защищены • Сайт разработала студия
				<a href="#">Webline</a>
			</p>
		</div>
	</div>
</footer>


<!-- Модальное окно -->
<div class="team-modal" id="teamModal">
	<div class="team-modal-content">
		<div class="modal-wrapper">
			<div class="modal-content-team">
				<div class="modal-img">
					<img id="teamModalImg" src="" alt="" />
				</div>
				<div class="modal-image-content">
					<h3 id="teamModalName"></h3>
					<p id="teamModalRole"></p>
					<p id="teamModalInfo"></p>
					<p class="contact-info">
						<strong>Телефон:</strong> <a id="teamModalPhone" href=""></a><br />
						<strong>Эл. почта:</strong> <a id="teamModalEmail" href=""></a>
					</p>
				</div>
			</div>

			<span class="team-close" id="teamCloseBtn">&times;</span>
		</div>
	</div>
</div>


<div class="request-modal hidden" id="request-modal">
	<div class="modal-header">
		<h3>Подать заявку</h3>
		<button class="btn close-btn" id="close-btn">
			<img src="<?= get_template_directory_uri() . './assets/images/x.svg' ?>" alt="image" />
		</button>
	</div>
	<form>
		<div class="form-wrapper">
			<div class="form-list">
				<div class="form-item">
					<p>Фамилия</p>
					<input type="text" name="lastName" class="form-control" />
				</div>
				<div class="form-item">
					<p>Имя</p>
					<input type="text" name="firstName" class="form-control" />
				</div>
			</div>
			<div class="form-list">
				<div class="form-item">
					<p>Эл.почта</p>
					<input type="email" name="email" class="form-control" />
				</div>
				<div class="form-item">
					<p>Номер телефона</p>
					<input type="tel" name="tel" class="form-control" />
				</div>
			</div>
			<div class="form-item">
				<p>Выберите тему</p>
				<select class="form-select" aria-label="Default select example">
					<option selected>Выбрать из списка</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
			<div class="form-item">
				<p>Сообщение</p>
				<textarea class="form-control" placeholder="Оставьте комментарий..."></textarea>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="checkDefault" />
				<label class="form-check-label" for="checkDefault">
					Я принимаю Публичную оферту и Политику конфиденциальности
				</label>
			</div>
		</div>
		<button class="btn send-btn" id="send-btn">Отправить</button>
	</form>
</div>
<div class="overlay hidden" id="overlay"></div>

<?php wp_footer(); ?>

</body>

</html>