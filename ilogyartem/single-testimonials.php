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
		<div class="review">
			<div class="container">
				<div class="breadcrumbs">
					<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
				</div>
				<h2 class="review__title">
					Отзыв от компании "Дружная семья"
				</h2>
				<div class="review__block">
					<div class="review__block-img">
						<img src="<?php echo get_field('izobrazheniee')['url'];?>" alt="img">
					</div>
					<div class="review__block-content">
						<div class="review__block-date"><?php echo get_the_date();?></div>
						<p class="review__block-text">
							<?php the_excerpt();?>
						</p>
						
					</div>
				</div>
			</div>
		</div>
		<div class="page-reviews">
			<div class="container">
				<div class="page-reviews__title">Другие отзывы</div>
				<div class="page-reviews__slider">
				<?php		
                        global $post;
                        $query = new WP_Query( [
                        'posts_per_page' => '12',
                        'post_type'        => 'testimonialsslider',
                        
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