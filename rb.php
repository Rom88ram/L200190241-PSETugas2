<!DOCTYPE html>
<html>
<head>
	<title>Metode Depresiasi | RB</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<center>
		<form action="<?php $PHP_SELF ?>" method="post">
		<h1 class="title"><font color="white">Reducing Balance</font></h1>
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
				<td>Rasio</td>
				<td>:</td>
				<td><input type="text" name="ras" placeholder="Dalam %"></td>
			</tr>
		</table>
		<button type="Submit" name="submit">Submit</button>
		</form>
		<div class="isian">
		<?php
		if(isset($_POST["submit"])){
			$ha = $_POST["ha"];
			$res = $_POST["res"];
			$ras = $_POST["ras"];
			if (is_numeric($ha)) {
				if (is_numeric($res)) {
					if (is_numeric($ras)) {
						echo "Harga Aset = $ha <br> Residu = $res <br> Persentase Depresiasi = $ras <br>";
						echo "Berikut ini nilai penyusutan 3 tahun pertama :<br>";
						for ($i=1; $i <= 3 ; $i++) {
							$hitung = ($ha - $res)*($ras/100); 
							echo "Penyusutan pada tahun $i adalah $hitung <br>";
							$ha = $ha - $hitung;
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