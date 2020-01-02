<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alterra
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="app">
	<div class="app-container">
		<div class="at-page">
			<div class="at-wrapper">
				<nav class="navbar navbar-expand-md">
					<div class="container">
						<div class="at-navbar">
							<div class="row align-items-center">
								<div class="col-md-9">
									<div class="at-navbar-nav">
										<a href="" class="at-navbar__logo">
											<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo_nav@2x.png" width="120" />
										</a>
										<ul class="at-navbar__list navbar-nav list-unstyled clearfix">
											<li><a href="">Why Us</a></li>
											<li><a href="">Product</a></li>
											<li><a href="">Our Culture</a></li>
											<li><a href="">Kamis</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-3">
									<div class="at-navbar-button">
										<a href="" class="btn btn-primary btn-pill">Get in touch</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</nav>
				<header class="at-header d-md-flex align-items-md-center">
					<div class="container clearfix">
						<div class="row align-items-md-center">
							<div class="col-md-5 order-md-last">
								<div class="at-header__img">
									<a href="">
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/img_header@2x.png" class="full-width" width="405" />
									</a>
								</div>
							</div>
							<div class="col-md-7">
								<div class="at-header__content">
									<h1>Your Innovative Bill
										<br />& Payment Solution</h1>
									<p>We are ready to help your business grow through a wide
										<br />range of digital bill and payment service. </p>
									<a href="" class="btn btn-primary btn-pill">Get in touch</a>
								</div>
							</div>
						</div>
					</div>
				</header>
			</div>