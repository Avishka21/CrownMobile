<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
<?php
include 'Regi1.php';

$conn = OpenCon();

echo "Connected Successfully";


	
	if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO registration (FullName, NIC, PhoneNumber, Email, Password)
VALUES ('avishka', '200019302220', '0774684649' ,'avishkavinod01@gmail.com','123')";

if ($conn->query($sql) === TRUE) {
  echo " successfully Connected";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
</html>