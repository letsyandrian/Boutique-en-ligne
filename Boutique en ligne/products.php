<?php
include "includes/common.php";

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<!--

-->
<html lang="fr">
    <head>
        <title>Boutique en ligne | Produits</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/css.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        
		<div class="container-fluid"><br><br><br>
			<div class="row">
                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>iPhone 12</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/8.jpg">
                                        <div class="caption">
											<p>Apple iPhone 12 et 12 mini, 64 Go. <?php echo format_ariary_price(70000); ?></p>
											<?php 
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart !=0)
											echo '<a href="#" class="btn btn-block btn-success" disabled>Déjà dans le panier</a>';
											} else {
											?>
											<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Ajouter au panier</a>
											<?php
											}
											?>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>iPhone 12 Pro</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/11.jpg">
                                        <div class="caption">
											<p>Apple iPhone 12 Pro et Pro Max, 128 Go. <?php echo format_ariary_price(158000); ?></p>
											<?php 
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart !=0)
											echo '<a href="#" class="btn btn-block btn-success" disabled>Déjà dans le panier</a>';
											} else {
											?>
											<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Ajouter au panier</a>
											<?php
											}
											?>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                         <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>iPhone SE (2020)</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/12.jpg">
                                        <div class="caption">
											<p>Apple iPhone SE (2020), 64 Go. <?php echo format_ariary_price(36000); ?></p>
											<?php 
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart !=0)
											echo '<a href="#" class="btn btn-block btn-success" disabled>Déjà dans le panier</a>';
											} else {
											?>
											<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Ajouter au panier</a>
											<?php
											}
											?>
                                        </div>
                                </div>
                        
							</div>	
                        </div>
                    </div>
				</div>
				
				<div class="container-fluid">
			<div class="row">
                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>iPhone X</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/1.jpg">
                                        <div class="caption">
											<p>Apple iPhone X, 64 Go. <?php echo format_ariary_price(70000); ?></p>
											<?php 
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart !=0)
											echo '<a href="#" class="btn btn-block btn-success" disabled>Déjà dans le panier</a>';
											} else {
											?>
											<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Ajouter au panier</a>
											<?php
											}
											?>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>iPhone XS</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/2.jpg">
                                        <div class="caption">
											<p>Apple iPhone XS, 64 Go. <?php echo format_ariary_price(88000); ?></p>
											<?php 
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart !=0)
											echo '<a href="#" class="btn btn-block btn-success" disabled>Déjà dans le panier</a>';
											} else {
											?>
											<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Ajouter au panier</a>
											<?php
											}
											?>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                         <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>iPhone XR</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/3.jpg">
                                        <div class="caption">
											<p>Apple iPhone XR, 64 Go. <?php echo format_ariary_price(45000); ?></p>
											<?php 
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart !=0)
											echo '<a href="#" class="btn btn-block btn-success" disabled>Déjà dans le panier</a>';
											} else {
											?>
											<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Ajouter au panier</a>
											<?php
											}
											?>
                                        </div>
                                </div>
                        
							</div>	
                        </div>
                    </div>
				</div>
					
				<div class="container-fluid">
					<div class="row">
                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>iPhone 11</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/4.jpg">
                                        <div class="caption">
											<p>Apple iPhone 11, 64 Go. <?php echo format_ariary_price(51000); ?></p>
											<?php 
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart !=0)
											echo '<a href="#" class="btn btn-block btn-success" disabled>Déjà dans le panier</a>';
											} else {
											?>
											<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Ajouter au panier</a>
											<?php
											}
											?>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>iPhone 11 Pro</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/5.jpg">
                                        <div class="caption">
											<p>Apple iPhone 11 Pro, 64 Go. <?php echo format_ariary_price(80000); ?></p>
											<?php 
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart !=0)
											echo '<a href="#" class="btn btn-block btn-success" disabled>Déjà dans le panier</a>';
											} else {
											?>
											<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Ajouter au panier</a>
											<?php
											}
											?>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>iPhone 11 Pro Max</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/6.jpg">
                                        <div class="caption">
											<p>Apple iPhone 11 Pro Max, 64 Go. <?php echo format_ariary_price(110000); ?></p>
											<?php 
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart !=0)
											echo '<a href="#" class="btn btn-block btn-success" disabled>Déjà dans le panier</a>';
											} else {
											?>
											<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Ajouter au panier</a>
											<?php
											}
											?>
                                        </div>
                                </div>
                        
							</div>	
                        </div>
						
                    </div>
				</div>
        
        
    </body>
</html>
