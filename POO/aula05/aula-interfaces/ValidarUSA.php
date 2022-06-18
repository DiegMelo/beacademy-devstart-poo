<?php

declare (strict_types=1);

class ValidarUSA implements Validar{
    Public function validarDocumento(string $documento):void{
        if (strlen($documento) !==14){
            die('Documento USA inválido');
        }
    }
}