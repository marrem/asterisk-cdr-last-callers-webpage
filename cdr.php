<?php

function printCdrTable($tableClass) {

	include 'connect.php';

	$conn = connectToDb();

	$sql = "SELECT * FROM cdr ORDER BY start DESC limit 10";
	$result = $conn->query($sql);
	if ($conn->error) {
	    die($conn->error);
	}

	if ($result->num_rows > 0) {
	    // output data of each row

	# start 
	# src
	# dst
	# disposition


	    echo "<table class=\"$tableClass\">";
	    echo "<tr><th>start</th><th>source</th><th>dest</th><th>disp</th></tr>";
	    while($row = $result->fetch_assoc()) {
	    echo "<tr>";
	    echo "<td>$row[start]</td><td>$row[src]</td><td>$row[dst]</td><td>$row[disposition]</td>";
	    echo "</tr>";

	    }
	    echo "</table>";
	} else {
	    echo "0 results";
	}
	$conn->close();
}

?>

