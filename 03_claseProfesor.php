<?php
require_once("01_clasePersona.php");
class Profesor extends Persona
{
    public $asignatura;

    public function __construct($vr_nombre, $vr_celular, $vr_email, $vr_asignatura)
    {
        parent::__construct($vr_nombre, $vr_celular, $vr_email);
        $this->asignatura = $vr_asignatura;
    }
   
}

?>