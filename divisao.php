<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Divisão</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
$pg_atual = 'resultado';
include 'navbar.php';

function dividir(&$x, $y) {
    if ($y != 0) {
        $x = $x / $y;
    } else {
        $x = "Divisão por zero não é permitida.";
    }
}

$x = isset($_GET['num1']) ? $_GET['num1'] : 0;
$y = isset($_GET['num2']) ? $_GET['num2'] : 0;

$valorOriginalX = $x; // Guarda o valor original para exibição
$valorOriginalY = $y; // Guarda o valor original para exibição

dividir($x, $y); // $x é modificado por referência
?>
    <div class='container-fluid'>
        <h1>Resultado da Divisão:</h1>
        <p><?= $valorOriginalX . " / " . $valorOriginalY . " = " . $x ?></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>