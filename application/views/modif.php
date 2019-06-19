<!DOCTYPE html>
<html lang="fr-FR">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=yes">
		<title>Formulaire de modification et de suppression d'un produit du site Jarditou| HTML 5
		</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link href='<?php echo base_url("assets/css/respon.css")?>' rel="stylesheet">
	</head>
	
	<body>
		<header>

		</header>
	
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

		<div class="container-fluid"> 
	    <div class="row">
	        <div class="col-8">
				<?php
                echo validation_errors(); 
                echo form_open_multipart();
                ?><br>
					<fieldset>
						<legend>Détail du produit :</legend>
							<div class="form-group row">							
							    <label for="pro_id" class="col-6 col-form-label">ID :
							    </label>
							    	<div class="col-6">
							      		<input type="text" class="form-control" name="pro_id" id="pro_id" value ="<?php echo $produits->pro_id?>" placeholder="Id">
							    	</div>
							</div>
							 <div class="form-group row">
							    <label for="pro_ref" class="col-6 col-form-label">Référence :
							    </label>
							    	<div class="col-6">
										<input type="text" class="form-control" name="pro_ref" id="pro_ref" value ="<?php echo $produits->pro_ref?>" placeholder="Référence">
							    	</div>
							 </div>
							 <div class="form-group row">
							    <label for="pro_cat_id" class="col-6 col-form-label">Catégorie :
							    </label>
							    	<div class="col-6">
							      		<select  class="form-control" name="pro_cat_id" id="pro_cat_id">
							      		<?php
							      		foreach ($liste_categories as $row)
                                        {
                                            echo "<option value='".$row->cat_id."'";
                                            if ($row->cat_id == $produits->pro_cat_id) 
                                            {
                                                echo " selected";
                                            }
                                            echo ">".$row->cat_nom."</option>\n";                                        
                                        }
                                        ?>
                    					</select>
							    	</div>
							 </div>
							 <div class="form-group row">
							    <label for="pro_libelle" class="col-6 col-form-label">Libellé :
							    </label>
							    	<div class="col-6">
							      		<input type="text" class="form-control" name="pro_libelle" id="pro_libelle" value ="<?php echo $produits->pro_libelle?>" placeholder="Libellé">
							    	</div>
							 </div>
							 <div class="form-group row">
							    <label for="pro_description" class="col-6 col-form-label">Description :
							    </label>
							    	<div class="col-6">
							      		<input type="text" class="form-control" name="pro_description" id="pro_description" value ="<?php echo $produits->pro_description?>" placeholder="Description">
							    	</div>
							 </div>  
							  <div class="form-group row">
							    <label for="pro_prix" class="col-6 col-form-label">Prix :
							    </label>
							    	<div class="col-6">
							      		<input type="text" class="form-control" name="pro_prix" id="pro_prix" value ="<?php echo $produits->pro_prix?>" placeholder="Prix">
							    	</div>
							 </div>
							 <div class="form-group row">
							    <label for="pro_stock" class="col-6 col-form-label">Stock :
							    </label>
							    	<div class="col-6">
							      		<input type="text" class="form-control" name="pro_stock" id="pro_stock" value ="<?php echo $produits->pro_stock?>" placeholder="Stock">
							    	</div>
							</div> 
									 <div class="form-group row">
							    <label for="pro_couleur" class="col-6 col-form-label">Couleur :
							    </label>
							    	<div class="col-6">
							      		<input type="text" class="form-control" name="pro_couleur" id="pro_couleur" value ="<?php echo $produits->pro_couleur?>" placeholder="Couleur">
							    	</div>
							</div>
							<div class="form-group row">
							    <label for="pro_photo" class="col-6 col-form-label">Photo :
							    </label>
							    	<div class="col-6">
							      		<input type="file" class="input-file btn btn-dark form-control" name="pro_photo" id="pro_photo">
							    	</div>
							</div>    
					</fieldset>
			
			  		<fieldset class="form-group">
			    		<div class="row">
			      			<div class="col-12">
			        			<div class="form-check form-check-inline">
			          				<input class="form-check-input" type="radio" name="pro_bloque" id="inlineRadios1" value="1" <?php if ($produits->pro_bloque==1) { echo " checked"; } ?>>
			          					<label class="form-check-label" for="inlineRadios1">
			            					<b>Bloquer le produit.</b>
			          					</label>
			        			</div>
			        			<div class="form-check form-check-inline">
			          				<input class="form-check-input" type="radio" name="pro_bloque" id="inlineRadios2" value="0" <?php if ($produits->pro_bloque==0) { echo " checked"; } ?>>
			          					<label class="form-check-label" for="inlineRadios2">
			            					<b>Débloquer le produit.</b>
			          					</label>
			        			</div>
			        		</div>
			        	</div>
			        </fieldset>
							<div class="form-group row">							
							    <label for="pro_d_ajout" class="col-6 col-form-label">Date d'ajout :
							    </label>
							    	<div class="col-3">
							      		<input type="text" class="form-control" name="pro_d_ajout" id="pro_d_ajout" readonly value ="<?php echo $produits->pro_d_ajout?>">
							    	</div>
							</div>
							 <div class="form-group row">
							    <label for="pro_d_modif" class="col-6 col-form-label">Date de modification :
							    </label>
							    	<div class="col-3">
										<input type="text" class="form-control" name="pro_d_modif" id="pro_d_modif" readonly value ="<?php echo $produits->pro_d_modif?>">
							    	</div>
							 </div>
					<input type="submit" value="UPDATE" id="update" class="btn btn-dark" onclick="return confirm('Etes vous sûr de vouloir modifier cet item ?')">
					<a href="<?php echo site_url("Produits/suppr/".$produits->pro_id)?>" role="button" id="delete" class="btn btn-dark" onclick="return confirm('Etes vous sûr de vouloir supprimer cet item ?')">DELETE</a>
					<input type="reset" value="RESET" class="btn btn-dark">
						
				</form>
				<hr>
			</div>
			<aside class="col-4"><br><br><br>
			   	<img class="img-fluid" src="<?php echo base_url("assets/img/".$produits->pro_id)?>" alt="Vue du produit" width="200"/>
			</aside>
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
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 		crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 		crossorigin="anonymous"></script>
	    <script src="assets/js/js.js"></script>
	    
	</body>
</html>