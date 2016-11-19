<?php
	$this->layout('home', array(
		'html_class' => 'Home',
    'footer' => false,
    'page_title' => 'Product designer and  creative director',
	));
?>

<div class="HomeSwiper swiper-container">
	<div class="swiper-wrapper">
		<div class="Masthead swiper-slide slide-0" data-index="0">
			<div class="Masthead-wrap wrap">
				<h1>I design apps and websites for global brands and startups.</h1>
				<p>
					Recent projects include
					<a href="<?php $this->route('lonely-planet'); ?>">Lonely Planet</a>,
					<a href="<?php $this->route('airbnb'); ?>">Airbnb</a>, and Salesforce.
				</p>
			</div>
		</div>

		<div class="CaseStudy swiper-slide slide-1 not-animated" data-index="1">
			<div class="CaseStudy-wrap wrap">
				<div class="CaseStudy-description">
					<time class="date" datetime="2015-12">December 2015</time>
					<h2 class="title">Lonely Planet Destinations &amp; Guides</h2>
					<p class="intro">
						Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id
						ligula porta felis euismod semper.
					</p>
					<a href="<?php $this->route('lonely-planet'); ?>" role="button" class="Button t-lonelyPlanet">
						Read case study
					</a>
				</div>

				<img class="image-LonelyPlanet-1"
					src="assets/images/lp-mobile.jpg"
					alt="Lonely Planet Guides app home screen" />

				<img class="image-LonelyPlanet-2"
					src="assets/images/lp-website.jpg"
					alt="Lonely Planet Asia landing page" />
			</div>
		</div>

		<div class="CaseStudy swiper-slide slide-2 not-animated" data-index="2">
			<div class="CaseStudy-wrap wrap">
				<div class="CaseStudy-description">
					<time class="date" datetime="2014-08">August 2014</time>
					<h2 class="title">Airbnb Rebrand</h2>
					<p class="intro">
						Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id
						ligula porta felis euismod semper.
					</p>
					<a href="<?php $this->route('airbnb'); ?>" role="button" class="Button t-airbnb">
						Read case study
					</a>
				</div>

				<img class="image-Airbnb-1"
					src="assets/images/airbnb-mobile.jpg"
					alt="Airbnb mobile app home screen" />

				<img class="image-Airbnb-2"
					src="assets/images/airbnb-website.jpg"
					alt="Airbnb home page" />
			</div>
		</div>

		<div class="CaseStudy swiper-slide slide-3 not-animated" data-index="3">
			<div class="CaseStudy-wrap wrap">
				<div class="CaseStudy-description">
					<time class="date" datetime="2013-11">November 2013</time>
					<h2 class="title">Salesforce1 &amp; Styleguide</h2>
					<p class="intro">
						Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id
						ligula porta felis euismod semper.
					</p>
					<!-- <a href="<?php $this->route('salesforce'); ?>" role="button" class="Button t-salesforce">
						Read case study
					</a> -->
				</div>

				<img class="image-Salesforce"
					src="assets/images/salesforce.png"
					alt="Salesforce" />
			</div>
		</div>
	</div>

	<div class="swiper-pagination"></div>
</div>
