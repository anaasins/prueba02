<?php
include 'beneficios.php';

$a=new Beneficios;

//datos venta 1
$a->AlmacenarVentas(50);
$a->AlmacenarGastos(45);
//datos venta 2
$a->AlmacenarVentas(125.6);
$a->AlmacenarGastos(115.2);
//datos venta 3
$a->AlmacenarVentas(23.4);
$a->AlmacenarGastos(11.9);
//venta de prueba para ver si me almacena los datos negativos
$a->AlmacenarVentas(-23.4);
$a->AlmacenarGastos(-11.9);

echo "<br>";
$a->CalcularBeneficios();
echo "<br>";
$a->imprimirarrayventas();
echo "<br>";
$a->imprimirarraygastos();
 ?>
