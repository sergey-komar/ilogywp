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
						<div class="slider__block slider__block-page">
							<div class="slider__content">
								<div class="slider__content-title">
								<?php the_field('zagolovok')?>
								</div>
								<p class="slider__content-text slider__content-text-page page">
									<?php the_field('tekst')?>
								</p>
								<button data-modal class="slider__content-btn page">Заказать услугу</button>
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
						</div>
					</div>
				</div>
				<?php
				}
				
				?>
			
			</div>
		</div>

		<div class="copying">
			<div class="container">
				<div class="breadcrumbs">
                    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
				</div>

				<h2 class="copying__title">
					<?php the_title();?>
				</h2>
				<div class="copying__block">
					<div class="copying__block-img">
						<img src="<?php the_post_thumbnail_url();?>" alt="img">
					</div>
					<div class="copying__block-content">
						<?php the_content();?>
					</div>
				</div>
				<?php if(have_rows('abzaczy')) : while(have_rows('abzaczy')) : the_row(); ?>
				<div class="copying__block-text">
				<?php the_sub_field('abzacz1')?>
				</div>
				<?php endwhile; endif; ?>


				<div class="copying__subtitle"><?php the_field('podzagolovok')?></div>
				<p class="copying__subtitle-text">
                	<?php the_field('tekst_4_abzacz')?>
				</p>


				<ul class="copying__list">
					<?php if(have_rows('spisok')) : while(have_rows('spisok')) : the_row(); ?>
					<li class="copying__list-item">
						<img src="<?php the_sub_field('marktrovannyj_spisok_izobrazhenie')?>" alt="" class="copying__list-item-img">
						<a href="#" class="copying__list-link"><?php the_sub_field('markirovannyj_spisok_tekst')?></a>
					</li>
					<?php endwhile; endif; ?>
				</ul>
			</div>
		</div>

		<div class="work">
			<div class="container">
				<h3 class="work__title">Как мы работаем:</h3>
				<div class="work__inner">
					<div class="work__item">
						<p class="work__item-text">
						<?php the_field('pole1')?>
						</p>
						<div class="work__item-img">
							<img src="<?php echo get_template_directory_uri()?>/assets/images/page/number-1.svg" alt="img">
						</div>
					</div>
					<div class="work__item">
						<p class="work__item-text">
						<?php the_field('pole2')?>
						</p>
						<div class="work__item-img">
							<img src="<?php echo get_template_directory_uri()?>/assets/images/page/number-2.svg" alt="img">
						</div>
					</div>
					<div class="work__item">
						<p class="work__item-text">
						<?php the_field('pole3')?>
						</p>
						<div class="work__item-img">
							<img src="<?php echo get_template_directory_uri()?>/assets/images/page/number-3.svg" alt="img">
						</div>
					</div>
					<div class="work__item">
						<p class="work__item-text">
						<?php the_field('pole4')?>
						</p>
						<div class="work__item-img">
							<img src="<?php echo get_template_directory_uri()?>/assets/images/page/number-4.svg" alt="img">
						</div>
					</div>
					<div class="work__item">
						<p class="work__item-text">
						<?php the_field('pole5')?>
						</p>
						<div class="work__item-img">
							<img src="<?php echo get_template_directory_uri()?>/assets/images/page/number-5.svg" alt="img">
						</div>
					</div>
					<div class="work__item">
						<p class="work__item-text">
						<?php the_field('pole6')?>
						</p>
						<div class="work__item-img">
							<img src="<?php echo get_template_directory_uri()?>/assets/images/page/number-6.svg" alt="img">
						</div>
					</div>
					<div class="work__item">
						<p class="work__item-text">
						<?php the_field('pole7')?>
						</p>
						<div class="work__item-img">
							<img src="<?php echo get_template_directory_uri()?>/assets/images/page/number-7.svg" alt="img">
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
							<img src="<?php echo get_field('kartinka1')['url'];?>" alt="img">
							<p class="get__item-text">
							<?php the_field('tekst1')?>
							</p>
						</div>
					</div>
					<div class="get__item">
						<div class="get__item-img">
							<img src="<?php echo get_field('kartinka2')['url'];?>" alt="img">
							<p class="get__item-text">
							<?php the_field('tekst2')?>
							</p>
						</div>
					</div>
					<div class="get__item">
						<div class="get__item-img">
							<img src="<?php echo get_field('kartinka3')['url'];?>" alt="img">
							<p class="get__item-text">
							<?php the_field('tekst3')?>
							</p>
						</div>
					</div>
					<div class="get__item">
						<div class="get__item-img">
							<img src="<?php echo get_field('kartinka4')['url'];?>" alt="img">
							<p class="get__item-text">
							<?php the_field('tekst4')?>
							</p>
						</div>
					</div>
					<div class="get__item">
						<div class="get__item-img">
							<img src="<?php echo get_field('kartinka5')['url'];?>" alt="img">
							<p class="get__item-text">
							<?php the_field('tekst5')?>
							</p>
						</div>
					</div>
					<div class="get__item">
						<div class="get__item-img">
							<img src="<?php echo get_field('kartinka6')['url'];?>" alt="img">
							<p class="get__item-text">
							<?php the_field('tekst6')?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="table">
			<div class="container">
				<div class="table__title">Табличные данные</div>
				<div class="table__inner">
					<div class="table-main">
						<div class="table-main__title">Услуга</div>
						<div class="table-main__price">Стоимость </div>
						<div class="table-main__desc">Описание услуги</div>
					</div>
					<?php if(have_rows('uslugi_vverh')) : while(have_rows('uslugi_vverh')) : the_row(); ?>
					<div class="table__top">
						<div class="table__top-title"><?php the_sub_field('uslugaya_pervaya')?></div>
						<div class="table__top-price"><?php the_sub_field('stoimost_pervaya')?></div>
						<div class="table__top-desc">
                        <?php the_sub_field('opisanie_pervoe')?>
						</div>
					</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>

		<div class="request">
			<div class="container">
				<div action="#" class="form">
					<div class="form__title">
						Отправьте заявку и получите гарантированную
						скидку на наши услуги
					</div>
					<?php echo  do_shortcode( '[contact-form-7 id="183" title="Форма"]' )?>
					<p class="form__text">
						Нажимая кнопку "Отправить заявку", я даю свое согласие на обработку моих персональных данных, а также
						подтверждаю,что ознакомлен (а) и согласен (а) с Политикой конфиденциальности.
					</p>
				</div>
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
						<?php 
							if( get_the_terms( $post->ID, 'seti-type' )){
								
							$cur_terms = get_the_terms( $post->ID, 'seti-type' );
							foreach( $cur_terms as $cur_term ){
								echo '<a href="'. get_term_link( (int)$cur_term->term_id, $cur_term->taxonomy ) .'" class="palm__content-btn"> Подробнее</a>';
							}
							}
						?>
						
						<!-- <button class="palm__content-btn"  data-modal>Подробнее</button> -->
					</div>
					<div class="palm__block-img">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/page/palm.jpg" alt="img">
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
				<div action="#" class="form">
					<div class="form__title">
						Остались вопросы?
						<div class="form__subtitle">
							Наши специалисты с радостью ответят на любые вопросы.
						</div>
					</div>
					<?php echo  do_shortcode( '[contact-form-7 id="183" title="Форма"]' )?>
					<p class="form__text">
						Нажимая кнопку "Отправить заявку", я даю свое согласие на обработку моих персональных данных, а также
						подтверждаю,что ознакомлен (а) и согласен (а) с Политикой конфиденциальности.
					</p>
				</div>
			</div>
		</div>
	</main>
<?php
get_footer();
?>