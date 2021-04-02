<?php
require_once 'auth.php';
forcer_utilisateur_connecte();
?>
<?php
include 'DistriBaguetteBDD.php';
?>

<html>

     <header>
         <title>Tableau</title>
        <link rel="stylesheet" href="tab.css">
         <link rel="stylesheet" href="bandeau.css">
    
    <div id="header">
    <a class="boutonaccueil" href="index.php">Accueil</a> 
	<a class="boutontableau" href="page2.php">Tableau</a>   
    <?php if (est_connecte()): ?>     
    <a class="boutondeconnexion" href="logout.php">Déconnexion</a>
    <?php endif ?>
    </div>
    
    </header>
   
    
    <body style =background-color:#B6B0B0;> 

      

    <div id ="scroll2" >
     <table id="tableau2" >

            <tr>
                <th>Heure</th>
                <th>Nom</th>
                <th>Localisation</th>
                <th>Température</th>
                <th>Humidité</th>
                <th>Stock</th>
                <th>Client</th>
                <th>Etat</th>
            </tr>
            
        <?php
        $bdd = new DistriBdd();
        $distri = $bdd->read_Ddata();
        
        foreach($distri as $row){
            
            echo"<tr><td>$row[0] </td><td></td><td>$row[1] - $row[2]  $row[3] </td></tr>";
            
        }?>
         
      
            



    
    </table>   
    </div>
    </body>
</html>


