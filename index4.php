
<?php

$con = mysqli_connect('127.0.0.1','root','' );

if (!$con){
  echo 'Cannot find connection';
}
if(!mysqli_select_db($con,'savior'))
{
  echo 'Cannot find Database';
}
else {
  echo 'connected to database';
}

$NAME = $_POST['fullname'];
$ADDR = $_POST['addr'];
$EMAIL =$_POST['email'];
$PHONE= $_POST['pno'];
$TYPE= $_POST['type'];
$AMOUNT=$_POST['amount'];

$sql = "INSERT INTO 'donor'('Fullname', 'Address','Email_Id','Phone', 'Donation_Type','Amount') VALUES ('$NAME', '$ADDR','$EMAIL','$PHONE','$TYPE','$AMOUNT')";



##if(!mysqli_query($con,$sql))
####echo 'Not enough data';
##}
##else
##{
  ##echo 'Succesful';
##}
?>
