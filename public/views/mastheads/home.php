<div class="masthead container">

	<div class="container-inner">

		<div class="map animate-fade-in">

			<a
				class="map-location-marker marker-sf tooltip"
				title="<h4>San Francisco</h4><small>2011 - 2013</small><p>Salesforce brought me back to California from the South to do product design at a massive scale.</p>"
				href="#sf">
			</a>
			<a
				class="map-location-marker marker-la tooltip"
				title="<h4>Los Angeles</h4><small>1999 - 2003</small><p>Going to Pepperdine for college offered me a first glimpse of living on the West Coast. I was hooked.</p>"
				href="#la">
			</a>
			<a
				class="map-location-marker marker-memphis tooltip"
				title="<h4>Memphis</h4><small>2003 - 2007</small><p>I was born and raised in the Home of the Blues. I also worked around 10 jobs here since I was 15.</p>"
				href="#memphis">
			</a>
			<a
				class="map-location-marker marker-nashville tooltip"
				title="<h4>Nashville</h4><small>2007 - 2011</small><p>Five years in Nashville taught me design and development for the web. Lots of valuable experience.</p>"
				href="#nashville">
			</a>
			<a
				class="map-location-marker marker-nyc tooltip"
				title="<h4>New York</h4><p>I work at Salesforce&rsquo;s NY offices and speak at conferences here whenever I get the chance. I love NY.</p>"
				href="#nyc">
			</a>

			<img src="content/illustrations/map.png" alt="Map">

		</div><!-- .map -->

	</div><!-- .container-inner -->

	<?php $this->render('shared/masthead-nav',
		array(
			'masthead_link_next' => $masthead_link_next,
			'masthead_link_prev' => $masthead_link_prev
		)
	); ?>

</div><!-- .masthead -->