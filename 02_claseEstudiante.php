<?php
require_once("01_clasePersona.php");

class Estudiante extends Persona
{
    private $grado;

    function __construct($vr_nombre, $vr_celular, $vr_email, $vr_grado)
    {
        parent::__construct($vr_nombre, $vr_celular, $vr_email);
        $this->grado = $vr_grado;
    }
    public function getGrado()
    {
        return $this->grado;
    }

}

?>