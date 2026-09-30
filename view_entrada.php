<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1 - Processamento de dados</title>
</head>
<body>
    <header>
        <h1>Formulario de Cadastro</h1>
    </header>
    <main>
        <form action="logicaController.php" method= "post">
            <label for="nome">Nome do funcionario</label>
            <br>
            <input type="text" id="nome" name="nome" placeholder= 'Digite seu nome...'>
            <br><br>
            <label for="salario"> Salario Atual </label>
            <br>
            <input type="number" id='salario' name='salario'>
            <br><br>
            
            
            <select name="cargo" id="cargo">
                <option value="" selected disabled> Selecionar...</option>
                
                
                <option value="estagiario">Estagiario</option>
                <option value="assistente">Assistente</option>
                <option value="analista">Analista</option>
                
            </select>
            <button type= "submit">Enviar</button>
           
        </form>
    </main>
</body>
</html>
