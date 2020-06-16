<?php

if (!empty($_POST)){

  $mysqli= new mysqli('localhost' ,  'root','','savior');

  if ($mysqli->connect_error){
    die('connect error:' .$mysqli->connect_errno .':'.$mysqli->connect_error);
  }
  $sql= "INSERT INTO donor(Fullname, Address,Email_Id,Phone,Donation_Type, Amount) VALUES ( '{$mysqli->real_escape_string($_POST['fullname'])}','{$mysqli->real_escape_string($_POST['addr'])}',
  '{$mysqli->real_escape_string($_POST['email'])}','{$mysqli->real_escape_string($_POST['pno'])}','{$mysqli->real_escape_string($_POST['type'])}','{$mysqli->real_escape_string($_POST['amount'])}')";


  $insert= $mysqli->query($sql);

if($insert){
  echo "Your information has been recorded successfully !";
}
else
{
  die ("Error: {$mysqli->errno}: {$mysqli->error}");
}
$mysqli->close();
}
##header("refresh :5;, url=home.html");
 ?>
