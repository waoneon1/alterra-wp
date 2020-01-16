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
											<?php $nav_header = get_field('header_nav', 'option') ?>
											<?php foreach ($nav_header as $key => $item_nav): ?>
											<li>
												<a href="<?php echo $item_nav['header_navbar']['url']; ?>"><?php echo $item_nav['header_navbar']['title']; ?></a>
											</li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
								<div class="col-md-3">
									<div class="at-navbar-button">
										<a href="<?php the_field('get_in_touch'); ?>" class="btn btn-primary btn-pill">
											<?php the_field('link_name_header'); ?>
										</a>
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
									<a href="" class="<?php echo get_field('video') ? 'js-modal-btn' : '' ?>">
										<?php print_r (get_field('header_video','option')); ?>
										<div class="ch-c-modal-vid js-modal-data" data-url="<?php the_field('header_video','option') ?>" data-type="youtube">
											<!-- <span class="ch-c-modal-vid__btn"></span> -->
										</div>
										<img src="<?php the_field('image_header'); ?>" class="full-width" width="405" />
									</a>
								</div>
							</div>
							<div class="col-md-7">
								<div class="at-header__content">
									<h1><?php the_field('title_header'); ?></h1>
									<?php the_field('description_header'); ?>
									<a href="<?php the_field('get_in_touch'); ?>" class="btn btn-primary btn-pill">
										<?php the_field('link_name_header'); ?>
									</a>
								</div>
							</div>
						</div>
					</div>
				</header>
			</div>
			
			<!-- The Modal -->
			<div class="ch-c-modal ch-c-modal--overlay js-modal">
			<!-- Modal content -->
				<div class="ch-c-modal__content ch-c-modal__vid--fluid js-modal-content">
					<div class="ch-modal__wrapper">
						<iframe width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<span class="ch-c-modal__close js-modal-close">&times;</span>
				</div>
			</div>