<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 3 Exercice 4</title>
</head>
<body>
    <?php
        $a = 1;
        while ($a < 10) {
           echo $a;
           echo '<br>';
           $a = $a + $a/2;
        }
    ?>
</body>
</html>