<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=yes">
	<title>Page d'accueil du site Jarditou| HTML 5</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href='<?php echo base_url("assets/css/respon.css")?>' rel="stylesheet"> 
</head>
<body style="background-image:linear-gradient(to bottom,yellow,green,rgba(0,0,0,0),rgba(0,0,0,1))">
<header>
<figure>
<marquee direction="right" scrollamount="6" scrolldelay="10">
<p><img src="<?php echo base_url("assets/img/jarditou_logo.png")?>" alt="jarditou_logo" id="img">
</marquee>
<figcaption>La qualité depuis 70 ans</figcaption>
</figure>
    		<nav id="navbar" class="navbar navbar-expand-sm bg-dark navbar-dark">
    		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    	   			 <span class="navbar-toggler-icon">
    	   			 </span>
    	    	</button>
    	   			 <div class="collapse navbar-collapse" id="collapsibleNavbar">
    	        		<ul class="navbar-nav">
    	            		<li class="nav-item">
    		                	<a class="nav-link" href="<?php echo site_url("produits/accueil"); ?>">ACCUEIL</a>
    	            		</li>
    		            	<li class="nav-item">
    	                		<a class="nav-link" href="<?php echo site_url("produits/admin"); ?>">ADMINISTRATEUR</a>
    	            		</li>
    	           		</ul>
    	    		</div> 
    		</nav>
		</header>
<p><img src="<?php echo base_url("assets/img/promotion.jpg")?>" alt="promotions" id="img_promo">
<div class="centre" id="Accueil"><h1>Accueil</h1>
<hr>
<section>
<article>
 <h3>L'entreprise</h3>
  <p>Notre entreprise familiale met tout son savoir-faire à votre disposition dans le domaine du jardin et du paysagisme.</p>
  <p>Créée il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motorisés.</p>
  <p>Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens, Péronne, Abbeville, Corbie.
</article>
</section>
<section>
<article>
 <h3>Qualité</h3>
  <p>Nous mettons à votre disposition un service personnalisé, avec 1 seul interlocuteur durant tout votre projet.</p>
  <p>Vous serez séduit par notre expertise, nos compétences et notre sérieux.</p>
</article>
<article>
 <h3>Devis gratuit</h3>
  <p>Vous pouvez bien sûr contacter pour de plus amples informations ou pour une demande d’intervention. Vous souhaitez un devis ? Nous vous le réalisons gratuitement.</p>
</article>
</section>
</div>
  	<div class="droite">
		<iframe name="moniframe" width="100%" height="550" src="https://www.aujardin.info/" frameborder="1" scrolling="yes">
		</iframe>
	</div> 
<hr>
<footer>
<nav>
<ul id="menu_horizontal">
  <li><a href="" >Mentions légales</a></li>
  <li><a href="">Horaires</a></li>
  <li><a href="">Plan du site</a></li>
</ul>
</nav>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
