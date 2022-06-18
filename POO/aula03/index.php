<?php

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria ('Roupas','Roupas Unisex');
$c2 = new Categoria ('Roupas','Roupas de banho');
$c3 = new Categoria ('Roupas','Roupas infantil');

var_dump ($c1);
var_dump ($c2);

$p1 = new Produto('Tenis',299,$c3);
$sp1 -> setDescricacao ('Tenis pra corrida');
//$p1 -> setNome = ('Tenis corrida');
//$p1 -> setValor = (-299);

var_dump($p1);

$p2 = new Produto('Saia Jeans', 100,$c1);
//$p2 -> nome = 'Calça Jeans';
//$p2 -> valor = -100;

var_dump($p2);

$p3 = new Produto('calça branca',159.78,$c1);/*
$p2 -> nome = 'Calça Jeans';
$p2 -> valor = -100;

var_dump($p2);*/