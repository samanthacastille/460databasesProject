<html>
<body>


<?php

if(isset($_POST['insertmem'])){ //things to do, once the "submit" key is hit

	$ssn=$_POST['SSN'];//get form value SSN attribute
	$fn = $_POST['fName'];//get form value first name attribute
	$ln = $_POST['lName'];//get form values last name attribute
	$ph = $_POST['phone'];//get form values phone attribute
	$fs = $_POST['fav_service'];//get form values favorite service attribute

	$servername = "localhost";// sql server machine name/IP (if your computer is the server too, then just keep it as "localhost"). 
	$username = "root";// mysql username
	$password = "";// sql password
	$dbname  = "spaco";// database name

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "INSERT INTO members VALUES ('$ssn', '$fn', '$ln', '$ph', '$fs')";//embed insert statement in PHP
	$result = $conn->query($sql);

	if($result) //if the insert into database was successful
	{
	echo "Records inserted successfully<br>";
	}
}


echo '<a href="SpaHomePage.php">Back</a><br>';
echo "<h2>Insert New Member</h2>";
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<br/>	<!-- The <br> tag inserts a single line break.-->

<!-- Below, we define components exist in the page (textboxes and submit button) -->
Member SSN : <input type="text" name="SSN"/> 
<br/> <br/>
First Name : <input type="text" name="fName"/>
<br/> <br/>
Last Name : <input type ="text" name ="lName"/>
<br/> <br/>
Phone Number : <input type ="text" name ="phone"/>
<br/> <br/>
Favorite Service : <input type ="text" name ="fav_service"/>
<br/> <br/>
<input type ="submit" value="Insert" name="insertmem"/>

</form>

