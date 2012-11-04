<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Help een Held</title>
		<?php include '_/parts/css_js_includes.php' ?>
	</head>
	<body>
		<div class="l-wrapper">
			<?php include '_/parts/header.php' ?>
			<section class="l-featured">
				<article class="slide">
					<h1>Jerzy Kazemier, triathleet</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor pharetra quam id fermentum. Cras semper bibendum posuere. Nullam feugiat ipsum libero. Pellentesque sit amet enim non tortor ultricies aliquam. Sed arcu justo, eleifend id condimentum pellentesque, sagittis at nisi. Ut rutrum fringilla ultricies.</p>
				</article>
				<article class="slide">
					<h1>Jerzy Kazemier, triathleet</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor pharetra quam id fermentum. Cras semper bibendum posuere. Nullam feugiat ipsum libero. Pellentesque sit amet enim non tortor ultricies aliquam. Sed arcu justo, eleifend id condimentum pellentesque, sagittis at nisi. Ut rutrum fringilla ultricies.</p>
				</article>
				<article class="slide">
					<h1>Jerzy Kazemier, triathleet</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor pharetra quam id fermentum. Cras semper bibendum posuere. Nullam feugiat ipsum libero. Pellentesque sit amet enim non tortor ultricies aliquam. Sed arcu justo, eleifend id condimentum pellentesque, sagittis at nisi. Ut rutrum fringilla ultricies.</p>
				</article>
			</section> <!-- section.featured -->
			<?php include '_/parts/nav-sub.php' ?>
			<section class="l-heroes">
				<h1>Featured Heroes</h1>
				<?php for ( $i; $i < 10; $i++ ) : ?>
					<?php include '_/parts/hero.php' ?>
				<?php endfor; ?>
			</section> <!-- section.featured -->
			<?php include '_/parts/footer.php' ?>
		</div>
	</body>
</html>
