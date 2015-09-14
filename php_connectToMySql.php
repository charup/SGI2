<?php
$servername = "localhost";
$username = "root";//"username";
$password = "UnivPass123";//"password";
	$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

		/*// Create database
		$sql = "CREATE DATABASE myDB";
		if ($conn->query($sql) === TRUE) {
			echo "Database created successfully";
		} else {
			echo "Error creating database: " . $conn->error;
		}*/
		
		/*When you create a new database, you must only specify the first three arguments to the mysqli object (servername, username and password).
		
		If you have to use a specific port, add an empty string for the database-name argument, like this: new mysqli("localhost", "username", "password", "", port)
		*/

			// sql to create table

			$sql = "CREATE TABLE Player (
			PlayerId INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			Name VARCHAR(45) NOT NULL,
			Credits INT,
			LifetimeSpins INT,
			SaltValue INT
			)";

			if ($conn->query($sql) === TRUE) {
				echo "Table MyGuests created successfully";
			} else {
				echo "Error creating table: " . $conn->error;
			}
		
// Close the Connection
$conn->close();
?> 