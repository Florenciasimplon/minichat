<?php
require_once '../../dbconnexion.php';
include '../../partials/header.php';
?>





  <div class="connexion">
      <form action="droit.php" method="POST">
        <h3>Connexion<img src="https://img.icons8.com/nolan/64/speech-bubble-with-dots.png"/></h3>
        <i class="material-icons prefix">account_circle</i>
        <label for="icon_prefix">Pseudo</label>
        <input id="icon_prefix" type="text" class="validate" name="pseudo">
          
        <i class="material-icons prefix"><img src="https://img.icons8.com/ios-glyphs/30/000000/password.png"/></i>
        <label for="icon_prefix">Password</label>
        <input id="icon_prefix" type="password" class="validate" name="password">

        <button class="btn waves-effect #00acc1 cyan darken-1" type="submit" name="action">Connexion
          <i class="material-icons right"><img src="https://img.icons8.com/ios-glyphs/30/000000/cat-back-view.png"/></i>
        </button>
      </form>
  </div>
  <p class="box-register">Vous êtes nouveau ici? 
    <a href="../createuser.php">S'inscrire</a>
  </p>
  <?php if (! empty($message)) { ?>
      <p class="errorMessage"><?php echo $message; ?></p>
  <?php } ?>
  </div>
  </form>
  <?php include '../../partials/footer.php'; ?>


 
