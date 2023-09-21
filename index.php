<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <main>
        <h1>PHP com POO - Exemplo 2</h1>
        <hr>
        <h2>Assuntos abordados</h2>
        <ul>
           <li>Acesso direto às Propriedades</li>
           <li>Atribuição e Leitura de Dados</li>
           <li>Chamda de método</li>
        </ul>
        
    <?php 
        require_once "src/Cliente.php";

        $clienteA = new Cliente;
        $clienteB = new Cliente;

        // Acesso e Atribuição
        $clienteA->nome = "Tanaka";
        $clienteA->telefones = ["(11)12345-6789", "(11)98765-4321"];
        $clienteA->email = "tankeira3800@gmail.com";
        $clienteA->senha = password_hash("123abc", PASSWORD_DEFAULT);


        $clienteB->nome = "ValeskaGPT";
        $clienteB->telefones = ["(13)23456-7890", "(12)3456-7890"];
        $clienteB->email = "meufilhochatGpt@gmail.com";
        $clienteB->senha = password_hash("456def", PASSWORD_DEFAULT);
    ?>

    <hr>

    <h2>Dados dos Objetos: </h2>
    <h3> Nome: <?= $clienteA->nome?> </h3>
    <h3> Nome: <?= $clienteB->nome?> </h3>

    <hr>

    <pre><?=var_dump($clienteA, $clienteB)?></pre>
    </main>

    
</body>
</html>