<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>funciones PHP</title>
  </head>
  <body>

<?php

  $numeroMagico = 2015;

  function mayor($num1, $num2, $num3 = ""){
        global $funcionesEjecutadas;
        $funcionesEjecutadas++;
      if ($num3 == "" && !is_numeric($num3)) {
          global $numeroMagico;
          $num3 = $numeroMagico;
        }
      if ($num1 > $num2) {
        if ($num1 > $num3) {
          echo $num1;
        }
      } elseif ($num2 > $num3) {
          echo $num2;
        } else {
          echo $num3;
        }
      }


  function tabla($base, $limite = "") {
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    $secuencia = [];
    if ($limite == "" && !is_numeric($limite)) {
      global $numeroMagico;
      $limite = $numeroMagico;
    }
      for ($i=1; $base * $i < $limite ; $i++) {
        $secuencia[] = $base * $i;
    }
    return ($secuencia);
  }






 ?>





</body>
</html>
