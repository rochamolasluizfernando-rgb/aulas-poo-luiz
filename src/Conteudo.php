<?php 
// src/Conteudo.php

class Conteudo 
{
    private string $titulo;
    private string $genero;
    private int $ano;

    public function __construct(string $titulo, string $genero, int $ano)
    {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->ano = $ano;
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