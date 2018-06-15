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
			<span> &copy; Created by Tim Poerschke | Proudly powered by <a href="http://www.wordpress.org"> Wordpress</a> </span>
		</section>
	</footer><!-- footer -->
	<script>
		// Für die Navigation
		var menuOpen = false;
		var optIn = {duration: 800, easing: 'easeOutBack'};
		var optOut = {duration: 800, easing: 'easeInBack'};

		var templateDir = <?php echo "'" . get_template_directory_uri() . "'"; ?>;

		$('#menu-button').on('click', function(e){
			e.stopPropagation(); // -> Damit das parent-element nicht getriggert wird
			toggeleMenu();
		});

		$('header, main, footer').on('click', function(){
			if(menuOpen) {
				toggeleMenu();
			}
		});

		function toggeleMenu() {
			if(!menuOpen) {
				menuOpen = true;
			}
			else {
				menuOpen = false;
			}
		}

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
			$('#anti-blocker').addClass('info-error');
			$('#anti-blocker').html('<p><b>Du hast einen AdBlocker aktiviert? </b><br/> Bitte deaktiviere deinen AdBlocker. Ich verwende auf dieser Seite keine nervige Werbung. Von den Einnahmen kaufe ich mir lediglich einen Kaffee oder eine Kinokarte :-)</p>');
		}
	</script>
	<?php wp_footer(); ?>
	</body>
</html>
