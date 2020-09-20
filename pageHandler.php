<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "cst126_milestone";


// create connection
$conn = new mysqli($servername, $username, $password, $database);

//check if the user entered a Zipcode
$zip = $_POST['Zipcode'];
if($zip < 1){
 $zip = 0;
}




// create sql insert. Insert user input into "users" table
$sqlInsert = "INSERT INTO users (FIRST_NAME, LAST_NAME, USERNAME, PASSWORD, EMAIL, ADDRESS, CITY, STATE, ZIPCODE, COUNTRY)
VALUES(\"$_POST[FirstName]\", \"$_POST[LastName]\", \"$_POST[Username]\", \"$_POST[Password]\", \"$_POST[Email]\", \"$_POST[Address]\", \"$_POST[City]\", \"$_POST[State]\", $zip, \"$_POST[Country]\")";

// execute query
if($conn->query($sqlInsert) === true){
  echo "New Rocord created successfully";
}else{
  echo "Error: " .$sqlInsert . "<br>" . $conn->connect_error;
}

// close connection
$conn->close();
?>