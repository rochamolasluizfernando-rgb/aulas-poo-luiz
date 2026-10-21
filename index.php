<?php
// Importando a superclasse/pai: Conteudo 
require_once "src/Conteudo.php";

// Importando a subclasse/filha: Filme (que herda de Conteudo)
require_once "src/Filme.php";
require_once "src/Serie.php";

$serie1 = new Serie("Breaking Bad", "Drama", 2008, 5);
$serie2 = new Serie("Brooklyn Nine-Nine", "Comédia", 2013, 8);

$series = [$serie1, $serie2];

var_dump($serie1);
echo "<br><br>";
var_dump($serie2);
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

        <div class="filmes">

            <?php foreach ($series as $serie): ?>
                <article class="card-filme">
                    <span class="genero">
                        <?= $serie->getGenero() ?>
                    </span>

                    <h2>
                        <?= $serie->getTitulo() ?>
                    </h2>

                    <p class="ano">
                        Lançamento: <?= $serie->getAno() ?>
                    </p>

                    <p>
                        Temporadas: <?= $serie->getTemporadas() ?>
                    </p>

                    <?php if ($serie->ehClassico()): ?>
                        <span class="classico">Clássico</span>
                    <?php endif; ?>

                </article>
            <?php endforeach; ?>
        </div>

        <hr>

        <div class="series">
            <?php foreach($series as $serie): ?>
                <article class="card-serie">
                    <span class="genero"> <?= $serie->getGenero() ?> </span>
                    <h2> <?= $serie->getTitulo() ?> </h2>
                    <p class="ano">Lançamento: <?= $serie->getAno() ?> </p>
                    
                    <?php if($serie->ehClassico()): ?>
                        <span class="classico">Clássico</span>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>

        
        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                    
            </ul>
        </div>

    </div>
</body>

</html>