<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 7 partie 3</title>
</head>

<body>
    <h1>Exercice 7 Partie 3</h1>

    <ul>
        <?php
        for ($number = 1; $number <= 100; $number += 15)
        {
            echo '<li>' . 'On tient le bon bout' . '</li>';
        }
        ?></ul>
</body>

</html>