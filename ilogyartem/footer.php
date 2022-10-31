<?php
?>
<footer class="footer">
		<div class="container">
			<div class="footer__inner">
				<div class="footer__item">
					<a href="/" class="footer__item-logo">
						<img src="<?php echo get_template_directory_uri()?>/assets/images/page/page-logo.svg" alt="img">
					</a>
					<p class="footer__item-copy">Copyright © 2006 — 2022 Ilogy IT Group</p>
					<!-- <a href="" class="footer__item-text">Политика конфиденциальности</a> -->
					<?php dynamic_sidebar( 'policy' ); ?>
				</div>
				<div class="footer__item">
						
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-footer',
                                'menu_id'        => 'nav',
                                'container'      => '',
                                'menu_class'	 => 'footer__menu-list',
                            )
                        );
                        ?>
				</div>
				<div class="footer__item">
					<?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-footer-page',
                                'menu_id'        => 'nav',
                                'container'      => '',
                                'menu_class'	 => 'footer__list',
                            )
                        );
                        ?>
				</div>
				<div class="footer__item">
					<p class="footer__item-address">
						<!-- г. Москва, ул. Нахимовский проспект, д. 4. -->
						<?php dynamic_sidebar( 'sidebar-blogg' ); ?>
					</p>
					<p class="footer__item-phone"><?php dynamic_sidebar( 'sidebar-phone' ); ?></p>
					<p class="footer__item-clock"><?php dynamic_sidebar( 'sidebar-blog' ); ?></p>
					<button class="footer__item-btn" data-modal>Оставить заявку</button>
				</div>
			</div>
		</div>
		<div class="modal">
  <div class="modal__inner">
      <div class="modal__inner-block">
          <div  class="modal-form">
			  <?php echo do_shortcode('[contact-form-7 id="215" title="Модалка"]')?>
			
              <div data-close class="modal__close">&times;</div>
          </div>
      </div>
  </div>
</div>
        <?php wp_footer();?>
	</footer>

</body>

</html>