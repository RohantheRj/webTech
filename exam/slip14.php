<?php
$host = "127.0.0.1"; // IP address of the PostgreSQL server
$port = "5432";      // Port number of the PostgreSQL server
$dbname = "rj";
$user = "rj";
$password = "rj";

// Connection string
$con_string = "host=$host port=$port dbname=$dbname user=$user password=$password";

// Connect to the PostgreSQL database
$con = pg_connect($con_string);

// Check connection and display errors
if (!$con) {
  die("Connection failed: " . pg_last_error());
}

echo "</br>";

// SQL query to select all rows from the Teacher table
$q = "SELECT * FROM teacher;"; // Assuming lowercase column names
$rs = pg_query($con, $q) or die("Cannot execute query: " . pg_last_error());

// Loop through each row and display the data
while ($row = pg_fetch_assoc($rs)) {
  $Tno = $row['tno'];
  $Name = $row['name'];
  $Qualification = $row['qualification'];
  $Salary = $row['salary'];
  echo "$Tno $Name $Qualification $Salary</br>";
}

// Close the connection
pg_close($con);
?>
