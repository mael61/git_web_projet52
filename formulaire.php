<form method="post">
<label>Login:          <input type="text" name="Login" id="login" required/></label><br/>
<label>Mot de passe:   <input type="password" name="passe" id="password" required/></label><br/>
<label>Nom:            <input type="text" name="nom" id="nom" required/></label><br/>
<label>Prénom:         <input type="text" name="prénom" id="prenom" required /></label><br/>
<label>Adresse e-mail: <input type="text" name="email" id="email" required/></label><br/>
<input type="submit" value="M'inscrire"/>

</form>
<?php

    if(empty($_POST['Login'])) {
			echo "Le champ login est vide.";
	} else {
			if(empty($_POST['passe'])) {
				echo "Le champ Mot de passe est vide.";
				} else{
						if(empty($_POST['nom'])) {
							echo "Le nom est vide !";
						}else{
								if(empty($_POST['prénom'])) {
									echo "Le prénom est vide !";
									
									}else{
											if(empty($_POST['email'])) {
												echo "L'adresse email est vide !";
						
						
						
						}
					}
				}		
			}
	}	
	
	
	include("config.php");
	$con = new PDO('mysql:host='.$host.';dbname='.$db_name, $username, $password);
	$insertion = $con->prepare("INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `login`, `password`, `email`, `categorie`) VALUES (, $_POST['Login'], $_POST['passe], $_POST['nom'], $_POST['prénom'], $_POST['email'], $_POST['email'])");
    $Requete->execute();
?>