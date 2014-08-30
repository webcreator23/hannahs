				<?php if(is_active_sidebar('footer')) { ?>

				<div class="clear"></div>

				<div class="footer-widgets clearfix">

					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer')) ?>

				</div>

				<?php } ?>

			</div>		

		</section>

		<!-- content -->

		<footer class="container site-footer">		

			<div class="row">

				<div class="copyright">

					<?php echo themex_get_string('copyright', 'option', ThemexCore::getOption('copyright', 'Hannah\'s Beach Resort &copy; '.date('Y'))); ?>

				</div>

				<?php wp_nav_menu(array('theme_location' => 'footer_menu', 'container_class' => 'menu')); ?>

			</div>

		</footer>

		<!-- footer -->

		<div class="substrate bottom-substrate">


		</div>

	</div>

<?php wp_footer(); ?>

</body>

</html>