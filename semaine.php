<?php
$host="localhost";    
$username="mael61";
$password="github" ;
 
$db_name="projet_52";  
$con = new PDO('mysql:host='.$host.';dbname='.$db_name, $username, $password);
$Requete = $con->prepare('select fichier ,auteur from image where theme = (SELECT nom FROM `theme` WHERE `date`<=CURDATE()-7 and `date`>=CURDATE()-13 )');
			$Requete->execute();
			$troisPhoto = $Requete->fetchAll(PDO::FETCH_COLUMN, 0);
			print_r($troisPhoto);
			$Requete->execute();
			$troisPhotoNom = $Requete->fetchAll(PDO::FETCH_COLUMN, 1);
			print_r($troisPhotoNom);
$Requete2 = $con->prepare('SELECT nom FROM `theme` WHERE `date`<=CURDATE()-7 and `date`>=CURDATE()-13');
			$Requete2->execute();
			$nomThemePage = $Requete2->fetchColumn();
			
?>		
<div id="fh5co-project">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Un thème par semaine</h2>
				<?php 
				
				 if(($_SESSION)){
					echo 'Bonjour  '.$_SESSION['pseudo'].'';
				 
					echo '<a href="deconnexion.php">Déconnexion</a>';
					echo'<form action="upload.php" method="post" enctype="multipart/form-data">
						Selectionne une image:
					<input type="file" name="fileToUpload" id="fileToUpload">
					<input type="submit" value="Upload Image" name="submit">
						</form>';
				 }?>
				</div>
			</div>
		</div>	

	
<div id="fh5co-work-section" class="fh5co-light-grey-section">
		<div class="row">
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url(images/<?php echo($troisPhoto[0]);?>)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h4 class="title"> thème: <?php echo($nomThemePage) ;?></h4>
								<h5 class="category"><?php echo($troisPhotoNom[0]);?></h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url(images/<?php echo($troisPhoto[1]);?>)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h4 class="title">thème: <?php echo($nomThemePage) ;?></h4>
								<h5 class="category"><?php echo($troisPhotoNom[1]);?></h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url(images/<?php echo($troisPhoto[2]);?>)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h4 class="title">thème: <?php echo($nomThemePage) ;?></h4>
								<h5 class="category"><?php echo($troisPhotoNom[2]);?></h5>
							</div>
						</div>
					</a>
				</div>
			</div>
			</div>
</div>
		
	