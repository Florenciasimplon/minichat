<?php
include 'partials/header.php';


require_once 'dbconnexion.php';
$chatStatement = $pdo->prepare("SELECT * FROM createuser");
$sql1= 'SELECT * FROM createuser';
?>                
<h4> Start chatting <img src="https://img.icons8.com/nolan/50/speech-bubble-with-dots.png"/></h4>
<div class="row content">
    <div class="col s8 message">
        <div class="msg">
        </div>   
    </div>
        
    <div class="col s3 message">
        <thead>
            <tr>
                <td></td>
          
            </tr>
         </thead>
         <tbody>
         <?php 
        foreach ($pdo->query($sql1)as $pseudo){
            echo"<tr>";
            echo "<br>";?>
<img src="https://img.icons8.com/nolan/30/user-menu-male.png"/>
<?php  echo '<td>'.$pseudo['pseudo'].'</td>';
            echo "</tr>";
   }
   ?>
   
</div>
</div>
   <div class="app">
        <p>Pseudo</p>   
            <input class="pseudo" name="pseudo" type="text"  size="63" id="pseudo" /> 
                <p>write your message here</p>
            <input class="write" name="message" type="text"  size="63" id="message"/>
            <button class="btn waves-effect #f3e5f5 purple lighten-5" onclick= sendMessage() name="action">Send
            <i class="material-icons right">send</i>
             </button>
        
   </div>


<?php include 'partials/footer.php'?>