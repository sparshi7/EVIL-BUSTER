<?php
session_start();

$acc_no = $_POST['acc_no'];
$user_no = $_POST['user_no'];
$amount = $_POST['amount'];
$transaction_no = $_POST['transaction_no'];

echo $acc_no."<br>";
echo $user_no."<br>";
echo $amount."<br>";
echo $transaction_no."<br>";

  $link = mysqli_connect('localhost','root','root');
  if(!$link)
  {
    die("Failed to connect to server: ".mysqli_error());
  }
  $db = mysqli_select_db($link,'evil_buster');
  if(!$db) {
    die("Unable to select database");
  }
  $query = "Insert into donation (acc_no, user_no, amount, transaction_no) values ('$acc_no', '$user_no', '$amount', '$transaction_no') ";
  //echo $query."<br>";
  $result = mysqli_query($link,$query);
  //$row=mysqli_fetch_array($result,MYSQLI_NUM);
  //echo $row[0];
  //$user_pass = $row[0];
  //echo $query."<br>";
  if($result)
    header("Location:index.php");
  else
    header("Location:ngo.html");
?>
