<?php
?>

<?php
get_header();
?>
<main>
<div class="slider">
			<div class="container">
				<?php 
				if(get_field('izobrazhenie')['url']){
				?>
					<div class="slider__inner">
					<div class="slider__wrapper-block">
						<div class="slider__block">
							<div class="slider__content">
								<div class="slider__content-title">
								<?php the_field('zagolovok')?>
								</div>
								<p class="slider__content-text slider__content-text-page page">
									<?php the_field('tekst')?>
								</p>
								<button class="slider__content-btn page" data-modal>Заказать услугу</button>
							</div>
							<div class="slider__img">
								<img src="<?php echo get_field('izobrazhenie')['url'];?>" alt="img">
							</div>
						</div>
					</div>
				</div>
				<?php	
				}else{
					?>
					<div class="">
					
					</div>
				<?php
				}
				
				?>
			
			</div>
		</div>

		<div class="copying">
			<div class="container">
				<div class="breadcrumbs">
					<ul class="breadcrumbs__list">
					<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
					</ul>
				</div>

				<h2 class="copying__title">
					<?php the_title();?>
				</h2>
				<div class="copying__block">
					<div class="copying__block-img">
						<img src="./images/page/page-img.png" alt="img">
					</div>
					<p class="copying__block-content">
						<?php the_content();?>
					</p>
				</div>
				<p class="copying__block-text">
					А ведь подобную ситуацию можно предупредить заранее, если воспользоваться облачным резервным
					копированием. Ежедневно система с помощью специального программного обеспечения будет создавать не только
					копии ваших файлов, а полный клон вашего компьютера. В случае попытки взлома, полной поломки устройства,
					сбоя системы или же изъятия техники соответствующими контролирующими органами, вся информация будет
					сохранена на внешнем облаке. Доступ к копиям будет только у вас или людей, которым полностью доверяете.
				</p>
				<p class="copying__block-text">
					Таким образом если даже компьютер будет уничтожен, то мы легко восстановим все данные на новый компьютер.
					Восстановится всё вплоть до расположения ярлыков на рабочем столе!
				</p>
				<p class="copying__block-text">
					Помимо того, что резервное копирование в облако надёжно оберегает данные от атаки вирусов шифровальщиков,
					программа позволяет также восстановить удалённые по неосторожности папки, документы или даже целые базы
					1С. Копирование выполняется ежедневно и хранится в облаке не менее 50 дней. Это значит, что при
					необходимости вы сможете восстановить данные даже 50-дневной давности
				</p>
				<div class="copying__subtitle">Подзаголовок</div>
				<p class="copying__subtitle-text">
					Знаете ли вы, что парализовать работу целого офиса может один клик мышки? Достаточно открыть файл из
					письма от неизвестного отправителя, и вся сеть может быть атакована вирусом-шифровальщиком, который
					зашифровывает все файлы на всех компьютерах и серверах.
				</p>
				<ul class="copying__list">
					<li class="copying__list-item">
						<a href="#" class="copying__list-link">Маркированный список 1</a>
					</li>
					<li class="copying__list-item">
						<a href="#" class="copying__list-link">Маркированный список 1</a>
					</li>
					<li class="copying__list-item">
						<a href="#" class="copying__list-link">Маркированный список 1</a>
					</li>
					<li class="copying__list-item">
						<a href="#" class="copying__list-link">Маркированный список 1</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="work">
			<div class="container">
				<h3 class="work__title">Как мы работаем:</h3>
				<div class="work__inner">
					<div class="work__item">
						<p class="work__item-text">
							Вы отправляете заявку
							или звоните
						</p>
						<div class="work__item-img">
							<img src="./images/page/number-1.svg" alt="img">
						</div>
					</div>
					<div class="work__item">
						<p class="work__item-text">
							Мы проводим бесплатный IT аудит
							Вашей инфраструктуры
						</p>
						<div class="work__item-img">
							<img src="./images/page/number-2.svg" alt="img">
						</div>
					</div>
					<div class="work__item">
						<p class="work__item-text">
							Подготавливаем для Вас КП
						</p>
						<div class="work__item-img">
							<img src="./images/page/number-3.svg" alt="img">
						</div>
					</div>
					<div class="work__item">
						<p class="work__item-text">
							Заключаем договор и NDA
						</p>
						<div class="work__item-img">
							<img src="./images/page/number-4.svg" alt="img">
						</div>
					</div>
					<div class="work__item">
						<p class="work__item-text">
							Оптимизируем Вашу IT
							инфраструктуру
						</p>
						<div class="work__item-img">
							<img src="./images/page/number-5.svg" alt="img">
						</div>
					</div>
					<div class="work__item">
						<p class="work__item-text">
							Настраиваем системы мониторинга
							и регламентных операций
						</p>
						<div class="work__item-img">
							<img src="./images/page/number-6.svg" alt="img">
						</div>
					</div>
					<div class="work__item">
						<p class="work__item-text">
							Передаем Вашу инфраструктуру на
							поддержку нашим инжинерам
						</p>
						<div class="work__item-img">
							<img src="./images/page/number-7.svg" alt="img">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="get">
			<div class="container">
				<div class="get__title">
					Что вы получаете:
				</div>
				<div class="get__block">
					<div class="get__item">
						<div class="get__item-img">
							<img src="./images/page/receive-1.svg" alt="img">
							<p class="get__item-text">
								Администрирование
								и поддержка компьютеров
							</p>
						</div>
					</div>
					<div class="get__item">
						<div class="get__item-img">
							<img src="./images/page/receive-2.svg" alt="img">
							<p class="get__item-text">
								Администрирование
								и мониторинг серверов
							</p>
						</div>
					</div>
					<div class="get__item">
						<div class="get__item-img">
							<img src="./images/page/receive-3.svg" alt="img">
							<p class="get__item-text">
								Установка и настройка оборудования и ПО
							</p>
						</div>
					</div>
					<div class="get__item">
						<div class="get__item-img">
							<img src="./images/page/receive-4.svg" alt="img">
							<p class="get__item-text">
								Администрирование и поддержка сети
							</p>
						</div>
					</div>
					<div class="get__item">
						<div class="get__item-img">
							<img src="./images/page/receive-5.svg" alt="img">
							<p class="get__item-text">
								Ремонт компьютеров и серверов
							</p>
						</div>
					</div>
					<div class="get__item">
						<div class="get__item-img">
							<img src="./images/page/receive-6.svg" alt="img">
							<p class="get__item-text">
								Настройка и поддержка
								МФУ, принтеров, телефонов
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="table">
			<div class="container">
				<div class="table__title"></div>
				<div class="table__inner">
					<div class="table-main">
						<div class="table-main__title">Услуга</div>
						<div class="table-main__price">Стоимость </div>
						<div class="table-main__desc">Описание услуги</div>
					</div>
					<div class="table__top">
						<div class="table__top-title">Перенос сервера за пределы офиса</div>
						<div class="table__top-price">от 10 000 рублей</div>
						<div class="table__top-desc">
							Какое-то описание услуги, сейчас просто текст для
							понимания заполнения
						</div>
					</div>
					<div class="table__bottom">
						<div class="table__bottom-title">
							Система резервного копирования
						</div>
						<div class="table__bottom-price">5 000 — 25 000 рублей</div>
						<div class="table__bottom-desc">
							Какое-то описание услуги, сейчас просто текст для
							понимания заполнения
						</div>
					</div>
					<div class="table__top">
						<div class="table__top-title">
							Удаленный доступ к 1С из
							любой точки
						</div>
						<div class="table__top-price">7 500 рублей за раб. место</div>
						<div class="table__top-desc">
							Какое-то описание услуги, сейчас просто текст для
							понимания заполнения
						</div>
					</div>
					<div class="table__bottom">
						<div class="table__bottom-title">
							Объединение офисов в единую сеть
						</div>
						<div class="table__bottom-price">уточняйте</div>
						<div class="table__bottom-desc">
							Какое-то описание услуги, сейчас просто текст для
							понимания заполнения текстом в две строки
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="request">
			<div class="container">
				<form action="#" class="form">
					<div class="form__title">
						Отправьте заявку и получите гарантированную
						скидку на наши услуги
					</div>
					<input type="text" class="input__form" placeholder="Ваше имя*" required>
					<input type="email" class="input__form" placeholder="Ваш телефон/E-mail" required>
					<button class="form__btn form__btn-page">Отправить заявку</button>
					<p class="form__text">
						Нажимая кнопку "Отправить заявку", я даю свое согласие на обработку моих персональных данных, а также
						подтверждаю,что ознакомлен (а) и согласен (а) с Политикой конфиденциальности.
					</p>
				</form>
			</div>
		</div>


		<div class="palm">
			<div class="container">
				<div class="palm__block">
					<div class="palm__content">
						<div class="palm__content-title">А знаете ли вы?</div>
						<p class="palm__content-text">
							А знаете ли вы, что можно контролироватьсотрудников сидя
							на пляже прямо с вашего телефона
						</p>
						<a href="#" class="palm__content-btn">Подробнее</a>
					</div>
					<div class="palm__block-img">
						<img src="./images/page/palm.jpg" alt="img">
					</div>
				</div>
			</div>
		</div>

		<div class="news">
			<div class="container">
				<div class="news__title">Новостная лента</div>
				<div class="news__box">

						<?php		
                        global $post;
                        $query = new WP_Query( [
                        'posts_per_page' => '12',
                        'post_type'        => 'news',
						'posts_per_page' => 15
                        
                        ] );
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                            $query->the_post();
                        ?>
					<div class="news__item">
						<div class="news__item-top">
							<a href="<?php the_permalink();?>" class="news__item-title"><?php the_title();?></a>
							<div class="news__item-date"><?php echo get_the_date();?></div>
						</div>
						<p class="news__item-text">
							<?php the_excerpt();?>
						</p>
					</div>
					<?php }
							} 
							else {
								
						}
						wp_reset_postdata(); 
					?> 
				</div>
			</div>
		</div>

		<div class="page-reviews">
			<div class="container">
				<div class="page-reviews__title">Отзывы</div>
				<div class="page-reviews__slider">
				<?php		
                        global $post;
                        $query = new WP_Query( [
                        'posts_per_page' => '12',
                        'post_type'        => 'testimonialsslider',
						'posts_per_page' => 15
                        
                        ] );
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                            $query->the_post();
                            ?>
					<div class="page-reviews__slider-wrapper">
						<div class="page-reviews__slider-item">
							<img class="page-reviews__slider-img" src="<?php the_post_thumbnail_url();?>" alt="img">

							<div class="page-reviews__slider-title"><?php the_title()?></div>
							<p class="page-reviews__slider-text">
							<?php the_content();?>
							</p>
						</div>
					</div>
					<?php }
							} 
							else {
								
						}
						wp_reset_postdata(); 
					?> 
				</div>

				<div class="slider__block-arrows"></div>
			</div>
		</div>

		<div class="request">
			<div class="container">
				<form action="#" class="form">
					<div class="form__title">
						Остались вопросы?
						<div class="form__subtitle">
							Наши специалисты с радостью ответят на любые вопросы.
						</div>
					</div>
					<input type="text" class="input__form" placeholder="Ваше имя*" required>
					<input type="email" class="input__form" placeholder="Ваш телефон/E-mail" required>
					<button class="form__btn">Задать вопрос</button>
					<p class="form__text">
						Нажимая кнопку "Отправить заявку", я даю свое согласие на обработку моих персональных данных, а также
						подтверждаю,что ознакомлен (а) и согласен (а) с Политикой конфиденциальности.
					</p>
				</form>
			</div>
		</div>
	</main>
<?php
get_footer();
?>