<!DOCTYPE html>
<html lang="fr-FR">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=yes">
		<title>Choix d'action pour l'administraeur du site Jarditou| HTML 5
		</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link href='<?php echo base_url("assets/css/respon.css")?>' rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<header>
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
		       		</ul>
	    		</div> 
		</nav>

		</header>
					<h1 class="text-center"><b><font>Interface d'administration de la base de données : JARDITOU</font></b></h1>
					<hr>
					<br><br><br>
					<h5 class="text-center"><b><font>Choisir une option</font></b></h5>
					<br><br><br><br><br><br><br>
					<center>
					<a href="<?php echo site_url("produits/ajout"); ?>" class="butn">INSERT</a>
					<a href="<?php echo site_url("produits/liste"); ?>" class="butn">SELECT</a>
					</center><br><br><br><br><br><br>
				<hr>
		<footer>
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
	                		<a class="nav-link" href="tableau1.html">Horaires</a>
	            		</li>
	            		<li class="nav-item">
	                		<a class="nav-link" href="contact1.html">Plan du site</a>
	            		</li>
	        		</ul>
	    		</div> 
			</nav>
		</footer>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 		crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 		crossorigin="anonymous"></script>
	
	</body>
</html>