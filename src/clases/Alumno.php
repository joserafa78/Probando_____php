<?php

namespace App\clases;

use App\clases\astracta\Humano;


class Alumno extends Humano
{
    private $nota = [];
    public function __construct($nombre,  $apellido,  $identificacion)
    {
        parent::__construct($nombre,  $apellido,  $identificacion);
    }
    function agregaNota(Nota $objetoNota): string
    {
        array_push($this->nota, $objetoNota);
        return "Agregado";
    }
    function muestrNotas(): array
    {
        return $this->nota;
    }
    function cuentaNotas(): int
    {
        return count($this->nota);
    }
}
