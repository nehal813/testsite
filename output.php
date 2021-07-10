<?php
 $conn = new mysqli("localhost" ,"root" ,"","testsite");


   //  Check connection
    if (mysqli_connect_errno()) {
        echo "fail to connect";
        exit();

    }
   // $result =mysqli_query("SELECT * FROM users");

    $sql = "SELECT name, email, password FROM users";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
        
        echo "name: " . $row["name"]. "   - email: " . $row["email"]. "    " . $row["password"]. "<br>";
        
        //} else {
        // echo "0 results";
    }



    mysqli_close($conn);
?>