<?php
	include 'includes/modal.php';
    include 'includes/common.php';
?>

<nav class="nav navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavBar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand"><i class="fa fa-apple"></i>  Boutique en ligne</a>
		</div>
		<div class="collapse navbar-collapse" id="mynavBar">
			<?php
				$url1=basename($_SERVER['PHP_SELF']);
				$url2="success.php";
				if(isset($_SESSION["email"])){ 
				if($url1==$url2){
			?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Paramètres</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>
				</ul>
			<?php
				}else{
			?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Panier</a></li>
					<li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Paramètres</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>
				</ul>
			<?php
				}}else{
			?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>
					<li><a href="#" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
					<li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> À propos</a></li>
					<li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
				</ul>
			<?php
				}
			?>
		</div>
	</div>
</nav>