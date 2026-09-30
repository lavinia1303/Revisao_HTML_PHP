<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Saída</title>
</head>
<body>
    <header>
        <h1>Salarios</h1>
    </header>
    <main>
        <p>Funcionario: <?= $nome ?></p>
        <p>Cargo: <?= $cargo ?></p>
        <p>Salario: <?= $salario ?></p>
        <br><br>
        <p>Aumento: <?= $aumento ?></p>
        <br><br>
        <p>Novo Salario: <?= $novoSalario ?></p>

    </main>
</body>
</html>
