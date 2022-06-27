<?php

include 'vendor/autoload.php';

use Classes\Config\Usuario as UsuarioConfig;
use Classes\Categoria;
use Dompdf\Dompdf;

$dompdf = new Dompdf();


$dompdf->loadHtml('hello world');
//$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream();