<?php
/* 
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

$matches = [
    [
        "home" => "Los Angeles Lakers",
        "guest" => "Miami Heat",
        "home_score" => 106,
        "guest_score" => 100,
    ],

    [
        "home" => "Chicago Bulls",
        "guest" => "Boston Celtics",
        "home_score" => 90,
        "guest_score" => 84,
    ],

    [
        "home" => "Golden State Warriors",
        "guest" => "New York Knicks",
        "home_score" => 92,
        "guest_score" => 86,
    ],

    [
        "home" => "Cleveland Cavaliers",
        "guest" => "Miami Heat",
        "home_score" => 115,
        "guest_score" => 110,
    ],
];

?>

<!doctype html>
<html lang="en">

<head>
    <title>Snack 1 Basket Calendar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <ul>
        <?php foreach ($matches as $match) : ?>
            <li> <?php echo $match['home'] . ' - ' . $match['guest'] ?> | <?php echo $match['home_score'] . ' - ' . $match['guest_score'] ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>