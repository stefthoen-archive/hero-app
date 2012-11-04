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
						<li><a href="#mystory" id="mystory-nav-button">My story</a></li>
						<li><a href="#updates" id="updates-nav-button">Updates</a></li>
					</ul>
				</nav>
				<section id="mystory" class="tab">
					<article class="story">
						<p class="intro">Ik ben Jerzy Kasemier. Ik zwem. Ik fiets. Ik loop. Ik doe triathlon. Ik ben proftriathleet.</p>
						<p>In 1994 is het allemaal begonnen. Een kennismakingscursus triathlon. Ik was 14 jaar en had me zo goed mogelijk voorbereid op mijn eerste triathlon. 500 Meter zwemmen, 20 kilometer fietsen en 5 kilometer hardlopen. Helaas werd het zwemmen afgelast en moest ik het doen met 5 kilometer hardlopen, 20 kilometer fietsen en 2,5 kilomter hardlopen. Gelukkig was de blijdschap groter dan de pijn in de benen. En zo startte mijn triathlon carriere.</p>  
						<p>Nu is het 2012. 18 jaar zijn er voorbij. Heb ik wedstrijden gedaan op drie continenten. Staan er 10 Ironmans (3,8 kilometer zwemmen, 180 kilometer fietsen en 41,195 kilometer lopen) achter mijn naam. Stond ik op de tweede en derde tree van het NK lange afstand (Ironman). En kijk ik vooruit naar de komende jaren.</p>
						<img src="_/images/jerzy.jpg" alt="Jerzy wint er weer eentje">
						<p>De afgelopen 5 jaar heb ik als prof sporter de wereld rond gereisd. Een droom. De droom die ik al in 1994 had en die nu werkelijkheid is geworden. Nu in 2012 kijk ik naar 2013 en verder. Een nieuwe insteek. Een andere aanpak. Een nieuwe uitdaging. En daar heb ik jou hulp bij nodig.</p>
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
					<dt>Gedoneerd:</dt>
					<dd class="number">&euro; 2.535,00</dd>
				</dl>
				<div id="donations">
					<div class="donation">
						<a href="#inline-a">
							<p class="price">&euro;10,-</>
							<p class="reward">Handtekening per post opgestuurd</p>
						</a>
					</div>
					<div class="modal-content" id="inline-a">
						A
					</div>
					</div>
					<div class="donation">
						<a href="#inline-b">
							<p class="price">&euro;20,-</>
							<p class="reward">Magazine per post opgestuurd</p>
						</a>
						<div class="modal-content" id="inline-b">
							B
						</div>
					</div>
					<div class="donation">
						<a href="#inline-c">
							<p class="price">&euro;25,-</>
							<p class="reward">Magazine hardlopend langsgebracht + handtekening (per post)</p>
						</a>
						<div class="modal-content" id="inline-c">
							C
						</div>
					</div>
					<div class="donation">
						<a href="#inline-d">
							<p class="price">&euro;500,-</>
							<p class="reward">Hardloopclinic voor jou en al je vrienden (mits niet meer dan 500)</p>
						</a>
						<div class="modal-content" id="inline-d">
							D
						</div>
					</div>
					<div class="donation">
						<a href="#inline-e">
							<p class="price">&euro;1050,-</>
							<p class="reward">Gesigneerd shirt + hardloopclinic + persoonlijke trainingsprogramma (en een magazine)</p>
						</a>
						<div class="modal-content" id="inline-e">
							E
						</div>
					</div>
				</div>
			</aside> <!-- aside.l-aside -->
			<?php include '_/parts/footer.php' ?>
		</div>
		

		<script>
			$(document).ready(function() {

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
