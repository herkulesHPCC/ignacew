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

		<div id="sitename"  >
			<div class="width" >
			<a href="index.php?v=posts&id_categories=1&name=Strona%20główna"><img src="images/logo.png"/></a>
				<nav>
					<ul>
					<!-- wyświetlanie w zależności czy użytkownik jest zalogowany -->
						
         	   				<li><a href="index.php?v=categories">Kategorie</a></li>
							<li class="end"><a href="index.php?v=articles">Artykuły</a></li>
						
						
        			</ul>
				</nav>
	
				<div class="clear"></div>
			</div>
		</div>
		<header>
		<div  class="w3-content w3-section" >
					<img class="mySlides w3-animate-fading budynek"  src="images/budynek.jpg" style="width:100%">
					<img class="mySlides w3-animate-fading budynek"  src="images/budynek2.jpg" style="width:100%">
					<img class="mySlides w3-animate-fading budynek"  src="images/budynek3.jpg" style="width:100%">
				</div>
		<div style=" padding: 15px; font-size: 12px; color: #fff; margin-top: -230px; margin-left: 25%; z-index: 100; position: absolute;  border: 1px solid; width: 260px; height: 220px; font-family: 'Oswald', sans-serif;   background: linear-gradient(to bottom, rgba(95,167,230,1) 0%,rgba(1,102,191,1) 100%);" class="box">
				<img style="margin-left: -15px;" src="images/title1.jpg">
				</br>
				<p style="margin-bottom: -10px !important;"></br>
				Internat to miejsce gdzie wychowankowie zakładu mieszkają.  
				Spędzają tam większość czasu w związku z czym znaczna część zajęć wychowawczych odbywa się w tym dziale.
				 Chłopcy są zakwaterowani w 2–3 osobowych pokojach...	</p>			
		</div>

		<div style=" padding: 15px; font-size: 12px; color: #fff; margin-top: -230px; margin-left: 43%; z-index: 100; position: absolute;  border: 1px solid; width: 260px; height: 220px; font-family: 'Oswald', sans-serif;  background: linear-gradient(to bottom, rgba(255,202,78,1) 0%,rgba(255,154,22,1) 100%);" class="box">
				<img style="margin-left: -15px;" src="images/title2.jpg">
				</br>
				<p style="margin-bottom: -10px !important;"></br>
				
				Praca w szkole zorganizowana jest w sześciu oddziałach : 3-letnie Gimnazjum Nr 2 (4 oddziały), 2-letnia Zasadnicza Szkoła Zawodowa (2 oddziały). 
				W szkole zawodowej realizowana jest nauka....				</p>			
		</div>
		<div style=" padding: 15px; font-size: 12px; color: #fff; margin-top: -230px; margin-left: 61%; z-index: 100; position: absolute;  border: 1px solid; width: 260px; height: 220px; font-family: 'Oswald', sans-serif;  background: linear-gradient(to bottom, rgba(120,189,52,1) 0%,rgba(108,159,30,1) 100%);" class="box">
				<img style="margin-left: -15px;" src="images/title3.jpg">
				</br>
				<p style="margin-bottom: -10px !important;"></br>
				W warsztatach zatrudnionych jest ośmiu nauczycieli zawodu.
				 Wszyscy posiadają pełne kwalifikacje do wykonywania swoich obowiązków. 
				Nauczyciele zawodu posiadają samodzielnie opracowane na podstawie stosownych programów rozkłady...					</p>			
		</div>
			<!-- slider start -->
			<script type="text/javascript" src="js/slider.js"></script>
			<!-- slider end -->


			
		</header>
		
		<section id="body" class="width clear">
		</br></br>
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
			echo '</br></br><a href="index.php?v=posts&id_categories=23&name=Zamówienia%20publiczne">
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
