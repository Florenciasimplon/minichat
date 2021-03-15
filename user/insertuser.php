<?php
require_once '../dbconnexion.php';
include '../RandomColor.php';
use \Colors\RandomColor;
$color = RandomColor :: one(array('format' =>'hex'));
$pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);

if (empty($_POST["pseudo"])) {
    die("paramètres manquants.");
    }


$insertStatement =$pdo->prepare("
    INSERT INTO createuser
    (pseudo,password,ip,color)
    VALUES
    (?,?,?,?)
");
$insertStatement->execute([
    $_POST["pseudo"],
    $pass_hache,
    $_SERVER["REMOTE_ADDR"],
    $color
]);

header('location: ../indexchat.php?message=Your are connected');
?>
