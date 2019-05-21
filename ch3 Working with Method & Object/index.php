<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
 require_once 'functions.php';
?>
<div class="card-body" style="background: <?php echo '#ffd';?>; color: #000;">

<form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
  <table>
    <tr>
      <td>Enter First Number</td>
      <td> <input type="number" name="num1" placeholder="enter your first number"> </td>
    </tr>
    <tr>
      <td>Enter Second Number</td>
      <td> <input type="number" name="num2" placeholder="enter your second number"> </td>
    </tr>
    <tr>
      <td></td>
      <td> <input type="submit" name="calculation" value="Calculate"> </td>
    </tr>
  </table>
  </form>
  <?php
    if (isset($_POST["calculation"])) {
      $numOne = $_POST['num1'];
      $numTwo = $_POST['num2'];
      if (empty($numOne) || empty($numTwo)) {
        echo "<span style='color: red;'>Field must not be empty</span>";
      }else {
        echo "First Number is = {$numOne} <br> Second Number is = {$numTwo} <br><br>";
        $cal = new Calculation;
        $cal->add($numOne, $numTwo);
        $cal->sub($numOne, $numTwo);
        $cal->mul($numOne, $numTwo);
        $cal->div($numOne, $numTwo);
      }

    }
  ?>
</div>


<?php
  include 'footer.php'; #include footer file
?>
