<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 Partie 1</title>
</head>
<body>
    <h1># exercice 3</h1>
<p>Créez une variable age. Afficher vous êtes majeur ou vous êtes mineur en fonction de l'âge.
</p>
<?php
$age = 23;
echo ' Bonjour, tu as '.$age. ' donc ';

if($age > 0){
        if($age >= 18){
            echo 'tu es majeur';
        }else{
        echo 'tu es mineur';
        }
    }else{
        echo 'Veuillez entrer un age valide svp!';
    }
?>
</body>
</html>