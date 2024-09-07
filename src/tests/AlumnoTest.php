<?php

use PHPUnit\Framework\TestCase;
use App\clases\Alumno;
use App\clases\Nota;

class AlumnoTest extends TestCase
//TestCase es una clase de PHPUnit
{
    public function test_mostarAluno()
    {
        $nota1 = new Nota("Fisica", 15);
        $nota2 = new Nota("Castellano", 18);
        $estudiante = new Alumno("jose", "Jimenez", 16986848);
        $estudiante->agregaNota($nota1);
        $estudiante->agregaNota($nota2);
        $this->assertEquals(2, $estudiante->cuentaNotas());
        $this->assertInstanceOf(Nota::class, $estudiante->muestrNotas()[0]);
    }
}
