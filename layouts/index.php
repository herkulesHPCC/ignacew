<?php
$homepage = "/index.php";
$home = "/index.php?v=posts&id_categories=1&name=Strona%20g%C5%82%C3%B3wna";
$currentpage = $_SERVER['REQUEST_URI'];
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Zakład Poprawczy i Schronisko dla Nieletnch w Konstantynowie Łódzkim | Ignacew</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<link rel="stylesheet" href="css/gallery.theme.css">
<link rel="stylesheet" href="css/gallery.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>

<body>

		<div id="sitename" >
			<div class="width" >
			<a href="index.php?v=posts&id_categories=1&name=Strona%20główna"><img src="images/logo.png"/></a>

				<nav>
					<ul>
        					
         	   				<li><a href="index.php?v=categories">Kategorie</a></li>
          	 				<li class="end"><a href="index.php?v=articles">Artykuły</a></li>
        				</ul>
				</nav>
	
				<div class="clear"></div>
			</div>
		</div>
		<header>
				<div class="w3-content w3-section" >
					<img class="mySlides w3-animate-fading budynek" src="images/budynek.jpg" style="width:100%">
					<img class="mySlides w3-animate-fading budynek" src="images/budynek2.jpg" style="width:100%">
					<img class="mySlides w3-animate-fading budynek" src="images/budynek3.jpg" style="width:100%">
				</div>

			<!-- slider start -->
			<script type="text/javascript" src="js/slider.js"></script>
			<!-- slider end -->


			<div class="width">
			
			</div>
		</header>
		<section id="body" class="width clear">
			<aside id="sidebar" class="column-left">
				<ul>
                	<li>
						<h4>Menu Główne</h4>
                        <?php include 'modules/sidebar.php' ?>

					</li>	
				</ul>
			</aside>
			
			<section id="content" class="column-right">
			<?php
			
			if($home==$currentpage) {
			echo '<a href="index.php?v=posts&id_categories=23&name=Zamówienia%20publiczne">
			<div class="zamowienia"><b>Zamówienia publiczne</b> - sprawdź szczegóły naszej oferty ->
			</div>
			</a>';
			}
			?>
	    <article>
			<?php echo $content; ?>
		</article>
	</section>

</section>
	
		<footer class="clear">
			<div  class="width">
				<p class="left">&copy; HPCC Herkules 2018.</p>
				<p class="right"><a href="http://herkules.com.pl/">Herkules</a></p>
			</div>
		</footer>
</body>
</html>
