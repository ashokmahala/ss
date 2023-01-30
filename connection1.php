<!DOCTYPE html>
<html>
<body>
<?php
$servername = "database-2.ch8px2hflgli.ap-south-1.rds.amazonaws.com";
$username = "master";
$password = "master1234";
$dbname = "database2";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from login";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Userid: ". $row["userid"]. " - Password: ". $row["pwd"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>