 
<?php
$erreur = null;
if(!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])){
    if ($_POST['pseudo'] === 'Test' && $_POST['motdepasse'] === 'test') {
       session_start(); 
        $_SESSION['connecte'] = 1;
        header('Location: /page2.php');
        exit();
    }else{
        $erreur = "Identifiants incorrects";
    }
}

require_once 'auth.php';
if (est_connecte()) {
    headder('Location: /page2.php');
    exit();
}

?>

<html>
    <link rel="stylesheet" href="alert.css">
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="pageconnexion.css" />
    </head>
    <body>
        
        <div id="container">            
            <form method="post">
                <h1>Connexion</h1>
                
                
                
                <label><b style=color:#FFFFFF>Nom d'utilisateur</b></label>
                <input type="text" name="pseudo" placeholder="Entrer le nom d'utilisateur">

                <label><b style=color:#FFFFFF>Mot de passe</b></label>
                <input type="password"  name="motdepasse" placeholder="Entrer le mot de passe">
                
                <?php if ($erreur): ?>
                <div class="alert"><?= $erreur ?></div>
                <?php endif ?>
                
                <input style=color:#272626 type="submit" id='submit' value='LOGIN' >
            </form>
        </div>
    </body>
</html>