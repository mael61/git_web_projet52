<?php
$host="localhost";    
$username="mael61";
$password="github" ;
 
$db_name="projet_52";  
$con = new PDO('mysql:host='.$host.';dbname='.$db_name, $username, $password);
$Requete = $con->prepare('select fichier from image where theme = (SELECT nom FROM `theme` WHERE `date`=CURDATE()-7)');
			$Requete->execute();
			$troisPhoto = $Requete->fetchAll(PDO::FETCH_COLUMN, 0);
			
?>			

	
<div id="fh5co-work-section" class="fh5co-light-grey-section">
		<div class="row">
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url(images/<?php echo($troisPhoto[0]);?>)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h4 class="title">Évolution</h4>
								<h5 class="category">Maël Maillard</h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url(images/<?php echo($troisPhoto[1]);?>)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h4 class="title">Évolution</h4>
								<h5 class="category">Jimmy Sobandith</h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url(images/<?php echo($troisPhoto[2]);?>)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h4 class="title">Évolution</h4>
								<h5 class="category">Alix Nouzillat</h5>
							</div>
						</div>
					</a>
				</div>
			</div>
			</div>
	</div>
		
	