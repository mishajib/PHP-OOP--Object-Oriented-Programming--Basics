<?php
class Calculation {
    
    public function getValue(array $x) { #define the default type as a array
        foreach ($x as $value) {
            echo $value[0];
            echo " : ";
            echo $value[1] * $value[2] . "<br>";
        }
    }
}