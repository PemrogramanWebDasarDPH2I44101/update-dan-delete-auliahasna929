<?php
require_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border=1>
	<thead>
		
		<th>Nim</th>
		<th>Nama</th>
		<th>Prodi</th>
		<th>fakultas</th>
		<th>aksi</th>
	</thead>
	<tbody>
		<?php
		$sql = "SELECT * FROM mhs";
		$result = mysqli_query($conn, $sql);
$row = mysqli_num_rows($result);

		if ($row > 0 ) {
			//output data of each row
			while($row = mysqli_fetch_array($result)){
				$id = $row["nim"];
				echo "<tr>";
				echo "<td>" . $row["nim"] . "</td";
				echo "<td>" . $row["nama"] . "</td";
				echo "<td>" . $row["prodi"] . "</td";
				echo "<td>" . $row["fakultas"] . "</td";
				echo "<td>" ."<a href ='newform.php?nim=$id'>edit</a>|a href ='delete.php'?nim$id'>hapus</a>"."</td>";
				echo "</tr>";
			}
		}else {
			echo "<tr><td colspan='4' align='center'>0 result.</td></tr>";
		}
?>
	</tbody>
</table>
</body>
</html>
