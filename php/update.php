<?php
 include '../php/header.php';
 include '../functions/Connect.php';


 $myfunction = dbConnect();

 if (isset($_POST ['submit'])) {
     $memberId = $_POST ['memberId'];
     $fname = $_POST ['fname'];

     if ($memberId && $fname){
       

        // Check if member id exists
        $exists= mysqli_query($myfunction,"SELECT * from members WHERE memberId = '$memberId' ") or die ("Query could not be completed");

        // Update the location field in member table
         if (mysqli_num_rows($exists) !=0){
             mysqli_query($myfunction, "UPDATE members set fname = '$fname' WHERE memberId = '$memberId' ") or die ("Update could not be complete");
             echo "Successful Update";
         }else echo "Unsuccessful update";
     }
     else echo "YOU MUST ENTER VALUES FOR BOTH FEILDS";
    
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
 }



//buttons
echo " <button type='button' ><a href='../html/home.html'>Home</button>";
echo " <button type='button' ><a href='select.php'>Show Members</button>";
echo " <button type='button' ><a href='../html/insert.html'>Add</button>";
echo " <button type='button' ><a href='delete.php'>Remove member</button>";
echo " <button type='button' ><a href='../html/update.html'>update</button>";


//4.  Release returned data 

mysqli_free_result($result);

//5.  Close database connection

mysqli_close($myfunction);
?>
