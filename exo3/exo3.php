<DOCTYPE html>
<html lang="en">
    <head>
            <title >Exercice3</title>
             <meta charset="utf-8">
             <link rel="stylesheet" type="" href="/css/style.css" />
             <link rel="stylesheet" type="" href="application1/css/style1.css" />
    </head>
    <body class="body">
                <h4>Exercice 3</h4>
                <form action="" method="POST">
                <input placeholder="saisir un mot "class="input" type="text" id="M" name="M"><br><br>
                <input type="submit" value="afficher" name="afficher">
           
                </form>
                   

<?php
    if(isset($_POST['afficher'])){
        $M=$_POST['M'];
        if($_POST['M']==''){
            echo"Veuillez saisir les mots de 20 caractères maximum";
        }
        else {
            $N = array();
            $R= preg_split("/[\s,]+/", $_POST['M']);
        }
        foreach($R as $phrase){
            if(strlen($phrase) <=20){
                $N[]=$phrase;
                    }
                }
                $nombre=0;
                foreach($N as $mot_m){
                    if(preg_match('/m/i', $mot_m)){
                        $nombre=$nombre+1;
            }
        }
        echo"ici on a $nombre mot(s) qui a/ont m.";
    } 
?>
    </body>
</html>