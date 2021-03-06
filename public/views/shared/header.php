<nav class="Nav">
	<header class="Header<?php if (isset($header_image) || $html_class === 'Home') { echo ' Header-fixed headroom js-nav'; } ?>">
		<a class="Logo<?php if (isset($header_image)) { echo ' -white'; } ?> js-logo" href="/">
			<svg class="icon" viewBox="0 0 32 32">
				<path d="M16.229 14.781c-0.99 0-1.829 0.762-1.829 2.057s0.762 2.133 1.829 2.133c1.067 0 1.829-0.762 1.829-2.133 0-1.295-0.762-2.057-1.829-2.057z" />
				<path d="M16 0c-8.838 0-16 7.162-16 16s7.162 16 16 16 16-7.162 16-16c0-8.838-7.162-16-16-16zM16.533 20.419c-0.914 0-1.676-0.381-2.057-1.067v0.914h-1.524v-9.905h1.524v4.038c0.305-0.533 1.067-0.99 2.133-0.99 1.981 0 3.124 1.524 3.124 3.505-0.076 1.981-1.295 3.505-3.2 3.505z" />
			</svg>
		</a>

		<?php if (isset($header_image)): ?>
			<div class="PageTitle">
				<?php echo $page_title; ?>
			</div>
		<?php endif; ?>

		<button class="NavButton<?php if (isset($header_image)) { echo ' -white'; } ?> hamburger hamburger--boring js-hamburger">
      <div class="hamburger-box">
        <div class="hamburger-inner"></div>
      </div>
    </button>
	</header>

	<div class="Menu -hidden js-menu">
		<div class="Menu-container">
			<h4 class="heading -tiny">Case Studies</h4>
			<ul class="MenuPrimary">
				<li><a href="<?php $this->route('lonely-planet'); ?>">Lonely Planet</a></li>
				<li><a href="<?php $this->route('airbnb'); ?>">Airbnb</a></li>
				<li><span>Salesforce</span></li>
			</ul>

			<ul class="MenuSecondary">
				<li><a href="<?php $this->route('about'); ?>">About</a></li>
				<li><a href="<?php $this->route('contact'); ?>">Contact</a></li>
			</ul>

			<ul class="MenuSocial">
				<li>
					<a href="https://twitter.com/bradhaynes">
						<svg class="icon" viewBox="0 0 39 32">
							<title>Twitter</title>
							<path d="M35.692 4.911l2.462-4.911-3.692 2.454-0.718 0.361c-1.468-1.71-3.62-2.815-6.052-2.815-4.418 0-8 2.959-8 7.367 0 0.598 0.079 1.791 0.203 2.353l-0.203 0.101c0 0-16-2.454-17.231-8.593 0 0-3.692 6.139 2.462 11.049 0 0-2.462 1.227-3.692 0 0 0 0 3.685 6.154 7.367 0 0-2.462 1.228-3.692 0 0 0 4.923 4.911 7.385 4.911 0 0 0 3.682-11.077 3.682 0 0 14.005 9.206 27.077-1.226 6.645-5.305 8.263-12.023 8.35-17.092 0.158-0.624 0.266-1.266 0.266-1.94v-0.613l3.692-3.685-3.692 1.228z" />
						</svg>
					</a>
				</li>
				<li>
					<a href="https://dribbble.com/bradhaynes">
						<svg class="icon" viewBox="0 0 32 32">
							<title>Dribbble</title>
							<path d="M23.42 26.397c-0.167-0.943-0.893-4.532-2.657-9.103 3.376-0.411 6.331 0.105 7.9 0.498-0.501 3.543-2.458 6.612-5.243 8.605zM15.999 28.8c-3.065 0-5.841-1.123-8.044-2.918 2.817-4.749 6.537-7.069 10.128-8.067 1.277 3.046 2.4 6.373 3.045 9.9-1.572 0.69-3.301 1.086-5.13 1.086zM3.2 16c0-0.25 0.039-0.487 0.053-0.734 2.432 0.193 6.811 0.019 12.621-2.225 0.42 0.806 0.833 1.678 1.243 2.555-6.119 1.735-9.541 6.142-10.965 8.49-1.817-2.21-2.951-5.001-2.951-8.085zM10.558 4.457c0.971 1.318 2.571 3.659 4.257 6.647-3.692 1.323-7.971 1.884-11.217 1.854 0.931-3.769 3.517-6.876 6.96-8.501zM15.999 3.2c2.974 0 5.676 1.056 7.849 2.756-1.009 0.87-3.18 2.523-6.496 4.090-1.223-2.157-2.663-4.343-4.383-6.446 0.976-0.238 1.981-0.4 3.030-0.4zM28.776 15.742c-3.398-0.867-6.365-1.023-8.94-0.693-0.438-1.004-0.907-2.027-1.445-3.077 2.275-1.052 4.73-2.425 7.346-4.191 1.83 2.165 2.975 4.919 3.039 7.962zM15.999 0c-8.836 0-15.999 7.164-15.999 16s7.163 15.999 15.999 15.999c8.837 0 16-7.163 16-15.999s-7.163-16-16-16z" />
						</svg>
					</a>
				</li>
				<li>
					<a href="https://www.linkedin.com/profile/view?id=15202998">
						<svg class="icon" viewBox="0 0 32 32">
							<title>LinkedIn</title>
							<path d="M27.417 26.294h-4.488v-6.971c0-1.751-0.507-2.946-2.131-2.946-1.24 0-1.978 0.806-2.303 1.584-0.118 0.279-0.147 0.667-0.147 1.057v7.277h-4.63c0 0 0.058-12.177 0-13.399h4.63v1.849c0.595-0.887 1.657-2.157 4.045-2.157 2.953 0 5.025 2.232 5.025 6.237v7.47zM5.94 26.294v-13.495h4.336v13.495h-4.336zM7.886 6.846c1.313 0 2.122 0.981 2.147 2.269 0 1.259-0.834 2.267-2.173 2.267h-0.025c-1.289 0-2.122-1.008-2.122-2.267 0-1.288 0.859-2.269 2.173-2.269v0zM28.953-0h-25.905c-1.683 0-3.048 1.367-3.048 3.049v25.903c0 1.683 1.365 3.048 3.048 3.048h25.905c1.682 0 3.047-1.365 3.047-3.048v-25.903c0-1.682-1.365-3.049-3.047-3.049v0zM18.347 14.783v-0.039c-0.008 0.011-0.022 0.026-0.030 0.039h0.030z" />
						</svg>
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
