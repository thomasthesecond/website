<?php if (isset($footer_link_next) && isset($footer_link_prev)): ?>
	<nav class="FooterNav">
    <a class="NavLink" href="<?php $this->route(strtolower(str_replace(" ", "-", $footer_link_prev))); ?>">
			<svg class="icon" viewbox="0 0 32 32">
				<path d="M9.8 0l-4 4 12 12-12 12 4 4 16.4-16z" transform="rotate(-180 16 16)" />
      </svg>
      <small>Prev</small>
      <span><?php echo $footer_link_prev ?></span>
    </a>

    <a class="NavLink" href="<?php $this->route(strtolower(str_replace(" ", "-", $footer_link_next))); ?>">
      <small>Next</small>
      <span><?php echo $footer_link_next ?></span>
			<svg class="icon" viewbox="0 0 32 32">
				<path d="M9.8 0l-4 4 12 12-12 12 4 4 16.4-16z" />
      </svg>
    </a>
  </nav>
<?php endif; ?>

<?php if (isset($footer) && $footer): ?>
  <footer class="Footer -tick">
    <div class="ContactFooter u-centered">
			<?php $this->render('shared/form'); ?>
    </div>
  </footer>
<?php endif; ?>
