<?php

    $partite = [
        [
            "squadra_casa" => "Olimpia Milano",
            "squadra_ospite" => "Cantù",
            "punti_casa" => 55,
            "punti_ospite" => 60
        ],
        [
            "squadra_casa" => "Parma",
            "squadra_ospite" => "Torino",
            "punti_casa" => 70,
            "punti_ospite" => 65
        ],
        [
            "squadra_casa" => "Lucera",
            "squadra_ospite" => "Bologna",
            "punti_casa" => 62,
            "punti_ospite" => 58
        ],
    ];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <?php

        foreach ($partite as $partita) {
            echo $partita["squadra_casa"] . " - " . $partita["squadra_ospite"] . " | " . $partita["punti_casa"] . "-" . $partita["punti_ospite"] . "<br>";
        }

    ?>

</body>

</html>