<?php
namespace App\clases;

use App\clases\astracta\Humano;
use PhpParser\Node\Expr\Cast\String_;

class alumno extends Humano{
 private $nota=[];
public function __construct($nombre,  $apellido,  $identificacion){
    parent::__construct($nombre,  $apellido,  $identificacion);
    
}
	function agregaNota(Nota $objetoNota)  {
        $this->nota=$objetoNota;
        return "Agregado";
    }

    function muestrNotas():Array  {
        return $this->nota;
    }

}

?>