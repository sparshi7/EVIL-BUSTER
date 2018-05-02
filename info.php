<?php
session_start();

$evil = $_POST['evil'];
$area = $_POST['area'];
$city = $_POST['city'];
$state = $_POST['state'];
$img = $_POST['img'];
$aadhar_no = $_SESSION['aadhar_no'];
/*
echo $evil."<br>";
echo $area."<br>";
echo $city."<br>";
echo $state."<br>";
echo $img."<br>";
echo $_SESSION['aadhar_no'];
*/
  $link = mysqli_connect('localhost','root','root');
  if(!$link)
  {
    die("Failed to connect to server: ".mysqli_error());
  }
  $db = mysqli_select_db($link,'evil_buster');
  if(!$db) {
    die("Unable to select database");
  }
  $q1 = "SELECT evil_no FROM `evils` WHERE name = '$evil'";
//  echo $q1."<br>";
  $result = mysqli_query($link,$q1);
  $row=mysqli_fetch_array($result,MYSQLI_NUM);
  $eno = $row[0];
//  echo $eno."<br>";
  $q2 = "Insert into info(evil_no, image, aadhar_no, location, city, state) values ('$eno', '$img', '$aadhar_no', '$area', '$city', '$state')";
  //echo $q2."<br>";
  $result2 = mysqli_query($link,$q2);
  //echo $eno."<br>";
  $q3 = "select ngo_no from evil_ngo where evil_no = '$eno'";
  //echo $q3."<br>";
  $result3 = mysqli_query($link,$q3);
  $row2 = mysqli_fetch_array($result3,MYSQLI_NUM);
  $ngo_no = $row2[0];
  //echo $ngo_no."<br>";
  $q4 = "select ngo_email from ngo_contact where ngo_no = '$ngo_no'";
  //echo $q4."<br>";
  $result4 = mysqli_query($link,$q4);
  $row3 = mysqli_fetch_array($result4,MYSQLI_NUM);
  $email = $row3[0];
  //echo $email."<br>";
  if($email)
  {
    //echo "congrats";
    //to mail the ngos
    //the message
    $msg = "'$area'\n'$city'\n'$state'\n'$img'";
    //echo $msg."<br>";
    mail("'$email'","NEED HELP","'$msg'");
    header("Location:index.php");
  }
  else
    echo "failed";
    //echo $eno."<br>";
?>
