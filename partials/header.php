<?php
session_start();
setcookie('pseudo',time()+ 365*24*3600,null,null,false,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="/minichat/style.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper #ede7f6 deep-purple lighten-5">
            <a href="#!" class="brand-logo"><i class="material-icons"><img src="https://img.icons8.com/nolan/45/communication.png"/>CHATLIVE</i></a>
            <?php if (isset($_GET["message"])) : ?>
            <li class='connected'style="background:#ede7f6;color:black">
            <img src="https://img.icons8.com/nolan/20/doughnut-chart.png"/>   <?=$_GET["message"]?>
            <ul class="right hide-on-med-and-down #e1bee7 purple lighten-4">
            <li><a href="index.php"><i class="material-icons">account_circle</i></a></li>
            </ul>
            </div></li>
            <?php endif; ?>
        
        </div>
    </nav>
    <div class="video">
      <video src="https://media.giphy.com/media/26FPJGjhefSJuaRhu/giphy.gif"></video>
    </div>
