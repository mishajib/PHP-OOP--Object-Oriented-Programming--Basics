<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
 spl_autoload_register(function($class_name){ #using this php upper version
   include "classes/".$class_name.".php";
 }); #This is most popular method or function for class autoloading.
 // function __autoload($class_name){ #Autoload class from required directory / php5 using this
 //   include "classes/".$class_name.".php";
 // }
?>

<?php
# Type hinting is defined a type into class methods
# Using PHP Type hinting you can define type into methods argument / parameter which type you are using in the methods

// $cal = new Calculation;
// $nums = [
//   ['Number One', 10, 10],
//   ["Number Two", 20, 20],
// ];
// $cal->getValue($nums); # AS we already defined array as a default type that's why you have to pass array parameter


$php = new Php;
new Java($php); #here I pass the object as a parameter into java class

?>

<?php
  include 'footer.php'; #include footer file
?>
