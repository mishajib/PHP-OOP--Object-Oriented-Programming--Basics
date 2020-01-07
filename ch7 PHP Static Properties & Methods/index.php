<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ffd';?>; color: #000;">
<?php
#Create class
class Person{

  #in oop we will define constant with "const" keyword
  const NAME = "MI SHAJIB";
  #constant access
  # class_name::const_name;

  # for create static method or properties we have to use "static" keyword
  # create static property
  public static $age = 30;

  public static function display(){
    echo "Full name is: ".Person::NAME . "<br>";
    echo "Age is: ".self::$age. "<br>";
  }
}
#we can access static method or property without create class object
Person::display();
echo Person::$age;
?>
</div>
<?php
  include 'footer.php'; #include footer file
?>
