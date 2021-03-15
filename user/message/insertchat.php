<?php
require_once '../../dbconnexion.php';

$message= $_POST['message'];
$pseudo= $_POST['pseudo'];

$pseudoStatment =$pdo->prepare("SELECT * FROM createuser WHERE pseudo=?");
$pseudoStatment->execute([$pseudo]);
$pseudoverif=$pseudoStatment ->fetch( PDO :: FETCH_ASSOC);

if ($pseudoverif){
    $insertmessage=$pdo->prepare('
    INSERT INTO chat 
    (user_id, message)
    VALUES 
    (?,?)

    ');
    $insertmessage ->execute([
        
        $pseudoverif['id'],
        $message
    ]);
}
else {
    $insertuser = $pdo->prepare('
    INSERT INTO createuser
    (pseudo,ip)
    VALUES
    (?,?)
    ');
    $insertuser ->execute([
        $pseudo,
        $_SERVER['REMOTE_ADDR']
    ]);

    $lastid =$pdo->lastInsertId();
    
    $insertmessage=$pdo->prepare('
    INSERT INTO chat 
    (user_id, message)
    VALUES 
    (?,?)

    ');
    $insertmessage ->execute([
        $lastid,
        $message
        
    ]);
}
echo "status : 200 , message : j'ai bien ajouter le message";