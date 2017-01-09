<?php

$host="localhost";    
$username="mael61";
$password="github" ;
 
$db_name="projet_52";  
$con = new PDO('mysql:host='.$host.';dbname='.$db_name, $username, $password);
$Requete = $con->prepare('SELECT nom FROM `theme` WHERE `date`=CURDATE()-14');
			$Requete->execute();
			$nomTheme1 = $Requete->fetchColumn();
$Requete2 = $con->prepare('SELECT nom FROM `theme` WHERE `date`<=CURDATE()-7 and `date`>=CURDATE()-13');
			$Requete2->execute();
			$nomThemePage = $Requete2->fetchColumn();
$Requete3 =	$con->prepare('SELECT nom FROM `theme` WHERE `date`=CURDATE()');
			$Requete3->execute();
			$nomTheme3 = $Requete3->fetchColumn();
			
?>
<div id="fh5co-steps " class="fh5co-bg-section">
		<div class="container">
			

			<div class="row bs-wizard animate-box" style="border-bottom:0; ">
                
				<div class="col-xs-4 bs-wizard-step complete">
					<div class="text-center bs-wizard-stepnum"><h4>Semaine 1</h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p><?php echo($nomTheme1) ;?></p></div>
				</div>
				

				<div class="col-xs-4 bs-wizard-step complete"><!-- complete -->
					<div class="text-center bs-wizard-stepnum"><h4>Semaine 2</h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p><?php echo($nomThemePage) ;?></p></div>
				</div>

				<div class="col-xs-4 bs-wizard-step activated"><!-- complete -->
					<div class="text-center bs-wizard-stepnum"><h4>Semaine 3</h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p><?php echo($nomTheme3) ;?></p></div>
				</div>

				
			</div>

		</div>
	</div>
	