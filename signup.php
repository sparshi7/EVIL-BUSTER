<?php
session_start();
$login = $_POST['aadhar_no'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$password = $_POST['pass'];

$_SESSION['aadhar_no'] = $login;
$_SESSION['password'] = $password;
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
  $query = "SELECT dob FROM `aadhar` WHERE aadhar_no = '$login'";
  //echo $query."<br>";
  $result = mysqli_query($link,$query);
  $row=mysqli_fetch_array($result,MYSQLI_NUM);
  //echo $row[0];
  $user_dob = $row[0];
  //echo $query."<br>";
  //echo $user_dob;
  if(!$user_dob)
  {
//    echo "exist problem<br>";
    header("Location:signup.html");
    delete_everything();
  }
  else
  {
    if($user_dob != $dob)
    {
      //echo $user_dob."<br>";
      //echo $dob."<br>";
      //echo "matchin problem<br>";
      header("Location:signup.html");
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
?>
