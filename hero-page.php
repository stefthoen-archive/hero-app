<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Support a Hero</title>
		<?php include '_/parts/css_js_includes.php' ?>
		
		<style type="text/css">
			#donations .donation { clear: both; }
			#donations .donation img { float: left; }
			
			.modal-content { display: none; }
			section.twitter-feed { width: 340px; }
		</style>
	</head>
	<body>
		<div class="l-wrapper">
			<?php include '_/parts/header.php' ?>
			<article>
				<header>
					<h1>Jerzy Kazemier, triathleet</h1>
					<p class="video">
						<embed width="420" height="345" src="http://www.youtube.com/v/ZqIRL3PF8VI" type="application/x-shockwave-flash"></embed>
					</p>
				</header>
				<nav class="tabs">
					<ul><li><a href="#mystory" id="mystory-nav-button">My story</a></li><li><a href="#updates" id="updates-nav-button">Updates</a></li></ul>
				</nav>
				<section id="mystory" class="tab">
					<article>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor pharetra quam id fermentum. Cras semper bibendum posuere. Nullam feugiat ipsum libero. Pellentesque sit amet enim non tortor ultricies aliquam. Sed arcu justo, eleifend id condimentum pellentesque, sagittis at nisi. Ut rutrum fringilla ultricies.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor pharetra quam id fermentum. Cras semper bibendum posuere. Nullam feugiat ipsum libero. Pellentesque sit amet enim non tortor ultricies aliquam. Sed arcu justo, eleifend id condimentum pellentesque, sagittis at nisi. Ut rutrum fringilla ultricies.</p>
					</article>
				</section>
				<section id="updates" class="tab">
					<article class="update">
						<header>
							<h1>Update A</h1>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor pharetra quam id fermentum. Cras semper bibendum posuere. Nullam feugiat ipsum libero. Pellentesque sit amet enim non tortor ultricies aliquam. Sed arcu justo, eleifend id condimentum pellentesque, sagittis at nisi. Ut rutrum fringilla ultricies.</p>
					</article>
					<article class="update">
						<header>
							<h1>Update B</h1>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor pharetra quam id fermentum. Cras semper bibendum posuere. Nullam feugiat ipsum libero. Pellentesque sit amet enim non tortor ultricies aliquam. Sed arcu justo, eleifend id condimentum pellentesque, sagittis at nisi. Ut rutrum fringilla ultricies.</p>
					</article>
					<article class="update">
						<header>
							<h1>Update C</h1>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor pharetra quam id fermentum. Cras semper bibendum posuere. Nullam feugiat ipsum libero. Pellentesque sit amet enim non tortor ultricies aliquam. Sed arcu justo, eleifend id condimentum pellentesque, sagittis at nisi. Ut rutrum fringilla ultricies.</p>
					</article>
				</section>
				
				<section class="twitter-feed">
					<a class="twitter-timeline" href="https://twitter.com/jerzykasemier" data-widget-id="264881785513590784">Tweets by @jerzykasemier</a>
				</section>
				
				<aside>
					<dl>
						<dt>Fans:</dt>
						<dd>753</dd>
						<dt>Total donation:</dt>
						<dd>&euro;2.535</dd>
					</dl>
					<div id="donations">
						<div class="donation">
							<a href="#inline-a">
								<img src="" alt="&euro;10,-" />
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							</a>
							<div class="modal-content" id="inline-a">
								A
							</div>
						</div>
						<div class="donation">
							<a href="#inline-b">
								<img src="" alt="Bicycle" />
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							</a>
							<div class="modal-content" id="inline-b">
								B
							</div>
						</div>
						<div class="donation">
							<a href="#inline-c">
								<img src="" alt="&euro;25,-" />
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							</a>
							<div class="modal-content" id="inline-c">
								C
							</div>
						</div>
						<div class="donation">
							<a href="#inline-d">
								<img src="" alt="&euro;50,-" />
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							</a>
							<div class="modal-content" id="inline-d">
								D
							</div>
						</div>
						<div class="donation">
							<a href="#inline-e">
								<img src="" alt="Plane ticket" />
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							</a>
							<div class="modal-content" id="inline-e">
								E
							</div>
						</div>
					</div>
				</aside>
			</article>
			<?php include '_/parts/footer.php' ?>
		</div>
		
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		<script type="text/javascript">
			$( function() {
			
				// Modalboxes
				$(".donation a").fancybox({
					maxWidth	: 800,
					maxHeight	: 600,
					fitToView	: false,
					width		: '70%',
					height		: '70%',
					autoSize	: false,
					closeClick	: false,
					openEffect	: 'none',
					closeEffect	: 'none'
				});
				
				// Tabs
				$("#mystory-nav-button").click( function (){
					$(".tab").hide();
					$("#mystory").show();
				});
				
				$("#updates-nav-button").click( function (){
					$(".tab").hide();
					$("#updates").show();
				});
				
				// Hide tabs and open first
				$("#mystory-nav-button").click();
			});
		</script>
	</body>
</html>
