<?php
session_start();
 
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<?php include '../includes_news_user/head.php'; ?>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

<?php include '../includes_news_user/header.php'; ?>


  <!-- Start Banner -->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="session.php">INFORMATION SUR LA DEMANDE</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="profil.php">MODIFIER LA DEMANDE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">NOUVEAU DOSSIER</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="documents_requis.php">DOCUMENTS REQUIS</a>
            </li>
          </ul>
        </div>
    </nav>
    <!-- End Banner -->

 <!-- contact_form -->
    <div class="section dossier_succession_bila_form">
        <div class="container">
            <div class="">
                <div class="">
                    <div class="full_bilan">
                        <div class="">
                            <p>DOCUMENTS REQUIS</p>
                            <?php
                            if (isset($_POST['submit'])) {
        
                                extract($_POST);
                                

                            if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])){

                                $taillemax = 2097152;
                                $extensionsValides = array('jpg', 'jpeg', 'png', 'gif');
                                
                                if($_FILES['avatar']['size'] <= $taillemax){
                                    $extensioninsert = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));

                                    if(in_array($extensioninsert, $extensionsValides)){
                                        $chemin = "utilisateur/membres/avatars".$_SESSION['id'].".".$extensioninsert;
                                        $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
                                        if($resultat){

                                        include '../includes/database.php';
                                        global $dbco;

                                          $nom = $_SESSION['nom'];
                                          $prenom = $_SESSION['prenom']; 
                                          $email = $_SESSION['email'];
                                          $avatar = $_POST['avatar'];        
        
                                        $sth = $dbco->prepare("INSERT INTO documents(Nom,Prenom,Email,Avatar)VALUES (:nom, :prenom, :email, :avatar)");

                                       $sth->bindValue(':nom', $nom);
                                       $sth->bindValue(':prenom', $prenom);
                                       $sth->bindValue(':email', $email);
                                       $sth->bindValue(':avatar', $avatar);

                                       $sth->execute();
                                       header("Location: session.php");
                                       

                                        }else{
                                            $msg = "Erreur durant le téléchargement de vore image";
                                        }


                                    }else{
                                        $msg = "Votre image doit être au formt jpg, jpeg, png, gif";
                                    }

                                }else{
                                    $msg = "Votre image ne doit pas dépasser 2Mo";
                                }
                                }
                            }
                            ?>
                            <form action="" method="POST" enctype="multipart/form-data">
                            <div class="telecharge">Photo : <input type="file" name="avatar"  class="doc3"/></div>
                            <div class="telecharge">Pièce d'identité ou passport : <input type="file" name="identite" class="doc1" /></div>
                            <div class="telecharge">Copie d'acte de naissance : <input type="file" name="acte-de-naissance" class="doc2" /></div> 
                             <div class="soum">
                                
                                <div class=""><input type="submit" name="submit" value="Soumettre" class="bouton" /></div>
                               
                              </div>
                            </form> 
                        </div>                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact_form -->

   
    <?php include '../includes_news_user/footer.php'; ?>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
	
</body>

</html>