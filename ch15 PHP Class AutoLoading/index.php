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
  $php = new Php;
  $java = new Java;
  $python = new Python;
?>

<?php
  include 'footer.php'; #include footer file
?>
