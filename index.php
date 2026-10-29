<?php
require_once "src/Notificador.php";
require_once "src/NotificadorEmail.php";

// Criando os objetos
$notificadorPorEmail = new NotificadorEmail();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos da loja virtual</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <header>
            <p class="destaque">Loja virtual</p>
            <h1>Notificações da loja virtual</h1>
            <p>Cada pedido possui um status: Pendente, Aguardando pagamento, Em preparação,
            Pago ou Saiu para entrega</p>
        </header>

        <div class="conteudos">
            <article class="card-conteudo">
                
            </article>
        </div>

        <hr>

        <section class="card-conteudo">
            <h2>Resumo/Total dos envios de notificações</h2>
            <p>E-mails enviados: <b> <?= NotificadorEmail::getQuantidadeEnviada() ?> </b> </p>
        </section>

        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>

    </div>
</body>
</html>