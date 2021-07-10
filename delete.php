<?php
echo "chose an id to delete : ";

$conn = new mysqli("localhost" ,"root" ,"","testsite");


//  Check connection
if (mysqli_connect_errno()) {
    echo "fail to connect";
    exit();

}
// $result =mysqli_query("SELECT * FROM users");

$sql = "SELECT id, name, email, password FROM users    ";
$result = mysqli_query($conn, $sql);
echo "<table width=\"90%\" align=center border=2 >
  <tr>
<th  width=\"20%\" align=center bgcolor=grey>ID</th>
    <th width=\"20%\" align=center bgcolor=grey>Namee</th>
    <th width=\"20%\" align=center bgcolor=grey>Email</th>
    <th width=\"20%\" align=center bgcolor=grey >Password</th>
  </tr>";



while($row = mysqli_fetch_assoc($result)){
    // echo "name: " . $row["name"]. "   - email: " . $row["email"]. "    " . $row["password"]. "<br>";
    $ids= $row['id'];
    $name= $row['name'];
    $email =$row['email'];
    $password =$row['password'];

    echo "<tr><td align=center>
 <a href=\"delete1.php?ids=$ids&names=$name&emails=$email&passwords=$password\">$ids</a></td>
        <td>$name</td><td>$email</td><td>$password</td>
        </tr>";

}
echo "</table>";


mysqli_close($conn);
include('links.php');
?>
