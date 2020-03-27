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
}
*/
$myfunction = dbConnect();

$result = mysqli_query($myfunction, 'select * from members');

?>

<table style="border: 1">
    <tr>
       <th>Member ID</th>
        <th>first name</th>
        <th>last name</th>
        <th>E-mail</th>
        <th>Mobile</th>
    <tr>
<?php

$i = 1;
/* puts data from DB into row*/
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $memberId = $row['memberId'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $contact = $row['contact']; ?>

<tr>
	
	<td><?php echo $memberId; ?></td>
	<td><?php echo $fname; ?></td>
	<td><?php echo $lname; ?></td>
	<td><?php echo $email; ?></td>
	<td>0<?php echo $contact; ?></td>
	<td>
		<button type="button"><a href ="delete.php?delete=<?php echo $memberId; ?>"onclick="return confirm('Are you sure?');">Delete</a></button>
	</td>
	
	
</tr>


	<?php

    ++$i;
}
    if (isset($_GET['delete'])) {
        $delete_id = $_GET['delete'];

        mysqli_query($myfunction, "delete from members where memberId = '$delete_id'");
        //puts the delete button after table row
        header('location: delete.php');
    }

    ?>
</table>

<?php

echo " <button type='button' ><a href='../html/home.html'>Home</button>";
echo " <button type='button' ><a href='../html/insert.html'>Add</button>";
echo " <button type='button' ><a href='../html/update.html'>update</button>";

?>