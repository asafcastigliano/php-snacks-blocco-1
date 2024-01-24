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

        if (isset($_GET["name"]) && isset($_GET["mail"]) && isset($_GET["age"])) {

            $name = $_GET["name"];
            $mail = $_GET["mail"];
            $age = $_GET["age"];

            $nameLengthValid = strlen($name) > 3;
            $mailFormatValid = filter_var($mail, FILTER_VALIDATE_EMAIL);
            $ageIsNumeric = is_numeric($age);

            echo ($nameLengthValid && $mailFormatValid && $ageIsNumeric) ? "Accesso riuscito" : "Accesso negato";
        }

    ?>

    <form method="get" action="./index.php">
        Name: <input type="text" name="name"><br>
        Mail: <input type="email" name="mail"><br>
        Age: <input type="number" name="age"><br>
        <input type="submit" value="Verifica Accesso">
    </form>

</body>

</html>