<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';
include 'Disciplina';


$a1 = new Aluno();
$a1 -> nome = 'Alessandro';
$a1 -> cpf = '123.123.123-00';

$cusorPHP = new Curso();
$cusorPHP -> nome = 'Introdução ao PHP';
$cusorPHP -> $cargaHoraria = 88;
$cusorPHP -> $descricao = 'Aprender o básico e o intermediario do PHP';

echo "<h1>Aluno:{$a1->nome}</h1>";