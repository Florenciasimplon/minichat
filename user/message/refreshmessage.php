<?php
require '../../dbconnexion.php';
$sql2 = ('SELECT * FROM createuser JOIN chat WHERE createuser.id = chat.user_id ORDER BY dateHour ASC ');

foreach ($pdo->query($sql2)as $chat){?>
    <h6><img src="assets/téléchargement.png"/> <?php echo "<span style='color:".$chat['color']."'>". $chat['pseudo']."</span> ".":".'<br>';?></h6>
 <p class="mess">   <?php   echo htmlspecialchars($chat['message']);
       echo '<br>';?></p>
       <img src="assets/img/property-with-timer.png"/> <?php echo htmlspecialchars($chat['dateHour']);
       echo '<br>';

       ;} ?>    