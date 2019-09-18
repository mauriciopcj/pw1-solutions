<?php
require 'character.php';

class Comic
{
  private $characters = [];

  public function add($character){
    array_push($this->$characters, $character);
  }

  public function names($comic=""){
    $result = [];
    foreach($characters as $char){
      if($comic != ""){
        if(strcmp($char->__get($comic), $comic) == 0){
          array_push($result,$char->__get($name));
        }
      } else {
        array_push($result,$char->__get($name));
      }
    }
    return $result;
  }

  public function weights($comic){
    $weights = 0;
    $quant = 0;
    foreach($characters as $char){
      if($comic != ""){
        if(strcmp($char->__get($comic), $comic) == 0){
          $weights += $char->__get($weight);
          $quant++;
        }
      } else {
        $weights += $char->__get($weight);
        $quant++;
      }
    }
    return $weights / $quant;
  }

}
