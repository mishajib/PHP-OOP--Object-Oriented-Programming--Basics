<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
 include 'Student.php';
?>

<?php
if (class_exists("Student")){
  $std = new Student;
  if (method_exists($std, "describe")) {
    $std->describe();
  }else {
    echo "Method Not Found.";
  }
}else {
  echo "Class Not Found.";
}



?>

<?php
  include 'footer.php'; #include footer file
?>
