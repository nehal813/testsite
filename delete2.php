<?php


$conn = new mysqli("localhost" ,"root" ,"","testsite");


//  Check connection
if (mysqli_connect_errno()) {
    echo "fail to connect";
    exit();

}
// $result =mysqli_query("SELECT * FROM users");

$sql = "DELETE FROM users WHERE id='".$_REQUEST['id']."'    ";
$result = mysqli_query($conn, $sql);

echo "the user has been deleted succesfully";


mysqli_close($conn);
include('links.php');
?>