<div class="masthead container">

	<div class="masthead-freelance-tools-container animate-fade-in">
		<img class="freelance-coffee" src="content/illustrations/freelance/masthead/coffee-swirl.png" alt="Coffee">
		<img class="freelance-tools" src="content/illustrations/freelance/masthead/tools.png" alt="Freelance Tools">
	</div><!-- .masthead-freelance-tools-container -->

	<?php $this->render('shared/masthead-nav',
		array(
			'masthead_link_next' => $masthead_link_next,
			'masthead_link_prev' => $masthead_link_prev
		)
	); ?>

</div><!-- .masthead -->