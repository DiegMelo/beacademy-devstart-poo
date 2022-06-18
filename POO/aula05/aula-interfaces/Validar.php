<?php

interface Validar{

    public function validarNome (string $nome): void;
    public function validardocumento (string $documento): void;
    public function validarCodigoPostal (string $codigoPostal): void;
        
}