<!DOCTYPE>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link href="style.css" />
        <title>Exercice 3 PHP partie 3</title>
    </head>
    <body>
        <div>
        <?php
            $varNumb1 = 100;
            $varNumb2 = 13;
            $varMult = $varNumb1*$varNumb2;
            while($varNumb1 >= 10)
            {
            $varMult = $varNumb1*$varNumb2; ?>
        <p><?= $varMult ?></p>
            <?php
            $varNumb1--;
            }
        ?>
        </div>
    </body>
</html>