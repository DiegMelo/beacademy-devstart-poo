<?php

declare (strict_types=1);

class ValidarBR implements Validar{
    Public function validarDocumento(string $documento):void{
        if (strlen($documento) !==11){
            die('CPF inválido');
        }
    }
}