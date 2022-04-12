<?php
require 'config.php';
function readData()
{
global $con;
$sql = "SELECT username, password, gender, email, Year, phone, address FROM register";
$result = $con->query($sql);
if ($result->num_rows > 0) 
{
echo ("<table border='1'>");
while($row = $result->fetch_assoc()){
echo ("<tr>");
echo ("<td>". $row['username']. "</td>");
echo ("<td>" . $row['password'] . "</td>");
echo ("<td>" . $row['gender'] . "</td>");
echo ("<td>" . $row['email'] . "</td>");
echo ("<td>" . $row['Year'] . "</td>");
echo ("<td>" . $row['phone'] . "</td>");
echo ("<td>" . $row['address'] . "</td>");
echo ("</tr>");
}
echo ("</table>");
}
else 
{
echo "No results";
}
$con->close();
}
readData();
?>



