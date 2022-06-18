<?php

ini_set('display_errors',1);

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUSA.php';

$cpf = '12344566';
$docx = '2131243435';

$br = new ValidarBR();
$br -> validarDocumento ($cpf);
$usa = new ValidarUSA();
$usa -> validarDocumento ($docx);