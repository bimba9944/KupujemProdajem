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

$sql = "SELECT idP, idS, titleP, priceP, categoryP, locationP, quantityP, deliveryTypeP, aboutP FROM allProductsKP";
$result = $conn->query($sql);
$lastid = "";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> idP: ". $row["idP"]. " - idSeller: ". $row["idS"]. " - Title: ". $row["titleP"]." - Price: ". $row["priceP"]." - Category: ". $row["categoryP"]. " - Location: ". $row["locationP"]." - Quantity: ". $row["quantityP"]." - Delivery Type: ". $row["deliveryTypeP"]." - About: ". $row["aboutP"]."<br>";
        $lastid = $row["idP"]; 
    }
} else {
    echo "0 results";
}
echo "<br>Last ID: ".$lastid;
$nextId = $lastid + 1;
echo "<br>Next ID: ".$nextId;


$conn->close();
?>

</body>
</html>