<?php
	$this->render('shared/document-header', array(
		'html_class' => $html_class,
		'page_title' => $page_title,
	));
?>

<?php
	$this->render('shared/header', array(
		'html_class' => $html_class,
	));
?>

<main class="Main">
	<?php $this->getContent(); ?>
</main>

<?php
	$this->render('shared/footer', array(
		'footer' => $footer,
	));
?>

<?php
	$this->render('shared/document-footer');
?>
