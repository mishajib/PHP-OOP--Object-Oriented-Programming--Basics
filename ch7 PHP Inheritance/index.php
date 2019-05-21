<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ffd';?>; color: #000;">
<?php
#Create class
class Person{
  public $user;
  public $userId;

  public function __construct($userName, $userId){
    $this->user = $userName;
    $this->userId = $userId;
  }

  public function display(){
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
