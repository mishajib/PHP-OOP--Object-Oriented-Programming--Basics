<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ffd';?>; color: #000;">
<?php
# Abstract Class
/*
অ্যাবস্ট্রাক্ট(abstract) ক্লাস এবং মেথড
অ্যাবস্ট্রাক্ট(abstract) ক্লাস - অ্যাবস্ট্রাক্ট ক্লাসে কমপক্ষে একটি অ্যাবস্ট্রাক্ট মেথড থাকে।
অ্যাবস্ট্রাক্ট ক্লাস থেকে আমরা কোনো অবজেক্ট তৈরি করতে পারি না, বরং এর পরিবর্তে অ্যাবস্ট্রাক্ট ক্লাসের চাইল্ড ক্লাস এর মধ্যে আমরা অ্যাবস্ট্রাক্ট
মেথডসমুহকে ডিফাইন করবো এবং প্রয়োজন অনুযায়ী চাইল্ড ক্লাস এর অবজেক্ট তৈরি করবো।

অ্যাবস্ট্রাক্ট(abstract) মেথড - অ্যাবস্ট্রাক্ট মেথড শুধুমাত্র অ্যাবস্ট্রাক্ট ক্লাসের মধ্যেই ব্যবহার করা যায়।
অ্যাবস্ট্রাক্ট মেথডের মধ্যে কোনো কোড ডিফাইন করা থাকে না। শুধুমাত্র মেথডের নাম এবং আর্গুমেন্টসমূহ ডিক্লেয়ার করা থাকে।
এই জন্য আমরা অ্যাবস্ট্রাক্ট ক্লাস থেকে কোনো অবজেক্ট তৈরি করতে পারি না।
*/

abstract class Student{
  public $name;
  public $age;
  public function studentDetail(){
    echo $this->name. " is " . $this->age . " years old.<br>";
  }
  #create abstract method
  abstract public function school();
}

class Boy extends Student{
  public function describe(){
    return parent::studentDetail(). ' And I am a hight school Student.<br>';
  }
  public function school(){
    return "I LIKE READ STORY BOOK.";
  }
}
#we can't create abstract class object



$student = new Boy;
$student->name = "MI SHAJIB";
$student->age = 23;
$student->describe();
echo $student->school();

?>
</div>
<?php
  include 'footer.php'; #include footer file
?>
