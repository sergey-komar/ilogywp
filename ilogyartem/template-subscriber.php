<?php
/*
Template name: Абонентское обслуживание
*/ 
?>

<?php
get_header();
?>
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
   <section class="section-subscriber">
        <div class="container">
			<?php
                if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    the_content();
                    ?>
                 

                    
                    <?php   endwhile;
                        else :
                        endif;
                    ?>
                    
        </div>
    </section>
<?php
get_footer();
?>