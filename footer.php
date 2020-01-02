<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alterra
 */

?>

<footer class="at-footer">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-8">
				<div class="at-footer__left">
					<a href="" class="at-footer__logo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo_footer@2x.png" width="118" />
					</a>
					<p>
						&copy; Alterra. All rights reserved except noted. EdX, Open edx and their respective
						<br/>logos are trademarks or registered trademarks of edX Inc.
					</p>
					<a href="">Kebijakan Privasi</a>
					<a href="">Ketentuan Layanan</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="at-footer__nav">
					<h5>Alterra</h5>
					<ul class="at-footer__list list-unstyled clearfix">
						<li>
							<a href="">About</a>
						</li>
						<li>
							<a href="">FAQ</a>
						</li>
						<li>
							<a href="">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

</div><!-- closing at-page -->
</div><!-- closing app-container -->
</div><!-- closing app -->
<?php wp_footer(); ?>

</body>
</html>
