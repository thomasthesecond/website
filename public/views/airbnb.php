<?php
	$page_title = 'Airbnb';

	$this->layout('default', array(
		'body_class' => 'Airbnb StoryPage',
		'footer' => true,
		'footer_link_next' => 'Salesforce',
		'footer_link_prev' => 'Lonely Planet',
		'header_image' => 'assets/images/airbnb/header-photo.jpg',
		'main_class' => '-airbnb',
		'page_title' => $page_title,
		'preloader_image' => 'assets/images/airbnb/preloader.jpg',
	));
?>

<section class="Intro wrap">
	<div class="container span-10">
		<header class="IntroHeader">
			<div class="heading -tiny -light">
				<?php echo $page_title; ?>
			</div>

			<h1 class="heading -huge">
				Redesign all of Airbnb’s products using the new brand elements
			</h1>
		</header>

		<div class="IntroCopy container">
			<div class="span-7 u-left">
				<p class="copy">
					Redesigning an experience as large as Airbnb was a huge undertaking.
					Usually the best thing to do in such a situation is to just put your
					headphones on and get to work. The team was only about 5 designers and
					15 engineers, and the timeline was tight. It was a dream job for any
					freelancer and I was itching to get started.
				</p>
			</div>

			<aside class="span-3 u-right">
				<h4 class="heading -tiny">My role</h4>
				<p class="copy -small -loose">
					I worked as a product designer, leading design for some of the
					heaviest-used parts of the overall experience.
				</p>
			</aside>
		</div>
	</div>
</section>

<section class="Chapter Chapter-1 u-centered">
	<div class="Section -angled -angledTop -angledBottom -ltr t-airbnb">
		<div class="wrap">
			<div class="container span-8">
				<h2 class="heading -large -white -tick">
					Property cards, property lists, and the component style guide
				</h2>

				<p class="copy -white">
					My first project was the property card: the building block of the
					entire Airbnb experience. I built upon a lot of work done by the team
					and developed countless iterations.
				</p>
			</div>
		</div>
	</div>

	<div class="CarouselFeature wrap u-centered">
		<div class="container panel -feature -no-shadow">
			<p class="copy">
				Below are a few of the different explorations. Some are simple, while
				others depended on interactions.
			</p>

			<div class="Carousel">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide"><img src="assets/images/airbnb/property-cards-1.jpg" alt=""></div>
						<div class="swiper-slide"><img src="assets/images/airbnb/property-cards-2.jpg" alt=""></div>
						<div class="swiper-slide"><img src="assets/images/airbnb/property-cards-3.jpg" alt=""></div>
					</div>
					<div class="Carousel-pagination"></div>
				</div>
				<button class="Carousel-prev">
					<svg class="icon" viewbox="0 0 32 32">
						<path d="M9.8 0l-4 4 12 12-12 12 4 4 16.4-16z" transform="rotate(-180 16 16)" />
		      </svg>
				</button>
				<button class="Carousel-next">
					<svg class="icon" viewbox="0 0 32 32">
						<path d="M9.8 0l-4 4 12 12-12 12 4 4 16.4-16z" />
		      </svg>
				</button>
			</div>
		</div>
	</div>

	<div class="CopyGroup wrap u-centered">
		<div class="CopyBlock container span-8">
			<p class="copy">
				There were slight tweaks made to each manifestation depending on where
				it appeared: on the map, in the mobile app, on the homepage, or in the
				search results.
			</p>
		</div>

		<div class="SingleImage -wide container">
			<img src="assets/images/airbnb/iphone@2x.png" alt="">
		</div>
	</div>
</section>

<section class="Chapter Chapter-2 u-centered">
	<div class="CopyGroup wrap">
		<div class="CopyBlock container span-8">
			<h2 class="heading -large -persimmon -tick">
				Searching for properties
			</h2>

			<p class="copy">
				After the individual property cards were solidified, the next problem to
				solve was how we present those to the user while they search for a place
				to stay. This is the highest trafficked experience for Airbnb, so it was
				an honor to be able to work on it.
			</p>
		</div>

		<div class="SingleImage container panel -image">
			<img src="assets/images/airbnb/searching-for-properties@2x.jpg" alt="">
		</div>
	</div>

	<div class="Section -angled -angledTop -angledBottom -rtl u-bg-alabaster">
		<div class="wrap">
			<div class="CopyBlock container span-8">
				<p class="copy">
					While we were working through the various flows and screens, we were
					also iterating on the different components and keeping an inventory of
					everything. As we neared lanuch, those were formalized into the new
					design system for the digital products.
				</p>
			</div>

			<div class="SingleImage container">
				<img src="assets/images/airbnb/searching-for-properties-2@2x.png" alt="">
			</div>

			<div class="CopyBlock container span-8">
				<p class="copy">
					These are just some of the components formalized as a part of the
					initial Rebrand redesign. The team has since added even more
					<a href="http://airbnb.design/the-way-we-build/">cool tools</a> to
					their kit.
				</p>
			</div>
		</div>
	</div>
