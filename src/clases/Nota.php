<?php

namespace App\clases;

class Nota
{
    private $materia;
    private $calificacion;
    //Construccor
    public function __construct($materia,  $calificacion)
    {
        $this->materia = $materia;
        $this->calificacion = $calificacion;
    }
    //Setter
    public function setMateria($materia): void
    {
        $this->materia = $materia;
    }

    public function setCalificacion($calificacion): void
    {
        $this->calificacion = $calificacion;
    }

    //Getter
    public function getMateria(): string
    {
        return $this->materia;
    }

    public function getCalificacion()
    {
        return $this->calificacion;
    }
}
