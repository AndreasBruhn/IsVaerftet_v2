<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<title>IsVærftet</title>
</head>


<body <?php body_class(); ?>>
	<!-- Header -->
	<header class="sticky-top">
		<nav class="navbar navbar-expand-lg bg-light-blue">
			<div class="container-xl">
				<div class="logo">
					<a href="<?php echo site_url(); ?>">
						<img src='<?php echo get_template_directory_uri() . '/img/logo.png' ?>' alt="logo">
					</a>
				</div>
				<button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-center me-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="toggler-icon top-bar"></span>
					<span class="toggler-icon middle-bar"></span>
					<span class="toggler-icon bottom-bar"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item ">
							<a class="nav-link active p" aria-current="page" href="<?php echo site_url('/is'); ?>">Is</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link p" href="<?php echo site_url('/specialiteter'); ?>">Specialiteter</a>
						</li>
						<li class="nav-item">
							<a class="nav-link p" href="<?php echo site_url('/kaffe'); ?>">Kaffe</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('/om-os'); ?>" class="nav-link p">Om os</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="spacer overflow-hidden"><svg id="visual" viewBox="0 0 2600 50" width="2600" height="50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
				<path d="M0 17L61.8 21.3C123.7 25.7 247.3 34.3 371.2 32.3C495 30.3 619 17.7 742.8 16.5C866.7 15.3 990.3 25.7 1114.2 28.3C1238 31 1362 26 1485.8 25.3C1609.7 24.7 1733.3 28.3 1857.2 26.3C1981 24.3 2105 16.7 2228.8 13.8C2352.7 11 2476.3 13 2538.2 14L2600 15L2600 0L2538.2 0C2476.3 0 2352.7 0 2228.8 0C2105 0 1981 0 1857.2 0C1733.3 0 1609.7 0 1485.8 0C1362 0 1238 0 1114.2 0C990.3 0 866.7 0 742.8 0C619 0 495 0 371.2 0C247.3 0 123.7 0 61.8 0L0 0Z" fill="#8ed1d1" stroke-linecap="round" stroke-linejoin="miter"></path>
			</svg></div>
	</header>