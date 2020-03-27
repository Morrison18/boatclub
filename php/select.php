<?php
include 'header.php';
include '../functions/Connect.php';
/*
function dbConnect()
{
    $servername = 'localhost';
    $username = 'root';
    $password = 'test';
    $dbname = 'boatclub';

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die('Connection failed: '.mysqli_connect_error());
    }
    echo 'succesfully connected';

    return  $conn;
}*/
$myfunction = dbConnect();
  

//2.  Perform Database Query

$result = mysqli_query($myfunction,"select * from members");

echo "<table border='1'>
<tr>
<th>Member ID</th>
<th>first name</th>
<th>last name</th>
<th>E-mail</th>
<th>Mobile</th?
</tr>";

//3. Use returned data 

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['memberId'] . "</td>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>0" . $row['contact'] ."</td>";
  echo "</tr>";
  }
echo "</table>";

echo " <button type='button' ><a href='../html/home.html'>Home</button>";
echo " <button type='button' ><a href='../html/insert.html'>Add</button>";
echo " <button type='button' ><a href='../html/delete.html'>Delete</button>";
echo " <button type='button' ><a href='../html/update.html'>update</button>";

//4.  Release returned data 

mysqli_free_result($result);

//5.  Close database connection

mysqli_close($myfunction);
?> 


