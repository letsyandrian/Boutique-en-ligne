<footer>
    <div class="container">
        <div class="row">
          
			<?php
				if(isset($_SESSION["email"])){ 
			?>
				<div class="col-sm-2 col-sm-offset-3">
				  <h3>Informations</h3>
					<p><a href="about.php"><span style="color:white">À propos</span></a></p>
					<p><a href="contact.php"><span style="color:white">Contact</span></a></p>
				</div>
				<div class="col-sm-3 col-sm-offset-2">
				  <h3>Nous contacter</h3>
					<p>Antananarivo, Madagascar</p>
					<p>Indicatif téléphonique : +261</p>
				</div>
			<?php
				}else{
			?>
				<div class="col-sm-2">
				  <h3>Informations</h3>
					<p><a href="about.php"><span style="color:white">À propos</span></a></p>
					<p><a href="contact.php"><span style="color:white">Contact</span></a></p>
				</div>
				<div class="col-sm-2 col-sm-offset-3">
				  <h3>Mon compte</h3>
					<p><a href="#" data-toggle="modal" data-target="#loginmodal" ><span style="color:white">Connexion</span></a></p>
					<p><a href="signup.php"><span style="color:white">Inscription</span></a></p>
				</div>

				<div class="col-sm-3 col-sm-offset-2">
				  <h3>Nous contacter</h3>
					<p>Antananarivo, Madagascar</p>
					<p>Indicatif téléphonique : +261</p>
				</div>
			<?php
				}
			?>
        </div>
        
    </div>
</footer>
