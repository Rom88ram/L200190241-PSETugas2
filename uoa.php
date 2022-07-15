<!DOCTYPE html>
<html>
<head>
	<title>Metode Depresiasi | UoA</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<center>
		<form action="<?php $PHP_SELF ?>" method="post">
		<h1 class="title"><font color="white">Unit of Activity</font></h1>
		<table class="isian">
			<tr>
				<td>Harga Aset</td>
				<td>:</td>
				<td><input type="text" name="ha"></td>
			</tr>
			<tr>
				<td>Residu</td>
				<td>:</td>
				<td><input type="text" name="res"></td>
			</tr>
			<tr>
				<td>Aktivitas Tahun Pertama</td>
				<td>:</td>
				<td><input type="text" name="atp"></td>
			</tr>
			<tr>
				<td>Aktivitas Total</td>
				<td>:</td>
				<td><input type="text" name="at"></td>
			</tr>
		</table>
		<button type="Submit" name="submit">Submit</button>
		</form>
		<div class="isian">
		<?php
		if(isset($_POST["submit"])){
			$ha = $_POST["ha"];
			$res = $_POST["res"];
			$atp = $_POST["atp"];
			$at = $_POST["at"];
			if (is_numeric($ha)) {
				if (is_numeric($res)) {
					if (is_numeric($atp)) {
						if (is_numeric($at)) {
							echo "Harga Aset = $ha <br> Residu = $res <br> Aktivitas Tahun Pertama = $atp <br> Aktivitas Total = $at <br>";
							$hitung = ($ha - $res) * ($atp/$at);
							echo "Nilai Depresiasi = $hitung <br>";
						}
					}
				}
			}
			else {
				echo "Mohon masukkan data dengan benar!";
			}
		}
		?>
		</div>
		<a href="index.php"><button>Home</button></a>
	</center>
	<bottom><br><br>
		<center class ="title"><font color="white">
		Disusun Oleh : <br>
		Romi Ramadhan / L200190241<br></font>
		</center>
	</bottom>
</body>
</html>