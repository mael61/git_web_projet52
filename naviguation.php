<?php

include("config.php");
$con = new PDO('mysql:host='.$host.';dbname='.$db_name, $username, $password);
$Requete = $con->prepare('SELECT id,nom,Completer FROM `theme` WHERE `date`<=CURDATE()-13 and `date`>=CURDATE()-20');
			$Requete->execute();
			$nomTheme1 = $Requete->fetch(PDO::FETCH_ASSOC);
		
$Requete2 = $con->prepare('SELECT id,nom,Completer FROM `theme` WHERE `date`<=CURDATE()-7 and `date`>=CURDATE()-13');
			$Requete2->execute();
			$nomThemePage = $Requete2->fetch(PDO::FETCH_ASSOC);
$Requete3 =	$con->prepare('SELECT id,nom,Completer FROM `theme` WHERE `date`<=CURDATE() and `date`>=CURDATE()-6');
			$Requete3->execute();
			$nomTheme3 = $Requete3->fetch(PDO::FETCH_ASSOC);
			
$Requete4 =	$con->prepare('SELECT id,nom FROM `theme` WHERE Completer=1'); 
			$Requete4->execute();
			$ThemeComplet = $Requete4->fetchAll(PDO::FETCH_ASSOC);
			
$Requete5 =	 $con->prepare('SELECT count(*) FROM `theme` WHERE Completer=1');
			$Requete5->execute(); 
			$nbTheme = $Requete5->fetch(PDO::FETCH_ASSOC);

			$nb=$nbTheme['count(*)'];
			$nb_afficher=3;
			$i=0;
			echo('<ul>');
			while($i <= $nb-1)
			{
				echo('<li>');
				echo($ThemeComplet[$i]['nom']);
				echo('</li>');
				 $i++;
			}
			echo('</ul>');
			
			
			
?>

 


<div id="fh5co-steps " class="fh5co-bg-section">
		<div class="container">
			<div class="row bs-wizard animate-box" style="border-bottom:0; ">
              
				<div class="col-xs-4 bs-wizard-step complete">
				 
					<div class="text-center bs-wizard-stepnum"><h4>Semaine  <?php echo($nomTheme1['id']) ;?></h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="index.php" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p><?php echo($nomTheme1['nom']) ;?></p></div>
				</div>
				

				<div class="col-xs-4 bs-wizard-step complete"><!-- complete -->
					<div class="text-center bs-wizard-stepnum"><h4>Semaine <?php echo($nomThemePage['id']) ;?></h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="index.php" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p><?php echo($nomThemePage['nom']) ;?></p></div>
				</div>

				<div class="col-xs-4 bs-wizard-step complete"><!-- complete -->
					<div class="text-center bs-wizard-stepnum"><h4>Semaine <?php echo($nomTheme3['id']) ;?></h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="index.php" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p><?php echo($nomTheme3['nom']) ;?></p></div>
				</div>
				 
				
			</div>
			<div class="col-xs-2 bs bs-wizard-step"> 
			   <button type="button" onclick="avant()">précédent</button>
			   </div>
				<div class="col-xs-2 bs bs-wizard-step"> 
			   <button type="button" onclick="apres()">suivant</button>
			   </div>

		</div>
		</div>




