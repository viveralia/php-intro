<?php
  /********************************/
  /**** ESTRUCTURAS DE CONTROL ****/
  /********************************/

  // If
  $age=18;
  if ($age > 18) {
    echo 'Mayor de edad'.'</br>';
  } elseif($age === 18) {
    echo 'Tiene 18, lel'.'</br>';
  } else {
    echo 'Menor de edad'.'</br>';
  }

  // While
  $number=10;
  while ($number > 5) {
    echo $number.'</br>';
    $number--;
  }

  // // Do while
  // do {
  //   echo $number.'</br>';
  //   $number--;
  // } while ($number > 5);

  /********************************/
  /*********** FUNCIONES **********/
  /********************************/

  function printMessage($param1, $param2) {
    // To use global variables:
    // global $edad;
    echo $param1.$param2;
  }

  printMessage('Hello ', 'world')
    
?>