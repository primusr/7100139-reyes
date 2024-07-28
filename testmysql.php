<?php
$servername = "localhost";
$username = "root";
$password = "052781";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select data
$sql = "SELECT User, password_expired  FROM user";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Database Table Display</title>
  
</head>
<body>

<h1>Users Table</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Password Expired</th>
           
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               
                echo "<td>" . $row["User"] . "</td>";
                echo "<td>" . $row["password_expired"] . "</td>";
                
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No results found</td></tr>";
        }
        ?>
    </tbody>
</table>

<?php
// Close connection
$conn->close();
?>

</body>
</html>
