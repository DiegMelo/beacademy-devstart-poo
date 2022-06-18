<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';

$c1 = new Cliente('choquim@email.com','123456');
$c1 -> setNome('Choquim');
$c1 -> setDataCadastro ('01/01/2019');

$g1 = new Gestor('joquim@gmail.com','123123',50000);
$g1 -> setNome('Joquim');

$gg1 = new GestorGeral('luizim@gmail.com','223322',80000);

//$us = new Usuario ('hacker@gmail.com', 'mestre');