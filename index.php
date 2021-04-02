<?php
require_once 'auth.php';
?>
<html>

    <header>
     <title>Map</title>
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
        
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d18589.51613337982!2d-1.1465786273585352!3d46.16372581684779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1614246289356!5m2!1sfr!2sfr" width="810" height="905" style="border:0;"></iframe>
        
          
       
        
        <div id ="scroll1" >
        <table  id = "tableau1" >

        
            <tr>
                <th>Nom</th>
                <th>Localisation</th>
                <th>Stock</th>
            </tr>
        

        
            <tr >
                <td><?php require('DistriBDD.php'); echo $nom; ?></td>
                <td><?php echo $localisation ?></td>
                <td><?php echo $nbrBaguette; ?></td>               
        
            </tr>
            <tr>
                <td>Contenu</td>
                <td>Contenu</td>
                <td>Contenu</td>
               
            </tr>
            <tr>
                <td>Contenu</td>
                <td>Contenu</td>
                <td>Contenu</td>
            </tr>
            <tr>
                <td>Contenu</td>
                <td>Contenu</td>
                <td>Contenu</td>
            </tr>
            <tr>
                <td>Contenu</td>
                <td>Contenu</td>
                <td>Contenu</td>
            </tr>
            <tr>
                <td>Contenu</td>
                <td>Contenu</td>
                <td>Contenu</td>
            </tr><tr>
                <td>Contenu</td>
                <td>Contenu</td>
                <td>Contenu</td>
            </tr><tr>
                <td>Contenu</td>
                <td>Contenu</td>
                <td>Contenu</td>
            </tr><tr>
                <td>Contenu</td>
                <td>Contenu</td>
                <td>Contenu</td>
            </tr><tr>
                <td>Contenu</td>
                <td>Contenu</td>
                <td>Contenu</td>
            </tr><tr>
                <td>Contenu</td>
                <td>Contenu</td>
                <td>Contenu</td>
            </tr>
            <tr>
                <td>Contenu</td>
                <td>Contenu</td>
                <td>Contenu</td>
            </tr><tr>
                <td>Contenu</td>
                <td>Contenu</td>
                <td>Contenu</td>
            </tr><tr>
                <td>Contenu</td>
                <td>Contenu</td>
                <td>Contenu</td>
            </tr><tr>
                <td>Contenu</td>
                <td>Contenu</td>
                <td>Contenu</td>
            </tr><tr>
                <td>Contenu</td>
                <td>Contenu</td>
                <td>Contenu</td>
            </tr><tr>
                <td>Contenu</td>
                <td>Contenu</td>
                <td>Contenu</td>
            </tr><tr>
                <td>Contenu</td>
                <td>Contenu</td>
                <td>Contenu</td>
            </tr><tr>
                <td>Contenu</td>
                <td>Contenu</td>
                <td>Contenu</td>
            </tr><tr>
                <td>Bien</td>
                <td>le</td>
                <td>bonjour</td>
            </tr>
    
    </table>
    </div>      
          
    </body>
</html>


