<?php
/* 
Con un form passare come parametri GET name, mail e age e 
verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, 
altrimenti “Accesso negato”
*/

$name = $_GET['name'];
$age = $_GET['age'];
$mail = $_GET['mail'];

if (strlen($name) >= 3 && is_numeric($age) === true) {
    echo 'Accesso consentito';
} else {
    echo 'Accesso negato';
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Snack 2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <h1>Compila il form</h1>
        <form action="index.php" method="get">
            <div>
                <label for="name">Nome</label>
                <input name="name" id="name" type="text">
            </div>
            <div>
                <label for="mail">Mail</label>
                <input name="mail" id="mail" type="email">
            </div>
            <div>
                <label for="age">Età</label>
                <input name="age" id="age" type="number">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>