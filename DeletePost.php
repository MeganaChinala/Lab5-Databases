<?php
$DB = new mysqli("mysql.eecs.ku.edu", "m954c512", "yiemeKu7", "m954c512");
$array = $_POST["post"];
for ($i = 0; $i < count($array); $i++)
{
	//delete post
	$query = "DELETE FROM Posts WHERE post_id='$array[$i]'";
	if ($DB->query($query))
	{
		echo "Post #" . $array[$i] . " has been successfully deleted<br>";
	}
	else
	{
		echo "Error deleting post #" . $array[$i] . "<br>";
	}
}
$DB->close();
?>
