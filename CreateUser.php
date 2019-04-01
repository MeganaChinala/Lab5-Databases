<?php
$DB = new mysqli("mysql.eecs.ku.edu", "m954c512", "yiemeKu7", "m954c512");
if ($DB->connect_errno) 
{
    printf("Connect failed: %s\n", $DB->connect_error);
    exit();
}
$username = $_POST["username"];
$sql = "INSERT INTO Users (user_id) VALUES (\"$username\");";
if ($DB->query($sql) === TRUE)
{
    echo "User Added Successfully";
}
else
{
    echo "Error: " . $sql . "<br>" . $DB->error;
}
$DB->close();
?>