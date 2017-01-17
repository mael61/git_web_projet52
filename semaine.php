<?php
$host="localhost";    
$username="mael61";
$password="github" ;
 
$db_name="projet_52";  
$con = new PDO('mysql:host='.$host.';dbname='.$db_name, $username, $password);
$Requete = $con->prepare('select fichier ,auteur , theme from image where theme = (SELECT nom FROM `theme` WHERE `date`<=CURDATE()-7 and `date`>=CURDATE()-13 )');
			$Requete->execute();
			$troisPhoto = $Requete->fetchAll(PDO::FETCH_ASSOC);
			print_r($troisPhoto);
			
			
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
						<div class="image" style="background-image: url(images/<?php echo($troisPhoto[0]['fichier']);?>)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h4 class="title"> thème: <?php echo($troisPhoto[0]['theme']) ;?></h4>
								<h5 class="category"><?php echo($troisPhoto[0]['auteur']);?></h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url(images/<?php echo($troisPhoto[1]['fichier']);?>)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h4 class="title">thème: <?php echo($troisPhoto[1]['theme']) ;?></h4>
								<h5 class="category"><?php echo($troisPhoto[1]['auteur']);?></h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url(images/<?php echo($troisPhoto[2]['fichier']);?>)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h4 class="title">thème: <?php echo($troisPhoto[2]['theme']) ;?></h4>
								<h5 class="category"><?php echo($troisPhoto[2]['auteur']);?></h5>
							</div>
						</div>
					</a>
				</div>
			</div>
			</div>
</div>
		
	