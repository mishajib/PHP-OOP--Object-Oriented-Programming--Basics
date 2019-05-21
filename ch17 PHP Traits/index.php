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
#traits work like abstract class
trait Java{
  public function javaCoder(){
    echo "I Love Java.<br>";
  }
}
trait Php{
  public function phpCoder(){
    echo "I Love PHP.<br>";
  }
}

class CoderOne{
  use Java;
}
class CoderTwo{
  use Php, Java;
  public function phpCoder(){
    echo "I Love PHP and Java.<br>";
  }
}

$c1 = new CoderOne;
$c1->javaCoder();
$c2 = new CoderTwo;
$c2->phpCoder();
$c2->javaCoder();


?>

<?php
  include 'footer.php'; #include footer file
?>
