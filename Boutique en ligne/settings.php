<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<!--

-->
<html lang="fr">
    <head>
        <title>Boutique en ligne | Paramètres</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/css.css" type="text/css">
    </head>
    <body>
        <?php 
		include 'includes/header.php'; 
		?>
        
        <div class="container"><br><br><br><br>
            <div class="row row_style4">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1> Modifier mon mot de passe </h1>
					<div><b class="red">
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                        }
                        ?>
                      </b></div>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password"  class="form-control" placeholder="Ancien mot de passe" name="oldpassword">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" placeholder="Nouveau mot de passe" name="newpassword">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" placeholder="Confirmer le nouveau mot de passe" name="renewpassword">
                        </div>
                        <button class="btn btn-primary">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
        
        
        
    </body>
</html>
