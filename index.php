<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <main>
        <h1>PHP com POO</h1>
        <hr>
        <h2>Assuntos abordados</h2>
        <ul>
            <li>Crição de Classe</li>
            <li>Importação do Arquivo de Classe</li>
            <li>Criação de instâncias/Objetos</li>
        </ul>
        
    <?php 
        // importando a classe
        require_once "src/Cliente.php";

        // criar instâncias da Classe (objetos!)
        $clienteA = new Cliente;
        $clienteB = new Cliente;
    ?>

    <pre><?=var_dump($clienteA, $clienteB)?></pre>
    </main>

    
</body>
</html>