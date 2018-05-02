<?php
session_start();
  $_SESSION['aadhar_no'] = $login;
  $_SESSION['password'] = $password;

$login = $_POST['aadhar_no'];
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
  $query = "SELECT user_password FROM `user_info` WHERE aadhar_no = '$login'";
  //echo $query."<br>";
  $result = mysqli_query($link,$query);
  $row=mysqli_fetch_array($result,MYSQLI_NUM);
  //echo $row[0];
  $user_pass = $row[0];
  if(!$user_pass)
  {
    header("Location:login.html");
    delete_everything();
  }
  else
  {
    if($user_pass != $password)
    {
      header("Location:login.html");
      delete_everything();
    }
    else
    {
      $_SESSION['aadhar_no'] = $login;
      $_SESSION['password'] = $password;
      header("Location:index.php");
    }
  }
}
/*
echo $login."<br>";
echo $password."<br>";
*/
?>
