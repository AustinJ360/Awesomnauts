<?php
require_once(__DIR__ . "/../model/config.php");

$query = "SELECT * FROM posts";
$result = $_SESSION["connection"]->query($query);

if($result){
	while($row = mysqli_fetch_array($result)){
		echo "<div class='post'>";
		echo"<header>" . $row['title'] . "</header>";
		echo "<br />";
		echo"<section>" . $row['post'] . "</section>";
		echo "<br />";
		echo "</div>";
 
	}
}
?>