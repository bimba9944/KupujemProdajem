<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "KPdatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT idL, lastId FROM lastProductId";
$result = $conn->query($sql);
$lastid = "";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> idL: ". $row["idL"]. " - Last Product INSERTED id: ". $row["lastId"]."<br>";
    }
} else {
    echo "0 results";
}


$conn->close();
?>

</body>
</html>