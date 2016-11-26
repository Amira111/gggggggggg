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
$conn = mysqli_connect(SERVER_NAME,USERNAME,PASSWORD,DB_NAME);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "CREATE TABLE os (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
nbuser VARCHAR(30) NOT NULL,
nbversion VARCHAR(50) NOT NULL,
nbsmart VARCHAR(30) NOT NULL 
)";
if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO os (name, nbuser, nbversion,nbsmart)
VALUES ('Android', '100', '23','100')";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO os (name, nbuser, nbversion,nbsmart)
VALUES ('iOS', '200', '20','200')";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO os (name, nbuser, nbversion,nbsmart)
VALUES ('BlackBerry', '70', '21','70')";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO os (name, nbuser, nbversion,nbsmart)
VALUES ('WindowsPhone', '60', '20','60')";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>
