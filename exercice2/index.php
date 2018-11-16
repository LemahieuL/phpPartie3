<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 2 PHP partie 3</title>
    </head>
    <body>
        <?php
            $varNumb1 = 0;
            $varNumb2 = 12;
            $varMult = $varNumb1*$varNumb2;
            while($varNumb1 <= 20)
            {
            $varMult = $varNumb1*$varNumb2;
            echo ($varMult);
            $varNumb1++;
                ?><br />
                <?php
            }
        ?>
    </body>
</html>