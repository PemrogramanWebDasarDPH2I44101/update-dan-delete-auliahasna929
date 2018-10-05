<?php
require_once("db.php");

$nim =$_POST['nim'];
$nama =$_POST['nama'];
$prodi =$_POST['prodi'];
$fakultas =$_POST['fakultas'];

$sql = "UPDATE mhs SET nama='$nama', prodi='$prodi', fakultas='$fakultas' WHERE nim=$nim";
if(mysqli_query($conn,$sql)){
	echo "Record updated succesfully";

}else {
	echo "Error updating record: " . $sql."<br>" . mysqli_error($conn);
}