</section>

<section class="Chapter Chapter-3 u-centered">
	<div class="Section -angled -angledTop -angledBottom -rtl t-airbnb">
		<div class="wrap">
			<div class="container span-8">
				<h2 class="heading -large -white -tick">
					Cleaning up careers
				</h2>

				<p class="copy -white">
					In addition to the core product flows, I took on the redesign of the
					Careers section. Great people are what make Airbnb special, so we
					wanted to make sure potential new employees were greeted with an
					experience that reflected the new direction.
				</p>
			</div>
		</div>
	</div>

	<div class="ImageGroup wrap -shadows">
		<img src="assets/images/airbnb/careers-1@2x.png" alt="">
		<img src="assets/images/airbnb/careers-3@2x.png" alt="">
		<img src="assets/images/airbnb/careers-2@2x.png" alt="">
		<img src="assets/images/airbnb/careers-4@2x.png" alt="">
	</div>

	<div class="SingleImage wrap">
		<img src="assets/images/airbnb/careers-icons@2x.png" alt="">
	</div>

	<div class="CopyBlock wrap">
		<div class="container span-8">
			<p class="copy">
				In addition to the core design team, there was an art department filled
				with incredibly talented designers that worked closely with us to
				provide illustrations, photography, and video throughout the experience.
			</p>
		</div>
	</div>
</section>

<section class="Chapter Chapter-4 u-centered">
	<div class="Section -angled -angledTop -angledBottom -ltr t-airbnb">
		<div class="wrap">
			<div class="container span-8">
				<h2 class="heading -large -white -tick">
					Don’t let anything fall  through the cracks
				</h2>

				<p class="copy -white">
					Airbnb has dozens of landing pages for campaigns, information, and
					more. I took those on and prioritized the work based on traffic.
					Anything with substantial numbers was redesigned.
				</p>
			</div>
		</div>
	</div>

	<div class="ImageGroup wrap -shadows">
		<img src="assets/images/airbnb/careers-1@2x.png" alt="">
		<img src="assets/images/airbnb/careers-3@2x.png" alt="">
		<img src="assets/images/airbnb/careers-2@2x.png" alt="">
		<img src="assets/images/airbnb/careers-4@2x.png" alt="">
	</div>

	<div class="CopyBlock wrap">
		<div class="container span-8">
			<p class="copy">
				Overall, the engagement was 5 months, and covered the entire breadth of
				the product. I often felt we wouldn’t finish in time, but that it
				happened and happended so smoothly is a testiment to the quality of the
				team that delivered it.
			</p>
		</div>
	</div>
</section>

<section class="Chapter Chapter-5 u-centered">
	<div class="Section -angled -angledTop -angledBottom -rtl t-airbnb">
		<div class="wrap">
			<div class="container span-8">
				<h2 class="heading -large -white -tick">
					Launch day
				</h2>

				<p class="copy -white">
					I was planning to travel after finishing up at Airbnb, so just bought
					some new camera gear. It was a great opportunity to break it all in on
					launch! I spent the day capturing all the festivities.
				</p>
			</div>
		</div>
	</div>

	<div class="PhotoGallery wrap">
		<div class="container">
			<img src="assets/images/airbnb/photo-1@2x.jpg" alt="">
			<img src="assets/images/airbnb/photo-2@2x.jpg" alt="">
			<img src="assets/images/airbnb/photo-3@2x.jpg" alt="">
			<img src="assets/images/airbnb/photo-4@2x.jpg" alt="">
			<img src="assets/images/airbnb/photo-5@2x.jpg" alt="">
			<img src="assets/images/airbnb/photo-6@2x.jpg" alt="">
			<img src="assets/images/airbnb/photo-7@2x.jpg" alt="">
			<img src="assets/images/airbnb/photo-8@2x.jpg" alt="">
			<img src="assets/images/airbnb/photo-9@2x.jpg" alt="">
			<img src="assets/images/airbnb/photo-10@2x.jpg" alt="">
		</div>
	</div>

	<div class="FullImage">
		<img src="assets/images/airbnb/footer@2x.jpg" alt="">
	</div>

	<div class="CopyBlock wrap">
		<div class="container span-8">
			<p class="copy">
				The Rebrand project was a joy to work on. The team was tight-knit and I
				had as much pleasure building new relationships with them as I did
				designing the product. I look forward to potentially working with Airbnb
				again in the future.
			</p>
		</div>
	</div>
</section>
