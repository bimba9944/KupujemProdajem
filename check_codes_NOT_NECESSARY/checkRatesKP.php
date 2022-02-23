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

$sql = "SELECT idR, idCustomerR, idSellerR, gradeR, commentR FROM ratesKP";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["idR"]. " - Customer ID: ". $row["idCustomerR"]. " - Seller ID: ". $row["idSellerR"]." - Grade: ". $row["gradeR"]." - Comment: ". $row["commentR"]."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>