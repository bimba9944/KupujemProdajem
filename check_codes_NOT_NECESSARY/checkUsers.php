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

$sql = "SELECT idU, firstnameU, lastnameU, emailU, usernameU, passwdU, accountTypeU, statusLogInOutU, blockedU FROM allUsersKP";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["idU"]. " - Name: ". $row["firstnameU"]. " - Surname: ". $row["lastnameU"]." - Email: ". $row["emailU"]." - Username: ". $row["usernameU"]. " - Password: ". $row["passwdU"]." - AccountType: ". $row["accountTypeU"]." - Status: ". $row["statusLogInOutU"]." - Blocked: ". $row["blockedU"]."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
