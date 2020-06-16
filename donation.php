<?php

  try {
    $pdoconn= new PDO("mysql:host=localhost; dbname=savior","root","");
    $pdoconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected <br>";
  } catch (PDOException $e)
  {
    echo "connection failed" .$e->getMessage();
    exit();
  }


if (isset($_POST['insert'])) {

If(($_POST['fullname']=="")||($_POST['email']=="")||($_POST['addr']=="")||($_POST['pno']=="")||($_POST['type']=="")||($_POST['amount']=="")){
  echo "some fields missing";
}
else{
  $pdo ="INSERT INTO donor( `Fullname`, `Address`, `Email_Id`, `Phone`, `Donation_Type`, `Amount`) VALUES (:fullname,:addr,:email,:pno,:type,:amount)";

  $result=$pdoconn->prepare($pdo);
  $result->bindParam(':fullname',$name, PDO::PARAM_STR );
  $result->bindParam(':addr',$addr, PDO::PARAM_STR );
  $result->bindParam(':email',$email, PDO::PARAM_STR );
  $result->bindParam(':pno',$phone, PDO::PARAM_INT );
  $result->bindParam(':type',$type, PDO::PARAM_STR );
  $result->bindParam(':amount',$amount, PDO::PARAM_STR );


  $name=$_['fullname'];
  $addr= $_POST['addr'];
  $email=$_POST['email'];
  $phone=$_POST['pno'];
  $type=$_POST['type'];
  $amount=$_POST['amount'];


  $result->execute();

  echo  "Your details have been recorded";
  unset($result);
  $pdoconn= null;
}
}
?>
