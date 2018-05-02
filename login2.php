<?php
session_start();
$login = $_POST['aadhar_no'];
$password = $_POST['password'];
if($login && $password)
{
  $link = mysql_connect('localhost','root','root');
  if(!$link)
  {
    die("Failed to connect to server: ".mysql_error());
  }
  $db = mysql_select_db('evil_buster');
  if(!$db) {
    die("Unable to select database");
  }
  $query = "SELECT user_password FROM `user_info` WHERE 1";
  $result = mysql_query($query);
  while($row = mysqli_fetch_array($result)) {
    echo $row['user_password'];
  }
}

echo $login."<br>";
echo $password."<br>";

?>
