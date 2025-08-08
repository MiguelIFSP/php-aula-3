<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Soma</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
$pg_atual = 'resultado';
include 'navbar.php';

$n1 = isset($_GET['num1']) ? $_GET['num1'] : 0;
$n2 = isset($_GET['num2']) ? $_GET['num2'] : 0;

function soma($primeiro, $segundo) {
    return $primeiro + $segundo;
}

$resultado = soma($n1, $n2);
?>
    <div class='container-fluid'>
        <h1>Resultado da Soma:</h1>
        <p><?= $n1 . " + " . $n2 . " = " . $resultado ?></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>