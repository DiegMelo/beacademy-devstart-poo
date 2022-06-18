<?php

declare(strict_types=1);

class Produto {
    private string $nome;
    private float $valor;

    public function getNome():String{
       
        return $this -> nome;
    }
    public function setNome(string $novoNome):void{
       
        $this ->nome = $novoNome;
    }
    public function getValor(): float{
        return $this -> valor;
    }
        
    public function setValor(string $novoValor):void{
       if ($novoValor<0){
           die('não é permitido, você tá tentando digitar um valor negativo');
       }
       
        $this ->valor = $novoValor;
    }

}