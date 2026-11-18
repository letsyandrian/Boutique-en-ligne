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
        <title>Boutique en ligne</title>
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
        
        <div class="container-fluid"><br><br><br><br>
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
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Commander</button>
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
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Commander</button>
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
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Commander</button>
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
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Commander</button>
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
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Commander</button>
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
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Commander</button>
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
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Commander</button>
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
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Commander</button>
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
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Commander</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>
						
                    </div>
				</div>
                
        
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
