<?php
class Persona
{
    public $nombre;
    private $celular;
    public $email;

    function __construct($vr_nombre, $vr_celular, $vr_email)
    {
        $this->nombre = $vr_nombre;
        $this->celular = $vr_celular;
        $this->email = $vr_email;
    }
    public function getCelular()
    {
        return $this->celular;
    }
    public function setCelular($vr_celular)
    {
        $this->celular = $vr_celular;
    }
    public function getDatosPersonales()
    {
        $arrayDatosPersonales = array(
            'Nombre: ' => $this->nombre,
            'Celular: ' => $this->celular,
            'Email: ' => $this->email,
        );
        return $arrayDatosPersonales;
    }
}

?>