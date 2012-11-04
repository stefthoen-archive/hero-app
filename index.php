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
			<div class="flexslider"
				<ul id="featured" class="slides">
					<li class="slide">
						<h1>Jerzy Kazemier, triathleet</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor pharetra quam id fermentum. Cras semper bibendum posuere. Nullam feugiat ipsum libero. Pellentesque sit amet enim non tortor ultricies aliquam. Sed arcu justo, eleifend id condimentum pellentesque, sagittis at nisi. Ut rutrum fringilla ultricies.</p>
					</li>
					<li class="slide">
						<h1>Jerzy Kazemier, triathleet</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor pharetra quam id fermentum. Cras semper bibendum posuere. Nullam feugiat ipsum libero. Pellentesque sit amet enim non tortor ultricies aliquam. Sed arcu justo, eleifend id condimentum pellentesque, sagittis at nisi. Ut rutrum fringilla ultricies.</p>
					</li>
					<li class="slide">
						<h1>Jerzy Kazemier, triathleet</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor pharetra quam id fermentum. Cras semper bibendum posuere. Nullam feugiat ipsum libero. Pellentesque sit amet enim non tortor ultricies aliquam. Sed arcu justo, eleifend id condimentum pellentesque, sagittis at nisi. Ut rutrum fringilla ultricies.</p>
					</li>
				</ul> <!-- ul.featured -->
			</div> <!-- div.l-wrapper -->
			<?php include '_/parts/nav-sub.php' ?>
			<section class="l-heroes">
				<h1>Featured Heroes</h1>
				<?php for ( $i; $i < 10; $i++ ) : ?>
					<?php include '_/parts/hero.php' ?>
				<?php endfor; ?>
			</section> <!-- section.featured -->
			<?php include '_/parts/footer.php' ?>
		</div>
		<script type="text/javascript">
			$( function() {
				$('.flexslider').flexslider({
					animation: "slide",
					animationLoop: true
				});
			});
			
				// Request a position. We accept positions whose age is not
				// greater than 10 minutes. If the user agent does not have a
				// fresh enough cached position object, it will automatically
				// acquire a new one.
				var geoposition = navigator.geolocation.getCurrentPosition(successCallback, errorCallback, {maximumAge:600000});

				function successCallback(position) {
				  // By using the 'maximumAge' option above, the position
				  // object is guaranteed to be at most 10 minutes old.
				}

				function errorCallback(error) {
				  // Update a div element with error.message.
				}
			});
		</script
	</body>
</html>
