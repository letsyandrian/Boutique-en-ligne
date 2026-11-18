<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<!--

-->
<html lang="fr">
    <head>
        <title>Boutique en ligne | Connexion</title>
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
		
		<div class="container">
            <div class="row row_style">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>CONNEXION</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Connectez-vous pour effectuer un achat.</p>
							<?php
                                if(isset($_GET["error"])){
                                  echo $_GET['error'];
                                }
                            ?>
                            <form action="login_submit.php" method="POST" >
                                <div class="form-group">
                                    <input type="email"  class="form-control" placeholder="Adresse e-mail" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password"  class="form-control" placeholder="Mot de passe" name="password">
                                </div>
								<button class="btn btn-primary">Connexion</button>
							</form>
                        </div>
                        <div class="panel-footer">Vous n’avez pas de compte ? <a href="signup.php">Inscrivez-vous</a></div>
                    </div>
                </div>
            </div>
        </div>
        
        

        
    </body>
</html>
