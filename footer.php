		</div><!-- .wrapper -->
	</main><!-- main -->
	<footer role="contentinfo">
		<section class="main-footer">
			<?php if(is_active_sidebar('first-footer-widget-area')) : ?>
				<div class="footer-widget-area left-footer">
					<ul>
						<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
					</ul>
				</div> <!-- .widget-area -->
			<?php endif; ?>
			<?php if(is_active_sidebar('second-footer-widget-area')) : ?>
				<div class="footer-widget-area right-footer">
					<ul>
						<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
					</ul>
				</div> <!-- .widget-area -->
			<?php endif; ?>
		</section>
		<section class="footer-bottom">
			<?php if(is_active_sidebar('third-footer-widget-area')) : ?>
				<div class="widget-area">
					<ul>
						<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
					</ul>
				</div> <!-- .widget-area -->
			<?php endif; ?>
			<?php wp_nav_menu(array(
				//'menu_class' => 'menu',
				'container_id' => 'secondary_menu',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'theme_location' => 'secondary'
				)
			); ?>
			<span class="themeinfo"> &copy; Created by Tim Poerschke | Proudly powered by <a href="http://www.wordpress.org"> Wordpress</a> </span>
		</section>
	</footer><!-- footer -->
	<script>
		// Einige Konstanten werden auch von Javascript benötigt.
		// Diese werden hier aufgelistet.
		const assetsPath = {
				javascript: '<?php assetsPath('javascript'); ?>',
				image: '<?php assetsPath('image'); ?>',
		};
	</script>
	<script src="<?php assetsPath('javascript'); ?>/navigation.js"></script>
	<script>
		// AdBlocker-Blocker
		try {
			if(!noblocker) {
				showBlockerInfo();
			}
			else {
				$('#anti-blocker').html('');
			}
		} catch(e) {
			showBlockerInfo();
		}

		function showBlockerInfo() {
			$('#anti-blocker').addClass('info');
			$('#anti-blocker').addClass('error');
			$('#anti-blocker').html('<p class="content"><b>Du hast einen AdBlocker aktiviert? </b><br/> Bitte deaktiviere deinen AdBlocker. Ich verwende auf dieser Seite keine nervige Werbung. Von den Einnahmen kaufe ich mir lediglich einen Kaffee oder eine Kinokarte :-)</p>');
		}
	</script>
	<?php wp_footer(); ?>
	</body>
</html>
