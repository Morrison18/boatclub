<?php
include '../php/header.php';
include '../functions/Connect.php';

/*
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
*/
// Escape user inputs for security
$myfunction = dbConnect();

$fname = $_POST['fname'];

$lname = $_POST['lname'];

$email = $_POST['email'];

$contact = $_POST['contact'];

// attempt insert query execution

mysqli_query($myfunction, "INSERT INTO members (fname, lname, email, contact) VALUES ('$fname', '$lname', '$email', '$contact')");

if (mysqli_affected_rows($myfunction) > 0) {
    echo 'Records added successfully.';
} else {
    echo "ERROR: Could not execute $sql. ".mysqli_error($myfunction);
}

// close connection
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


mysqli_close($myfunction);

?>
<html>
    <title>added</title>
<body>
    <br>
    <button type="button" home><a href="../html/home.html">Home</button> 
        <button type="button" home><a href="../html/insert.html">Add another</button>
        <button type="button" home><a href="../html/select.php">See members</button>
        <button type="button" home><a href="../html/delete.php">Remove member</button>
         <button type="button" home><a href="../html/update.html">Update</button>
      <br>  
    </body>
</html>