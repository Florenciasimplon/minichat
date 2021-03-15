<?php
require_once './dbconnexion.php';

$userStatement = $pdo->prepare("SELECT * FROM createuser");
?>
<?php if (!empty($_GET["message"])) : ?>
        <div style="padding: 10px;background:gray;color:#fff;">
            <?=$_GET["message"]?>
        </div>
<?php endif;?>
    <div class="inscription">
      <form action="./user/insertuser.php" method="POST">
        <h3>register to chatlive <img src="https://img.icons8.com/nolan/64/speech-bubble-with-dots.png"/></h3>
        <i class="material-icons prefix">account_circle</i>
        <label for="icon_prefix">Pseudo</label>
        <input id="icon_prefix" type="text" class="validate" name="pseudo">
          
        <i class="material-icons prefix"><img src="https://img.icons8.com/ios-glyphs/30/000000/password.png"/></i>
        <label for="icon_prefix">Password</label>
        <input id="icon_prefix" type="password" class="validate" name="password">

        <button class="btn waves-effect #00acc1 cyan darken-1" type="submit" name="action">Create Compte
          <i class="material-icons right"><img src="https://img.icons8.com/ios-glyphs/30/000000/cat-back-view.png"/></i>
        </button>
      </form>
  </div>
