<div class="masthead container">

	<div class="masthead-paramore-browsers-container">
		<img class="browser-left" src="content/illustrations/paramore/masthead/browser-left.png" alt="Web Browser">
		<img class="browser-center" src="content/illustrations/paramore/masthead/browser-center.png" alt="Web Browser">
		<img class="browser-right" src="content/illustrations/paramore/masthead/browser-right.png" alt="Web Browser">
	</div><!-- .masthead-paramore-browsers-container -->

	<?php $this->render('shared/masthead-nav',
		array(
			'masthead_link_next' => $masthead_link_next,
			'masthead_link_prev' => $masthead_link_prev
		)
	); ?>

</div><!-- .masthead -->