<?php
	$this->render('shared/document-header', array(
		'body_class' => $body_class,
		'page_title' => $page_title,
	));
?>

<?php
	$this->render('shared/preloader', array(
		'logo' => $page_title,
		'preloader_image' => $preloader_image,
	));
?>

<!-- <div class="Page<?php if ($preloader_image) echo ' is-loading'; ?>"> -->
<div class="Page">
	<?php
		$this->render('shared/header', array(
			'header_image' => $header_image,
			'page_title' => $page_title,
		));
	?>

	<?php
		$this->render('shared/header-image', array(
			'header_image' => $header_image,
		));
	?>

	<main class="Story<?php if (isset($main_class)) echo ' ' . $main_class; ?>">
		<?php $this->getContent(); ?>
	</main>

	<?php
		$this->render('shared/footer', array(
			'footer' => $footer,
			'footer_link_next' => $footer_link_next,
			'footer_link_prev' => $footer_link_prev,
		));
	?>
</div>

<?php
	$this->render('shared/document-footer');
?>
