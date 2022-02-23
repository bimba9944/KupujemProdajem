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

$sql = "SELECT idO, idCustomerO, idSellerO, idProductO, acceptedO, deniedO, cancelledO, paymentTypeO, quantityO FROM KPallOrders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["idO"]. " - Customer ID: ". $row["idCustomerO"]. " - Seller ID: ". $row["idSellerO"]." - Product ID: ". $row["idProductO"]." - Accepted: ". $row["acceptedO"]. " - Denied: ". $row["deniedO"]." - Cancelled: ". $row["cancelledO"]." - Payment: ". $row["paymentTypeO"]." - Quantity: ". $row["quantityO"]."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>