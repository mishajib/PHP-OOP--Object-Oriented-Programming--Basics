<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ffd';?>; color: #000;">
<?php
# Inteface
# Interface methods has no body

interface School
{
  //there are no method body
  public function mySchool();
}
interface College
{
  //there are no method body
  public function myCollege();
}
interface Versity
{
  //there are no method body
  public function myVersity();
}


class Teacher implements School, College, Versity
{
  public function __construct()
  {
    $this->myschool();
    $this->myCollege();
    $this->myVersity();
  }

  public function mySchool(){
    echo "I am a School Teacher.<br>";
  }
  public function myCollege(){
    echo "I am a College Teacher.<br>";
  }
  public function myVersity(){
    echo "I am a Versity Teacher.<br>";
  }
}

class Student implements School, College, Versity
{
  public function __construct()
  {
    $this->myschool();
    $this->myCollege();
    $this->myVersity();
  }

  public function mySchool(){
    echo "I am a School Student.<br>";
  }
  public function myCollege(){
    echo "I am a College Student.<br>";
  }
  public function myVersity(){
    echo "I am a Versity Student.<br>";
  }
}

$teacher = new Teacher;
echo "<br>";
$student = new Student;



?>
</div>
<?php
  include 'footer.php'; #include footer file
?>
