<?php
include("config.php");
$con = new PDO('mysql:host='.$host.';dbname='.$db_name, $username, $password);
$q = intval($_GET['q']);
print_r($q);
$Requete = $con->prepare('select fichier ,auteur , theme from image where theme = (SELECT nom FROM `theme` WHERE id = '.$q.')');
$Requete->execute();
$Photo = $Requete->fetchAll(PDO::FETCH_ASSOC);

?>

<div id="fh5co-work-section" class="fh5co-light-grey-section">
		<div class="row">
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url(images/<?php echo($Photo[0]['fichier']);?>)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h4 class="title"> thème: <?php echo($Photo[0]['theme']);?></h4>
								<h5 class="category"><?php echo($Photo[0]['auteur']);?></h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url(images/<?php echo($Photo[1]['fichier']);?>)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h4 class="title">thème: <?php echo($Photo[1]['theme']) ;?></h4>
								<h5 class="category"><?php echo($Photo[1]['auteur']);?></h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url(images/<?php echo($Photo[2]['fichier']);?>)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h4 class="title">thème: <?php echo($Photo[2]['theme']) ;?></h4>
								<h5 class="category"><?php echo($Photo[2]['auteur']);?></h5>
							</div>
						</div>
					</a>
				</div>
			</div>
</div>
