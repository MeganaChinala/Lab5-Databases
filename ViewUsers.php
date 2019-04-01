<?php
$DB = new mysqli("mysql.eecs.ku.edu", "m954c512", "yiemeKu7", "m954c512");
if ($DB->connect_errno) {
    printf("Connect failed: %s\n", $DB->connect_error);
    exit();
}
echo "<h1>Users</h1>";
$query = "SELECT user_id FROM Users;";
$result = $DB->query($query);
while ($row = $result->fetch_assoc())
{
    echo "" . $row["user_id"] . "<br>";
}
// free result set
$result->free();
$DB->close();
?>