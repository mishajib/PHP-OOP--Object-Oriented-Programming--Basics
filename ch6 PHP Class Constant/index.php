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

  public function display(){
    echo "Full name is: ".Person::NAME;
  }
}






#create a class object
$personOne = new Person("MI SHAJIB", 23);
$personOne->display();
?>
</div>
<?php
  include 'footer.php'; #include footer file
?>
