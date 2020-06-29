<!DOCTYPE html>
<html lang="fr">
	<head>
	    <title>ALT-R - Accueil</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Blog dirigé aux étudiants en reconversion professionnelle qui sont dans la recherche d'une alternance dans le secteur digital">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css"> <!-- feuille de style -->
	</head>

	<header>
	    <?php include 'include/menu.php'; ?>
	</header>

	<body>

		<div class="container">
			<img src="medias/index1.jpg" class="index">
			<div class="textimgindex">
				<img src="medias/logo/logo.png" class="logo">
				<p class="indexpres">Le site pour muscler ta recherche d'alternance <img src="medias/logo/muscle_haltere.png" class="minilogo"> </p>
			</div>
		</div>

		<div class="slideshow-container">	<!-- carousel -->	
	        <div class="mySlides fade">
	          	<img src="medias/carousel1.jpg" style="width:100%">
	          	<div class="text">Tu veux rejoindre l’univers tech & digital en passant par la case alternance ? <br> Tu as ouvert le bon onglet et celui-ci, tu peux le mettre en favori.</div>
	        </div>
        
	        <div class="mySlides fade">
	          	<img src="medias/carousel2.jpg" style="width:100%">
	          	<div class="text">ALT-R te donne accès gratuitement aux conseils et aux témoignages de ceux qui <br> sont aussi passés par là pour t’aider à trouver une alternance.</div>
			</div>     
			 	
        	<a class="prev" onclick="plusSlides(-1)">&#10094;</a> <!-- Next and previous buttons -->
			<a class="next" onclick="plusSlides(1)">&#10095;</a>	
		</div>

		<br>  

        <div style="text-align:center">
        	<span class="dot" onclick="currentSlide(1)"></span> <!-- The dots/circles -->
        	<span class="dot" onclick="currentSlide(2)"></span>
		</div>			

		<div class="container">
			<title class="index">Le Projet ALT-R</title>
			<img src="medias/projetaltr.jpg" class="projet">
			<p class="projet">Découvre l’histoire du projet ALT-R dédié à la recherche d’alternance.</p>
		</div>		

		<div class="container">
			<img src="medias/discord.png" class="dt">
			<div class="dt">
				<title class="dt">Le fruit de la Discord</title>
				<p class="dt">
					Tout a commencé lorsque Morgane, une super coach en insertion professionnelle, a créé un channel Discord. Ce dernier permet à ses coachés d’échanger, de s’entraider et de 
					progresser collectivement. C’est comme ça que Gabriela, Aurélien, Thomas et Amélie, 4 alternants d’OpenClassrooms se sont rencontrés virtuellement pour mettre sur pied ALT-R. 
					Toujours accompagnés de leur bonne fée Morgane !
				</p>
			</div>				
		</div>

		<div class="container">			
			<img src="medias/toux.png" class="dt">
			<div class="dt">
				<title class="dt">Une toux qui mêne à tout</title>			
				<p class="dt">
					Alors que le COVID-19 condamnait la France à un Confinement à Durée Indéterminée, on a voulu utiliser ce temps à bon escient, en mettant nos expériences et nos compétences 
					complémentaires au service d’un projet utile pour nos pairs.
				</p>
				<p class="dt">
					On vient tous d’horizons très différents, mais on est tous en reconversion professionnelle, tous passionnés de tech & digital. C’est pourquoi, on a voulu s’adresser à toi, 
					futur alternant qui est dans la même situation que nous : tu n’es pas seul, tu vas y arriver !
				</p>
			</div>		
		</div>	

		<div class="container">
			<title class="index">ALT-R, pour que la recherche d'alternance ne soit plus un poids.</title>
			<div class="container flex">
				<div class="case">
					<img src="medias/alternant.png" class="case">
					<title class="index">Alternant / Alternante</title>
					<p class="index">
						Tu galères à trouver une entreprise pour t’accueillir en alternance ? Tu ne tombes que sur des stages sous-payés exigeants plusieurs années d’XP ? Tu enchaines refus 
						sur refus, ton rêve de reconversion s’éloigne au fil des jours ?
					</p>
				</div>

				<div class="case">
					<img src="medias/present.png" class="case">
					<title class="index">Nous sommes là !</title>

					<p class="index">
						On te comprend, on est passé par là. Sauter le pas de la reconversion, affronter la peur de l’inconnu, se bouger pour trouver la formation qui nous correspond ça n'a 
						jamais été facile.
					</p>
				</div>

				<div class="case">
					<img src="medias/help.png" class="case">
					<title class="index">ALT-R à l'aide !</title>
					<p class="index">
						Avec ALT-R, on veut t’aider à reprendre du poil de la bête et te conseiller du mieux possible pour que tu puisses décrocher ton contrat d’alternance, et réussir ton 
						projet professionnel !
					</p>
				</div>
			</div>			
		</div>

		<div class="container">
			<title class="index">Le Collectif</title>
			<div class="container flex">

				<div class="case members">
					<img src="medias/aurelien.png" class="members">
					<title class="members">Aurélien Masiero</title>
					<p class="members">Développeur Web</p>
					<a href="https://www.linkedin.com/in/aurelien-masiero" target="_blank"><img src="medias/linkedin.svg" class="linkedin"></a>
					<p class="index">Un peu touche à tout dans le domaine de l'informatique, le développement web est un des rares à être resté, et je compte bien vivre de ma passion !</p>
				</div>
				
				<div class="case members">
					<img src="medias/gabriela.png" class="members">
					<title class="members">Gabriela Vasquez</title>
					<p class="members">Développeuse Web</p>
					<a href="https://www.linkedin.com/in/gabrielavasquezmendez/" target="_blank"><img src="medias/linkedin.svg" class="linkedin"></a>
					<p class="index">Anciennement styliste, chef de produit, commercial dans la mode, entrepreneuse à vie et développeuse web d’avenir, je surfe sur des vagues dans une mer 
					débordante d’aventures.</p>
				</div>
				
				<div class="case members">
					<img src="medias/thomas.png" class="members">
					<title class="members">Thomas Gouallou</title>
					<p class="members">Développeur Web</p>
					<a href="https://www.linkedin.com/in/thomas-gouallou-b62a16a6" target="_blank"><img src="medias/linkedin.svg" class="linkedin"></a>
					<p class="index">Passionné d'Histoire et d'informatique, je suis spécialisé dans le développement web et la Première Guerre Mondiale.</p>
				</div>

				<div class="case members">
					<img src="medias/amelie.png" class="members">
					<title class="members">Amélie Bichon-Fortin</title>
					<p class="members">Chargée de Mission RH</p>
					<a href="https://www.linkedin.com/in/ameliebichonfortin" target="_blank"><img src="medias/linkedin.svg" class="linkedin"></a>
					<p class="index">Après 6 ans de communication, je me suis lancée dans les ressources humaines avec l’objectif de me spécialiser dans l’accompagnement des profils tech & digital.</p>
				</div>
				
				<div class="case members">
					<img src="medias/morgane.png" class="members">
					<title class="members">Morgane Lloret</title>
					<p class="members">Coach et formatrice en insertion professionnelle</p>
					<a href="https://www.linkedin.com/in/morgane-lloret-b1092bb3" target="_blank"><img src="medias/linkedin.svg" class="linkedin"></a>
					<p class="index">Coach en insertion et réorientation professionnelle, j’aide les personnes à accomplir leurs objectifs professionnels dans la joie et la bonne humeur.</p>
				</div>
			</div>
		</div>

		<div class="disclaimer">
			<title class="disclaimer">Disclaimer</title>
			<p class="disclaimer">ALT-R est un projet sans aucun but lucratif, proposant seulement des conseils et du soutien.</p>
		</div>

		<script>
			var slideIndex = 1;
			showSlides(slideIndex);
			
			function plusSlides(n) {
			  showSlides(slideIndex += n);
			}
			
			function currentSlide(n) {
			  showSlides(slideIndex = n);
			}
			
			function showSlides(n) {
			  var i;
			  var slides = document.getElementsByClassName("mySlides");
			  var dots = document.getElementsByClassName("dot");
			  if (n > slides.length) {slideIndex = 1}    
			  if (n < 1) {slideIndex = slides.length}
			  for (i = 0; i < slides.length; i++) {
				  slides[i].style.display = "none";  
			  }
			  for (i = 0; i < dots.length; i++) {
				  dots[i].className = dots[i].className.replace(" active", "");
			  }
			  slides[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " active";
			}
			</script>

	</body>
	<?php include 'include/footer.php'; ?>
</html>