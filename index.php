<?php
// Importando a superclasse/pai: Conteudo 
require_once "src/Conteudo.php";

// Importando a subclasse/filha: Filme (que herda de Conteudo)
require_once "src/Filme.php";
require_once "src/Serie.php";

$filme1 = new Filme('De Volta para o Futuro', 'Ficção', 1985, 116);
$filme2 = new Filme('Toy Story', 'Animação', 1995, 105);
$filme3 = new Filme('Homem Aranha', 'Ação', 2026, 145);

$serie1 = new Serie("Breaking Bad", "Drama", 2008, 5);
$serie2 = new Serie("Brooklyn Nine-Nine", "Comédia", 2013, 8);

/* Como a classe Conteudo foi definida como abstrata, a linha abaixo
não funcionará pois não é possível criar objetos/instâncias diretamente
à partir de classes abstratas. */
//$conteudo = new Conteudo('Senhor dos anéis', 'Fantasia', 2001);
//var_dump($conteudo);

// Lista com objetos Filme e Serie
$conteudos = [$filme1, $filme2, $serie1, $serie2];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Coleção de Filmes</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <header>
            <p class="destaque">Uma sessão de boas histórias</p>
            <h1>Minha coleção de filmes</h1>
            <p>Três filmes para descobrir, rever e se divertir</p>
        </header>

        <div class="conteudos">
            <?php foreach ($conteudos as $conteudo): ?>
                <article class="card">
                    <span class="genero"> <?= $conteudo->getGenero() ?> </span>
                    <h2> <?= $conteudo->getTitulo() ?> </h2>
                    <p class="ano">Lançamento: <?= $conteudo->getAno() ?> </p>
                    <p><?= $conteudo->getDescricao() ?></p>
                    <?php if( $conteudo->ehClassico() ): ?>
                        <span class="classico">Clássico</span>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>

        <hr>

        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                <li>Classe abstrata: <b>Conteudo</b></li>
                <li>Impossibilidade de instanciar diretamente uma classe abstrata</li>
                <li>Método abstrato: <b>getDescricao()</b></li>
                <li>Obriga a implementação do método abstrato pelas classes filhas Filme e 
                Serie</li>
                <li>Poliformismo</li>
            </ul>
        </div>

    </div>
</body>

</html>