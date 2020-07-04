<html>
<body>


<?php
echo '<a href="SpaHomePage.php">Back</a><br>';

echo "<h2>Salaries</h2>";

$conn = new mysqli("localhost", "root", "", "spaco");
$sql= "SELECT * FROM salaries";
$result = $conn->query($sql);

if($result->num_rows > 0){
	echo "<table style='border: solid 1px black;'>
		<tr>
			<th>Salary ID</th>
			<th>Salary</th>
			
			</tr>";}


while($row = $result -> fetch_assoc()){
	echo'<tr>
		<td> '.$row['SAL_ID'].' </td>
		<td> '.$row['salary'].' </td>
	
			</tr>';}

echo "</table>";







?>