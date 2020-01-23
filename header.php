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
				<nav class="navbar">
					<div class="container">
						<div class="at-navbar">
							<div class="row align-items-center">
								<div class="col-md-9 col-5">
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
								<div class="col-md-3 col-7">
									<div class="at-navbar-button">
										<a href="<?php the_field('get_in_touch'); ?>" class="btn btn-primary btn-pill">
											<?php the_field('link_name_header'); ?>
										</a>
										<a href="" class="at-navbar-ic">
											<svg id="Group_8321" data-name="Group 8321" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 16.646" width="25">
												<path id="Path_13354" data-name="Path 13354" d="M23.031,158.819H.969a.969.969,0,0,1,0-1.939H23.031a.969.969,0,0,1,0,1.939Z" transform="translate(0 -149.526)"></path>
												<path id="Path_13355" data-name="Path 13355" d="M23.031,1.939H.969A.969.969,0,0,1,.969,0H23.031a.969.969,0,1,1,0,1.939Z"></path>
												<path id="Path_13356" data-name="Path 13356" d="M23.031,315.7H.969a.969.969,0,0,1,0-1.939H23.031a.969.969,0,1,1,0,1.939Z" transform="translate(0 -299.053)"></path>
											</svg>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</nav>
				<div class="at-navbar--abs">
					<div class="container">
						<nav role="navigation" class="nav-mobile" id="navbar-m">
							<ul class="at-navbar__list navbar-nav list-unstyled clearfix">
								<?php $nav_header = get_field('header_nav', 'option') ?>
								<?php foreach ($nav_header as $key => $item_nav): ?>
								<li>
									<a href="<?php echo $item_nav['header_navbar']['url']; ?>"><?php echo $item_nav['header_navbar']['title']; ?></a>
								</li>
								<?php endforeach; ?>
							</ul>
						</nav>
					</div>
				</div>
				<header class="at-header d-md-flex align-items-md-center">
					<div class="container clearfix">
						<div class="row align-items-md-center">
							<div class="col-md-5 order-md-last">
								<div class="at-header__img">
									<a href="" class="<?php echo get_field('video') ? 'js-modal-btn' : '' ?>">
										<div class="ch-c-modal-vid js-modal-data" data-url="dfl" data-type="youtube">
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
			