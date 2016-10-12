<div class="masthead animate-fade-in container">

	<div class="masthead-salesforce-clouds-container">

		<div class="masthead-salesforce-clouds cf">
			<img class="cloud-set-primary" src="content/illustrations/salesforce/masthead/salesforce-masthead-clouds.png" alt="Clouds">
			<img class="cloud-set-secondary" src="content/illustrations/salesforce/masthead/salesforce-masthead-clouds.png" alt="Clouds">
		</div><!-- .masthead-salesforce-clouds -->

	</div><!-- .masthead-salesforce-clouds-container -->

	<div class="masthead-salesforce-devices-container<?php if ($has_login == true) echo ' hidden-mobile'; ?>">

		<div class="masthead-salesforce-devices">
			<img src="content/illustrations/salesforce/masthead/salesforce-masthead-devices.png" alt="Devices">
		</div><!-- .masthead-salesforce-devices -->

		<div class="masthead-salesforce-devices-background">
			<img src="content/illustrations/salesforce/masthead/salesforce-masthead-devices-bg.png" alt="">
		</div><!-- .masthead-salesforce-devices-background -->

	</div><!-- .masthead-salesforce-devices-container -->

	<?php
		if ($has_login == true)
			$this->render('shared/salesforce-secure-form');
	?>

	<?php $this->render('shared/masthead-nav',
		array(
			'masthead_link_next' => $masthead_link_next,
			'masthead_link_prev' => $masthead_link_prev
		)
	); ?>

</div><!-- .masthead -->