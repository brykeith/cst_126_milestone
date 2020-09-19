<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "cst-116_milestone";

// create connection
$conn = new mysqli($servername, $username, $password, $database);

// create sql insert. Insert user input into "users" table
$sqlInsert = "INSERT INTO users (ID, FIRST_NAME, LAST_NAME, USERNAME, PASSWORD)
VALUES(\"0\", \"$_POST[FirstName]\", \"$_POST[LastName]\", \"$_POST[Username]\", \"$_POST[Password]\")";

// execute query
if($conn->query($sqlInsert) === true){
  echo "New Rocord created successfully";
}else{
  echo "Error: " .$sqlInsert . "<br>" . $conn->error;
}

// close connection
$conn->close();
?>