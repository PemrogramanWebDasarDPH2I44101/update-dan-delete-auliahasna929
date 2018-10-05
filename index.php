<?php
require_once("db.php");

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$fakultas = $_POST['fakultas'];

$sql = "INSERT INTO mhs(nim, nama, prodi, fakultas)
		VALUES ('$nim', '$nama', '$prodi', '$fakultas')";



if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";

}else{
	echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}		

mysqli_close($conn);
echo "silahkan klik <a href='list.php'>link ini</a>";
?> 
