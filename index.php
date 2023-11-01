<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc Salary Min</title>
</head>
<body>

<?php 

    $salary = $_REQUEST['salary'];
    $countSalary = number_format($salary / 1380, 0);

    $difSalary = $salary - ($countSalary * 1380);
?>

<section>
    <h1>Informe seu salario</h1>
<form action="./index.php" method="post">

    <label for="salary">Salario (R$)</label>
    <input type="number" name="salary" id="" placeholder="Digite seu salario">
    <p>Considerando o salario minimo de: R$1.380</p>
    <input type="submit" value="Calcular">
</form>

<div id="divResult">
<h1> Resultado final</h1>

<p>Quem recebe um salario de R$<?= number_format($salary,2,',','.')?> ganha. <?= $countSalary?> salarios minimos +
R$<?= number_format($difSalary,2,',','.')?>.
</p>
</div>

</section>
</body>
</html>