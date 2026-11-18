<?php
  require("includes/common.php");
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Boutique en ligne | À propos</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/css.css" type="text/css">
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <br><br>
        <div class="container">
            <div class="col-sm-4">
                <div class="panel">
                    <div class="panel-body">
                        <h3>QUI SOMMES-NOUS ?</h3>
                        <img src="img/about-img.jpg" alt="À propos d’Boutique en ligne"><br><br>
                        <p class="text-justify">Boutique en ligne est une boutique en ligne consacrée aux téléphones et aux accessoires électroniques. Notre objectif est de vous aider à choisir un appareil adapté à vos besoins grâce à des informations claires, des prix affichés en ariary et un parcours de commande simple. Basés à Madagascar, nous souhaitons rendre l’achat en ligne plus pratique et accompagner nos clients avant et après leur commande.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="panel">
                    <div class="panel-body">
                        <h3>NOTRE HISTOIRE</h3><br>
                        <h4 style="color:blue">Les débuts</h4>
                        <p class="text-justify">Boutique en ligne est né de l’envie de proposer une boutique claire et facile à utiliser, où chacun peut découvrir des téléphones et comparer les modèles disponibles.</p>

                        <h4 style="color:blue">Notre évolution</h4>
                        <p class="text-justify">Au fil du développement du projet, nous avons amélioré la présentation des produits, le panier et les étapes de commande afin de rendre l’expérience plus simple.</p>

                        <h4 style="color:blue">Aujourd’hui</h4>
                        <p class="text-justify">Nous poursuivons cette démarche avec un catalogue accessible en ligne et des prix indiqués en ariary pour notre clientèle à Madagascar.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="panel">
                    <div class="panel-body">
                        <h3>OPPORTUNITÉS</h3><br>
                        <b>Postes disponibles</b>
                        <ol class="list-group"><br>
                            <li class="text-justify">Développeur ou développeuse web junior/senior — poste à temps plein ou stage de six mois.</li><br>
                            <li class="text-justify">Apprentissage en entreprise — stage de six mois.</li><br>
                            <li class="text-justify">Responsable des opérations backend — poste à temps plein ou stage de six mois.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>
