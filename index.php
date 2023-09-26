<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 05</title>

    <style>

        *{
            box-sizing: border-box;
        }

        .caixa{
            display: flex;
        }
        .cartao{
            margin: 30px;
            background-color: brown;
            color: aliceblue;
            padding: 10px;
            width: 400px;
            font-family:Arial, Helvetica, sans-serif;
            border-radius: 20px;
        }

        .cartao img{
            width: 140px;
            height: 140px;
            clip-path: circle(50% at 50% 49%);
        }
        

        .cartao h2{
            text-align: center;
        }
        .cartao ul{
            text-align: center;
            background-color: #ffc4b9;
            padding: 20px;
            color: #6d2721;
            border-radius: 20px;
            list-style: none;
        }
    </style>
</head>
<body>
    <main>
        <h1>PHP com POO - Exemplo 4</h1>
        <hr>
        <h2>Assuntos abordados:</h2>
        <ul>
            <li>Herança (Super classe e Sub Classe)</li>
           
        </ul>

        <hr>

        <h2>clientePF</h2>

        <?php 
          
          require_once "src/PessoaFisica.php";

          $clientePF = new PessoaFisica;

          // colocar um nome 

          $clientePF->setNome("Maria do Bairro");
          $clientePF->setEmail("mariadb@sql.com");
          $clientePF->setIdade(50);
          $clientePF->setCpf("123.456.789-10");
        

          require_once "src/PessoaJuridica.php";

          $clientePJ = new PessoaJuridica;

          $clientePJ->setAnoFundacao(2020);
          $clientePJ->setCnpj("66.666.6666/666.66");
          $clientePJ->setEmail("odeiomeusfas@souamaioral.com");
          $clientePJ->setNome("Doja Cat");
          $clientePJ->setNomeFantasia("Scarlet");
        ?>

        <pre><?=var_dump($clientePF)?></pre>

        <hr>

        <article class="caixa">
            <section class="cartao">
                <h2>clientePJ </h2>
                <h2><img src="https://cdn2.tribunaonline.com.br/img/inline/150000/1200x720/Playlist-da-Semana-Doja-Cat-lanca-seu-novo-album-S0015065200202309221136-2.webp?fallback=https%3A%2F%2Fcdn2.tribunaonline.com.br%2Fimg%2Finline%2F150000%2FPlaylist-da-Semana-Doja-Cat-lanca-seu-novo-album-S0015065200202309221136.jpg%3Fxid%3D629160%26resize%3D1000%252C500%26t%3D1695393375&xid=629160" alt="scarlet persna de doja cat"></h2>
                <ul>
                    <li><b>Nome: </b><?=$clientePJ->getNome()?></li>
                    <li><b>Email: </b><?=$clientePJ->getEmail()?></li>
                    <li><b>Ano: </b><?=$clientePJ->getAnoFundacao()?></li>
                    <li><b>Cnpj: </b><?=$clientePJ->getCnpj()?></li>
                    <li><b>Nome Fantasia: </b><?=$clientePJ->getNomeFantasia()?></li>
                </ul>
            </section>
            <section class="cartao">
                <h2>clientePJ </h2>
                <h2><img src="https://assets.papelpop.com/wp-content/uploads/2021/08/doja-cat.png" alt="scarlet persna de doja cat"></h2>
                <ul>
                    <li><b>Nome: </b><?=$clientePJ->getNome()?></li>
                    <li><b>Email: </b><?=$clientePJ->getEmail()?></li>
                    <li><b>Ano: </b><?=$clientePJ->getAnoFundacao()?></li>
                    <li><b>Cnpj: </b><?=$clientePJ->getCnpj()?></li>
                    <li><b>Nome Fantasia: </b><?=$clientePJ->getNomeFantasia()?></li>
                </ul>
            </section>
        </article>

    </main>
</body>
</html>