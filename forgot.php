<?php
session_start();

$login = $_POST['aadhar_no'];
$dob = $_POST['dob'];
$password = $_POST['pass'];

if($login && $password)
{
  $link = mysqli_connect('localhost','root','root');
  if(!$link)
  {
    die("Failed to connect to server: ".mysqli_error());
  }
  $db = mysqli_select_db($link,'evil_buster');
  if(!$db) {
    die("Unable to select database");
  }
  $query = "SELECT aadhar_no FROM `aadhar` WHERE aadhar_no = '$login' and dob = '$dob'";
//  echo $query."<br>";

  $result = mysqli_query($link,$query);
  if($result)
  {
    $q2 = "update user_info set user_password = '$password' where aadhar_no = '$login'";
    //echo $q2;
    $res = mysqli_query($link, $query);
    if($res)
      header("Location:login.html");
    else
      header("Location:forgot.html");
  }
  else
    echo "nope";
}
?>
