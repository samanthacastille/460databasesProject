<html>
<body>


<?php
echo '<a href="SpaHomePage.php">Back</a><br>';

echo "<h2>Employees</h2>";
$conn = new mysqli("localhost", "root", "", "spaco");
$sql= "SELECT * FROM employees";
$result = $conn->query($sql);

if($result->num_rows > 0){
	echo "<table style='border: solid 1px black;'>
		<tr>
			<th>SSN</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Phone Number</th>
			<th>Service ID</th>
			<th>Salary ID</th>

			</tr>"
;}

while($row = $result -> fetch_assoc()){
	echo'<tr>
		<td> '.$row['SSN'].' </td>
		<td> '.$row['fName'].' </td>
		<td> '.$row['lName'].' </td>
		<td> '.$row['phone'].' </td>
		<td> '.$row['serv'].' </td>
		<td> '.$row['salary_id'].' </td>
			</tr>';}

echo "</table><br>";








?>