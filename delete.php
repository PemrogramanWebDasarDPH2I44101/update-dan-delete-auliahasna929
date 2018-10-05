<?php
require_once("db.php");

$id = $_GET["nim"];

$sql ="DELETE FROM mhs WHERE nim=$id";

if(mysqli_query($conn, $sql)) {
	echo "Record deleted succesfully";
}else {
echo "Error: ".$sql."<br>". mysqli_error($conn);
}
