<?php

Class Person {
    public $name    = "MI SHAJIB";
    public $age     = "23";
    public $skill   = "Web Development";

    private $email          = "mishajib@gmail.com";
    protected $password     = "12345";

    public function iteratorInner(){
        echo "Inside Class <br>";
        foreach ($this as $key => $item) {
            echo "<pre>";
            echo "$key => $item";
            echo "</pre>";
          }
          
    }

}

