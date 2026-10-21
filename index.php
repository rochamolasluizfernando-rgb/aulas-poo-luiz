<?php
// Importando a superclasse/pai: Conteudo 
require_once "src/Conteudo.php";

// Importando a subclasse/filha: Filme (que herda de Conteudo)
require_once "src/Filme.php";
require_once "src/Serie.php";

$filme1 = new Filme('De Volta para o Futuro', 'Ficcão', 1985, 116);
$filme2 = new Filme('Toy Story', 'Animação', 1995, 105);
$filme3 = new Filme('Homem Aranha', 'Ação', 2026, 145);

$serie1 = new Serie("Breaking Bad", "Drama", 2008, 5);
$serie2 = new Serie("Brooklyn Nine-Nine", "Comédia", 2013, 8);

$filmes = [$filme1, $filme2, $filme3];
$series = [$serie1, $serie2];

// var_dump($serie1);
// echo "<br><br>";
// var_dump($serie2);
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

        <section class="filmes">
            <?php foreach ($filmes as $filme): ?>
                <article class="card">
                    <p><?= $filme->getGenero() ?></p>

                    <h2><?= $filme->getTitulo() ?></h2>

                    <p>Lançamento: <?= $filme->getAno() ?></p>
                    <p><?= $filme->getDescricao() ?></p>

                </article>
            <?php endforeach; ?>
        </section>

        <hr>

        <div class="series">
            <?php foreach ($series as $serie): ?>
                <article class="card-serie">
                    <span class="genero"> <?= $serie->getGenero() ?> </span>
                    <h2> <?= $serie->getTitulo() ?> </h2>
                    <p class="ano">Lançamento: <?= $serie->getAno() ?> </p>
                    <p><?= $serie->getDescricao() ?></p>

                    <p class="temporadas">
                        Temporadas: <?= $serie->getTemporadas() ?>
                    </p>

                    <?php if ($serie->ehClassico()): ?>
                        <span class="classico">Clássico</span>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>


        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                <li>Classe-pai (superclasse): <b>Conteudo</b></li>
                <li>Classe-filha (subclasse): <b>Filme</b> e <b>Series</b> </li>
                <li>Herança utilizando <b>extends</b></li>
                <li>Herança com propriedades e métodos</li>
                <li>Visibilidade <b>protected</b> na superclasse permitindo o acesso através 
                das subclasses.</li>
                <li>Construtor da superclasse através de <b>parent__</b></li>
            </ul>
        </div>

    </div>
</body>

</html>