<?php
// o readonly que é apenas leitura é só apartir do PHP 8
declare(strict_types=1);

class Produto {
    private string $nome;
    private float $valor;
    private string $descricao;
    private readonly Categoria $categoria;
    
    
    public function __construct (string $novoNome, float $novoValor, Categoria $categoria) {
        $this -> nome = $novoNome;
        $this -> nome = $novoValor;
        $this -> categoria = $categoria;
    }

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
public function getDescricacao():string{
    return $this -> descricao;
}
public function setDescricacao(string $novaDescricao):void{
   $this -> descricao = $novaDescricao; 
}
public function setCategoria(Categoria $categoria):void{
    $this -> Categoria = $categoria; 
 }
 
}