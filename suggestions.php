<?php
session_start();

$ngo_name = $_POST['ngo_name'];
$s_text = $_POST['txtarea'];
$aadhar_no = $_SESSION['aadhar_no'];
/*
echo $ngo_name."<br>";
echo $s_text."<br>";
echo $aadhar_no."<br>";
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
  $q1 = "select evil_no from ngo, evil_ngo where ngo.ngo_no = evil_ngo.ngo_no and ngo_name='$ngo_name'";
  //echo $q1."<br>";
  $result = mysqli_query($link,$q1);
  $row=mysqli_fetch_array($result,MYSQLI_NUM);
  $eno = $row[0];
  //echo $eno."<br>";
  $q2 = "Insert into suggestion (aadhar_no, evil_no, suggestion_text) values ('$aadhar_no', '$eno', '$s_text')";
  //echo $q2."<br>";
  $result1 = mysqli_query($link, $q2);
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
  if($result)
  {  $msg = "'$s_text'\n";
//echo $msg."<br>";
    mail("'$email'","Suggestions","'$msg'");
    header("Location:index.php");
  }
  else
    //echo "wrong.<br>";
    header("Location:suggestions.html");
?>
