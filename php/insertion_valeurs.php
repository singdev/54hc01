<!DOCTYPE html>
<html>
<head>
	<title>Inserer les nouvelles valeur dans la table clients</title>
</head>
<body>
	<h1>Espace membres Notarium</h1>
	<?php 

		$servername = 'localhost';
		$dbname = 'clients_notarium';
		$username = 'root';
		$password = '';
		

		try {
			
			$dbco = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

			$dbco->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			$nom = "Luntala";
			$prenom = "jeant";
			$ville = "Libreville";
			$adresse = "Okala";
			$phone = 01021;
			$email = "luntala@gmail.com";

			$sth = $dbco->prepare("INSERT INTO clients(Nom,Prenom,Ville,Adresse,Phone,Email)VALUES (:nom, :prenom, :ville, :adresse, :phone, :email)");

			$sth->execute(array(
				':nom' => $nom,
				':prenom' => $prenom,
				':ville' => $ville,
				':adresse' => $adresse,
				':phone' => $phone,
				':email' => $email));

			echo "Entre ajoutée dans la table";

		} 

		catch(PDOException $e) {
			echo "Erreure : " . $e->getMessage();
			
		}
	?>

</body>
</html>