<html>
<body>


<?php

echo '<a href="SpaHomePage.php">Back</a><br>';

echo "<h2>Members</h2>";
$conn = new mysqli("localhost", "root", "", "spaco");
$sql= "SELECT * FROM members";
$result = $conn->query($sql);

if($result->num_rows > 0){
	echo "<table style='border: solid 1px black;'>
		<tr>
			<th>SSN</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Phone Number</th>
			<th>Favorite Service</th>

			</tr>";}


while($row = $result -> fetch_assoc()){
	echo'<tr>
		<td> '.$row['SSN'].' </td>
		<td> '.$row['fName'].' </td>
		<td> '.$row['lName'].' </td>
		<td> '.$row['phone'].' </td>
		<td> '.$row['fav_service'].' </td>

			</tr>';}

echo "</table>";







?>