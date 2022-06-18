<?php

declare(strict_types=1);

// apenas apartir do PHP 8 tem essa função e subistitui as informações abaixo:

    class Categoria
    {
        public function __construct (
            private string $nome,
            private string $descricao
        ){

        }
    }

public function getNome(): string
{
    return $this -> nome;
}
public function setNome(string $nome): void {
    $this -> nome = $nome;
}



/*
class Categoria {
    private string $nome;
    private string $descricao;

    public function __construct (string $nome, string $descricao) {
        $this -> nome = $Nome;
        $this -> descricao = $descricao;
    }
}*/