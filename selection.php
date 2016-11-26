<?php
define('SERVER_NAME', getenv('MYSQL_HOST'));
define('USERNAME', getenv('MYSQL_USER'));
define('PASSWORD', getenv('MYSQL_PASSWORD'));
define('DB_NAME', getenv('MYSQL_DATABASE'));
$servername = "172.30.170.107";
$username = "amira";
$password = "amira";
$dbname = "logiciels";

// Create connection
$conn = mysqli_connect(SERVER_NAME,USERNAME , PASSWORD, DB_NAME);
$sql = "SELECT * FROM os where name like 'Android'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);

echo "".$row["id"]." ".$row["name"]." ".$row["nbuser"]."";
}
mysqli_close($conn);
?>
