<?php

//database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password', 'database');

echo "<a href='index.html'>Home</a> <br>";

$con = mysqli_connect('localhost', 'root', '', 'db_contact');

$sql = "SELECT * FROM tbl_contact";

//Query the DB
$rs = mysqli_query($con, $sql);
echo "<table border=1>";

echo "<tr>";

echo "<th> Id </th>";
echo "<th> Name </th>";
echo "<th> Email </th>";
echo "<th> Phone </th>";

echo "</tr>";

while ($row = mysqli_fetch_assoc($rs)) {
	echo "<tr>";
		echo "<td>";
			echo "{$row['id']}";
		echo "</td>";
		echo "<td>";
			echo "{$row['fldName']}";
		echo "</td>";
		echo "<td>";
			echo "{$row['fldEmail']}";
		echo "</td>";
		echo "<td>";
			echo "{$row['fldPhone']}";
		echo "</td>";
	echo "</tr>";
	// echo "Name : {$row['fldName']} <br>".
	// 	"Email : {$row['fldEmail']} <br>".
	// 	"Email : {$row['fldEmail']} <br>".
	// 	// "Message: {$row['flsMessage']} <br>".
	// 	"------------------------------------";
}
echo "</table>";
mysqli_close($con)

?>