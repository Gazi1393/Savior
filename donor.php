<?php
if(isset($_POST["submit"])){
$con=new mysqli("localhost","root","","savior");

if(!$con){
  echo 'not connected to database';
}
else
{
  echo 'connected';
}



$name = $con->real_escape_string($_POST['fullname']);
$addr = $con->real_escape_string($_POST['addr']);
$email = $con->real_escape_string($_POST['email']);
$phone = $con->real_escape_string($_POST['pno']);
$type = $con->real_escape_string($_POST['type']);
$amount = $con->real_escape_string($_POST['amount']);

$con->query("INSERT INTO donor( `Fullname`, `Address`, `Email_Id`, `Phone`, `Donation_Type`, `Amount`)VALUES (NULL,'$name','$addr','$email','$phone','$type','$amount')");

echo "Details have been recorded";
}



?>
