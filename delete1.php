<?php
echo "chose an id to delete : ";

$conn = new mysqli("localhost" ,"root" ,"","testsite");


//  Check connection
if (mysqli_connect_errno()) {
    echo "fail to connect";
    exit();

}
// $result =mysqli_query("SELECT * FROM users");

$sql = "SELECT id, name, email, password FROM users WHERE id='".$_REQUEST['ids']."'    ";
$result = mysqli_query($conn, $sql);
echo "
<table width=\"90%\" align=center border=2>
    <tr>
        <th width=\"20%\" align=center bgcolor=grey>ID</th>
        <th width=\"20%\" align=center bgcolor=grey>Namee</th>
        <th width=\"20%\" align=center bgcolor=grey>Email</th>
        <th width=\"20%\" align=center bgcolor=grey>Password</th>
    </tr>";



while($row = mysqli_fetch_assoc($result)){
    // echo "name: " . $row["name"]. "   - email: " . $row["email"]. "    " . $row["password"]. "
  //  <br />;
    $ids= $row['id'];
    $name= $row['name'];
    $email =$row['email'];
    $password =$row['password'];

    echo " <tr>
        <td align=center>$ids</td>
        <td>$name</td>
        <td>$email</td>
        <td>$password</td>
    </tr>";


echo "</table>";
}

mysqli_close($conn);

?>

<form method="POST" action="delete2.php">

    <p>you sure want to delete : :</p>
    <input type="submit" name="delete" />
    <input typt="hidden" name="id" value="<?php echo $_REQUEST['ids']  ;?>" />
</form>
<?php include('links.php');?>