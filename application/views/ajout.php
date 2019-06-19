<!DOCTYPE html>
<html lang="fr-FR">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=yes">
		<title>Formulaire de création d'un nouveau produit du site Jarditou| HTML 5
		</title>
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
		<div class="container-fluid"> 
	    <div class="row">
	        <div class="col-8">
            <?php
                echo validation_errors(); 
                echo form_open_multipart();
            ?>
				<h5><b><font>Formulaire de gestion de la base de données : JARDITOU</font></b></h5><hr>
				
					<fieldset>
						<legend>Détail du produit :</legend>
							 <div class="form-group row">
							    <label for="reference" class="col-6 col-form-label">Référence :
							    </label>
							    	<div class="col-6">
										<input type="text" class="form-control" name="pro_ref" id="reference" placeholder="Référence" value="<?= set_value("pro_ref") ?>">
							    	</div>
							 </div>
							 <div class="form-group row">
							    <label for="categorie" class="col-6 col-form-label">Catégorie :
							    </label>
							    	<div class="col-6">
							      		<select  class="form-control" name="pro_cat_id" id="categorie" value="<?= set_value("pro_cat_id") ?>">
							      		<option selected disabled>Sélectionner</option>
							      		<?php
							      		foreach ($liste_categories as $row)
                                        {
                                           echo '<option value='.$row->cat_id.'>'.$row->cat_nom.'</option>';
                                        }
                                        ?>
                    					</select>
							    	</div>
							 </div>
							 <div class="form-group row">
							    <label for="sous_categorie" id="label_sous_categorie" class="col-6 col-form-label">Sous catégorie :
							    </label>
							    	<div class="col-6">
							      		<select class="form-control" name="sous_cat_id" id="sous_categorie">
							      		<option selected disabled>Sélectionner</option>
							      		</select>
							    	</div>
							 </div>
							 <div class="form-group row">
							    <label for="libelle" class="col-6 col-form-label">Libellé :
							    </label>
							    	<div class="col-6">
							      		<input type="text" class="form-control" name="pro_libelle" id="libelle" placeholder="Libellé" value="<?= set_value("pro_libelle") ?>">
							    	</div>
							 </div>
							 <div class="form-group row">
							    <label for="description" class="col-6 col-form-label">Description :
							    </label>
							    	<div class="col-6">
							      		<input type="text" class="form-control" name="pro_description" id="description" placeholder="Description" value="<?= set_value("pro_description") ?>">
							    	</div>
							 </div>  
							  <div class="form-group row">
							    <label for="prix" class="col-6 col-form-label">Prix :
							    </label>
							    	<div class="col-6">
							    		<input type="text" class="form-control" name="pro_prix" id="prix" placeholder="Prix" value="<?= set_value("pro_prix") ?>">
							       	</div>
							 </div>
							 <div class="form-group row">
							    <label for="stock" class="col-6 col-form-label">Stock :
							    </label>
							    	<div class="col-6">
							      		<input type="text" class="form-control" name="pro_stock" id="stock" placeholder="Stock" value="<?= set_value("pro_stock") ?>">
							       	</div>
							</div> 
									 <div class="form-group row">
							    <label for="couleur" class="col-6 col-form-label">Couleur :
							    </label>
							    	<div class="col-6">
							      		<input type="text" class="form-control" name="pro_couleur" id="couleur" placeholder="Couleur" value="<?= set_value("pro_couleur") ?>">
							    	</div>
							</div>
									 <div class="form-group row">
							    <label for="photo" class="col-6 col-form-label">Photo :
							    </label>
							    	<div class="col-6">
							      		<input type="file" class="input-file btn btn-dark form-control" name="pro_photo" id="photo">
							    	</div>
							</div>    
					</fieldset>
					<br><br>
			  		<fieldset class="form-group">
			    		<div class="row">
			      			<div class="col-12">
			        			<div class="form-check form-check-inline">
			          				<input class="form-check-input" type="radio" name="pro_bloque" id="inlineRadios1" value=1>
			          					<label class="form-check-label" for="inlineRadios1">
			            					<b>Bloquer le produit.</b>
			          					</label>
			        			</div>
			        			<div class="form-check form-check-inline">
			          				<input class="form-check-input" type="radio" name="pro_bloque" id="inlineRadios2" value=0>
			          					<label class="form-check-label" for="inlineRadios2">
			            					<b>Débloquer le produit.</b>
			          					</label>
			        			</div>
			        		</div>
			        	</div>
			        </fieldset>
					<br><br>
					<input type="submit" value="SUBMIT" id="valider" class="btn btn-dark">
					<input type="reset" value="RESET" id="annuler" class="btn btn-dark">
						
				</form>
				<hr>
			</div>
	    </div>
	    </div>
	    
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
		
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 		crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 		crossorigin="anonymous"></script>
		<script src="/ci/assets/js/sous_cat.js"></script>
	</body>
</html>
