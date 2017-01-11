<?php
/**
 * Clase beneficios. Ana Asins.
 */
class Beneficios
{
  //creacion de los arrays publicos
  private $ventas=[];
  private $gastos=[];

  //funcion para almacenar datos en el array de ventas.
  public function AlmacenarVentas($venta){
    if ($venta >= 0) {
      $this->ventas[]=$venta;
    }
  }

  //funcion para almacenar datos en el array de gastos.
  public function AlmacenarGastos($gasto){
    if ($gasto >= 0) {
      $this->gastos[]=$gasto;
    }
  }

  //funcion para calcular y devolver los beneficios.
  public function CalcularBeneficios(){
    //iniciamos las variables.
    $ingresos=0;
    $gastado=0;
    //suma de los ingresos
    for ($i=0; $i < count($this->ventas) ; $i++) {
      $ingresos=$ingresos+$this->ventas[$i];
    }
    //suma de los gastos
    for ($i=0; $i < count($this->gastos) ; $i++) {
      $gastado=$gastado+$this->gastos[$i];
    }
    //calculo de los beneficios
    echo "Los beneficios son " .$beneficios=$ingresos-$gastado;
  }
  //imprimir arrays
  public function imprimirarrayventas(){
    print_r($this->ventas);
  }

  public function imprimirarraygastos(){
    print_r($this->gastos);
  }

}

 ?>
