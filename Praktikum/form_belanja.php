<!DOCTYPE html>
<html>
<body>
		<fieldset style="background-color:#CCCCFF;">
			<legend style="text-align: left;">
				<h1>Belanja Online</h1>
			</legend>
			<form method='POST' action="form_belanja.php" id="form1"style="display: flex; align-items: center; justify-content:center;">
				<table style="width: 25%">
					<tr>
						<td>Customer</td>
						<td>:</td>
						<td><input type='text' name='nama' /></td>
					</tr>
					<tr>
						<td>Pilih Produk</td>
						<td>:</td>
						<td>
							<select name="produk" id="">
								<option value="">--- Pilih Produk ---</option>
								<option value="TV">TV : Rp4.200.000</option>
								<option value="Kulkas">Kulkas : Rp3.100.000</option>
								<option value="Mesin Cuci">Mesin Cuci : Rp3.800.000</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Jumlah</td>
						<td>:</td>
						<td><input name="jumlah" type="text" /></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<button type="submit">Kirim</button>
						</td>
					</tr>
				</table>
				
			</form>
		</fieldset>
	</body>
</html>

<!-- TANGKAP REQUEST -->
<?php
$nama = $_POST['nama'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
switch ($produk) {
    case 'TV': $hargaSatuan = 4200000; break;
    case 'Kulkas': $hargaSatuan = 3100000; break;
    case 'Mesin Cuci': $hargaSatuan = 3800000; break;
    default: $hargaSatuan = 0; break;
}
$total = $jumlah * $hargaSatuan;
?>

<!-- CETAK -->
Nama Customer : <?= $nama ?>
<br>
Produk Pilihan : <?= $produk ?>
<br>
Jumlah Belanja : <?= $jumlah ?>
<br>
Total Belanja : <?= $total ?>
