<?php
// src/Conteudo.php

class Conteudo
{
    /* Visibilidade protected:
    Fica visível na própria superclasse(pai) em que foi declarada (Conteudo)
    e também para as subclasses (filha) Serie e Filme */
    protected string $titulo;

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

    // Getters
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

    // Setters
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
        if ($ano > 0) {
            $this->ano = $ano;
        }
    }
}