<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc Salary Min</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 

    $salary = $_REQUEST['salary'] ?? 0;
    $countSalary = number_format( (int) $salary / 1380, 0) ?? 0;

    $difSalary = $countSalary * 1380;

    $finalRes = (int) $salary - (int) $difSalary ;
?>

<section>
    <h1>Informe seu salario</h1>
<form action="./index.php" method="post">

    <input type="number" name="salary" id="" placeholder="Digite seu salario">
    <p>Considerando o salario minimo de: R$1.380</p>
    <input type="submit" value="Calcular">
</form>

<div id="divResult">
<h1> Resultado final</h1>

<p>Quem recebe um salario de R$<?= number_format( (int) $salary,2,',','.') ?? 0?> ganha. <?= $countSalary ?? 0?> salarios minimos +
R$<?= number_format($finalRes,2,',','.') ?? 0?>.
</p>
</div>

</section>
</body>
</html>