<?php  
error_reporting(E_ALL);
ini_set('display_errors', 1);
$a = $_REQUEST['name1']; 
$con = pg_connect("host=localhost port=5432 dbname=rj user=rj password=rj") or die("Connection failed: " . pg_last_error());
$result = pg_query($con, "SELECT * FROM EMP WHERE ename='$a'"); 

echo "<table border=1>"; 
echo "<tr>"; 
 
echo "<th>Name</th>"; 
echo "<th>designation</th>"; 
echo "<th>Salary</th>"; 
echo "</tr>"; 

while ($row = pg_fetch_assoc($result)) { 
    echo "<tr>"; 
     
    echo "<td>".$row['ename']."</td>"; 
    echo "<td>".$row['designation']."</td>"; 
    echo "<td>".$row['salary']."</td>"; 
    echo "</tr>"; 
} 

echo "</table>"; 

// Close the database connection
pg_close($con);
?>

