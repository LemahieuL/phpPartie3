<!DOCTYPE>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link href="style.css" />
        <title>Exercice 7 PHP partie 3</title>
    </head>
    <body>
        <?php
        $varNumbinit = 1;
        while($varNumbinit <= 100)
        {    
            echo 'On tient le bon bout';
            ?>
        <br />
        <?php
        $varNumbinit += 15;
        }
        ?>
    </body>
</html>