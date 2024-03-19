<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
    <h1>Resultado do IMC</h1>
    <?php 
    $altura = $_REQUEST['altura'];
    $peso = $_REQUEST['peso'];

    $imc = $peso / ($altura * $altura);

    echo "Seu IMC é: " . number_format($imc, 2);

    if ($imc < 18.5) {
        echo "<br>Você está abaixo do peso.";
    } elseif ($imc >= 18.5 && $imc < 25) {
        echo "<br>Seu peso está normal.";
    } elseif ($imc >= 25 && $imc < 30) {
        echo "<br>Você está com sobrepeso.";
    } else {
        echo "<br>Você está obeso.";
    }
    ?>
</body>
</html>