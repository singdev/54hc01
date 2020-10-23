<?php
session_start();
include '../includes/database.php';
global $dbco;
 
    if(isset($_SESSION['email'])){

              
        $requser = $dbco->prepare("SELECT * FROM client WHERE email = ?");
        $requser->execute(array($_SESSION['email']));
        $userinfo = $requser->fetch();
    } 
 
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
            <li class="nav-item active">
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
    <!-- End Banner -->

    <!-- contact_form -->
    <div class="section dossier_succession_bila_form">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="full_bilan">
                        <div class="">
                            <p>MODIFIER LA DEMANDE</p>
                            <div class="">
                                <?php
                                if (isset($_SESSION['email']) == $_SESSION['email']) {
                                ?>
                                <a href =\"deconnexion.php\">Déconnection</a>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="">
                                <img width="20%" height="20%" src="../images/mains.png">
                            </div>
                            <form method="POST" action="">
                            <div align="center">
                            <input type="text" name="newsnom" class="modif" placeholder="nom" value="<?php echo $userinfo['Nom'] ?>">
                            <input type="text" name="newsprenom" class="modif" placeholder="prenom" value="<?php echo $userinfo['prenom'] ?>">
                            <input type="text" name="newsadresse" class="modif" placeholder="Adresse" value="<?php echo $userinfo['Adresse'] ?>">
                            <input type="text" name="newsville" class="modif" placeholder="Ville" value="<?php echo $userinfo['Ville'] ?>">
                            <input type="text" name="newsphone" class="modif" placeholder="Phone" value="<?php echo $userinfo['Phone'] ?>"> 
                            <input type="text" name="newsemail" class="modif" placeholder="Email" value="<?php echo $userinfo['Email'] ?>">

                            <select name="newstypeDossier" class="modif" placeholder="TypeDossier">
                                <option value="<?php echo $userinfo['TypeDossier'] ?>"><?php echo $userinfo['TypeDossier'] ?></option>
                                        <option value="Immobilier">Immobilier</option>
                                        <option value="Succession">Succession</option>
                            </select>

                            <select name="newsnotaireChoisi" class="modif" placeholder="NotaireChoisi">
                                <option value="<?php echo $userinfo['NotaireChoisi'] ?>"><?php echo $userinfo['NotaireChoisi'] ?></option>
                                <option value="Maître Bluenn OKELI GOURIOU OGOULA">Maître Bluenn OKELI GOURIOU OGOULA</option>
                                <option value="Maître Marina OSSAPILA NGUEMA">Maître Marina OSSAPILA NGUEMA</option>
                                <option value="Maître Lydie RELONGOUE">Maître Lydie RELONGOUE</option>
                                <option value="Maître Célestin NDELIA">Maître Célestin NDELIA</option>
                                
                            </select>
                            </div>
                            <div><input type="submit" name="submit" value="Modifier" class="modif-val"></div>
                            
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

    <?php include '../includes_news_user/script.php'; ?>
	
</body>

</html>