<?php session_start();

    $servername = 'localhost';
    $dbname = 'clients_notarium';
    $username = 'root';
    $password = '';

    $dbco = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
 
 if (isset($_GET['email']) AND $_GET['email'] == $_SESSION['email']) {
        
        
        $getemail = intval($_GET['email']);
        $requser = $dbco->prepare('SELECT *  FROM client WHERE email = ?');
        $requser->execute(array($getemail));
        $userinfo = $requser->fetch();             
        }

?> 
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<?php include '../includes_news_user/head.php'; ?>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <?php include '../includes_news_user/header.php'; ?>
    
    <!-- menu de l'utilisateur -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="session.php">INFORMATION SUR LA DEMANDE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profil.php">MODIFIER LA DEMANDE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">NOUVEAU DOSSIER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="documents_requis.php">DOCUMENTS REQUIS</a>
            </li>
          </ul>
        </div>
    </nav>
    <!-- menu de l'utilisateur -->


    <!-- contact_form -->
    <div class="section dossier_succession_bila_form">
    
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 offset-lg-3">
                    <div class="full_bilan">
                                <div class="bilan">
                                    <p>Votre dossier port le nom de:</p>
                                    <div class="Newsutilisateur">
                                    <?php echo'<font color="#042b4a"'."font size='4'>". $_SESSION['prenom']."</font>"; ?>
                                    <?php echo'<font color="#042b4a"'."font size='4'>". $_SESSION['nom']."</font>"; ?>
                                    </div>    
                                </div>
                                <div class="">
                                    <img width="20%" height="20%" src="images/mains.png">
                                </div>

                                <p>Type de dossier :<?php echo'<font color="#042b4a"'."font size='4'>". $_SESSION['typeDossier']."</font>"; ?></p>
                                <p>L'office choisie : <?php echo'<font color="#042b4a"'."font size='4'>". $_SESSION['notaireChoisi']."</font>"; ?></p>

                                <div align="center" class="bordure">
                                En cours de création...    
                                </div>
                                                              
                                <div class="">
                                    <div class="dossier_bilan2">
                                    <p>Créer le :<br/><?php echo'<font color="#042b4a"'."font size='5'>". $_SESSION['DateInscription']."</font>"; ?> </p>
                                    </div>
                                    <div class="nb">NB: Notarium à pour objetif principal de simplifier la gestion et l'accès rapide aux services de votre notaire, garant de l'efficacité et de la sécurité juridique des actes qu'il devra établir.
                                    </div>
                                </div>
                                <div class="retour"> <a href="../deconnection.php">Déconnection</a>                           
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
