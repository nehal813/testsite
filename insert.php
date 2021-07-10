<?php
//                مهممممممممممممممممممممممممممممم
$name= $_POST['name'];
$email =$_POST['email'];
$password =$_POST['password'];

if($name && $email && $password){
    $conn = new mysqli("localhost" ,"root" ,"","testsite");

   //  Check connection
    if (mysqli_connect_errno()) {
        echo "fail to connect";
        exit();

    }

        $sql= "INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')";
    /*    if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;

    }
   $conn->close();
}else{
    echo "please fill all the data ";}*/


      $result =mysqli_query($conn,$sql);

    if($result){    // if exist
        echo "New record created successfully";
    }
}else{
    die( "please fill all the data ");
      //.mysqli_error($conn) ;

}


mysqli_close($conn);

include('links.php');
?>