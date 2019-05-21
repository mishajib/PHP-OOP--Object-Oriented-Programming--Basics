<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ffd';?>; color: #000;">
<?php
# Magic Methods (magic methods works invisibly)
# __construct()
# __destruct()
# __get($property) - The __get() method will be called when getting a member variable of a class. (Undefined property)
# __set($property, $value) - The __set() method will be called when setting a member variable of a class. (set value into undefined property)
# __call($method, $arg_array) - The __call() method will be called when an undefined or inaccessible method is called.

class Student{
  public $name;

  public function describe(){
    echo "I am a Student.<br>";
  }
  // create getter
  public function __get($pm){
    echo "$pm does not exist.<br>";
  }
  #create setter
  public function __set($pm, $value){
    echo "We set $pm->$value";
  }
  # call method
  public function __call($pm, $value){
    echo "There is no $pm method and arguments: ".implode(', ', $value);
  }
}
$std = new Student;
$std->describe();
$std->Shajib;
$std->age = 15;
echo "<br>";
$std->notExistMethod('2', '8', '5');




?>
</div>
<?php
  include 'footer.php'; #include footer file
?>
