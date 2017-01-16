 <?php
 $host="localhost";    
$username="mael61";
$password="github" ;
//$username=$_POST['Username'];       
//$password=$_POST['Password'];  
$db_name="projet_52";  




    if(empty($_POST['Username'])) {
        echo "Le champ Pseudo est vide.";
    } else {
       
        if(empty($_POST['Password'])) {
            echo "Le champ Mot de passe est vide.";
        } else {
          
            $Pseudo = ($_POST['Username']); 
            $MotDePasse = ($_POST['Password']);
         
             $con = new PDO('mysql:host='.$host.';dbname='.$db_name, $username, $password);
            if(!$con){
                echo "Erreur de connexion à la base de données.";
            } else {
		
                $Requete = $con->prepare("SELECT count(*) FROM admin where id='$Pseudo' and password='$MotDePasse' ");
				$Requete->execute();
				$result = $Requete->fetchColumn();
				print_r($result); 
                if ($result == 0) {
                    echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
					
                } else {
                    
					session_start();
							$_SESSION['pseudo'] = $Pseudo;
							$_SESSION['Password'] = $MotDePasse;
                    echo "Vous êtes à présent connecté !";
					
					header("Location: index.php");
					
						}
					
					}
			}
            }
        
		
    





?>
