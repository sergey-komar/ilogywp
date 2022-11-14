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
						<img src="<?php echo get_field('izobrazhenie_poleznyh_materialov')['url'];?>" alt="img">
					</div>
					<div class="copying__block-content">
						<?php the_field('tekst_sprava_ot_izobrazhenie_poleznyh_materialov');;?>
					</div>
				</div>
				<?php if(have_rows('taksonomiya_materialov')) : while(have_rows('taksonomiya_materialov')) : the_row(); ?>
				<div class="copying__block-text">
				<?php the_sub_field('materialy_abzaczy')?>
				</div>
				<?php endwhile; endif; ?>


				<div class="copying__subtitle"><?php the_field('podzagolovk_materiala')?></div>
				<p class="copying__subtitle-text">
                	<?php the_field('4_abzacz_poleznyh_materialov')?>
				</p>


				<ul class="copying__list">
					<?php if(have_rows('spisok_markirovannyj_poleznye_materialy')) : while(have_rows('spisok_markirovannyj_poleznye_materialy')) : the_row(); ?>
					<li class="copying__list-item">
						<img src="<?php the_sub_field('izobrazhenie_spisok_poleznye_materialy')?>" alt="" class="copying__list-item-img">
						<a href="#" class="copying__list-link"><?php the_sub_field('tekst_spisok_poleznye_materialy')?></a>
					</li>
					<?php endwhile; endif; ?>
				</ul>
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
					<?php if(have_rows('tablicza_poleznyh_materialov')) : while(have_rows('tablicza_poleznyh_materialov')) : the_row(); ?>
					<div class="table__top">
						<div class="table__top-title"><?php the_sub_field('usluga_poleznyh_materialov')?></div>
						<div class="table__top-price"><?php the_sub_field('stoimost_poleznyh_materialov')?></div>
						<div class="table__top-desc">
                        <?php the_sub_field('opisanie_poleznyh_materialov')?>
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
					<a href="<?php the_permalink();?>" class="page-reviews__slider-wrapper">
						<div class="page-reviews__slider-item">
							<img class="page-reviews__slider-img" src="<?php the_post_thumbnail_url();?>" alt="img">

							<div class="page-reviews__slider-title"><?php the_title()?></div>
							<p class="page-reviews__slider-text">
							<?php the_content();?>
							</p>
						</div>
					</a>
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