<?php
  require("includes/common.php");
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Boutique en ligne | Contact</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/css.css" type="text/css">
    </head>
    <body>
        <?php include 'includes/header.php'; ?>

        <div class="container"><br><br><br><br>
            <div class="row">
                <div class="col-sm-10">
                    <h1>ASSISTANCE EN LIGNE</h1>
                    <h3>Une assistance disponible 7 jours sur 7</h3>
                    <div>
                        <p class="text-justify">Vous avez une question sur un produit, une commande ou la livraison ? Écrivez-nous à l’aide du formulaire ci-dessous. Notre équipe vous répondra dès que possible.</p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <img align="right" src="img/contact.png" alt="Contactez Boutique en ligne">
                </div>
            </div><br>

            <div class="row">
                <div class="col-sm-8">
                    <h2>ÉCRIVEZ-NOUS</h2>
                    <form action="contact_script.php" method="POST">
                        <?php
                            if (isset($_GET["m"])) {
                                echo $_GET['m'];
                            }
                        ?>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Votre nom">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Votre adresse e-mail">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" rows="5" placeholder="Votre message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Envoyer">
                        </div>
                    </form>
                </div>

                <div class="col-sm-4">
                    <h2>Coordonnées</h2>
                    <p>Adresse : Antananarivo, Madagascar</p>
                    <p>Téléphone : +261 (numéro à compléter)</p>
                    <p>Courriel : contact@estore.mg (à configurer)</p>
                    <p>Réseaux sociaux : Facebook et Instagram</p>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>
