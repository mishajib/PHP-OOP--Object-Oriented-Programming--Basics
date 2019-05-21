<?php
class Calculation
{
  function add($a, $b){
    $sum = $a + $b;
    echo "Summation = ".$sum."<br>";
  }
  function sub($a, $b){
    $sub = $a - $b;
    echo "Subtraction = ".$sub."<br>";
  }
  function mul($a, $b){
    $mul = $a * $b;
    echo "Multiplication = ".$mul."<br>";
  }
  function div($a, $b){
    $div = $a / $b;
    echo "Division = ".$div."<br>";
  }
}
