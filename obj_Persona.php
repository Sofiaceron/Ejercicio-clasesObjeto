<?php
require_once("01_clasePersona.php");
require_once("02_claseEstudiante.php");
require_once("03_claseProfesor.php");

$objPersona = new Persona("Luis Ruiz", 3054387769, "luisrz23@gmail.com");
echo "<h2> Llamado a la clase persona </h2><br>";
$objPersona->getDatosPersonales();
print_r('<pre>');
print_r($objPersona);
print_r('</pre>');
echo "Nombre: " . $objPersona->nombre . "<br>";
echo "Celular: " . $objPersona->getCelular() . "<br>";
echo "Email: " . $objPersona->email . "<br>";


$objEstudiante = new Estudiante("Carlos Gallego", 3137779844, "carlosg5@gmail.com", "Once");
echo "<h2> Llamado a la clase estudiante </h2><br>";
$objEstudiante->getDatosPersonales();
print_r('<pre>');
print_r($objEstudiante);
print_r('</pre>');
echo "Nombre: " . $objEstudiante->nombre . "<br>";
echo "Celular: " . $objEstudiante->getCelular() . "<br>";
echo "Email: " . $objEstudiante->email . "<br>";
echo "Grado: " . $objEstudiante->getGrado() . "<br>";


$objProfesor = new Profesor("Andres Lozada", 3219564821, "alozada1@gmail.com", "Fisica");
echo "<h2> Llamado a la clase profesor </h2><br>";
$objProfesor->getDatosPersonales();
print_r('<pre>');
print_r($objProfesor);
print_r('</pre>');
echo "Nombre: " . $objProfesor->nombre . "<br>";
echo "Celular: " . $objProfesor->getCelular() . "<br>";
echo "Email: " . $objProfesor->email . "<br>";
echo "Asignatura: " . $objProfesor->asignatura . "<br>";

?>