<?php
try {
    $pdo = new PDO('mysql:host=php.loc;dbname=minichat;charset=utf8','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Throwable $th) {
    throw $th;
}
$pseudo= $_POST['pseudo'];
$req = $pdo->prepare('SELECT id, password FROM createuser WHERE pseudo = ?');
$req-> execute([
    $pseudo
]);
    $resultat= $req-> fetch();


    $isPasswordCorrect = password_verify($_POST['password'],$resultat['password']);
if(!$resultat){
    echo 'Error pseudo / password !';
}
else
{
    if($isPasswordCorrect){
        session_start();
        $_SESSION['id']= $resultat['id'];
        $_SESSION['pseudo']= $pseudo;
        echo 'you are connected';
    }
    else{
        echo'error in your pseudo or password';
    }
}

echo "<script type='text/javascript'>document.location.replace('../../indexchat.php?message=you are connected');</script>";
?>