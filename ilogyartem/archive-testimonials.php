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
								<button class="slider__content-btn page"data-modal>Заказать услугу</button>
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

		<div class="reviews">
			<div class="container">
				<div class="breadcrumbs">
				<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
				</div>
				<div class="reviews__title-top">Наши отзывы</div>
				<div class="reviews__inner">
				<?php
          
		  if ( have_posts() ) :

		  while ( have_posts() ) :
			  the_post();?>
					
					<div class="reviews__wrapper">
						<div class="reviews__item">
							<img class="reviews__img" src="<?php the_post_thumbnail_url();?>" alt="img">
							<div class="reviews__title"><?php the_title();?></div>
							<p class="reviews__text">
							<?php the_content();?>
							</p>
							<a href="<?php the_permalink();?>" class="reviews__link">Подробнее</a>
						</div>
					</div>
					<?php
                endwhile;
            else :
            echo "<div> Нет отзывов</div>"; 
            endif;
            ?>  
          
						
					
				</div>
				<?php the_posts_pagination([
                    'prev_text'    => __(''),
                    'next_text'    => __(''),
                    'before_page_number' => '',
	                'after_page_number'  => ''
                ]);?>
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
							Нажимая кнопку "Отправить заявку", я даю свое согласие на обработку моих персональных данных, а
							также подтверждаю,что ознакомлен (а) и согласен (а) с Политикой конфиденциальности.
						</p>
					</div>
				</div>
			</div>
		</div>
</main>
<?php
get_footer();
?>