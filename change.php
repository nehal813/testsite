<?php

$ids= $_REQUEST['id'];
$newname=$_REQUEST['newname'];
$newemail=$_REQUEST['newemail'];
$newpassword=$_REQUEST['newpassword'];

 $conn = new mysqli("localhost" ,"root" ,"","testsite");

   //  Check connection
    if (mysqli_connect_errno()) {
        echo "fail to connect";
        exit();

    }
  $sql = "SELECT name, email, password FROM users";
    $result = mysqli_query($conn, $sql);
    
    mysqli_query($conn ," UPDATE users SET name='$newname' ,email='$newemail' , password='$newpassword' WHERE id='$ids'");

    echo "new values have been updated succesfully";

    mysqli_close($conn);
    include('links.php');
?>