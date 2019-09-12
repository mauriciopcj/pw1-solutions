<?php

require __DIR__ . '/../../../function-prime/mauricio.pereira/src/prime.php';

function primeFactors($number)
{
  $result = [];
  $primos = [];
  if($number !== 1){
    foreach(range(2,$number) as $n){
      if (isPrime($n)){
        array_push($primos, $n);
      }
    }
    foreach($primos as $valor){
      while($number % $valor == 0){
        array_push($result, $valor);
        $number /= $valor;
      }
    }
  }
  return $result;
}
