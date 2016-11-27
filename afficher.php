<?php
define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME',getenv('OPENSHIFT_GEAR_NAME'));
echo ''.DB_HOST."".DB_USER."".DB_PASS;
    $servername = "172.30.170.107";
$username = getenv('MYSQL_USER') ;
$password =  getenv('MYSQL_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');
echo($_ENV["OPENSHIFT_APP_NAME"]);
echo $username;
echo $password;
echo $dbname;
// Create connection
$conn = mysqli_connect($servername,'amira','amira','logiciels');
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
    echo "New record created successfullyy";
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
