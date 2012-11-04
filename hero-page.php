<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Help een Held</title>
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
			<article class="hero">
				<header>
					<h1>Jerzy Kazemier, triathleet</h1>
					<div class="video">
						<embed width="420" height="345" src="http://www.youtube.com/v/ZqIRL3PF8VI" type="application/x-shockwave-flash"></embed>
					</div>
				</header>
				<nav class="nav nav-tabs">
					<ul>
						<li><a href="#mystory" id="mystory-nav-button" class="navtab is-selected">My story</a></li>
						<li><a href="#updates" id="updates-nav-button" class="navtab">Updates</a></li>
					</ul>
				</nav>
				<section id="mystory" class="tab">
					<article class="story">
						<p class="intro">Vertel iedereen wat je wil en iemand zal je helpen om dat voor elkaar te krijgen. Ik ben nu 10 Ironmans op 3 continenten verder...</p>
						<p>I am Jerzy Kasemier. I swim. I bike. I run. I do triathlon. I train hard. I race hard. I see place all over the globe. I learn from different cultures. But it are the small things that stay with me the most.
						<p>Those small things keep me smiling. Keep me going. Keep me in love with what I do. This amazing shot, in the Timex Sports 2011 catalog, is one of those small things. 'Just a shot', but one that will stick with me forever. When I first saw it this morning I could not stop smiling, loving and wanting to go train and race.</p>
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
				
				<section class="twitter-feed" style="display: none !important;">
					<a class="twitter-timeline" href="https://twitter.com/jerzykasemier" data-widget-id="264881785513590784">Tweets by @jerzykasemier</a>
				</section>
				
			</article>
			<aside class="l-aside">
				<dl class="fans">
					<dt>Fans:</dt>
					<dd class="number">753</dd>
					<dt>Total donation:</dt>
					<dd class="number">&euro;2.535</dd>
				</dl>
				<div id="donations">
					<div class="donation">
						<a href="#inline-a">
							<p class="price">&euro;10,-</>
							<p class="reward">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</a>
					</div>
					<div class="modal-content" id="inline-a">
						A
					</div>
					</div>
					<div class="donation">
						<a href="#inline-b">
							<p class="price">&euro;20,-</>
							<p class="reward">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</a>
						<div class="modal-content" id="inline-b">
							B
						</div>
					</div>
					<div class="donation">
						<a href="#inline-c">
							<p class="price">&euro;25,-</>
							<p class="reward">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</a>
						<div class="modal-content" id="inline-c">
							C
						</div>
					</div>
					<div class="donation">
						<a href="#inline-d">
							<p class="price">&euro;35,-</>
							<p class="reward">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</a>
						<div class="modal-content" id="inline-d">
							D
						</div>
					</div>
					<div class="donation">
						<a href="#inline-e">
							<p class="price">&euro;50,-</>
							<p class="reward">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</a>
						<div class="modal-content" id="inline-e">
							E
						</div>
					</div>
				</div>
			</aside> <!-- aside.l-aside -->
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
					//$(".navtab").removeClass("is-selected");
					//$(this).addClass("is-selected");
					$(".tab").hide();
					$("#mystory").show();
				});
				
				$("#updates-nav-button").click( function (){
					//$.(".navtab")removeClass("is-selected");
					//$(this).addClass("is-selected");
					$(".tab").hide();
					$(#updates").show();
				});
				
				// Hide tabs and open first
				$("#mystory-nav-button").click();
			});
		</script>
	</body>
</html>
