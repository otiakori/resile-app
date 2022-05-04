<?php
  include("connect.php");
  $fn = $_POST['fname'];
  $ln = $_POST['lname'];
  $e = $_POST['email'];
  $p = $_POST['pwd'];
  mysqli_query($conn, "INSERT INTO user(firstname, lastname, email, password)
  VALUES('$fn', '$ln', '$e', '$p')")
  or die("Insertion Failure ".mysqli_error($conn));
  print $fn." is successfuly registered";
?>
