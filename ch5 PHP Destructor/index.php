<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ffd';?>; color: #000;">
<?php
#Create class
class Person{
  #create some property
  private $name;
  private $age;
  private $id;

  /*
  ম্যাজিক মেথডগুলো সবসময় দুটি আন্ডারস্কোর দিয়ে শুরু হয়। এমনকি __construct() ম্যাজিক মেথডের ক্ষেত্রেও এই একই নিয়ম প্রযোজ্য।

আমরা কোন ক্লাসের অবজেক্ট তৈরির সময় __construct() ম্যাজিক মেথড ব্যবহার করে স্বয়ংক্রিয়ভাবে কিছু কার্য সম্পাদন করতে পারি। আমারা সাধারনত ক্লাসের প্রোপার্টির মান সেট করার জন্য __construct() ম্যাজিক মেথডটি ব্যবহার করি।
  */
# Create Constructor
# Constructor is a magic method

  public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
  }

  #create a method (by default method is public)
  public function personDetails(){
    echo "Your Name is: {$this->name} and age is: {$this->age} <br>";
  }

  public function setId($id){
    $this->id = $id;
  }

  public function __destruct()
  {
    if (!empty($this->id)) {
      echo "Saving Person";
    }
  }
}






#create a class object
$personOne = new Person("MI SHAJIB", 23);
$personOne->personDetails();
$personOne->setId(10);
unset($personOne);
?>
</div>
<?php
  include 'footer.php'; #include footer file
?>
