<?php
?>
<!DOCTYPE html>
<html <?php language_attributes()?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>

<body>

	<header class="header">
		<div class="container">
			<div class="header__inner">
				<div class="header-top">
					<div class="header-top__inner">
					<?php the_custom_logo();?>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-header',
                                'menu_id'        => 'nav',
                                'container'      => '',
                                'menu_class'	 => 'menu-top'
                            )
                        );
                        ?>
						<div class="nav-icon">
							<div class="nav-icon__middle"></div>
						</div>
						<div class="header-top__right">
							<button class="header-top__btn" data-modal data-da=".menu-top, 768, 1">Оставить заявку</button>
							<div class="header-top__info">
								<!-- <a href="tel:+74951860638" class="header-top__info-phone">+7 (495) 186-06-38</a>
								<p class="header-top__info-text">ежедневно с 9: 00 до 23:00</p> -->
								<p ><?php dynamic_sidebar( 'header-phone' ); ?></p>
								<p class="header-top__info-text"><?php dynamic_sidebar( 'header-time' ); ?></p>
							</div>
							<div class="header-top__icon">
								<span></span>
							</div>
						</div>
					</div>
				</div>
				<div class="header__line"></div>
				<div class="header-bottom">
				
                    <div class="menu-bottom__list mobile" data-da=".menu-top, 768, last">
						
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-header-bottom',
                                'menu_id'        => 'nav',
                                'container'      => 'menu-bottom',
                                'menu_class'	 => 'menu-bottom__list',
                            )
                        );
                        ?>
					</div>
                  
               
				</div>
			</div>
		</div>
	</header>