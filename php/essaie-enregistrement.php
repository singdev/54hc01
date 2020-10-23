<!DOCTYPE html>
<html>
<head>
	<title>Inserer les nouvelles valeur dans la table clients</title>
</head>
<body>
	<h1>Espace membres Notarium</h1>

	 <div class="section">
        <div class="container">
         
                <div class="information-cliente">
                    <form action="#" method="post">
                        <div class="info-client">
                            <div><input type="text" name="nom" placeholder="Votre nom" class="info" /></div>
                            <div><input type="text" name="prenom" placeholder="votre prénom" class="info"/></div>
                        </div>
                        <div class="info-client">
                            <div><input type="text" name="ville" placeholder="Ville" class="info"/></div>
                            <div><input type="text" name="adresse" placeholder="Adresse" class="info" /></div>
                        </div>
                        <div class="info-client">
                            <div><input type="text" name="phone" placeholder="Votre Numéro de téléphone" class="info"/></div>
                            <div><input type="email" name="email" placeholder="Votre email" class="info"/></div>
                            <div><input type="submit" name="submit" value="Continuer" class="suivant-cl"/></div>
                        </div>
                         
                    </form> 
                    <div class="clear"></div>    
                </div>  
        </div>
    </div>
    
    <!-------------------connecté le formulaire à la base de données-------------------------------------------------------->
	<?php

	if (isset($_POST['submit'])) {
	 	
	 	extract($_POST);

	 	if (!empty($nom) && !empty($prenom) && !empty($ville) && !empty($adresse) && !empty($phone) && !empty($email)) {
	 
	 /*-------------------connection à la base de données--------------------------------------------------------*/

	 	$servername = 'localhost';
		$dbname = 'clients_notarium';
		$username = 'root';
		$password = '';
		
		try {
				
			$dbco = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
			$dbco->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		} catch(PDOException $e) {
			echo "Erreure : " . $e->getMessage();
			
		}
		/*--------------------------------------------------------------------------------------------------------------*/
		

	 		global $dbco;


	 	/*-----------------------------------------bloquer le mail identique-----------------------------------------*/
	 		$ce = $dbco->prepare("SELECT email FROM clients WHERE email = :email");
	 		$ce->execute(['email' => $email]);
	 		$result = $ce->rowCount();


	 		if ($result == 0) {

		/*-----------------------------------Insertion de données dans la table clients---------------------------------*/
	 		$sth = $dbco->prepare("INSERT INTO clients(Nom,Prenom,Ville,Adresse,Phone,Email)VALUES (:nom, :prenom, :ville, :adresse, :phone, :email)");

			$sth->execute(array(
				':nom' => $nom,
				':prenom' => $prenom,
				':ville' => $ville,
				':adresse' => $adresse,
				':phone' => $phone,
				':email' => $email));
		}else{
			echo "un mail existe déjà !";
		}

	 	}
	 	/*-----------------------------------------------------------------------------------------------------------------------*/
	 }

	?>
    <!---------------------------------------------------------------------------------------------------------------------------------->
</body>
</html>


/*-----------------------------------Insertion de données dans la table clients---------------------------------*/
            $sth = $dbco->prepare("INSERT INTO clients(Nom,Prenom,Ville,Adresse,Phone,Email)VALUES (:nom, :prenom, :ville, :adresse, :phone, :email)");

            $sth->execute(array(
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':ville' => $ville,
                ':adresse' => $adresse,
                ':phone' => $phone,
                ':email' => $email));	


<?php
session_start();

if (isset($_POST['submit'])) {
        
        extract($_POST);


       

   /*-------------------connection à la base de données--------------------------------------------------------*/

    $servername = 'localhost';
    $dbname = 'clients_notarium';
    $username = 'root';
    $password = '';
    
    try {
        
      $dbco = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
      $dbco->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    
    /*--------------------------------------------------------------------------------------------------------------*/
    

      global $dbco;

      $nom = $_SESSION['nom'];
      $phone = $_SESSION['phone'];
      $email = $_SESSION['email'];
      $typeDossier = $_SESSION['succession'];
      $notaireChoisi = $_POST['notaireChoisi']; 

         
      $sth = $dbco->prepare("INSERT INTO nouveau_dossier(Nom,Phone,Email,TypeDossier,NotaireChoisi)VALUES (:nom, :phone, :email, :typeDossier, :notaireChoisi)");

      
       $sth->bindValue(':nom', $nom);
       $sth->bindValue(':phone', $phone);
       $sth->bindValue(':email', $email);
       $sth->bindValue(':typeDossier', $typeDossier);
       $sth->bindValue(':notaireChoisi', $notaireChoisi);

/*----------------------------------exécution de la requête préparée---------------------------------------*/
       $sth->execute();

       header("Location: session_bienvenu.php");

    } catch(PDOException $e) {
      echo "Erreure : " . $e->getMessage();
      
    }
  

}
    /*-----------------------------------------------------------------------------------------------------------------------*/
?>