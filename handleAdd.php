<html>
<body>

	<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "mysql";
		$dbname = "INTACT";

		//create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		//check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$firstName = $_POST["firstName"];
		echo ($firstName . "<br>");
		$lastName = $_POST["lastName"];
		echo ($lastName . "<br>");
		$zipCode = $_POST["zipCode"];
		echo ($zipCode . "<br>");
		$dateOfBirth = $_POST["dateOfBirth"];
		echo ($dateOfBirth . "<br>");
		
		$sql = "INSERT INTO CONTACT(firstName, lastName, zipCode, dateOfBirth)
			VALUES('$firstName', '$lastName', '$zipCode', '$dateOfBirth')";

		if ($conn->query($sql) === TRUE) {
			echo "Contact added to database successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	?>
	<form action="index.php">
		<input type="submit" value="Go to main menu">
	</form>
</body>
</html>



