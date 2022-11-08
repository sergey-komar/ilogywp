<?php
/*
Template name: Главная
*/ 
?>

<?php
get_header();
?>
<main class="main">

<div class="slider">
    <div class="container">
        <div class="slider__inner">
                <?php		
                global $post;
                $query = new WP_Query( [
                'posts_per_page' => '12',
                'post_type'        => 'homeslider',
                
                ] );
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                    $query->the_post();
                ?>
            <div class="slider__wrapper-block">
                <div class="slider__block">
                    <div class="slider__content">
                        <div class="slider__content-title ">
                        <?php the_title()?>
                        </div>
                        <div class="slider__content-text">
                            <?php the_content();?>
                        </div>
                        <button class="slider__content-btn"data-modal>Перезвоните мне</button>
                    </div>
                    <div class="slider__img">
                        <img src="<?php the_post_thumbnail_url();?>" alt="img">
                    </div>
                </div>
            </div>
                <?php }
                        } 
                        else {
                            
                    }
                    wp_reset_postdata(); 
                ?> 
           
        </div>
        <div class="slider__arrows">
        </div>
    </div>
</div>

<div class="organization">
    <div class="container">
        <div class="organization__title">
        <?php the_field('zagolovok')?>
        </div>
        <p class="organization__text">
        <?php the_field('abzacz_na_glavnoj_1')?>
        </p>
        <p class="organization__text">
        <?php the_field('abzacz_na_glavnoj_2')?>
        </p>
        <p class="organization__text">
        <?php the_field('abzacz_na_glavnoj_3')?>
        </p>
    </div>
</div>


<div class="popular">
    <div class="container">
        <div class="popular__title">Популярные услуги</div>
        <div class="popular__block">
                    <?php		
                        global $post;
                        $query = new WP_Query( [
                        'posts_per_page' => '12',
                        'post_type'        => 'popular',
                        
                        ] );
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                            $query->the_post();
                    ?>
            <div class="popular__item">
                <div class="popular__item-top">
                    <img src="<?php the_post_thumbnail_url();?>" alt="img">
                </div>
                <div class="popular__item-bottom">
                    <div class="popular__item-title">
                        <?php the_title();?>
                    </div>
                    <p class="popular__item-text">
                        <?php the_excerpt();?>
                    </p>
                    <div class="popular__item-box">
                        <button class="popular__item-btn">Заказать</button>
                        <a href="<?php the_permalink();?>" class="popular__item-link">Подробнее</a>
                    </div>
                </div>
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

<div class="request">
    <div class="container">
        <div action="#" class="form">
            <div class="form__title">
                Отправьте заявку и получите гарантированную
                <span>скидку 50%</span> на тариф
            </div>
            <?php echo  do_shortcode( '[contact-form-7 id="183" title="Форма"]' )?>
            <p class="form__text">
                Нажимая кнопку "Отправить заявку", я даю свое согласие на обработку моих персональных данных, а также
                подтверждаю,что ознакомлен (а) и согласен (а) с Политикой конфиденциальности.
            </p>
        </div>
    </div>
</div>

<div class="remotely">
    <div class="container">
        <div class="remotely__title">Работаем удаленно</div>
        <div class="remotely__block">
            <div class="remotely__left">
                <div class="remotely__left-title">Организация удаленной работы</div>
            </div>
            <div class="remotely__right">
                <div class="remotely__right-title">
                    Как&nbsp;контролировать удаленных работников
                </div>
            </div>
        </div>
    </div>
</div>

<div class="solutions">
    <div class="container">
        <div class="solutions__title">Готовые решения</div>
        <div class="solutions__block">

                    <?php		
                        global $post;
                        $query = new WP_Query( [
                        'posts_per_page' => '12',
                        'post_type'        => 'solutions',
                        
                        ] );
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                            $query->the_post();
                    ?>
            <div class="solutions__item">
                <div class="solutions__item-top">
                    <img src="<?php the_post_thumbnail_url();?>" alt="img">
                </div>
                <div class="solutions__item-bottom">
                    <div class="solutions__item-title"> <?php the_title();?></div>
                    <p class="solutions__item-text">
                       <?php the_excerpt();?>
                    </p>
                    <div class="solutions__item-box">
                        <button class="solutions__item-btn">Заказать</button>
                        <a href="<?php the_permalink();?>" class="solutions__item-link">Подробнее</a>
                    </div>
                </div>
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

<div class="materials">
    <div class="container">
        <div class="materials__title">Полезные материалы</div>
        <div class="materials__block">
                    <?php		
                        global $post;
                        $query = new WP_Query( [
                        'posts_per_page' => '12',
                        'post_type'        => 'materials'
                        ] );
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                            $query->the_post();
                    ?>
            <div class="materials__item">
                <div class="materials__item-top">
                    <a href="<?php the_permalink();?>" class="materials__item-title"><?php the_title();?></a>
                    <div class="materials__item-text">
                    <?php the_excerpt();?>
                    </div>
                </div>
                <div class="materials__item-bottom">
                    <img src="<?php the_post_thumbnail_url();?>" alt="img">
                </div>
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