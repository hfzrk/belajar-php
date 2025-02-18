<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Pendaftaran Siswa baru | SMK Coding</title>
</head>
<body>
    <header>
        <h1>Formulir Pendaftaran Siswa Baru</h1>
    </header>

<form action="proses_pendaftaran.php" method="post">
    <fieldset>
        <p>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama">
            <p>
                <label for="alamat">Alamat:</label>
                <textarea name="alamat" id="alamat"></textarea>
            </p>
            <p>
                <label>Jenis Kelamin:</label>
                <input type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
                <label for="laki-laki">Laki-laki</label>
                <input type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                <label for="perempuan">Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama:</label>
                <select name="agama" id="agama">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="hindu">Hindu</option>
                    <option value="buda">Buda</option>
                    <option value="ateis">Ateis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" id="sekolah_asal" placeholder="Nama sekolah terakhir">
            </p>
            <p>
                <input type="submit" name="daftar" value="Daftar">
            </p>
        </p>
    </fieldset>
</form>


</body>
</html>