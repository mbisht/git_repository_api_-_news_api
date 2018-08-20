<?php
// Fetching Values From URL
$user = $_POST['user'];
$comment = $_POST['comment'];

$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("twitter", $connection); // Selecting Database
if (isset($_POST['user'])) {
$query = mysql_query("insert into tweet(user, comment) values ('$user', '$comment')"); //Insert Query
echo "Form Submitted succesfully";
}
mysql_close($connection); // Connection Closed
//header("Location: http://localhost/Vedantu/twitter/twitter.com/Twitter/media.php");
die();

?>