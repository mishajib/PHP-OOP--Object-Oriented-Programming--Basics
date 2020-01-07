<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ffd';?>; color: #000;">
<?php
#Polymorphism
/*
When we start to extend classes, and add functionality to them which wasn't there previously, and even override existing methods (functions),
this is called Polymorphism.

The basis of Polymorphism is Inheritance and Overriden Methods.
*/
class Person{
  public $user;
  public $userId;
  protected $age = '23';

  public function __construct($userName, $userId){
    $this->user = $userName;
    $this->userId = $userId;
  }
#similarly if we use final keyword in function then we can't override the method
  public function display(){
    echo "Username is {$this->user} and user Id is {$this->userId}.<br>";
    echo $this->age." In the class";
  }
}

# we can inherite with "extends" keyword
class Admin extends Person{
  public $level;
  # Method Overriding
  public function display(){
    echo "Username is {$this->user} and user Id is {$this->userId} and user level is {$this->level}.<br>";
    echo $this->age." In the sub class";
  }
}




$user = "MI SHAJIB";
$id = 10;
$usr = new Person($user, $id);
$usr->display();
echo "<br>";
$user = "Admin";
$id = 1;
$admin = new Admin($user, $id);
$admin->level = 'Administrator';
$admin->display();
echo "<br>";
if ($admin instanceof Person) {
  echo "Inherited";
}
?>
</div>
<?php
  include 'footer.php'; #include footer file
?>
