<html>
<body>


<?php
echo '<a href="SpaHomePage.php">Back</a><br>';

echo "<h2>Services</h2>";
$conn = new mysqli("localhost", "root", "", "spaco");
$sql= "SELECT * FROM services";
$result = $conn->query($sql);

if($result->num_rows > 0){
	echo "<table style='border: solid 1px black;'>
		<tr>
			<th>Service ID</th>
			<th>Service Name</th>
			<th>Cost($)</th>
			

			</tr>";}


while($row = $result -> fetch_assoc()){
	echo'<tr>
		<td> '.$row['service_no'].' </td>
		<td> '.$row['service_name'].' </td>
		<td> '.$row['cost'].' </td>
	
			</tr>';}

echo "</table>";






?>