<!DOCTYPE html>
<html>
<head>
	<title>Metode Depresiasi | SoTY</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<center>
		<form action="<?php $PHP_SELF ?>" method="post">
		<h1 class="title"><font color="white">Sum of The Year</font></h1>
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
				<td>Umur Berguna</td>
				<td>:</td>
				<td><input type="text" name="ub"></td>
			</tr>
		</table>
		<button type="Submit" name="submit">Submit</button>
		</form>
		<div class="isian">
		<?php
		if(isset($_POST["submit"])){
			$ha = $_POST["ha"];
			$res = $_POST["res"];
			$ub = $_POST["ub"];
			if (is_numeric($ha)) {
				if (is_numeric($res)) {
					if (is_numeric($ub)) {
						echo "Harga Aset = $ha <br> Residu = $res <br> Umur Berguna = $ub <br>";
						$jt = (($ub * ($ub + 1)/2));
						$da = $ha - $res;
						$x = 1;
						echo "Jumlah Tahun = $jt <br> Dasar Penyusutan = $da <br>";
						for ($i = $ub; $i > 0; $i--) {
							$hitung = ($i / $jt) * $da;
							echo "Penyusutan pada tahun $x adalah $hitung <br>";
							$x = $x + 1;
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