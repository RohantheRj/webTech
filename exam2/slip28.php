<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = pg_connect("host=localhost dbname=rj user=rj password=rj");
if (!$conn) {
    die('Connection failed: ' . pg_last_error());
}
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE email='$username' and password='$password'";
$result = pg_query($conn, $sql);
if ($result) {
$num_rows = pg_num_rows($result);
if ($num_rows > 0) {
echo "valid";
} else {
echo "invalid";
}
} else {
echo "Error in query: " . pg_last_error($conn);
}
pg_close($conn);
?>
