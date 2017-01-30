<?php
include("config.php");
$con = new PDO('mysql:host='.$host.';dbname='.$db_name, $username, $password);
$Requete = $con->prepare('select fichier ,auteur , theme from image where theme = (SELECT nom FROM `theme` WHERE `date`<=CURDATE()-7 and `date`>=CURDATE()-13 )');
			$Requete->execute();
			$troisPhoto = $Requete->fetchAll(PDO::FETCH_ASSOC);
		
			
			
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
				<div class="item-grid text-center" ">
						<div class="image" style="background-image: url(images/<?php echo($troisPhoto[0]['fichier']);?>)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h4 class="title"> thème: <?php echo($troisPhoto[0]['theme']);?></h4>
								<h5 class="category"><?php echo($troisPhoto[0]['auteur']);?></h5>
									<a class="example-image-link" href="images/<?php echo($troisPhoto[0]['fichier']);?>" data-lightbox="example-1"><img src="images/full-screen.png" alt="Mountain View" /></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="item-grid text-center" ">
						<div class="image" style="background-image: url(images/<?php echo($troisPhoto[1]['fichier']);?>)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h4 class="title">thème: <?php echo($troisPhoto[1]['theme']) ;?></h4>
								<h5 class="category"><?php echo($troisPhoto[1]['auteur']);?></h5>
									<a class="example-image-link" href="images/<?php echo($troisPhoto[1]['fichier']);?>" data-lightbox="example-2"><img src="images/full-screen.png" alt="Mountain View" /></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="item-grid text-center" ">
						<div class="image" style="background-image: url(images/<?php echo($troisPhoto[2]['fichier']);?>)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h4 class="title">thème: <?php echo($troisPhoto[2]['theme']) ;?></h4>
								<h5 class="category"><?php echo($troisPhoto[2]['auteur']);?></h5>
									<a class="example-image-link" href="images/<?php echo($troisPhoto[2]['fichier']);?>" data-lightbox="example-3"><img src="images/full-screen.png" alt="Mountain View" /></a>
							</div>
						</div>
					</div>
				</div>
        </div>
    </div>
			
</div>


<script>
	
function showUser(str) {
   if (str == "") {
        document.getElementById("fh5co-work-section").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("fh5co-work-section").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","photo.php?q="+str,true);
        xmlhttp.send();
    }
}


function getMenu(str) {
	  if (str == "") {
        document.getElementById("fh5co-work-section").innerHTML = "";
        return;
	} else {	
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("fh5co-work-section").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","photo.php?q="+str,true);
  xmlhttp.send();
}
}

</script>
		
	