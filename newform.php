<?php
require_once("db.php");
$id = $_GET["nim"];
$sql ="SELECT * FROM mhs WHERE nim =$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="update.php" method="POST">
	NIM : <input type="text" name="nim" value="<?php echo $row["nim"]; ?>" disabled><br>
			<input type="hidden" name="nim" value="<?php echo $row["nim"]; ?>"><br><br>
			
	Nama :<input type="text" name="nama" value="<?php echo $row["nama"]; ?>"><br><br>

	Prodi :<input type="text" name="prodi" value="<?php echo $row["prodi"]; ?>"><br><br>

	fakultas :<input type="text" name="fakultas" value="<?php echo $row["fakultas"]; ?>"><br><br>

	<input type="submit" name="kirim" value="kirim">

</form>
</body>
</html>