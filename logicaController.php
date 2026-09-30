<?php


//var_dump($_POST);


$nome= $_POST['nome'];
$salario= $_POST['salario'];
$cargo = $_POST["cargo"];

if ($cargo == "Estagiário") {
    $percentual = 10;
} elseif ($cargo == "Assistente") {
    $percentual = 8;
} else {
    $percentual = 5;
}

$aumento = $salario * $percentual / 100;

$novoSalario = $salario + $aumento;

include "view_saida.php";

?>
