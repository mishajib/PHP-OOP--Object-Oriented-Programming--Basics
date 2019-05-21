<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ffd';?>; color: #000;">
<?php
#with "final" keyword we can prevent extend class & override method
#Create class
#if we use final keyword before class keyword then we can't extend this class from subclass

/*
কেন অ্যাক্সেস মডিফায়ার ব্যবহার করবেন?
একটি ক্লাসের অন্তর্গত প্রোপার্টি এবং মেথডসমুহ ক্লাসের বাইরে থেকে অ্যাক্সেস করার অনুমতি আছে কিনা তা নির্ধারন করার জন্য অ্যাক্সেস মডিফায়ার ব্যবহার করা হয়।
এটি অতিব প্রয়োজনীয়। কারন, আপনার প্রোগ্রামের তথ্য কোডসমুহ কে/কারা অ্যাক্সেস করতে পারবে তা আপনাকেই নির্ধারন করে দিতে হবে।

অ্যাক্সেস মডিফায়ার তিন ধরনের হয়। যথাঃ
-> public (আমরা যে সকল প্রোপার্টি এবং মেথডের পূর্বে public কীওয়ার্ড ব্যবহার করবো ঐ সকল প্রোপার্টি এবং মেথড সমুহকে ক্লাসের বাইরে থেকে যে কেউ অ্যাক্সেস করতে পারবে।)
-> private (আমরা একটি ক্লাসের অন্তর্গত প্রোপার্টি এবং মেথডসমূহকে ক্লাসের বাইরে থেকে অ্যাক্সেস রোধ করতে পারি। এটি করার জন্য আমরা প্রোপার্টি এবং মেথড ঘোষণা করার সময় public কীওয়ার্ডের পরিবর্তে private কীওয়ার্ড ব্যবহার করবো।)
-> protected (protected মডিফায়ারকেও সরাসরি ক্লাসের বাইরে থেকে অ্যাক্সেস করা যায় না। সরাসরি অ্যাক্সেস করতে চাইলে এটি একটি error তৈরি করে।)
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
?>
</div>
<?php
  include 'footer.php'; #include footer file
?>
