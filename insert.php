<?php

$con = mysqli_connect('127.0.0.1','root','');


if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
}
if(!mysqli_select_db($con,'savior'))
{
  echo 'Cannot find Database';
}

$NAME='';
$EMAIL='';
$PHONE='';
$ADDR='';
$TYPE='';
$AMOUNT='';

if (isset($_POST['insert']))
if(isset($_POST['fullname'])){
    $fullname = $_POST['fullname'];
}
if(isset($_POST['addr'])){
    $addr  = $_POST['addr'];
}
if(isset($_POST['email'])){
    $email = $_POST['email'];

}
if(isset($_POST['pno'])){
    $pno = $_POST['pno'];
}
if(isset($_POST['type'])){
    $type = $_POST['type'];
}
if(isset($_POST['amount'])){
    $amount = $_POST['amount'];
}






$sql='';


$sql = "INSERT INTO donor (Fullname, Address, Email_Id,Phone,Donation_Type, Amount) VALUES ('".$_POST['fullname']."','".$_POST['addr']."','".$_POST['email']."',
  '".$_POST['pno']."','".$_POST['type']."','".$_POST['amount']."')";


$result= mysqli_query($con,$sql);
if ( false===$result ) {
  printf("error: %s\n", mysqli_error($con));
}
##if(!mysqli_query($con,$sql));
##{
  ##echo 'Not enough data';
##}
else
{
  echo 'Successful';
}

echo $sql;

##header("refresh:3; url=donate.html");
