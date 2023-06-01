<?php global $all; ?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header id="masthead" class="site">
		<div class="container">
			<div class="head-logo">
				<div class="logo">
					<a href="<?php echo path($all['page']['homepage']['slug']); ?>">
						<img src="<?php echo asset('img/bg-black-white.svg'); ?>" alt="logo MD Com&Sport">
					</a>
				</div>

				<div class="hover-logo none">
					<div class="fb">
						<a href="">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
								<path
									d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
							</svg>
						</a>
					</div>

					<div class="insta">
						<a href="">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
								<path
									d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
							</svg>
						</a>
					</div>
				</div>
			</div>

			<div class="mobile-head-logo">
				<div class="mobile-logo">
					<img src="<?php echo asset('img/bg-black-white.svg'); ?>" alt="logo MD Com&Sport">
				</div>

				<div class="mobile-hover-logo none">
					<div class="fb">
						<a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
								<path
									d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
							</svg></a>
					</div>

					<div class="insta">
						<a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
								<path
									d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
							</svg></a>
					</div>
				</div>
			</div>
		</div>

		<div class="main-menu">
			<nav>
				<ul class="menu">
					<li><a href="<?php echo $all['page']['homepage']['slug']; ?>">Accueil</a></li>
					<li><a href="<?php echo $all['page']['infos']['slug']; ?>">Qui suis-je ?</a></li>
					<li><a href="<?php echo $all['page']['homepage']['slug']; ?>">Actualités</a></li>
					<li><a href="<?php echo $all['page']['homepage']['slug']; ?>">Partenaires</a></li>
					<li><a href="<?php echo $all['page']['homepage']['slug']; ?>">Contact</a></li>
				</ul>
			</nav>
		</div>

		<div class="mobile">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
				<path
					d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
			</svg>
		</div>

		<div class="mobile-main-menu">
			<div class="mobile-container">
				<div class="upper-mobile">
					<div class="mobile-close">X</div>
				</div>

				<div class="mobile-line"></div>

				<nav>
					<ul class="menu menu-mobile">
						<li><a href="<?php echo $all['page']['homepage']['slug']; ?>">Accueil</a></li>
						<li><a href="<?php echo $all['page']['infos']['slug']; ?>">Qui suis-je ?</a></li>
						<li><a href="<?php echo $all['page']['homepage']['slug']; ?>">Actualités</a></li>
						<li><a href="<?php echo $all['page']['homepage']['slug']; ?>">Partenaires</a></li>
						<li><a href="<?php echo $all['page']['homepage']['slug']; ?>">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>