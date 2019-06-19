<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Liste des produits du site jarditou</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href='<?php echo base_url("assets/css/respon.css")?>' rel="stylesheet">
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
		                	<a class="nav-link" href="<?php echo site_url("produits/ajout"); ?>">CREATE</a>
	            		</li>
		            	<li class="nav-item">
	                		<a class="nav-link" href="<?php echo site_url("produits/liste"); ?>">READ</a>
	            		</li>
	            		<li class="nav-item">
	                		<a class="nav-link"href="<?php echo site_url("produits/liste"); ?>">UPDATE</a>
	            		</li>
	            		<li class="nav-item">
	                		<a class="nav-link"href="<?php echo site_url("produits/liste"); ?>">DELETE</a>
	            		</li>
	        		</ul>
	    		</div> 
		</nav>
	</header>
    <center><h1>Liste des produits</h1><br>
    <table id="table1" class="table table-striped thead-dark table-hover table-responsive table-sm-responsive">
        <thead class="table thead-dark">
            <th>Photo</th>
            <th>Id</th>
            <th>Référence</th>
            <th>Libellé</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Couleur</th>
            <th>Ajouté le :</th>
            <th>Modifié le :</th>
            <th>Bloqué</th>
        </thead>

<?php 
foreach ($liste_produits as $row) 
{

    echo"<tr>";
    echo"<td width='80'><img class='photo' alt='Photo du produit' src='".base_url("assets/img/".$row->pro_id)."'></td>\n";
    echo"<td width='30'><a href=".site_url("produits/modif/".$row->pro_id)."\" title=\"".$row->pro_id."\">$row->pro_id</a></td>\n";
    echo"<td width='80'>".$row->pro_ref."</td>";
    echo"<td width='100'>".$row->pro_libelle."</td>";
    echo"<td width='500'>".$row->pro_description."</td>";
    echo"<td width='60'>".$row->pro_prix."</td>";
    echo"<td width='60'>".$row->pro_stock."</td>";
    echo"<td width='100'>".$row->pro_couleur."</td>";
    echo"<td width='120'>".$row->pro_d_ajout."</td>";
    echo"<td width='220'>".$row->pro_d_modif."</td>";
    echo"<td width='60'>".$row->pro_bloque."</td>";
    echo"</tr>";
    
}
echo"</table>"; 
?></center>
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
	    <script src="assets/js/js.js"></script>
</body>
</html>