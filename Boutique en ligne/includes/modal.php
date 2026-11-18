
 <!-- Modal -->
  <div class="modal fade" id="loginmodal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Connexion</h4>
        </div>
        <div class="modal-body">
		<p>Vous n’avez pas de compte ? <a href="./signup.php">Inscrivez-vous</a></p>
          <form role="form" action="login_submit.php" method="POST">
            <div class="form-group">
              <input type="email" class="form-control"  name="email" placeholder="Adresse e-mail" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Mot de passe" name="password" required>
            </div>
              <button type="submit" class="btn btn-primary">Connexion</button>
          </form>
		<br><p class="pull-left"><a href="#">Mot de passe oublié ?</a></p><br>
        </div>
      </div>
    </div>
  </div> 
