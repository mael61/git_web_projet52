<?php

include("config.php"); 
$con = new PDO('mysql:host='.$host.';dbname='.$db_name, $username, $password);
			
$Requete4 =	$con->prepare('SELECT id,nom FROM `theme` WHERE Completer=1'); 
			$Requete4->execute();
			$ThemeComplet = $Requete4->fetchAll(PDO::FETCH_ASSOC);
			
$Requete5 =	 $con->prepare('SELECT count(*) FROM `theme` WHERE Completer=1');
			$Requete5->execute(); 
			
			$nbTheme = $Requete5->fetch(PDO::FETCH_ASSOC);
		//	print_r($ThemeComplet);
			$nb=$nbTheme['count(*)'];
		//	print_r($nb);
			$i=0;
			echo'<div id="fh5co-steps " class="fh5co-bg-section">';
			echo'<div class="container">';
				echo'<div id="ca-container" class="ca-container">';
					echo'<div class="ca-wrapper">';
			while($i <= $nb-1)
			{
						echo'<div class="ca-item ca-item-">';
								echo '<div class="ca-item-main">';
										echo'';
											echo'<h1>';
											echo $ThemeComplet[$i]['nom'];
											echo'</h1>';
											echo'<h2> Semaine ';
											echo $ThemeComplet[$i]['id'];
											echo'</h2>';
											echo'<button type="button" name="photo" value="';
											echo  $ThemeComplet[$i]['id'];
											echo '" onclick="getMenu(this.value)">Click Me!</button>';
								echo'</div>';	
						echo'</div>';
					
				$i++;
			}
					echo'</div>';
				echo'</div>';
			echo'</div>';
			echo'</div>';
?>


<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="Carouselle/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="Carouselle/css/style.css" />
		<link rel="stylesheet" type="text/css" href="Carouselle/css/jquery.jscrollpane.css" media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Coustard:900' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css' />
    </head>
    <body>
		
	</body>
	
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script type="text/javascript" src="Carouselle/js/jquery.easing.1.3.js"></script>
		<!-- the jScrollPane script -->
		<script type="text/javascript" src="Carouselle/js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="Carouselle/js/jquery.contentcarousel.js"></script>
		<script type="text/javascript">$('#ca-container').contentcarousel();</script>
		