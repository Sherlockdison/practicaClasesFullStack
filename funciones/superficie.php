<?php

function triangulo($base, $altura) {
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
    $superficie = $base * ($altura / 2);
  return $superficie;
}

function rectangulo($base, $altura) {
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
    $superficie = $base * $altura;
  return $superficie;
}

function cuadrado($base) {
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
    $superficie = $base * $base;
  return $superficie;
}

function circulo($radio) {
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
    $superficie = pi() * ($radio * $radio);
  return $superficie;
}
