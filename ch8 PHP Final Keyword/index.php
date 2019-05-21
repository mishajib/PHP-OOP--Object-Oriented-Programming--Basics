<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ffd';?>; color: #000;">
<?php
#with "final" keyword we can prevent extend class & override method
#Create class
#if we use final keyword before class keyword then we can't extend this class from subclass
class Person{
  public $user;
  public $userId;

  public function __construct($userName, $userId){
    $this->user = $userName;
    $this->userId = $userId;
  }
#similarly if we use final keyword in function then we can't override the method
  public final function display(){
    echo "Username is {$this->user} and user Id is {$this->userId}.";
  }
}

# we can inherite with "extends" keyword
class Admin extends Person{
  public $level;
  # Method Overriding
  public function display(){
    echo "Username is {$this->user} and user Id is {$this->userId} and user level is {$this->level}.";
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
?>
</div>
<?php
  include 'footer.php'; #include footer file
?>
