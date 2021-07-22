<?php
get_header();
?>

<section class="at-section">
	<div class="container">
		<div class="row align-items-md-center">
			<div class="col-md-5">
				<div class="at-bp__img">
					<img src="<?php echo get_field('image_about')['url']; ?>" class="full-width" width="431" />
				</div>
			</div>
			<div class="col-md-7">
				<div class="at-bp__deskrip">
					<h3 class="at-section-title text-left"><?php the_field('title_about'); ?></h3>
					<?php the_field('description_about'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="at-section">
	<div class="container clearfix">
		<h3 class="at-section-title">Trusted by Indonesia’s Top Tech Companies 1</h3>
		<div class="at-section__company">
			<div class="row align-items-md-center">
				<div class="col-md-6 order-md-last">
					<div class="at-img__content">
						<img src="<?php echo get_field('image_company')['url']; ?>" class="full-width" width="522" />
					</div>
				</div>
				<div class="col-md-6">
					<ul class="at-list__company list-unstyled clearfix">
						<?php $list_company = get_field('list_company') ?>
						<?php foreach ($list_company as $key => $item_company): ?>
						<li>
							<div class="list-number">
								<?php $number = $key + 1 ?>
								<?php echo '0' . $number ?>
							</div>
							<div class="list-content">
								<h5><?php echo $item_company['title_list']; ?></h5>
								<?php echo $item_company['content_list']; ?>
							</div>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Section Join Us -->
<section class="at-section">
	<div class="container">
		<h3 class="at-section-title">Why Join Us?</h3>
		<div class="at-section__join">
			<div class="row">
				<?php $list_join = get_field('list_join') ?>
				<?php foreach ($list_join as $key => $item_join): ?>
				<div class="col-md-3 col-6">
					<div class="column-join">
						<img src="<?php echo $item_join['image_icon']; ?>" />
						<div class="column-deskrip__bottom">
							<?php echo $item_join['content_join']; ?>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<!-- End:: Section Join Us -->
<!-- Section Our Products and Services -->
<section class="at-section at-section__bg-center">
	<div class="container">
		<h3 class="at-section-title"><?php the_field('title_product_service'); ?></h3>
		<div class="at-section__product">
			<div class="row">
				<?php $list_product = get_field('list_product') ?>
				<?php foreach ($list_product as $key => $item_product): ?>
				<div class="col-lg-3 col-sm-6">
					<div class="column-product">
						<div class="column-product__img">
							<img src="<?php echo $item_product['logo_product']; ?>" width="77" />
						</div>	
						<h5><?php echo $item_product['title_product']; ?></h5>
						<?php echo $item_product['desc_product']; ?>
						<a href="<?php the_field('learn_more'); ?>" class="product-link">Learn More 
							<svg xmlns="http://www.w3.org/2000/svg" width="10.84" height="7.771" viewBox="0 0 10.84 7.771">
								<path id="right-arrow_1_" data-name="right-arrow (1)" d="M6.963,4.783a.367.367,0,0,0-.521.516L9.084,7.941H.365A.363.363,0,0,0,0,8.307a.367.367,0,0,0,.365.37H9.084L6.442,11.314a.374.374,0,0,0,0,.521.365.365,0,0,0,.521,0l3.268-3.268a.359.359,0,0,0,0-.516Z" transform="translate(0.25 -4.424)" fill="#2283f4" stroke="#2283f4" stroke-width="0.5"/>
							</svg>
						</a>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<!-- Slide CEO -->
		<div class="at-section__head">
			<div class="at-swiper__head swiper-container">
				<div class="swiper-wrapper">
					<?php $list_slider_ceo = get_field('list_slider_ceo') ?>
					<?php foreach ($list_slider_ceo as $key => $item_slick_ceo): ?>
					<div class="swiper-slide">
						<div class="at-swiper__item">
							<div class="row d-md-flex align-items-md-center">
								<div class="col-md-5">
									<div class="img-left">
										<img src="<?php echo $item_slick_ceo['img_ceo']['url']; ?>" />
									</div>
								</div>
								<div class="col-md-7">
									<div class="deskrip-right">
										<?php echo $item_slick_ceo['content_quotes']; ?>
										<h5><?php echo $item_slick_ceo['name_quotes']; ?></h5>
										<h4><?php echo $item_slick_ceo['position']; ?></h4>
									</div>
								</div>								
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
				<!-- Add Arrows -->
				<div class="at-swiper__arrow">
					<div class="at-swiper__button at-swiper__button-prev">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="11.262" height="18.191" viewBox="0 0 11.262 18.191">
							<defs>
								<clipPath id="clip-path">
								<rect id="Rectangle_3289" data-name="Rectangle 3289" width="17.674" height="10.351" fill="#e3e3e3"/>
								</clipPath>
							</defs>
							<g id="Group_15548" data-name="Group 15548" transform="matrix(0.052, 0.999, -0.999, 0.052, 10.337, 0)">
								<g id="Group_8261" data-name="Group 8261">
								<g id="Group_8260" data-name="Group 8260" clip-path="url(#clip-path)">
									<path id="Path_13105" data-name="Path 13105" d="M8.831,10.068a1.232,1.232,0,0,1-.872-.361L.364,2.112A1.237,1.237,0,0,1,2.112.362L8.831,7.081,15.55.365A1.236,1.236,0,0,1,17.3,2.112L9.706,9.707a1.231,1.231,0,0,1-.875.361Zm0,0" transform="translate(0 -0.001)" fill="#e3e3e3"/>
								</g>
								</g>
							</g>
						</svg>
					</div>
					<div class="at-swiper__button at-swiper__button-next">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10.658" height="17.852" viewBox="0 0 10.658 17.852">
							<defs>
								<clipPath id="clip-path">
								<rect id="Rectangle_3289" data-name="Rectangle 3289" width="17.674" height="10.351" fill="#19345e"/>
								</clipPath>
							</defs>
							<g id="Group_8262" data-name="Group 8262" transform="matrix(0.017, -1, 1, 0.017, 0, 17.671)">
								<g id="Group_8261" data-name="Group 8261">
								<g id="Group_8260" data-name="Group 8260" clip-path="url(#clip-path)">
									<path id="Path_13105" data-name="Path 13105" d="M8.831,10.068a1.232,1.232,0,0,1-.872-.361L.364,2.112A1.237,1.237,0,0,1,2.112.362L8.831,7.081,15.55.365A1.236,1.236,0,0,1,17.3,2.112L9.706,9.707a1.231,1.231,0,0,1-.875.361Zm0,0" transform="translate(0 -0.001)" fill="#19345e"/>
								</g>
								</g>
							</g>
						</svg>
					</div>
				</div>
				<!-- Add Pagination -->
				<div class="at-swiper__head-pagination"></div>
			</div>
		</div>
		<!-- End:: Slide CEO -->
	</div>
</section>
<!-- End:: Section Our Products and Services -->
<section class="at-section">
	<div class="container">
		<h3 class="at-section-title"><?php the_field('title_service_slider'); ?></h3>
		<div class="at-section__team">
			<div class="at-slick__team">
				<?php $list_slider_service = get_field('service_list') ?>
				<?php foreach ($list_slider_service as $key => $item_slide_service): ?>
				<div>
					<div class="at-team__img">
						<img src="<?php echo $item_slide_service['img_service']['url']; ?>" />
					</div>
					<?php echo $item_slide_service['desc_service']; ?>
				</div>
				<?php endforeach; ?>
			</div>
			<a href="<?php the_field('link_career'); ?>" class="btn btn-pill btn-secondary">
					<?php the_field('name_link_career');?>
			</a>
		</div>
	</div>
</section>
<!-- Section Our Milestone -->
<section class="at-section at-section__bg-left">
	<div class="container">
		<div class="row justify-content-end">
			<div class="col-md-10">
				<h3 class="at-section-title text-left"><?php the_field('title_product_service'); ?></h3>
			</div>
		</div>
		<div class="row justify-content-end">
			<div class="col-md-10">
				<div class="at-swiper__milestone swiper-container">
					<div class="swiper-wrapper">
						<?php $list_slider_milestone = get_field('list_milestone') ?>
						<?php foreach ($list_slider_milestone as $key => $item_slide_milestone): ?>
						<div class="swiper-slide">
							<div class="swiper-item__milestone">
								<div>
									<h5><?php echo $item_slide_milestone['date_milestone']; ?></h5>
									<?php echo $item_slide_milestone['desc_milestone']; ?>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					<!-- Add Arrows -->
					<div class="at-swiper__arrow">
						<div class="at-swiper__button at-swiper__button-prev">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="11.262" height="18.191" viewBox="0 0 11.262 18.191">
								<defs>
									<clipPath id="clip-path">
									<rect id="Rectangle_3289" data-name="Rectangle 3289" width="17.674" height="10.351" fill="#e3e3e3"/>
									</clipPath>
								</defs>
								<g id="Group_15548" data-name="Group 15548" transform="matrix(0.052, 0.999, -0.999, 0.052, 10.337, 0)">
									<g id="Group_8261" data-name="Group 8261">
									<g id="Group_8260" data-name="Group 8260" clip-path="url(#clip-path)">
										<path id="Path_13105" data-name="Path 13105" d="M8.831,10.068a1.232,1.232,0,0,1-.872-.361L.364,2.112A1.237,1.237,0,0,1,2.112.362L8.831,7.081,15.55.365A1.236,1.236,0,0,1,17.3,2.112L9.706,9.707a1.231,1.231,0,0,1-.875.361Zm0,0" transform="translate(0 -0.001)" fill="#e3e3e3"/>
									</g>
									</g>
								</g>
							</svg>
						</div>
						<div class="at-swiper__button at-swiper__button-next">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10.658" height="17.852" viewBox="0 0 10.658 17.852">
								<defs>
									<clipPath id="clip-path">
									<rect id="Rectangle_3289" data-name="Rectangle 3289" width="17.674" height="10.351" fill="#19345e"/>
									</clipPath>
								</defs>
								<g id="Group_8262" data-name="Group 8262" transform="matrix(0.017, -1, 1, 0.017, 0, 17.671)">
									<g id="Group_8261" data-name="Group 8261">
									<g id="Group_8260" data-name="Group 8260" clip-path="url(#clip-path)">
										<path id="Path_13105" data-name="Path 13105" d="M8.831,10.068a1.232,1.232,0,0,1-.872-.361L.364,2.112A1.237,1.237,0,0,1,2.112.362L8.831,7.081,15.55.365A1.236,1.236,0,0,1,17.3,2.112L9.706,9.707a1.231,1.231,0,0,1-.875.361Zm0,0" transform="translate(0 -0.001)" fill="#19345e"/>
									</g>
									</g>
								</g>
							</svg>
						</div>
					</div>
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End::Section Our Milestone -->
<!-- Section Article Kamis -->
<section class="at-section">
	<div class="container">
		<div class="at-swiper__kamis swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="swiper-item__kamis">
						<div class="kamis__img full-width">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/img_kamis@2x.png" alt="">
						</div>
						<div class="kamis__desc-bottom">
							<div class="desc-navbar">
								<div class="row align-items-center">
									<div class="col-5">
										<h5>Albert Iskandar</h5>
									</div>
									<div class="col-7 text-right">
										<a href="" class="kamis_love">
											<img src="<?php echo get_template_directory_uri() ?>/assets/img/ic_notlove@2x.png" alt="" width="21"/>
											51
										</a>
										<a href="" class="kamis_share">
											<img src="<?php echo get_template_directory_uri() ?>/assets/img/ic_share@2x.png" alt="" width="22"/>
											Share
										</a>
									</div>
								</div>
							</div>
							<div class="description">
								<div class="desc-height">
									<h3>Jangan menyendiri masih ada hari esok</h3>
									<p>
										There’s a very serious debate raging about whether there’s value at all in 
										going to college/university anymore. The massive debt pressure you put 
									</p>
								</div>
								<a href="" class="desc-more">Read More
									<svg xmlns="http://www.w3.org/2000/svg" width="10.84" height="7.771" viewBox="0 0 10.84 7.771">
										<path id="right-arrow_1_" data-name="right-arrow (1)" d="M6.963,4.783a.367.367,0,0,0-.521.516L9.084,7.941H.365A.363.363,0,0,0,0,8.307a.367.367,0,0,0,.365.37H9.084L6.442,11.314a.374.374,0,0,0,0,.521.365.365,0,0,0,.521,0l3.268-3.268a.359.359,0,0,0,0-.516Z" transform="translate(0.25 -4.424)" fill="#2283f4" stroke="#2283f4" stroke-width="0.5"/>
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="swiper-item__kamis">
						<div class="kamis__img full-width">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/img_kamis@2x.png" alt="">
						</div>
						<div class="kamis__desc-bottom">
							<div class="desc-navbar">
								<div class="row align-items-center">
									<div class="col-5">
										<h5>Yanuar Junior</h5>
									</div>
									<div class="col-7 text-right">
										<a href="" class="kamis_love">
											<img src="<?php echo get_template_directory_uri() ?>/assets/img/ic_love@2x.png" alt="" width="21"/>
											51
										</a>
										<a href="" class="kamis_share">
											<img src="<?php echo get_template_directory_uri() ?>/assets/img/ic_share@2x.png" alt="" width="22"/>
											Share
										</a>
									</div>
								</div>
							</div>
							<div class="description">
								<div class="desc-height">
									<h3>Cara gaul mudah di Alterra</h3>
									<p>
										There’s a very serious debate raging about whether there’s value at all in 
										going to college/university anymore. The massive debt pressure you put 
									</p>
								</div>
								<a href="" class="desc-more">Read More
									<svg xmlns="http://www.w3.org/2000/svg" width="10.84" height="7.771" viewBox="0 0 10.84 7.771">
										<path id="right-arrow_1_" data-name="right-arrow (1)" d="M6.963,4.783a.367.367,0,0,0-.521.516L9.084,7.941H.365A.363.363,0,0,0,0,8.307a.367.367,0,0,0,.365.37H9.084L6.442,11.314a.374.374,0,0,0,0,.521.365.365,0,0,0,.521,0l3.268-3.268a.359.359,0,0,0,0-.516Z" transform="translate(0.25 -4.424)" fill="#2283f4" stroke="#2283f4" stroke-width="0.5"/>
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="swiper-item__kamis">
						<div class="kamis__img full-width">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/img_kamis@2x.png" alt="">
						</div>
						<div class="kamis__desc-bottom">
							<div class="desc-navbar">
								<div class="row align-items-center">
									<div class="col-5">
										<h5>Audi Fristya</h5>
									</div>
									<div class="col-7 text-right">
										<a href="" class="kamis_love">
											<img src="<?php echo get_template_directory_uri() ?>/assets/img/ic_love@2x.png" alt="" width="21"/>
											51
										</a>
										<a href="" class="kamis_share">
											<img src="<?php echo get_template_directory_uri() ?>/assets/img/ic_share@2x.png" alt="" width="22"/>
											Share
										</a>
									</div>
								</div>
							</div>
							<div class="description">
								<div class="desc-height">
									<h3>Pengumuman Pemenang Kompetisi KAMIS!</h3>
									<p>
										There’s a very serious debate raging about whether there’s value at all in 
										going to college/university anymore. The massive debt pressure you put 
									</p>
								</div>
								<a href="" class="desc-more">Read More
									<svg xmlns="http://www.w3.org/2000/svg" width="10.84" height="7.771" viewBox="0 0 10.84 7.771">
										<path id="right-arrow_1_" data-name="right-arrow (1)" d="M6.963,4.783a.367.367,0,0,0-.521.516L9.084,7.941H.365A.363.363,0,0,0,0,8.307a.367.367,0,0,0,.365.37H9.084L6.442,11.314a.374.374,0,0,0,0,.521.365.365,0,0,0,.521,0l3.268-3.268a.359.359,0,0,0,0-.516Z" transform="translate(0.25 -4.424)" fill="#2283f4" stroke="#2283f4" stroke-width="0.5"/>
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="swiper-item__kamis">
						<div class="kamis__img full-width">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/img_kamis@2x.png" alt="">
						</div>
						<div class="kamis__desc-bottom">
							<div class="desc-navbar">
								<div class="row align-items-center">
									<div class="col-5">
										<h5>Atikah Mahmuda</h5>
									</div>
									<div class="col-7 text-right">
										<a href="" class="kamis_love">
											<img src="<?php echo get_template_directory_uri() ?>/assets/img/ic_love@2x.png" alt="" width="21"/>
											51
										</a>
										<a href="" class="kamis_share">
											<img src="<?php echo get_template_directory_uri() ?>/assets/img/ic_share@2x.png" alt="" width="22"/>
											Share
										</a>
									</div>
								</div>
							</div>
							<div class="description">
								<div class="desc-height">
									<h3>Never Stop Innovating</h3>
									<p>
										There’s a very serious debate raging about whether there’s value at all in 
										going to college/university anymore. The massive debt pressure you put 
									</p>
								</div>
								<a href="" class="desc-more">Read More
									<svg xmlns="http://www.w3.org/2000/svg" width="10.84" height="7.771" viewBox="0 0 10.84 7.771">
										<path id="right-arrow_1_" data-name="right-arrow (1)" d="M6.963,4.783a.367.367,0,0,0-.521.516L9.084,7.941H.365A.363.363,0,0,0,0,8.307a.367.367,0,0,0,.365.37H9.084L6.442,11.314a.374.374,0,0,0,0,.521.365.365,0,0,0,.521,0l3.268-3.268a.359.359,0,0,0,0-.516Z" transform="translate(0.25 -4.424)" fill="#2283f4" stroke="#2283f4" stroke-width="0.5"/>
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End::Section Article Kamis -->
<!-- Section Media Coverage -->
<section class="at-section">
	<div class="container">
		<h3 class="at-section-title"><?php the_field('title_media'); ?></h3>
		<div class="at-section__media">
			<ul class="at-list__media list-unstyled clearfix">
				<?php $list_media = get_field('list_media') ?>
				<?php foreach ($list_media as $key => $img_media): ?>
				<li>
					<div class="media-img">
						<img src="<?php echo $img_media['img_media']['url']; ?>" />
					</div>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</section>
<!-- End:: Section Media Coverage -->

<?php
get_footer();
