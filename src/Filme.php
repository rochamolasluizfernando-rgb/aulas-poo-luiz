<?php
// src/Filme.php

class Filme
{
    private string $titulo;
    private string $genero;
    private int $ano;

    /* Método CONSTRUTOR: a finalidade deste método é receber dados (através de parâmetros) no momemnto da criação do objeto
    e atribuí-los às propriedades. Este ,étodo NÃO POSSUI retorno. */
    public function __construct(string $titulo, string $genero, int $ano)
    {
        // Atribuindo os valores recebidos pelos parâmetros às propriedades
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->ano = $ano;

        // Dica: podemos (ou, dependendo do caso, devemos) usar os setters 
        // através do construtor
    }

    public function ehClassico(): bool
    {
        return $this->ano < 2000;
    }

    /* Métodos getters: permitem ACESSO/LEITURA (ler dados) */
    /* Getters só retornam os dados de cada propriedade. */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getGenero(): string
    {
        return $this->genero;
    }

    public function getAno(): int
    {
        return $this->ano;
    }
    
    /* Métodos setters: permitem ACESSO/ESCRITA (colocar dados) */
    /* Setters recebem através de parâmetros os dados a serem
    colocados nas propriedades. */
    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    public function setGenero(string $genero): void
    {
        $this->genero = $genero;
    }

    public function setAno(int $ano): void
    {
        if($ano > 0){
            $this->ano = $ano;
        }
    }
}
