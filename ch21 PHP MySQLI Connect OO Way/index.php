<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
 spl_autoload_register(function($class_name){ #using this php upper version
   include "classes/".$class_name.".php";
 });

?>

<?php
# PHP __CLASS__ Magic Method - Refer the current class name
# PHP get_class() built in method - return intancetiated class name

class phpChild extends Php {
  public function cms(){
      echo "Child Class Constant and class name -> ".__CLASS__." <br>";
      echo "Child Class Method and class name -> ".get_class($this)." <br>";
  }

  public function ourMethod(){
    parent::framework();
  }
}

$php = new phpChild;
$php->framework();
echo "<hr>";
$php->cms();
echo "<hr>";
$php->ourMethod();

?>

<?php
  include 'footer.php'; #include footer file
?>
