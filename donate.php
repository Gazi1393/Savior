<?php
if (isset($_POST['insert']))
{
$con = mysqli_connect('127.0.0.1','root','' );

if (!$con){
  echo 'Cannot find connection';
}
if(!mysqli_select_db($con,'savior'))
{
  echo 'Cannot find Database';
}



$NAME='';
$ADDR='';
$EMAIL='';
$PHONE='';
$TYPE='';
$AMOUNT='';

if (isset($_POST['fullname']))
{
  $NAME=$_POST['fullname'];
}
if (isset($_POST['addr']))
{
  $ADDR=$_POST['addr'];
}
if (isset($_POST['email']))
{
  $EMAIL=$_POST['email'];
}
if (isset($_POST['pno']))
{
  $PHONE=$_POST['pno'];
}
if (isset($_POST['type']))
{
  $TYPE=$_POST['type'];
}
if (isset($_POST['amount']))
{
  $AMOUNT=$_POST['amount'];
}

##$NAME = $_POST['fullname'];
##$ADDR = $_POST['addr'];
##$EMAIL =$_POST['email'];
##$PHONE = $_POST['pno'];
##$TYPE = $_POST['type'];
##$AMOUNT=$_POST['amount'];

$sql = "INSERT INTO 'donor'(Fullname, Address, Email_Id,Phone, Donation_Type,Amount) VALUES ('$NAME', '$ADDR','$EMAIL','$PHONE','$TYPE','$AMOUNT')";

if(!mysqli_query($con,$sql))
{
  echo 'Not enough data';
}
else
{
  echo 'Succesful';
}
var_dump($_POST);
echo $sql;
}
