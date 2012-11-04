<section class="l-heroes">
	<?php for ( $i = 0; $i < 10; $i++ ) : ?>
		<article class="thumb">
		<a href="hero-page.php"><img src="_/images/hero-thumbs/hero-<?php echo $i ?>.jpg" alt="Hero Thumbnail"></a>
			<a href="hero-page.php"><h1 class="name">Ik ben een Held, ik ben een held, check mij, hopsahopsahops.</h1></a>
			<ul>
				<li><a class="category" href="#">Categorie</a></li>
				<li><a class="location" href="#">Groningen</a></li>
			</ul>
		</article> <!-- article.hero -->
	<?php endfor; ?>
</section> <!-- section.l-heroes -->
