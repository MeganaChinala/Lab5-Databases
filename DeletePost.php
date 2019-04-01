<?php
$DB = new mysqli("mysql.eecs.ku.edu", "m954c512", "yiemeKu7", "m954c512");
$array = $_POST["post"];
for ($i = 0; $i < count($array); $i++)
{
	$query = "DELETE FROM Posts WHERE post_id='$array[$i]'";
	if ($DB->query($query))
	{
		echo "Post #" . $array[$i] . " deleted<br>";
	}
	else
	{
		echo "Unable to delete Post #" . $array[$i] . "<br>";
	}
}
$DB->close();
?>
