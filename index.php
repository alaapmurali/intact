<html>
	<body>
		<h1>Welcome to Intact!</h1>

		<form action="addContact.php">
			<input type="submit" value="Add a Contact">
		</form>

		<form action="removeContact.php">
			<input type="submit" value="Remove a Contact">
		</form>

		<?php
			include "bubbleSort.php";
			$servername = "localhost";
			$username = "root";
			$password = "mysql";
			$dbname = "INTACT";

			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM CONTACT";
			$result = $conn->query($sql);
			$contacts = array();
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					//add each row to an array
					$contacts[] = $row["lastName"];
				}
				$contacts = bubbleSort($contacts);
				$i = 0;
				while ($i < count($contacts)) {
					$sql = "SELECT * FROM CONTACT WHERE lastName='$contacts[$i]'";
					$result = $conn->query($sql);
					$row = $result->fetch_assoc();
					echo ($row['lastName'] . ", " . $row['firstName'] . " " . $row['zipCode'] . " " . $row['dateOfBirth'] . "<br>");
					echo ("<br>");
					$i++;
				}
			}
		?>





	</body>
</html>

