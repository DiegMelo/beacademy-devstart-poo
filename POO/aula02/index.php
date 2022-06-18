<?php

include 'Produto.php';


$p1 = new Produto();
$p1 -> alterarNome = ('Tenis corrida');
$p1 -> alterarValor = (-299);

var_dump($p1);
/*
$p2 = new Produto();
$p2 -> nome = 'Calça Jeans';
$p2 -> valor = -100;


var_dump($p2);*/