<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 10</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .cardsAlbum {
            display: flex;
            justify-content: space-evenly;

        }

        .artistAlbum {
            padding: 0;
            background-color: cadetblue;
            border-radius: 10px;
        }

        .artistAlbum img {
            width: 280px;
            border-radius: 10px 10px 0 0;
        }

        .artistAlbum p,
        .artistAlbum h3 {
            padding: 0.5rem;
            line-height: 1.5px;
        }

        .artistAlbum h3 {
            text-align: center;
        }

        .corAnanda {
            /* background: rgb(255,255,255);
            background: linear-gradient(295deg, rgba(255,255,255,1) 15%, rgba(225,233,148,1) 62%); */
            /* background: rgb(225,233,148);
            background: linear-gradient(295deg, rgba(225,233,148,1) 0%, rgba(255,255,255,1) 14%, rgba(225,233,148,1) 51%, rgba(247,247,239,1) 72%); */
            background: rgb(168, 164, 24);
            background: linear-gradient(299deg, rgba(168, 164, 24, 1) 0%, rgba(251, 250, 135, 1) 16%, rgba(168, 167, 40, 1) 78%, rgba(254, 255, 132, 1) 94%);

        }

        .corlou {
            background: rgb(89, 68, 68);
            background: linear-gradient(299deg, rgba(89, 68, 68, 1) 0%, rgba(138, 0, 24, 1) 42%, rgba(122, 4, 25, 1) 65%, rgba(89, 68, 68, 1) 100%);
            color: #fff;
        }

        .corSZA {
            color: #fff;
            background: rgb(163, 163, 163);
            background: linear-gradient(299deg, rgba(163, 163, 163, 1) 0%, rgba(0, 77, 138, 1) 16%, rgba(135, 135, 135, 1) 78%, rgba(4, 62, 122, 1) 94%);
        }
    </style>

</head>

<body>
    <main>

        <body>
            <h1>PHP com POO - Exemplo 10</h1>
            <hr>
            <h2>Assuntos abordados:</h2>
            <ul>
                <li>Composer: gerenciador de dependência PHP</li>
                <li>Configurar o projeto usando <code>composer.json</code></li>
                <li>Autoload de classes evitando muitos requires e/ou require manuais</li>
            </ul>

            <?php           

            use Fornecedor\Pagamento;
            use Prestador\Pagamento as PrestadorPagamento;
            use ValGPT\Mei as Mei;
            use ValGPT\PessoaFisica as PF;
            use ValGPT\PessoaJuridica as PJ;

            require_once "src/fornecedores/Pagamento.php";
            require_once "src/prestadores/Pagamento.php";
            require_once "src/PessoaFisica.php";
            require_once "src/PessoaJuridica.php";
            require_once "src/Mei.php";

            $pagamentoFornecedor = new Pagamento;

            $pagamentoPrestador = new PrestadorPagamento;

            ?>

            <pre><?= var_dump($pagamentoFornecedor) ?></pre>
            <pre><?= var_dump($pagamentoPrestador) ?></pre>

            <hr>


            <?php


            $clienteMei = new Mei;

            $clienteMei->setAnoFundacao(2023);
            $clienteMei->setNome("Ananda");
            $clienteMei->setNomeFantasia("A.N.A.N.D.A");
            $clienteMei->setAreaDeAtuacao("MPB/Rock Indie");

            $clientePF = new PF;

            $clientePF->setNome("SZA");
            $clientePF->setIdade(25);
            $clientePF->setEmail("kill_bill@killmyex.com");

            $clientePJ = new PJ;

            $clientePJ->setNome("Lou Garcia");
            $clientePJ->setNomeFantasia("Karuma");
            $clientePJ->setAnoFundacao(2023);


            ?>

            <h2>Artistas Da Empresa</h2>

            <section class="cardsAlbum">

                <div class="artistAlbum corAnanda">
                    <img src="https://festivalteen.com.br/wp-content/uploads/2022/04/ST28452-scaled-e1650641104718.jpg" alt="">
                    <h3><?= $clienteMei->getNome() ?></h3>
                    <p><b>Estilo: </b><?= $clienteMei->getAreaDeAtuacao() ?></p>
                    <p><b>Album: </b> <?= $clienteMei->getNomeFantasia() ?></p>
                    <p><b>Ano de Lançamento: </b> <?= $clienteMei->getAnoFundacao() ?></p>
                </div>

                <div class="artistAlbum corlou">
                    <img src="https://cdn.jornaldebrasilia.com.br/wp-content/uploads/2023/07/15083009/WhatsApp-Image-2023-07-14-at-16.13.12.jpeg" alt="">
                    <h3><?= $clientePJ->getNome() ?></h3>
                    <p><b>Album: </b> <?= $clientePJ->getNomeFantasia() ?></p>
                    <p><b>Ano de Lançamento: </b> <?= $clientePJ->getAnoFundacao() ?></p>
                </div>

                <div class="artistAlbum corSZA">
                    <img src="https://pbs.twimg.com/media/FkrfsVyXkAMySCM.jpg:large" alt="">
                    <h3><?= $clientePF->getNome() ?></h3>
                    <p><b>Contato: </b> <?= $clientePF->getEmail() ?></p>
                    <p><b>Idade: </b> <?= $clientePF->getIdade() ?></p>
                </div>
            </section>



    </main>


</body>

</html>