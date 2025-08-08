<?php
function calcularJurosSimples($capital, $taxa, $tempo) {
    return $capital * $taxa * $tempo;
}

function calculaJurosCompostos($capital, $taxa, $tempo) {
    $montante = $capital * (1 + $taxa)**$tempo;
    return $montante - $capital;
}
?>