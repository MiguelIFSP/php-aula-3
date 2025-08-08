<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Multiplicação</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
$pg_atual = 'resultado';
include 'navbar.php';

function multiplicarVetor($vetor) {
    $resultado = 1;
    foreach ($vetor as $numero) {
        $resultado *= $numero;
    }
    return $resultado;
}

$n1 = isset($_GET['num1']) ? $_GET['num1'] : 0;
$n2 = isset($_GET['num2']) ? $_GET['num2'] : 0;
$n3 = isset($_GET['num3']) ? $_GET['num3'] : 0;

$numeros = [$n1, $n2, $n3];
$resultado = multiplicarVetor($numeros);
?>
    <div class='container-fluid'>
        <h1>Resultado da Multiplicação:</h1>
        <p><?= $n1 . " * " . $n2 . " * " . $n3 . " = " . $resultado ?></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>