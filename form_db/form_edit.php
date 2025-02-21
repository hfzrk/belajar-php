<?php
include("config.php");

// kalau tidak ada id di qury string
if (!isset($_GET['id'])) {
	header('Location: list_siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

//buat query untuk ambil data dari database
$sql = "SELECT * FROM data_siswa WHERE id=$id";
$query = mysqli_query($connnect, $sql);
$siswa = mysqli_fetch_assoc($query);

//jika data yang di edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
	die("Data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulir Edit Siswa | SMK</title>
</head>
<body>
	<h3>Formulir Edit Siswa</h3>
	<form action="proses_edit.php" method="post">
		<fieldset>
			<legend>Edit Data Siswa</legend>
			<input type="hidden" name="id" value="<?php echo $siswa['id']; ?>">
			<p>
				<label for="nama">Nama:</label>
				<input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $siswa['nama']; ?>">
			</p>
			<p>
				<label for="alamat">Alamat:</label>
				<textarea name="alamat"><?php echo $siswa['alamat']; ?></textarea>
			</p>
			<?php $jk = $siswa['kelamin']; ?>
			<p>
				<label>Jenis Kelamin:</label>
				<input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : ""; ?>> Laki-laki
				<input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : ""; ?>> Perempuan
			</p>
			<?php $agama = $siswa['agama']; ?>
			<p>
				<label for="agama">Agama:</label>
				<select name="agama">
					<option value="islam" <?php echo ($agama == 'islam') ? "selected" : ""; ?>>Islam</option>
					<option value="kristen" <?php echo ($agama == 'kristen') ? "selected" : ""; ?>>Kristen</option>
					<option value="katolik" <?php echo ($agama == 'katolik') ? "selected" : ""; ?>>Katolik</option>
					<option value="hindu" <?php echo ($agama == 'hindu') ? "selected" : ""; ?>>Hindu</option>
					<option value="budha" <?php echo ($agama == 'budha') ? "selected" : ""; ?>>Budha</option>
					<option value="atheis" <?php echo ($agama == 'atheis') ? "selected" : ""; ?>>Atheis</option>
				</select>
			</p>
			<p>
				<label for="asal_sekolah">Sekolah Asal:</label>
				<input type="text" name="asal_sekolah" placeholder="Nama sekolah" value="<?php echo $siswa['asal_sekolah']; ?>">
			</p>
			<p>
				<input type="submit" name="simpan" value="Simpan">
			</p>
		</fieldset>
	</form>
</body>
</html>