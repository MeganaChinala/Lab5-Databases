<?php
$DB = new mysqli("mysql.eecs.ku.edu", "m954c512", "yiemeKu7", "m954c512");
$myUser = $_POST["user"];
echo "<h1>Posts from " . $myUser . "</h1>";
$query = "SELECT * FROM Posts WHERE author_id = '$myUser';";
if ($result = $DB->query($query)) {
	echo "<table>";
	while ($row = $result->fetch_assoc())
	{
	    echo "<tr><td>" . $row["post_id"] . "</td><td>" . $row["content"] . "</td><td>" . $row["author_id"] . "</td></tr>";
	}
	echo "</table>";
	$result->free();
}
else {
	echo "Error executing SQL query";
}
$DB->close();
?>