<?php

declare (strict_types=1);

final class Cliente extends Usuario{
 
    private string $dataCadastro;

    public function getdataCadastro(): string{
        return $this -> dataCadastro;
    }public function setdataCadastro(string $dataCadastro): void{
        $this -> datacadastro = $dataCadastro;
    }
}