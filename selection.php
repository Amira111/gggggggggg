<?php
$servername = "localhost";
$username = "amira";
$password = "amira";
$dbname = "logiciels";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM os where name like 'Android'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);

echo "".$row["id"]." ".$row["name"]." ".$row["nbuser"]."";
}
mysqli_close($conn);
?>
