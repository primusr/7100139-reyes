<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test MySql</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {     
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


?>    
</body>
</html>

<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {     
    die("Connection failed: " . $conn->connect_error);
}
echo "<p>Connected successfully</p>";


?> -->
