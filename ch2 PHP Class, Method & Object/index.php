<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ffd';?>; color: #000;">
<?php
#Create class
class test{
  #create some property
  public $name = "MI SHAJIB";
  public $age = 23;

  #create a method (by default method is public)
  public function personName(){
    echo "Your Name is: ".$this->name."<br>";
  }
  public function personAge(){
    echo "Your Age is: ".$this->age."<br>";
  }
}
#create a class object
$personOne = new test;
$personOne->personName(); // method chanining or access method from class
$personOne->personAge();
?>
</div>
<?php
  include 'footer.php'; #include footer file
?>
