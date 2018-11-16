<!DOCTYPE>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link href="style.css" />
        <title>Exercice 4 PHP partie 3</title>
    </head>
    <body>
        <?php
            $varNumb1 = 1;
            while ($varNumb1 <=10)
            {
                echo $varNumb1;
        ?><br />
        <?php

                $varNumb1 += $varNumb1/2;
            }
        ?>
    </body>
</html>