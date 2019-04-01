<?php
$DB = new mysqli("mysql.eecs.ku.edu", "m954c512", "yiemeKu7", "m954c512");
if ($DB->connect_errno) 
{
    printf("Connect failed: %s\n", $DB->connect_error);
    exit();
}
$username = $_POST["username"];
$post = $_POST["post"];
if ($username == NULL || $post == NULL)
{
	echo "Can't insert post";
}
else
{
	$query = "INSERT INTO Posts (content, author_id) VALUES ('$post', (SELECT user_id FROM Users WHERE user_id='$username'))";
	if ($result = $DB->query($query)){
		echo "Post has been inserted";
	}
	else {
		echo "can't insert post";
	}
}
$DB->close();
?>